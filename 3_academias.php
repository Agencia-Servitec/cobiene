<!DOCTYPE HTML>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="icon" type="image/png" href="images/logos/icon_coede.png" sizes="192x192">
<link rel="apple-touch-icon" sizes="196x196" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/logos/icon_coede.png">
<link rel="apple-touch-icon" sizes="57x57" href="images/logos/icon_coede.png">
<link rel="icon" type="image/png" href="images/logos/icon_coede.png" sizes="96x96">
<link rel="icon" type="image/png" href="images/logos/icon_coede.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/logos/icon_coede.png" sizes="16x16">
<link rel="shortcut icon" href="images/logos/icon_coede.png" type="image/x-icon" />
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
<title>BIENESTAR EP</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/skin.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link rel="stylesheet" type="text/css" href="styles/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/estilos_contenido.css">


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>




</head>
<body>
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
    <h1 class="tittle__shadow">ACADEMIAS</h1>
</div>
<div class="decoration decoration-margins"></div>
<div class="content-fullscreen">






    <div class="lista__uni">
    
            <div class="universidades item-button" >
                <a href="#" class="button-green button button-center button-xs link__uni" id="mostrarUni1">
                PITAGORAS
                <img src="imagenes/academias/logo1.png" class="icono__uni icono__">
                </a>
            </div>
                <p class="relleno__convenios" id="text1" >
                   <B>BENEFICIOS: <BR> </B>
                   25% DE DSCTO SEGÚN CONVENIO <br><br> 10% DE DSCTO EN COLEGIOS 15 MEDIAS BECAS PREVIA EVALUACION 
                <a href="https://drive.google.com/file/d/1HL7Wh77RrTXis4TQrOeA5I-LfTro-QLw/view?usp=sharing" class="link descargar__convenios" >
                <img src="images/iconos/download2.svg" class="icono__">
                Descargar Ficha de Solicitud
                </a>
                </p>
                
        
   
        <div class="universidades item-button" >
            <a href="#" class="link__uni button-green button button-center button-xs" id="mostrarUni2">
            TRILCE
            <img src="imagenes/academias/logo2.png" class="icono__uni icono__">
            </a>
        </div>
             <p class="relleno__convenios" id="text2">
             <B>BENEFICIOS: <BR> </B>
             05% DE DSCTO SEGÚN CONVENIO 
            <a href="https://drive.google.com/file/d/1HL7Wh77RrTXis4TQrOeA5I-LfTro-QLw/view?usp=sharing" class="link descargar__convenios" >
                <img src="images/iconos/download2.svg" class="icono__">
                Descargar Ficha de Solicitud
            </a>
             </p>

    </div>

    <script>
        $(document).ready(() => {
            $('#text1').hide();
            $('#text2').hide();


            $('#mostrarUni1').click(function() {
                $('#text1').show();
                $('#text2').hide();

            });

            $('#mostrarUni2').click(function() {
                $('#text2').show();
                $('#text1').hide();

            });
        });
    </script>

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