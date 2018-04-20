@extends('layouts.app')

@section('content')
  
<div class="col-md-12 col-md-offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                        <form action="{{ route('saveTipoEvento') }}" method="post">
                        {!! csrf_field() !!} 
                        <div class="form-group">
                            <label for="nombre">Nombre Tipo Evento</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <button type="submit" class="btn btn-success">Crear Tipo vento</button>
                    </form>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-header">
                                Administracion de Tipo Eventos
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
                    {{$tipos->links()}}
                </div>
            </div>
        </div>
</div>
@endsection