@extends('layouts.solic')

<?php use App\Depot; ?>

@section('content')
    <div class="container-fluid">

        <h1 class="mt-4"> Liste des Dépots  :</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary "> <i
                        class="fa fa-plus"></i> Ajouter depot</button>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datatable-10" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID dépot</th>

                                <th>Nom</th>

                                <th>Adresse</th>

                                <th>Quantité</th>

                                <th>Actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($mes_depots as $depot)
                                
                                <tr>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#modal_produit_qte" onclick="get_depots_qte('{{ $depot->nom }}');" >{{ $depot->id ?? '' }}</td>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#modal_produit_qte" onclick="get_depots_qte('{{ $depot->nom }}');" >{{ $depot->nom ?? '' }}</td>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#modal_produit_qte" onclick="get_depots_qte('{{ $depot->nom }}');" >{{ $depot->adresse ?? '' }}</td>
                                    
                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#modal_produit_qte" onclick="get_depots_qte('{{ $depot->nom }}');" >{!! Depot::depot_all_qte($depot->nom) !!}</td>

                                    <td>

                                        <a href="{{ route('depot.destroy', ['id_depot' => $depot->id]) }}"
                                            onclick="return confirm('etes vous sure  ?')"
                                            class="text-white btn btn-sm btn-danger">

                                            <i class="fa fa-trash"></i>

                                        </a>

                                        <button data-toggle="modal" data-target="#modifier{{$depot->id}}"
                                            class="btn btn-sm btn-primary center-block">Modifier depot
                                        </button>   

                                    </td>
                                </tr>

                                <div class="modal fade " id="modifier{{$depot->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="lineModalLabel"> <i class="fa fa-plus"></i>Modifier dépot</h3>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="/home/mes_depot/modifier" method="post" enctype="multipart/form-data">
                                                        
                                                        @csrf
                                                        
                                                        <div class="form-group">
                                                            <label for="nom_depot">Nom *</label>
                                                            <input required type="text" value="{{ $depot->nom }}" name="nom_depot" class="form-control"
                                                                id="nom_depot" placeholder="Entrer le nouveau nom du dépot">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="adresse_depot">Adresse (facultatif) </label>
                                                            <input id="adresse_depot" type="text" value="{{ $depot->adresse }}" name="adresse_depot" class="form-control"
                                                            placeholder="Entrer la nouvelle adresse du dépot">
                                                        </div>

                                                        <div class="form-group col-m-12">
                                                            <input id="valider" type="submit" value="valider{{ $depot->id }}" name="id_depot" class="col-m-12 btn btn-primary"
                                                            placeholder="Entrer l'adresse du dépot">
                                                        </div>


                                                    </form>



                                                </div>


                                            </div>

                                        </div>

                                    </div>

                                </div>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade " id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="lineModalLabel"> <i class="fa fa-plus"></i> Ajouter depot</h3>
                </div>

                <div class="modal-body">
                    <form action="/home/mes_depot/ajouter" method="post" enctype="multipart/form-data">
                        
                        @csrf
                        
                        <div class="form-group">
                            <label for="nom_depot">Nom *</label>
                            <input required type="text" value="{{ old('nom_depot') }}" name="nom_depot" class="form-control"
                                id="nom_depot" placeholder="Entrer le nom du dépot">
                        </div>

                        <div class="form-group">
                            <label for="adresse_depot">Adresse (facultatif) </label>
                            <input id="adresse_depot" type="text" value="{{ old('adresse_depot') }}" name="adresse_depot" class="form-control"
                            placeholder="Entrer l'adresse du dépot">
                        </div>

                        <div class="form-group col-m-12">
                            <input id="valider" type="submit" value="Valider" name="valider" class="col-m-12 btn btn-primary"
                            placeholder="Entrer l'adresse du dépot">
                        </div>


                    </form>



                </div>


            </div>

        </div>

    </div>
@endsection


<div class="modal fade " id="modal_produit_qte" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="lineModalLabel">Produit par Dépots</h3>
            </div>
            
            <div class="modal-body">

                <table class="table table-bordered text-center" id="datablee-1" width="100%" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                        </tr>
                    </thead>

                    <tbody id="depots">

                    </tbody>

                </table>

                
            </div>
        </div>
    </div>
</div>






@section('scripts')

    <script type="text/javascript">
        
        function get_depots_qte(nom_depot)
        {

            $.ajax({
                headers: 
                {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },                    
                type:"POST",
                url:"/home/mes_depot/get_qte_depots",
                data:{nom_depot:nom_depot},

                success:function(data) 
                {

                    var depots = "";

                    for (var i = 0; i < data.length; i++) 
                    {
                        depots+='<tr><td>'+data[i].produit+'</td><td>'+data[i].qte+'</td></tr>';
                    }

                    console.log(depots);

                    $("#depots").html(depots);
                    
                    
                    //
                }

                //
            });


            //
        }


        //        
    </script>

@endsection
