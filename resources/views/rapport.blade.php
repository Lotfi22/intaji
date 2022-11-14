@extends('layouts.solic')



@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container-fluid">

    <h1 class="mt-4"> Rapport </h1>

    

	<div class="col-md-11" style="margin : 2% ;">

		<input id="myInput1" placeholder="Recherche ... Nom du produit" type="text" autofocus class="form-control">

	</div>

    <div class="card row col-md-12">

       <div class="card-header row col-md-12">

            <form method="post" action="filter" class="col-md-12 row">

                @csrf

                <div class="row col-md-12">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="small mb-1" for="date_debut">Date début : </label>

                            <input  class="small form-control py-4" id="date_debut"  name="date_debut" type="date" value="{{date('Y-m-d')}}"/>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="small mb-1" for="date_fin">Date Fin : </label>

                            <input  class="small form-control py-4"  

                            id="date_fin"  name="date_fin" type="date" value="{{date('Y-m-d')}}" />

                        </div>

                    </div>

                </div>  

            </form>

            

            <table class="row col-md-12">

                

                <div class="row col-md-12">

                    

                    <div class="card col-md-3 text-center">

                        <h4>

                        Tickets Générés :

                        </h4>

                    </div>

    

                    <div class="card col-md-3 text-center">

                        <h4>

                        Tickets Vers Depot :

                        </h4>

                    </div>

                    <div class="card col-md-3 text-center">

                        <h4>

                        Tickets Au Depot :

                        </h4>

                    </div>

                    <div class="card col-md-3 text-center">

                        <h4>

                        Tickets Sortie :

                        </h4>

                    </div>

                    

                </div>        

    

            

                <div class="row all_the_eleves">

                    @foreach($produits as $produit)

                        

                        <div style=" cursor:pointer;" {{-- onclick="rediriger('0',{{ $produit->id }})" --}} class="card col-md-3 " style="margin-top: 2%;">

                            <div class="card-body">

                                <h6 class="card-title">{{$produit->nom ?? ''}} / {{$produit->id_categorie ?? ''}} <span style="font-size:10px;"> (Générés) </span> </h6>

                                <p class="card-text text-center" id="produit_genere_{{$produit->id}}" >0</p>

                            </div>

                        </div>

                       

                        <div style=" cursor:pointer;" {{-- onclick="rediriger('vers_depot',{{ $produit->id }})" --}} class="card col-md-3 " style="margin-top: 2%;">

                            <div class="card-body">

                                <h6 class="card-title">{{$produit->nom ?? ''}} / {{$produit->id_categorie ?? ''}} <span style="font-size:10px;">  (Confirmés) </span>  </h6>

                                <p class="card-text text-center" id="produit_vers_depot_{{$produit->id}}">0</p>

                            </div>

                        </div>

                        

                        <div style=" cursor:pointer;" data-toggle="modal" data-target="#squarespaceModal" onclick="get_depots_qte({{ $produit->id }});" class="card col-md-3 " style="margin-top: 2%;">

                            <div class="card-body">

                                <h6 class="card-title">{{$produit->nom ?? ''}} / {{$produit->id_categorie ?? ''}} <span style="font-size:10px;"> (Au_Depot) </span>  </h6>

                                <p style="color: black;" class="card-text text-center" id="produit_au_depot_{{$produit->id}}">0</p>

                            </div>

                        </div>

                        

                        <div style=" cursor:pointer;" {{-- onclick="rediriger('sortie',{{ $produit->id }})" --}} class="card col-md-3 " style="margin-top: 2%;">

                            <div class="card-body">

                                <h6 class="card-title">{{$produit->nom ?? ''}} / {{$produit->id_categorie ?? ''}} <span style="font-size:10px;"> (Sortie) </span> </h6>

                                <p class="card-text text-center" id="produit_sortie_{{$produit->id}}">0</p>

                            </div>

                        </div>

    

    

                    @endforeach

                </div>

            </table>

        </div>



        <div class="card-body">

            <div class="table-responsive">

            </div>

        </div>



    </div>



</div>






    <div class="modal fade " id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="lineModalLabel">Produit par Dépots</h3>
                </div>
                
                <div class="modal-body">

                    <table class="table table-bordered text-center" id="datablee-1" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th>Dépot</th>
                                <th>Quantité</th>
                            </tr>
                        </thead>

                        <tbody id="depots">

                        </tbody>

                    </table>

                    
                </div>
            </div>
        </div>
    </div>





@endsection

@section('scripts')



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

    

	$("#myInput1").on("keyup", function() 

	{	

		var value = $(this).val().toLowerCase();

		$(".all_the_eleves div").filter(function() 

		{

	  		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

		});

	});

    



</script>



<script>

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');



    function getScannedTicket()

    {

      var date_debut = $('#date_debut').val();

      var date_fin = $('#date_fin').val();

      console.log(date_debut,date_fin)

      

      fetch('/get/scanned/tickets', 

      {

        method: 'post', 

        headers: {

          'Accept': 'application/json, text/plain, */*',

          'Content-Type': 'application/json'

        },

        body: JSON.stringify({

          _token: CSRF_TOKEN,

          date_debut : date_debut,

          date_fin : date_fin        

        })  

      })

      .then(res => res.json())

        .then(res => {

          /** 

           * nbrTicketsGenerated

          */

          var nbrTicketsGenerated = res.nbrTicketsGenerated;

          nbrTicketsGenerated.map(obj=>{

            console.log(obj)

            $('#produit_genere_'+obj.id_produit).html(obj.nbrtickets).removeClass('alert alert-primary text-black').addClass('alert alert-primary text-black');

          })

          /** 

           * nbrTicketsVersDepot

          */

          var nbrTicketsVersDepot = res.nbrTicketsVersDepot;

          

          nbrTicketsVersDepot.map(obj=>{

            console.log(obj)

            $('#produit_vers_depot_'+obj.id_produit).html(obj.nbrtickets).removeClass('alert alert-primary text-black').addClass('alert alert-primary text-black');

          })

          /** 

           * nbrTicketsAUDepot

          */

          var nbrTicketsAuDepot = res.nbrTicketsAuDepot;

          nbrTicketsAuDepot.map(obj=>{

            console.log(obj)

            $('#produit_au_depot_'+obj.id_produit).html(obj.nbrtickets).removeClass('alert alert-primary text-balck').addClass('alert alert-primary text-balck');

          })



          /** 

           * nbrTicketsSortie

          */

          var nbrTicketsSortie = res.nbrTicketsSortie;

          nbrTicketsSortie.map(obj=>{

            console.log(obj)

            $('#produit_sortie_'+obj.id_produit).html(obj.nbrtickets).removeClass('alert alert-primary text-black').addClass('alert alert-primary text-black');

          })





          

        })

        .catch(err=>function (err) {

          console.log(err.message)

      });

    }

    $(document).ready(function () {

        setInterval(getScannedTicket,1000)

    });



</script>

<script>
    
    function get_depots_qte(id_produit) 
    {

        $.ajax({
            headers: 
            {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },                    
            type:"POST",
            url:"/rapport/get_qte_depots",
            data:{id_produit:id_produit},

            success:function(data) 
            {

                var depots = "";

                for (var i = 0; i < data.length; i++) 
                {
                    depots+='<tr><td>'+data[i].depot+'</td><td>'+data[i].qte+'</td></tr>';
                }

                $("#depots").html(depots);

                //
            }

            //
        });


        //
    }

    //
</script>

@endsection



