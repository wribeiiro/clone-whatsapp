<?php 
    $this->load->view('includes/header'); 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="row wa-navbar">
                <div class="col-8">
                    <?php if ($this->session->userdata['sessao_user']['imagem']) : ?>
                        <img src="<?= $this->session->userdata['sessao_user']['imagem'] ?>" class="rounded-circle" />
                    <?php else : ?>
                        <img src="<?= base_url() ?>assets/images/profile.png" class="rounded-circle" />
                    <?php endif; ?>

                    <?= $this->session->userdata['sessao_user']['nome'] ?>
                </div>

                <div class="col-2">
                    <i class="large material-icons wa-icon">chat</i>
                </div>

                <div class="col-2">
                    <div class="dropdown">
                        
                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="large material-icons wa-icon">more_vert</i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Novo grupo</a>
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Arquivado</a>
                            <a class="dropdown-item" href="#">Destacado</a>
                            <a class="dropdown-item" href="#">Configuração</a>
                            <a class="dropdown-item" href="<?= base_url('User/logoff') ?>">Fechar sessão</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 wa-contatos">
                    <input class="form-control wa-input" placeholder="Procurar ou começar uma nova conversa" id="inputSearch" />
                </div>
            </div>

            <div class="row list-contacts form-group"> 
                <div class="col-12" id="loadingContacts" style="display: none">Loading contacts... <i class="fa fa-spinner fa-spin"></i></div>
            </div>
        </div>

        <div class="col-9">
            <div class="wa-navbar">
                <div class="container">
                    <div class="row navbar-message" style="display: none">
                        <div class="col-1">
                            <img id="imagem_contato" src="" class="rounded-circle"/>
                        </div>
                        <div class="col-9">
                            <div style="margin-top: 0.8rem">
                                <strong><span id="nome_contato" style="font-size: 12px;"></span></strong><br/>
                                <span id="status_contato" style="font-size: 12px;"></span>
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="large material-icons wa-icon">search</i>
                            <i class="large material-icons wa-icon">attach_file</i>
                        </div>
                        <div class="col-1">
                            <div class="dropdown">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="large material-icons wa-icon">more_vert</i>
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Informações do contato</a>
                                    <a class="dropdown-item" href="#">Selecionar mensagens</a>
                                    <a class="dropdown-item" href="#">Limpar mensagens</a>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>

            <div class="wa-chat">
                <div class="messages-box" style="background: url(<?=base_url('assets/images/bg.png')?>)"> 
                    <div class="wa-introducao">
                        <div class="offset-3 wa-card-introducao">
                            <br>
                            <img src="<?=base_url()?>assets/images/introducao.png"/>
                            <br><br>
                            <h1>Mantenha seu telefone conectado</h1><br/>
                            <p>O Chat Web conecta ao seu telefone para sincronizar suas mensagens. Para
                            diminuir o uso do seu plano de internet, conecte seu telefone a uma rede WiFi.</p>
                            <hr/>
                            <p><span style="font-size: 18px;" class="fa fa-laptop"></span> O Chat está disponível para Windows. <a href="#" target="_blank">Obtenha-o aqui</a>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wa-panel-texto" style="display: none">
                <div class="row">
                    <div class="col-11">
                        <input class="form-control wa-input" id="mensagem" required placeholder="Digite uma mensagem" style="text-align: left !important"/>
                    </div>
                    <div class="col-1">
                        <i class="large material-icons wa-icon sent" style="color: #959B9D">send</i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<?php $this->load->view('includes/footer');?>