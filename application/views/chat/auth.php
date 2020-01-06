<?php 
    $this->load->view('includes/header'); 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <form class="form-signin" method="post" id="loginform" action="<?=base_url('authentication')?>">
                <div class="form-group">
                    <img class="mx-auto d-block" src="https://i.ya-webdesign.com/images/pow-png-zap-4.png" alt="" width="120" height="120">
                </div>

                <div class="form-group">
                    <h1 class="h3 d-flex justify-content-center font-weight-normal">Autenticação</h1>
                </div>

                <?php 
                    if($this->session->flashdata('erro_login') != "" ):
                        echo 
                        '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            '.$this->session->flashdata('erro_login').'
                        </div>';
                    endif;

                    if($this->session->flashdata('success') != "" ):
                        echo 
                        '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            '.$this->session->flashdata('success').'
                        </div>';
                    endif;
                ?>

                <div class="form-group">
                    <label for="email" class="">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@email.com.br" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password" class="">Senha:</label>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="**********" required autofocus>
                </div>
                
                <div class="form-group">
                    <button style="background: #ED1B24; border: none" class="btn btn-primary btn-block" type="submit">Entrar</button>
                </div>
            </form>

            <form class="form-signin" method="post" id="loginform" action="<?=base_url('authfb')?>">
                <div class="form-group">
                    <button style="background: #4267B2; border: none" class="btn btn-secondary btn-block" type="submit">
                        <i class="fa fa-facebook"></i> Entrar com Facebook
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer');?>