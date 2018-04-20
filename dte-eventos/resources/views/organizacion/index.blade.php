@extends('layouts.app')

@section('content')
   
<div class="col-md-12 col-md-offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">

                        <form action="{{ route('saveOrganizador') }}" method="post">
                        {!! csrf_field() !!} 
                        <div class="form-group">					 
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">					 
                            <label for="responsable">Responsable</label>
                            <input type="text" class="form-control" id="responsable" name="responsable">
                        </div>
                        <div class="form-group">					 
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">					 
                        <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="form-group">					 
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="form-group">					 
                        <label for="detalle">Detalle</label>
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                        <button type="submit" class="btn btn-success">Crear Organizacion</button>
                    </form>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-header">
                                Administracion de Organizaciones
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
                                <th> Nombre Organizacion</th>
                                <th> Responsable </th>
                                <th> Email</th>
                                <th> Telefono</th>
                                <th> Direccion</th>
                                <th> Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($organizador as $org)
                        <tr>
                            <td> {{$org->idorganizador}} </td>
                            <td> {{$org->nombre}}</td>
                            <td> {{$org->responsable}}</td>
                            <td> {{$org->email}}</td>
                            <td> {{$org->telefono}}</td>
                            <td> {{$org->direccion}}</td>
                            <td> {{$org->detalle}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $organizador->links() }}
                </div>
            </div>
        </div>
</div>
@endsection