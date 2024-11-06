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
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
    rel="stylesheet"
    />

<style>
.btn#hover{
    color: rgb(83, 2, 2);
}
</style>
</head>
<body>
<?php include 'navbar.php';
?>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row  row-cols-9  gx-lg-5 align-items-center">
                <div class="col-md-6">
                <div class="col"><img class="card-img-top mb-5 mb-md-0" src="icons3/Air Jordan 4 Thunder/abidas1.jpg" alt="..." /></div>
                
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder text-danger">Air Jordan 4 Thunder</h1>
                    <div class="fs-5 mb-5">
                        
                        <span>R$ 2799,99</span>
                    </div>
                    <p class="lead">O modelo já visto anteriormente em 2006, surge novamente nas cores originais. O design é construído com uma colorway preta e amarela, onde o preto surge no cabedal de nobuck, telas e sola e o amarelo vem trazendo luminosidade nos detalhes. como entressola, ilhós, e tecido subexposto da tela preta. O logo Jumpman na língua e calcanhar possuem aplicação em branco, trazendo equilíbrio para a composição.</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <a href="cart.php"><button class="btn btn-outline-danger flex-shrink-0 rounded-pill" type="button">
                            <i class="bi-cart-fill me-1 text-danger"></i>
                            Onde comprar?
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Produtos relacionados</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="icons/WhiteMetallic Silver/White.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Nike Zoom LeBron NXXT Gen White </h5>
                                <!-- Product price-->
                                R$ 1899,99
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="silver.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="icons/Skyline/skyline.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Air Jordan 1 High Skyline</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">R$ 2071,45</span>
                                R$ 1900,00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="skyline.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="icons3/Air Jordan 13 Black Flint/abidas1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Air Jordan 13 Black Flint</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through"> R$ 2599,76</span>
                                R$ 2299,76
                            </div>      
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="fint.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="icons3/Air Jordan 1 Mid SE Flight Club/abidas2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Air Jordan 1 Mid SE Flight Club</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    
                                </div>
                                <!-- Product price-->
                                R$ 1521,93
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="mid.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
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
        <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
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
                Siga-nos nas redes sociais para ficar atualizado sobre os últimos lançamentos e eventos exclusivos. E lembre-se, os tênis raros não são apenas sapatos, são obras de arte que elevam o seu estilo a um novo patamar.
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            Products
            </h6>
            <p>
            <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
            <a href="#!" class="text-reset">React</a>
            </p>
            <p>
            <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
            <a href="#!" class="text-reset"></a>
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            Useful links
            </h6>
            <p>
            <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
            <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
            <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
            <a href="#!" class="text-reset">Help</a>
            </p>
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
</body>
</html>