@extends('layouts.app')

@section('content')
 
<div class="col-md-12 col-md-offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
<form action="{{ route('saveAsistente') }}" method="post">
{!! csrf_field() !!}
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tbody>
					<tr>
						<td>
                            <label for="idevento">ID Evento</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="idevento" name="idevento">
						</td>
                        <td>
                            <label for="nombre">Nombre</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="nombre" name="nombre">
						</td>
					</tr>
					<tr>
                        <td>
                             <label for="apellido">Apellido</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="apellido" name="apellido">
						</td>
                        <td>
                            <label for="cedula">Cedula</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="cedula" name="cedula">
						</td>
					</tr>
					<tr>
                        <td>
                            <label for="institucion">Institucion</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="institucion" name="institucion">
						</td>
                        <td>
                            <label for="telefono">Telefono</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="telefono" name="telefono">
						</td>
					</tr>
					<tr>
                        <td>
                            <label for="email">Email</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="email" name="email">
						</td>
                        <td>
                            <label for="edad">Edad</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="edad" name="edad">
						</td>
					</tr>
					<tr >
                        <td>
                            <label for="genero">Genero</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="genero" name="genero">
						</td>
                        <td>
                            <label for="etnia">Etnia</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="etnia" name="etnia">
						</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="instruccion">Instruccion</label>
						</td>
						<td>
                            <input type="text" class="form-control" id="instruccion" name="instruccion">
						</td>
						<td>
                            <button type="submit" class="btn btn-success">Guardar Asistente</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

                        </form>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-header">
                                   Administracion de Asistentes
                                </h5>
                                <div class="card-block">
                                    <p class="card-text">
                                        Card content
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Card footer
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Evento </th>
                                <th> Nombre</th>
                                <th> Apellido</th>
                                <th> Cedula</th>
                                <th> Telefono </th>
                                <th> Email </th>
                                <th> Genero </th>
                                <th> Etnia </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($asistentes as $asis)
                        <tr>
                            <td> {{$asis->idasistente}} </td>
                            <td> {{$asis->idevento}}</td>
                            <td> {{$asis->nombre}}</td>
                            <td> {{$asis->apellido}}</td>
                            <td> {{$asis->cedula}}</td>
                            <td> {{$asis->telefono}}</td>
                            <td> {{$asis->email}}</td>
                            <td> {{$asis->genero}}</td>
                            <td> {{$asis->etnia}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $asistentes->links() }}
                </div>
            </div>
        </div>
</div>
@endsection