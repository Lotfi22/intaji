@extends('layouts.solic')

@section('content')
    <div class="container-fluid">

        <h1 class="mt-4"> Agents commerciaux</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                    Ajouter Agent de commercial
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID commercial</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Téléphone</th>
                                <th>Login</th>
                                <th>Password</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($commercials as $commercial)
                                
                                <tr>

                                    <td data-toggle="modal" data-target="#commercial_works" style="cursor:pointer;" onclick="get_work_commercial('{{ $commercial->id }}');" >{{ $commercial->id }}</td>
                                    <td data-toggle="modal" data-target="#commercial_works" style="cursor:pointer;" onclick="get_work_commercial('{{ $commercial->id }}');" >{{ $commercial->nom ?? '' }}</td>
                                    <td data-toggle="modal" data-target="#commercial_works" style="cursor:pointer;" onclick="get_work_commercial('{{ $commercial->id }}');" >{{ $commercial->prenom ?? '' }}</td>
                                    <td data-toggle="modal" data-target="#commercial_works" style="cursor:pointer;" onclick="get_work_commercial('{{ $commercial->id }}');" >{{ $commercial->telephone ?? '' }}</td>
                                    <td data-toggle="modal" data-target="#commercial_works" style="cursor:pointer;" onclick="get_work_commercial('{{ $commercial->id }}');" >{{ $commercial->email ?? '' }}</td>
                                    <td data-toggle="modal" data-target="#commercial_works" style="cursor:pointer;" onclick="get_work_commercial('{{ $commercial->id }}');" >{{ $commercial->password_text ?? '' }}</td>
                                    <td>
                                        <div class="table-action">
                                            
                                            <a type="button" class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                                data-target="#deleteModal{{ $commercial->id }}">
                                                <i class="fa fa-trash"></i> &nbsp; 
                                            </a>

                                            <div class="modal fade" id="deleteModal{{ $commercial->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="text-center modal-title" id="deleteLabel">Etes vous sur de vouloir Supprimer <br> Agent
                                                                commercial : {{ $commercial->nom ?? '' }}-{{ $commercial->prenom ?? '' }}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            
                                                            <div class="btn-group row col-md-12" role="group">
                                                                
                                                                <a type="submit" href="/commercial/supprimer/{{$commercial->id}}" class="btn btn-outline-primary col-md-5" style="margin-right:14%;">
                                                                Supprimer</a>
        
                                                                <button type="button" class="btn btn-outline-danger col-md-5"
                                                                    data-dismiss="modal" role="button">Annuler
                                                                </button>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-target="#exampleModal{{ $commercial->id }}">
                                                <i class="fa fa-pencil"></i> Modifier
                                            </button>

                                            <div class="modal fade" id="exampleModal{{ $commercial->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modifier Agent
                                                                commercial</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="/commercial/update/{{$commercial->id}}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="nom">Nom </label>
                                                                    <input type="text" value="{{ $commercial->nom ?? '' }}"
                                                                        name="nom" required class="form-control"
                                                                        id="nom" placeholder=" ">
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="prenom">Prénom </label>
                                                                    <input type="text" value="{{ $commercial->prenom ?? '' }}"
                                                                    name="prenom" required class="form-control"
                                                                    id="prenom" placeholder=" ">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="email">Login </label>
                                                                    <input type="text" value="{{ $commercial->email ?? '' }}"
                                                                        name="email" class="form-control"
                                                                        id="email"
                                                                        required
                                                                        placeholder=" ">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Password </label>
                                                                    <input type="text"
                                                                        value="{{ $commercial->password_text ?? '' }}"
                                                                        name="password" class="form-control"
                                                                        id="exampleInputEmail1" placeholder=" ">
                                                                </div>

                                                                <div class="btn-group" role="group">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Enregistrer </button>
                                                                </div>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal" role="button">Fermer</button>
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
                    <h3 class="modal-title" id="lineModalLabel">Ajouter Agent commercial : </h3>
                </div>
                <div class="modal-body">
                    <form action="/commercial/ajouter" class="col-md-12" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nom">Nom </label>
                            <input required type="text" value="{{ old('nom') }}" name="nom" class="form-control"
                                id="nom" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="prenom">Prénom </label>
                            <input type="text" value="{{ old('prenom') }}" name="prenom" class="form-control"
                                id="prenom" placeholder=" ">
                        </div>

                        <div class="form-group">
                            <label for="tel">Téléphone </label>
                            <input required type="text" value="{{ old('tel') }}" name="tel" class="form-control" id="tel" placeholder=" ">
                        </div>


                        <div class="form-group">
                            <label for="login">Login </label>
                            <input required type="text" value="{{ old('email') }}" name="email" class="form-control"
                                id="login" placeholder=" ">
                        </div>


                        <div class="form-group">
                            <label for="password">Password </label>
                            <input required type="text" value="{{ old('password') }}" name="password" class="form-control"
                                id="password" placeholder=" ">
                        </div>

                        
                        <button type="submit" class="btn btn-outline-primary col-md-5">Save</button>

                        <button type="button" class="btn btn-outline-danger col-md-5" data-dismiss="modal" role="button">Fermer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade " id="commercial_works" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <div class="modal-header col-md-12" id="lcommercial">
                    <h3 class="modal-title text-center" id="lineModalLabel">Travail du commercial : <span id="assem_commercial"></span> </h3>

                    <a type="button" class="close" data-dismiss="modal">× Fermer</a>
                </div>
                
                <div class="modal-body">

                    <table class=" table table-bordered text-center" id="datable-1" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr class="text-center">
                                <th>commercial</th>
                                <th>Nombre de commandes</th>
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
        
        function get_work_commercial(id_commercial)
        {

            $.ajax({
                headers: 
                {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },                    
                type:"POST",
                url:"/commercial/get_work_commercial",
                data:{id_commercial:id_commercial},

                success:function(data) 
                {

                     var commercial = data.commercial;   

                    $("#assem_commercial").text(commercial.nom+' '+commercial.prenom+' | '+commercial.email+' | Tél : '+commercial.telephone)

                    var works = "";

                    var nb_commande=0;

                    console.log(data.commandes);

                    for (var i = 0; i < data.commandes.length; i++) 
                    {
                        
                        if (data.commandes[i].statut=='validé') 
                        {
                            var img = '<i class="fa fa-check" aria-hidden="true"></i>';

                            works+='<tr style="font-weight:bold; color:green;" > <td>'+data.commercial.nom+' '+data.commercial.prenom+' '+data.commercial.email+'</td> <td>'+data.commandes[i].nb_commande+'</td> <td> '+img+' '+data.commandes[i].statut+'</td></tr>';                            
                        }
                        
                        if (data.commandes[i].statut=='rejeté') 
                        {

                            var img = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>';

                            works+='<tr style="font-weight:bold; color:red;" > <td>'+data.commercial.nom+' '+data.commercial.prenom+' '+data.commercial.email+'</td> <td>'+data.commandes[i].nb_commande+'</td> <td> '+img+' '+data.commandes[i].statut+'</td></tr>';                               
                        }
                        
                        if (data.commandes[i].statut=='en attente') 
                        {

                            var img = '<i class="fa fa-circle-o-notch" aria-hidden="true"></i>';

                            works+='<tr style="font-weight:bold; color:orange;" > <td>'+data.commercial.nom+' '+data.commercial.prenom+' '+data.commercial.email+'</td> <td>'+data.commandes[i].nb_commande+'</td> <td> '+img+' '+data.commandes[i].statut+'</td></tr>';                            
                        }

                        
                        nb_commande = parseFloat(nb_commande) + parseFloat(data.commandes[i].nb_commande);
                    }

                    works+='<tr> <td>-</td> <td style="background:#52b2c7;">Total commandes</td><td style="background:#52b2c7;"> '+nb_commande+'</td></tr>';


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

