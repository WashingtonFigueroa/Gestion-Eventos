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
                        <div class="form-group">					 
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ejm: Desarrolladores Tec..."/>
                        </div>
                        <div class="form-group">					 
                            <label for="responsable">
                                Responsable
                            </label>
                            <input type="text" class="form-control" id="responsable" placeholder="Ejm: DTE"/>
                        </div>
                        <div class="form-group">					 
                            <label for="exampleInputEmail1">
                                Email address
                            </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ejm: liwa.meraki@gmail.com"/>
                        </div>
                        <div class="form-group">					 
                            <label for="direccion">
                                Direccion
                            </label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ejm: Ibarra"/>
                        </div>
                        <div class="form-group">					 
                            <label for="telefono">
                                Telefono
                            </label>
                            <input type="text" class="form-control" id="telefono" placeholder="Ejm: 0969191290"/>
                        </div>
                        <div class="form-group">					 
                            <label for="direccion">
                                Direccion
                            </label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ejm: Ibarra"/>
                        </div>
                        <button type="submit" class="btn btn-primary">
                        Crear Organizacion
                        </button>
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
                                <th>
                                    #
                                </th>
                                <th>
                                    Nombre Organizacion
                                </th>
                                <th>
                                    Responsable
                                </th>
                                <th>
                                    Contactos
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