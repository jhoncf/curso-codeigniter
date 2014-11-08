<h3>Cadastrar Usuário</h3>
<hr>

<?php if (validation_errors()): ?>
    <div class="row">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Atenção!</strong>
            <?php echo form_error("login")?>
            <?php echo form_error("senha")?>
        </div>
    </div>
<?php endif ?>

<div class="row">
    <div class="col-md-4">

        <form role="form" action="<?php echo site_url("usuarios/create") ?>" method="POST">

            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Login" value="<?php echo set_value("login")?>" required="required">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo set_value("senha")?>">
            </div>

            <button type="submit" class="btn btn-default">Salvar</button>
        </form>

    </div>
</div>