@extends('layouts.solic')

@section('content')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container-fluid">

        <style>
            
            .blink{
                color : #fff;
                animation:blink 2000ms infinite alternate;
            }
            
            @keyframes blink {
                from { opacity:1; }
                to { opacity:0; }
            };            
            
        </style>

        <div class="card row col-md-12">

            <div class="card-header row col-md-12">

                <h2 class="col-md-12 text-center alert alert-warning" > Scanner pour annuler le ticket </h2>
                <hr>
                
                <h5> Scanner Tickets </h5>
                
                <div class="row col-md-12">
                    <div class="col-md-12">
                        <input onblur="this.focus()" autofocus onchange="SearchFunction();" class="is-valid col-md-12 form-control"
                            id="search" placeholder="filter avec Code Bar" />
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
                                @if($ticket->id == substr($ticket->codebar,2) )
                                    <tr id="{{$ticket->id}}">
                                @else        
                                    <tr id="{{$ticket->id}}" class="alert alert-danger">
                                @endif
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



@endsection




@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        window.addEventListener("keydown", function(event) {

            if (event.getModifierState("CapsLock") == true) {

                swal.stopLoading();
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
        
        function SearchFunction() 
        {
            var input, filter;
         
            input = document.getElementById("search");
         
            filter = input.value.toUpperCase();
         
            $('#search').val('');
         
            var trId = filter.substr(2);
            
            var trFound = document.getElementById(trId);
            
            
            fetch('/ticket/vers_depot/annuler/annulation',
            {
                method: 'post',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    _token: CSRF_TOKEN,
                    ticket: trId
                })
            })
            .then(res => res.json())
            .then(res => 
            {
                
                /*toastr.success('Ticket Annulé')                */

                trFound.getElementsByTagName("td")[4].innerHTML = "Annulé";
                $('#' + trId).addClass('alert alert-warning')

                
            })
            .catch(err => function(err) {
                toastr.danger('Error')
                
            });

            /**/            
        }
    </script>

    {{--  --}}
@endsection

@section('styles')
    <style>
        .tr-code {
            display: none;
        }

    </style>
@endsection
