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

        table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          text-align: center;
          padding: 8px;
        }

        tbody tr:nth-child(even) {background-color: #f2f2f2;}

        tfoot {
          border-collapse: collapse;
          width: 100%;
        }


    </style>

</head>


<body style="color: black;">

    <?php date_default_timezone_set("Africa/Algiers"); ?>

    <table width="100%">
        <tr width="100%">
            <td align="left">
                
                <img src="intaji.jpeg" width="150px" height="150px">
                                
            </td>

            <td style="visibility:hidden;">Lion </td>

            <td style="visibility:hidden;">Lion </td>

            <td style="margin-left:-10%;" align="right">

                <strong>Client : </strong>  {!! substr($client,0,strlen($client)-13) !!}<br>
                <strong>Tel : </strong>  {!! substr($client,strlen($client)-10) !!}<br>
                <strong>Adresse : </strong> {!! $adresse !!}
            
            </td>

        </tr>

    </table>

    <table style="margin-top: 4%;" width="100%">
        
        <tr style="font-size:0.7em;">
        
            <td style="background-color: #fff;"><strong>Suivi Par : </strong>Admin | </td>
            <td style="background-color: #fff;"><strong>BL Numéro : {!! $num_bl !!}</strong> | </td>
            <td style="background-color: #fff;"><strong>Le:</strong> {!! date("d-m-Y H:i:s ") !!} |</td>
            <td style="background-color: #fff;"><strong>Livreur:</strong> {!! $livreur->name ?? '' !!} {!! $livreur->prenom ?? '' !!} - {!! $livreur->email ?? '' !!} </td>
        </tr>
    
    </table>

    <br/>
    
    <table class="table" width="100%">
        <thead style="background-color:#bb77cc;">
            <tr>
                <th style="font-size:14px;" class="th">Nom Produit</th>
                <th style="font-size:14px;" class="th">Quantité </th>
                <th style="font-size:14px;" class="th">Prix Unitaire </th>
                <th style="font-size:14px;" class="th">Total </th>
            </tr>
        </thead>
        
        <tbody style="border-bottom: 1px solid black;">

            {!! $total = 0 !!}

            @foreach ($elements as $element)
                
                <tr>
                    
                    <td class="td" style="text-align: center; font-size:12px;" >{!! $element->produit !!}</td>
                    <td class="td" style="text-align: center; font-size:12px;" >{!! $element->qte !!}</td>
                    <td class="td" style="text-align: center; font-size:12px;" >{!! number_format($element->prix) !!} DA</td>
                    <td class="td" style="text-align: center; font-size:12px;" >{!! number_format($element->prix*$element->qte) !!} DA</td>

                </tr>

                {{ $total = $total + $element->prix*$element->qte }}

                
            @endforeach

        </tbody>

        <tfoot style="margin-top:10%;">
            <tr>
                <td style="font-size: 14px;" class="td" colspan="2"></td>
                <td style="font-size: 14px;" class="td" align="center">Total HT </td>
                <td style="font-size: 14px;" class="td" align="right">{!! number_format($total) !!} DA</td>
            </tr>
            <tr>
                <td style="font-size: 14px;" class="td" colspan="2"></td>
                <td style="font-size: 14px;" class="td" align="center">Remise {!! $remise !!} %</td>
                <td style="font-size: 14px;" class="td" align="right">{!! number_format($total*($remise/100)) !!} DA</td>
            </tr>
            <tr>
                <td style="font-size: 14px;" class="td" colspan="2"></td>
                <td class="td" align="center" style="font-size: 14px;background-color:#bb77cc;">Net à payer</td>
                <td class="td" align="right" style="font-size: 14px; background-color:#bb77cc;">{!! number_format($total*(1-($remise/100))) !!} DA</td>
            </tr>

        </tfoot>


    </table>


    <div width="100%" style="background: url('lion_opac_2.png') repeat; background-size: 50%;">


        <h3 style="width:100%;"> Conditions de garantie </h3>

        <ul>
            
            <li>Ce produit est garanti contre tout vice industriel</li>
            <li>Les réparations sous garantie sont gratuites</li>
            <li>Indemnisation gratuite des pièces de rechange défectueuses</li>
            <li>La main-d'œuvre nécessaire à cette compensation sera gratuite</li>
            <li>Les réparations garanties sont sous la garantie du vendeur du produit</li>
            <li>Cette garantie ne couvre pas la corruption causée par le transport</li>
            <li>Cette garantie ne couvre pas la corruption causée par le transport Et l'installation et le fonctionnement d'une manière qui ne correspond pas à l'utilisation spécifié dans le fichier d'utilisation</li>
            
            <li>Cette garantie ne couvre pas la nomination d'un agent autorisé Pour les interventions effectuées par un professionnel non qualifié</li>
        </ul> 


        <h4> <strong style="color:red;" > Important : </strong> Le vendeur doit remplir correctement le certificat de garantie Cette attestation précise les conditions minimales de la garantie et professionnel peut accorder d'autres avantages </h4>
        
        {{--  --}}
    </div>

    <footer> <strong >Numéro Sérvice Après Vente : </strong> 0770585139 , 0770585129 , 0770585167 </footer>

</body>

<style type="text/css">

            
    ul li {
      list-style-type: none;
      font-family:cursive; 
    }

    ul li:before {
      content: counter(item, disc) " ";
      color: pink;
    }

    footer 
    {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #bb77cc;
        color: white;
        text-align: center;
    }
            

</style>

</html>
