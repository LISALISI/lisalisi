<?php

namespace App\Http\Controllers;
use App\Models\evolution_tmis;
use Illuminate\Http\Request;
use App\Models\beneficiaries_tmi;
use App\Models\parametre_tmi;
use Illuminate\Support\Facades\DB;

class TmiController extends Controller
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
    public function viewtmi()

    {

        // TMI Data request for views
        $beneficiaries_tmi = new beneficiaries_tmi();
        $evolution_tmis = new evolution_tmis();
        $beneftmi= $beneficiaries_tmi->countbeneficiaries_tmi();
        $data= DB::table('evolution_tmis')->select('*')->groupBy('province')->get();
        $Tot_communaute= $evolution_tmis->sum('communaute');
        $Tot_benef= $evolution_tmis->sum('Nbre_benef');
        $Tot_Montant= $evolution_tmis->sum('Montant_Total');
        $Nbre_tm1= $evolution_tmis->sum('Nbre_TM1');
        $Montant_tm1= $evolution_tmis->sum('montant_TM1');
        $Nbre_tm2= $evolution_tmis->sum('Nbre_TM2');
        $Montant_tm2= $evolution_tmis->sum('montant_TM2');
        $Nbre_tm3= $evolution_tmis->sum('Nbre_TM3');
        $Montant_tm3= $evolution_tmis->sum('montant_TM3');
        $Nbre_tm4= $evolution_tmis->sum('Nbre_TM4');
        $Montant_tm4= $evolution_tmis->sum('montant_TM4');

        $prov= $beneficiaries_tmi::distinct('province')->count('province');
        $communautetmi= $beneficiaries_tmi::distinct('groupement')->count('groupement');
        $tm1= $beneficiaries_tmi->sum('tm1_montant_paye');
        $tm2= $beneficiaries_tmi->sum('tm2_montant_paye');
        $tm3= $beneficiaries_tmi->sum('tm3_montant_paye');
        $tm4= $beneficiaries_tmi->sum('tm4_montant_paye');
        $totalmontanttmi=$tm1 + $tm2 + $tm3 + $tm4;
        $femme= beneficiaries_tmi::where('sexe','Femme')->count();
        $homme= beneficiaries_tmi::where('sexe','Homme')->count();

          // TMI Data repartition des statuts des bénéficiaires
        $ch= beneficiaries_tmi::where('status_human','Communauté Hôte')->count();
        $d= beneficiaries_tmi::where('status_human','D')->count();
        $dm= beneficiaries_tmi::where('status_human','Démobilisé')->count();
        $dmc= beneficiaries_tmi::where('status_human','DMC')->count();
        $r= beneficiaries_tmi::where('status_human','R')->count();
        $re= beneficiaries_tmi::where('status_human','RE')->count();
        $rf= beneficiaries_tmi::where('status_human','Réfugié')->count();
        $rt= beneficiaries_tmi::where('status_human','Rétourné')->count();
        $refo= beneficiaries_tmi::where('status_human','REFO')->count();

    // TMI Data realisation by location ** Ben
        $nu= beneficiaries_tmi::where('province','Nord-Ubangi')->count();
        $it= beneficiaries_tmi::where('province','ITURI')->count();
        $kc= beneficiaries_tmi::where('province','Kassai-Central')->count();
        $sk= beneficiaries_tmi::where('province','Sud-Kivu')->count();
        $nk= beneficiaries_tmi::where('province','Nord-Kivu')->count();
        $su= beneficiaries_tmi::where('province','SUD-UBANGI')->count();
    // TMI End data realisation by location

        // TMI Data realisation by objectifs and location ** Ben
        $nuobjectif= parametre_tmi::whereIn('province',['Nord-Ubangi'])->sum('objectif');
        $itobjectif= parametre_tmi::whereIn('province',['ITURI'])->sum('objectif');
        $kcobjectif= parametre_tmi::whereIn('province',['Kassai-Central'])->sum('objectif');
        $skobjectif= parametre_tmi::whereIn('province',['Sud-Kivu'])->sum('objectif');
        $nkobjectif= parametre_tmi::whereIn('province',['Nord-Kivu'])->sum('objectif');
        $suobjectif= parametre_tmi::whereIn('province',['SUD-UBANGI'])->sum('objectif');
    // TMI End data realisation by objectif and location


        // // Evolution global du STEP
        // $globalmontant= $cerctotalmontant + $totalmontanttmi + $coutrealisation;
        // $globalbenef= $benefcerc + $beneftmi;
        // $globalcommunaute= $communautecerc + $communautetmi + $communauteidb;
        // $totalprov= $provcerc + $prov;
        // //End global evolution

        return view('dashboard.tmi',compact('beneftmi','prov','communautetmi','totalmontanttmi','femme','homme','nu','it','kc','sk','nk','su','nuobjectif',
        'itobjectif','kcobjectif','skobjectif','nkobjectif','suobjectif','ch','r','refo','re','rt','rf','d','dm','dmc',
        'data','Tot_communaute','Tot_benef','Tot_Montant','Nbre_tm1','Montant_tm1','Nbre_tm2','Montant_tm2','Nbre_tm3','Montant_tm3','Nbre_tm4','Montant_tm4'));


        // if(is_int($prov)){
        //     $prov=[];
        // }
        // return view('dash')->with('benef',$benef)->with('prov',$prov);


    }
//     public function listetmi()

//     {


// }
}
