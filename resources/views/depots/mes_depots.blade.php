@extends('layouts.solic')

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
                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID dépot</th>

                                <th>Nom</th>

                                <th>Adresse</th>

                                <th>Actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($mes_depots as $depot)
                                <tr>

                                    <td>{{ $depot->id ?? '' }}</td>

                                    <td>{{ $depot->nom ?? '' }}</td>

                                    <td>{{ $depot->adresse ?? '' }}</td>


                                    <td>

                                        <div class="table-action">

                                            <a href="{{ route('depot.destroy', ['id_depot' => $depot->id]) }}"
                                                onclick="return confirm('etes vous sure  ?')"
                                                class="text-white btn btn-sm btn-danger">

                                                <i class="fa fa-trash"></i>

                                            </a>

                                            <button data-toggle="modal" data-target="#modifier{{$depot->id}}"
                                                class="btn btn-sm btn-primary center-block">Modifier depot</button>

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

                                    </td>



                                </tr>
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






@section('scripts')
@endsection
