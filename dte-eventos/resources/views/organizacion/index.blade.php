@extends('layouts.app') @section('content')

<div class="col-md-12 col-md-offset-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Organizaciones</li>
            <li class="breadcrumb-item active" aria-current="page">Crear organización</li>
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
                                <form action="{{ route('saveOrganizador') }}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="nombre"> Nombre</label>
                                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="Help">
                                            <small id="Help" class="form-text text-muted">*Debe ingresar el nombre de la organización.</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="responsable">Responsable</label>
                                            <input type="text" class="form-control form-control-sm" id="responsable" name="responsable" aria-describedby="Help">
                                            <small id="Help" class="form-text text-muted">*Debe ingresar el nombre del responsable de la organización.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control form-control-sm" id="email" name="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" class="form-control form-control-sm" id="telefono" name="telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Direccion</label>
                                        <input type="text" class="form-control form-control-sm" id="direccion" name="direccion">
                                    </div>
                                    <div class="form-group">
                                        <label for="detalle">Detalle</label>
                                        <input type="text" class="form-control form-control-sm" id="detalle" name="detalle">
                                    </div>
                                    <button type="submit" class="btn btn-success">Crear Organizacion</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header" >
                                Administracion de Organizaciones
                                </h5>
                            <div class="card-block">
                                <div  style="width: 18rem;margin: 0px auto">
                                  <img class="card-img-top" src="unape.jpg" alt="Card image cap">
                                  <div class="card-body">
                                    <p class="card-text"></p>
                                  </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                “Todos los niños nacen artistas. El problema es cómo seguir siendo artistas al crecer.”
                                Pablo Picasso
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
                                        <th scope="col"> # </th>
                                        <th scope="col"> Nombre Organizacion</th>
                                        <th scope="col"> Responsable </th>
                                        <th scope="col"> Email</th>
                                        <th scope="col"> Telefono</th>
                                        <th scope="col"> Direccion</th>
                                        <th scope="col"> Detalle</th>
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

                        </div>
                    </div>
                </div>

                {{ $organizador->links() }}
            </div>
        </div>
    </div>
</div>
@endsection