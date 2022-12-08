<h2 class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 border-right text-primary"> Stock  <i class="mdi mdi-home-map-marker"></i> </h2>

<div class="row row-cards">
	
	<span style="display:none;" > {{ $i=0 }} </span>
	
	@foreach ($stocks as $stock)
		
		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<div class="card">
				<div class="card-header pt-2 pb-0 border-bottom-0">
					<h3 class="card-title">{!! $stock->nom !!} (Au dépot)</h3>
					<div class="card-options">
						<a class="btn btn-sm btn-primary"><i class="fa fa-bar-chart mb-0"></i></a>
					</div>
				</div>
				<div class="card-body pt-0">
					<h3 class="d-inline-block mb-2">{!! $stock->qte !!} Machines / {!! $tickets[$i]->qte !!}</h3>
					
					<div class="progress h-2 mt-2 mb-2">
						
						<div class="progress-bar bg-{{App\Livraison::get_color()}} w-{{App\Livraison::get_pourcentage_decrease($stock,$tickets[$i])}}" role="progressbar"></div>
						{{-- expr --}}
						


					</div>
					<div class="float-left">
						<div class="mt-2">
							<i class="fa fa-caret-down text-success"></i>
							<span>{!! App\Livraison::get_pourcentage_decrease($stock,$tickets[$i]) ?? (object)[] !!}% decrease</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COL END -->
	
		<span style="display:none;" > {{ $i++ }} </span>
	
		{{-- expr --}}
	@endforeach

	{{--  --}}	
</div>
