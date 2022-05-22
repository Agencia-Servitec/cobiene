<?php include("menus/head.html")?>
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
<div class="content-fullscreen" style="text-align:center;">
    <img src="images/pictures/cuartel.jpg" alt="" style="width:300px;margin:auto;border-radius: 20px;">
    <h1 class="tittle__shadow">Nosotros</h1>
</div>
<div class="decoration decoration-margins"></div>
<div class="content-fullscreen">


    
    <div class="collapse">
            <div id="item-buttons">

                <a href="#" class="button button-green button-center button-xs" id="buttonLED" onclick="mostrarTexto()">PRESENTACIÓN</a> 
                
                <div id="texto">
          
                    <p class="relleno">
                    Les doy la más cordial bienvenida al aplicativo móvil del COBIENE, cuyo principal objetivo es dar a conocer al personal de la Institución y sus familias, los servicios y convenios que se encuentran disponibles para ustedes.
                    <br> <br>
                    Cabe resaltar que, el bienestar de nuestro personal y sus respectivas familias es una prioridad del COBIENE, por eso se ha constituido como uno de sus pilares , esperamos que sea de su total agrado y por sobre todas las cosas, valoramos su opinión, la que nos servirá para ir mejorando permanentemente.

                    </p>    
                    <!--
                    <div class="imagen">
                        <img class="foto" src="images/pictures/coronel.jfif" alt="" " >
                        <img class="foto2" src="images/pictures/firma.png" alt="">
                    </div>-->
                    <!--
                    <div class="comando">
                        <img src="images/pictures/coman1.JPEG" class="foto">
                        <p class="relleno relleno_coman">
                        <b>GENERAL DE BRIGADA</b><br><br>
                        Max Hernando Marín Lira  <br><br>
                        <b>COMANDANTE GENERAL <br> DEL COBIENE</b>
                        </p>
                    </div>
                    -->
                </div>
                
                
                <a href="#" class="button button-green button-center button-xs" id="buttonLED2" onclick="mostrarTexto2()" >MISIÓN Y VISIÓN</a>      
                
                <div id="texto2">
                    <p class="relleno">
                    <b class="negrita">Misión</b><br>
                    Promover y desarrollar actividades que aseguren el bienestar del personal de la institución y de sus familiares directos, con la finalidad de contribuir a elevar su moral y rendimiento.<br><br>

                    <b class="negrita">Visión</b><br>
                    Ser una organización eficiente, reconocida, valorada y transparente, comprometida con la calidad de servicio, que brinde el mayor bienestar posible al personal COBIENE, civil y familiares directos de la institución.<br><br>

                    <b class="negrita">Lema</b><br>
                    Todo lo que hacemos, lo hacemos bien.
                    </p>
                </div>

                <!--
                <a href="#" class="button button-green button-center button-xs" id="buttonLED3" onclick="mostrarTexto3()">GALERIA DE COMANDOS</a>

                <div id="texto3">
                    <div class="comando">
                        <img src="images/pictures/coman1.JPEG" class="foto">
                        <p class="relleno relleno_coman">
                        <b>GENERAL DE BRIGADA</b><br><br>
                        MAX HERNDO MARIN LIRA <br><br>
                        <b>COMANDANTE GENERAL <br> DEL COBIENE</b>
                        </p>
                    </div>
                    <div class="comando">
                        <img src="images/pictures/coman2.JPG" class="foto">
                        <p class="relleno relleno_coman">
                        <b>CORONEL</b><br><br>
                        LUIS SANCHEZ GUTIERREZ<br><br>
                        <b>JEMA DEL COBIENE</b>
                        </p>
                    </div>
                    <div class="comando">
                        <img src="images/pictures/coman3.JPG" class="foto">
                        <p class="relleno relleno_coman">
                        <b>CORONEL</b><br><br>
                        PRIETO<br><br>
                        <b>INSPECTOR DEL COBIENE</b>
                        </p>
                    </div>
                </div>
                -->
             


                
                <a href="#" class="button button-green button-center button-xs" id="buttonLED4" onclick="mostrarTexto4()" >INFORMACION DE SOPORTE</a>   

                <div id="texto4">

                    <img src="images/logos/servitec.png" class="logo_servitec" alt="Servitec-Peru">

                    <p class="relleno__soporte">
                        <b class="tittle__soporte" >DETEL MY E. PEREZ</b> <br> <br>
                       <b> Analistas y Programadores </b> <br> 
                        <p class="relleno__programador">
                        ROBERTO MENDOZA <br>
                        EMERSON ESTRADA <br>
                        ANGEL GAMONAL <br>
                        EDUARDO SALAZAR <br>
                        </p>
                    </p>
                </div>

            </div>
    </div>

    <script type="text/javascript">
        function mostrarTexto() {
            document.getElementById('texto').style.display = 'block';
            document.getElementById('buttonLED').setAttribute('onclick','ocultarTexto()')
        }
        function ocultarTexto() {
            document.getElementById('texto').style.display = 'none';
            document.getElementById('buttonLED').setAttribute('onclick','mostrarTexto()')
        }


        function mostrarTexto2() {
            document.getElementById('texto2').style.display = 'block';
            document.getElementById('buttonLED2').setAttribute('onclick','ocultarTexto2()')
        }
        function ocultarTexto2() {
            document.getElementById('texto2').style.display = 'none';
            document.getElementById('buttonLED2').setAttribute('onclick','mostrarTexto2()')
        }


        function mostrarTexto3() {
            document.getElementById('texto3').style.display = 'block';
            document.getElementById('buttonLED3').setAttribute('onclick','ocultarTexto3()')
        }
        function ocultarTexto3() {
            document.getElementById('texto3').style.display = 'none';
            document.getElementById('buttonLED3').setAttribute('onclick','mostrarTexto3()')
        }

        function mostrarTexto4() {
            document.getElementById('texto4').style.display = 'block';
            document.getElementById('buttonLED4').setAttribute('onclick','ocultarTexto4()')
        }
        function ocultarTexto4() {
            document.getElementById('texto4').style.display = 'none';
            document.getElementById('buttonLED4').setAttribute('onclick','mostrarTexto4()')
        }
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