<!DOCTYPE html>
<html>
    <head>
        <title>Sistema CI</title>
        <meta charset="utf-8">
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Projeto CI</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url("admin/home") ?>">Home</a></li>
                        <li><a href="<?php echo site_url("admin/usuarios") ?>">Usuários</a></li>
                        
                        <li class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
                                Noticias
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo site_url("admin/noticias") ?>">Noticias</a></li>
                                <li><a href="<?php echo site_url("admin/noticias/categorias") ?>">Categorias</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#">Sobre</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url("admin/auth/logout") ?>">Sair</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">
            <?php echo $contents ?>
        </div>

    </body>

</html>