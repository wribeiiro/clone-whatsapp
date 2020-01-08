<div class="row wa-navbar">
    <div class="col-8">
        <?php if($this->session->userdata['sessao_user']['imagem']): ?>
            <img src="<?=$this->session->userdata['sessao_user']['imagem']?>" class="rounded-circle"/>
        <?php else: ?>
            <img src="<?= base_url()?>assets/images/profile.png" class="rounded-circle"/>
        <?php endif; ?>
        
        <?=$this->session->userdata['sessao_user']['nome']?>
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
                <a class="dropdown-item" href="<?=base_url('Chat/logoff')?>">Fechar sessão</a>
            </div>
        </div>
    </div>
</div>

<div class="list-contacts">
    <div class="row">
        <div class="col-12 wa-contatos">
            <input class="form-control wa-input" placeholder="Procurar ou começar uma nova conversa"/>
        </div>
    </div>
</div>