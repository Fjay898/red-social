<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url("http://mildwave.in/wp-content/uploads/2014/08/nikon-camera-photography-hd-wallpaper-2560x1600-6085-950x593.jpg");
            background-size: cover;
        }

        .caja-login {
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .caja-login h1 {
            float: left;
            font-size: 40px;
            border-bottom: 6px solid orangered;
            margin-bottom: 50px;
            padding: 13px;
        }

        .caja-registro h1 {
            color: white;
            font-size: 40px;
            padding: 13px;
        }


        .boton-login {
            width: 280px;
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }


        .textbox {
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid orangered;
        }

        .textbox2 {
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid orangered;
        }

        .textbox input {
            background: none;
            border: none;
            outline: none;
            color: white;
            font-size: 18px;

        }

        .textbox2 input {
            background: none;
            border: none;
            outline: none;
            color: white;
            font-size: 18px;

        }

        .boton {
            width: 100%;
            background: none;
            border: 2px solid orangered;
            color: white;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;

        }

        .boton-registrar {
            width: 90%;
            background: none;
            border: 2px solid orangered;
            color: white;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 19px;

        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
        }

        /* Modal Content Box */
        .modal-content {
            background-color: #0A0A0A;
            opacity: 0.95;
            margin: 4% auto 15% auto;
            border: 1px solid #888;
            width: 40%;
            height: 50%;
            padding-bottom: 60px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: white;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Zoom */
        .animate {
            animation: zoom 0.6s
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }
    </style>

</head>

<body>
    <form action="ValidarLogin.php">
        <div class="caja-login" method="GET" id="caja-login">
            <h1>Login</h1>
            <div class="textbox">
                <input type="text" placeholder="User" id="user" name="loginuser">
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" id="password" name="loginpassword" required="required">
            </div>
            <button class="boton" type="submit">Login</button>
        </div>
    </form>

    <div class="boton-login">
        <button class="boton" onclick="document.getElementById('modal-wrapper').style.display='block'">
            Registrate</button>
    </div>


    <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" action="validarregistro.php">

            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close"
                title="Close PopUp">&times;</span>
            <div class="caja-registro" method="GET" id="caja-registro">
                <h1>Registro</h1>
                <div class="textbox2">
                    <input type="text" placeholder="User" id="user" name="user">
                </div>
                <div class="textbox2">
                    <input type="password" placeholder="Password" id="password" name="password">
                </div>
                <div class="textbox2">
                    <input type="email" placeholder="Email" id="email" name="email">
                </div>
                <button class="boton-registrar" type="submit">Registrar</button>
        </form>
        <a href=""></a>
    </div>
    </div>



    <script>

        //Cierre de la caja al clickear fuera de ella

        var modal = document.getElementById('modal-wrapper');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }

        }

    </script>


</body>

</html>