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
    <div class="container-fluid row" style="margin:1% 0%;">        

        <h1 class="mt-4">Gestion livraisons</h1>
        <div class="card mb-4 row" style="width: 100%;">

            <div class="card-body row col-md-12">

                <div class="card-header row col-md-12">

                    <form class="row col-md-12" method="post" action="/home/livraisons/filter">
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

                <div class="table-responsive col-md-12">
                    <table class="table table-bordered text-center" id="datatable-10" width="100%" cellspacing="0">

                        <thead>
                            <tr style="cursor: pointer;">
                                <th>N°</th>
                                <th>DATE</th>
                                <th>Livreur</th>
                                <th>Client</th>
                                <th>Wilaya</th>
                                <th>Total</th>
                                <th>Statut</th>
                                <th>Demandeur</th>
                                <th>Décision Par</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($livraisons as $livraison)

                                <tr id="{{$livraison->num_livraison}}" style="cursor:pointer;" onclick="get_livraison(this)" num_livraison="{{$livraison->num_livraison}}" data-toggle="modal" data-target="#squarespaceModal">

                                    <td>Num{!! $livraison->num_livraison !!}</td>
                                    
                                    <td>{!! date_format(date_create($livraison->updated_at),"d/m/Y H:i:s") !!}</td>
                                    
                                    <td>
                                        {!! App\Livraison::get_livreur($livraison->num_livraison) ?? '' !!}
                                    </td>
                                    
                                    <td>{{ App\Livraison::get_client($livraison->num_livraison) ?? '' }} </td>

                                    <td class="text-left">
                                        
                                        {!! App\Client::get_wilaya(App\Livraison::get_client_all($livraison->num_livraison)[0]->id) !!}

                                    </td>


                                    
                                    <td>


                                        {!! number_format((App\Livraison::get_total($livraison->num_livraison))); !!} DA
                                    </td>

                                    @if (App\Livraison::get_statut($livraison->num_livraison) == "en attente")
                                        
                                        <td id="statut{{ $livraison->num_livraison }}" class="text-warning">
                                        <img src="{{ asset('/spin.gif') }}" width="20%">    
                                        
                                     @elseif(App\Livraison::get_statut($livraison->num_livraison) == "rejeté")                     

                                        <td id="statut{{ $livraison->num_livraison }}" class="text-danger">
                                        <img src="/img/denied.png" height="30" width="30">
                                     
                                     @elseif(App\Livraison::get_statut($livraison->num_livraison) == "validé")

                                        <td id="statut{{ $livraison->num_livraison }}" class="text-info">
                                        <i class="fa fa-check" aria-hidden="true"></i>

                                     @elseif(App\Livraison::get_statut($livraison->num_livraison) == "BL")
                                        <td id="statut{{ $livraison->num_livraison }}" class="text-primary">
                                        
                                        <i class="fa fa-truck" aria-hidden="true"></i>

                                     @elseif(App\Livraison::get_statut($livraison->num_livraison) == "terminé")
                                        
                                        <td id="statut{{ $livraison->num_livraison }}" class="text-success">
                                            
                                        <img src="/img/termine.png" height="30" width="30">
                                        

                                     @elseif(App\Livraison::get_statut($livraison->num_livraison) == "encaissement")
                                        
                                        <td style="background-color:;" id="statut{{ $livraison->num_livraison }}" class="text-danger">
                                        
                                        <img src="/exclamation.png" width="30">


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
            <div class="modal-content" id="details_livraison">
                
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="lineModalLabel"> <span class="float-left" id="depot">Dépot : </span>  </h3>

                    <a type="button" class="close" data-dismiss="modal">&times; Fermer</a>
                </div>
                
                <input style="display:none;" type="number" id="numm_livraison" value="">

                {{ csrf_field() }}
                
                <div class="modal-body" id="modal-body">
                    
                    <h3 class="float-left" id="livreur">Livreur : </h3><br>
                    
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
                    

                        <form method="post" target="_blank" action="/home/livraisons/last_approbation/BL" id="la_remise" style="margin-top:2%;" class="form-group">
                            
                            {{ csrf_field() }}

                            <input style="display:none;" type="number" id="num_livraison" name="num_livraison" value="">


                            <div class="row col-md-12">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small" for="livreur">Livreur </label>
            
                                        <select name="livreur" onchange="fit_livreur_href();" class="form-control col-md-12">                                
                                            @foreach ($livreurs as $livreur)
                                                
                                                <option class="form-control" value="{{ $livreur->id }}"> {!! $livreur->name !!} ({!! $livreur->occupe !!}) </option>

                                                {{-- expr --}}
                                            @endforeach

                                        </select>


                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small" for="depo">Dépot </label>
            
                                        <select name="depot" class="form-control col-md-12">                                

                                            @foreach ($depots as $depot)
                                                
                                                <option class="form-control" value="{{ $depot->id }}"> {!! $depot->nom !!} </option>

                                                {{-- expr --}}
                                            @endforeach

                                        </select>


                                    </div>
                                </div>

                                <div class="col-md-3">
                                    
                                    <div class="form-group">
                                        
                                        <label class="col-md-12" for="remise">% Remise </label>

                                        <input id="remise" type="number" min="0" max="100" value="0" placeholder="% Remise" name="remise" class="form-control"
                                        placeholder="">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                    <label style="visibility: hidden;" class="small" for="date_fin">date fin: </label>

                                    <button id="confirmer" onclick="afficher_confirmation(this);" class="btn btn btn-primary col-md-12">Confirmer</button>

                                    <span id="confirmer_approbation" class="row col-md-12">
                                        
                                        <button id="final_confirmation" type="submit" class="btn btn-primary col-md-6">Oui, Confirmer</button>

                                        <button onclick="retour();" class="btn btn-warning col-md-6">Retour</button>
                                    </span>
                                </div>
                            </div> 
                        </form>
                    @endif    
                     
                    @if(auth()->guard('admin')->check() || auth()->guard('depot')->check())
                        @include('encaissement.encaissement')

                        <a id="affecter" style="margin-top:5%; color: Blue;" class="btn btn-outline-info col-md-12" href="/ticket/affecter/num_livraison/" >Cliquez pour Affecter les Produits Au Livreur</a>
                                             
                     @else

                        <h6 class="btn btn-outline-primary text-center col-md-12" style="cursor:pointer;" onclick="get_bl();">Voir BL</h6>

                        <h3 class="alert alert-warning text-center"> Vous n'étes ni Admin ni Agent de dépot </h3>

                    @endif
                    {{--  --}}                    
    


                    <button style="margin-top:5%;" class="btn btn-primary col-md-12" onclick="imprimer_details();">Imprimer détails de la livraison </button>

                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('/js/gerer_livraison.js') }}" type="text/javascript"></script>

    <script>
        
        function imprimer_details() 
        {   

            $('#details_livraison').printThis();

            //
        }

        //
    </script>
@endsection
