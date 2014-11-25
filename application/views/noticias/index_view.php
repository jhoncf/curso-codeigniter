<div class="container mtb">
    <div class="row">

        <?php foreach ($result_noticias as $item): ?>
            <div class="col-lg-12">
                <!-- Blog Post 1 -->
                <p><img class="img-responsive" src="<?php echo base_url() ?>assets/uploads/<?php echo $item->capa ?>"></p>
                <a href="#"><h3 class="ctitle"><?php echo $item->titulo ?></h3></a>
                <p><csmall>Data: <?php echo date_mysql_to_br($item->data) ?>.</csmall></p>
                <p><?php echo $item->texto ?></p>
                <div class="hline"></div>

                <div class="spacing"></div>
            </div>
        <?php endforeach ?>
        <ul class="pagination">
            <?php echo $pagination ?>
        </ul>
    </div>
</div>