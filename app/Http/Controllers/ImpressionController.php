<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Milon\Barcode\DNS1D;

use App\Wilaya;

use App\Template;

use App\Commande;

use App\Produit;

use App\Ticket;

use App\Check;

use DB;

use Auth;

use Dompdf\Dompdf;





class ImpressionController  extends Controller

{

    public function __construct()

    {

        //$this->middleware('auth:admin'or'auth:production');



    }





    public function impression()

    {

        if(Check::CheckAuth(['admin','production'])==false){

            return redirect()->route('login.admin');     

        }

        

        $produits = DB::table('produits')->orderBy('nom','asc')->get();

        

        return view('impression',compact('produits'));

    }





    public function imprimer(Request $request){



        $first=DB::select("select date(created_at) as first from tickets order by date(created_at) asc limit 1");

        if(count($first)>0)

        {

            $first = ($first[0]->first);

            $first = strtotime($first);

            $today = date("Y-m-d");

            $today = strtotime($today);

            $interval = ($today - $first)/60/60/24;

            $interval++;

        }

        else

        {

            $interval=1;

        }

        

        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 

        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}

        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

        

        

        $num_lot = $interval;

        

        if ($num_lot == 0) 

        {



            $num_lot = $num_lot+1;



            // code...

        }



        $id_produit = $request['id_produit'];

        $produit = Produit::where('id',$id_produit)->get();



        $produit = ($produit[0]);

        

        $reference = $produit->reference;



        $categorie = $produit->id_categorie;



        $last_num_ticket_produit = DB::select("select max(num_ticket_produit) as cpt from tickets t where t.id_produit=$id_produit");

        $last_num_ticket_produit = $last_num_ticket_produit[0]->cpt;

        

        if(is_null($last_num_ticket_produit))

        {

            $last_num_ticket_produit= 1;

        }

        else

        {

            $last_num_ticket_produit++;

        }

        

        $last_num_ticket_produit_copie = $last_num_ticket_produit;



        $lastIdTicket = Ticket::orderBy('id', 'desc')->first();        

        

        if(is_null($lastIdTicket))

        {

            $lastIdTicket= 1;

        }else

        {

            $lastIdTicket=$lastIdTicket->id+1;

        }

        

        $lastIdTicketCopie = $lastIdTicket; 

        $dompdf = new Dompdf();

        $options = $dompdf->getOptions(); 

        $options->set(array('isRemoteEnabled' => true));

        $dompdf->setOptions($options);

        $html = '

        <html style="page-break-before: always;">

        <head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">

        <style type="text/css">

        @page { size: 75pt 35pt;margin:0; }

