@extends('layouts.solic')

@section('content')

<style>
    
.valider{


  -webkit-animation:wiggle 1.5s linear infinite;
  animation:wiggle 1.5s linear infinite;
}

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform:rotateZ(0);
    transform:rotateZ(0);
  }
  10% {
    -webkit-transform:rotateZ(-1deg);
    transform:rotateZ(-1deg);
  }
  20% {
    -webkit-transition:rotateZ(1deg);
    transition:rotateZ(1deg);
  }
  25% {
    -webkit-transition:rotateZ(-1deg);
    transition:rotateZ(-1deg);
  }
  30% {
    -webkit-transition:rotateZ(1deg);
    transition:rotateZ(1deg);
  }
  35% {
    -webkit-transform:rotateZ(-1deg);
    transform:rotateZ(-1deg);
  }
  40% {
    transform:rotateZ(1deg);
  }
  50% {
    transform:rotateZ(-1deg);
  }
  60% {
    transform:rotateZ(1deg);
  }
  70% {
    transform:rotateZ(-1deg;)
  }
  80% {
    transform:rotateZ(1deg);
  }
  90% {
    transform:rotateZ(-1deg);
  }
  100% {
    -webkit-transition:rotateZ(0);
    transition:rotateZ(0);
  }
}    
    
</style>


<div class="container-fluid py-4">

    <div class="row">

		<div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
		    <div class="card">
		        <div class="card-body p-3">
		            <div class="row">
		                <div class="col-8">
		                    <div class="numbers">
		                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Aujoud'hui</p>
		                        <h5 class="font-weight-bolder mb-0">
		                            {!! $nb_tickets_today !!} <span style="font-size:10px;">Générés</span> 
		                            
		                            @if ($pctg_ceation_ysterday_today>=0)

			                            <span class="text-success text-sm font-weight-bolder">

			                        @else    	
										<span class="text-danger text-sm font-weight-bolder">                           	
		                            @endif
	
			                            {{ $pctg_ceation_ysterday_today }}%
			                        </span>
		                        </h5>
		                    </div>
		                </div>
		                <div class="col-4 text-end">
		                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
		                        <i class="ni ni-badge text-lg opacity-10" aria-hidden="true"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>


		<div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
		    <div class="card">
		        <div class="card-body p-3">
		            <div class="row">
		                <div class="col-8">
		                    <div class="numbers">
		                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Aujourd'hui</p>
		                        <h5 class="font-weight-bolder mb-0">
		                            {!! $nb_sorties_today !!} <span style="font-size:10px;">sorties</span>

		                            @if ($pctg_sortie_ysterday_today>=0)

			                            <span class="text-success text-sm font-weight-bolder">+
                                            
			                        @else    	
										<span class="text-danger text-sm font-weight-bolder">                  	
		                            @endif

		                            	{!! $pctg_sortie_ysterday_today !!}%
		                        	</span>
		                        </h5>
		                    </div>
		                </div>
		                <div class="col-4 text-end">
		                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
		                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

	</div>
</div>		


