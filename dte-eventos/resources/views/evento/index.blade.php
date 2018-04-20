@extends('layouts.app')

@section('content')

<div class="col-md-12 col-md-offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
<form action="{{ route('saveEvento') }}" method="post">
{!! csrf_field() !!} 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tbody>
					<tr>
						<td>
                            <label for="idtipoevento">ID Tipo Evento</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="idtipoevento" name="idtipoevento">
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
                            <label for="lugar">Lugar</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="lugar" name="lugar">
						</td>
						<td>
                            <label for="fecha">Fecha</label>                        
						</td>
						<td>
                            <input type="date" class="form-control" id="fecha" name="fecha">
						</td>
					</tr>
					<tr>
                        <td>
                            <label for="hora">Hora</label>                        
						</td>
						<td>
                            <input type="time" class="form-control" id="hora" name="hora">
						</td>
						<td>
                            <label for="imagen">Imagen</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="imagen" name="imagen">
						</td>
					</tr>
					<tr>
                        <td>
                            <label for="pdfcontrato">Contrato</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="pdfcontrato" name="pdfcontrato">
						</td>
						<td>
                            <label for="contacto">Contactos</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="contacto" name="contacto">
						</td>
					</tr>
					<tr >
                        <td>
                            <label for="instructor">Instructor</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="instructor" name="instructor">
						</td>
						<td>
                            <label for="duracion">Duracion</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="duracion" name="duracion">
						</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="costo">Costo</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="costo" name="costo">
						</td>
                        <td>
                            <label for="detalle">Detalle</label>                        
						</td>
						<td>
                            <input type="text" class="form-control" id="detalle" name="detalle">
						</td>
					</tr>
				</tbody>
			</table>
                        <button type="submit" class="btn btn-success">Crear Tipo vento</button>
		</div>
	</div>
</div>

                        </form>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-header">
                                   Administracion de Eventos
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
                                <th> Tipo Evento</th>
                                <th> Nombre </th>
                                <th> Detalle</th>
                                <th> Lugar</th>
                                <th> Fecha</th>
                                <th> Hora</th>
                                <th> Costo </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($eventos as $evento)
                        <tr>
                            <td> {{$evento->idtipoevento}} </td>
                            <td> {{$evento->nombre}}</td>
                            <td> {{$evento->detalle}}</td>
                            <td> {{$evento->lugar}}</td>
                            <td> {{$evento->fecha}}</td>
                            <td> {{$evento->hora}}</td>
                            <td> {{$evento->costo}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $eventos->links() }}
                </div>
            </div>
        </div>
</div>
@endsection