        span.cls_008{font-family:"Trebuchet MS",serif;font-size:7.0px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        div.cls_008{font-family:"Trebuchet MS",serif;font-size:7.0px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        span.cls_003{font-family:"Trebuchet MS",serif;font-size:9.1px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        div.cls_003{font-family:"Trebuchet MS",serif;font-size:9.1px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        span.cls_004{font-family:"Trebuchet MS Bold",serif;font-size:10.1px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        div.cls_004{font-family:"Trebuchet MS Bold",serif;font-size:10.1px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        span.cls_002{font-family:"Trebuchet MS Bold",serif;font-size:48.0px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        div.cls_002{font-family:"Trebuchet MS Bold",serif;font-size:48.0px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        span.cls_005{font-family:"Trebuchet MS Bold",serif;font-size:14.1px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        div.cls_005{font-family:"Trebuchet MS Bold",serif;font-size:14.1px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        span.cls_006{font-family:"Trebuchet MS Bold",serif;font-size:9.1px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        div.cls_006{font-family:"Trebuchet MS Bold",serif;font-size:9.1px;color:rgb(24,24,24);font-weight:bold;font-style:normal;text-decoration: none}

        span.cls_007{font-family:"Trebuchet MS",serif;font-size:8.1px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        div.cls_007{font-family:"Trebuchet MS",serif;font-size:8.1px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        span.cls_009{font-family:"Trebuchet MS",serif;font-size:12.1px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        div.cls_009{font-family:"Trebuchet MS",serif;font-size:12.1px;color:rgb(24,24,24);font-weight:normal;font-style:normal;text-decoration: none}

        .page_breaking

        {

          position:absolute;

          bottom: 0px;

          page-break-after: always;

        }       

        </style>

        <script type="text/javascript" src="525ab86c-3723-11eb-8b25-0cc47a792c0a_id_525ab86c-3723-11eb-8b25-0cc47a792c0a_files/wz_jsgraphics.js"></script>

        </head>

        <body>

        

        ';

        $margin = -40;

        for($i=0;$i<$request['tickets'];$i++)

        {

            $number ='LOT.N??'.$num_lot.'_'.$reference.'_'.$categorie.'_id'.$lastIdTicket;

            $number_to_code_barre ='id'.$lastIdTicket; 



            $ticket = new Ticket();

            

            $ticket->id = $lastIdTicket;

            $ticket->id_produit = $id_produit;

            $ticket->codebar = $number_to_code_barre;

            $ticket->num_ticket_produit = $last_num_ticket_produit;

            $ticket->impression = $acteur;

            $ticket->maj = 'Pas encore';

            $ticket->save();       

            file_put_contents('img/essahel_food/'.$number.'.svg',DNS1D::getBarcodeSVG($number_to_code_barre,'C128'));    
            

            $codebar = 'img/essahel_food/'.$number.'.svg';

            $h = Template::templateBon($i,$margin,$codebar,$number,$num_lot);

            $html=$html.$h;

            if($i!=$request['tickets']-1)

            {

                $html = $html.'

                    <div class="page_breaking"></div>

                ';                

            }

            $margin = $margin+20;

            $last_num_ticket_produit++;

            $lastIdTicket++;

        }

        $html = $html.'

            </body>

            </html>                

        ';

        $dompdf->loadHtml($html);

        $dompdf->render();

        $current = date('Y-m-d');

        $file = "Tickets_".$current;

        $dompdf->stream("$file", array('Attachment'=>1));

        

        /*for($i=0;$i<$request['tickets'];$i++)

        {

            $number ='id'.$lastIdTicketCopie; 

            $ticket = new Ticket();

            $ticket->id_produit = $id_produit;

            $ticket->codebar = $number;

            // $cpt = selct max(num_ticket_produit) from tickets where idproduit=$idproduit

            // if $cpt = null 1

            // else 

            // $cpt++ , w howa li yinsera

            $ticket->num_ticket_produit = $last_num_ticket_produit_copie;

            $ticket->impression = $acteur;

            $ticket->maj = 'Pas encore';

            $last_num_ticket_produit_copie++;

            $lastIdTicketCopie++;

            $ticket->save();

        }*/

    }







    public function aboutis()

    {

        $wilayas = Wilaya::all();

        return view('wilayas-aboutis',compact('wilayas'));

    }



    public function aboutiLivreur(Request $request)

    {

        $wilaya = Wilaya::find($request['wilaya']);

        $wilaya->abouti_livreur = $request['abouti_livreur'];

        $wilaya->save();

        return redirect()->back()->with('success', 'insertion effectu?? !  ');     

    }



    public function aboutiFournisseur(Request $request)

    {

        // dd($request['abouti_fournisseur']);

        $wilaya = Wilaya::find($request['wilaya']);

        $wilaya->abouti_fournisseur = $request['abouti_fournisseur'];

        $wilaya->save();

        return redirect()->back()->with('success', 'insertion effectu?? !  ');     

    }







    public function fournisseurs()

    {

        $wilayas = Wilaya::all();

        return view('wilayas-fournisseurs',compact('wilayas'));

    }



    public function fournisseur(Request $request)

    {

        $wilaya = Wilaya::find($request['wilaya']);

        $wilaya->fournisseur = $request['fournisseur'];

        $wilaya->save();

        return redirect()->back()->with('success', 'insertion effectu?? !  ');     

    }







    public function livreurs()

    {

        $wilayas = Wilaya::all();

        return view('wilayas-livreurs',compact('wilayas'));

    }



    public function livreur(Request $request)

    {

        $wilaya = Wilaya::find($request['wilaya']);

        $wilaya->livreur = $request['livreur'];

        $wilaya->save();

        return redirect()->back()->with('success', 'insertion effectu?? !  ');     

    }







    public function livraison(Request $request)

    {

        $wilaya = Wilaya::find($request['wilaya']);

        $wilaya->livraison = $request['livraison'];

        $wilaya->save();

        return redirect()->route('wilaya.livreurs')->with('success', 'insertion effectu?? !  ');     

    }





}

