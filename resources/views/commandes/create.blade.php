@extends('layouts.solic')

@section('content')
<div class="page-header">
    <h4 class="page-title"> <i class="fa fa-plus"></i> Nouveau Commande</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Commande</li>
    </ol>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form role="form" action="{{route('commande.store')}}" method="post" enctype="multipart/form-data" id="formpost">
                @csrf
                <div class="row">
                    @foreach(
                    [
                        [
                        'label'=>'client',
                        'name'=>'client',
                        'type'=>'select',
                        'options'=>$clients,
                        'col'=>4
                        ],
                        [
                        'label'=>'status_client',
                        'name'=>'status_client',
                        'type'=>'select',
                        'options'=>['SKHONE','BARED '],
                        'col'=>4

                        ],
                        [
                        'label'=>'freelance',
                        'name'=>'freelance',
                        'type'=>'select',
                        'options'=>[],
                        'col'=>4
                        ]

                    ]
                    as $input
                    )
                    <div class="col-md-{{$input['col']}}">
                        <div class="form-group">
                            <label style="font-size:15px;" class="form-label">{{$input['label']}}</label>
                            @if($input['type'] == "select")
                            <select class="form-control" name="{{$input['name']}}">
                                @if($input['name']=="status_client")
                                    @foreach($input['options'] as $option)
                                    <option value="{{$option}}">
                                        {{$option}}
                                    </option>
                                    @endforeach

                                @else
                                    @foreach($input['options'] as $option)
                                    <option value="{{$option->id}}">
                                        {{$option->nom ?? ''}} {{$option->prenom ?? ''}}
                                    </option>
                                    @endforeach

                                @endif

                            </select>
                            @else
                            <input type="{{$input['type']}}" value="" name="{{$input['name']}}" class="form-control">
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <hr>

                <div class="form-group" id="dynamic_form2">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Prouit</label>
                                <select class="form-control" id="produit" name="produit">
                                    @foreach($produits as $produit)
                                        <option value="{{$produit->nom}}">
                                            {{$produit->nom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Quantité:</label>
                                <input type="number"  name="quantite" id="quantite" placeholder="quantite produit" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Prix Unitaire </label>
                                <input type="number" name="prix_unitaire" id="prix_unitaire" class="form-control">
                            </div>
                        </div>


                        <div class="button-group">
                            <a href="javascript:void(0)" class="btn btn-primary" style="margin:10px;" id="plus52"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger" style="margin:10px;" id="minus52"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                </div>


                <hr>



                <div class="row">
                    <div class="col-sm-2 col-offset-4 ">
                        <button id="valider" class="btn btn-primary btn-block">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<!-- ROW CLOSED -->
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.biometrique').hide()
        $('.standard').hide()
        $('#type_permis').on('change', function() {
            var valueSelected = $(this).children(":selected").val();
            console.log(valueSelected)
            if (valueSelected == "standard") {
                $('.biometrique').hide()
                $('.standard').show()
            }
            if (valueSelected == "Biométrique") {
                $('.biometrique').show()
                $('.standard').hide()
            }

        })

        ////////////////////////////////////////// 
        $('.date_installation_gps').hide();
        $(':checkbox').change(function() {
            if ($('.date_installation_gps').is(':hidden')) {
                $('.date_installation_gps').show();
            } else {
                $('.date_installation_gps').hide();
            }
        });

        var dynamic_form = $("#dynamic_form").dynamicForm("#dynamic_form", "#plus5", "#minus5", {
            limit: 10,
            formPrefix: "dynamic_form",
            normalizeFullForm: false
        });
        $("#dynamic_form #minus5").on('click', function() {
            var initDynamicId = $(this).closest('#dynamic_form').parent().find("[id^='dynamic_form']").length;
            if (initDynamicId === 2) {
                $(this).closest('#dynamic_form').next().find('#minus5').hide();
            }
            $(this).closest('#dynamic_form').remove();
        });

        // ////////////////////////////////////////////////////////////////
        var dynamic_form = $("#dynamic_form2").dynamicForm("#dynamic_form2", "#plus52", "#minus52", {
            limit: 10,
            formPrefix: "dynamic_form2",
            normalizeFullForm: false
        });
        $("#dynamic_form2 #minus52").on('click', function() {
            var initDynamicId = $(this).closest('#dynamic_form2').parent().find("[id^='dynamic_form2']").length;
            if (initDynamicId === 2) {
                $(this).closest('#dynamic_form2').next().find('#minus52').hide();
            }
            $(this).closest('#dynamic_form2').remove();
        });



        $('#Commandeform').on('submit', function(event) {
            var values = {};
            $.each($('#Commandeform').serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });
            console.log(values)
        })
    });
</script>

@endsection