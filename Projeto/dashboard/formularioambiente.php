event<div id="content">
<!--breadcrumbs-->
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
	</div>
<!--End-breadcrumbs-->
    <hr/>
    <div class="row-fluid">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			<h5>Cadastrar Ambiente</h5>
		</div>
		<div class="widget-content nopadding">
			<form action="#" method="get" class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Nome :</label>
					<div class="controls">
						<input type="text" id="nome" class="span11" placeholder="Nome" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Endereço :</label>
					<div class="controls">
						<input type="text" id="endereco" class="span11" placeholder="Endereço" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Número :</label>
					<div class="controls">
						<input type="text" id="numero" class="span11" placeholder="Número" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Bairro :</label>
					<div class="controls">
						<input type="text" id="bairro" class="span11" placeholder="Bairro"  />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Cidade :</label>
					<div class="controls">
						<input type="text" id="cidade" class="span11" placeholder="Cidade" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Tipo de esporte :</label>
					<div class="controls">
						<input type="text" id="tipo" class="span11" placeholder="Tipo de esporte" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Hora abre :</label>
					<div class="controls">
						<input type="text" id="horaabre" class="span11" placeholder="Horário de atendimento" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Hora fecha :</label>
					<div class="controls">
						<input type="text" id="horafecha" class="span11" placeholder="Horário de atendimento" />
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
		nome: $("#nome").val(),
		endereco:$("#endereco").val(),
		bairro:$("#bairro").val(),
		cidade:$("#cidade").val(),
		tipo:$("#tipo").val(),
		hora_abre:$("#horaabre").val(),
		hora_fecha:$("#horafecha").val()
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
