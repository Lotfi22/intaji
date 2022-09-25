@extends('layouts.solic')

<style>
    
    .blink{
        color : #000;
        animation:blink 500ms infinite alternate;
    }
    
    @keyframes blink {
        from { opacity:1; }
        to { opacity:0; }
    };            
    
</style>



@section('content')
    <div class="container-fluid">

        <h1 class="mt-4">Gestion livraisons</h1>
        <div class="card mb-4">


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="datable-1" width="100%" cellspacing="0">

                        <thead>
                            <tr style="cursor: pointer;">
                                <th>N°</th>
                                <th>DATE</th>
                                <th>Livreur</th>
                                <th>Client</th>
                                <th>Produits</th>
                                <th>Total</th>
                                <th>Statut</th>
                                <th>Demandeur</th>
                                <th>Validateur</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($livraisons as $livraison)
                                <tr id="{{$livraison->num_livraison}}" style="cursor:pointer;" onclick="get_livraison(this)" num_livraison="{{$livraison->num_livraison}}" data-toggle="modal" data-target="#squarespaceModal">

                                    <td>{!! $livraison->num_livraison !!}</td>
                                    <td>{!! date_format(date_create($livraison->updated_at),"d/m/Y H:i:s") !!}</td>
                                    <td>
                                        {!! $livraison->livreur !!}
                                    </td>
                                    <td>{{ App\Livraison::get_client($livraison->num_livraison) ?? '' }} </td>
                                    <td>
                                       {!! App\Livraison::get_products($livraison->num_livraison) !!}
                                    </td>
                                    
                                    <td>
                                    	{!! App\Livraison::get_total($livraison->num_livraison) ?? ''!!} DA
                                    </td>

                                    @if (App\Livraison::get_statut($livraison->num_livraison) == "en attente")
                                    	
                                    	<td id="statut{{ $livraison->num_livraison }}" class="alert alert-warning blink">
										
									 @elseif(App\Livraison::get_statut($livraison->num_livraison) == "rejeté")					   

									 	<td id="statut{{ $livraison->num_livraison }}" class="alert alert-danger">
									 
									 @elseif(App\Livraison::get_statut($livraison->num_livraison) == "validé")

									 	<td id="statut{{ $livraison->num_livraison }}" class="alert alert-info">

									 @elseif(App\Livraison::get_statut($livraison->num_livraison) == "vendue")
									 	<td id="statut{{ $livraison->num_livraison }}" class="alert alert-primary">

									 @elseif(App\Livraison::get_statut($livraison->num_livraison) == "encaissé")
									 	<td id="statut{{ $livraison->num_livraison }}" class="alert alert-success">

                                    @endif

                                    
                                    	{!! App\Livraison::get_statut($livraison->num_livraison) ?? ''!!} 
                                    </td>

                                    <td>
                                    	{!! App\Livraison::get_demandeur($livraison->num_livraison) ?? ''!!}
                                    </td>

                                    <td id="validateur{{$livraison->num_livraison}}">
                                    	{!! App\Livraison::get_validator($livraison->num_livraison) ?? ''!!}
                                    </td>

                                </tr>
                            @endforeach





                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>




    <div class="modal fade " id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="lineModalLabel">Détails sur la livraison </h3>

                    <a type="button" class="close" data-dismiss="modal">&times; Fermer</a>
                </div>
                
                {{ csrf_field() }}
                
                <div class="modal-body" id="modal-body">
                    
                	<h3 class="float-left" id="livreur">Livreur : </h3>
                	<h3 class="float-right" id="client">Client : </h3>
                	


                    <table class="table table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                    
                    	{{ csrf_field() }}

                        <thead>
                        	<tr>
                        		
	                        	<th>Produit</th>
	                        	<th>Qte</th>
	                        	<th>Prix.U</th>
	                        	<th>Total</th>

                        	</tr>
                        </thead>

                        <tbody id="prods_livraison">
                        	
                        </tbody>
                    </table>

                    @if (auth()->guard('admin')->check())
	
	                    <button id="approuver" num_livraison="" onclick="approuver(this);" style="margin: 0% 8%;" type="submit" class="col-md-4 btn btn-primary btn_ajouter">Approuver</button>
	                    
	                    <button id="rejeter" num_livraison="" onclick="rejeter(this);" style="margin: 0% 8%;" type="button" class="btn btn-danger col-md-4" data-dismiss="modal" role="button">Rejeter</button>
    
                    	{{-- expr --}}
                    @endif

                    <form method="post" action="/home/livraisons/last_approbation/BL" id="la_remise" style="margin-top:2%;" class="form-group">
                        
                    	{{ csrf_field() }}

                    	<input style="display:none;" type="number" id="num_livraison" name="num_livraison" value="">

                        <label class="col-md-7" for="remise">% Remise <input id="remise" type="number" min="0" max="100" value="0" placeholder="% Remise" name="remise" class="form-control"
                        placeholder=""></label>

                        <button id="confirmer" onclick="afficher_confirmation(this);" class="btn btn-sm btn-primary col-md-4">Confirmer</button>

                        <span id="confirmer_approbation">
	                        
	                        <button id="final_confirmation" type="submit" class="btn btn-sm btn-primary col-md-2">Oui, Confirmer</button>

	                        <button onclick="retour();" class="btn btn-sm btn-warning col-md-2">Retour</button>
                        </span>

                    </form>



					{{--  --}}                    
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('/js/gerer_livraison.js') }}" type="text/javascript"></script>

    <script>
    	


        //
    </script>
@endsection
