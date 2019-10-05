<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?= base_url()?>#body" class="scrollto">Movip  <span>Talento Humano</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="<?= base_url()?>#about">Nosotros</a></li>
          <li><a href="<?= base_url()?>#contact">Contactanos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
    
  </header><!-- #header -->
 
<main id="main">
<br>
<br>
<br>
<div class="container ">
<div class="hero-container ">
      <div class="section-header ">
      <h2  class="section-title text-center">Ingresa</h2>
</div>


<br> 
<div>

<form action="<?= base_url()?>index.php/login/in"method="post" role="form" class="" >
<div class="row counters">
  <div class="col-md-3 text-center"> </div>
  <div class ="col-md-8">

     <div class="form-group" class="text-center">
        <input type="email" name="correo" class="form-control col-lg-8" id="correo" placeholder="Correo" data-rule="minlen:4" data-msg="Por favor ingresa tu correo" />
        <div class="validation"></div>
      </div>

      <div class="form-group" class="col-lg-6 col-6 text-center">
            <input type="password" name="password" class="form-control col-lg-8" id="password" placeholder="Contraseña" data-rule="minlen:4" data-msg="Por favor ingresa tu contraseña" />
            <div class="validation"></div>
      </div>

 
<div><button type="submit" class="btn btn-success btn-lg text-center">Ingresa</button></div>   
<br><br><br>

</form>
<form action="<?= base_url()?>index.php/login/olvido"method="post" role="form" class="" >
<div><button type="submit" class="btn  btn-lg text-center">Olvido su contraseña</button></div>   
</form> 
</main>

<br>
<br><br><br><br><br><br><br><br><br><br>
