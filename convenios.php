<?php include("menus/head.html")?>
<body>
    <div class="noise"></div>
    <div class="overlay"></div>
    <div class="terminal">
<div id="page-transitions">
<div class="page-preloader page-preloader-dark">
<div class="loader loader-frames"><i></i><i></i><i></i><i></i></div>
</div>
<div class="header header-light">
<a href="#" class="header-icon header-icon-1 open-left-sidebar"><i class="fa fa-navicon"></i></a>
<a href="index.php" class="header-logo scale-hover"></a>
<a href="#" class="header-icon header-icon-4 open-right-sidebar"><i class="fa fa-envelope-o"></i></a>
</div>
<div id="page-content">
<div id="page-content-scroll">

<br>
<br>
<br>
<br>
<div class="content-fullscreen" style="text-align:center;">
    <img src="images/pictures/educacion.png" alt="" style="width:150px;margin:auto;">
    <h1 class="tittle__shadow">Convenios Vigentes con Entidades Educativas y Empresas Privadas</h1>
</div>

        <div class="concepto">
            <p class="relleno_social text__responsi">
            Convenios Educativos Suscritos por el, Comando de Bienestar del COBIENE con Universidades, Institutos Tecnicos superiores y Pre Universitarios, asi como con empresas privadas con Dsctos y tarifas preferenciales que benefician al personal COBIENE y civil en actividad, retiro, discapacitados y familiares.
            </p>
        </div>

   
        <p id="item-buttons">
            <a href="1_universidad.php" class="button button-green button-center button-xs">UNIVERSIDADES</a>
            <a href="2_institutos.php" class="button button-green button-center button-xs" class="button button-green button-center button-xs">INSTITUTOS</a>
            <a href="3_academias.php" class="button button-green button-center button-xs" class="button button-green button-center button-xs">ACADEMIAS PRE</a>
            <a href="4_empresas.php" class="button button-green button-center button-xs" class="button button-green button-center button-xs">EMPRESAS</a>
            <a href="5_bancos.php" class="button button-green button-center button-xs" class="button button-green button-center button-xs">BANCOS</a>
        </p>

        <br>

        <!--
        <p id="item-buttons_descarga">
            <a href="https://drive.google.com/file/d/11XEJE04gWm4Uh701BrzNBCwCySTDmgo5/view?usp=sharing" class="button button-green button-center button-xs ">           
            Descargar Solicitud
            </a>
        </p>
        --> 

    <div class="decoration decoration-margins"></div>
        <div class="content-fullscreen">


            <style>
            #item-buttons{
                width: 100%;
                margin: 5px;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin:auto;
            }
            #item-buttons a{
                width: 460px;
                margin:5px;
                border-radius: 7px;
                padding: 5px; 
                text-decoration: none;
            }
            </style>

        <div class="clear"></div>
    </div>


<!--*********************************|BOTTON MENU|************************************+-->
<?php include("menus/menu-botton.html") ?>


<!--*********************************|LEFT MENU|************************************+-->
<?php include("menus/menu-left.html") ?>
<!--*******************************|FIN LEFT MENU|***********************************+-->

<!--*********************************|RIGHT MENU|************************************+-->
<?php include("menus/menu-right.html") ?>
<!--*******************************|FIN RIGHT MENU|***********************************+-->

<!--*********************************|RIGHT MENU|************************************+-->
<?php include("menus/menu-flotante.html") ?>
<!--*******************************|FIN RIGHT MENU|***********************************+-->




<div class="footer-menu-controls light-footer-menu">
<a href="#" class="footer-menu-open"><i class="fa fa-ellipsis-v bg-red-dark"></i></a>
<a href="#" class="footer-menu-close remove-menu"><i class="fa fa-times bg-red-dark"></i><em>Cerrar</em></a>
</div>
<div class="footer-menu-tap-close remove-menu"></div>
<div class="footer-menu-background light-footer-background remove-menu"></div>

<!--*********************************|RIGHT MENU|************************************+-->
<?php include("menus/menu-redes-sociales.html") ?>
<!--*******************************|FIN RIGHT MENU|***********************************+-->


<div class="sidebar-tap-close"></div>
<a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Ir Arriba</a>
</div>
</body>