<div id="encaissements" total="" style="margin-top: 2%;">
	
	<h6 class="btn btn-outline-primary text-center col-md-12" style="cursor:pointer;" onclick="get_bl();">Voir BL</h6>

	<div style="margin-top:4%;" class="form-group row" action="/home/livraisons/encaisser1">
		
		{{ @csrf_field() }}

		<table class="table table-bordered text-center" id="datatable-10" width="100%">
			
			<thead>
				<tr>
					<th>Date</th>
					<th>Versement</th>
					<th>Validateur</th>
				</tr>
			</thead> 
			
			<tbody id="past_versements">
				


				{{--  --}}
			</tbody>
		</table>


		<label id="label_versement" class="label label-default text-center" for="versement"> Versement DA <span class="text-danger">(Ne pas écrire le nombre avec virgule ',' ni point '.')</span> </label>
		
		<input id="versement" onkeyup="test_depassement(this);" autofocus name="versement" class="form-control col-md-12" type="number">

		<input id="valider_versement" onclick="valider_versement();" style="margin:2% 25%;" class="btn btn-outline-primary col-md-6" type="submit" value="valider versement">

		<p id="versement_complet" class="alert alert-success text-center"> 
		<i class="fa fa-usd" aria-hidden="true"></i> Versement Copmlet </p>



		{{--  --}}
	</div>

	{{--  --}}
</div>



<script>


</script>