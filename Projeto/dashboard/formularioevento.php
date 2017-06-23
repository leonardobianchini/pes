<div id="content">
<!--breadcrumbs-->
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
	</div>
<!--End-breadcrumbs-->
    <hr/>
    <div class="row-fluid">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			<h5>Cadastrar Evento</h5>
		</div>
		<div class="widget-content nopadding">
			<form id="formaddevents" class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Titulo evento :</label>
					<div class="controls">
						<input type="text" id="tituloevento" class="span11" placeholder="Titulo evento" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Local :</label>
					<div class="controls">
						<input type="text" id="localevento" class="span11" placeholder="Local" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Data :</label>
					<div class="controls">
						<input type="password" id="dataevento" class="span11" placeholder="Data"  />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Horário :</label>
					<div class="controls">
						<input type="text" id="horaevento" class="span11" placeholder="Horário" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Esporte :</label>
					<div class="controls">
						<input type="text" id="esporte" class="span11" placeholder="Esporte" />
					</div>
				</div>

			</form>

			<div class="control-group">
					<div class="controls">
						<button id="sendForm" >Enviar</button>
						<button>Cancelar</button>
					</div>
			</div>
		</div>
	</div>
</div>
<script>

$( "#sendForm" ).click(function() {
	dados = {
		titulo: $("#tituloevento").val(),
		local:$("#localevento").val(),
		data:$("#dataevento").val(),
		horario:$("#horarioevento").val(),
		esporte:$("#esporteevento").val()
	}
	var jqxhr = $.post( "acoes/addambiente.php",dados, function(data) {
		console.log("data "+ data );
	})
	// .done(function() {
	// 	console.log( "second success" );
	// })
	// .fail(function() {
	// 	console.log( "error" );
	// })
	// .always(function() {
	// 	console.log( "finished" );
	// });
});

 </script>
