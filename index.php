<?php include("menus/head.html")?>
<body>
<div class="noise"></div>
    <div class="overlay"></div>
    <div class="terminal">
<!-- hola-->



 <div id="page-transitions">
  
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
<div class="content-fullscreen" style="text-align:center;">
    <img src="images/logos/icon_coede.png" alt="Comando_Bienestar_logo" style="width:150px;margin:auto;">
    <h1 class="tittle__shadow" style="color: white";>COBIENE EP</h1>
</div>
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

<p id="item-buttons">

<a href="educacion.php" class="button button-green button-center button-xs">APOYO EDUCATIVO</a>
<a href="asistencia_social.php" class="button button-green button-center button-xs">SERVICIO SOCIAL</a>
<a href="convenios.php" class="button button-green button-center button-xs">CONVENIOS</a>
<a href="sepelio.php" class="button button-green button-center button-xs">FONDO DE SEPELIO</a>
<a href="vivienda.php" class="button button-green button-center button-xs">CASA DE SERVICIO</a>


</p>

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