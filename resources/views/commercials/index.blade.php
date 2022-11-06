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
                                    <td>{{ $commercial->id }}</td>
                                    <td>{{ $commercial->nom ?? '' }}</td>
                                    <td>{{ $commercial->prenom ?? '' }}</td>
                                    <td>{{ $commercial->telephone ?? '' }}</td>
                                    <td>{{ $commercial->email ?? '' }}</td>
                                    <td>{{ $commercial->password_text ?? '' }}</td>
                                    <td>
                                        <div class="table-action">
                                            <a href=""
                                                onclick="return confirm('etes vous sure  ?')"
                                                class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> &nbsp; 
                                            </a>

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
                                                            <form action=""
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom </label>
                                                                    <input type="text" value="{{ $commercial->name ?? '' }}"
                                                                        name="name" class="form-control"
                                                                        id="exampleInputEmail1" placeholder=" ">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Login </label>
                                                                    <input type="text" value="{{ $commercial->email ?? '' }}"
                                                                        name="email" class="form-control"
                                                                        id="exampleInputEmail1" placeholder=" ">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="commercial">Dépot</label>
                                                                    
                                                                    <select name="commercial" id="commercial" class="form-control">

                                                                    </select>
                                                                    
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
@endsection
