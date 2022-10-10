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
    <h1 class="mt-4 text-white">Gestion Commandes</h1>
        <div class="card mb-4">
            <div class="card-header">
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table width="100%">
                        <tr>
                            <td valign="top"></td>
                            <td align="left">
                            <h3>Nom Prénom : {{ App\Commande::get_client($num_commande)[0]->nom ?? '' }} {{ App\Commande::get_client($num_commande)[0]->prenom ?? '' }}</h3>
                            <h3> Téléphone : {{ App\Commande::get_client($num_commande)[0]->telephone ?? 'ss' }}</h3>
                            <h3> Téléphone : {{ App\Commande::get_client($num_commande)[0]->wilaya ?? ''}}</h3>
                            <h3> Téléphone : {{ App\Commande::get_client($num_commande)[0]->commune ?? '' }}</h3>
                            
                            </td>
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


            <div class="card-footer text-center">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary" href="{{route('commande.valider',['num_commande'=>$num_commande])}}" id="btn_valider">  Valider</button>
                    </div>

                    <div class="col-md-6">
                        <a class="btn btn-danger" href="{{route('commande.rejeter',['num_commande'=>$num_commande])}}">  rejeter</a>                
                    </div>


                </div>
                    &nbsp;
            </div>


        </div>

    </div>






    <script>
    	


        //
    </script>
@endsection

@section('scripts')
<script>
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
})



</script>
@endsection
