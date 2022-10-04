@extends('layouts.solic')

@section('content')
	
	<div class="page-header">

		<div class="container-fluid py-4">

		    <div class="row">

				<div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
				    <div class="card">
				        <div class="card-body p-3">
				            <div class="row">
				                <div class="col-8">
				                    <div class="numbers">
				                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Balance</p>
				                        <h5 class="font-weight-bolder mb-0">
				                            {!! number_format($balance) !!} <span style="font-size:17px;">DA</span>
				                        </h5>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>


				<div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
				    <div class="card">
				        <div class="card-body p-3">
				            <div class="row">
				                <div class="col-8">
				                    <div class="numbers">
				                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Encaissé : 

											<span class="text-success text-sm font-weight-bolder">                  	
			                            	{!! (int)(($versement/$balance)*100) !!}%
			                        		</span>
				                        </p>
				                        <h5 class="font-weight-bolder mb-0">
				                            {!! number_format($versement) !!} <span style="font-size:17px;">DA</span>
    
				                        </h5>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

				<div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
				    <div class="card">
				        <div class="card-body p-3">
				            <div class="row">
				                <div class="col-8">
				                    <div class="numbers">
				                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Reste : 

											<span class="text-danger text-sm font-weight-bolder">                  	

				                            	{!! (int)(($reste/$balance)*100+1) !!}%
				                        	</span>
				                        </p>
				                        <h5 class="font-weight-bolder mb-0">
				                            
				                            {!! number_format($reste) !!} 
				                            <span style="font-size:17px;">DA</span>
				                        </h5>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>


			</div>
		</div>		
	</div>


	<div class="form-group">

		<form class="col-md-12 row" method="post" action="/home/caisse/filter">

			{{ csrf_field() }}

			<label for="date_debut" class="form-control col-md-4">
					
				<input type="date" id="date_debut" name="date_debut" class="form-control" value="{{$date_debut}}">
			</label> 

			<label for="date_fin" class="form-control col-md-4">
					
				<input type="date" id="date_fin" name="date_fin" class="form-control" value="{{$date_fin}}">
			</label> 

			<button class="col-md-4 btn btn-sm btn-primary" type="submit">Filter</button>

		</form>

		<div class="card mb-4">

	        <div class="card-body">
	            <div class="table-responsive">
	                <table class="table table-bordered text-center" id="datatable-10" width="100%" cellspacing="0">

	                    <thead>
	                        <tr style="cursor: pointer;">
	                            <th>N°</th>
	                            <th>DATE</th>
	                            <th>Montant</th>
	                            <th>Encaissé</th>
	                            <th>Reste</th>
	                            <th>Complet ?</th>
	                        </tr>
	                    </thead>

	                    <tbody>

	                        @foreach ($livraisons as $livraison)

	                            <tr id="{{$livraison->num_livraison}}" num_livraison="{{$livraison->num_livraison}}" data-toggle="modal" data-target="#squarespaceModal">

	                                <td>Num{!! $livraison->num_livraison !!}</td>
	                                
	                                <td>{!! date_format(date_create($livraison->updated_at),"d/m/Y H:i:s") !!}</td>
									
	                                {!! setlocale(LC_MONETARY,"en_US"); !!}

	                                <td>
	                                    {!! number_format(App\Livraison::get_total($livraison->num_livraison)) ?? '' !!} DA
	                                </td>
	                                
	                                <td>
	                                	{!! number_format(App\Livraison::get_versement($livraison->num_livraison)) ?? '' !!} DA
	                                </td>
	                                
	                                <td class="text-center">
	                                	{!! App\Livraison::get_reste($livraison->num_livraison) ?? '' !!}
	                                </td>
	                                
	                                <td>

	                                	{!! 
	                                		App\Livraison::get_complet($livraison->num_livraison) 
	                                	!!} 
	                                </td>
	                            </tr>
	                        @endforeach





	                    </tbody>

	                </table>

	            </div>

	        </div>

	    </div>


		{{--  --}}
	</div>



	<script>
		
		function show_recette()
		{

			var date_debut = $("#date_debut").val();
			var date_fin = $("#date_fin").val();

		    $.ajax({
		        headers: 
		        {
		           'X-CSRF-TOKEN': $('input[name="_token"]').val()
		        },                    
		        type:"POST",
		        url:"/home/caisse/depenses",
		        data:{date_debut:date_debut,date_fin:date_fin},

		        success:function(data) 
		        {

		        	console.log(data);

		        	paragraph = "";
		        	
		        	for (var i = 0; i < data.recettes_groupes.length; i++) 
		        	{

		        		var href = '/home/imprimer_bon/'+data.recettes_groupes[i].id+'/'+data.recettes_groupes[i].id_groupe+'/'+data.recettes_groupes[i].payement

		        		paragraph += "<tr style='font-size:1.5em;' ><td>"+data.recettes_groupes[i].created_at.substr(0,10)+"</td><td> Groupe : #"+ data.recettes_groupes[i].id_groupe +"</td> <td> "+data.recettes_groupes[i].nom+" "+data.recettes_groupes[i].prenom+"</td> <td>"+data.recettes_groupes[i].payement+" DA </td> <td> <a href="+href+" target='_blank' class='btn btn-sm btn-info'>Imprimer Bon</a></td> </tr>"
		        	}

		        	for (var i = 0; i < data.recettes_dawarat.length; i++) 
		        	{

		        		var href = '/home/imprimer_bon_dawra/'+data.recettes_dawarat[i].id+'/'+data.recettes_dawarat[i].id_dawra+'/'+data.recettes_dawarat[i].payement		        		

		        		paragraph += "<tr style='font-size:1.5em;' ><td>"+data.recettes_dawarat[i].created_at.substr(0,10)+"</td><td> Dawra : # "+data.recettes_dawarat[i].id_dawra+" </td><td>"+data.recettes_dawarat[i].nom+" "+data.recettes_dawarat[i].prenom+" </td> <td> "+data.recettes_dawarat[i].payement+" DA </td> <td> <a href="+href+" target='_blank' class='btn btn-sm btn-info'>Imprimer Bon</a></td></tr>"
		        	}

		        	for (var i = 0; i < data.recette_frais.length; i++) 
		        	{

		        		var href = '/home/imprimer_bon_frais/'+data.recette_frais[i].id+'/'+data.recette_frais[i].montant+'/'+data.recette_frais[i].updated_at

		        		paragraph +="<tr style='font-size:1.5em;' ><td>"+data.recette_frais[i].updated_at.substr(0,10)+"</td><td> Frais d'inscriptions  </td><td>" + data.recette_frais[i].nom+" "+data.recette_frais[i].prenom+"</td> <td>"+data.recette_frais[i].montant+" DA</td><td> <a href="+href+" target='_blank' class='btn btn-sm btn-info'>Imprimer Bon</a></td> </tr>"
		        	}

		        	$("#recette_details").html(paragraph);

		        	$(".show_details").click();

		        	//
				}
			})	


			//
		}

		function show_depenses()
		{

			var date_debut = $("#date_debut").val();
			var date_fin = $("#date_fin").val();

		    $.ajax({
		        headers: 
		        {
		           'X-CSRF-TOKEN': $('input[name="_token"]').val()
		        },                    
		        type:"POST",
		        url:"/home/caisse/depenses_2",
		        data:{date_debut:date_debut,date_fin:date_fin},

		        success:function(data) 
		        {


		        	paragraph = "";
		        	
		        	for (var i = 0; i < data.depenses_profs.length; i++) 
		        	{

		        		paragraph += "<li style='font-size:1.5em;' >"+data.depenses_profs[i].nom+" "+data.depenses_profs[i].prenom+" | payement Prof : "+data.depenses_profs[i].payement + "</li>"
		        	}

		        	for (var i = 0; i < data.depenses_autre.length; i++) 
		        	{
		        		paragraph += "<li style='font-size:1.5em;' >"+data.depenses_autre[i].commentaire+" | montant : "+ data.depenses_autre[i].montant +" </li>"
		        	}


		        	$("#recette_details").html(paragraph);

		        	$(".show_details").click();


		        	//
		        }
		    });    
			//
		}

		//
	</script>


	{{--  --}}
@endsection