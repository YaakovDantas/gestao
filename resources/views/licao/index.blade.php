<html>
	
	<head>
		<link href="/css/app.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/8dec7c20c8.js"></script>

		<title>B.L.</title>
	</head>
	<body>
		<style>
			.table td,th, #titulo{
			   text-align: center;   
			}
		</style>
		<br>
		<div class="container">
			<h1 id="titulo">Banco de Lições</h1>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Nº</th>
						<th>Descrição da lição aprendida</th>
						<th>Tipo</th>
						<th>Consequências</th>
						<th>Ação Tomada</th>
						<th>Data</th>
						<th>Atualizar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1</td>
						<td>
							
							
							<i class='fa fa-thumbs-o-{{$id ? "up" : "down"}}' aria-hidden='true'></i>
						</td>
						<td>1</td>
						<td>1</td>
						<td ><i class="fa fa-refresh" aria-hidden="true"></i></td>
						<td ><i class="fa fa-trash-o" aria-hidden="true"></i></td>

					</tr>
				</tbody>
			</table>
		</div>

		
	</body>
</html>