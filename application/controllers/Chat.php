<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function __construct() {

		parent::__construct();
        $this->load->model('Chat_Model', 'chat');
        $this->load->model('Users_Model', 'userm');
    }
    
	public function index() {
		$this->dados['titulo'] = 'ChatZap';
		$this->load->view('chat/index', $this->dados);
    }
    
    public function auth() {
        if(!empty($this->session->userdata('sessao_user'))){
            redirect('Chat/index');
        }

        $this->dados['titulo'] = 'Autenticaçao ChatZap';
		$this->load->view('chat/auth', $this->dados);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function authentication() {
        $email = addslashes(strtoupper($this->security->xss_clean($this->input->post("email"))));
        $pass  = addslashes(md5($this->security->xss_clean($this->input->post("pass"))));

        $user  = $this->userm->getUser($email, $pass);

        if($user) {
            $this->userm->updateWork($user[0]['id'], time());
            
            $this->session->set_userdata("sessao_user", $user);
            redirect('Chat/index');
        } else {
            $this->session->set_flashdata('erro_login', 'Login/Senha inválidos!');
            redirect('');	
        }        
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function updateWorkUser() {
        
        $sessao = $this->session->userdata('sessao_user')[0]['inicio'];

		if($sessao['inicio']) {
            $limit = time() - $this->session->userdata('sessao_user')[0]['inicio'];

            if($sessao['inicio'] >= $limit) {
                $this->userm->updateWork($sessao['id'], time());
            }
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
	public function logoff(){
		if ($this->userm->updateWork($this->session->userdata['sessao_user'][0]['id'], time())) {
            $this->session->unset_userdata("sessao_user");
            redirect('');
        } 
    }
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public function returnListUsers(){
        $result = $this->userm->getAllUsers($this->session->userdata['sessao_user'][0]['id']);
        
        if($result) {
            foreach($result as $row) {
                $result2 = $this->userm->getLastMessageUsers($this->session->userdata['sessao_user'][0]['id'], $row['id']);
 
                $array[] = array(
                    'nome'      => $row['nome'], 
                    'email'     => $row['email'], 
                    'id'        => $row['id'], 
                    'inicio'    => (float) $row['inicio'],
                    'data'      => $result2 ? $result2->data : '', 
                    'mensagem'  => $result2 ? $result2->mensagem : ''
                );
            }

            response($array);
        }
    }
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public function returnMessages(){
        $idTo   = $this->security->xss_clean($this->input->post('id_contato'));
        $idFrom = $this->session->userdata['sessao_user'][0]['id'];

        $result = $this->chat->getAllMessages($idTo, $idFrom);
        
        if($result) {
            $arr['id_sender'] = $idFrom;
            $arr['messages']  = $result;
            
            response($arr);
        }
    }
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public function sendMessage() {
        $idTo    = $this->security->xss_clean($this->input->post('id_contato'));
        $idFrom  = $this->session->userdata['sessao_user'][0]['id'];
        $message = $this->security->xss_clean($this->input->post('mensagem'));
        $nick    = $this->session->userdata['sessao_user'][0]['nick'];

        $result = $this->chat->insertMessages(array(
            'id_de'     => $idFrom,
            'id_para'   => $idTo,
            'nick'      => $nick,
            'mensagem'  => $message,
            'ip'        => $_SERVER['REMOTE_ADDR'],
            'data_hora' => date('Y-m-d H:m:i')

        ));
        
        $this->updateWorkUser();

        if($result) {
            echo 'OK';
        }
	}
}