



<!DOCTYPE html>
<html>
<head>
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
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
rel="stylesheet"
/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />


</head>
<body class="mx-auto">
  
    <?php include 'navbar2.php';
?>
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
      .form-group {
  position: relative;
}

.form-label {
  position: absolute;
  pointer-events: none;
  transition: 0.2s ease all;
  opacity: 1;
}

.form-label.hidden {
  display: none;
}
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: url(img2/wall1.jpg)
      }
      input {
 
  box-shadow: inset 0 -1px 0 0 #ff7878;
}


      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#6b0000, #ff1f1f);
        overflow: hidden;
      }
  
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#6b0000, #ff1f1f);
        overflow: hidden;
      }
  
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.7) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>
  
    <div class="container px-5 py-xl-5 px-md-5 text-center text-lg-start my-5 " style="height: 800px;">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-1 fw-bold ls-tight" style="color: hsl(0, 100%, 66%)">
            Sneakers <br />
            <span style="color: hsl(0, 100%, 75%); margin-left: 100px;">   Company</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(0, 100%, 50%)">
            A Sneakers Company é mais do que uma loja, é uma jornada pelo mundo dos tênis raros. Cada visita à nossa loja é uma oportunidade de descobrir algo único e extraordinário. Este é o lugar onde a moda encontra a história, e a cultura se transforma em estilo.
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass" style="margin-top: 50px;">
            <div class="card-body px-4 py-5 px-md-5">
              <form >
               
  
                <!-- Email input -->
                <div class="relative z-0">
                  <input type="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
                  <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
              </div>
  
                <!-- Password input -->
                <div class="relative z-0 my-4">
                  <input type="password" id="senha" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none dark:text-white dark:border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
                  <label for="senha" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-red-400 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Senha</label>
              </div>
  
                
  
                <!-- Submit button -->
                <button type="submit" class="btn bg-red-500 btn-block mb-4" onclick="login(); return false">
               Login
                </button>
  
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Não possui uma conta?</p>
                  <a href="cadastro.php"><button type="button" class="btn bg-red-500" > Cadastrar-se</button></a>
                  <br><br>
                  <button type="button" class="btn btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
  
                  <button type="button" class="btn btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
  
                  <button type="button" class="btn btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
  
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
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
          <h6 class="text-uppercase fw-bold mb-4">
            <i class></i>Sneakers Company
          </h6>
          <p>
            Siga-nos nas redes sociais para ficar atualizado sobre os últimos lançamentos e eventos exclusivos. E lembre-se, os tênis raros não são apenas sapatos, são obras de arte que elevam o seu estilo a um novo patamar.s
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
        
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
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

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="login.js"></script>
<script src="loading.js"></script>
</body>
</html>