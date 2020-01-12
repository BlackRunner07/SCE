<?php header("Content-type: text/css");?>



/*FORMULARIO LLENADO ALUMNOS*/
form.formulario{
    width: 400px;
    border-radius: 10px;
    display: table-cell;
}
input{
    border-radius:5px ;
    text-align: center;
    width: 200px;
    height: 30px;
    font-family: sans-serif;
    font-style: italic;
    font-size: larger;
}

div.telefono{
    left: 400px;
    position: relative;
    display: table-cell;
    bottom: 300px;
}
div.correo{
    right: 400px;
    position: relative;
    display: table-cell;
    bottom: 300px;
}
div.barras{
    position: relative;
    bottom: 200px;
    right: 300px;
    border-radius: 15px;
}
div.calificaciones{
    display: inline;
    position: relative;
    bottom: 400px;
    left: 300px;
    border-radius: 5px;
    text-align: center;
    
    font-family: sans-serif;
    font-style: italic;
    font-size: larger;
}
select{
    border-radius: 5px;
    width: fit-content;
    height: 30px;
}

h3{
   color: white ; 
}


/*Formulario modificacion alumnos*/
body.modificar{
    background-image: url("../login/img/agregar_alumnos.png");
}
h1.encabezado{
    text-align: center;
    color: whitesmoke  ;
}
h2.numero{
    color: rgb(255, 255, 255);
    font-size: 50px;
}

/*Consultas alumnos*/

div.consultas_alumnos{
  background: #EB5757;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #000000, #EB5757);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #000000, #EB5757); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */  
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-attachment: fixed;  
  backdrop-filter: blur(7px);
    
}
h1{
    color: whitesmoke;
    text-align: center;
}
table.tabla_alumnos{
    background: rgb(248,227,252);
    background: linear-gradient(90deg, rgba(248,227,252,1) 0%, rgba(58,109,180,1) 0%, rgba(248,227,252,1) 100%, rgba(130,179,32,1) 100%);
    padding-bottom: 10px
    
    
}
td.ca{
    color:whitesmoke;
    text-align: center;
    font-size: 20px;
    font-weight: lighter;
    font-family: Roboto;
    text-shadow:0px -1px 0 #000;
}
td{
    color:whitesmoke;

    text-align: center;
    font-size: 20px;
    font-family: Roboto;
    text-shadow:4px -4px 0 #000;
}
div.tabla_alumnos{
    position: relative;
    bottom: 300px;
}
/* CONSULTAS PROFESORES*/
body.consultas_profesores{
    background-image: url("../login/img/consultas_profesores.png");
}
table.tablaprofe{
    background-image: url("../login/img/consultas_profesores2.png");
    border:solid;
    padding-bottom: 10px;
}

/*BOTNO CON EFECTO HOVER*/
#separar {
    padding: 4%;
    display: inline-block;
  }
.boton {
    color: rgb(255, 255, 255) !important;
    font-size: 15px;
    font-weight: 500;
    padding: 0.5em 1.2em;
    background: #3a6db4;
    border: 2px solid;
    border-color: #3a6db4;
    position: relative;
  }
.boton:before {
    content:"";
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0px;
    height: 100%;
    background: rgba(31, 244, 252, 0.925);
    transition: all 1s ease;
  }
  .boton:hover:before {
  width: 100%;
  }
  /*FIN DE EFECTOS DE BOTON*/

  a{
      text-decoration: none;
      
  }
  a.btn{
    text-decoration: none;
    margin-left: 35%;
  }
  
  
  /*ESTILOS DETALLES_ALUMNOS*/

  body.detalles_alumno{
    background-image: url("../login/img/detalle_alumnos.png");
    
  }
  img{
      filter: blur(6px);
  }
  table.detalles{
    background-image: url("../login/img/detalle_desenfocado.png");
    color: rgb(200, 188, 255);
    padding-bottom: 10px
    
}
tr{
    color: white;
}


/*BOTON DE REGRESAR y ACEPTAR*/
span.btn {
    /* Color del texo */
    color: #0099CC;
    /* Eliminar color de fondo */
    /* Grosor del borde, estilo de línea y color */
    border: 2px solid #0099CC;
    /* Añadir esquinas curvadas */
    border-radius: 6px;
    /* Poner texto en mayúsculas */
    border: none;
          color: rgb(0, 0, 0);
          padding: 16px 32px;
          text-align: center;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
          cursor: pointer;
          text-decoration: none;
          text-transform: uppercase;
    }
    .btn {
          background-color: rgb(248, 240, 240); 
          color: black; 
          border: 2px solid #008CBA;
    }
    /* Al poner el curso encima (hover) */
    .btn:hover {
          background-color: #008CBA;
          color: white;
     }
     input.btn {
        /* Color del texo */
        color: #0099CC;
        /* Eliminar color de fondo */
        /* Grosor del borde, estilo de línea y color */
        border: 2px solid #0099CC;
        /* Añadir esquinas curvadas */
        border-radius: 6px;
        /* Poner texto en mayúsculas */
        border: none;
              color: rgb(0, 0, 0);
              padding: 8px 16px;
              text-align: center;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              -webkit-transition-duration: 0.4s; /* Safari */
              transition-duration: 0.4s;
              cursor: pointer;
              text-decoration: none;
              text-transform: uppercase;
              position: relative;
              bottom: 500px;
              right: 300px;
        }
        .btn {
              background-color: rgb(255, 255, 255); 
              color: black; 
              border: 2px solid #008CBA;
        }
        /* Al poner el curso encima (hover) */
        .btn:hover {
              background-color: #008CBA;
              color: white;
         }

/*TABLA DE CALIFICACIONES*/


html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  }

body.calificaciones {
  padding: 5em 1em;
  background: #333333;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #dd1818, #333333);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #dd1818, #333333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;  
  backdrop-filter: blur(7px);
}
table.table{
  background-color:#340611;
}
th.cal{
  text-align: center;
}
button.btn{

 
  
    color: white;
    border-color: white;

}
tr.dif{
  background: rgb(248,227,252);
background: linear-gradient(90deg, rgba(248,227,252,1) 0%, rgba(52,6,43,1) 0%, rgba(251,18,32,1) 100%, rgba(248,227,252,1) 100%);
}

  /*PANTALLA DE DATOS ALUMNO*/
  .datos{
    background: #333333;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #dd1818, #333333);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #dd1818, #333333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    

  }
  table.personal{
    background: rgb(131,58,180);
    background: linear-gradient(90deg, rgba(131,58,180,1) 71%, rgba(227,234,252,1) 100%, rgba(130,179,32,1) 100%);
  }
  div.todo_personal{
      display: table;
      position: relative;
      top: 20%;
      left: 24%;
  }