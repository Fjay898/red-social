<?php
  session_start();
  include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">  
  <link href="favicon.ico" rel="icon" type="image/x-icon" />  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <style>

    @import url('https://fonts.googleapis.com/css?family=Nunito&display=swap');

    body {
      margin: 0;
      padding: 0;
      font-family: "nunito", sans-serif;
      box-sizing: border-box;
    }

    /* Portada */

    .portada {
      width: 100%;
      height: 400px;
      background: url("https://pictures.digitalrev.com/image/upload/w_1920,c_fill,q_40/v1485925406/zuui4ann5utaiuthf4kd.jpg") no-repeat 50%;
      background-size: cover;
    }

    /* Barra Superior */

    .navegacion {
      width: 100%;
      padding: 18px 0;
      background-color: black;
      position: fixed;
    }

    .navegacion a {
      font-size: 20px;
      text-transform: uppercase;
      padding: 0 18px;
      text-decoration: none;
      color: white;
      font-weight: 700;
      text-shadow: 0 0 20px black;
    }

    .navegacion button {
      float: right;
      font-size: 20px;
      text-transform: uppercase;
      padding: 0 18px;
      text-decoration: none;
      color: white;
      font-weight: 700;
      text-shadow: 0 0 20px black;
    }

    /* Avatar */

    .center .avatar img{
      border-radius: 50%;
      width: 180px;
      height: 180px;
      margin-top: 5%;
      object-fit: cover;
      object-position: 0 -8px;
    }

    .center{
      align:center;
      height: 65vh;
      text-align: center;
      color: #333;
      border-radius: 5px;
    }
    
    .contenido{
      padding: 30px; 
    }

    .contenido h2,p{
      font-weight: lighter;
      letter-spacing: 1px;
      width: 70%;
      margin: 10px auto;      
    }

    .contactar{
      display: inline-block;
      text-decoration: none;
      color: white;
      font-weight: 700;
      background: #867bfb;
      padding: 0.5em 2em;
      border-radius: 40px;
      margin: 1em 0;
      transition: 0.3s;
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

    .gallery-section h1 {
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
      width: 50;
      height: 50%;
      transition: 0.6s;
    }

    .gallery-section .image:hover img {
      transform: scale(1.8);
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


  </style>

</head>


<body>

  <div class="portada">
    <div class="navegacion">
      <a href="home.php">Inicio</a>
      <a href="--">Descubrir</a>
      <a href="--">About</a>
      <a href="profile.php">Perfil</a>
      <a href="logout.php">Salir</a>

      <div class="" style="text-align:right">
        <form action ="upload.php" method="POST" enctype="multipart/form-data">
        <input id="imagen" name="imagen" size="30" type="file">
        <button  type="submit" name="submit">Subir Imagen</button>
      </div>
    </div>
  </div>

  <div class="center">
    <div class="avatar">
      <img src="http://wpai.in/wp-content/uploads/2016/11/Lakshya-Chawla.jpg" alt="fotoperfil">
    </div>
    <div class="contenido">
      <h1>Nombre Usuario</h1>
      <h2>Fotografo Amateur</h2>
      <p>Biografia: Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing 
      elit Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
                <a href="#" class="contactar">Contactar</a>

    </div>
  </div>
<br>
<br>
<div class="gallery-section">
    <div class="inner-width">
      <h1>Mi Galeria</h1>
      <div class="border"></div>
    

<?php
$hostname = "sql209.byetcluster.com";
$dbusername = "epiz_24169932";
$dbpassword = "mwA19znuPCucDV";
$db = "epiz_24169932_proyecto";

$conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $db);

  /* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso 
el campo ruta_imagen se encuentra en la tabla fotos */ 
$result = mysqli_query($conexion, "SELECT Ruta FROM Fotos "); 
while ($row=mysqli_fetch_array($result))
{ 
  /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
  $ruta_img = $row["Ruta"]; 
?>

  <a href="/uploads/<?php echo $ruta_img ; ?>" class="image">
    <img src="/uploads/<?php echo $ruta_img ; ?>" width="30%" alt="Imagen" />
  </a>
<?php
}
?>


  <script>
    $(".gallery-section").magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  </script>
</body>

</html>