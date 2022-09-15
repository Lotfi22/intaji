@extends('layouts.ui')

@section('content')

<style>
    
    .blink{
        color : #fff;
        animation:blink 700ms infinite alternate;
    }
    
    @keyframes blink {
        from { opacity:1; }
        to { opacity:0; }
    };            
    
</style>


    <div class="container-fluid">

        <div class="card mb-4">

            <div class="card-header">
                
                <h2 class="text-center alert alert-warning blink" > Scanner pour annuler le ticket </h2>
                <hr>
                
                <h5> Scanner {{ count($tickets) }} Tickets </h5>
                
                <div class="row">
                    <div class="col-md-4">
                        <input onblur="this.focus()" autofocus onchange="SearchFunction();" class="col-md-2 form-control"
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

        function SearchFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            $('#search').val('')
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            var trId = 0;
            var trFound;
            var hrefAttacher = "1";
            console.log(hrefAttacher)
            
            if (filter.length == 0) 
            {
                for (i = 1; i < tr.length; i++) 
                {
                    tr[i].classList.remove("tr-code");
                    $('#hrefAttacher').attr('href', "#")
                }
            } 
            
            else 
            {
                for (i = 0; i < tr.length; i++) 
                
                {
                    td = tr[i].getElementsByTagName("td")[3];
                    
                    if (td) 
                    
                    {
                        txtValue = td.textContent || td.innerText;
                        
                        if (txtValue.toUpperCase()==(filter).toUpperCase()) 
                        {
                            // .style.display="inline";
                            tr[i].classList.remove("tr-code");
                            hrefAttacher = hrefAttacher + tr[i].id + ",";
                            trId = tr[i].id;
                            trFound = tr[i];

                        } 
                        
                        else 
                        
                        {
                            tr[i].classList.add("tr-code");
                        }
                    }
                    // $('#hrefAttacher').attr('href',hrefAttacher)
                }
                
                if (trId != 0) 
                {
                    
                    fetch('/ticket/vers_depot/annuler/annulation', {
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
                        //$('#search').val('')
                        toastr.success('Ticket Annulé')
                        for (i = 1; i < tr.length; i++) 
                        {
                            tr[i].classList.remove("tr-code");
                        }
                        
                        trFound.getElementsByTagName("td")[4].innerHTML = "Annulé";
                        $('#' + trId).addClass('alert alert-warning')

                        console.log(res);
                    })
                    .catch(err => function(err) 
                    {
                        toastr.danger('Error')
                        console.log("err.message")
                    });
                    
                } 
                
                else 
                
                {
                    toastr.error('Probelm : Ticket peut etre déja Annulé')
                    
                    //$('#search').val('')
                    
                    for (i = 1; i < tr.length; i++) 
                    {
                        tr[i].classList.remove("tr-code");
                    }
                }
            }
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
