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

                                <th>Total Versement</th>

                                <th>Crédits</th>

                                <th>actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($clients as $client)
                                
                                <tr>

                                    <td style="cursor:pointer;" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">{{ $client->id ?? '' }}</td>

                                    <td style="cursor:pointer;" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">{{ $client->nom ?? '' }} {{ $client->prenom ?? '' }}</td>

                                    <td style="cursor:pointer;" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">{{ $client->telephone ?? '' }}</td>

                                    <td style="cursor:pointer;" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">{{ $client->wilaya ?? '' }}</td>

                                    <td style="cursor:pointer;" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">{{ $client->commune ?? '' }}</td>


                                    <td style="cursor:pointer;" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">
                                        {{number_format(App\Client::get_total_versement($client->id)) ?? '' }} DA

                                    </td>

                                    <td style="cursor:pointer; {{ App\Client::get_credits($client->id)==0 ? "color:green;" : "color:red;" }}" onclick="get_client_interactions({{ $client->id }});" data-toggle="modal" data-target="#client_interactions">
                                        {{ number_format(App\Client::get_credits($client->id)) ?? '' }} DA

                                    </td>


                                    <td>

                                        <div class="table-action">

                                            {{-- <a href="{{ route('client.destroy', ['id_client' => $client->id]) }}"
                                                onclick="return confirm('etes vous sure  ?')"
                                                class="text-white btn btn-danger">

                                                <i class="fa fa-trash"></i>

                                            </a> --}}

                                            <button data-toggle="modal" data-target="#squarespaceModal{{ $client->id }}"
                                                class="btn btn-primary center-block">
                                            <i class="fa fa-pencil"></i>
                                            Modifier client</button>
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
                            <input type="text" value="{{ old('nom') }}" required name="nom" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer Le Nom ">
                        </div>

                        <div class="form-group">
                            <label>Prénom * : </label>
                            <input type="text" value="{{ old('prenom') }}" required name="prenom" class="form-control"
                                id="renom" placeholder="Entrer Le Prénom ">
                        </div>


                        <div class="form-group">
                            <label for="telephone">Téléphone *</label>
                            <input type="tel" value="{{ old('telephone') }}" required name="telephone" id="telephone" onkeyup="verif_number(this);" class="form-control"
                                id="telephone" placeholder="Entrer telephone ">

                            <p id="err"> </p>                                
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook </label>
                            <input type="text" value="{{ old('facebook') }}" name="facebook" class="form-control"
                                id="facebook" placeholder="Entrer telephone ">
                        </div>


                        <div class="form-group">

                            <label class="control-label">{{ __('Wilaya') }}: </label>

                            <select class="form-control wilaya_select " required id="16" name="wilaya_id">

                                <option value="">{{ __('Please choose...') }}</option>

                                @foreach ($wilayas as $wilaya)

                                    <option id="{{$wilaya->id}}" value="{{$wilaya->name}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
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

                            <select class="form-control" required name="commune_id" id="commune_select">

                                <option value="">{{ __('Please choose...') }}</option>

                                @foreach ($communes as $commune)

                                    <option value="{{$commune->name}}" {{$commune->id == (old('commune_id') ?? ($member->commune_id ?? '')) ? 'selected' : ''}}>

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

                        <div class="form-group">
                            <label class="control-label">Comment vous nous avez contacter : </label>
                            
                            <select onchange="hide_or_show_freelancer(this);" class="form-control" name="comment" id="comment">

                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="youtube">Youtube</option>
                                <option value="google">Google</option>
                                <option value="freelancer">Freelancer</option>
                                <option value="autre">Autre</option>

                                {{--  --}}
                            </select>

                        </div>

                        <div class="row" id="info_freelancer">

                            <div class="form-group col-md-4">
                                
                                <label class="control-label" for="freelancer_nom">Nom </label>
                                
                                <input class="form-control" type="text" name="freelancer_nom" id="freelancer_nom">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label" for="freelancer_prenom">Prénom </label>
                                
                                <input class="form-control" type="text" name="freelancer_prenom" id="freelancer_prenom">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label class="control-label" for="freelancer_tel">Tél </label>
                                
                                <input class="form-control" type="tel" name="freelancer_tel" id="freelancer_tel">                                                        
                            </div>
                        </div>


                        <div class="row" id="info_autre">

                            <div class="form-group col-md-12">
                                
                                <label class="control-label" for="autre_desc">Description</label>
                                
                                <textarea class="form-control" type="text" name="autre_desc" id="autre_desc" rows="5" ></textarea>

                            </div>

                        </div>



                        <div class="row" style="margin-top:10%;">
                            
                            <div class="form-group col-md-6">

                                <div class="btn-group col-md-12" role="group">
                                    <button type="button" class="btn btn-outline-danger col-md-12" data-dismiss="modal" role="button">Fermer</button>
                                </div>
                            </div>

                            <div class="form-group col-md-6">

                                <div class="btn-group col-md-12" role="group">

                                    <button id="valider" type="submit" class="btn btn-outline-primary col-md-12">Save</button>

                                </div>
                            </div>    

                            
                            {{--  --}}
                        </div>
                    </form>



                </div>


            </div>

        </div>

    </div>


    <div class="modal fade " id="client_interactions" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="lineModalLabel">Détails du client <span id="client"></span> </h3>
                </div>
                
                <div class="modal-body">

                    <table class="table table-bordered text-center" id="datablee-1" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr class="text-center">
                                <th>Num Commande</th>
                                <th>Total</th>
                                <th>Statut</th>
                            </tr>
                        </thead>

                        <tbody class="text-center" id="commandes">

                        </tbody>

                    </table>

                    <hr>

                    <table class="table table-bordered text-center" id="datablee-1" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr class="text-center">
                                <th class="col-md-3">Num Livraison</th>
                                <th class="col-md-3">Remise</th>
                                <th class="col-md-3">Total</th>
                                <th class="col-md-3">Statut</th>
                            </tr>
                        </thead>

                        <tbody class="text-center" id="livraisons">



                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>



