<?php

namespace App\Http\Controllers;
use App\Models\evolution_tmis;
use Illuminate\Http\Request;
use App\Models\beneficiaries_tmi;
use App\Models\barametre_tmi;
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
        $data= DB::table('evolution_tmi')->select('*')->get();
        $Tot_communaute= $evolution_tmis->sum('Communaute');
        $Tot_benef= $evolution_tmis->sum('Nbre_benef');
        $Tot_Montant= $evolution_tmis->sum('Montant_total');
        $Nbre_tm1= $evolution_tmis->sum('Nbre_TM1');
        $Montant_tm1= $evolution_tmis->sum('Montant_TM1');
        $Nbre_tm2= $evolution_tmis->sum('Nbre_TM2');
        $Montant_tm2= $evolution_tmis->sum('Montant_TM2');
        $Nbre_tm3= $evolution_tmis->sum('Nbre_TM3');
        $Montant_tm3= $evolution_tmis->sum('Montant_TM3');
        $Nbre_tm4= $evolution_tmis->sum('Nbre_TM4');
        $Montant_tm4= $evolution_tmis->sum('Montant_TM4');

        $prov= $evolution_tmis::distinct('Province')->count('Province');
        $communautetmi= $evolution_tmis->sum('Communaute');
        // $tm1= $evolution_tmis->sum('montant_TM1');
        // $tm2= $evolution_tmis->sum('montant_TM2');
        // $tm3= $evolution_tmis->sum('montant_TM3');
        // $tm4= $evolution_tmis->sum('montant_TM4');
        $totalmontanttmi=$evolution_tmis->sum('Montant_total');
        $femme= $evolution_tmis->sum('Femme');
        $homme= $evolution_tmis->sum('Homme');

          // TMI Data repartition des statuts des bénéficiaires
        // $ch= evolution_tmis::where('status_human','Communauté Hôte')->count();
        // $d= evolution_tmis::where('status_human','D')->count();
        // $dm= evolution_tmis::where('status_human','Démobilisé')->count();
        // $dmc= evolution_tmis::where('status_human','DMC')->count();
        // $r= evolution_tmis::where('status_human','R')->count();
        // $re= evolution_tmis::where('status_human','RE')->count();
        // $rf= evolution_tmis::where('status_human','Réfugié')->count();
        // $rt= evolution_tmis::where('status_human','Rétourné')->count();
        // $refo= evolution_tmis::where('status_human','REFO')->count();


        $ch= $evolution_tmis->sum('CH');
        $depla= $evolution_tmis->sum('DEPLACE');
        $dm= $evolution_tmis->sum('DEMOBILISE');
        $pygme= $evolution_tmis->sum('PYGME');
        $r= $evolution_tmis->sum('R');
        $rf= $evolution_tmis->sum('REFUG');
        $rt= $evolution_tmis->sum('RETOURN');
        $refo= $evolution_tmis->sum('REFO');
        $rfl= $evolution_tmis->sum('RFL');
        $p= $evolution_tmis->sum('P');
        $d= $evolution_tmis->sum('D');






    // TMI Data realisation by location ** Ben
        $nu= evolution_tmis::whereIn('province',['NORD-UBANGI'])->sum('Nbre_benef');
        $it= evolution_tmis::whereIn('province',['ITURI'])->sum('Nbre_benef');
        $kc= evolution_tmis::whereIn('province',['KASSAI-CENTRAL'])->sum('Nbre_benef');
        $sk= evolution_tmis::whereIn('province',['SUD-KIVU'])->sum('Nbre_benef');
        $nk= evolution_tmis::whereIn('province',['NORD-KIVU'])->sum('Nbre_benef');
        $su= evolution_tmis::whereIn('province',['SUD UBANGI'])->sum('Nbre_benef');
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
        'itobjectif','kcobjectif','skobjectif','nkobjectif','suobjectif','ch','r','refo','rt','rf','depla','dm','pygme','p','d','rfl','data','Tot_communaute','Tot_benef','Tot_Montant','Nbre_tm1','Montant_tm1','Nbre_tm2','Montant_tm2','Nbre_tm3','Montant_tm3','Nbre_tm4','Montant_tm4'));


        // if(is_int($prov)){
        //     $prov=[];
        // }
        // return view('dash')->with('benef',$benef)->with('prov',$prov);


    }
//     public function listetmi()

//     {


// }
}
