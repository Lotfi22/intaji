document.getElementById("confirmer_approbation").style.display = "none";
document.getElementById("la_remise").style.display = "none";
document.getElementById("encaissements").style.display = "none";
document.getElementById("versement_complet").style.display = "none";

function get_client(num_livraison)
{


	var client = "";

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/get_client/ajax",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{
			
			$("#client").html("Client : "+data.nom+" "+data.prenom + " | Tél : "+data.telephone + " | Adresse : "+data.wilaya+" "+data.commune);
			//
		}
	    //
    });


	//
}



function get_depot(num_livraison)
{


	var depot = "";

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/get_depot/ajax",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{
			
			$("#depot").html("Dépot : "+data);
			//
		}
	    //
    });


	//
}



function get_livreur(num_livraison)
{

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/get_livreur/ajax",
		data:{num_livraison:num_livraison},

		success:function(data) 
		{
			
			$("#livreur").html("Livreur : "+data.name+" "+data.prenom+" | "+data.email+" tel: "+data.telephone+" ");

			//
		}
	    //
    });


	//
}



function get_livraison(objet) 
{
 
	var num_livraison = $(objet).attr('num_livraison');
    
	$("#num_livraison").val(num_livraison);
	$("#numm_livraison").val(num_livraison);
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
			
			if(data.livreur.id!==undefined) 
			{
				$("#affecter").attr('href', '/ticket/affecter/num_livraison/'+num_livraison+'/livreur/'+data.livreur.id);
			}
			else
			{
				$("#affecter").attr('href', '/ticket/affecter/num_livraison/'+num_livraison+'/livreur/');
			}

			for (var i = 0; i < data.livraison.length; i++) 
			{
                /*alert(data.livraison[i].prix)*/
				var prod = '<td>'+data.livraison[i].nom_produit+'</td>';
				var qte = '<td>'+data.livraison[i].qte+'</td>';
				var prix = '<td>'+formatMoney(data.livraison[i].prix*1)+' DA</td>';
				var total = '<td>'+formatMoney(data.livraison[i].prix*data.livraison[i].qte)+' DA</td>';

				to_append += '<tr>'+prod+''+qte+''+prix+''+total+'</tr>';
                
				totale = parseFloat(totale) + parseFloat(data.livraison[i].prix*data.livraison[i].qte);

				//
			}


			to_append += '<tr><td> </td><td> </td><td style="font-weight:bold;" >Total : </td><td style="font-weight:bold;" >'+formatMoney(totale)+' DA</td></tr>';
			to_append += '<tr><td> </td><td> </td><td style="font-weight:bold;" >Remise '+data.livraison[0].remise+'% : </td><td style="font-weight:bold;" >'+formatMoney(totale*(data.livraison[0].remise)/100)+' DA</td></tr>';
			to_append += '<tr><td> </td><td> </td><td style="font-weight:bold;" >Net à Payer : </td><td style="font-weight:bold;" >'+formatMoney(totale*(1-(data.livraison[0].remise)/100))+' DA</td></tr>';
			
			$("#prods_livraison").html(to_append);
			
			/*$("#livreur").html('Livreur : '+data.livraison[0].livreur);*/
			get_livreur(num_livraison);
			get_client(num_livraison);
			get_depot(num_livraison);

			$("#versement").attr('max', totale);

			if (data.livraison[0].statut=="en attente")
			{	
				$(".alerte").remove();

				$("#myTable").after('<h3 id="modal_statut'+data.livraison[0].num_livraison+'" class="alert alert-warning col-md-12 text-center alerte"> Statut Livraison : '+ data.livraison[0].statut +' </h3>')
			}
			else
			{

				$(".alerte").remove();

				$("#myTable").after('<h3 id="modal_statut'+data.livraison[0].num_livraison+' " class="alerte alert col-md-12 text-center"> Statut Livraison : '+ data.livraison[0].statut +' </h3>')


				//
			}
			
			if (data.livraison[0].statut=="rejeté")
			{

				$("#rejeter").hide();
				$("#approuver").hide();
				$("#encaissements").hide();

				//
			}

			if (data.livraison[0].statut=="BL" || data.livraison[0].statut=="validé") 
			{


				$("#affecter").show();

				//
			}
			else
			{

				$("#affecter").hide();

				//
			}


			if (data.livraison[0].statut!=="en attente" && data.livraison[0].statut!=="rejeté" && data.livraison[0].statut!=="validé")
			{

				$("#encaissements").show();
				$("#rejeter").hide();
				$("#approuver").hide();


				//
			}

			var versements = ''			

			var total_versements = 0;

			for (var i = 0; i < data.versements.length; i++) 
			{
				

				versements += '<tr> <td>'+data.versements[i].created_at+'</td> <td>'+formatMoney(data.versements[i].versement*1)+' DA</td> <td>'+data.versements[i].validateur+'</td> </tr>';

				total_versements += parseFloat(data.versements[i].versement);

				//
			}

			versements += '<tr class="alert alert-primary"><td style="font-weight:bold;" >Total Versement : </td><td>'+formatMoney(total_versements)+' DA</td></tr>';

			var reste = parseFloat(totale)*parseFloat(1-(data.livraison[0].remise/100)) - total_versements;

			if (reste!==0)
			{
				versements += '<tr><td style="font-weight:bold; color:red;">Reste : </td><td style="font-weight:bold; color:red;">'+formatMoney(reste)+' DA</td></tr>';

				$("#versement").show(100);
				$("#label_versement").show(100);
				$("#valider_versement").show(100);
				$("#versement_complet").hide(100);

			}
			else
			{
				versements += '<tr><td style="font-weight:bold; color:green;">Payement Complet</td><td style="font-weight:bold; color:green;">'+formatMoney(total_versements)+' DA</td></tr>';
				
				$("#versement").hide(100);
				$("#label_versement").hide(100);
				$("#valider_versement").hide(100);
				$("#versement_complet").show(100);
			}

			$("#past_versements").html(versements);

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

			$("#approuver").prop("disabled",true);

			$("#la_remise").show(1000);			

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

		$("#encaissements").show();

	});

	//
}

