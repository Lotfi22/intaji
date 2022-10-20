<div class="modal fade " id="squarespaceModal{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="lineModalLabel">Modifer client</h3>
            </div>

            <div class="modal-body">
                <form action="{{route('client.update',['client'=>$client->id])}}" method="post"
                    enctype="multipart/form-data">

                    

                    @csrf
                        <div class="form-group">
                            <label>Nom * : </label>
                            <input type="text" value="{{ $client->nom }}" name="nom2" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer Le Nom ">
                        </div>

                        <div class="form-group">
                            <label>Prénom * : </label>
                            <input type="text" value="{{ $client->prenom }}" name="prenom2" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer Le Prénom ">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Téléphone </label>
                            <input type="text" onkeyup="verif_number(this);" value="{{ $client->telephone }}" name="telephone2" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer telephone ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook </label>
                            <input type="text" value="{{ $client->facebook }}" name="facebook2" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer telephone ">
                        </div>


                            <div class="form-group">

                                <label class="control-label">{{ __('Wilaya') }}: </label>

                                <select class="form-control" id="wilaya_select2" name="wilaya_id2">

                                    <option  value="">{{ __('Please choose...') }}</option>

                                    @foreach ($wilayas as $wilaya)

                                        <option 
                                        
                                        <?php if($wilaya->id == $client->wilaya){ {echo "selected";} } ?>
                                        value="{{$wilaya->id}}" {{$wilaya->id == ($client->wilaya_id ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
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

                                <select class="form-control" name="commune_id2" id="commune_select2">

                                    <option  value="">{{ __('Please choose...') }}</option>

                                    @foreach ($communes as $commune)

                                        <option
                                        <?php if($commune->id == $client->commune){ {echo "selected";} } ?>

                                        value="{{$commune->id}}" >

                                            {{$commune->name}}

                                        </option>

                                    @endforeach

                                </select>

                                <input class="form-control valid" id="commune_select2_loading" value="{{ __('Loading...') }}"

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