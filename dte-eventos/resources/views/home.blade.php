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
		
<!--Probando -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-703802">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-703802">
					</li>
					<li data-slide-to="1" data-target="#carousel-703802" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-703802">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="arkipus2.jpg" />
						<div class="carousel-caption">
							<h4>
							
							</h4>
							<p>
						
							</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="tikramunay2.jpg" />
						<div class="carousel-caption">
							<h4>
								DANZA
							</h4>
							<p>
							Es importante resaltar el hecho de que la danza tiene su origen ya en la Prehistoria pues desde siempre el hombre ha tenido la necesidad de expresar sus sentimientos y no sólo a través de la comunicación verbal sino también mediante lo que sería la comunicación corporal.					</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="teatro2.jpg" />
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
						<!--	El teatro es un tipo de espectáculo que ha acompañado a la civilización humana desde tiempos muy antiguos. Un tipo de representación artística que siempre ha sido del gusto de todos en sus diferentes variedades. -->
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-703802" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-703802" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
</div>
<div> 


</div>
	<!-- Inicio -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<img alt="Bootstrap Image Preview" width="350" src="unape.jpg" />
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
</div>			


<!--Fin-->

<hr>
<p>
</p>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!--Footer -->
<div  class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					
					<h3>Enlaces Rápidos</h3>
					<ul>
					<li><a href="{{url('createorganizacion')}}">Organizacion</a></li>
					<li><a href="crearTipoEvento">Tipo Evento</a></li>
					<li><a href="{{url('createvento')}}">Eventos</a></li>
					<li><a  href="creatasistente">Asistentes</a></li>
				
				</ul>
				</div>
				<div class="col-md-4">
				<h3>Dirección</h3>
				<ul>
				<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Sánchez y Cifuentes y Villamar 
					Ibarra- Ecuador</li>
				
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="presidenciaunape@gmail.com"> presidenciaunape@gmail.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0999758210</li>

			</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection

