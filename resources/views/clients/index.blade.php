@extends('layouts.solic')



@section('content')
    <div class="container-fluid">

        <h1 class="mt-4"> Liste des Clients :</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary "> <i
                        class="fa fa-plus"></i> Ajouter client</button>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="datable-1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Client</th>

                                <th>Nom et Prénom </th>

                                <th>N°Téléphone</th>

                                <th>Wilaya</th>

                                <th>Commune</th>


                                <th>actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($clients as $client)
                                <tr>

                                    <td>{{ $client->id ?? '' }}</td>

                                    <td>{{ $client->nom ?? '' }} {{ $client->prenom ?? '' }}</td>

                                    <td>{{ $client->telephone ?? '' }}</td>

                                    <td>{{ $client->wilaya()['name'] ?? '' }}</td>

                                    <td>{{ $client->commune()['name'] ?? '' }}</td>





                                    <td>

                                        <div class="table-action">

                                            <a href="{{ route('client.destroy', ['id_client' => $client->id]) }}"
                                                onclick="return confirm('etes vous sure  ?')"
                                                class="text-white btn btn-danger">

                                                <i class="fa fa-trash"></i>

                                            </a>

                                            <button data-toggle="modal" data-target="#squarespaceModal{{ $client->id }}"
                                                class="btn btn-primary center-block">Modifier client</button>
                                            @include('includes.edit_client',['client'=>$client])



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
                    <h3 class="modal-title" id="lineModalLabel">Ajouter client</h3>
                </div>

                <div class="modal-body">
                    <form action="{{ route('client.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nom * : </label>
                            <input type="text" value="{{ old('nom') }}" name="nom" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer Le Nom ">
                        </div>

                        <div class="form-group">
                            <label>Prénom * : </label>
                            <input type="text" value="{{ old('prenom') }}" name="prenom" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer Le Prénom ">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Téléphone </label>
                            <input type="tel" value="{{ old('telephone') }}" name="telephone" id="telephone" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer telephone ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook </label>
                            <input type="text" value="{{ old('facebook') }}" name="facebook" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer telephone ">
                        </div>


                            <div class="form-group">

                                <label class="control-label">{{ __('Wilaya') }}: </label>

                                <select class="form-control wilaya_select" id="wilaya_select" name="wilaya_id">

                                    <option value="">{{ __('Please choose...') }}</option>

                                    @foreach ($wilayas as $wilaya)

                                        <option value="{{$wilaya->id}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
                                            {{$wilaya->id}}
                                                - 
                                            {{$wilaya->name}}

                                        </option>

                                    @endforeach

                                </select>

                                @if ($errors->has('wilaya_id'))

                                    <p class="help-block">{{ $errors->first('wilaya_id') }}</p>

                                @endif

                            </div>

                            <div class="form-group">

                                <label class="control-label">{{ __('Commune') }}: </label>

                                <select class="form-control" name="commune_id" id="commune_select">

                                    <option value="">{{ __('Please choose...') }}</option>

                                    @foreach ($communes as $commune)

                                        <option value="{{$commune->id}}" {{$commune->id == (old('commune_id') ?? ($member->commune_id ?? '')) ? 'selected' : ''}}>

                                            {{$commune->name}}

                                        </option>

                                    @endforeach

                                </select>

                                <input class="form-control valid" id="commune_select_loading" value="{{ __('Loading...') }}"

                                    readonly style="display: none;"/>

                                @if ($errors->has('commune_id'))

                                    <p class="help-block">{{ $errors->first('commune_id') }}</p>

                                @endif

                            </div>



                        <div class="btn-group" role="group">

                            <button type="submit" class="btn btn-primary">Save</button>

                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" role="button">Fermer</button>

                    </form>



                </div>


            </div>

        </div>

    </div>
@endsection




@section('scripts')

<script>

        
            $('.wilaya_select').on('change', function (e) {
                console.log('saz');
                e.preventDefault();
                var $communes = $('#commune_select');
                var $communesLoader = $('#commune_select_loading');
                var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');
                var $iconDefault = $communes.parents('.input-group').find('.material-icons');
                $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();
                $communesLoader.show();
                $iconDefault.hide();
                $iconLoader.show();
                $.ajax({
                    dataType: "json",
                    method: "GET",
                    url: "/api/static/communes/ " + $(this).val()
                })
                    .done(function (response) {
                        $.each(response, function (key, commune) {
                            $communes.append($('<option>', {value: commune.id}).text(commune.name));
                        });
                        $communes.prop('disabled', '').show();
                        $communesLoader.hide();
                        $iconLoader.hide();
                        $iconDefault.show();
                    });
            });
        

</script>

@endsection
