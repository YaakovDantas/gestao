@extends('template/layout')

@section('conteudo')
	<div id="row">
					<h1 id="titulo">Banco de Lições</h1>
					<form action="" class="">
						
						<div class="form-group col-md-8 sizing">
							<input type="text" class="form-control " placeholder="Buscar..." ">
						</div>
						<div class="col-md-3 form-group sizing">
							<select class="form-control " id="">
								<option selected disabled>Categorias</option>
								<option>Todas</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
						<button class="btn btn-primary col-md-1" id="buscar" style="padding-bottom: 10px;">
							<i class="fa fa-search" aria-hidden="true" style="margin-top: 4px"></i>
						</button>	
						
						
					</form>
					<div class="">
						<button class="btn btn-info btn-block">Adicionar <i class="fa fa-plus-square" aria-hidden="true"></i> Nova Lição</button >
					</div>
					<br>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Nº</th>
								<th>Descrição da lição aprendida</th>
								<th>Tipo</th>
								<th>Consequências</th>
								<th>Ação Tomada</th>
								<th>Data</th>
								<th>Ranking</th>
								<th>Categoria</th>
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
								<th>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star-half-o checked"></span>
								</th>
								<td>Cat</td>
								<td ><i class="fa fa-refresh" aria-hidden="true"></i></td>
								<td ><i class="fa fa-trash-o" aria-hidden="true"></i></td>

							</tr>
						</tbody>
					</table>
					
				</div>
@stop