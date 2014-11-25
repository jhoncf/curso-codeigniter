<div class="container mtb">

    <?php if (validation_errors()): ?>
        <div class="row">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Atenção!</strong>
                <?php echo validation_errors() ?>
            </div>
        </div>
    <?php endif ?>

    <!---Mensagem de Sucesso--->

    <?php if ($this->session->flashdata("message")): ?>
        <div class="row">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Informação</strong>
                <p><?php echo $this->session->flashdata("message")?></p>
            </div>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4>Contato</h4>
            <div class="hline"></div>
            <br>
            <form role="form" action="<?php echo site_url("contato") ?>" method="POST">
                <div class="form-group">
                    <label for="InputName1">Seu Nome</label>
                    <input type="text" class="form-control" name="nome" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="InputSubject1">Assunto</label>
                    <input type="text" class="form-control" name="assunto" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="message1">Mensagem</label>
                    <textarea class="form-control" id="message1" name="mensagem" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-theme">Enviar</button>
            </form>
        </div>
    </div><!--/row -->
</div><!--/container -->