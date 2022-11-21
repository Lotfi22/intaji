@extends('layouts.solic')

@section('content')



	<!-- PAGE-HEADER -->
	<div class="page-header">
		<h4 class="page-title">Rapport Spéciaux</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Rapport Spéciaux</li>
		</ol>
	</div>	

	<div class="container-fluid py-4">

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<div class="card-order">
							<h6 class="mb-2">Commandes en Attente</h6>
							<h2 class="text-right "><i class="mdi mdi-timer-sand icon-size float-left text-primary"></i><span>{!! $commandes_en_attente[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes en attente du mois<span class="float-right">{!! $commandes_en_attente_mois[0]->nb !!}</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card ">
					<div class="card-body">
						<div class="card-widget">
							<h6 class="mb-2">Commandes Annulées</h6>
							<h2 class="text-right">
								<i class="mdi mdi-cube icon-size float-left text-warning"></i>
								<span>{!! $commandes_annule[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes annulées du mois <span class="float-right">{!! $commandes_annule_mois[0]->nb ?? "0" !!}</span></p>
						</div>
					</div>
				</div>
			</div>			

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<div class="card-widget">
							<h6 class="mb-2">Commandes Rejeté</h6>
							<h2 class="text-right"><i class="icon-size mdi mdi-poll-box   float-left text-success"></i><span>{!! $commandes_rejete[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes rejetées du mois<span class="float-right">{!! $commandes_rejete_mois[0]->nb ?? "0" !!}</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card ">
					<div class="card-body">
						<div class="card-widget">
							<h6 class="mb-2">Commandes Validées</h6>
							<h2 class="text-right"><i class="fa fa-cart-plus icon-size float-left text-danger"></i><span>{!! $commandes_valide[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Monthly Sales<span class="float-right">{!! $commandes_valide_mois[0]->nb ?? '0' !!}</span></p>
						</div>
					</div>
				</div>
			</div>

		{{--  --}}
	</div>    


	{{--  --}}
@endsection