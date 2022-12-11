<h2 class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 border-right text-primary"> Caisse <i class="ion-cash"></i> </h2>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<span style="display:none;" > {{ $i=0 }} </span>
			<div class="row">

				@foreach ($caisses as $caisse)

					<div class="col-xl-4 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
						<div class="card-body text-center">
							@if ($i==0)
								
								<h6 class="mb-0 text-primary">Recette Aujoud'hui</h6>
								<h2 class="mb-1 mt-2 text-primary" id="caisse_aujoudhui">{!! number_format($caisse) !!} DA </h2>

							@elseif($i==1)
								
								<h6 class="mb-0 text-success">Total caisse</h6>
								<h2 class="mb-1 mt-2 text-success" id="caisse_total">{!! number_format($caisse) !!} DA </h2>
							@elseif($i==2)
								
								<h6 class="mb-0 text-danger">Reste</h6>
								<h2 class="mb-1 mt-2 text-danger" id="caisse_reste">{!! number_format($caisse) !!} DA </h2>
								
								{{-- expr --}}
							@endif
							<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0%</span> for Last month</p>
						</div>
					</div>

					<span style="display:none;" > {{ $i++ }} </span>

					{{-- expr --}}
				@endforeach

			</div>
		</div>
	</div>
</div>
