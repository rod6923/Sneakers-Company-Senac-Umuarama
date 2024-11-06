  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
        Sneakers Company
              </title><link rel="icon" 
              type="image/jpg" 
              href="img/logo.png.png" />
              
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <!-- MDB -->



  <style>

    img{
      pointer-events: none;
    }
    .btn-danger{
      background-color:#dc4c64;
    
    }
   
    .btn-outline-danger:hover{
      background-color:#dc4c64;
    }
    .card2{
    transition:all 0.5s;
      
    }
  .card2:hover{
    border:1px solid;
  border-color : #DC4C64;
cursor: pointer;

  }
  a{
    text-decoration:none;
    color: #DC4C64;
  }
  i{
    color: #DC4C64;
  }
  .btn-outline-danger{
border-color: #dc4c64;
border: 2px solid;
  } 
  .text-red{
      color:#dc4c64;!important
    }
  </style>

  </head>
  <body class="bg-light">
  
  <div class="loading">

  </div>
  <?php include 'navbar4.php';
  ?>
    
  <!--Carrossel-->
  <div class="w-100 overflow-hidden bg-light" id="top">
    
    <div class="container position-relative">
      <div class="rounded-bottom col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left" style="background-image: url(icons/j32.png); background-size: contain; background-repeat:no-repeat;">
        
      </div>
        <div class="row">
    
    <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
      <h1 class="display-1 fw-bold mt-5 text-red">Conheça tudo sobre seus sneakers favoritos!</h1>
      <p class="lead">A mais nova e melhor comunidade dos sneakers está aqui <br> para revolucionar o mundo dos sneakerheads! Se você <br>é um verdadeiro entusiasta de tênis e busca um paraíso <br>onde possa se conectar com pessoas que compartilham a <br>mesma paixão, você veio ao lugar certo.</p>
      <a href="#" class="btn btn-danger btn-xl me-3 rounded-4 my-5 text-light">Veja nossos destaques</a> 
    </div>
    
    
    
    </div>
    </div>
    
    </div>
  <!-- Carousel wrapper -->
  < <div id="carousellightVariant" class="carousel">
          <!-- Inner -->
          <div class="container">
              <h3 class="title"></h3>
              <div class="row">
                  <div class="col-md-8">
                      <div class="card" data-aos="fade-right">
                          <img src="img/jordan4.jpg" alt="Jordan 4" class="rounded-3">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="card-deck">
                          <div class="card"data-aos="fade-left">
                              <img src="img/jlost.jpg" alt="Jordan Lost" class="rounded-3">
                          </div>
                          <div class="card  bg-light" style="margin-top:20px"data-aos="fade-left">
                              <img src="img/dunkpetals.jpg" class="rounded-3" alt="Dunk Petals">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



      
  <!-- Section-->

  <section class="py-5 bg-light"  data-aos="fade-up">
    <h1 class="text-center text-danger">Recomendações</h1>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          
        <div class="col mb-5">
                <div class="card card2 h-100 ">
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/Big Bubble/big bubbler.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center ">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Nike Air Max 1 '86 Big Bubble Sport Red</h5>
                          

                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="bigbubble.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card2 h-100 ">
                    
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/Chicago/chig4go.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center ">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Air Jordan 2 Chicago</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                            
                            </div>
                            <!-- Product price-->
                            
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto " href="j2chicago.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5 ">
                <div class="card card2 h-100  ">
                    
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/French Blue/french2.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4 ">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Air Jordan 1 Elevate Low French Blue</h5>
                            <!-- Product price-->
                          
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="elevateblue.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card2 h-100  ">
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/Next Chapter/next3.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center ">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Air Jordan 1 High Next Chapter</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                            
                            </div>
                          
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="next.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card2 h-100  ">
                    
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/Nothing But Net/nothing2.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-cente ">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Air Jordan 37 Low Nothing But Net</h5>
                            <!-- Product price-->
                            
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="but.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card2 h-100  ">
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/Pine green/P1ne.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center ">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Off-White x Nike Air Force 1 Mid SP Leather Pine Green</h5>
                          
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="pine.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card2 h-100  ">
                    
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/Skyline/skyline3.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center " >
                            <!-- Product name-->
                            <h5 class="fw-bolder">Air Jordan 1 High Skyline</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                            
                            </div>
                            <!-- Product price-->
                            
                          
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="skyline.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card2 h-100  -lg">
                    <!-- Product image-->
                    <img class="card-img-top" src="icons/WhiteMetallic Silver/White5.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Nike Zoom LeBron NXXT Gen White</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                            
                            </div>
                          
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger rounded-pill mt-auto" href="silver.php">Comprar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted"  data-aos="fade-up">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Nos siga em nossas redes sociais:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold text-danger mb-4">
                <i class></i>Sneakers Company
              </h6>
              <p>
                Siga-nos nas redes sociais para ficar atualizado sobre os últimos lançamentos e eventos exclusivos. E lembre-se, os tênis raros não são apenas sapatos, são obras de arte que elevam o seu estilo a um novo patamar.
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
            
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-2">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold text-danger mb-4">Contato</h6>
              <p><i class="fas fa-home me-3"></i> Sesc, Senac Umuarama Paraná</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                sneakerscompany@gmail.com
              </p>
              
              
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
    
    </footer>
    <!-- Footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init({
        duration: 1200,
      });
    </script>
  <script src="login.js"></script>
  </body>
  </html>