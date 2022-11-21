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
    <h1 class="mt-4 text-white">Gestion Commande</h1>
        <div class="card mb-4">
            
            <div class="card-header">

                <h3 class="text-center"> Numéro {!! $num_commande !!} </h3>

                {{--  --}}
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table width="100%">
                        <tr>
                            <td valign="top"></td>
                            <td align="left">
                            <td align="left">
                                <h3>
                                @if (App\Commande::get_statut($num_commande) == "en attente")
                                    	
                                        <span id="statut{{ $num_commande }}" class="alert alert-warning blink">
                                           <i class="fa fa-spinner" aria-hidden="true"></i>    
                                        
                                        @elseif(App\Commande::get_statut($num_commande) == "rejeté")					   
                                        
                                         <span id="statut{{ $num_commande }}" class="alert alert-danger">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                        
                                        @elseif(App\Commande::get_statut($num_commande) == "validé")
                                        
                                         <span id="statut{{ $num_commande }}" class="alert alert-info">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        
                                        @elseif(App\Commande::get_statut($num_commande) == "BL")
                                         <span id="statut{{ $num_commande }}" class="alert alert-primary">
                                        
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        
                                        @elseif(App\Commande::get_statut($num_commande) == "terminé")
                                         
                                        <span id="statut{{ $num_commande }}" class="alert alert-success">
                                            
                                        <img src="/payment-complet.png" height="30" width="30">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        
                                        @elseif(App\Commande::get_statut($num_commande) == "encaissement")
                                        
                                        <span id="statut{{ $num_commande }}" class="alert alert-info">
                                        
                                        <img src="/hand-pay.jpg" width="30">
                                        
                                        
                                        @endif
                                        {!! App\Commande::get_statut($num_commande) ?? ''!!}                             
                                        </span>
                                        
                                </h3>
                            </td>
                            <td align="left"><h3>Nom Prénom : {{ App\Commande::get_client($num_commande)[0]->nom ?? '' }} {{ App\Commande::get_client($num_commande)[0]->prenom ?? '' }}</h3></td>
                            <td align="left"><h3> Téléphone : {{ App\Commande::get_client($num_commande)[0]->telephone ?? 'ss' }}</h3></td>
                            <td align="left"><h3> Wilaya : {{ App\Commande::get_client($num_commande)[0]->wilaya ?? ''}}</h3></td>
                            <td align="left"><h3> Commune : {{ App\Commande::get_client($num_commande)[0]->commune ?? '' }}</h3></td>
                        </tr>

                    </table>

                    

                    <br/>

                    <table class="table table-bordered text-center"  width="100%" cellspacing="0">
                        <thead >
                        <tr>
                            <th>Elt</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire DA</th>
                            <th>Total </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @foreach($commandes as $index=>$commande)
                                <tr>
                                    <th scope="row">{{$index+1 }}</th>
                                    <td>{{$commande->nom_produit ?? ""}}</td>
                                    <td align="center">{{$commande->qte}}</td>
                                    <td align="center">{{$commande->prix}} DA</td>
                                    <td align="center">{{$commande->qte*$commande->prix}} DA</td>
                                </tr>
                            <?php $total = $total + $commande->qte*$commande->prix; ?>

                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <td align="center">Total</td>
                                <td align="center">{{$total}} DA</td>
                            </tr>
                        </tfoot>
                    </table>

                </div>

            </div>

            @if ((auth()->guard('admin')->check()))
                

                @if ($commandes[0]->statut != "validé" )
                    
                    <div class="card-footer text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="col-md-12 btn btn-outline-primary "  id="btn_valider">  Valider</button>
                            </div>

                            <div class="col-md-6">
                                <button class="btn btn-outline-danger  col-md-12"  id="btn_rejeter">  Rejeter </button>                        
                            </div>


                        </div>
                            &nbsp;
                    </div>

                 @else

                    <div class="card-footer text-center">
                        <div class="row">
                                                    
                            <div class="col-md-12">
                                <button class="btn btn-outline-danger  col-md-12"  id="btn_rejeter">  Rejeter </button>                        
                            </div>


                        </div>
                            &nbsp;
                    </div>

                    {{--  --}}
                @endif


             @elseif(App\Commande::get_statut($num_commande)!='annulé')

                <div class="card-footer text-center">
                    
                    <div class="row">
                                                
                        <div class="col-md-12">
                            <button class="btn btn-outline-danger  col-md-12" onclick="afficher_motif_annulation();"> Annuler </button>
                        </div>


                        <div class="col-md-12">
                            
                            <form method="post" action="/commande/show/{{$num_commande}}/annuler">
                                
                                @csrf

                                <label class="col-md-12" id="annulation" for="motif_annulation">

                                    <span style="font-size:1.3em;" > Ecrivez le motif </span> 

                                    <textarea rows="5" id="motif_annulation" name="motif_annulation" class="form-control col-md-12"></textarea>
                                    
                                    <label> </label>
                                    
                                    <button style="margin:;auto;" type="submit" class="btn btn-danger col-md-8">Annuler</button>
                                </label>
                            </form>

                    
                        </div>

                        {{--  --}}
                    </div>
                </div>

                {{-- expr --}}                
            @endif

            @if(App\Commande::get_statut($num_commande)=='annulé')


                <div class="alert alert-warning text-center text-danger"> Motif : {!! App\Commande::get_motif_annulation($num_commande) !!} </div>

                {{--  --}}
            @endif


        </div>

    </div>






    <script>
    	


        //
    </script>
@endsection

@section('scripts')
<script>

$("#annulation").hide();

function afficher_motif_annulation()
{

    $("#annulation").show(300);

    $("#motif_annulation").prop('required',true);

    $('#motif_annulation').focus();

    //
}

$( document ).ready(function() {
    $("#btn_valider").on("click", function(e) {
		swal({
			title: "Etes Vous Sure ?",
			text: "Confirmer La Validation ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Oui',
			cancelButtonText: "Annuler",
			closeOnConfirm: false,
			closeOnCancel: false		
		},
		function(isConfirm){
			if (isConfirm){
				console.log(document.getElementById('transfer_form'))
				// document.getElementById('transfer_form').submit();
                window.location.href = '{{route('commande.valider',['num_commande'=>$num_commande])}}'; //Will take you to Google.
				swal.close()
					
			 } else {
			   swal("Annulé", "Vous avez annuler la validation", "error");
				  e.preventDefault();
			 }
		});		 
	});




    $("#btn_rejeter").on("click", function(e) {
		swal({
			title: "Etes Vous Sure ?",
			text: "  ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Oui',
			cancelButtonText: "Annuler",
			closeOnConfirm: false,
			closeOnCancel: false		
		},
		function(isConfirm){
			if (isConfirm){
				console.log(document.getElementById('transfer_form'))
				// document.getElementById('transfer_form').submit();
                window.location.href = '{{route('commande.rejeter',['num_commande'=>$num_commande])}}'; //Will take you to Google.
				swal.close()					
			 } else {
			   swal("Annulé", "Vous avez annuler", "error");
				  e.preventDefault();
			 }
		});		 
	});    


})



</script>
@endsection
