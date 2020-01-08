<?php 
    $this->load->view('includes/header'); 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <?php $this->load->view('includes/navbar'); ?>
        </div>
        <div class="col-9">
            <div class="wa-introducao">
                <div class="container">
                    <div class="row">
                        <div class="offset-3 wa-card-introducao">
                            <br/><br/><br/>
                            <img src="<?=base_url()?>assets/images/introducao.jpg"/>
                            <br/><br/>
                            <h1>Mantenha seu telefone conectado</h1><br/>
                            <p>O WhatsApp Web conecta ao seu telefone para sincronizar suas mensagens. Para
                            diminuir o uso do seu plano de internet, conecte seu telefone a uma rede WiFi.</p>
                            <hr/>
                            <p><span style="font-size: 18px;" class="fa fa-laptop"></span> O WhatsApp está disponível para Windows. <a href="https://www.whatsapp.com/download" target="_blank">Obtenha-o aqui</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer');?>