@extends('layouts.solic')
@section('styles')
<style>    
    .blink{
        color : #000;
        animation:blink 500ms infinite alternate;
    }
    @keyframes blink {
        from { opacity:1; }
        to { opacity:0; }
    };            
</style>

@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Gestion Commandes</h1>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="datatable-10" width="100%" cellspacing="0">

                        <thead>
                            <tr style="cursor: pointer;">
                                <th>N°</th>
                                <th>DATE</th>
                                <th>Livreur</th>
                                <th>Client</th>
                                <th>Produits</th>
                                <th>Total</th>
                                <th>Statut</th>
                                <th>Demandeur</th>
                                <th>Validateur</th>
                            </tr>
                        </thead>

                        <tbody>


                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>





    <script src="{{ asset('/js/gerer_livraison.js') }}" type="text/javascript"></script>

    <script>
    	


        //
    </script>
@endsection
