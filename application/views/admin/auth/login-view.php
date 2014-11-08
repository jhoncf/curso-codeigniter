<html>
    <head>
        <title>Login - Sistema CI</title>
        <meta charset="utf-8">
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>

        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="text-center">Login</h1>

                        <?php if (validation_errors() || isset($errors)): ?>
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <strong>Atenção!</strong>
                                    <?php echo form_error('login') ?>
                                    <?php echo form_error('senha') ?>
                                    <?php echo isset($errors) ? $errors : "" ?>
                                </div>
                            </div>
                        <?php endif ?>

                    </div>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block" action="<?php echo site_url("admin/auth/login") ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Usuário" name="login">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" placeholder="Senha" name="senha">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                        </div>	
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>