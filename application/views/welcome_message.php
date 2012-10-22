<html lang="en"><head>
    <meta charset="utf-8">
    <title>IUT-Airlines</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="/Agencia_vuelos/css/homee.css">
    <link rel="stylesheet" type="text/css" href="/Agencia_vuelos/engine1/style.css" />
    <script type="text/javascript" src="/Agencia_vuelos/engine1/jquery.js"></script>

    <link href="/Agencia_vuelos/css/docs/assets/css/bootstrap.css" rel="stylesheet">

    </style>
    <link href="/Agencia_vuelos/css/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Agencia_vuelos/css/docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Agencia_vuelos/css/docs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Agencia_vuelos/css/docs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Agencia_vuelos/css/docs/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit " style = "padding: 10px; margin-bottom: 0px;">
<!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
<li><img src="/Agencia_vuelos/images/images/foto1.jpg" alt="foto1" title="foto1" id="wows1_0"/></li>
<li><img src="/Agencia_vuelos/images/images/foto2.jpg" alt="foto2" title="foto2" id="wows1_1"/></li>
<li><img src="/Agencia_vuelos/images/images/foto3.jpg" alt="foto3" title="foto3" id="wows1_2"/></li>
<li><img src="/Agencia_vuelos/images/images/foto4.jpg" alt="foto4" title="foto4" id="wows1_3"/></li>
<li><img src="/Agencia_vuelos/images/images/foto8.jpg" alt="foto8" title="foto8" id="wows1_4"/></li>
<li><img src="/Agencia_vuelos/images/images/foto9.jpg" alt="foto9" title="foto9" id="wows1_5"/></li>
<li><img src="/Agencia_vuelos/images/images/headerairprogram.jpg" alt="header-air-program" title="header-air-program" id="wows1_6"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="foto1"><img src="/Agencia_vuelos/images/tooltips/foto1.jpg" alt="foto1"/>1</a>
<a href="#" title="foto2"><img src="/Agencia_vuelos/images/tooltips/foto2.jpg" alt="foto2"/>2</a>
<a href="#" title="foto3"><img src="/Agencia_vuelos/images/tooltips/foto3.jpg" alt="foto3"/>3</a>
<a href="#" title="foto4"><img src="/Agencia_vuelos/images/tooltips/foto4.jpg" alt="foto4"/>4</a>
<a href="#" title="foto8"><img src="/Agencia_vuelos/images/tooltips/foto8.jpg" alt="foto8"/>5</a>
<a href="#" title="foto9"><img src="/Agencia_vuelos/images/tooltips/foto9.jpg" alt="foto9"/>6</a>
<a href="#" title="header-air-program"><img src="images/tooltips/headerairprogram.jpg" alt="header-air-program"/>7</a>
</div></div>
<a class="wsl" href="http://wowslider.com">Slideshow HTML Script by WOWSlider.com v2.5</a>
    <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="/Agencia_vuelos/engine1/wowslider.js"></script>
    <script type="text/javascript" src="/Agencia_vuelos/engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
     </div>

      <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a id="esp" class= "brand" href="#" >IUT Airlenes</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/agencia_vuelos/index.php/">Inicio</a></li>
              <li><a href="#about">Reservaciones</a></li>
              <li><a href="/agencia_vuelos/index.php/vuelos">Vuelos</a></li>
              <li><a href="/agencia_vuelos/index.php/usuario">Usuarios</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="span3 ">

            <?php 
                   if(isset($menu)){
                         $this->load->view($menu);
                    }else{
                         $this->load->view('_menu_general');
                    }
            ?>    

         </div>
        <div class="span6">
           <div class="well">  
             <div class "well">
                <?php 
                   if(isset($partial)){
                         $this->load->view($partial);
                    }else{
                         $this->load->view('mi_form');
                    }
                ?>                
                </div>           
            </div>
       </div>
       <div class="span3">
                  <?php 
                   if(isset($logeo)){
                         $this->load->view($logeo);
                    }else{
                         $this->load->view('mi_form');
                    }

                ?> 
       </div>
      </div>
      <hr>

      <footer >
        <p class = "btn" style = "text-align: center">Todos los Derechos Reservados © IUT Airlines Travel Groups 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Agencia_vuelos/css/docs/assets/js/jquery.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-transition.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-alert.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-modal.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-tab.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-popover.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-button.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/bootstrap-typeahead.js"></script>
    <script src="/Agencia_vuelos/css/docs/assets/js/application.js"></script>


  

</body></html>