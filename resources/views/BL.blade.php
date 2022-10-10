<html>

	<head>
	    <meta charset="UTF-8">
	    <title>Bon de livraison!</title>
	</head>
	<body>



	    <table width="100%">
	        <tr>
	            <td align="left">
	                <h3>LION ROYAL</h3>

	                <pre>
	                	<img src="{{ asset('lion.jpeg') }}" width="50px" height="60px">
	            	</pre>
	            	
	            </td>
	            <td align="">
	                <h3>Client : HHH</h3>
	                <pre>
	                RC :  {{-- {!! $client !!} --}} 
	                MF :  
	                Adresse : {{-- {!! $adresse !!} --}}
	            </pre>
	            </td>

	        </tr>

	    </table>

	</body>
</html>