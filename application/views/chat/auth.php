<?php
$this->load->view('includes/header');
?>

<style>

    body {
        min-height: 100vh; 
        background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
        url('https://www.lfnetworking.org/wp-content/uploads/sites/55/2017/12/cog_bg_networking.jpg') repeat;
        background-position:center top;
        background-attachment:fixed;
        background-size:cover;
    }

    .login-container {
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .login-form-1 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        background: #fff;
    }

    .login-form-1 h3 {
        text-align: center;
        color: #333;
    }

    .login-form-2 {
        padding: 5%;
        background: #7159c1;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        border-top-left-radius: 1rem;
        border-bottom-left-radius: 1rem;
    }

    .login-form-2 h3 {
        text-align: center;
        color: #fff;
    }

    .login-container form {
        padding: 10%;
    }

    .btnSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        border: none;
        cursor: pointer;
    }

    .login-form-1 .btnSubmit {
        font-weight: 600;
        color: #fff;
        background-color: #7159c1;
    }

    .login-form-2 .btnSubmit {
        font-weight: 600;
        color: #7159c1;
        background-color: #fff;
    }

    .login-form-2 .ForgetPwd {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }

    .login-form-1 .ForgetPwd {
        color: #0062cc;
        font-weight: 600;
        text-decoration: none;
    }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-2">
            <h3>Great to see again!</h3>
    
            <form method="post" id="loginform" action="<?= base_url('authentication') ?>">
                <div class="form-group">
                    <?php
                        if ($this->session->flashdata('erro_login') != "") :
                            echo
                                '<div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    ' . $this->session->flashdata('erro_login') . '
                                </div>';
                        endif;

                        if ($this->session->flashdata('success') != "") :
                            echo
                                '<div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    ' . $this->session->flashdata('success') . '
                                </div>';
                        endif;
                    ?>
                </div>

                <div class="form-group">
                    <label style="color: #fff; font-weight: 600"><span style="color: #fff; font-weight: 600">*</span> Email:</label>
                    <input type="text" class="form-control" placeholder="Your Email *" id="email" name="email" />
                </div>

                <div class="form-group">
                    <label style="color: #fff; font-weight: 600"><span style="color: #fff; font-weight: 600">*</span> Password:</label>
                    <input type="password" class="form-control" placeholder="Your Password *" id="pass" name="pass" />
                </div>

                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>

                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget password?</a>
                </div>
            </form>
        </div>

        <div class="col-md-6 login-form-1">
            <h3>Use your best social networks! :)</h3>

            <form class="form-signin" method="post" id="loginform" action="<?= base_url('authfb') ?>">
                <div class="form-group">
                    <button style="background: #4267B2; border: none" class="btn btn-secondary btn-block" type="submit">
                        <i class="fa fa-facebook"></i> Continue with Facebook
                    </button>
                </div>

                <div class="form-group">
                    <a href="#" class="ForgetPwd">Don't have an account?</a>
                </div>
            </form>
        </div>
    </div>
</div>