@endsection




@section('scripts')

<script>


    function get_client_interactions(id_client) 
    {

        $.ajax({
            headers: 
            {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },                    
            type:"POST",
            url:"/client/get_client_interactions",
            data:{id_client:id_client},

            success:function(data) 
            {

                console.log(data.commandes);
                console.log(data.livraisons);

                var commandes = "";

                for (var i = 0; i < data.commandes.length; i++)
                {

                    if (data.commandes[i].statut=='en attente') 
                    {
                        var img = '<img src="/spin.gif" width="10%">';
    
                        commandes+='<tr style="color:orange;"><td>Num_commande_'+data.commandes[i].num_commande+'</td><td>'+formatMoney(data.commandes[i].total*1)+' DA </td><td> '+img+' '+data.commandes[i].statut+'</td></tr>';

                        //
                    }

                    if (data.commandes[i].statut=='validé') 
                    {
                        var img = '<i class="fa fa-check" aria-hidden="true"></i>';

                        commandes+='<tr style="color:green;"><td>Num_commande_'+data.commandes[i].num_commande+'</td><td>'+formatMoney(data.commandes[i].total*1)+' DA </td><td> '+img+' '+data.commandes[i].statut+'</td></tr>';

                        //
                    }

                    if (data.commandes[i].statut=='rejeté') 
                    {
                        var img = '<i class="fa fa-ban" aria-hidden="true"></i>';

                        commandes+='<tr style="color:red;"><td>Num_commande_'+data.commandes[i].num_commande+'</td><td>'+formatMoney(data.commandes[i].total*1)+' DA DA </td><td> '+img+' '+data.commandes[i].statut+'</td></tr>';

                        //
                    }

                }

                if (data.commandes.length==0) 
                {
                    commandes+='<tr><td> Aucune </td><td> Commande</td><td>Pour ce client</td></tr>';                    
                }

                $("#commandes").html(commandes);
                


                //Livraisons : ----------------------------------------------------------

                var livraisons = "";

                for (var i = 0; i < data.livraisons.length; i++)
                {



                    if (data.livraisons[i].statut=='en attente') 
                    {
                        var img = '<img src="/spin.gif" width="10%">';
                        //
                    }

                    if (data.livraisons[i].statut=='validé') 
                    {
                        var img = '<i class="fa fa-check" aria-hidden="true"></i>';
                        //
                    }

                    if (data.livraisons[i].statut=='rejeté') 
                    {
                        var img = '<i class="fa fa-ban" aria-hidden="true"></i>';
                        //
                    }

                    if (data.livraisons[i].statut=='terminé') 
                    {
                        var img = '<img src="/img/termine.png" width="5%">';
                        //
                    }

                    if (data.livraisons[i].statut=='BL') 
                    {
                        var img = '<i class="fa fa-truck" aria-hidden="true"></i>';
                        //
                    }

                    if (data.livraisons[i].statut=='encaissement') 
                    {
                        var img = '<img src="/exclamation.png" width="5%">';
                        //
                    }


                    livraisons+='<tr><td>Num_livraison_'+data.livraisons[i].num_livraison+'</td><td>'+data.livraisons[i].remise+' % </td><td>'+formatMoney(data.livraisons[i].total*1)+' DA </td><td> '+img+' '+data.livraisons[i].statut+'</td></tr>';


                    //
                }

                if (data.livraisons.length==0) 
                {
                    livraisons+='<tr><td> Aucune </td><td> livraison</td><td>Pour ce client</td><td>-</td></tr>';                    
                }

                $("#livraisons").html(livraisons);


                
                //
            }
        });

        // body...
    } 


    $("#info_freelancer").hide();
    $("#info_autre").hide();

    function hide_or_show_freelancer(objet) 
    {
        
        var option = $(objet).find(':selected').attr('value');

        if (option=="freelancer") 
        {

            $("#info_freelancer").show(300);

            $("#freelancer_prenom").prop('required',true);
            $("#freelancer_nom").prop('required',true);
            $("#freelancer_tel").prop('required',false);

            //
        }
        else
        {

            $("#info_freelancer").hide(300);

            $("#freelancer_prenom").prop('required',false);
            $("#freelancer_nom").prop('required',false);
            $("#freelancer_tel").prop('required',false);

            if (option=="autre")
            {

                $("#info_autre").show(300);

                $("#autre_desc").prop('required',true);

                //
            }
            else
            {

                $("#info_autre").hide(300);

                $("#autre_desc").prop('required',false);


                //
            }


            //
        }

        // body...
    }



    function verif_number(objet) 
    {
        
        num_tel = ($(objet).val());

        if (num_tel.length!=10) 
        {

            if(num_tel.length>10)
            {

                $(objet).val(num_tel.substr(0,10));
            }            

            else
            {

                $(objet).removeClass("is-valid").addClass("is-invalid");

                $("#valider").hide(100).prop('disabled', true);

                var texte = '<i class="fe fe-x text-danger mr-2"></i>Le numéro de téléphone doit contenir 10 chiffre';
                
                $("#err").removeClass("alert alert-success").addClass("alert alert-danger").html(texte);

                //                
            }
        }

        else
        {

            $.ajax({
                headers: 
                {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },                    
                type:"POST",
                url:"/home/client/verif_tel/ajax",
                data:{num_tel:num_tel},

                success:function(data)
                {
                    
                    if(data.length==0)
                    {

                        $(objet).removeClass("is-invalid").addClass("is-valid");

                        $("#valider").show(100).prop('disabled', false);

                        var texte = '<i class="fe fe-check text-success mr-2"></i>Le numéro de téléphone est valide';
                        
                        $("#err").removeClass("alert alert-danger").addClass("alert alert-success").html(texte);

                        //
                    }
                    else
                    {

                        $(objet).removeClass("is-valid").addClass("is-invalid");

                        //$("#valider").hide(100).prop('disabled', true);
                        
                        var texte = '<i class="fe fe-x text-danger mr-2"></i>Le numéro de téléphone appartient déja à : '+data[0].nom+' '+data[0].prenom+' | '+data[0].wilaya+' - '+data[0].commune;
                        
                        $("#err").removeClass("alert alert-success").addClass("text-center alert alert-danger").html(texte);


                        //
                    }
                    //
                }
                //
            });



            //
        }          

        // body...
    }

        
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
            url: "/api/static/communes/"+$(this).find('option:selected').attr('id')
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
        

    function formatMoney(number) 
    {
        if(number>=0)
        {

            var ret = number.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
            
            return ret.substr(1);
        }       
        else
        {
            var ret = number.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
            
            return ret.substr(0,1)+ret.substr(2);       

        }
    }


    /**/
</script>

@endsection
