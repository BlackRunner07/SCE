<?php header("Content-type: text/css");?>

body.login { 
    background-image: url("img/FONDO.png");
    }
    form.tabla{
        background:white;
        border-style:solid;
        border-radius: 10px;
        opacity:0.8;
        position: absolute;
        padding:50px;
        top: 20%;
        right: 38%;
        background-attachment: fixed;
        
    }
    input.usuario{
       width:250px;
        border-style:solid;
        border-radius: 5px;
        padding:10px
        
    }
    input.pass{
        width:250px;
        border-style:solid;
        border-radius: 5px;
        padding:10px

    }
    button.entrar{
        background:white;
        width:200px
    }
    input.entrar{
        background:white;
        width:200px
    }


/*BOTON DE INICIO DE SESION*/
.button {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 14px;
    padding: 10px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  .button span:after {
  content: #8594;  /* Entidades CSS. Para usar entidades HTML, use &#8594;*/
  position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  .button:hover span {
    padding-right: 25px;
  }
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }



  /*CUERPO DE LOGIN ALUMNO*/
  body.login_alumno {
    
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
  
    background: #2575fc;
    background: -webkit-linear-gradient(left, #6a11cb, #2575fc);
    background: -o-linear-gradient(left, #6a11cb, #2575fc);
    background: -moz-linear-gradient(left, #6a11cb, #2575fc);
    background: linear-gradient(left, #6a11cb, #2575fc);
  
  }
  /*-----------------------------*/
  .login100-form-title {
    width: 100%;
    display: block;
    font-family: OpenSans-Regular;
    font-size: 30px;
    color: #fefefe;
    line-height: 1.2;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 70px;
  }
  
  
  .username{
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 70px;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    margin-right: 200px;
  }
  .contraseña{
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 70px;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
  }
  /*BOTON ENTRAR*/
  .login100-form-btn:hover {
    background-color: transparent;
  }
  .container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .login100-form-btn {
    font-family: OpenSans-Bold;
    font-size: 15px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
  
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 70px;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    overflow: hidden;
    background: #111111;
  
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    position: relative;
    z-index: 1;
    border: 0px;
  }
  
  .login100-form-btn::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    opacity: 0;
  
    background: #2575fc;
    background: -webkit-linear-gradient(right, #6a11cb, #2575fc);
    background: -o-linear-gradient(right, #6a11cb, #2575fc);
    background: -moz-linear-gradient(right, #6a11cb, #2575fc);
    background: linear-gradient(right, #6a11cb, #2575fc);
  
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }
  
  .login100-form-btn:hover {
    background-color: transparent;
  }
  .login100-form-btn:hover:before {
    opacity: 1;
  }
  /*-----------------------------------------------------------------------*/
  
  div.correcto{
    color: red;
  }
  
  div.error{
    color:red;
  }