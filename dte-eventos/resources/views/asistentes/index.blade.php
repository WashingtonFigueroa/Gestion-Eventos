@extends('layouts.app') @section('content')

<div class="col-md-12 col-md-offset-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Asistente</li>
            <li class="breadcrumb-item active" aria-current="page">Crear asistentes</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Datos del asistente
                            </div>
                            <div class="card-body">
                                <form action="{{ route('saveAsistente') }}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="idevento">ID Evento</label>
                                            <input type="text" class="form-control form-control-sm" id="idevento" name="idevento">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="nombre">Nombre del asistente</label>
                                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" class="form-control form-control-sm" id="apellido" name="apellido">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="cedula">Cedula</label>
                                            <input type="text" class="form-control form-control-sm" id="cedula" name="cedula">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="institucion">Institucion</label>
                                            <input type="text" class="form-control form-control-sm" id="institucion" name="institucion">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" class="form-control form-control-sm" id="telefono" name="telefono">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control form-control-sm" id="email" name="email">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="edad">Edad</label>
                                            <input type="number" min="0"  class="form-control form-control-sm" id="edad" name="edad">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="genero">Genero</label>
                                            <select class="form-control form-control-sm" id="genero" name="genero">
                                                <option value="masculino">Masculino</option>
                                                <option value="femenino">Femenino</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="etnia">Etnia</label>
                                            <select class="form-control form-control-sm" id="etnia" name="etnia">
                                                <option value="Mestizo">Mestizo</option>
                                                <option value="Blanco">Blanco</option>
                                                <option value="Afroamericano">Afroamericano</option>
                                                <option value="Indigena">Indigena</option>
                                                <option value="Otra">Otra</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="instruccion">Instruccion</label>
                                            <select class="form-control form-control-sm" id="instruccion" name="instruccion">
                                                <option value="Primaria">Primaria</option>
                                                <option value="Secundaria">Secundaria</option>
                                                <option value="Superior">Superior</option>
                                                <option value="Master">Master</option>
                                                <option value="Phd">Phd</option>

                                            </select>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-success">Guardar Asistente</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">
                                   Administración de Asistentes
                                </h5>
                            <div class="card-block">
                                <p class="card-text">
                                    <div id="piechart"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                                    <script type="text/javascript">
                                        // Load google charts
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(drawChart);

                                        // Draw the chart and set the chart values
                                        function drawChart() {
                                            var data = google.visualization.arrayToDataTable([
                                                ['Task', 'Por evento'],
                                                ['Hombres', 8],
                                                ['Mujeres', 2],
                                            ]);

                                            // Optional; add a title and set the width and height of the chart
                                            var options = {
                                                'title': '',
                                                'width': 400,
                                                'height': 400
                                            };

                                            // Display the chart inside the <div> element with id="piechart"
                                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                            chart.draw(data, options);
                                        }
                                    </script>

                            </div>
                            <div class="card-footer">
                                Card footer
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                 <div class="card" >
                    <div class="card-header" >
                        Lista de asistentes
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
        </div>
    </div>
</div>
@endsection