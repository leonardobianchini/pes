<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <title>App Name - @yield('title')</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		body { margin: 40px; }
		footer p { text-align: center;
							 font-size: small;
							}
	</style>
</head>
<body>
	<header>
		<div class="btn-group btn-group-justified">
	   <a href="/home/home" class="btn btn-primary">Início</a>
	   <a href="#" class="btn btn-primary">Sistema</a>
	   <a href="/paciente/list" class="btn btn-primary">Pacientes</a>
	   <a href="/usuario/list" class="btn btn-primary">Usuários</a>
	   <a href="/home/sobre" class="btn btn-primary">Sobre nós</a>
	 </div>
	 <menu>
	       @section('menu')
	           This is the menu.
	               @show
	   </menu>
	</header>



          <div class="container">
              @yield('content')
          </div>

		<footer>
			<p>PES©.</p>
		</footer>
	</div>
</body>
</html>
