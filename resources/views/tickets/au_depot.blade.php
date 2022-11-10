@extends('layouts.solic')



@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container-fluid">

        <input style="display:none;" class="form-control col-md-2" readonly id="depot" type="text">

        <div class="card mb-4">

            <h4 class="card-header">

                Scanner {{-- <span> {!! count($tickets) !!} </span> --}} Tickets pour réceptionner au depot (<span id="ql_depot"></span>)

            </h4>

            <div class="card-header">

                <div class="col-md-12" style="margin:2% 0%;">

                    <div class="col-md-12">

                        <input onblur="this.focus();" autofocus onchange="SearchFunction();" 

                        class="col-md-12 form-control" id="search"  placeholder="filter avec Code Bar" />

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

                                    <td class="text-center">{{ $ticket->created_at }}</td>

                                    <td class="text-center">{{ $ticket->updated_at }}</td>

                                    <td class="text-center">{{ $ticket->getProduit()['nom'] ?? '' }}</td>

                                    <td class="text-center">{{ $ticket->codebar ?? '' }}</td>

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





<button style="display:none;" class="au_depot">bbb</button>

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







    <script>

        var depot = "";
        
        jQuery(document).ready(function($) 
        {
            
            $.ajax({
                url: "http://ip-api.com/json",
                type: 'GET',

                success: function(json)
                {
                    depot = json.region+"_"+json.regionName+"_"+json.city;

                    $("#depot").attr('value',depot);

                    $("#ql_depot").text(depot);
                },
                
                error: function(err)
                {
                    console.log("Request failed, error= " + err);
                }
            });
        });
        

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        function SearchFunction() 
        {
            var input, filter;

            input = document.getElementById("search");

            filter = input.value.toUpperCase();

            var depot = $("#depot").attr('value');

            $('#search').val('');

            var trId = filter.substr(2);

            var trFound = document.getElementById(trId);

            fetch('/ticket/au_depot/action', 

            {

                method: 'post',

                headers: 

                {

                    'Accept': 'application/json, text/plain, */*',

                    'Content-Type': 'application/json'

                },

                body: JSON.stringify

                ({

                    _token: CSRF_TOKEN,

                    ticket:trId,

                    depot:depot

                })

            })

                .then(res => res.json())

                .then(res => 

                {

                    console.log(res);

                    $(".au_depot").click();

                    $('#'+trId).css({"color": "rgb(97,193,33)", "font-weight": "bold","background-color": "#316170"}).addClass('alert alert-success')

                    trFound.getElementsByTagName("td")[4].innerHTML = "Au Dépot";
                    
                    //
                })

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

