@extends('layouts.app') @section('content')

<div class="col-md-12 col-md-offset-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Evento</li>
            <li class="breadcrumb-item active" aria-current="page">Crear evento</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" >
                                Datos de la organizacion
                            </div>
                            <div class="card-body">
                                <form action="{{ route('saveEvento') }}" method="post">
                                {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="idtipoevento">ID Tipo Evento</label>
                                            <input type="text" class="form-control form-control-sm" id="idtipoevento" name="idtipoevento">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lugar">Lugar</label>
                                            <input type="text" class="form-control form-control-sm" id="lugar" name="lugar">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="fecha">Fecha</label>
                                            <input type="date" class="form-control form-control-sm" id="fecha" name="fecha">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="hora">Hora</label>
                                        <input type="time" class="form-control form-control-sm" id="hora" name="hora">                                         
                                        </div>
                                        <div class="col-md-6">
                                            <label for="imagen">Imagen</label>
                                        <input type="file" class="form-control form-control-sm" id="imagen" name="imagen">
                                        </div>                                           
                                    </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="contacto">Contratos</label>
                                        <input type="file" class="form-control form-control-sm" id="pfdcontrato" name="pdfcontrato">

                                        
                                        </div>
                                        <div class="col-md-3">
                                            <label for="contacto">Contacto</label>
                                            <input type="text" class="form-control form-control-sm" id="contacto" name="contacto">
                                        </div>
                                            <div class="col-md-3">
                                                <label for="instructor">Instructor</label>
                                        <input type="text" class="form-control form-control-sm" id="instructor" name="instructor">
                                                
                                            </div>
                                            <div class="col-md-2">
                                                <label for="duracion">Duracion</label>
                                        <input type="number" class="form-control form-control-sm" id="duracion" name="duracion">
                                            </div>
                                        </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="costo">Costo</label>
                                            <input type="text" class="form-control form-control-sm" id="costo" name="costo">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="costo">Costo</label>
                                        <input type="text" class="form-control form-control-sm" id="costo" name="costo">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="detalle">Detalle</label>
                                      
                                            <input type="text" class="form-control form-control-sm" id="detalle" name="detalle">
                                        </div>

                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success">Crear Tipo vento</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">
                                   Administración de Eventos
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
                <div class="card" >
                    <div class="card-header" >
                        Lista de organizaciones
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
        </div>
    </div>
</div>
@endsection