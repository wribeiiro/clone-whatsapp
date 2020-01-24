<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Chat_Model', 'chat');
        $this->load->model('Users_Model', 'userm');
    }

    public function index()
    {

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function returnListUsers()
    {
        $result = $this->userm->getAllUsers($this->session->userdata['sessao_user']['id']);

        if ($result) {
            foreach ($result as $row) {
                $result2 = $this->userm->getLastMessageUsers($this->session->userdata['sessao_user']['id'], $row['id']);

                $array[] = array(
                    'nome'      => $row['nome'],
                    'email'     => $row['email'],
                    'id'        => $row['id'],
                    'imagem'    => $row['imagem'],
                    'inicio'    => (float) $row['inicio'],
                    'data'      => $result2 ? $result2->data : '',
                    'timestamp' => $result2 ? $result2->timestamp : 0,
                    'mensagem'  => $result2 ? $result2->mensagem : ''
                );
            }

            usort($array, function ($a, $b) {
                return $b['timestamp'] - $a['timestamp'];
            });

            response($array);
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function returnMessages()
    {
        $idTo   = $this->security->xss_clean($this->input->post('id_contato'));
        $idFrom = $this->session->userdata['sessao_user']['id'];

        $result = $this->chat->getAllMessages($idTo, $idFrom);

        if ($result) {
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
    public function sendMessage()
    {
        $idTo    = $this->security->xss_clean($this->input->post('id_contato'));
        $idFrom  = $this->session->userdata['sessao_user']['id'];
        $message = $this->security->xss_clean($this->input->post('mensagem'));

        $arrMessage = array(
            'id_de'     => $idFrom,
            'id_para'   => $idTo,
            'mensagem'  => $message,
            'data_hora' => date('Y-m-d H:m:i'),
            'ip'        => $_SERVER['REMOTE_ADDR']

        );

        $result = $this->chat->insertMessages($arrMessage);

        if ($result) {
            $arr['status'] = 'OK';

            response($arr);
        }
    }
}
