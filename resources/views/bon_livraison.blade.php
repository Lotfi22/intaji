<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BL</title>

	<style type="text/css">		
        *{
            font-family: Verdana, Arial, sans-serif;
        }
        tfoot tr td{
            font-weight: bold;
        }
        .table, .th, .td {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #fff;
        }                
        th, td {
            padding:1%;
        }
		body {
		 	background-image: url("lion.jpeg");
	  		background-repeat: no-repeat;
  			background-size: 40%;
			background-position: 50% 100%;
  					
  		}

	</style>

</head>


<body style="color: black;">

	<?php date_default_timezone_set("Africa/Algiers"); ?>

	{!! setlocale(LC_MONETARY,"en_US"); !!}

    <table width="100%">
        <tr>
            <td align="left">
                
                <h3 style="display: none; background-color: #fff;">LION ROYAL</h3>

                <pre>
                	<img src="lion.jpeg" width="200px" height="200px">
            	</pre>
            	
            </td>
            <td align="right">
                <h3 style="background-color: #fff;">Client : {!! $client !!}</h3>
                <pre style="background-color: #fff;">
	                <strong>RC : </strong>  {!! $client !!} 
	                <strong>Adresse : </strong> {!! $adresse !!}
            	</pre>
            </td>

        </tr>

    </table>

    <table width="100%">
        <tr style="font-size:0.8em;">
            <td style="background-color: #fff;"><strong>Suivi Par : </strong>Admin | </td>
            <td style="background-color: #fff;"><strong>BL Numéro : {!! $num_bl !!}</strong> | </td>
            <td style="background-color: #fff;"><strong>Le:</strong> {!! date("d-m-Y H:i:s ") !!} |</td>
            <td style="background-color: #fff;"><strong>Livreur:</strong> {!! $livreur->name ?? '' !!} {!! $livreur->prenom ?? '' !!} - {!! $livreur->email ?? '' !!} </td>
        </tr>
    
    </table>

    <br/>
    
    <table class="table" width="100%">
        <thead>
	        <tr>
	            <th class="th">Nom Produit</th>
	            <th class="th">Quantité </th>
	            <th class="th">Prix Unitaire </th>
	            <th class="th">Total </th>
	        </tr>
        </thead>
        
        <tbody>

        	{!! $total = 0 !!}

        	@foreach ($elements as $element)
        		
        		<tr>
        			
        			<td class="td" style="text-align: center;" >{!! $element->produit !!}</td>
        			<td class="td" style="text-align: center;" >{!! $element->qte !!}</td>
        			<td class="td" style="text-align: center;" >{!! number_format($element->prix) !!} DA</td>
        			<td class="td" style="text-align: center;" >{!! number_format($element->prix*$element->qte) !!} DA</td>

        		</tr>

        		{{ $total = $total + $element->prix*$element->qte }}

        		{{-- expr --}}
        	@endforeach

		</tbody>

        <tfoot>
            <tr>
                <td class="td" colspan="2"></td>
                <td class="td" align="center">Total HT </td>
                <td class="td" align="right">{!! number_format($total) !!} DA</td>
            </tr>
            <tr>
                <td class="td" colspan="2"></td>
                <td class="td" align="center">Remise {!! $remise !!} %</td>
                <td class="td" align="right">{!! number_format($total*($remise/100)) !!} DA</td>
            </tr>
            <tr>
                <td class="td" colspan="2"></td>
                <td class="td" align="center">Net à payer</td>
                <td class="td" align="right">{!! number_format($total*(1-($remise/100))) !!} DA</td>
            </tr>

        </tfoot>


    </table>

	

	 

</body>
</html>