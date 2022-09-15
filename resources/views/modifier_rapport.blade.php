@extends('layouts.ui')

@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        
        <h3 class="text-center" style="color:#FFFFFF;">{!! \Session::get('success') !!}</h3>
        
    </div>
@endif

<div class="container-fluid">
    <h2 class="mt-4 text-center">Modifier Rapport Produit : <span style="color:#cb0c9f;" >{!! $produit->nom !!}</span>  </h2>
    <!--<h3 class="mt-4 text-center" id="quantitee">Quantité d'aujourd'hui : <span style="color:#cb0c9f;" > {!! count($tickets) !!} </span> </h3>-->
    <div class="card mb-4">
       <div class="card-header">
            <form method="post" action="/rapport/modifier/produit/{{$id_produit}}/statut/{{$statut}}/debut/{{$date_debut}}/fin/{{$date_fin}}/post">
                @csrf
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" style="font-size:2em;" for="qte_actuelle">séléctionner le statut à modifier</label>
                            
                            <select class="form-control" id="qte_actuelle" name="statut_actuelle" onchange="fit_max(this)">
                                
                                @forelse($tickets as $ticket)
                                
                                    <option class="form-control" value="{{ $ticket->satut }}" max="{{ $ticket->qte }}" style="font-size:2em;">Statut : {{ $ticket->satut == '0' ? 'Vient d\'étre créé' : $ticket->satut }} | Quantité : {!! $ticket->qte !!} </option>
                                
                                @empty
                                    
                                    <option class="form-control" style="font-size:2em;">Rien</option>                                    
                                
                                @endforelse
                                
                            </select>
                        </div>
                    </div>    

                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <label class="small mb-1" style="font-size:2em;color:#cb0c9f;" for="new_statut">séléctionner le nouveau statut</label>
                            
                            <select class="form-control" id="new_statut" name="new_statut" onchange="show_explication();">
                                
                                <option class="form-control" max="{{ App\Produit::getQteProduitStatut($id_produit,'0',$date_debut,$date_fin) }}" value="0" style="font-size:2em;">Statut : Viend'etre crée | Quantité : {{ App\Produit::getQteProduitStatut($id_produit,0,$date_debut,$date_fin) }} </option>
                                <option class="form-control" max="{{ App\Produit::getQteProduitStatut($id_produit,'vers_depot',$date_debut,$date_fin) }}" value="vers_depot" style="font-size:2em;">Statut : Vers_depot | Quantité : {{ App\Produit::getQteProduitStatut($id_produit,'vers_depot',$date_debut,$date_fin) }} </option>
                                <option class="form-control" max="{{ App\Produit::getQteProduitStatut($id_produit,'au_depot',$date_debut,$date_fin) }}" value="au_depot" style="font-size:2em;">Statut : Au_depot | Quantité : {{ App\Produit::getQteProduitStatut($id_produit,'au_depot',$date_debut,$date_fin) }} </option>
                                <option class="form-control" max="{{ App\Produit::getQteProduitStatut($id_produit,'sortie',$date_debut,$date_fin) }}" value="sortie" style="font-size:2em;">Statut : Sortie | Quantité : {{ App\Produit::getQteProduitStatut($id_produit,'sortie',$date_debut,$date_fin) }} </option>
                                <option class="form-control" max="{{ App\Produit::getQteProduitStatut($id_produit,'retour',$date_debut,$date_fin) }}" value="retour" style="font-size:2em;">Statut : Retour | Quantité : {{ App\Produit::getQteProduitStatut($id_produit,'retour',$date_debut,$date_fin) }} </option>
                                <option class="form-control" max="{{ App\Produit::getQteProduitStatut($id_produit,'annulé',$date_debut,$date_fin) }}" value="annulé" style="font-size:2em;">Statut : Annulé | Quantité : {{ App\Produit::getQteProduitStatut($id_produit,'annulé',$date_debut,$date_fin) }} </option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="sectionner_livreur">
                        <label class="small mb-1" for="livreur">Séléctionnez Livreur: </label>
                        
                        <select class="form-control js-example-basic-single" size="5" name="livreur" id="livreur">
                            
                            <option value="">{{ __('Séléctionner ...') }}</option>
                            @foreach ($livreurs as $livreur)
                                <option value="{{ $livreur->id }}">
                                    {{ $livreur->name ?? '' }} {{ $livreur->prenom ?? '' }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    
                    <hr>
                    <div style="margin-top:5%;" class="col-md-12">
                        <div class="form-group">
                            
                            <label class="small mb-1 col-md-12 text-center" style="font-size:2em;color:#cb0c9f;" for="quantite">séléctionner la quantité à modifier</label>
                            <input type="number" class="form-control" value="0" required min="1" max="{{ $tickets[0]->qte ?? 0 }}" id="new_qte" name="new_qte" onkeyup="show_explication();">
                        </div>                        
                    </div>
                    
                    <hr>
                    
                    
                    
                    <h4 style="margin-top:5%;" id="explication" class="text-center"> Vous allez modifier du statut : <span style="color:#cb0c9f" id="statut_ancien"></span> --> au statut --> : <span  style="color:#cb0c9f" id="statut_nouveau"></span> , quantité : <span  style="color:#cb0c9f" id="qte_change"></span> </h4>
                    
                    
                    <button id="valider" style="margin-top:5%;" type="submit" class="btn btn-outline-primary col-md-12"> Valider </button>
                                        
                </div>  
            </form>
                                    
        </div>

    </div>

</div>




@endsection
@section('scripts')


<script>
    
    $("#explication").hide(0);
    $("#sectionner_livreur").hide(0);
    

    function fit_max(objet)
    {

        var statut_actuel = $("#qte_actuelle").find(":selected").val();
        if(statut_actuel==0){statut_actuel='Vient d\'etre crée'}
        var qte_actuel = $("#qte_actuelle").find(":selected").attr("max");
        var statut_nouveau = $("#new_statut").find(":selected").val();
        if(statut_nouveau==0){statut_nouveau='Vient d\'etre crée'}
        var qte_nouveau = $("#new_statut").find(":selected").attr("max");
        var new_qte = $("#new_qte").val();

        var max = $(objet).find(":selected").attr("max");
        
        /*if(parseInt(new_qte)>parseInt(max))
        {
            $("#new_qte").removeClass("is-valid").addClass("is-invalid");
        }
        else
        {
            $("#new_qte").removeClass("is-invalid").addClass("is-valid");
        }*/
        
        $("#new_qte").attr("max",max);

        $("#statut_ancien").text(statut_actuel+' ('+(qte_actuel-new_qte)+')');
        
        $("#statut_nouveau").text(statut_nouveau+' ('+(qte_nouveau+new_qte)+')');
        
        $("#qte_change").text(new_qte);
        
        $("#explication").show(1000);
        
        if(statut_actuel==statut_nouveau)
        {
            $("#valider").hide(1000);
            $("#qte_actuelle").removeClass("is-valid").addClass("is-invalid");
            $("#new_statut").removeClass("is-valid").addClass("is-invalid");
        }
        else
        {
            $("#valider").show(1000);
            $("#qte_actuelle").removeClass("is-invalid").addClass("is-valid");
            $("#new_statut").removeClass("is-invalid").addClass("is-valid");
        }
        

    }
    
    function show_explication()
    {
        
        var statut_actuel = $("#qte_actuelle").find(":selected").val();
        if(statut_actuel==0){statut_actuel='Vient d\'etre crée'}
        var qte_actuel = $("#qte_actuelle").find(":selected").attr("max");
        var statut_nouveau = $("#new_statut").find(":selected").val();
        if(statut_nouveau==0){statut_nouveau='Vient d\'etre crée'}
        var qte_nouveau = $("#new_statut").find(":selected").attr("max");
        var new_qte = $("#new_qte").val();
        
        /*if(parseInt(new_qte)>parseInt(max))
        {
            $("#new_qte").removeClass("is-valid").addClass("is-invalid");
        }
        else
        {
            $("#new_qte").removeClass("is-invalid").addClass("is-valid");
        }*/


        $("#statut_ancien").text(statut_actuel+' ('+(parseInt(qte_actuel)-parseInt(new_qte))+')');
        
        $("#statut_nouveau").text(statut_nouveau+' ('+parseInt(parseInt(qte_nouveau)+parseInt(new_qte))+')');
        
        $("#qte_change").text(new_qte);
        
        $("#explication").show(1000);
        
        if(statut_nouveau == "sortie" || statut_nouveau == "retour")
        {
            
            $("#sectionner_livreur").show(1000);    
            
        }
        else
        {
            $("#sectionner_livreur").hide(1000);
        }
        
        if(statut_actuel==statut_nouveau)
        {
            $("#valider").hide(1000);
            $("#qte_actuelle").removeClass("is-valid").addClass("is-invalid");
            $("#new_statut").removeClass("is-valid").addClass("is-invalid");
        }
        else
        {
            $("#valider").show(1000);
            $("#qte_actuelle").removeClass("is-invalid").addClass("is-valid");
            $("#new_statut").removeClass("is-invalid").addClass("is-valid");
        }
        
        
    }

    
</script>




<script>
    
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
    function rediriger(statut,id_produit)
    {
      
      var date_debut = $('#date_debut').val();
      var date_fin = $('#date_fin').val();
      
      fetch('/rapport/rediriger1', 
      {
        method: 'post', 
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          _token: CSRF_TOKEN,
          date_debut : date_debut,
          date_fin : date_fin,
          statut : statut,
          id_produit : id_produit        
        })  
      })
      .then(res => res.json())
        .then(res => 
        {
         
            if(res==true)
            {
                
                window.location.href = '/rapport/modifier/produit/'+id_produit+'/statut/'+statut+'/debut/'+date_debut+'/fin/'+date_fin;
                
            }
          
        })
        .catch(err=>function (err) {
          console.log(err.message)
      });

        
    }

</script>

@endsection

