@extends('layouts.solic')
@section('styles')
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

@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Gestion Commandes</h1>
        <div class="card mb-4">
        <div class="card-header">
                <a class="btn btn-primary" href="{{route('commande.show.create')}}"> <i
                        class="fa fa-plus"></i> Ajouter Commande
                </a>
            </div>

            <div class="card-body">


                <div class="card-header row col-md-12">

                    <form class="row col-md-12" method="post" action="/commande/filter">
                        @csrf
                        <div class="row col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small" for="date_debut">date début : </label>
                                    <input  class="form-control" id="date_debut"
                                     name="date_debut" value="{{$date_debut}}"
                                     type="date" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small " for="date_fin">date fin: </label>
                                    <input  class="form-control" id="date_fin"
                                     name="date_fin" value="{{$date_fin}}"
                                     type="date" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                
                                <label style="visibility: hidden;" class="small" for="date_fin">date fin: </label>

                                <button type="submit" class="text-white form-control btn btn-primary">
                                    <span style="color:#fff;">Filtrer</span>
                                </button>
                            </div>
                    </form>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered text-center"  id="datatable-10" width="100%" cellspacing="0">

                        <thead>
                            <tr style="cursor: pointer;">
                                <th>N°</th>
                                <th>DATE</th>
                                <th>mise à jour le : </th>
                                <th>Client</th>
                                <th>Wilaya</th>
                                {{-- <th>Produits</th> --}}
                                <th>Total</th>
                                <th>Statut Client</th>
                                <th>Statut Commande</th>
                                <th>Freelancer</th>
                                <th>Demandeur</th>
                                <th>Décision Par </th>
                                <th>Num Livraison</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($commandes as $commande)

                                <tr id="{{$commande->num_commande}}" style="cursor:pointer;" onclick="get_commande(this)" num_commande="{{$commande->num_commande}}" data-toggle="modal" data-target="#squarespaceModal">

                                    <td>Num{!! $commande->num_commande !!}</td>
                                    
                                    <td>{!! date_format(date_create($commande->created_at),"d/m/Y H:i:s") !!}</td>
                                    
                                    <td>{!! date_format(date_create($commande->updated_at),"d/m/Y H:i:s") !!}</td>
                                    
                                    <td>
                                        {{ App\Commande::get_client($commande->num_commande)[0]->nom ?? '' }}
                                        {{ App\Commande::get_client($commande->num_commande)[0]->prenom ?? '' }}

                                    </td>

                                    <td class="text-left">
                                        {!! App\Client::get_wilaya(App\Commande::get_client($commande->num_commande)[0]->id) !!}

                                    </td>
                                    
                                    <td>

                                        {{-- {!! setlocale(LC_MONETARY,"en_US"); !!} --}}

                                    	{!! number_format((App\Commande::get_total($commande->num_commande))); !!} DA
                                    </td>
                                    <td class="text-center">
                                        @if (App\Commande::get_status_client($commande->num_commande) == "Renseignments")

                                            <img width="40" src="{{ asset('/thinking.png') }}"> <p style="display: none;">{!! App\Commande::get_status_client($commande->num_commande) !!}</p>
                                        @else

                                            <img width="40" src="{{ asset('/smile.png') }}"> <p style="display: none;">{!! App\Commande::get_status_client($commande->num_commande) !!}</p>

                                            {{-- expr --}}
                                        @endif
                                    </td>


                                    @if (App\Commande::get_statut($commande->num_commande) == "en attente")
                                    	
                                    	<td id="statut{{ $commande->num_commande }}" class="text-warning">
                                        <img src="{{ asset('/spin.gif') }}" width="20%">
										
									 @elseif(App\Commande::get_statut($commande->num_commande) == "rejeté")					   

									 	<td id="statut{{ $commande->num_commande }}" class="text-danger">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
									 
									 @elseif(App\Commande::get_statut($commande->num_commande) == "validé")

									 	<td id="statut{{ $commande->num_commande }}" class="text-success">
                                        <i class="fa fa-check" aria-hidden="true"></i>

									 @elseif(App\Commande::get_statut($commande->num_commande) == "BL")
									 	<td id="statut{{ $commande->num_commande }}" class="text-info">
                                        
                                        <i class="fa fa-truck" aria-hidden="true"></i>

									 @elseif(App\Commande::get_statut($commande->num_commande) == "terminé")
									 	
                                        <td id="statut{{ $commande->num_commande }}" class="text-success">
                                            
                                        <img src="/payment-complet.png" height="30" width="30">
                                        <i class="fa fa-check" aria-hidden="true"></i>

                                     @elseif(App\Commande::get_statut($commande->num_commande) == "encaissement")
                                        
                                        <td id="statut{{ $commande->num_commande }}" class="text-info">
                                        
                                        <img src="/hand-pay.jpg" width="30">

                                     @elseif(App\Commande::get_statut($commande->num_commande) == "annulé")
                                        
                                        <td id="statut{{ $commande->num_commande }}" class="text-danger">
                                        
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    @endif

                                    
                                    	{!! App\Commande::get_statut($commande->num_commande) ?? ''!!} 
                                    </td>

                                    <td>
                                        {!! App\Commande::get_freelancer($commande->num_commande) ?? ''!!}                                         
                                    </td>


                                    <td>

                                    	{!! App\Commande::get_vrai_demandeur(App\Commande::get_demandeur($commande->num_commande)) ?? ''!!}
                                    </td>

                                    <td id="validateur{{$commande->num_commande}}">
                                    	{!! App\Commande::get_validator($commande->num_commande) ?? ''!!}
                                    </td>

                                    <td class="text-center" id="">
                                    {!! App\Commande::get_num_livraison($commande->num_commande) ?? 'No Livraison'!!}
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>





    <script src="{{ asset('/js/gerer_commandes.js') }}" type="text/javascript"></script>

    <script>
    	


        //
    </script>
@endsection
