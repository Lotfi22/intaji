<div id="encaissements" total="" style="margin-top: 2%;">
	
	<h6 class="alert alert-success text-center" > BL Généré </h6>

	<div class="form-group row"  action="/home/livraisons/encaisser1">
		
		{{ @csrf_field() }}

		<label for="versement"> Versement DA</label>
		
		<input id="versement" name="versement" class="form-control col-md-12" type="number">

		<input id="valider_versement" onclick="valider_versement();" style="margin:2% 25%;" class="btn btn-outline-primary col-md-6" type="submit" value="valider">

		<p id="versement_complet" class="alert alert-success text-center"> Versement Copmlet </p>

		{{--  --}}
	</div>

	{{--  --}}
</div>



<script>


</script>