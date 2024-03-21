<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\parametre_idb;
use App\Models\etat_avancement_idb;
use App\Models\sortie_infra_idb;
use App\Models\suiviinfra;
use App\Models\evolution_global_idb;
use App\Models\secteuridb;
use Illuminate\Support\Facades\DB;

class SuiviinfraController extends Controller
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
    public function viewsuiviinfra()
    {
        // IDB Data request for views
        //suiviinfra= new suiviinfra();
        $data= DB::table('evolution_global_idb')->select('*')->get();
        $etat_avancement_idb = new etat_avancement_idb();
        $evolution_global_idb = new evolution_global_idb();

        $communauteidb= sortie_infra_idb::distinct('communaute')->count('communaute');
        // $unexecuteidb= suiviinfra::distinct('code_idb')->where('idb_en_execution','Non')->count();
        // // $unexecuteidb= suiviinfra::where('idb_en_execution','Non')->count();
        $idb_encours = $etat_avancement_idb->sum('execution_TOT');
        $achevedchantier = $etat_avancement_idb->sum('acheves_Tot');
        $idb_enoeuvre = $achevedchantier + $idb_encours;
        $idb_attente = $etat_avancement_idb->sum('attente_TOT');
        $allchantieridb =  $achevedchantier + $idb_encours + $idb_attente;
        $unexecuteidb = suiviinfra::distinct('code_idb')->where('idb_en_execution','Non')->count();
        $inprocesschantier = 0 ;

        //Ici c'est le nombre des chantiers encours par province
        $chantiernu= etat_avancement_idb::whereIn('Province',['NORD UBANGI'])->sum('execution_TOT');
        $chantierkc= etat_avancement_idb::whereIn('Province',['KASAI-CENTRAL'])->sum('execution_TOT');
        $chantiersk= etat_avancement_idb::whereIn('Province',['SUD KIVU'])->sum('execution_TOT');
        $chantierit= etat_avancement_idb::whereIn('Province',['ITURI'])->sum('execution_TOT');
        $chantiernk= etat_avancement_idb::whereIn('Province',['NORD KIVU'])->sum('execution_TOT');
        $chantiersu= etat_avancement_idb::whereIn('Province',['SUD UBANGI'])->sum('execution_TOT');

         //Ici c'est le nombre des chantiers en attente par province
         $a_chantiernu= etat_avancement_idb::whereIn('Province',['NORD UBANGI'])->sum('attente_TOT');
         $a_chantierkc= etat_avancement_idb::whereIn('Province',['KASAI-CENTRAL'])->sum('attente_TOT');
         $a_chantiersk= etat_avancement_idb::whereIn('Province',['SUD KIVU'])->sum('attente_TOT');
         $a_chantierit= etat_avancement_idb::whereIn('Province',['ITURI'])->sum('attente_TOT');
         $a_chantiernk= etat_avancement_idb::whereIn('Province',['NORD KIVU'])->sum('attente_TOT');
         $a_chantiersu= etat_avancement_idb::whereIn('Province',['SUD UBANGI'])->sum('attente_TOT');

        //Ici c'est le nombre des chantiers atteints par province
        $realisationnu= etat_avancement_idb::whereIn('Province',['NORD UBANGI'])->sum('acheves_Tot');
        $realisationkc= etat_avancement_idb::whereIn('Province',['KASAI-CENTRAL'])->sum('acheves_Tot');
        $realisationsk= etat_avancement_idb::whereIn('Province',['SUD KIVU'])->sum('acheves_Tot');
        $realisationit= etat_avancement_idb::whereIn('Province',['ITURI'])->sum('acheves_Tot');
        $realisationnk= etat_avancement_idb::whereIn('Province',['NORD KIVU'])->sum('acheves_Tot');
        $realisationsu= etat_avancement_idb::whereIn('Province',['SUD UBANGI'])->sum('acheves_Tot');


        //Ici c'est le nombre des chantiers mise en oeuvre par secteur
        $washit = secteuridb::whereIn('province', ['ITURI'])->where('secteur', 'Eau')->sum('nbre');
        $educit= secteuridb::whereIn('Province',['ITURI'])->where('secteur', 'Education')->sum('nbre');
        $santit= secteuridb::whereIn('Province',['ITURI'])->where('secteur', 'Santé')->sum('nbre');

        $washkc= secteuridb::whereIn('province',['KASSAI-CENTRAL'])->where('secteur', 'Eau')->sum('nbre');
        $educkc= secteuridb::whereIn('Province',['KASSAI-CENTRAL'])->where('secteur', 'Education')->sum('nbre');
        $santkc= secteuridb::whereIn('Province',['KASSAI-CENTRAL'])->where('secteur', 'Santé')->sum('nbre');

        $washnk= secteuridb::whereIn('province',['NORD-KIVU'])->where('secteur', 'Eau')->sum('nbre');
        $educnk= secteuridb::whereIn('Province',['NORD-KIVU'])->where('secteur', 'Education')->sum('nbre');
        $santnk= secteuridb::whereIn('Province',['NORD-KIVU'])->where('secteur', 'Santé')->sum('nbre');

        $washnu= secteuridb::whereIn('province',['NORD-UBANGI'])->where('secteur', 'Eau')->sum('nbre');
        $educnu= secteuridb::whereIn('Province',['NORD-UBANGI'])->where('secteur', 'Education')->sum('nbre');
        $santnu= secteuridb::whereIn('Province',['NORD-UBANGI'])->where('secteur', 'Santé')->sum('nbre');

        $washsk= secteuridb::whereIn('province',['SUD-KIVU'])->where('secteur', 'Eau')->sum('nbre');
        $educsk= secteuridb::whereIn('Province',['SUD-KIVU'])->where('secteur', 'Education')->sum('nbre');
        $santsk= secteuridb::whereIn('Province',['SUD-KIVU'])->where('secteur', 'Santé')->sum('nbre');


        $washsu= secteuridb::whereIn('province',['NORD-UBANGI'])->where('secteur', 'Eau')->sum('nbre');
        $educsu= secteuridb::whereIn('Province',['NORD-UBANGI'])->where('secteur', 'Education')->sum('nbre');
        $santsu= secteuridb::whereIn('Province',['NORD-UBANGI'])->where('secteur', 'Santé')->sum('nbre');
        // $objectif_idb_nu= $realisationnu + $a_chantiernu + $chantiernu;
        // $objectif_idb_kc= $realisationkc + $a_chantierkc + $chantierkc;
        // $objectif_idb_sk= $realisationsk + $a_chantiersk + $chantiersk;
        // $objectif_idb_it= $realisationit + $a_chantierit + $chantierit;
        // $objectif_idb_nk= $realisationnk + $a_chantiernk + $chantiernk;
        // $objectif_idb_su= $realisationsu + $a_chantiersu + $chantiersu;

        $objectif_idb_nu= parametre_idb::whereIn('province',['NORD UBANGI'])->sum('objectif');
        $objectif_idb_kc= parametre_idb::whereIn('province',['KASAI-CENTRAL'])->sum('objectif');
        $objectif_idb_sk= parametre_idb::whereIn('province',['SUD KIVU'])->sum('objectif');
        $objectif_idb_it= parametre_idb::whereIn('province',['ITURI'])->sum('objectif');
        $objectif_idb_nk= parametre_idb::whereIn('province',['NORD KIVU'])->sum('objectif');
        $objectif_idb_su= parametre_idb::whereIn('province',['SUD UBANGI'])->sum('objectif');

        $obj2020_2021 = $evolution_global_idb->sum('P2020_2021');
        $obj2021_2022 = $evolution_global_idb->sum('P2021_2022');
        $obj2022_2023 = $evolution_global_idb->sum('P2022_2023');
        $obj2023_2024 = $evolution_global_idb->sum('P2023_2024');
        $total_idbs = $evolution_global_idb->sum('Total_Idbs');
        $acheved_idbs = $evolution_global_idb->sum('Chantier_Acheve');
        $execution_idbs = $evolution_global_idb->sum('Idb_execution');
        $attente_idbs = $evolution_global_idb->sum('Idb_attente');
        $enoeuvre_idbs = $evolution_global_idb->sum('Idb_enoeuvre');




       return view('dashboard.idb',compact('allchantieridb','communauteidb','idb_encours','achevedchantier','idb_enoeuvre',
       'idb_attente','chantiernu','chantierkc','chantiersu','chantiersk','chantiernk','chantierit','a_chantiernu','a_chantierkc','a_chantiersu','a_chantiersk','a_chantiernk','a_chantierit','realisationnu',
       'realisationkc','realisationsu','realisationsk','realisationnk','realisationit','objectif_idb_nu','objectif_idb_kc',
       'objectif_idb_su','objectif_idb_sk','objectif_idb_nk','objectif_idb_it','data','obj2020_2021','obj2021_2022','obj2022_2023','obj2023_2024',
        'total_idbs','acheved_idbs','execution_idbs','attente_idbs','enoeuvre_idbs','washsu','educsu','santsu',
        'washnu','educnu','santnu','washkc','educkc','santkc','washit','educit','santit','washsk','educsk','santsk',
        'washnk','educnk','santnk'
    ));
    }
}
