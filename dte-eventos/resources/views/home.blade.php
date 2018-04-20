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
								ARTES PLASTICAS
							</h4>
							<p>
							Del latín ars, el arte está vinculado a las creaciones del ser humano que buscan expresar una visión sensible del mundo real o imaginario. Dichas expresiones pueden plasmarse en distintos soportes.
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
								TEATRO
							</h4>
							<p>
							El teatro es un tipo de espectáculo que ha acompañado a la civilización humana desde tiempos muy antiguos. Un tipo de representación artística que siempre ha sido del gusto de todos en sus diferentes variedades.
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
<!-- 

                <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="arkipus.jpg" />
						<div class="card-block">
                            <hr>
							<h5 class="card-title">
                                ARTES PLASTICAS
							</h5>
							<p class="card-text">
                            Del latín ars, el arte está vinculado a las creaciones del ser humano que buscan expresar una visión sensible del mundo real o imaginario. Dichas expresiones pueden plasmarse en distintos soportes.
							</p>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="tikramunay.jpg" />
						<div class="card-block">
                            <hr>
							<h5 class="card-title">
                                DANZA
							</h5>
							<p class="card-text">
                            Es importante resaltar el hecho de que la danza tiene su origen ya en la Prehistoria pues desde siempre el hombre ha tenido la necesidad de expresar sus sentimientos y no sólo a través de la comunicación verbal sino también mediante lo que sería la comunicación corporal.
							</p>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="teatro.jpg" />
						<div class="card-block">
                            <hr>
							<h5 class="card-title">
                                TEATRO
							</h5>
							<p class="card-text">
                            El teatro es un tipo de espectáculo que ha acompañado a la civilización humana desde tiempos muy antiguos. Un tipo de representación artística que siempre ha sido del gusto de todos en sus diferentes variedades.
							</p>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<hr>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					DTE <small>"Desarrolladores Tecnológicos Ecuatorianos"</small>
				</h1>
			</div>
		</div>
	</div>

                <!-- Fin -->
            </div>
        </div>
    </div>
</div>
@endsection

