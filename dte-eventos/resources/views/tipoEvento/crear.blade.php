@extends('layouts.app') @section('content')

<div class="col-md-12 col-md-offset-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Tipo de evento</li>
            <li class="breadcrumb-item active" aria-current="page">Crear tipo de evento</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                Agregar un tipo de evento
                            </div>
                            <div class="card-body">
                                <form action="{{ route('saveTipoEvento') }}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="nombre">Nombre Tipo Evento</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Help">
                                        <small id="Help" class="form-text text-muted">*Debe ingresar un tipo de evento (Ej: Danza, Teatro, etc...).</small>
                                    </div>
                                    <button type="submit" class="btn btn-success">Crear Tipo vento</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <h5 class="card-header">
                                Administracion de Tipo Eventos
                                </h5>
                            <div class="card-block">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Tipo Evento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tipos as $tipo)
                                        <tr>
                                            <td>
                                                {{$tipo->idtipoevento}}
                                            </td>
                                            <td>
                                                {{$tipo->nombre}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               <div class="col-md-12" style="text-align: center">{{$tipos->links()}}</div> 
                            </div>
                            <div class="card-footer">
                                “El arte y el amor son lo mismo: es el proceso de verse en cosas que no son ustedes.” Chuck Klosterman
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection