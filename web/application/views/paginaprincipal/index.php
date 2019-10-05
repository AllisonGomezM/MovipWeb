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
          <li><a href="<?= base_url()?>index.php/welcome/login" class="btn btn-outline-success btn-lg text-center">Ingresar Aquí</a></li>
          <li><a href="<?= base_url()?>#contact">Contactanos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
    
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
    <br>
      <h2>Desarrollo <span>de Software</span><br>Talento Humano</h2>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('<?= base_url()?>template/Reveal/img/intro-carousel/6.jpg');"></div>
      <div class="item" style="background-image: url('<?= base_url()?>template/Reveal/img/intro-carousel/7.jpg');"></div>
      <div class="item" style="background-image: url('<?= base_url()?>template/Reveal/img/intro-carousel/4.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
            <img src="<?= base_url()?>template/Reveal/img/movip32.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Desarrollo de software</h2>
            <h3>DESARROLLO DE SISTEMAS INFORMÁTICOS, PLANIFICACIÓN, ANÁLISIS, DISEÑO, PROGRAMACIÓN, PRUEBAS</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Publicidad</li>
              <li><i class="ion-android-checkmark-circle"></i> Formación academica no formal</li>
              <li><i class="ion-android-checkmark-circle"></i> Creación Audivisual</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->
<br><br><br>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contactanos</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>Cra 69 N° 7 - 95 Piso 2 
              Barrio Marsellas Bogota D.C</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Teléfono</h3>
              <p><a href="tel:+573144899770">+573144899770</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="gestion@inkdigital.com">gestion@inkdigital.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Tú mensaje se envió con éxito. Gracias!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre*" data-rule="minlen:4" data-msg="Ingresa tu nombre" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email*" data-rule="email" data-msg="Ingresa tu correo " />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" data-rule="telefono" data-msg="Ingresa tu teléfono" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mensaje*" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
