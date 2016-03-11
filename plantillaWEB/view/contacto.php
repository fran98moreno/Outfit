{% extends "layout.php" %}

{% block tabActivo %}Contacto{% endblock tabActivo %}

{% block cuerpo %}

<div class="jumbotron">
	<h1>¿Quién eres?</h1>
	<p class="lead"></p>
</div>

<form method="post" action="/guardarSugerencia" role="form">
		
		<input type="hidden" name="id" value="{{comentario.ID}}"/>
		
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="{{comentario.NOMBRE}}">
		</div>
		<div class="form-group">
			<label for="apellido">Apellido:</label>
			<input type="text" class="form-control" id="apellido" name="apellido" value="{{comentario.APELLIDO}}">
		</div>
		<div class="form-group">
			<label for="email">Correo electrónico:</label>
			<input type="text" class="form-control" id="email" name="email" value="{{comentario.EMAIL}}">
		</div>
		<div class="form-group">
			<label for="curso">Curso:</label>
			<input type="text" class="form-control" id="curso" name="curso" value="{{comentario.CURSO}}">
		</div>
		
		<button type="submit" class="btn btn-default">Enviar</button>
</form>

{% endblock cuerpo %}

