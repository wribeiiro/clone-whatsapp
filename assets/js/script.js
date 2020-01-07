let id_ = null;
let click = false;
let firstLoad = false;

$(document).ready(() => {
    loadUsers();

    setInterval(() => {
        if (id_ && click) {
            loadMessages();
        }
    }, 1250);
});

$('.sent').on('click', () => {
    sendMessage();
});

$(document).on('keypress', (e) => {
    if (e.which == 13) sendMessage();
});

function deleteMessages() {
    $.ajax({
        type: 'POST',
        url: 'deleteMessages.php',
        success: (msg) => { console.log(msg) },
        error: (e) => { console.log(e) }
    });
}

function loadMessages() {
    let createMessages = (data) => {
        let str = `
            <br><br><div class="row">
                <div class="offset-2 col-8">
                    <div style="text-align: center">
                        <div class="card wa-card-chat wa-card-yellow">
                            As mensagens que você sendMessage e as ligações que você fizer nessa conversa estão protegidas com criptografia de ponta-a-ponta.
                            Clique para mais informações.
                        </div> 
                    </div>
                </div>
            </div>
        `;

        if (data) {
            data.messages.forEach((messages) => {
                if (data.id_sender == messages.id_de) {
                    str +=
                        `<br>
                        <div class="row">
                            <div class="offset-6 col-5">
                                <div class="card wa-card-chat wa-card-green">
                                    ${messages.mensagem}
                                    <div class="wa-card-chat-bottom-right">
                                        <span style="font-size: 12px; color: #A3A3A3">${messages.data_hora}</span>
                                        <i class="large material-icons wa-icon wa-chat-icon">&nbsp;</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>`
                } else {
                    str +=
                        `<div class="row">
                            <div class="col-5 offset-1">
                                <div class="card wa-card-chat wa-card-default" style="direction: left">
                                    ${messages.mensagem}
                                    <div class="wa-card-chat-bottom-right">
                                        <span style="font-size: 12px; color: #A3A3A3">${messages.data_hora}</span>
                                        <i class="large material-icons wa-icon wa-chat-icon">done</i>
                                    </div>
                                </div>
                            </div>
                        </div><br>`;
                }

                $('.wa-panel-texto').show();
                $('.navbar-message').css('display', 'flex');
            });

            $('.messages-box').html(str);
        }

        if (click) { 
            $('.messages-box').html(str);
            $('.wa-panel-texto').show();
            $('.navbar-message').css('display', 'flex');
        } 
    }

    $.ajax({
        type: 'POST',
        url: BASE_URL + 'Chat/returnMessages',
        data: {
            id_contato: id_
        },
        success: (data) => { createMessages(data) },
        error: (e) => { console.log(e) }
    });
}

function fixScrollChatBottom() {
    $('.messages-box').scrollTop($('.messages-box')[0].scrollHeight);

    return false;
}

function loadUsers() {
    let createMenu = (data) => {
        let listContact = $('.list-contacts');

        data.forEach((user) => {
            let message = user.mensagem ? user.mensagem : 'Clique para iniciar..';
            let date = user.data ? user.data : '';

            let template = `
                <div class="row wa-item-chat" id="${user.id}">
                    <div class="col-2">
                        <img src="`+ BASE_URL + `assets/images/profile.png" class="rounded-circle"/>
                    </div>
                    <div class="col-6">
                        <b id="name-${user.id}">&nbsp;` + user.nome + `</b><br/>
                        <span style="display: none" id="email-${user.id}">${user.email}</span>
                        <p class="wa-preview-message">&nbsp;${message}</p>
                    </div>
                    <div class="col-4" style="text-align: right">
                        <span style="font-size: 10px">${date}</span>
                    </div>
                </div>
                <hr>
            `;

            listContact.append(template);

            $(`#${user.id}`).on('click', () => {
                click   = true;
                id_     = user.id;

                let inf    = `${$('#name-' + id_).text()} &lt;${$('#email-' + id_).text()}&gt;`;
                let status = user.inicio > 0 ? 'Online' : 'visto por último em 01/02/2019 ás 00:00'
               
                $('#nome_contato').html(inf);
                $('#status_contato').html(status);

                $(`.wa-item-chat`).removeClass('wa-item-chat-active');
                $(`#${user.id}`).addClass('wa-item-chat-active');
 
                loadMessages();
            });
        });
    }

    $.ajax({
        type: 'GET',
        url: BASE_URL + 'Chat/returnListUsers',
        success: (data) => { createMenu(data) },
        error: (e) => { console.log(e) }
    });
}

function sendMessage() {
    if ($('#mensagem').val() == '') {
        alert('Digite uma mensagem!');
    } else {
        $.ajax({
            type: 'POST',
            url: BASE_URL + 'Chat/sendMessage',
            data: {
                mensagem: $("#mensagem").val(),
                id_contato: id_
            },
            success: (msg) => {
                if (msg.status == 'OK') {
                    loadMessages();
                }
            },
            complete: () => {
                fixScrollChatBottom();
            },
            error: (e) => { console.log(e) }
        });

        $("#mensagem").val('');
    }

    return false;
}