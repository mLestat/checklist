@extends('layouts.app')

@section('content')
	<div class="page-header">
	  <h1>Nueva tecnologia</h1>
	</div>

	<!-- Table -->
	<div class="row">
		<div class="col-md-6">
			<form action="/tecnologias" method="POST">
				<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" id="nombre" name="nombre" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" value="Grabar">
			</form>
		</div>
	</div>
@endsection