@extends('layouts.solic')



@section('content')
    <div class="container-fluid">

        <h1 class="mt-4"> Liste des Livreurs :</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary "> <i
                        class="fa fa-plus"></i> Ajouter livreur</button>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    
                    <table class="table table-bordered" id="datable-1" width="100%" cellspacing="0">
                        
                        <thead>
                        
                            <tr>
                                <th>ID Livreur</th>

                                <th>Nom et Prénom </th>

                                <th>N°Téléphone</th>

                                <th>Mot de passe</th>

                                <th>Région</th>

                                <th>actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($livreurs as $livreur)
                                
                                <tr>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#livreur_works" onclick="get_work_livreur('{{ $livreur->id }}');" >{{ $livreur->id ?? '' }}</td>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#livreur_works" onclick="get_work_livreur('{{ $livreur->id }}');" >{{ $livreur->name ?? '' }} {{ $livreur->prenom ?? '' }}</td>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#livreur_works" onclick="get_work_livreur('{{ $livreur->id }}');" >{{ $livreur->telephone ?? '' }}</td>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#livreur_works" onclick="get_work_livreur('{{ $livreur->id }}');" >{{ $livreur->password_text ?? '' }}</td>

                                    <td style="cursor:pointer;" data-toggle="modal" data-target="#livreur_works" onclick="get_work_livreur('{{ $livreur->id }}');" >{{ $livreur->adress ?? '' }}</td>

                                    <td>

                                        <div class="table-action">

                                            <a href="{{ route('livreur.destroy', ['id_livreur' => $livreur->id]) }}"
                                                onclick="return confirm('etes vous sure  ?')"
                                                class="text-white btn btn-danger">

                                                <i class="fa fa-trash"></i>

                                            </a>

                                            <button data-toggle="modal" data-target="#squarespaceModal{{ $livreur->id }}"
                                                class="btn btn-primary center-block">Modifier livreur</button>
                                            @include('includes.edit_livreur')



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
                    <h3 class="modal-title" id="lineModalLabel">Ajouter livreur</h3>
                </div>

                <div class="modal-body">
                    <form action="{{ route('livreur.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input type="text" value="{{ old('email') }}" name="email" class="form-control"
                                id="exampleInputEmail1" placeholder="Entrer clé de Login ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">mot de passe : </label>
                            <input type="text" value="{{ old('password') }}" name="password" class="form-control"
                                placeholder="  ">
                        </div>





                        <div class="form-group">
                            <label for="exampleInputEmail1">nom : </label>

                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="nom"
                                placeholder="votre nom ">

                        </div>

                        <div class="form-group">

                            <label for="exampleInputEmail1">prenom : </label>

                            <input type="text" class="form-control" value="{{ old('prenom') }}" name="prenom"
                                id="prenom" placeholder="votre prenom ">

                        </div>





                        <div class="form-group">

                            <label for="exampleInputEmail1">N Téléphone :</label>

                            <input type="text" value="{{ old('telephone') }}" name="telephone" class="form-control"
                                id="" placeholder="Enter votre numero de téléphone ">

                        </div>





                        <div class="form-group">

                            <label for="exampleInputEmail1">Region: </label>

                            <input type="text" value="{{ old('adress') }}" name="adress" class="form-control"
                                id="adress" placeholder="Enter votre adress : ">

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


    <div class="modal fade " id="livreur_works" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <div class="modal-header col-md-12" id="llivreur">
                    <h3 class="modal-title text-center" id="lineModalLabel">Travail du livreur : <span id="assem_livreur"></span> </h3>
                </div>
                
                <div class="modal-header col-md-12" id="mission">
                    <h3 class="modal-title text-center" id="lineModalLabel">Travail du livreur : <span id="assem_livreur"></span> </h3>
                </div>


                <div class="modal-body">

                    <table class=" table table-bordered text-center" id="datable-1" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr class="text-center">
                                <th>Livreur</th>
                                <th>Nombre de Livraisons</th>
                                <th>Statut</th>
                            </tr>
                        </thead>

                        <tbody id="works" class="text-center">

                        </tbody>

                    </table>

                    
                </div>
            </div>
        </div>
    </div>

@endsection






@section('scripts')


    <script type="text/javascript">
        
        function get_work_livreur(id_livreur)
        {

            $.ajax({
                headers: 
                {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },                    
                type:"POST",
                url:"/livreur/get_work_livreur",
                data:{id_livreur:id_livreur},

                success:function(data) 
                {

                    var livreur = data.livreur;   

                    $("#assem_livreur").text(livreur.name+' '+livreur.prenom+' | '+livreur.email+' | Tél : '+livreur.telephone)

                    var works = "";

                    var nb_livraison = 0;

                    var ths='<th> Livreur </th>'
   
                    ths += '<th> Mission Actuel </th>';

                    var tds = '<td>'+livreur.name+' '+livreur.prenom +'</td>';

                    if (data.what_is_he_doing.num_livraison===undefined) 
                    {
                        
                        tds += '<td style="color:green;" > Aucune Mission </td>'
                    }
                    else
                    {

                        tds += '<td style="color:green;font-weight:bold;" > En cours livraison Numéro : Num'+data.what_is_he_doing.num_livraison+' | Le : '+data.what_is_he_doing.updated_at +'</td>'

                    }                        


                    var table = '<table class="col-md-12 table card-table table-vcenter text-nowrap table-striped" width="100%" cellspacing="0"> <thead> <tr class="text-center">'+ ths +'</tr></thead> <tbody> <tr class="text-center" >'+tds+' </tr> </tbody> </table> '

                    $("#mission").html(table);

                    for (var i = 0; i < data.livraisons.length; i++) 
                    {
                        
                        if (data.livraisons[i].statut=='encaissement') 
                        {
                            var img = '<img src="/exclamation.png" width="30">'
                        }
                        if (data.livraisons[i].statut=='terminé') 
                        {
                            var img = '<img src="/img/termine.png" height="30" width="30">'   
                        }
                        if (data.livraisons[i].statut=='BL') 
                        {
                            var img = '<i class="fa fa-truck" aria-hidden="true"></i>'
                        }
                        if (data.livraisons[i].statut=='rejeté') 
                        {
                            var img = '<i class="fa fa-truck" aria-hidden="true"></i>'
                        }


                        works+='<tr> <td>'+data.livreur.name+' '+data.livreur.prenom+' '+data.livreur.email+'</td> <td>'+data.livraisons[i].nb_livraison+'</td> <td> '+img+' '+data.livraisons[i].statut+'</td></tr>';
                        
                        nb_livraison+=data.livraisons[i].nb_livraison;
                    }

                    works+='<tr> <td>-</td> <td style="background:#52b2c7;">Total livraison</td><td style="background:#52b2c7;"> '+nb_livraison+'</td></tr>';


                    $("#works").html(works);


                    
                    //
                }

                //
            });


            //
        }


        //        
    </script>
    


@endsection
