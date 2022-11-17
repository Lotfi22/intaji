@extends('layouts.solic')

@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container-fluid">

        <div class="card mb-4">

            <h4 class="card-header">

                Scanner {{-- <span id="nb_tickets"> {{ count($tickets) }} </span> --}}  Tickets vers depot :

            </h4>



            <div class="row card-header">

                <div class="col-md-12 row" style="margin:2% 0%;">

                    <div class="col-md-12 row" style="margin-bottom: 3%;">

                        <select class="form-control js-example-basic-single1" 
                            name="livreur" id="livreur">
                            
                            @if (count($livreurs)>0)

                                <option value="{{ $livreurs[0]->id }}">
                                    {{ $livreurs[0]->name ?? '' }} {{ $livreurs[0]->prenom ?? '' }} | {{ $livreurs[0]->email ?? '' }}
                                </option>

                                @for ($i=1; $i<count($livreurs) ; $i++)
                                    
                                    <option value="{{ $livreurs[$i]->id }}">
                                        {{ $livreurs[$i]->name ?? '' }} {{ $livreurs[$i]->prenom ?? '' }} | {{ $livreurs[$i]->email ?? '' }}
                                    </option>

                                @endfor



                            @else

                                {{-- expr --}}
                            @endif

                        
                        </select>

                    </div>

                    <div class="col-md-11">

                        <input {{-- onblur="this.focus();" --}} autofocus onchange="SearchFunction();" 

                        class="col-md-12 is-valid form-control" id="search"  placeholder="filter avec Code Bar" />

                    </div>

                </div>    


                <table class="col-md-12 table table-bordered" width="100%" cellspacing="0">

                    <thead>

                        <tr>

                            <th class="text-center" >Produit</th>

                            <th class="text-center" >Livreur</th>

                            <th class="text-center" >Quantité</th>

                        </tr>

                    </thead>

                    <tbody id="produit_qte">

                        @foreach($produit_qte as $prod)

                            

                            <tr>

                                

                                <td class="text-center" > {{ $prod->nom }} </td>

                                <td class="text-center" > {{ $prod->livreur }} </td>

                                <td class="text-center" > {{ $prod->qte }} </td>

                                

                            </tr>

                             

                        @endforeach

                    </tbody>

                </table>

            </div>



            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">

                        <thead>

                            <tr>

                                <th class="text-center" >créé le</th>

                                <th class="text-center" >Au Depot le </th>

                                <th class="text-center" >nom de produit</th>

                                <th class="text-center" >code bar </th>

                                <th class="text-center" >ID </th>

                                <th class="text-center" >Staut </th>

                                <th class="text-center" >num_ticket_produit </th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($tickets as $ticket)

                                @if($ticket->id == substr($ticket->codebar,2) )

                                    <tr id="{{$ticket->id}}">

                                @else        

                                    <tr id="{{$ticket->id}}" class="alert alert-danger">

                                @endif

                                    <td class="text-center">{{ $ticket->created_at }}</td>

                                    <td class="text-center">{{ $ticket->updated_at }}</td>

                                    <td class="text-center">{{ $ticket->getProduit()['nom'] ?? '' }}</td>

                                    <td class="text-center">{{ $ticket->codebar ?? '' }}</td>

                                    <td class="text-center">{{ $ticket->id ?? '' }}</td>

                                    <td class="text-center">{{ $ticket->satut == '0' ? 'Vient d\'étre créé' : $ticket->satut }}</td>

                                    <td class="text-center">{{ $ticket->num_ticket_produit ?? '' }}</td>

                                </tr>

                            @endforeach

                        </tbody>



                    </table>

                    <br>





                </div>

            </div>





        </div>

    </div>





<button style="display:none;" class="vers_depot">bbb</button>

@endsection







@section('scripts')





<script type="text/javascript">

    

    window.addEventListener("keydown", function(event) 

    {

        if(event.getModifierState("CapsLock")==true)

        {
            swal.close();
            //
        }

        else

        {

            $("#search").val("");

            swal("Attention", "Veuillez Allumer Ver Maj", "warning");

            //

        }

        //

    });    

    /**/

</script>





@section('scripts')

    <script>


        $('#livreur').on('change', function(e) {
            var optionSelected = $("option:selected", this);
            var id_livreur = this.value;
        });




        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');



        function SearchFunction() 

        {


            var input, filter;         

            input = document.getElementById("search");

            filter = input.value.toUpperCase();

            $('#search').val('');
            
            var trId = filter.substr(2);

            var trFound = document.getElementById(trId);

            var id_livreur = $("#livreur").find(":selected").attr('value');

            fetch('/ticket/vers_depot/action', 

            {

                method: 'post',

                headers: {

                    'Accept': 'application/json, text/plain, */*',

                    'Content-Type': 'application/json'

                },

                body: JSON.stringify({

                    _token: CSRF_TOKEN,

                    ticket:trId,

                    id_livreur:id_livreur

                })

            })

            .then(res => res.json())

            .then(res => 

            {

                $('#search').val('')

                

                if(res.ticket!==null)

                {

                    $(".vers_depot").click();
                    
                    $("#produit_qte").html("");

                    for(i=0;i<res.produit_qte.length;i++)

                    {       

                        trAppended = '<tr><td class="text-center">'+res.produit_qte[i].nom+'</td><td class="text-center">'+res.produit_qte[i].livreur+'</td><td class="text-center">'+res.produit_qte[i].qte+'</td></tr>'

                        $("#produit_qte").append(trAppended)

                    }

                    $("#nb_tickets").html(res.reste);

                    trFound.getElementsByTagName("td")[5].innerHTML = "Vers Dépot";

                    $('#'+trId).addClass('alert alert-success')
                }

                else

                {   
                    toastr.danger('Ticket n\'éxiste pas ');
                }

            })

            .catch(err=>function (err) 

            {

                toastr.danger('Error')

                console.log("err.message")

            });



            /*

            else

            {

                toastr.error('Ticket n\'existe pas ')

                $('#search').val('')

                for (i = 1; i < tr.length; i++) 

                {

                    tr[i].classList.remove("tr-code");

                }

            }

            */

        }

        

    </script>

@endsection

@section('styles')

    <style>

        .tr-code{

            display:none;

        }

    </style>

@endsection

