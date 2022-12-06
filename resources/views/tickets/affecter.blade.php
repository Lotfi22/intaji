@extends('layouts.solic')

@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <div class="container-fluid">

        <style>
            
            .blink{
                color : #000;
                animation:blink 1000ms infinite alternate;
            }
            
            @keyframes blink {
                from { opacity:1; }
                to { opacity:0; }
            };            
            
        </style>

        <div class="card row col-md-12">
            <div class="card-header row col-md-12">
                
                <h1 style="cursor:pointer;" class="col-md-12 alert alert-info text-center blink" >Livreur : {{ $le_livreur->prenom ?? '' }} / {{ $le_livreur->email ?? '' }} </h1>
                
                <div class="row col-md-12">

                    <div class="col-md-12">

                        <table class="col-md-12 table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center" >Produit Livraison</th>
                                    <th class="text-center" >Quantité Livraison</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($livraisons as $prod)
                                    
                                    <tr>
                                        
                                        <td class="text-center" > {{ $prod->nom_produit }} </td>
                                        
                                        <td class="text-center" > {{ $prod->qte }} </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <hr>
                    
                    <div style="margin-top:5%;" class="col-md-12">

                        <table id="datatable-5" class="col-md-6 table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">Produit ({!! $le_livreur->email !!})</th>
                                    <th class="text-center">Quantité ({!! $le_livreur->email !!})</th>
                                </tr>
                            </thead>
                            <tbody id="produit_qte">
                                @foreach($produit_qte as $prod)
                                    
                                    <tr>
                                        
                                        <td class="text-center" > {{ $prod->nom }} </td>
                                        
                                        <td class="text-center" > {{ $prod->qte }} </td>
                                        
                                    </tr>
                                     
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
              {{--  --}}                
            </div>
            

            <div class="card-header row col-md-12">

                <div class="row col-md-12">
                    
                    <div class="col-md-12" style="margin-bottom: 4%;">
                        <input onblur="this.focus()" autofocus="true" onchange="SearchFunction();" class="col-md-12 form-control is-valid"
                            id="search" placeholder="Cliquez ici pour filter avec Code Bar" />
                    </div>

                    <div class="col-md-6">
                        <a class=" col-md-12 float-right btn btn-primary btn-sm"
                            href="{{ route('ticket.detacher', ['livreur' => $_livreur]) }}">
                            Détacher Colis
                        </a>
                    </div>



                    <div class="col-md-6">
                        <a class=" col-md-12  btn btn-primary btn-sm" href="{{ route('ticket.retour', ['livreur' => $_livreur]) }}">
                            Colis Retour
                        </a>
                    </div>

                    
                    {{-- <div class="col-md-4">
                        <button onclick="fit_produits();" data-toggle="modal" data-target="#Bon_livraison" class="col-md-12 btn btn-primary btn-sm"> 
                            <i class="fa fa-arrow-right"></i> Envoyer la demande de livraison 
                        </button>
                    </div> --}}

                    <div class="modal fade " id="Bon_livraison" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="lineModalLabel"> <i class="fa fa-pencil"></i>Editer la Livraison</h3>
                                </div>

                                <div class="row modal-body">
                                    <form id="formulaire_bl" class="row col-md-12" action="/ticket/affecter/livreur/{{$le_livreur->id}}/BL" method="post" enctype="multipart/form-data">
                                        
                                        @csrf
                                        
                                        <div class="form-group col-md-3">
                                            <label for="client">client</label>

                                            <select name="client" id="client" class="form-control col-md-12 select2-show-search">

                                                <option class="form-control" value="">cl 1</option>
                                                <option class="form-control" value="">cl 2</option>
                                                <option class="form-control" value="">cl 3</option>

                                            </select>

                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="produit">Produit</label>
                                            <input id="produit" type="text" value="" name="produit" class="form-control"
                                            placeholder="">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="qte">Quantité</label>
                                            <input id="qte" type="text" value="" name="qte" class="form-control"
                                            placeholder="Entrer le qte">
                                        </div>


                                        <div class="form-group col-md-3">
                                            <label for="prix">Prix.U</label>
                                            <input id="prix" type="text" value="" name="prix" class="form-control"
                                            placeholder="Entrer le prix">
                                        </div>


                                        <div class="form-group col-md-12">
                                            <input id="valider" type="submit" value="Valider" name="valider" class="col-m-12 btn btn-primary">
                                        </div>


                                    </form>



                                </div>


                            </div>

                        </div>

                    </div>

                    
                </div>



            </div>

            

            <div class="card-body">
                <div class="table-responsive">


                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">créé le</th>
                                <th class="text-center">Au Depot le </th>
                                <th class="text-center"> nom de produit</th>
                                <th class="text-center">code bar </th>
                                <th class="text-center">Staut </th>
                                <th class="text-center">num_ticket_produit </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr id="{{ $ticket->id }}">
                                    <td class="text-center" >{{ $ticket->created_at }}</td>
                                    <td class="text-center" >{{ $ticket->updated_at }}</td>
                                    <td class="text-center" >{{ App\Produit::getNomProduit($ticket->id_produit) ?? '' }}</td>
                                    <td class="text-center" >{{ $ticket->codebar ?? '' }}</td>
                                    <td class="text-center" >
                                        {{ $ticket->satut == '0' ? 'Vient d\'étre créé' : $ticket->satut }}
                                        {!! ($ticket->satut=='vers_depot' ? 'Confirmé' : '') !!}
                                    </td>
                                    <td class="text-center" >{{ $ticket->num_ticket_produit ?? '' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>


                </div>
            </div>


        </div>
    </div>

<button style="display:none;" class="affecter">bbb</button>

@endsection




@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>

        window.addEventListener("keydown", function(event) {

            if (event.getModifierState("CapsLock") == true) {

                swal.close();

                //
            } else {

                $("#search").val("");

                swal("Attention", "Veuillez Allumer Ver Maj", "warning");


                //
            }

            //
        });
    </script>


    <script type="text/javascript">

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var id_livreur = <?php echo json_encode($_livreur); ?>;

        function fit_produits() 
        {

            $.ajax({
                headers: 
                {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },                    
                type:"POST",
                url:"/BL/fit_produits/ajax",
                data:{id_livreur : id_livreur},

                success:function(data) 
                {
                    var to_append = '';

                    to_append += '{{ csrf_field() }}'



                    to_append += '<div class="form-group col-md-12"><label for="nom_client">nom_client</label><select name="nom_client" id="nom_client" class="form-control col-md-12 select2-show-search"><option class="form-control" value="cl1">cl 1</option><option class="form-control" value="cl2">cl 2</option><option class="form-control" value="cl3">cl 3</option></select></div>';
                    
                    to_append += '<div style="display:none;" class="form-group col-md-6"><label for="adresse_client">Adresse Client</label><input id="adresse_client" value="adresse client" type="text" name="adresse_client" class="form-control"placeholder=""></div>';
                    
                    for (i = 0; i < data.length; i++) 
                    {
    
                        to_append += '<div class="form-group col-md-4"><label for="produit'+data[i].id+'">Produit</label><input readonly id="produit'+data[i].id+'" type="text" value=" '+data[i].nom+' " name="produit'+data[i].id+'" class="form-control"placeholder=""></div>';
                        to_append += '<div class="form-group col-md-4"><label for="qte'+data[i].id+'">Quantité</label><input required id="qte'+data[i].id+'" type="number" value="'+data[i].qte+'" name="qte'+data[i].id+'" class="form-control"placeholder="Entrer le qte"></div>';
                        to_append += '<div class="form-group col-md-4"><label for="prix'+data[i].id+'">Prix.U</label><input required id="prix'+data[i].id+'" type="number" name="prix'+data[i].id+'" class="form-control"placeholder="Entrer le prix"></div>';

                        

                    }
                    to_append += '<hr>';

                    to_append += '<div class="form-group col-md-12"><label for="freelancer">Freelancer</label><input id="freelancer" placeholder="Freelancer" type="text" class="form-control"></div><hr>';


                    to_append += '<div class="form-group col-md-12"><input id="valider" type="submit" value="Valider" name="valider" class="col-m-12 btn btn-primary"></div>'
                    
                    $("#formulaire_bl").html(to_append);
                    //
                }

	            //
            });

            
            //
        }

        /**/
    </script>

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        
        /*var ids = {!! $ids !!}
        
        ids = JSON.stringify(ids);
        
        ids = JSON.parse(ids);*/
        
        var livreur = <?php echo json_encode($_livreur); ?>;

        var num_livraison = <?php echo json_encode($num_livraison ?? "0"); ?>;
        
        function redirect_manuel()
        {
            window.location.href='/ticket/affecter/livreur/'+livreur+'/manuel';
        }
        
        function SearchFunction() 
        {
            var input, filter;
         
            input = document.getElementById("search");
         
            filter = input.value.toUpperCase();
         
            $('#search').val('');
         
            var trId = filter.substr(2);
            
            var trFound = document.getElementById(trId);
            
            
            fetch('/ticket/affecter/livreur',
            {
                method: 'post',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    _token: CSRF_TOKEN,
                    livreur: livreur,
                    ticket: trId,
                    num_livraison: num_livraison
                })
            })
            .then(res => res.json())
            .then(res => 
            {   

                if(res.msg!=="Affectation Impossible") 
                {

                    $(".affecter").click();
                    
                    $("#produit_qte").html("");
                    
                    for(i=0;i<res.produit_qte.length;i++)
                    {   
                        //console.log(res.produit_qte[i]);
                        
                        trAppended = '<tr><td class="text-center">'+res.produit_qte[i].nom+'</td><td class="text-center"> '+res.produit_qte[i].qte+'</td></tr>'
                        
                        $("#produit_qte").append(trAppended)
                        
                    }

                    trFound.getElementsByTagName("td")[4].innerHTML = "Sortie";
                    
                    $('#' + trId).addClass('alert alert-success')

                    //
                }
                else
                {

                    var audio = new Audio('{{ asset('/assets/sounds/beep.mp3') }}');
                    audio.play();

                    swal("Attention", "Veuillez Avez déja affecter toute la quantité au livreur", "error");                    

                    //
                }
                
                //
            })
            .catch(err => function(err) {
                toastr.danger('Error')
                
            });

            
            /*else
            {
                toastr.error('Probelm : Ticket déja sortie')
                
            }*/
            
        }
    </script>
@endsection
@section('styles')
    <style>
        .tr-code {
            display: none;
        }

    </style>
@endsection
