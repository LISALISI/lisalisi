<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiaries_tmi;
use App\Models\Parametre_tmi;
use App\Models\Parametre_idb;
use App\Models\Sortie_infra_idb;
use App\Models\Parametre_cerc;
use App\Models\Beneficiaries_cerc;

class DashController extends Controller
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
    public function viewdash()

    {

        // TMI Data request for views
        $beneficiaries_tmi = new Beneficiaries_tmi();
        $beneftmi= $beneficiaries_tmi->countbeneficiaries_tmi();
        $prov= $beneficiaries_tmi::distinct('province')->count('province');
        $communautetmi= $beneficiaries_tmi::distinct('groupement')->count('groupement');
        $tm1= $beneficiaries_tmi->sum('tm1_montant_paye');
        $tm2= $beneficiaries_tmi->sum('tm2_montant_paye');
        $tm3= $beneficiaries_tmi->sum('tm3_montant_paye');
        $tm4= $beneficiaries_tmi->sum('tm4_montant_paye');
        $totalmontanttmi=$tm1 + $tm2 + $tm3 + $tm4;
        $femme= Beneficiaries_tmi::where('sexe','Femme')->count();
        $homme= Beneficiaries_tmi::where('sexe','Homme')->count();
        // $ch= tmi::where('status_human','CH')->count();
        // $d= tmi::where('status_human','D')->count();
        // $dm= tmi::where('status_human','DM')->count();
        // $dmc= tmi::where('status_human','DMC')->count();
        // $r= tmi::where('status_human','R')->count();
        // $re= tmi::where('status_human','RE')->count();
        // $rf= tmi::where('status_human','RF')->count();
        // $rt= tmi::where('status_human','RT')->count();
        // $refo= tmi::where('status_human','REFO')->count();

    // TMI Data realisation by location ** Ben
        $nu= Beneficiaries_tmi::where('province','Nord-Ubangi')->count();
        $it= Beneficiaries_tmi::where('province','ITURI')->count();
        $kc= Beneficiaries_tmi::where('province','Kassai-Central')->count();
        $sk= Beneficiaries_tmi::where('province','Sud-Kivu')->count();
        $nk= Beneficiaries_tmi::where('province','Nord-Kivu')->count();
        $su= Beneficiaries_tmi::where('province','Sud_Ubangui')->count();
    // TMI End data realisation by location

        // TMI Data realisation by objectifs and location ** Ben
        $nuobjectif= Parametre_tmi::whereIn('province',['Nord-Ubangi'])->sum('objectif');
        $itobjectif= Parametre_tmi::whereIn('province',['ITURI'])->sum('objectif');
        $kcobjectif= Parametre_tmi::whereIn('province',['Kassai-Central'])->sum('objectif');
        $skobjectif= Parametre_tmi::whereIn('province',['Sud-Kivu'])->sum('objectif');
        $nkobjectif= Parametre_tmi::whereIn('province',['Nord-Kivu'])->sum('objectif');
        $suobjectif= Parametre_tmi::whereIn('province',['Sud_Ubangui'])->sum('objectif');
    // TMI End data realisation by objectif and location

        // CERC Data request for views
        $beneficiaries_cerc = new Beneficiaries_cerc();
        $provcerc= $beneficiaries_cerc::distinct('province')->count('province');
        $benefcerc= $beneficiaries_cerc->countbeneficiaries_cerc();
        $partenairecerc= $beneficiaries_cerc::distinct('Operateur')->count('Operateur');
        $communautecerc= $beneficiaries_cerc::distinct('Commune')->count('Commune');
        $cerctm1= $beneficiaries_cerc->sum('TM1_Montant_paye');
        $cerctm2= $beneficiaries_cerc->sum('TM2_Montant_paye');
        $cerctm3= $beneficiaries_cerc->sum('TM3_Montant_paye');
        $cerctm4= $beneficiaries_cerc->sum('TM4_Montant_paye');
        $cerctm5= $beneficiaries_cerc->sum('TM5_Montant_paye');
        $cerctm6= $beneficiaries_cerc->sum('TM6_Montant_paye');
        $cerctotalmontant=$cerctm1 + $cerctm2 + $cerctm3 + $cerctm4 + $cerctm5 + $cerctm6;



    // CERC Data realisation by operator ** Ben
        $af= Beneficiaries_cerc::where('Operateur','Afrimoney')->count();
        $gd= Beneficiaries_cerc::where('Operateur','GiveDirectly')->count();
        $gp= Beneficiaries_cerc::where('Operateur','GeoPoll')->count();

    // CERC End data realisation by operator

        // CERC Data realisation by objectifs and location ** Ben
        $afobjectif= Parametre_cerc::whereIn('Operateur',['Afrimoney'])->sum('objectifs_contrat');
        $gdobjectif= Parametre_cerc::whereIn('Operateur',['GiveDirectly'])->sum('objectifs_contrat');
        $gpobjectif= Parametre_cerc::whereIn('Operateur',['GeoPoll'])->sum('objectifs_contrat');

        // CERC End data realisation by objectif and location


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

        // Evolution global du STEP
        $globalmontant= $cerctotalmontant + $totalmontanttmi + $coutrealisation;
        $globalbenef= $benefcerc + $beneftmi;
        $globalcommunaute= $communautecerc + $communautetmi + $communauteidb;
        $totalprov= $provcerc + $prov;
        //End global evolution

        return view('dashboard.dash',compact('beneftmi','prov','communautetmi','totalmontanttmi','femme','homme','nu','it','kc','sk','nk','su','nuobjectif',
        'itobjectif','kcobjectif','skobjectif','nkobjectif','suobjectif','afobjectif','gdobjectif','gpobjectif',
    'af','gd','gp','cerctotalmontant','communautecerc','partenairecerc','benefcerc','globalmontant','globalbenef','globalcommunaute',
'nuidb','itidb','kcidb','skidb','nkidb','suidb','coutrealisation','previsionidb','communauteidb','nombrechantier',
'nuidbobjectif','itidbobjectif','kcidbobjectif','skidbobjectif','nkidbobjectif','suidbobjectif','providb','provcerc','totalprov'));


        // if(is_int($prov)){
        //     $prov=[];
        // }
        // return view('dash')->with('benef',$benef)->with('prov',$prov);


    }
//     public function listetmi()

//     {


// }
}
