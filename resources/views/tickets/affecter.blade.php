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
                
                <h1 style="cursor:pointer;" onclick="redirect_manuel();" class="col-md-12 alert alert-info text-center blink" >Livreur : {{ $le_livreur->prenom ?? '' }} / {{ $le_livreur->email ?? '' }} </h1>
                <h4 class="col-md-12">
                    Affecter Ticket {{ count($tickets) }} 
                </h4>
            </div>
            

            <table class="col-md-12 table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center" >Produit</th>
                        <th class="text-center" >Quantité</th>
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


            <div class="card-header row col-md-12">

                <div class="row col-md-12">
                    
                    <div class="col-md-12" style="margin-bottom: 4%;">
                        <input onblur="this.focus()" autofocus="true" onchange="SearchFunction();" class="col-md-12 form-control"
                            id="search" placeholder="Cliquez ici pour filter avec Code Bar" />
                    </div>

                    <div class="col-md-4">
                        <a class=" col-md-12 float-right btn btn-primary btn-sm"
                            href="{{ route('ticket.detacher', ['livreur' => $_livreur]) }}">
                            Détacher Colis
                        </a>
                    </div>



                    <div class="col-md-4">
                        <a class=" col-md-12  btn btn-primary btn-sm" href="{{ route('ticket.retour', ['livreur' => $_livreur]) }}">
                            Colis Retour
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a target="_blank" class="col-md-12 btn btn-primary btn-sm" href="{{ route('livreur.bl', ['livreur' => $_livreur]) }}">
                            Imprimer BL
                        </a>
                    </div>

                    &nbsp;
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
        /*if( (event.getModifierState("CapsLock"))===true)
            {

                swal.stopLoading();
                swal.close();

                //
            }
            else
            {

                $(obj).val("");

                swal("Attention", "Veuillez Allumer Ver Maj", "warning");

                //
            }*/



        /**/
    </script>

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        
        /*var ids = {!! $ids !!}
        
        ids = JSON.stringify(ids);
        
        ids = JSON.parse(ids);*/
        
        var livreur = <?php echo json_encode($_livreur); ?>;
        
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
                    ticket: trId
                })
            })
            .then(res => res.json())
            .then(res => 
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
