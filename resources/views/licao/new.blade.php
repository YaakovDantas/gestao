@extends('template/layout')
@section('conteudo')
<h2>Cadastro de Lição</h2>
<form action="" > 

	<div class="form-group">	
		<label for=""> Descrição da lição aprendida
			<textarea name="" id="" cols="30" rows="1"></textarea>
		</label>
	</div>
	<div class="form-group">
		<label for="">Tipo
			<input type="text">
		</label>
	</div >
	<div class="form-group">
		<label for="">Consequências
			<input type="text">
		</label>
	</div>
	<div class="form-group">
		<label for="">Consequências
			<input type="text">
		</label>
	</div>
	<div class="form-group">
		<label for="">Ação Tomada
			<input type="text">
		</label>
	</div>
	<div class="form-group">
		<label for="">Data
			<input type="date">
		</label>
	</div>
	<div class="form-group">
		<label for="">Tipo
			<input type="text">
		</label>
	</div>
	<div class="form-control">
		<label for="">
			<select class="form-control " id="">
				<option selected disabled>Categoria</option>
				<option>Todas</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
		</label>
	</div>


</form>

@stop