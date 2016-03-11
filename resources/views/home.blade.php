<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Librería</title>
		<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
</head>
<body>

<nav>
	<div class="nav-wrapper">
	<a href="" class="brand-logo">Logo Libreria</a>
	<ul id="nav-mobile" class="right hide-on-med-and-down">
		<li><a href="">Home</a></li>
		<li><a href="">Registrarse</a></li>
		<li><a href="">Login</a></li>
	</ul>	
	</div>

</nav>
	<div class="row">
    <form action="/form" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s3">
          <label for="nombre">Nombre</label>
          <br>
          <input name="nombre" placeholder="Escribe tu nombre" id="nombre" type="text" class="validate">
          <br>
         
        </div>
         </div>
         <div class="row">
        <div class="input-field col s3">
        <br>
         <label for="nick">Nick</label>
          <input name="nick" placeholder="Escribe tu nick" id="nick" type="text" class="validate">
         
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
        <br>
         <label for="email">Email</label>
          <input name="email" placeholder="Escribe tu correo electronico" id="email" type="email" class="validate">
         
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
        <br>
            <label for="password">Password</label>
          <input name="password" placeholder="Escribe tu contraseña" id="password" type="password" class="validate">
      
        </div>
      </div>

       <div class="row">
        <div class="input-field col s3">
        <br>
            <label for="telefono ">Telefono</label>
          <input name="telefono" placeholder="Escribe tu telefono" id="telefono" type="text" class="validate">
      
        </div>
      </div>
     
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
   	
  </button>

     
      
    </form>
  </div>
   <div class="collection">
    <a href="#!" class="collection-item">Hola<span class="badge">1</span></a>
    <a href="#!" class="collection-item">Hello</a>
  </div>
  <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="/img/futbol.jpg">
              <span class="card-title">Futbol</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="http://www.fondoswiki.com/deporte/fondos-de-pantalla-de-futbol">Ir al sitio</a>
            </div>
          </div>
        </div>
      </div>
</body>
</html>




