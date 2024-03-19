<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametre_idb;
use App\Models\Sortie_infra_idb;

class IdbController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewidb()

    {


        // IDB Data request for views
        $sortie_infra_idb = new Sortie_infra_idb();
        $nombrechantier= $sortie_infra_idb->countsortie_infra_idb();
        $providb= $sortie_infra_idb::distinct('province')->count('province');
        // $partenairidb= $sortie_infra_idb::distinct('Operateur')->count('Operateur');
        $communauteidb= $sortie_infra_idb::distinct('communaute')->count('communaute');
        $previsionidb= $sortie_infra_idb->sum('coutprevutravaux');
        $coutrealisation= $sortie_infra_idb->sum('coutreeltravaux');


        // IDB Data realisation by location ** Ben
        $nuidb= Sortie_infra_idb::where('province','NORD UBANGI')->count();
        $itidb= Sortie_infra_idb::where('province','ITURI')->count();
        $kcidb= Sortie_infra_idb::where('province','KASAI-CENTRAL')->count();
        $skidb= Sortie_infra_idb::where('province','SUD KIVU')->count();
        $nkidb= Sortie_infra_idb::where('province','NORD KIVU')->count();
        $suidb= Sortie_infra_idb::where('province','SUD UBANGI')->count();
        // IDB End data realisation by location

         // idb Data realisation by objectifs and location ** Ben
        $nuidbobjectif= Parametre_idb::where('province',['NORD UBANGI'])->sum('objectif');
        $itidbobjectif= Parametre_idb::where('province',['ITURI'])->sum('objectif');
        $kcidbobjectif= Parametre_idb::where('province',['KASAI-CENTRAL'])->sum('objectif');
        $skidbobjectif= Parametre_idb::where('province',['SUD KIVU'])->sum('objectif');
        $nkidbobjectif= Parametre_idb::where('province',['NORD KIVU'])->sum('objectif');
        $suidbobjectif= Parametre_idb::where('province',['SUD UBANGI'])->sum('objectif');

         //idb End data realisation by objectif and location


        return view('dashboard.idb',compact('nuidb','itidb','kcidb','skidb','nkidb','suidb','coutrealisation','previsionidb','communauteidb','nombrechantier',
'nuidbobjectif','itidbobjectif','kcidbobjectif','skidbobjectif','nkidbobjectif','suidbobjectif','providb'));


        // if(is_int($prov)){
        //     $prov=[];
        // }
        // return view('dash')->with('benef',$benef)->with('prov',$prov);


    }

    public function viewidbinserer()

    {
        return view('dashboard/idbinserer');
    }
    public function viewidblistes()

    {
        return view('dashboard/idblistes');
    }
    public function viewidbmodifier()

    {
        return view('dashboard/idbmodifier');
    }
    public function viewidbbeneficiaires()

    {
        return view('dashboard/idbbeneficiaires');
    }
//     public function listetmi()

//     {


// }
}
