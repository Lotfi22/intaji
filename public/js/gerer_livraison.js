document.getElementById("confirmer_approbation").style.display = "none";
document.getElementById("la_remise").style.display = "none";

function get_livraison(objet) 
{
	var num_livraison = $(objet).attr('num_livraison');

	$("#num_livraison").val(num_livraison);
	$("#approuver").attr('num_livraison', num_livraison);
	$("#rejeter").attr('num_livraison', num_livraison);

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/show_livraison/ajax",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{

			var to_append = '';

			var totale = 0;

			for (var i = 0; i < data.length; i++) 
			{
				
				var prod = '<td>'+data[i].nom_produit+'</td>';
				var qte = '<td>'+data[i].qte+'</td>';
				var prix = '<td>'+data[i].prix+' DA</td>';
				var total = '<td>'+data[i].prix*data[i].qte+' DA</td>';

				to_append += '<tr>'+prod+''+qte+''+prix+''+total+'</tr>';

				totale = totale + data[i].prix*data[i].qte;

				//
			}


			to_append += '<tr><td> </td><td> </td><td style="font-weight:bold;" >Total : </td><td style="font-weight:bold;" >'+totale+' DA</td></tr>';

			$("#prods_livraison").html(to_append);
			$("#livreur").html('Livreur : '+data[0].livreur);
			$("#client").html('Client : '+data[0].id_client);

			if (data[0].statut=="en attente")
			{	
				$(".alerte").remove();

				$("#myTable").after('<h3 id="modal_statut'+data[0].num_livraison+'" class="alert alert-warning col-md-12 text-center alerte"> Statut Livraison : '+ data[0].statut +' </h3>')
			}
			else
			{

				$(".alerte").remove();

				$("#myTable").after('<h3 id="modal_statut'+data[0].num_livraison+' " class="alerte alert col-md-12 text-center"> Statut Livraison : '+ data[0].statut +' </h3>')


				//
			}
			if (data[0].statut=="rejeté")
			{

				$("#rejeter").hide();
				$("#approuver").hide();

				//
			}


			//
		}

		//
    });


	//
}

function approuver(objet) 
{

	var num_livraison = $(objet).attr('num_livraison');

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/approuver/ajax",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{
			
			$("#"+num_livraison).addClass("alert alert-success");
			$("#statut"+num_livraison).attr('class','text-center alert alert-success');
			$("#statut"+num_livraison).text('validé');
			$("#modal_statut"+num_livraison).attr('class','text-center alert alert-success');
			$("#modal_statut"+num_livraison).text('validé');
			$("#validateur"+num_livraison).text(data);

			$("#approuver").hide();

			$("#la_remise").show(1000);

			/*$(".close").click();*/

			//
		}

	    //
    });

	// body...
}


function rejeter(objet) 
{

	var num_livraison = $(objet).attr('num_livraison');
	
    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/rejeter/ajax",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{

			$("#"+num_livraison).addClass("alert alert-danger");
			$("#statut"+num_livraison).attr('class','alert alert-danger');
			$("#statut"+num_livraison).text('rejeté');
			$("#modal_statut"+num_livraison).attr('class','alert alert-danger');
			$("#modal_statut"+num_livraison).text('rejeté');
			$("#rejeter").hide();
			$("#approuver").hide();
			$(".close").click();

			//
		}

	    //
    });

	// body...
}

function afficher_confirmation(objet)
{

	event.preventDefault();

	$(objet).hide('400', function() 
	{
		$("#confirmer_approbation").show(200)
	});

	//
}

function retour()
{
	
	$("#confirmer_approbation").hide('400', function() 
	{
		
		$("#confirmer").show(400);

		//
	});

	//
}

function final_confirmation() 
{
 	
 	var remise = $("#remise").val();

 	var num_livraison = ($("#approuver").attr('num_livraison'));

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/last_approbation/BL",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{


			//
		}

	    //
    });

	//
}
