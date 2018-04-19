@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bienvenidos Sistema de Administracion  Eventos</div>               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>   
                <!-- Inicio -->
                @include('layouts.admin')
                <!-- Fin -->
            </div>
        </div>
    </div>
</div>
@endsection

