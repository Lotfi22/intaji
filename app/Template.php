<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    public function livreur()
    {
        return $this->belongsTo('App\Livreur');
    }
    
    public function produits()
    {
        return $this->hasMany('App\Produit');
    }
    
    

    protected $fillable = [
        'produit',
        'code_tracking',
        'quantite',
        'prix',
        'prix_livraison',
        'command_express',
        'nom_client',
        'total',
        'telephone',
        'fournisseur',
        'adress',
        'date_livraison',
        'wilaya',
        'commune',
        'note',
        'state',
        'livreur',
        'livreur_id',
        'fournisseur_id',
        'acteur',
        'id_acteur',
        'credit_livreur',
        
    ];
    
    public static function templateBon($commande,$margin,$codebar,$number,$num_lot,$desc) 
    {
        $codebar = asset($codebar);
        $html='
            <div style="position:absolute;left:23%;margin-left:-40px;top:-35px;width:283px;height:283px;overflow:hidden">
                <div style="position:absolute;left:20.89px;top:10px" class="cls_002">
                    <span class="cls_002">
                        <img src="'.$codebar.'" width="90px" height="65px">
                    </span>
                    <div style="position:absolute;left:1.89px;top:55px;font-size:5px;" class="cls_006">
                        '.substr($number,10).'
                    </div>
                    <div style="position:absolute;left:0.5px;top:59px;font-size:12px;" class="cls_006"> '.$desc.' </div>
                </div>
                
            </div>
                ';
        return $html;

    }

    public static  function bl(Livreur $livreur,$elements)
    {
        $total = 0;
        $total = 0;
        $html = '        
            <!doctype html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <title>Bon de livraison!</title>
            
            <style type="text/css">
                * {
                    font-family: Verdana, Arial, sans-serif;
                }
                table{
                    font-size: x-small;
                }
                tfoot tr td{
                    font-weight: bold;
                    font-size: x-small;
                }
                .gray {
                    background-color: white lightgray
                }
                .item{
                    text-align:center;
                }
            </style>
            
            </head>
            <body>
            
            <table width="100%">
                <tr>
                    <td align="left">
                        <h3>LION ROYAL</h3>
                        <pre>
                            RC: 16/00-5127021A18
                            MF : 16302737197
                            Adresse : Alger CITE Dar el beida
                        </pre>
                    </td>
                    <td align="">
                        <h3>Client : Divers CLient 4</h3>
                        <pre>
                            RC :  Divers CLient 
                            MF :  
                            Adresse : '.$livreur->adress.' 
                        </pre>
                    </td>

                </tr>
            
            </table>
            
            <table width="100%">
                <tr>
                    <td><strong>Suivi Par :</strong>Admin</td>
                    <td><strong>Facture Numéro:</strong></td>
                    <td><strong>Le:</strong> '.date('d-m-Y').'</td>
                </tr>
            
            </table>
            
            <br/>
            
            <table width="100%">
                <thead style="background-color: lightgray;">
                <tr>
                    <th style="cursor:pointer;">Nom Produit</th>
                    <th style="cursor:pointer;">Quantité </th>
                    <th style="cursor:pointer;">Prix Unitaire </th>
                    <th style="cursor:pointer;">Total </th>
                </tr>
                </thead>
                <tbody>
                    ';
                    foreach($elements as $element){
                        $prix = $element->prix_gros ?? 1000;
                        $html = $html.'<tr>';
                        $html = $html.'<td class="item">'.$element->nom.'</td>';
                        $html = $html.'<td class="item">'.$element->qte.'</td>';
                        $html = $html.'<td class="item">'.$prix.' DA</td>';
                        $html = $html.'<td class="item">'.$prix*$element->qte.' DA</td>';
                        $html = $html.'</tr>';
                        $total = $total + $prix*$element->qte;
                    }
                                                               
                $html=$html.'                
                </tbody>
            
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td align="right">Total HTA</td>
                        <td align="center">'.$total.' DA</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Total TVA</td>
                        <td align="center">0.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Total TTC</td>
                        <td align="right" class="gray">'.$total.' DA</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Timbre</td>
                        <td align="right" class="gray"> </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Net à payer</td>
                        <td align="right" class="gray">'.$total.' DA</td>
                    </tr>

                </tfoot>
            </table>
            
            </body>
            </html>        
        
        ';
        return $html;   
    }


    ////////////////////////////////////////////////////////////////////////////////////////

    public static  function bl1(Livreur $livreur,$elements,$client,$adresse)
    {
        $total = 0;
        $total = 0;
        $html = '        
            <!doctype html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <title>Bon de livraison!</title>
            
            <style type="text/css">
                * {
                    font-family: Verdana, Arial, sans-serif;
                }
                table{
                    font-size: x-small;
                }
                tfoot tr td{
                    font-weight: bold;
                    font-size: x-small;
                }
                .gray {
                    background-color: lightgray
                }
                .item{
                    text-align:center;
                }
            </style>
            
            </head>
            <body>
            
            <table width="100%">
                <tr>
                    <td align="left">
                        <h3>LION ROYAL</h3>
                        <pre>
                            RC: 16/00-51277689O18
                            MF : 16354322417
                            Adresse : Alger CITE 32 DAR EL BEIDA
                        </pre>
                    </td>
                    <td align="">
                        <h3>Client : '.$client.'</h3>
                        <pre>
                            RC :  Divers CLient 
                            MF :  
                            Adresse : '.$adresse.'
                        </pre>
                    </td>

                </tr>
            
            </table>
            
            <table width="100%">
                <tr>
                    <td><strong>Suivi Par : </strong>Admin</td>
                    <td><strong>BL Numéro : '.$num_bl.'</strong></td>
                    <td><strong>Le:</strong> '.date('d-m-Y').'</td>
                </tr>
            
            </table>
            
            <br/>
            
            <table width="100%">
                <thead style="background-color: lightgray;">
                <tr>
                    <th style="cursor:pointer;">Nom Produit</th>
                    <th style="cursor:pointer;">Quantité </th>
                    <th style="cursor:pointer;">Prix Unitaire </th>
                    <th style="cursor:pointer;">Total </th>
                </tr>
                </thead>
                <tbody>
                    ';
                    foreach($elements as $element)
                    {
                        $prix = $element->prix ?? 1000;
                        $html = $html.'<tr>';
                        $html = $html.'<td class="item">'.$element->produit.'</td>';
                        $html = $html.'<td class="item">'.$element->qte.'</td>';
                        $html = $html.'<td class="item">'.$prix.' DA</td>';
                        $html = $html.'<td class="item">'.$prix*$element->qte.' DA</td>';
                        $html = $html.'</tr>';
                        $total = $total + $prix*$element->qte;
                    }
                                                               
                $html=$html.'                
                </tbody>
            
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td align="right">Total HTA</td>
                        <td align="center">'.$total.' DA</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Total TVA</td>
                        <td align="center">'.$total*0.19.'</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Total TTC</td>
                        <td align="right" class="gray">'.$total*1.19.' DA</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Timbre</td>
                        <td align="right" class="gray"> </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="center">Net à payer</td>
                        <td align="right" class="gray">'.$total*1.19.' DA</td>
                    </tr>

                </tfoot>
            </table>
            
            </body>
            </html>        
        
        ';
        return $html;   
    }



    public static  function bl_lion_royal(Livreur $livreur,$elements,$client,$adresse,$remise,$num_bl,$codebar)
    {
        $total = 0;
        $total = 0; 
        // dd(asset('img/lion.png'));
        $html = '        
            <!doctype html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <title>Bon de livraison!</title>
            
            <style type="text/css">
                * {
                    font-family: Verdana, Arial, sans-serif;
                }
                table{
                    font-size: x-small;
                }
                tfoot tr td{
                    font-weight: bold;
                    font-size: x-small;
                }
                .item{
                    text-align:center;
                }

                .table, .th, .td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }                

                .th, .td {
                    padding:1%;
                }

            </style>
            
            </head>
            <body>
            
            <table width="100%">
                <tr>
                    <td align="left">
                        <h3>LION ROYAL</h3>
                        <pre>
                            <img src="'.asset($codebar).'" width="50px" height="60px">

                        </pre>
                    </td>
                    <td align="">
                        <h3>Client : '.$client.'</h3>
                        <pre>
                            RC :  '.$client.' 
                            MF :  
                            Adresse : '.$adresse.'
                        </pre>
                    </td>

                </tr>
            
            </table>
            
            <table width="100%">
                <tr>
                    <td><strong>Suivi Par : </strong>Admin</td>
                    <td><strong>BL Numéro : '.$num_bl.'</strong></td>
                    <td><strong>Le:</strong> '.date('d-m-Y').'</td>
                </tr>
            
            </table>
            
            <br/>
            
            <table class="table" width="100%">
                <thead>
                <tr>
                    <th class="th" style="cursor:pointer;">Nom Produit</th>
                    <th class="th" style="cursor:pointer;">Quantité </th>
                    <th class="th" style="cursor:pointer;">Prix Unitaire </th>
                    <th class="th" style="cursor:pointer;">Total </th>
                </tr>
                </thead>
                <tbody>
                    ';
                    foreach($elements as $element)
                    {
                        $prix = $element->prix ?? 1000;
                        $html = $html.'<tr>';
                        $html = $html.'<td class="td item">'.$element->produit.'</td>';
                        $html = $html.'<td class="td item">'.$element->qte.'</td>';
                        $html = $html.'<td class="td item">'.$prix.' DA</td>';
                        $html = $html.'<td class="td item">'.$prix*$element->qte.' DA</td>';
                        $html = $html.'</tr>';
                        $total = $total + $prix*$element->qte;
                    }
                                                               
                $html=$html.'                
                </tbody>
            
                <tfoot>
                    <tr style="display:none;">
                        <td class="td" colspan="2"></td>
                        <td class="td" align="right">Total HTA</td>
                        <td class="td" align="center">'.$total.' DA</td>
                    </tr>
                    <tr style="display:none;">
                        <td class="td" colspan="2"></td>
                        <td class="td" align="center">Total TVA</td>
                        <td class="td" align="center">'.$total*0.19.'</td>
                    </tr>
                    <tr>
                        <td class="td" colspan="2"></td>
                        <td class="td" align="center">Total HT </td>
                        <td class="td" align="right">'.$total.' DA</td>
                    </tr>
                    <tr>
                        <td class="td" colspan="2"></td>
                        <td class="td" align="center">Remise '.$remise.'%</td>
                        <td class="td" align="right"> '.$total*($remise/100).' DA</td>
                    </tr>
                    <tr>
                        <td class="td" colspan="2"></td>
                        <td class="td" align="center">Net à payer</td>
                        <td class="td" align="right">'.$total*(1-($remise/100)).' DA</td>
                    </tr>

                </tfoot>
            </table>
            
            </body>
            </html>        
        
        ';
        return $html;   
    }


    public static function ancien_templateBon($commande,$margin,$codebar,$number,$num_lot) 
    {
        $codebar = asset($codebar);
        $html='
            <div style="position:absolute;left:50%;margin-left:-40px;top:-35px;width:283px;height:283px;overflow:hidden">
                <div style="position:absolute;left:20.89px;top:10px" class="cls_002">
                    <span class="cls_002">
                        <img src="'.$codebar.'" width="50px" height="60px">
                    </span>
                    <div style="position:absolute;left:1.89px;top:50px;font-size:3px;" class="cls_006">
                        '.$number.'
                    </div>
                    <div style="position:absolute;left:0.5px;top:54px;font-size:12px;" class="cls_006"> Lot N° '.$num_lot.' </div>
                </div>
                
            </div>
                ';
        return $html;

    }



}