<div class="card row col-md-12" style="margin-top: 2%;" >

    <h4 class="card-header col-md-12">

        <form class="col-md-12" method="post" action="/statistiques/filter">

            @csrf

            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small" for="date_debut">date début : </label>
                        <input  class="form-control" id="date_debut"
                         name="date_debut" value="{{$date_debut}}"
                         type="date" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small " for="date_fin">date fin: </label>
                        <input  class="form-control" id="date_fin"
                         name="date_fin" value="{{$date_fin}}"
                         type="date" />
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <label style="visibility: hidden;" class="small" for="date_fin">date fin: </label>

                    <button type="submit" class="text-white form-control btn btn-primary">
                        <span style="color:#fff;">Filtrer</span>
                    </button>
                </div>
            </div> 

        </form>
    </h4>


    {{-- <div class="card-header row col-md-12">

        <form class="row col-md-12" method="post" action="/statistiques/filter">
            @csrf
            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small" for="date_debut">date début : </label>
                        <input  class="form-control" id="date_debut"
                         name="date_debut" value="{{$date_debut}}"
                         type="date" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small " for="date_fin">date fin: </label>
                        <input  class="form-control" id="date_fin"
                         name="date_fin" value="{{$date_fin}}"
                         type="date" />
                    </div>
                </div>
                <div class="col-md-4">
                        <button type="submit" style="margin-top:9%;" class="form-control btn btn-success">
                            Filtrer
                        </button>
                </div>
        </form>
    </div>
 --}}

    <div class="card-body">
        
        <div class="table-responsive">
            <h4 class="text-center">Produit | Quantité sortie </h4>                               
            <table class="table table-bordered" id="dataTable001" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th class="text-center" style="cursor:pointer;">Produit</th>
                        <th class="text-center" style="cursor:pointer;">Quantité</th>
                        <th class="text-center" style="cursor:pointer;">Date</th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($produits as $prod)
                        <tr>
                            <td class="text-center">{{ $prod->nomproduit ?? ''}}</td>
                            <td class="text-center">{{ $prod->nb_tickets ?? ''}}</td>
                            <td class="text-center">{{ $date_debut ?? ''}} - {{ $date_fin ?? ''}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <br>
        </div>

        <button id="btnPrint" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" class="btn btn-outline-info  text-center col-md-6" >
            Imprimer
        </button>

        
    </div>



    <!---->

</div>		



<div class="card" style="margin-top: 2%;" >

    <div class="card-body">
        
        <div class="table-responsive">
            <h4 class="text-center"> Livreur | Produit | Quantité sortie  |Retour </h4>                               
            <table class="table table-bordered" id="dataTable002" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th class="text-center" style="cursor:pointer;">Id_Livreur</th>
                        <th class="text-center" style="cursor:pointer;">Prénom</th>
                        <th class="text-center" style="cursor:pointer;">Produit</th>
                        <th class="text-center" style="cursor:pointer;">Quantité Sortie</th>
                        <th class="text-center" style="cursor:pointer;">Retour</th>
                        <th class="text-center" style="cursor:pointer;">Date</th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($livreur_qte as $produit_qte)
                        <tr>
                            <td class="text-center">{{ $produit_qte->id_livreur ?? '' }}</td>
                            <td class="text-center">{{ $produit_qte->email ?? '' }}</td>
                            <td class="text-center">{{ $produit_qte->nomproduit ?? ''}}</td>
                            <td class="text-center">{{ $produit_qte->nb_tickets ?? ''}}</td>
                            <td class="text-center">{{ App\Ticket::get_retour($produit_qte->id_produit,$produit_qte->id_livreur,$date_debut,$date_fin) }}</td>
                            <td class="text-center">{{ $date_debut ?? ''}} - {{ $date_fin ?? ''}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <br>

        </div>

        
    </div>
    
    <button id="btnPrint2" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" class="btn btn-outline-info  text-center col-md-6" >
        Imprimer
    </button>
    

</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="card">

	<div class="card-body p-3">

		<canvas id="myChart" style="margin-top:10%;" height="400" width="1500"></canvas>
	</div>

</div>	


@section('scripts')
<script>
        $(document).ready(function (e){   
            $("#btnPrint").on('click',function(e){
                e.preventDefault()
                $('#dataTable001').printThis();
            })
        });
</script>

<script>
        $(document).ready(function (e){   
            $("#btnPrint2").on('click',function(e){
                e.preventDefault()
                $('#dataTable002').printThis();
            })
        });
</script>

@endsection

<script>


  	const labels = {!! $jours_1 !!};

  	const data = 
  	{
	    labels: labels,
	    datasets: [{
	    label: 'Tickets Imprimés',
	    backgroundColor: 'rgb(25, 255, 233)',
	    borderColor: 'rgb(25, 255, 233)',
	    data: {!! $numbers_1 !!},
	    }]
  	};

  	const config = 
  	{
	    type: 'line',
	    data: data,
	    options: {}
  	};

	const myChart = new Chart(
	
	document.getElementById('myChart'),
	config
	);

  	//
</script>



<div class="card" style="margin-top: 2%;" >

	<div class="card-body p-3">

		<canvas id="myChart_sorties" style="margin-top:10%;" height="400" width="1500"></canvas>
	</div>	
</div>		

<script>

  	const labels_sorties = {!! $jours_sorties !!};
  	
  	const data_sorties = 
  	{
	    labels: labels_sorties,
	    datasets: [{
	    label: 'Tickets envoyés',
	    backgroundColor: 'rgb(25, 255, 233)',
	    borderColor: 'rgb(100, 255, 100)',
	    data: {!! $numbers_sorties !!},
	    }]
  	};


  	const config_sorties = 
  	{
	    type: 'line',
	    data: data_sorties,
	    options: {}
  	};

	const myChart_sorties = new Chart(
	document.getElementById('myChart_sorties'),
	config_sorties
	);


	/**/
</script>
 
 




@endsection

@section('content')


<div class="container-fluid py-4">

    <div class="row">

		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		    <div class="card">
		        <div class="card-body p-3">
		            <div class="row">
		                <div class="col-8">
		                    <div class="numbers">
		                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Aujoud'hui</p>
		                        <h5 class="font-weight-bolder mb-0">
		                            {!! $nb_tickets_today !!} <span style="font-size:10px;">Générés</span> 
		                            
		                            @if ($pctg_ceation_ysterday_today>=0)

			                            <span class="text-success text-sm font-weight-bolder">

			                        @else    	
										<span class="text-danger text-sm font-weight-bolder">                           	
		                            @endif
	
			                            {{ $pctg_ceation_ysterday_today }}%
			                        </span>
		                        </h5>
		                    </div>
		                </div>
		                <div class="col-4 text-end">
		                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
		                        <i class="ni ni-badge text-lg opacity-10" aria-hidden="true"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>


		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		    <div class="card">
		        <div class="card-body p-3">
		            <div class="row">
		                <div class="col-8">
		                    <div class="numbers">
		                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Aujourd'hui</p>
		                        <h5 class="font-weight-bolder mb-0">
		                            {!! $nb_sorties_today !!} <span style="font-size:10px;">sorties</span>

		                            @if ($pctg_sortie_ysterday_today>=0)

			                            <span class="text-success text-sm font-weight-bolder">+
                                            
			                        @else    	
										<span class="text-danger text-sm font-weight-bolder">                  	
		                            @endif

		                            	{!! $pctg_sortie_ysterday_today !!}%
		                        	</span>
		                        </h5>
		                    </div>
		                </div>
		                <div class="col-4 text-end">
		                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
		                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="filter: blur(0.1rem);">
		    <div class="card">
		        <div class="card-body p-3">
		            <div class="row">
		                <div class="col-8">
		                    <div class="numbers">
		                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Vente </p>
		                        <h5 class="font-weight-bolder mb-0">
		                            
		                            <span class="text-success text-sm font-weight-bolder">Comming soon</span>
		                        </h5>
		                    </div>
		                </div>
		                <div class="col-4 text-end">
		                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
		                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-xl-3 col-sm-6" style="filter: blur(0.1rem);">
		    <div class="card">
		        <div class="card-body p-3">
		            <div class="row">
		                <div class="col-8">
		                    <div class="numbers">
		                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Vente</p>
		                        <h5 class="font-weight-bolder mb-0">
		                            {{-- $103,430 --}}
		                            <span class="text-success text-sm font-weight-bolder">Comming soon</span>
		                        </h5>
		                    </div>
		                </div>
		                <div class="col-4 text-end">
		                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
		                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>		


<div class="card" style="margin-top: 2%;" >

   <div class="card-header">

        <form method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small mb-1" for="date_debut">date début : </label>
                        <input  class="form-control py-4" id="date_debut"
                         name="date_debut" value="{{$date_debut}}"
                         type="date" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small mb-1" for="date_fin">date fin: </label>
                        <input  class="form-control py-4" id="date_fin"
                         name="date_fin" value="{{$date_fin}}"
                         type="date" />
                    </div>
                </div>
                <div class="col-md-4">
                        <button type="submit" style="margin-top:9%;" class="form-control btn btn-success">
                            Filtrer
                        </button>
                </div>
        </form>
    </div>




    <div class="card-body">
        
        <div class="table-responsive">
            <h4 class="text-center">Produit | Quantité sortie </h4>                               
            <table class="table table-bordered" id="dataTable001" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th class="text-center" style="cursor:pointer;">Produit</th>
                        <th class="text-center" style="cursor:pointer;">Quantité</th>
                        <th class="text-center" style="cursor:pointer;">Date</th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($produits as $prod)
                        <tr>
                            <td class="text-center">{{ $prod->nomproduit ?? ''}}</td>
                            <td class="text-center">{{ $prod->nb_tickets ?? ''}}</td>
                            <td class="text-center">{{ $date_debut ?? ''}} - {{ $date_fin ?? ''}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <br>
        </div>

        <button id="btnPrint" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" class="btn btn-outline-info  text-center col-md-6" >
            Imprimer
        </button>

        
    </div>



    <!---->

</div>		



<div class="card" style="margin-top: 2%;" >

    <div class="card-body">
        
        <div class="table-responsive">
            <h4 class="text-center"> Livreur | Produit | Quantité sortie  |Retour </h4>                               
            <table class="table table-bordered" id="dataTable002" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th class="text-center" style="cursor:pointer;">Id_Livreur</th>
                        <th class="text-center" style="cursor:pointer;">Prénom</th>
                        <th class="text-center" style="cursor:pointer;">Produit</th>
                        <th class="text-center" style="cursor:pointer;">Quantité Sortie</th>
                        <th class="text-center" style="cursor:pointer;">Retour</th>
                        <th class="text-center" style="cursor:pointer;">Date</th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($livreur_qte as $produit_qte)
                        <tr>
                            <td class="text-center">{{ $produit_qte->id_livreur ?? '' }}</td>
                            <td class="text-center">{{ $produit_qte->email ?? '' }}</td>
                            <td class="text-center">{{ $produit_qte->nomproduit ?? ''}}</td>
                            <td class="text-center">{{ $produit_qte->nb_tickets ?? ''}}</td>
                            <td class="text-center">{{ App\Ticket::get_retour($produit_qte->id_produit,$produit_qte->id_livreur,$date_debut,$date_fin) }}</td>
                            <td class="text-center">{{ $date_debut ?? ''}} - {{ $date_fin ?? ''}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <br>

        </div>

        
    </div>
    
    <button id="btnPrint2" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" class="btn btn-outline-info  text-center col-md-6" >
        Imprimer
    </button>
    

</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="card">

	<div class="card-body p-3">

		<canvas id="myChart" style="margin-top:10%;" height="400" width="1500"></canvas>
	</div>

</div>	



<script>
    $(document).ready(function (e){   
        $("#btnPrint").on('click',function(e){
            e.preventDefault()
            $('#dataTable001').printThis();
        })
    });
</script>

<script>
        $(document).ready(function (e){   
            $("#btnPrint2").on('click',function(e){
                e.preventDefault()
                $('#dataTable002').printThis();
            })
        });
</script>

<script>
        $(document).ready(function (e){   
            $("#btnPrint3").on('click',function(e){
                e.preventDefault()
                $('#dataTable003').printThis();
            })
        });
</script>




<script>


  	const labels = {!! $jours_1 !!};

  	const data = 
  	{
	    labels: labels,
	    datasets: [{
	    label: 'Tickets Imprimés',
	    backgroundColor: 'rgb(25, 255, 233)',
	    borderColor: 'rgb(25, 255, 233)',
	    data: {!! $numbers_1 !!},
	    }]
  	};

  	const config = 
  	{
	    type: 'line',
	    data: data,
	    options: {}
  	};

	const myChart = new Chart(
	
	document.getElementById('myChart'),
	config
	);

  	//
</script>



<div class="card" style="margin-top: 2%;" >

	<div class="card-body p-3">

		<canvas id="myChart_sorties" style="margin-top:10%;" height="400" width="1500"></canvas>
	</div>	
</div>		

<script>

  	const labels_sorties = {!! $jours_sorties !!};
  	
  	const data_sorties = 
  	{
	    labels: labels_sorties,
	    datasets: [{
	    label: 'Tickets envoyés',
	    backgroundColor: 'rgb(25, 255, 233)',
	    borderColor: 'rgb(100, 255, 100)',
	    data: {!! $numbers_sorties !!},
	    }]
  	};


  	const config_sorties = 
  	{
	    type: 'line',
	    data: data_sorties,
	    options: {}
  	};

	const myChart_sorties = new Chart(
	document.getElementById('myChart_sorties'),
	config_sorties
	);


	/**/
</script>
 
 
 <script>
    
</script>





@endsection