function retour()
{
	
	event.preventDefault();

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

			console.log(data);

			//
		}

	    //
    });

	//
}

function valider_versement() 
{

	event.preventDefault();

	var versement = parseFloat($("#versement").val());

	if (!isNaN(versement)) 
	{

		var max = parseFloat($("#versement").attr('max'));

		var totale = parseFloat(max);

		if (parseFloat(versement) > parseFloat(max)) 
		{

			var depassement = '<p id="depassement" class="alert alert-danger text-center"> Versement dépasse le total </p>';

			$("#valider_versement").after(depassement);

			return false;

			//
		}	

		var num_livraison = $("#num_livraison").val();

		$("#depassement").hide();

	    $.ajax({
			headers: 
			{
				'X-CSRF-TOKEN': $('input[name="_token"]').val()
			},                    
			type:"POST",
			url:"/home/livraisons/encaissements1",
			data:{num_livraison:num_livraison,versement:versement},

			success:function(data) 
			{

				$("#"+data.livraison.num_livraison).addClass("alert alert-success");
				$("#statut"+data.livraison.num_livraison).attr('class','text-center alert alert-success');
				$("#statut"+data.livraison.num_livraison).html('<img src="/img/termine.png" height="30" width="30"> Terminé');
				$("#modal_statut"+data.livraison.num_livraison).attr('class','text-center alert alert-success');
				$("#modal_statut"+data.livraison.num_livraison).text('terminé');
				

				var versements = ''

				var total_versements = 0;

				for (var i = 0; i < data.versements.length; i++) 
				{	

					versements += '<tr><td>'+data.versements[i].created_at+'</td><td>'+formatMoney(data.versements[i].versement*1)+' DA</td> <td>'+data.versements[i].validateur+'</td> </tr>';

					total_versements = parseFloat(total_versements) + parseFloat(data.versements[i].versement);

					//
				}

				versements += '<tr class="alert alert-success" ><td style="font-weight:bold;" >Total versements: </td><td>'+formatMoney(total_versements)+' DA</td></tr>';

				var reste = parseFloat(totale)*parseFloat(1-(data.livraison[0].remise/100)) - parseFloat(total_versements);

				if (reste!==0)
				{
					versements += '<tr><td style="font-weight:bold; color:red;">Reste : </td><td style="font-weight:bold; color:red;">'+formatMoney(reste)+' DA</td></tr>';

					$("#versement").show(100);
					$("#label_versement").show(100);
					$("#valider_versement").show(100);
					$("#versement_complet").hide(100);

				}
				else
				{
					versements += '<tr class="alert alert-success"><td style="font-weight:bold; color:green;">Payement Complet</td><td style="font-weight:bold; color:green;">'+formatMoney(total_versements*1)+' DA</td></tr>';
					
					$("#versement").hide(100);
					$("#label_versement").hide(100);
					$("#valider_versement").hide(100);
					$("#versement_complet").show(100);

					$("#statut"+num_livraison).text('terminé');
				}

				$("#past_versements").hide()
				$("#past_versements").html(versements);
				$("#past_versements").show(1000)



				$("#affecter").hide(200);




				/*$(".close").click();*/


				//
			}

		    //
	    });


		//
	}


    $("#versement").val('');

	//
}

function formatMoney(number) 
{
	if(number>=0)
	{

		var ret = number.toLocaleString('en-IN', { style: 'currency', currency: 'EUR' });
		
	  	return ret.substr(1);		
	}		
	else
	{
		var ret = number.toLocaleString('en-IN', { style: 'currency', currency: 'EUR' });
		
	  	return ret.substr(0,1)+ret.substr(2);		

	}
}

function test_depassement(objet)
{

	var total_livraison = ($(objet).attr('max'));

	var num_livraison = $("#approuver").attr('num_livraison');

	var val = ($(objet).val());

    $.ajax({
		headers: 
		{
			'X-CSRF-TOKEN': $('input[name="_token"]').val()
		},                    
		type:"POST",
		url:"/home/livraisons/test_depassement/ajax",
		data:{val:val,num_livraison:num_livraison},

		success:function(data) 
		{

			if(data)
			{

				$(objet).removeClass("is-invalid").addClass("is-valid");

				$("#valider_versement").show();

				$("#meggase_depassement").hide();
				//
			}
			else
			{

				$(objet).removeClass("is-valid").addClass("is-invalid");

				$("#valider_versement").hide();

				var message = '<p id="meggase_depassement" style="color:red;" class="alert alert-danger text-center col-md-12"> Vous avez dépassez le reste!!</p>'
				
				$("#meggase_depassement").hide();
				
				$("#valider_versement").after(message);

				//
			}

			//
		}

	    //
    });


	// body...
}

function get_bl() 
{
	var num_livraison = $("#numm_livraison").val();/*$("#approuver").attr('num_livraison')*/;
	
	window.open("/home/livraisons/voir/"+num_livraison+"/BL", '_blank');

	// body...
}

function fit_livreur_href() 
{

	id_livreur = $('select[name="livreur"]').find(":selected").val();

	var href = $("#affecter").attr('href')+id_livreur;

	$("#affecter").attr('href',href);

	// body...
}