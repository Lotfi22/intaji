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
                <h2 style="cursor:pointer;" class="alert alert-primary text-center blink" >Livreur : {{ $le_livreur->prenom ?? '' }} / {{ $le_livreur->email ?? '' }} </h2>
            </div>
            
            <form method="post" action="/ticket/retour/livreur/{{$le_livreur->id}}/manuel/valider">
                
                {{ csrf_field() }}
                
                <button id="btnPrint" onclick="imprimer(event);" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" class="btn btn-outline-info  text-center col-md-6" >
                    Imprimer
                </button>
                
                
                <table class="table table-bordered" id="dataTable001" width="100%" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th class="text-center" >Produit</th>
                            <th class="text-center" >Quantité Sortie</th>
                            <th class="text-center" >Quantité Retour</th>
                            <th class="text-center" >Quantité Vendue</th>
                        </tr>
                    </thead>
                    
                    <tbody id="produit_qte">
                        <?php $i=0;?>
                        @foreach($produits as $prod)
                            
                            <tr>
                                
                                <td class="text-center" style="font-weight:bold;" > {{ $prod->nom }} | <span style="color:green;"> Au_dépot : {{ App\Produit::getQteProduit($prod->id) }} </span> </td>
                                
                                <td class="text-center" > {{ App\Ticket::get_qte_sortie($prod->id,$id_livreur,date("Y-m-d"),date("Y-m-d")) + App\Ticket::get_retour($prod->id,$id_livreur,date("Y-m-d"),date("Y-m-d")) }} </td>
                                <td class="text-center" > Retour : <span style="color:red;"> {{ App\Ticket::get_retour($prod->id,$id_livreur,date("Y-m-d"),date("Y-m-d")) }} </span> <input name="{{ $prod->id }}" onkeyup="fit_qte_vendue(this);" type="number" min="0" placeholder="{{ App\Ticket::get_retour($prod->id,$id_livreur,date("Y-m-d"),date("Y-m-d")) }}" class="form-control col-md-1" max="{{ App\Ticket::get_qte_sortie($prod->id,$id_livreur,date("Y-m-d"),date("Y-m-d"))}}"> </td>
                                <td class="text-center" >{{ App\Ticket::get_qte_sortie($prod->id,$id_livreur,date("Y-m-d"),date("Y-m-d")) }}</td>
                            </tr>
                        <?php  $i++;?>    
                        @endforeach
                        <caption class="text-center">Récap Livreur : {{ $le_livreur->prenom ?? '' }} / {{ $le_livreur->email ?? '' }} | Date :  {!! date("d/m/Y") !!}  </caption>
                    </tbody>
                    
                </table>
                
                <button type="submit" class="btn btn-outline-primary col-md-12" > Valider </button>
            </form>
            
        </div>
    </div>



@endsection




@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        
        function fit_qte_vendue(objet)
        {
            var max = $(objet).attr("max");
            
            var val = $(objet).val();
            
            var deja_retour = $(objet).prev().text();
            
            max = parseInt(max);
            
            $(objet).parent().next().text((max)-(val));
            
            if(val>0 && val<=max)
            {
                
                $(objet).removeClass("is-invalid").addClass("is-valid");
                $(objet).parent().parent().css("background-color", "#aaffaa");
                
            }
            else
            {
                
                $(objet).removeClass("is-valid").removeClass("is-invalid");
                $(objet).parent().parent().css("background-color", "#ffffff");
    
                if($(objet).val()>max)
                {
                    $(objet).removeClass("is-valid").addClass("is-invalid");
                    $(objet).parent().parent().css("background-color", "#ffaaaa");
                }
                
            }
            
        }
        
        function imprimer(e)
        {
            
            e.preventDefault()
                
            $('#dataTable001').printThis();
            
        }
        
        
    </script>

@endsection

@section('scripts')
<script>
</script>
@endsection
