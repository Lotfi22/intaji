@extends('layouts.solic')



@section('content')
    <div class="container-fluid">

        <div class="card-header">

            <h3>

                Les Tickets de Livreur : {{ $livreur->name ?? '' }} {{ $livreur->prenom ?? '' }}

            </h3>

        </div>



        <div class="card col-md-12">

            <div class="card-header row col-md-12">

                <form method="post" action="{{ route('ticket.filter.livreur', ['livreur' => $livreur->id]) }}" class="col-md-12">

                    {{ csrf_field() }}

                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">

                                <label class="small" for="date_debut">date début : </label>

                                <input class="form-control" id="date_debut" name="date_debut"
                                    value="{{ $date_debut }}" type="date" />

                            </div>

                        </div>



                        <div class="col-md-4">

                            <div class="form-group">

                                <label class="small" for="inputEmailAddress">date fin: </label>

                                <input class="form-control" id="telephpone" name="date_fin" value="{{ $date_fin }}" type="date" />

                            </div>

                        </div>



                        <div class="col-md-4">

                            <div class="form-group">

                                <button type="submit" style="color: #ffffff; margin-top:9%;" class="form-control btn btn-info">

                                    Filtrer

                                </button>

                            </div>

                        </div>
                    </div>
                </form>





                <div class="row col-md-12" style="padding-top:3%;">

                    <a style="margin :0% 4%;" class="btn btn-success col-md-3" href="{{ route('ticket.affecter', ['livreur' => $livreur]) }}">

                        Affecter Colis

                    </a>

                    <a style="margin :0% 4%;" class="btn btn-warning col-md-3" href="{{ route('ticket.detacher', ['livreur' => $livreur]) }}">

                        Détacher Colis

                    </a>

                    <a style="margin :0% 4%;" class="btn btn-danger col-md-3" href="{{ route('ticket.retour', ['livreur' => $livreur]) }}">

                        Retour

                    </a>

                    <button id="btnPrint" style="margin-top: 2%; display: block; margin-left: auto; margin-right: auto; width: 50%;" class="btn btn-outline-info  text-center col-md-6">

                        Imprimer

                    </button>



                </div>

            </div>

        </div>











        <div class="card-body">



            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable001" width="100%" cellspacing="0">



                    <thead>

                        <tr>

                            <th class="text-center" style="cursor:pointer;">Id_Livreur</th>

                            <th class="text-center" style="cursor:pointer;">Prénom</th>

                            <th class="text-center" style="cursor:pointer;">Produit</th>

                            <th class="text-center" style="cursor:pointer;">Quantité Sortie</th>

                            <th class="text-center" style="cursor:pointer;">Retour</th>

                            <th class="text-center" style="cursor:pointer;">Vendue</th>

                            <th class="text-center" style="cursor:pointer;">D-F</th>

                        </tr>

                    </thead>



                    <tbody>



                        @foreach ($produits_qte as $produit_qte)
                            <tr>

                                <td class="text-center">{{ $produit_qte->id ?? '' }}</td>

                                <td class="text-center">{{ $produit_qte->prenom ?? '' }}</td>

                                <td class="text-center">{{ $produit_qte->nom ?? '' }}</td>

                                <td class="text-center">
                                    {{ $produit_qte->nb_ticket + App\Ticket::get_retour($produit_qte->id_produit, $livreur->id, $date_debut, $date_fin) ?? '' }}
                                </td>

                                <td class="text-center">
                                    {{ App\Ticket::get_retour($produit_qte->id_produit, $livreur->id, $date_debut, $date_fin) }}
                                </td>

                                <td class="text-center">{{ $produit_qte->nb_ticket }}</td>

                                <td class="text-center">{{ $date_debut ?? '' }} | {{ $date_fin ?? '' }}</td>

                            </tr>
                        @endforeach



                    </tbody>

                </table>

                <br>



            </div>




            <div class="card-body">            
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>

                            <tr>

                                <th class="text-center" style="cursor:pointer;">date Création</th>

                                <th class="text-center" style="cursor:pointer;">date Affectation</th>

                                <th class="text-center" style="cursor:pointer;">Nom Produit</th>

                                <th class="text-center" style="cursor:pointer;">Code bare</th>

                                <th class="text-center" style="cursor:pointer;">Statut </th>

                                <th class="text-center" style="cursor:pointer;">Mis à jour par</th>



                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($tickets as $ticket)
                                <tr>

                                    <td class="text-center">{{ $ticket->created_at ?? '' }}</td>

                                    <td class="text-center">{{ $ticket->updated_at ?? '' }}</td>

                                    <td class="text-center">{{ App\Produit::getNomProduit($ticket->id_produit) ?? '' }}</td>

                                    <td class="text-center">{{ $ticket->codebar ?? '' }}</td>

                                    <td class="text-center">
                                        {{ $ticket->satut == '0' ? 'Vient d\'étre créé' : $ticket->satut }} </td>

                                    <td class="text-center">{{ $ticket->maj ?? '' }}</td>

                                </tr>
                            @endforeach



                        </tbody>

                    </table>

                    <br>



                </div>
            </div>

        </div>





    </div>

    </div>
@endsection





@section('scripts')
    <script>
        $(document).ready(function(e) {

            $("#btnPrint").on('click', function(e) {

                e.preventDefault()

                console.log('sa')

                $('#dataTable001').printThis();

            })

        });
    </script>
@endsection
