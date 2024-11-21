<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
</head>
<body>
<style>
input[type='file'] {
  display: none
}

label {
  background-color: #DC4C64;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  margin: 10px;
padding-top: 8px;
  width:40px;
  height:40px;


  
  margin-left: auto;
  margin-right: auto;

  align-justify-content: center;

}
.post{
    margin-top:40px;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 5px;
    
width: 70%;
height: 600px;
display:flex;
flex-direction: column;
content-align:center;
margin: 0 auto;
justify-content: center;
margin-left: auto;
margin-right: auto;
text-align:center;
align-self: center;
}


</style>


    <?php 
    include "navbar5.php";
    ?>



<form method="POST" enctype="multipart/form-data" action="">
      <div class="post">
<label for='selecao-arquivo'><i class=" fa-solid fa-plus" style="color: #ffffff"; ></i></label>
<input id='selecao-arquivo' name="imgrepositorio" type='file'>
<p> insira sua foto aqui </p>
</div>
        <p>
            <label for="">legenda</label>
            <input name="legenda" type="text" required>
        </p>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>














 <?php
include("../service/conexao.php");

if (isset($_FILES['imgrepositorio'])) {
    $imgrepositorio = $_FILES['imgrepositorio'];
    $legenda = $_POST['legenda'];
    if($imgrepositorio['error'])
        die("Falha ao enviar");

    if($imgrepositorio['size'] > 2097152)
        die("Arquivo muito grande");

    echo "arquivo enviado";
    $pasta = "imgrepositorio/";
    $nomeDoArquivo = $imgrepositorio['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != 'png')
        die("Formato de arquivo não permitido");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($imgrepositorio["tmp_name"], $path);
    
    if($deu_certo) {
        $conn->query("INSERT INTO arquivos (nome, path, legenda) VALUES('$nomeDoArquivo', '$path', '$legenda')") or die ($mysqli->error);
        echo "<p>Arquivo movido com sucesso</p>"; 
    } else {
        echo "<p>Falha ao mover o arquivo</p>";
    }
}

$sql_query = $conn->prepare("SELECT * FROM arquivos");
$sql_query->execute();
$imgrepositorio = $sql_query->fetchAll(PDO::FETCH_ASSOC);
?> 

