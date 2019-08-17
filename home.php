<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
 <style>

    @import url('https://fonts.googleapis.com/css?family=Nunito&display=swap');

    body {
      margin: 0;
      padding: 0;
      font-family: "nunito", sans-serif;
    }

    /* Barra Superior */

    .navegacion {
      width: 100%;
      padding: 18px 0;
      background-color: black;
      position: fixed;
    }

    .navegacion a{
      font-size: 20px;
      text-transform: uppercase;
      padding: 0 18px;
      text-decoration: none;
      color: white;
      font-weight: 700;
      text-shadow: 0 0 20px black;
    }
    
    /* Galeria Inicio */
    

    .gallery-section {
      width: 100%;
      padding: 60px 0;
      background: #f1f1f1;
    }

    .inner-width {
      width: 100%;
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    .gallery-section h2 {
      text-align: center;
      text-transform: uppercase;
      color: #333;
    }

    .border {
      width: 180px;
      height: 4px;
      background: #333;
      margin: 60px auto;
    }

    .gallery-section .gallery {
      display: flex;
      flex-wrap: wrap-reverse;
      justify-content: center;
    }

    .gallery-section .image {
      flex: 25%;
      overflow: hidden;
      cursor: pointer;
    }

    .gallery-section .image img {
      width: 100%;
      height: 100%;
      transition: 0.4s;
    }

    .gallery-section .image:hover img {
      transform: scale(1.4);
    }

    @media screen and (max-width:960px) {
      .gallery-section .image {
        flex: 33.33%;
      }
    }

    @media screen and (max-width:768px) {
      .gallery-section .image {
        flex: 50%;
      }
    }

    @media screen and (max-width:480px) {
      .gallery-section .image {
        flex: 100%;
      }
    }

    .container {
      width: 1200px;
      margin: 20px auto;
      columns: 3;
      column-gap: 40px;
    }
    .container .box{
      width: 100%;
      margin: 0 0 20px;
      padding: 20px;
      background: #fff;
      overflow: hidden;
      break-inside: avoid;
    }

    .container img {
      max-width: 100%;
    }

    .container h3{
      margin: 10px 0 0;
      padding: 0;
      font-size: 20px;
    }
   
  </style>
</head>
<body>
    
<div class="header">
    <div class="navegacion">
    <a href="home.php">Inicio</a>
    <a href="--">Descubrir</a>
    <a href="--">About</a>
    <a href="profile.php">Perfil</a>
    <a href="logout.php">Salir</a>
    </div>
  </div>

<div class="gallery-section">
<div class="inner-width">
      <br><br>
      <h2>Imagenes Recomendadas</h2>
      <div class="border"></div>
      <div class="gallery">
      <div class="container">
      
<?php

#  echo $_SESSION['u_id'];
#
#  if(isset($_SESSION['u_id'])) {
#    echo "Estas logeado!";
#  } else {
#    echo "No estas logeado!";
#  }
?>


<?php

include("conexion.php");


  /* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso 
el campo ruta_imagen se encuentra en la tabla fotos */ 
$result = mysqli_query($conexion, "SELECT Ruta FROM Fotos "); 
while ($row=mysqli_fetch_array($result))
{ 
  /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
  $ruta_img = $row["Ruta"]; 
?>

    <div class="box">
    <a href="/uploads/<?php echo $ruta_img ; ?>" class="image">
    <img src="/uploads/<?php echo $ruta_img ; ?>" alt="" />
    </a>
      <h3>'Titulo' by <a href="#!" class="card-link">User</a></h3>
      <a href=""><i class="far fa-heart">0</i></a>
      <a href=""><i class="far fa-comments">0</i></a>
      <a href=""><i class="far fa-plus-square">0</i></a>
    </div>
  
<?php
}
?>
</div>


<script>
   $(".gallery").magnificPopup({
     delegate: 'a',
     type: 'image',
     gallery: {
       enabled: true
     }
   });
 </script>


</body>



</html>