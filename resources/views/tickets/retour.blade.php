@extends('layouts.solic')

@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        
        .blink{
            color : #000;
            animation:blink 700ms infinite alternate;
        }
        
        @keyframes blink {
            from { opacity:1; }
            to { opacity:0; }
        };            
        
    </style>



    <div class="container-fluid row col-md-12">
        <div class="card mb-4 row col-md-12">
            
            <div class="card-header row">

                <h2 style="cursor:pointer;" onclick="redirect_manuel();" class="alert alert-primary text-center blink col-md-12" >Retour Livreur : {{ $le_livreur->prenom ?? '' }} / {{ $le_livreur->email ?? '' }} 
                </h2>

                <h4 class="col-md-12">
                    Affecter Ticket {{ count($tickets) }} 
                </h4>
            </div>
            
            <div class="card-header row">
                <div class="row">
                    <div class="col-md-12">
                        <input onblur="this.focus()" autofocus onchange="SearchFunction();" 
                        class="col-md-12 form-control" id="search"  placeholder="filter avec Code Bar" />
                    </div>

                </div>
                {{--  --}}
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Crée le </th>
                            <th>Mis à jour le :</th>
                            <th>Nom Produit</th>
                            <th>code bar </th>
                            <th>Staut </th>
                            <th>num_ticket_produit </th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach($tickets as $ticket)
                            <tr id="{{$ticket->id_ticket ?? ''}}">
                                <td>{{$ticket->pcreated_at}}</td>
                                <td>{{$ticket->pupdated_at}}</td>
                                <td>{{$ticket->nom ?? ''}}</td>
                                <td>{{$ticket->codebar ?? ''}}</td>
                                <td>{{($ticket->satut=='0') ? 'Vient d\'étre créé' : $ticket->satut}}</td>
                                <td>{{$ticket->num_ticket_produit ?? ''}}</td>
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



<script>
    
    var id_livreur = <?php echo json_encode($_livreur->id); ?>;
    
    function redirect_manuel()
    {
        window.location.href='/ticket/retour/livreur/'+id_livreur+'/manuel';
    }
    
    
</script>

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

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        
        var livreur = <?php echo json_encode($_livreur); ?>;

        function SearchFunction() 
        
        {
            var input, filter;
         
            input = document.getElementById("search");
         
            filter = input.value.toUpperCase();
         
            $('#search').val('');
         
            var trId = filter.substr(2);
            
            var trFound = document.getElementById(trId);
            
            fetch('/ticket/retourner/livreur', 
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
                    livreur : livreur,
                    ticket:trId
                })
            })
            .then(res => res.json())
            .then(res => 
            {
                
                /*toastr.success('Ticket Enlevé')*/
                $('#'+trId).addClass('alert alert-success')
                trFound.getElementsByTagName("td")[4].innerHTML = "Retour";
                
            })
            .catch(err=>function (err) 
            {
                /*toastr.danger('Error')*/
                console.log("err.message")
            });
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
