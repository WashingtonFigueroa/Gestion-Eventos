@extends('layouts.app')

@section('content')
@include('layouts.admin')
<hr>    
<div class="col-md-12 col-md-offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                        <form role="form">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tbody>
					<tr>
						<td>
                        <label for="nombre">
                            Nombre
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="nombre" placeholder="Nombre del evento"/>
						</td>
						<td>
                        <label for="detalle">
                            Detalle
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="detalle" placeholder="Detalle evento"/>
						</td>
					</tr>
					<tr>
                    <td>
                        <label for="lugar">
                            Lugar
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="lugar" placeholder="Lugar evento"/>
						</td>
						<td>
                        <label for="fecha">
                            Fecha Evento
                        </label>
						</td>
						<td>
						    <input type="date" class="form-control" id="fecha" />
						</td>
					</tr>
					<tr>
                    <td>
                        <label for="hora">
                            Hora
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="hora" placeholder="Hora Evento"/>
						</td>
						<td>
                        <label for="imagen">
                            Imagen
                        </label>
						</td>
						<td>
						    <input type="file" class="form-control" id="imagen"/>
						</td>
					</tr>
					<tr>
                    <td>
                        <label for="contrato">
                            Contrato
                        </label>
						</td>
						<td>
						    <input type="file" class="form-control" id="contrato"/>
						</td>
						<td>
                        <label for="contactos">
                            Contactos
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="contactos" placeholder="Numeros de Contactos"/>
						</td>
					</tr>
					<tr >
                    <td>
                        <label for="instructor">
                            Instrusctor
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="instructor" placeholder="Nombre Instructor"/>
						</td>
						<td>
                        <label for="duracion">
                            Duracion
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="duracion" placeholder="Duracion del evento"/>
						</td>
                    </tr>
                    <tr>
                    <td>
                        <label for="costo">
                            Costo
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="costo" placeholder="Valor evento"/>
						</td>
						<td>
                        <label for="estado">
                            Estado
                        </label>
						</td>
						<td>
						    <input type="text" class="form-control" id="estado" placeholder="Estado"/>
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
                                <th>
                                    #
                                </th>
                                <th>
                                    Nombre Evento
                                </th>
                                <th>
                                    Lugar
                                </th>
                                <th>
                                    Fecha
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    TB - Monthly
                                </td>
                                <td>
                                    01/04/2012
                                </td>
                                <td>
                                    Default
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>
                                    1
                                </td>
                                <td>
                                    TB - Monthly
                                </td>
                                <td>
                                    01/04/2012
                                </td>
                                <td>
                                    Approved
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    2
                                </td>
                                <td>
                                    TB - Monthly
                                </td>
                                <td>
                                    02/04/2012
                                </td>
                                <td>
                                    Declined
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <td>
                                    3
                                </td>
                                <td>
                                    TB - Monthly
                                </td>
                                <td>
                                    03/04/2012
                                </td>
                                <td>
                                    Pending
                                </td>
                            </tr>
                            <tr class="table-danger">
                                <td>
                                    4
                                </td>
                                <td>
                                    TB - Monthly
                                </td>
                                <td>
                                    04/04/2012
                                </td>
                                <td>
                                    Call in to confirm
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection