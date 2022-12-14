@extends('layouts.solic')

@section('content')
    <div class="container-fluid">

        <h1 class="mt-4"> Agents Depot</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                    Ajouter Agent de depot
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID depot</th>
                                <th>Login</th>
                                <th>Nom</th>
                                <th>dépot</th>
                                <th>Password</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($depots as $depot)
                                <tr>
                                    <td>{{ $depot->id }}</td>
                                    <td>{{ $depot->email ?? '' }}</td>
                                    <td>{{ $depot->name ?? '' }}</td>
                                    <td>{{ $depot->depot ?? 'dépot' }}</td>
                                    <td>{{ $depot->password_text ?? '' }}</td>
                                    <td>
                                        <div class="table-action">
                                            {{-- <a href="{{ route('depot.destroy', ['depot' => $depot->id]) }}"
                                                onclick="return confirm('etes vous sure  ?')"
                                                class="btn btn-danger text-white"><i class="fa fa-trash"></i> &nbsp; 
                                            </a> --}}

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal{{ $depot->id }}">
                                                <i class="fa fa-pencil"></i> Modifier
                                            </button>

                                            <div class="modal fade" id="exampleModal{{ $depot->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modifier Agent
                                                                depot</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="{{ route('depot.update', ['depot' => $depot->id]) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom </label>
                                                                    <input type="text" value="{{ $depot->name ?? '' }}"
                                                                        name="name" class="form-control"
                                                                        id="exampleInputEmail1" placeholder=" ">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Login </label>
                                                                    <input type="text" value="{{ $depot->email ?? '' }}"
                                                                        name="email" class="form-control"
                                                                        id="exampleInputEmail1" placeholder=" ">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="depot">Dépot</label>
                                                                    
                                                                    <select name="depot" id="depot" class="form-control">

                                                                        @foreach($mes_depots as $depot)

                                                                            <option class="form-control" value="{{$depot->nom}}">{{ $depot->nom }} </option>

                                                                        @endforeach

                                                                    </select>
                                                                    
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Password </label>
                                                                    <input type="text"
                                                                        value="{{ $depot->password_text ?? '' }}"
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
                    <h3 class="modal-title" id="lineModalLabel">Ajouter Agent de depot : </h3>
                </div>
                <div class="modal-body">
                    <form action="{{ route('depot.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom </label>
                            <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                                id="name" placeholder=" ">
                        </div>

                        <div class="form-group">
                            <label for="login">Login </label>
                            <input type="text" value="{{ old('email') }}" name="email" class="form-control"
                                id="login" placeholder=" ">
                        </div>

                        <div class="form-group">
                            <label for="depot">Dépot</label>
                            
                            <select name="depot" id="depot" class="form-control">

                                @foreach($mes_depots as $depot)

                                    <option class="form-control" value="{{$depot->nom}}">{{ $depot->nom }} </option>

                                @endforeach

                            </select>
                            
                        </div>


                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="text" value="{{ old('password') }}" name="password" class="form-control"
                                id="password" placeholder=" ">
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
