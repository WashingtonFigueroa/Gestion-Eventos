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
                <!-- Fin -->
            </div>
        </div>
    </div>
</div>
@endsection

