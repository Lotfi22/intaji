@extends('layouts.solic')


<?php use App\Check; ?>



@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container-fluid">

        <input style="display:none;" class="form-control col-md-2" readonly id="depot" type="text">

        <div class="card mb-4 row col-md-12">

            <h4 class="card-header row col-md-12">

                <div class="col-md-2">
                    
                    <img src="{{ asset('img/receptionner.png') }}">

                    {{--  --}}
                </div>


                <div class="col-md-8 text-success text-center" style="font-size:1.6em;">Scanner Tickets pour réceptionner au depot {!! $depot!="" ? $depot : '' !!}</div>

                <div class="col-md-2">
                    
                    <img src="{{ asset('img/receptionner.png') }}">

                    {{--  --}}
                </div>

            </h4>

            <div class="card-header">

                <div class="col-md-12" style="margin:2% 0%;">

                    <div class="col-md-12">

                        <input onblur="this.focus();" autofocus onchange="SearchFunction();" 

                        class="is-valid col-md-12 form-control" id="search"  placeholder="filter avec Code Bar" />

                    </div>

                </div>                    

            </div>


            <div class="container-fluid py-4">

                @if(Check::CheckAuth(['depot']))

                    <div class="row">
                        
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="color:purple;">
                            <div class="card">
                                <div class="card-body" style="border: solid purple 1px;">
                                    <div class="card-order">
                                        <h6 class="mb-2">
                                            
                                            {!! $produits[0]->nom ?? '' !!} | {!! $produits[0]->reference ?? '' !!}

                                            {{--  --}}
                                        </h6>
                                        <h2 class="text-right ">

                                            <img class="float-left" src="{{ asset('produits/1.jpeg') }}" width="7%">

                                            <span id="scan_{{ $produits[0]->nom ?? '' }}">

                                                @if ($produits[0]->nom == $produit_qte[0]->nom)

                                                    {!! $produit_qte[0]->qte ?? '' !!}    
                                                @else

                                                    0
                                                    {{-- expr --}}
                                                @endif

                                                
                                            </span>
                                        </h2>
                                        <p class="mb-0">


                                            Machine scannées Aujourd'hui
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="color:purple;">
                            <div class="card">
                                <div class="card-body" style="border: solid purple 1px;">
                                    <div class="card-order">
                                        <h6 class="mb-2">
                                            
                                            {!! $produits[0]->nom ?? '' !!} | {!! $produits[0]->reference ?? '' !!}

                                            {{--  --}}
                                        </h6>
                                        <h2 class="text-right ">

                                            <img class="float-left" src="{{ asset('produits/1.jpeg') }}" width="7%">
                                            
                                            <span id="au_depot_{{$produits[0]->nom ?? '' }}">
                                                
                                                {!! App\Depot::depot_single_produit_qte($depot ?? '',$produits[0]->id ?? '') ?? '0' !!}

                                            </span>

                                        </h2>
                                        <p class="mb-0">


                                            Machine Au dépot
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body" style="border: solid black 1px;">
                                    <div class="card-order">
                                        <h6 class="mb-2">
                                            
                                            {!! $produits[1]->nom ?? '' !!} | {!! $produits[1]->reference ?? '' !!}

                                            {{--  --}}
                                        </h6>
                                        <h2 class="text-right ">

                                            <img class="float-left" src="{{ asset('produits/2.jpeg') }}" width="7%">
                                            
                                            <span id="scan_{{ $produits[1]->nom ?? ''}}">
                                                
                                                @if (count($produit_qte)>1)
                                                    
                                                    @if ($produits[1]->nom == $produit_qte[1]->nom ?? "")

                                                        {!! $produit_qte[1]->qte ?? '' !!}
                                                        
                                                    @endif
                                                @else

                                                    0

                                                    {{-- expr --}}
                                                @endif


                                                {{--  --}}                                       
                                            </span>

                                        </h2>
                                        <p class="mb-0">


                                            Machine scannées Aujourd'hui
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body" style="border: solid black 1px;">
                                    <div class="card-order">
                                        <h6 class="mb-2">
                                            
                                            {!! $produits[1]->nom ?? '' !!} | {!! $produits[1]->reference ?? '' !!}

                                            {{--  --}}
                                        </h6>
                                        <h2 class="text-right ">

                                            <img class="float-left" src="{{ asset('produits/2.jpeg') }}" width="7%">
                                            
                                            <span id="au_depot_{{ $produits[1]->nom ?? ''}}">
                                                
                                                {!! App\Depot::depot_single_produit_qte($depot ?? '',$produits[1]->id ?? '') ?? '0' !!}

                                            </span>

                                        </h2>
                                        <p class="mb-0">


                                            Machine Au dépot
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{--  --}}
                </div>    

            @endif

























            
            @if(Check::CheckAuth(['admin']))


                <div class="table-responsive col-md-8">

                    <table class="col-md-12 table table-bordered" width="95%" cellspacing="0">

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


                            {{--  --}}
                        </table>

                        <br>




                        {{--  --}}
                    </div>

                </div>
                {{--  --}}
            </div>
        @endif
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

                    /*console.log(res);*/

                    $(".au_depot").click();

                    $("#produit_qte").html("");

                    for(i=0;i<res.produit_qte.length;i++)

                    {       

                        trAppended = '<tr><td class="text-center">'+res.produit_qte[i].nom+'</td><td class="text-center">'+res.produit_qte[i].qte+'</td></tr>'

                        $("#produit_qte").append(trAppended);

                        $("#scan_"+res.produit_qte[i].nom).text(res.produit_qte[i].qte);

                        //
                    }

                    $("#au_depot_au_depot_ICE_CREAM_MACHINE_PRECOOL_SYSTEM").text(res.qte1);

                    $("#au_depot_ICE_CREAM_MACHINE_COMPRESSOR").text(res.qte2);

                    /*$("#au_depot_"+res.produit_qte[1].nom).css("color", "green");*/

                    $('#'+trId).css({"color": "rgb(97,193,33)", "font-weight": "bold","background-color": "#316170"}).addClass('alert alert-success')

                    trFound.getElementsByTagName("td")[4].innerHTML = "Au Dépot";
                    
                    //
                })

        }


        function blink(id)
        {
            var f = document.getElementById(id);
            setTimeout(function() {
              f.style.display = (f.style.display == 'none' ? '' : 'none');
            }, 500);
            setTimeout(function() {
              f.style.display = (f.style.display == 'none' ? '' : 'none');
            }, 1000);
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

