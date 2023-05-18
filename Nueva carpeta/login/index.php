<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
        @import url(../fonts/GothamBook.css);
@import url(../fonts/GothamBold.css);

body {
    margin: 0;
    padding: 0;
    background-color: black;
    background-size: cover;
    font-family: "GothamBook";
    height: 100vh;
  }
  
  .login-box {
    width: 320px;
    height: 460px;
/*     background: url(../image/fondo.png) no-repeat center top; */
background-size:cover;
background-color: #00FF00;
color: rgb(0, 0, 0);
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%, -50%);
box-sizing: border-box;
padding: 70px 30px;
border-radius:20px;
}

.login-box .avatar {
background-color: #fff;
border-bottom: rgb(204, 204, 204);
width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: -28px;
left: calc(50% - 50px);
}

.login-box h1 {
margin: 0;
padding: 0 0 20px;
text-align: center;
font-size: 22px;
}

.login-box label {
margin: 0;
padding: 0;
font-weight: bold;
display: block;
}

.login-box input {
width: 80%;
margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
border-style: none;
border-bottom: 1px solid rgb(0, 0, 0);
border-radius: 8px;
background-color: #fff;
outline: none;
height: 35px;
color: rgb(0, 0, 0);
font-size: 20px;
margin-top: 2px;
}

.login-box input[type="submit"] {
border: none;
outline: none;
height: 40px;
background-color: yellow;
color: rgb(0, 0, 0);
font-size: 18px;
border-radius: 20px;
}

.login-box input[type="submit"]:hover {
cursor: pointer;
background: blue;
color: rgb(255, 255, 255);
}

.login-box a {
text-decoration: none;
font-size: 14px;
line-height: 20px;
color: rgb(0, 0, 0);
}

.login-box a:hover {
color: blue;
}
</style>
</head>
<body style="text-align: center;">
    <div class="login-box">
        <img class ="avatar" src="data:image/png;base64,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" alt="logo" />
        
        <h2>Inicia sesión</h2>
        <form method="post" action="validar.php">
            <label for="username">Nombre de usuario</label>
            <input type="text" name="username" placeholder="Ingrese su Correo">

            <label for="password">Contraseña</label>
            <input type="password" name="contra" placeholder="Ingrease su Contraseña">

            <input type="submit" name="Ingresar" value="Ingresar"/>

            <a href="contra.php"><h2>Has olvidado tu contraseña?</h2></a>
            <a href="contra.php"><h2>No tienes cuenta?</h2></a>
        </form>
    </div>
</body>
</html>