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
  
   
    <!-- Google Fonts -->
    
    <!-- MDB -->
   
<style>
  .btn#hover{
    color: 	#DC3545;
    
  }  .navbar {
            box-shadow: none !important;
        }
        .navbar-nav .nav-item {
    display: flex;
    align-items: center;  /* Alinha os itens verticalmente no centro */
}

.navbar-nav .nav-link {
    display: flex;
    align-items: center;
    justify-content: center; /* Garante que o conteúdo (ícone e texto) fique centralizado */
}

.navbar-nav .nav-link i {
    margin-right: 5px; /* Espaço entre o ícone e o texto */
}

      
</style>
</head>
<body>
   <!-- Loading Indicator -->

  <!-- Navbaar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand me-2 mb-1 d-flex align-content-start" href="#">
      <img
        src="img/logo.png.png"
        height=""
        alt="MDB Logo"
        loading="lazy"
        style="width: 33px;height: 30px;margin-left: 15px"
      />
      <a class="navbar-brand" href="index2.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Sneakers Company</a>
    </a>
  <div class="container-fluid justify-content-end">
    
      <div class="d-flex">
        <!-- Brand -->
      
   
         
        
      <!-- Left elements -->
  
      <!-- Center elements -->
      
      <ul class="navbar-nav flex-row d-none d-md-flex">
        

       
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link" href="flag.php">
            <span><i class="fas fa-flag fa-lg"></i></span>
          </a>
        </li>
  
        
  
        
        <li class="nav-item me-3 me-lg-1">
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <!-- Botão de Logout -->
        <a class="nav-link" href="logout.php">
            <span><i class="fas fa-sign-out-alt fa-lg"></i></span> Sair
        </a>
    <?php else: ?>
        <!-- Botão de Login -->
        <a class="nav-link bnt-login" href="login.php">
            <span><i class="fas fa-arrow-right-to-bracket fa-lg"></i></span> Login
        </a>
    <?php endif; ?>
</li>


          <li class="nav-item me-3 me-lg-1 active">
          <a class="nav-link" href="posteditor.php">
            <span><i class="fas fa-plus fa-lg"></i></span>
         
          </a>
        </li>
      </ul>
      <!-- Center elements -->
  
      <!-- Right elements -->
      
         
    
      </ul>
      <!-- Right elements -->
      <!-- Search form -->
      <!-- <form  class="input-group w-auto my-auto d-none d-sm-flex justify-content-end">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder="Search"
          style="min-width: 125px;"
        />
        <span class="input-group-text border-0 d-none d-lg-flex"
          ><i class="fas fa-search"></i
        ></span>
      </form>
    </div>
    </div> -->
  </nav>
  <!-- Navbar -->
    
</body>
</html>