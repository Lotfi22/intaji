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
                <div class="table-responsive">
                    <table class="table table-bordered text-center"  id="datatable-10" width="100%" cellspacing="0">

                        <thead>
                            <tr style="cursor: pointer;">
                                <th>N°</th>
                                <th>DATE</th>
                                <th>Client</th>
                                <th>Wilaya</th>
                                {{-- <th>Produits</th> --}}
                                <th>Total</th>
                                <th>Statut Client</th>
                                <th>Statut Commande</th>
                                <th>Freelancer</th>
                                <th>Demandeur</th>
                                <th>Validateur</th>
                                <th>Num Livraison</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($commandes as $commande)

                                <tr id="{{$commande->num_commande}}" style="cursor:pointer;" onclick="get_commande(this)" num_commande="{{$commande->num_commande}}" data-toggle="modal" data-target="#squarespaceModal">

                                    <td>Num{!! $commande->num_commande !!}</td>
                                    
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
                                    <td>
                                        @if (App\Commande::get_status_client($commande->num_commande) == "Renseignments")

                                            <img width="40" src="{{ asset('/thinking.png') }}"> <p style="display: none;">{!! App\Commande::get_status_client($commande->num_commande) !!}</p>
                                        @else

                                            <img width="40" src="{{ asset('/smile.png') }}"> <p style="display: none;">{!! App\Commande::get_status_client($commande->num_commande) !!}</p>

                                            {{-- expr --}}
                                        @endif
                                    </td>


                                    @if (App\Commande::get_statut($commande->num_commande) == "en attente")
                                    	
                                    	<td id="statut{{ $commande->num_commande }}" class="alert alert-warning blink">
                                           <i class="fa fa-spinner" aria-hidden="true"></i>    
										
									 @elseif(App\Commande::get_statut($commande->num_commande) == "rejeté")					   

									 	<td id="statut{{ $commande->num_commande }}" class="alert alert-danger">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
									 
									 @elseif(App\Commande::get_statut($commande->num_commande) == "validé")

									 	<td id="statut{{ $commande->num_commande }}" class="alert alert-info">
                                        <i class="fa fa-check" aria-hidden="true"></i>

									 @elseif(App\Commande::get_statut($commande->num_commande) == "BL")
									 	<td id="statut{{ $commande->num_commande }}" class="alert alert-primary">
                                        
                                        <i class="fa fa-truck" aria-hidden="true"></i>

									 @elseif(App\Commande::get_statut($commande->num_commande) == "terminé")
									 	
                                        <td id="statut{{ $commande->num_commande }}" class="alert alert-success">
                                            
                                        <img src="/payment-complet.png" height="30" width="30">
                                        <i class="fa fa-check" aria-hidden="true"></i>

                                     @elseif(App\Commande::get_statut($commande->num_commande) == "encaissement")
                                        
                                        <td id="statut{{ $commande->num_commande }}" class="alert alert-info">
                                        
                                        <img src="/hand-pay.jpg" width="30">


                                    @endif

                                    
                                    	{!! App\Commande::get_statut($commande->num_commande) ?? ''!!} 
                                    </td>

                                    <td>
                                        {!! App\Commande::get_freelancer($commande->num_commande) ?? ''!!}                                         
                                    </td>


                                    <td>
                                    	{!! App\Commande::get_demandeur($commande->num_commande) ?? ''!!}
                                    </td>

                                    <td id="validateur{{$commande->num_commande}}">
                                    	{!! App\Commande::get_validator($commande->num_commande) ?? ''!!}
                                    </td>

                                    <td id="">
                                    {!! App\Commande::get_num_livraison($commande->num_commande) ?? ''!!}
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
