@extends('layouts.solic')



@section('content')
    <div class="container-fluid">

        <h1 class="mt-4">Gestion produits</h1>
        <div class="card mb-4">
            <div class="card-header">
                <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"> <i class="fa fa-plus"></i>
                    Ajouter Produit
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead class="bg-secondary text-white">
                            <tr style="cursor: pointer;">
                                <th>ID produit</th>
                                <th>Photo</th>
                                <th>Nom produit </th>
                                <th> Reference </th>
                                <th> Categorie </th>
                                <th>actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($produits as $produit)
                                <tr>

                                    <td>{{ $produit->id ?? '' }}</td>
                                    <td>
                                        <img src="{{ url('storage/app/' . $produit->image) }}" width="90px" />
                                    </td>
                                    <td>
                                        {{ $produit->nom ?? '' }} / {!! $produit->id_categorie ?? '' !!}
                                    </td>
                                    <td>{{ $produit->reference ?? '' }} </td>
                                    <td>{{ $produit->id_categorie ?? '' }} </td>

                                    <td>

                                        <div class="table-action">
                                            <a href="{{ route('produit.destroy', ['produit' => $produit->id]) }}"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('etes vous sure ?')">
                                                <i class="fa fa-trash"></i>
                                                Delete
                                            </a>

                                            <button data-toggle="modal" data-target="#squarespaceModal{{ $produit->id }}"
                                                class="btn btn-sm btn-outline-link text-dark">
                                                Modifer
                                            </button>
                                            @include('includes.edit_produit', [
                                                'produit' => $produit,
                                            ])
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
                    <h3 class="modal-title" id="lineModalLabel">Ajouter Produit : </h3>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produit.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nomduproduit">Photo : </label>
                            <input type="file" name="image" class="form-control" id="image" placeholder=" ">
                        </div>

                        <div class="form-group">
                            <label for="nomduproduit">Nom Produit</label>
                            <input type="text" onkeyup="verif_nom();" value="{{ old('nom') }}" name="nom"
                                class="form-control" id="nomduproduit" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cat??gorie</label>
                            <select class="form-control" name="id_categorie">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->nom }}">
                                        {{ $categorie->nom ?? '' }}
                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="reference">R??ference : </label>
                            <input type="text" onkeyup="verif_nom();" value="{{ old('reference') }}" name="reference"
                                class="form-control" id="reference">
                        </div>

{{--                         <div class="form-group">
                            <label for="exampleInputEmail1">Description : </label>
                            <input type="text" class="form-control" value="{{ old('description') }}" name="description"
                                id="desc" placeholder="">
                        </div>
 --}}                        <div class="form-group">
                            <label for="exampleInputEmail1">prix : </label>
                            <input type="text" class="form-control" value="{{ old('prix_gros') }}" name="prix_gros"
                                id="prix_gros" placeholder="">
                        </div>
                        {{--<div class="form-group">
                            <label for="exampleInputEmail1">prix Semi Gros :</label>
                            <input type="text" value="{{ old('prix_semi_gros') }}" name="prix_semi_gros"
                                class="form-control" id="" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prix D??tail : </label>
                            <input type="text" value="{{ old('prix_detail') }}" name="prix_detail" class="form-control"
                                id="prix_detail" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prix Minimum : </label>
                            <input type="text" value="{{ old('prix_minimum') }}" name="prix_minimum"
                                class="form-control" id="prix_minimum" placeholder="">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Prix Autre : </label>
                            <input type="text" value="{{ old('prix_autre') }}" name="prix_autre" class="form-control"
                                id="prix_autre" placeholder="">
                        </div>--}}
 

                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-primary btn_ajouter">Save</button>
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" role="button">Fermer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function verif_nom() {

            var nom = $("#nomduproduit").val();

            var ref = $("#reference").val();

            if (nom.includes("\ ") || nom.includes("/")) {
                $("#nomduproduit").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");
                $(".btn_ajouter").hide('1000');
                return false;
            } else {
                $("#nomduproduit").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");
                $(".btn_ajouter").show('1000');
            }

            if (ref.includes("\ ") || ref.includes("/")) {
                $("#reference").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");
                $(".btn_ajouter").hide('1000');
                return false;
            } else {
                $("#reference").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");
                $(".btn_ajouter").show('1000');
            }


            //
        }
    </script>
@endsection
