<h2 class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 border-right text-primary"> Livraisons <i class="mdi mdi-forklift"> </h2>

<div class="card">

	<div class="row">

		<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 border-right text-warning">
			
			<div class="card-body text-center">
				<h6 class="mb-3">Livraison En attente</h6>

				<img src="{{ asset('/spin.gif') }}" width="20%">
				
				@foreach ($livraisons as $livraison)
					
					@if ($livraison->statut == "en attente")
						
						<h2 id="livraison_en_attente" class="mb-1 mt-3  display-4 font-weight-semibold text-warning">{!! $livraison->nb_livraison !!}</h2>
						
						{{-- expr --}}
					@endif
					
					{{-- expr --}}
				@endforeach
				
				<p class="mb-3 text-muted"> Lion Royal</p>
				<a href="#" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right"></i></a>
			</div>
		</div>

		<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 border-right text-danger">
			<div class="card-body text-center">
				<h6 class="mb-3">Livraison Rejetées | Annulées</h6>

				<img src="/img/denied.png" width="20%">

				@foreach ($livraisons as $livraison)
					
					@if ($livraison->statut == "rejeté")
						
						<h2 id="livraison_rejeté" class="mb-1 mt-3  display-4 font-weight-semibold">{!! $livraison->nb_livraison !!}</h2>
						
						{{-- expr --}}
					@endif
					
					{{-- expr --}}
				@endforeach

				<p class="mb-3 text-muted"> Lion Royal</p>
				<a href="#" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right"></i></a>
			</div>
		</div>

		<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 border-right text-info">
			<div class="card-body text-center">
				
				<h6 class="mb-3">Livraison Validées</h6>

				<i class="fa fa-check" aria-hidden="true"></i>

				@foreach ($livraisons as $livraison)
					
					@if ($livraison->statut == "validé")
						
						<h2 id="livraison_validé" class="mb-1 mt-3  display-4 font-weight-semibold">{!! $livraison->nb_livraison !!}</h2>
						
						{{-- expr --}}
					@endif
					
					{{-- expr --}}
				@endforeach

				<p class="mb-3 text-muted"> Lion Royal</p>
				<a href="#" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right"></i></a>
			</div>
		</div>

		<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 border-right text-primary">
			<div class="card-body text-center">
				
				<h6 class="mb-3">Livraisons BL</h6>

				<i class="fa fa-truck fa-2" aria-hidden="true"></i>

				@foreach ($livraisons as $livraison)
					
					@if ($livraison->statut == "BL")
						
						<h2 id="livraison_BL" class="mb-1 mt-3  display-4 font-weight-semibold">{!! $livraison->nb_livraison !!}</h2>
						
						{{-- expr --}}
					@endif
					
					{{-- expr --}}
				@endforeach

				<p class="mb-3 text-muted"> Lion Royal</p>
				<a href="#" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right"></i></a>
			</div>
		</div>

		<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 border-right text-success">
			<div class="card-body text-center">
				
				<h6 class="mb-3">Livraisons Terminées</h6>

				<img src="/img/termine.png" width="20%">

				@foreach ($livraisons as $livraison)
					
					@if ($livraison->statut == "terminé")
						
						<h2 id="livraison_terminé" class="mb-1 mt-3  display-4 font-weight-semibold">{!! $livraison->nb_livraison !!}</h2>
						
						{{-- expr --}}
					@endif
					
					{{-- expr --}}
				@endforeach

				<p class="mb-3 text-muted"> Lion Royal</p>
				<a href="#" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right"></i></a>
			</div>
		</div>


		<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 border-right text-danger">
			<div class="card-body text-center">
				
				<h6 class="mb-3">Livraisons Encaissement</h6>

				<img src="/exclamation.png" width="20%">

				@foreach ($livraisons as $livraison)
					
					@if ($livraison->statut == "encaissement")
						
						<h2 id="livraison_encaissement" class="mb-1 mt-3  display-4 font-weight-semibold">{!! $livraison->nb_livraison !!}</h2>
						
						{{-- expr --}}
					@endif
					
					{{-- expr --}}
				@endforeach

				<p class="mb-3 text-muted"> Lion Royal</p>
				<a href="#" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right"></i></a>
			</div>
		</div>
	</div>

</div>