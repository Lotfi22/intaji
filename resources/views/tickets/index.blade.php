@extends('layouts.solic')



@section('content')
    <div class="container-fluid">

        <div class="card">

            <h4 class="card-header">

                La Liste de tout Les Tickets : {{ count($tickets) }}

            </h4>

            <h4 class="card-header col-md-12">

                <form class="col-md-12" method="post" action="{{ route('ticket.filter.extra') }}">

                    @csrf

                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">

                                <label class="small mb-1" for="date_debut">date début : </label>

                                <input class="form-control py-4" id="date_debut" name="date_debut"
                                    value="{{ $date_debut }}" type="date" />

                            </div>

                        </div>



                        <div class="col-md-4">

                            <div class="form-group">

                                <label class="small mb-1" for="date_fin">date fin: </label>

                                <input class="form-control py-4" id="date_fin" name="date_fin" value="{{ $date_fin }}"
                                    type="date" />

                            </div>

                        </div>

                        <div class="col-md-4">

                            <button type="submit" style="margin-top:9%; color: #ffffff;" class="form-control btn btn-primary">

                                Filtrer

                            </button>

                        </div>

                </form>

            </h4>















            <div class="card-body">

                <div class="table-responsive">





                    <table class="table table-bordered" id="datable-1" width="100%" cellspacing="0">

                        <thead>

                            <tr>

                                <th style="cursor:pointer;">ID</th>

                                <th style="cursor:pointer;">créé le</th>

                                <th style="cursor:pointer;">Mis à jour le : </th>

                                <th style="cursor:pointer;"> nom de produit</th>

                                <th style="cursor:pointer;">code bar </th>

                                <th style="cursor:pointer;">Staut </th>

                                <th style="cursor:pointer;"> Impression par </th>

                                <th style="cursor:pointer;"> Mise à jour par </th>

                                {{-- <th style="cursor:pointer;">Bon de livraison </th> --}}



                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($tickets as $ticket)
                                @if ($ticket->id == substr($ticket->codebar, 2))
                                    <tr id="{{ $ticket->id }}">
                                    @else
                                    <tr id="{{ $ticket->id }}" class="alert alert-danger">
                                @endif

                                <td class="text-center">{{ $ticket->id }}</td>

                                <td class="text-center">{{ $ticket->created_at }}</td>

                                <td class="text-center">{{ $ticket->updated_at }}</td>

                                <td class="text-center">{{ App\Produit::getNomProduit($ticket->id_produit) ?? '' }}</td>

                                <td class="text-center">{{ $ticket->codebar ?? '' }}|Lot
                                    N°:{{ App\Ticket::get_num_lot($ticket->created_at) ?? '' }}</td>



                                <td class="text-center"
                                    style="color:rgb({!! ord($ticket->satut) % 256 !!},{!! ord($ticket->satut) ** 2 % 256 !!},{!! ord($ticket->satut) ** 3 % 256 !!});">











                                    {!! $ticket->satut == '0' ? 'Vient d\'étre créé' : $ticket->satut !!}

                                    {!! $ticket->satut == 'vers_depot' ? 'Confirmé' : '' !!}



                                    @if ($ticket->satut == 'sortie')
                                        {{ App\Ticket::get_nom_livreur($ticket->id) ?? '' }}
                                    @endif



                                    @if ($ticket->satut == 'retour')
                                        {{ App\Ticket::get_livreur_retour($ticket->id) ?? '' }}
                                    @endif



                                </td>

                                <td class="text-center">{{ $ticket->impression ?? '' }}</td>

                                <td class="text-center">{{ $ticket->maj ?? '' }}</td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
@endsection





@section('scripts')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    </script>
@endsection

@section('styles')
    <style>
        .tr-code {

            display: none;

        }

    </style>
@endsection
