@extends('layouts.solic')

@section('content')


	<div class="container-fluid py-4">

		<h2 class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 border-right text-white"> Commandes  <i class="mdi mdi-truck-fast"></i> </h2>


		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 text-warning">
				<div class="card">
					<div class="card-body">
						<div class="card-order">
							<h6 class="mb-2">Commandes en Attente</h6>
							<h2 class="text-right "><i class="mdi mdi-timer-sand icon-size float-left text-warning"></i><span id="commande_en_attente">{!! $commandes_en_attente[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes en attente du mois<span class="float-right" id="commande_en_attente_mois">{!! $commandes_en_attente_mois[0]->nb !!}</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 text-danger">
				<div class="card ">
					<div class="card-body">
						<div class="card-widget">
							<h6 class="mb-2">Commandes Annulées</h6>
							<h2 class="text-right">
								<i class="fa fa-times icon-size float-left text-danger" aria-hidden="true"></i>
								<span id="commande_annule">{!! $commandes_annule[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes annulées du mois <span class="float-right" id="commande_annule_mois">{!! $commandes_annule_mois[0]->nb ?? "0" !!}</span></p>
						</div>
					</div>
				</div>
			</div>			

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 text-danger">
				<div class="card">
					<div class="card-body">
						<div class="card-widget">
							<h6 class="mb-2">Commandes Rejeté</h6>
							<h2 class="text-right">

							<i class="icon-size fa fa-ban float-left text-danger" aria-hidden="true"></i>
								<span id="commande_rejete">{!! $commandes_rejete[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes rejetées du mois<span class="float-right" id="commande_rejete_mois">{!! $commandes_rejete_mois[0]->nb ?? "0" !!}</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 text-success">
				<div class="card ">
					<div class="card-body">
						<div class="card-widget">
							<h6 class="mb-2">Commandes Validées</h6>
							<h2 class="text-right">

							<i class="fa fa-check icon-size float-left text-success" aria-hidden="true" ></i>
							<span id="commande_valide">{!! $commandes_valide[0]->nb ?? '0' !!}</span></h2>
							<p class="mb-0">Commandes Validées du Mois<span class="float-right" id="commande_valide_mois">{!! $commandes_valide_mois[0]->nb ?? '0' !!}</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- Livraisons|||||||||||||||||||||||||||||||||||||||||||||||||||--}}

	 	@include('rapport_speciaux.livraisons')

		@include('rapport_speciaux.caisse')

		@include('rapport_speciaux.stock')








		{{--  --}}
	</div>    

	@section('scripts')

		<script src="{{ asset('js/gerer_rapports_speciaux.js') }}"></script>
	@endsection

	{{--  --}}
@endsection