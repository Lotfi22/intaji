@extends('layouts.ui')

@section('content')

    <div class="container-fluid">

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

        <div class="card mb-4">
            <div class="card-header">
                <h2 style="cursor:pointer;" class="alert alert-primary text-center blink" >Affecter Livreur : {{ $le_livreur->prenom ?? '' }} / {{ $le_livreur->email ?? '' }} </h2>
            </div>
            
            <form method="post" action="/ticket/affecter/livreur/{{$le_livreur->id}}/manuel/valider">
                
                {{ csrf_field() }}
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th class="text-center" >Produit</th>
                            <th class="text-center" >Quantité</th>
                        </tr>
                    </thead>
                    
                    <tbody id="produit_qte">
                        <?php $i=0;?>
                        @foreach($produits as $prod)
                            
                            <tr>
                                
                                <td class="text-center" style="font-weight:bold;" > {{ $prod->nom }} | <span style="color:green;"> Au_dépot : {{ App\Produit::getQteProduit($prod->id) }} </span> </td>
                                
                                <td class="text-center" > <input onkeyup="set_valid(this);" max="{!! App\Produit::getQteProduit($prod->id) !!}" name="{{ $prod->id }}" class="form-control col-md-4" value="0" min="0" type="number" required> </td>
                                
                            </tr>
                        <?php $i++;?>    
                        @endforeach
                        
                    </tbody>
                    
                </table>
                
                <button type="submit" class="btn btn-outline-primary" style="margin: auto;width: 50%;padding: 10px;" > Valider </button>
            </form>
            
        </div>
    </div>



@endsection




@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        
        function set_valid(objet)
        {
            var max = $(objet).attr("max");
            var val = $(objet).val();
            max = parseInt(max);
            
            if(val>0 && val<=max)
            {
                
                $(objet).removeClass("is-invalid").addClass("is-valid");
                $(objet).parent().prev().css("background-color", "#aaffaa");
                
            }
            else
            {
                
                $(objet).removeClass("is-valid");
                $(objet).parent().prev().css("background-color", "#ffffff");
    
                if($(objet).val()>max)
                {
                    $(objet).removeClass("is-valid").addClass("is-invalid");
                    $(objet).parent().prev().css("background-color", "#ffaaaa");
                }
                
            }
            
        }
        
    </script>

@endsection
