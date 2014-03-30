<!DOCTYPE html>

<html lang="es">
    <head>
        <title><?php echo 'Eposak - ' . $title_for_layout; ?></title>
        <?php echo $this->Html->charset(); ?>
        <?php echo $this->Html->meta('icon'); ?>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <!-- <meta name="description" content=""> -->
        <!-- <meta name="author" content=""> -->
        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="js/less-1.3.3.min.js"></script-->
        <!--append â€˜#!watchâ€™ to the browser URL, then refresh the page. -->
        <?php echo $this->Html->css('bootstrap.min'); ?>
        <?php echo $this->Html->css('style'); ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <!--
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/favicon.png">
        -->
        <?php echo $this->Html->script('jquery.min'); ?>
        <?php echo $this->Html->script('jquery-migrate-1.0.0.min'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
        <?php echo $this->Html->script('scripts'); ?>
    </head>

    <body>

        <div class="container">

            <div class="row clearfix">

                <div class="col-xs-12 column">

                    <div class="row clearfix">
                        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">

                                    <li class="active">
                                        <?php echo $this->Html->image('brand.png', array('style' => 'margin-left: 10px;')); ?>
                                    </li>

                                    <li>
                                        <?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'display', 'home'), array('class' => 'title')); ?>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sobre Eposak <strong class="caret"></strong></a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('¿Qué es Eposak?', array('controller' => 'pages', 'action' => 'display', 'about')); ?></li>
                                            <li><?php echo $this->Html->link('Preguntas Frecuentes', array('controller' => 'pages', 'action' => 'display', 'faq')); ?></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aporta en Bs. <strong class="caret"></strong></a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('Aporta a un proyecto', array('controller' => 'projects', 'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('Aporta al fondo eposak', array('controller' => 'pages', 'action' => 'display', 'found')); ?></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" >Voluntariado</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresas <strong class="caret"></strong></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Proyectos comunitarios (RSE)</a>
                                            </li>
                                            <li>
                                                <a href="#">Voluntariado corporativo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" >Noticias</a>
                                    </li>
                                    <li>
                                        <a href="#" >Videos</a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#">Regístrate</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar <strong class="caret"></strong></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Iniciar sesión</a>
                                            </li>
                                            <li>
                                                <a href="#">Ingresa con Facebook</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mary <strong class="caret"></strong></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Mi cuenta</a>
                                            </li>
                                            <li>
                                                <a href="#">Editar perfil</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">Salir</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="row clearfix">
                        <div class="page-header clearfix">
                            <a href="#"> 
                                <?php echo $this->Html->image('logo.jpg', array('class' => 'main-logo')); ?>
                            </a>

                            <span class="slogan">
                                Empoderando a comunidades a través del <br/>turismo sostenible.
                            </span>

                            <div class="pull-right">
                                <!-- AddThis Follow BEGIN -->
                                <p>Síguenos</p>
                                <div class="addthis_toolbox addthis_32x32_style addthis_default_style">
                                    <a class="addthis_button_facebook_follow" addthis:userid="Eposak"></a>
                                    <a class="addthis_button_twitter_follow" addthis:userid="eposak"></a>
                                    <a class="addthis_button_youtube_follow" addthis:userid="eposak"></a>
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e5e3b5d7dff1ddb"></script>
                                <!-- AddThis Follow END -->
                            </div>
                        </div>
                    </div>

                    <!-- insert content here -->

                    <?php echo $content_for_layout; ?>

                    <!-- end content -->

                    <div class="row clearfix">
                        <div class="col-xs-12 column">
                            <div class="allies">
                                <h3>Nuestros aliados</h3>
                                <a href="http://fet.org.ve" target="_blank"><?php echo $this->Html->image('allies/fet.jpg', array('title' => 'Fundación Esteban Torbar', 'alt' => 'Fundación Esteban Torbar')); ?></a>
                                <a href="http://www.turismomaso.com" target="_blank"><?php echo $this->Html->image('allies/tmi.jpg', array('title' => 'Turismo Maso Internacional', 'alt' => 'Turismo Maso Internacional')); ?></a>
                                <a href="http://www.destinopueblosdelsur.com/" target="_blank"><?php echo $this->Html->image('allies/pueblos.jpg', array('title' => 'Destino Pueblos del Sur', 'alt' => 'Destino Pueblos del Sur')); ?></a>
                                <a href="http://www.venezuelaelite.com/" target="_blank"><?php echo $this->Html->image('allies/venelite.jpg', array('title' => 'Venezuela Élite', 'alt' => 'Venezuela Élite')); ?></a>
                                <a href="http://www.andestropicales.org/" target="_blank"><?php echo $this->Html->image('allies/pat.jpg', array('title' => 'Proyecto Andes Tropicales', 'alt' => 'Proyecto Andes Tropicales')); ?></a>
                                <a href="http://www.venezuelatuya.com/" target="_blank"><?php echo $this->Html->image('allies/venezuelatuya.jpg', array('title' => 'Venezuela Tuya', 'alt' => 'Venezuela Tuya')); ?></a>
                                <a href="http://www.climbingvenezuela.com/" target="_blank"><?php echo $this->Html->image('allies/climbing.jpg', array('title' => 'Climbing Venezuela', 'alt' => 'Climbing Venezuela')); ?></a>
                                <a href="http://www.ecobike.com.ve/" target="_blank"><?php echo $this->Html->image('allies/ecobike.jpg', array('title' => 'Fundación Ecobike', 'alt' => 'Fundación Ecobike')); ?></a>
                                <a href="http://www.trip-drop.com" target="_blank"><?php echo $this->Html->image('allies/tripdrop.jpg', array('title' => 'Trip Drop', 'alt' => 'Trip Drop')); ?></a>
                                <a href="http://www.amadeus.com/ve/ve.html" target="_blank"><?php echo $this->Html->image('allies/amadeus.jpg', array('title' => 'Amadeus Venezuela', 'alt' => 'Amadeus Venezuela')); ?></a>
                                <a href="http://www.123pago.net/" target="_blank"><?php echo $this->Html->image('allies/123pago.jpg', array('title' => 'Servicio de Recaudación y Pagos por Internet', 'alt' => '123Pago')); ?></a>
                                <a href="http://www.komunumo.com/" target="_blank"><?php echo $this->Html->image('allies/komunumo.jpg', array('title' => 'Red global de Responsabilidad Social, Sostenibilidad y Emprendimiento', 'alt' => 'Komunumo')); ?></a>
                            </div>

                        </div>
                    </div>

                    <div class="row clearfix">

                        <div class="col-xs-4 column">
                            <h3> Mapa del sitio </h3>
                            <a href="#">Sobre Eposak</a><br/>
                            <a href="#">Aporta</a><br/>
                            <a href="#">Voluntariado</a><br/>
                            <a href="#">Empresas</a><br/>
                            <a href="#">Noticias</a><br/>
                        </div>

                        <div class="col-xs-4 column">
                            <h3>Suscríbete</h3>
                            <p> Queremos mantenerte informado de toda nuestra actividad </p>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Enviar</button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->

                        <div class="col-xs-4 column">
                            <h3> Dirección </h3>
                            <address>
                                <strong>Eposak INC.</strong>
                                <br>
                                795 Folsom Ave, Suite 600
                                <br>
                                San Francisco, CA 94107
                                <br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>

                    <footer class="row clearfix">
                        <div class="container">
                            <p class="text-center">Eposak.org - Todos los derechos reservados. J-40113589-7</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
