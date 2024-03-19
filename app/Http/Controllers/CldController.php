<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cldformation;
use App\Models\cdlbureaux;
use App\Models\cldchartes;

class CldController extends Controller
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
    public function viewcld()

    {
        $cldchartes = new cldchartes();
        $cldformation = new cldformation();
        $cdlbureaux = new cdlbureaux();

        //Chartes CLD
            //cahrtes signés
        $Crt1_2021 = $cldchartes->sum('Realisation_T1_2021');
        $Crt2_2021 = $cldchartes->sum('Realisation_T2_2021');
        $Crt3_2021 = $cldchartes->sum('Realisation_T3_2021');
        $Crt4_2021 = $cldchartes->sum('Realisation_T4_2021');
        $chartes_realisation2021 = $Crt1_2021 + $Crt2_2021 + $Crt3_2021 + $Crt4_2021;

        $Crt1_2022 = $cldchartes->sum('Realisation_T1_2022');
        $Crt2_2022 = $cldchartes->sum('Realisation_T2_2022');
        $Crt3_2022 = $cldchartes->sum('Realisation_T3_2022');
        $Crt4_2022 = $cldchartes->sum('Realisation_T4_2022');
        $chartes_realisation2022 = $Crt1_2022 + $Crt2_2022 + $Crt3_2022 + $Crt4_2022;

        $Crt1_2023 = $cldchartes->sum('Realisation_T1_2023');
        $Crt2_2023 = $cldchartes->sum('Realisation_T2_2023');
        $Crt3_2023 = $cldchartes->sum('Realisation_T3_2023');
        $Crt4_2023 = $cldchartes->sum('Realisation_T4_2023');
        $chartes_realisation2023 = $Crt1_2023 + $Crt2_2023 + $Crt3_2023 + $Crt4_2023;

        $Nbrechartes = $chartes_realisation2021 + $chartes_realisation2022 + $chartes_realisation2023;

            //cible des chartes
        $cible_crt1_2021 = $cldchartes->sum('Cible_T1_2021');
        $cible_crt2_2021 = $cldchartes->sum('Cible_T2_2021');
        $cible_crt3_2021 = $cldchartes->sum('Cible_T3_2021');
        $cible_crt4_2021 = $cldchartes->sum('Cible_T4_2021');
        $cible_chartes2021 = $cible_crt1_2021 + $cible_crt2_2021 + $cible_crt3_2021 + $cible_crt4_2021;
    
        $cible_crt1_2022 = $cldchartes->sum('Cible_T1_2022');
        $cible_crt2_2022 = $cldchartes->sum('Cible_T2_2022');
        $cible_crt3_2022 = $cldchartes->sum('Cible_T3_2022');
        $cible_crt3_2022 = $cldchartes->sum('Cible_T4_2022');
        $cible_chartes2022 = $cible_crt1_2022 + $cible_crt2_2022 + $cible_crt3_2022 + $cible_crt3_2022;
    
        $cible_crt1_2023 = $cldchartes->sum('Cible_T1_2023');
        $cible_crt2_2023 = $cldchartes->sum('Cible_T2_2023');
        $cible_crt3_2023 = $cldchartes->sum('Cible_T3_2023');
        $cible_crt4_2023 = $cldchartes->sum('Cible_T4_2023');
        $cible_chartes2023 = $cible_crt1_2023 + $cible_crt2_2023 + $cible_crt3_2023 + $cible_crt3_2023;
    
        $Tota_ciblecharte = $cible_chartes2021 + $cible_chartes2022 + $cible_chartes2023;
        


        //CLD Formation

            //Formation réalisées
        $format1_2021 = $cldformation->sum('Realisation_T1_2021');
        $format2_2021 = $cldformation->sum('Realisation_T2_2021');
        $format3_2021 = $cldformation->sum('Realisation_T3_2021');
        $format4_2021 = $cldformation->sum('Realisation_T4_2021');
        $forma_realisation2021 = $format1_2021 + $format2_2021 + $format3_2021 + $format4_2021;

        $format1_2022 = $cldformation->sum('Realisation_T1_2022');
        $format2_2022 = $cldformation->sum('Realisation_T2_2022');
        $format3_2022 = $cldformation->sum('Realisation_T3_2022');
        $format4_2022 = $cldformation->sum('Realisation_T4_2022');
        $forma_realisation2022 = $format1_2022 + $format2_2022 + $format3_2022 + $format4_2022;

        $format1_2023 = $cldformation->sum('Realisation_T1_2023');
        $format2_2023 = $cldformation->sum('Realisation_T2_2023');
        $format3_2023 = $cldformation->sum('Realisation_T3_2023');
        $format4_2023 = $cldformation->sum('Realisation_T4_2023');
        $forma_realisation2023 = $format1_2023 + $format2_2023 + $format3_2023 + $format4_2023;

        $Nbreforma = $forma_realisation2021 + $forma_realisation2022 + $forma_realisation2023;
            //Cible des formations
        $cibleformat1_2021 = $cldformation->sum('Realisation_T1_2021');
        $cibleformat2_2021 = $cldformation->sum('Realisation_T2_2021');
        $cibleformat3_2021 = $cldformation->sum('Realisation_T3_2021');
        $cibleformat4_2021 = $cldformation->sum('Realisation_T4_2021');
        $cibleforma_realisation2021 = $cibleformat1_2021 + $cibleformat2_2021 + $cibleformat3_2021 + $cibleformat4_2021;

        $cibleformat1_2022 = $cldformation->sum('Realisation_T1_2022');
        $cibleformat2_2022 = $cldformation->sum('Realisation_T2_2022');
        $cibleformat3_2022 = $cldformation->sum('Realisation_T3_2022');
        $cibleformat4_2022 = $cldformation->sum('Realisation_T4_2022');
        $cibleforma_realisation2022 = $cibleformat1_2022 + $cibleformat2_2022 + $cibleformat3_2022 + $cibleformat4_2022;

        $cibleformat1_2023 = $cldformation->sum('Realisation_T1_2023');
        $cibleformat2_2023 = $cldformation->sum('Realisation_T2_2023');
        $cibleformat3_2023 = $cldformation->sum('Realisation_T3_2023');
        $cibleformat4_2023 = $cldformation->sum('Realisation_T4_2023');
        $cibleforma_realisation2023 = $cibleformat1_2023 + $cibleformat2_2023 + $cibleformat3_2023 + $cibleformat4_2023;

        $cibleNbreforma = $cibleforma_realisation2021 + $cibleforma_realisation2022 + $cibleforma_realisation2023;



        //CLD Bureaux
                //Les CLD acheves
        $bur_acheves_2021 = $cdlbureaux->sum('Cumul_acheves_2021');

        $bur_acheves_T3__2022 = $cdlbureaux->sum('Cumul_acheves_T3_2022');
        $bur_acheves_T4__2022 = $cdlbureaux->sum('Cumul_acheves_T4_2022');
        $bur_acheves_2022 = $bur_acheves_T3__2022 + $bur_acheves_T4__2022;

        $bur_acheves_T1__2023 = $cdlbureaux->sum('Cumul_acheves_T1_2023');
        $bur_acheves_T2__2023 = $cdlbureaux->sum('Cumul_acheves_T2_2023');
        $bur_acheves_T3__2023 = $cdlbureaux->sum('Cumul_acheves_T3_2023');
        $bur_acheves_T4__2023 = $cdlbureaux->sum('Cumul_acheves_T4_2023');
        $bur_acheves_2023 = $bur_acheves_T1__2023 +  $bur_acheves_T2__2023 + $bur_acheves_T3__2023 + $bur_acheves_T4__2023;

        $bureaux_cld_acheves = $bur_acheves_2021 + $bur_acheves_2022 + $bur_acheves_2023;
                //Les CLD en execution

        $bur_execution_T3_2022 = $cdlbureaux->sum('Execution_T3_2022');
        $bur_execution_T4_2022 = $cdlbureaux->sum('Execution_T4_2022');
        $bur_encours_2022 = $bur_execution_T3_2022 + $bur_execution_T4_2022;

        $bur_execution_T1_2023 = $cdlbureaux->sum('Execution_T1_2023');
        $bur_execution_T2_2023 = $cdlbureaux->sum('Execution_T2_2023');
        $bur_execution_T3_2023 = $cdlbureaux->sum('Execution_T3_2023');
        $bur_execution_T4_2023 = $cdlbureaux->sum('Execution_T4_2023');
        $bur_encours_2023 = $bur_execution_T1_2023 + $bur_execution_T2_2023 + $bur_execution_T3_2023 + $bur_execution_T4_2023;
        $Nbre_cld_encours = $bur_encours_2022 + $bur_encours_2023;

                //CLD Mise en oeuvre

        $cld_mise_en_oeuvre = $bureaux_cld_acheves + $Nbre_cld_encours;

                //CLD Mise en attente
        $cld_attente_T3_2022 = $cdlbureaux->sum('Attente_T3_2022');
        $cld_attente_T4_2022 = $cdlbureaux->sum('Attente_T4_2022');
        $cld_attente_2022 = $cld_attente_T3_2022 + $cld_attente_T4_2022;

        $cld_attente_T1_2023 = $cdlbureaux->sum('Attente_T1_2023');
        $cld_attente_T2_2023 = $cdlbureaux->sum('Attente_T2_2023');
        $cld_attente_T3_2023 = $cdlbureaux->sum('Attente_T3_2023');
        $cld_attente_2023 = $cld_attente_T1_2023 + $cld_attente_T2_2023 + $cld_attente_T3_2023;

        $cld_en_attente = $cld_attente_2022 + $cld_attente_2023;

            //CTOTAL CLD

        $Total_cld = $cld_en_attente + $cld_mise_en_oeuvre;


             //Répartition des CLDs acheves par province

                    //Nord-Ubangi
        $NUbur_acheves_2021 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_2021');

        $NUbur_acheves_T3__2022 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_T3_2022');
        $NUbur_acheves_T4__2022 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_T4_2022');
        $NUbur_acheves_2022 = $NUbur_acheves_T3__2022 + $NUbur_acheves_T4__2022;
     
        $NUbur_acheves_T1__2023 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_T1_2023');
        $NUbur_acheves_T2__2023 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_T2_2023');
        $NUbur_acheves_T3__2023 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_T3_2023');
        $NUbur_acheves_T4__2023 = cdlbureaux::whereIn('province',['NORD UBANGI'])->sum('Cumul_acheves_T4_2023');
        $NUbur_acheves_2023 = $NUbur_acheves_T1__2023 +  $NUbur_acheves_T2__2023 + $NUbur_acheves_T3__2023 + $NUbur_acheves_T4__2023;
     
        $NUbureaux_cld_acheves = $NUbur_acheves_2021 + $NUbur_acheves_2022 + $NUbur_acheves_2023;

                   //KASAI-CENTRAL
        $KCbur_acheves_2021 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_2021');

        $KCbur_acheves_T3__2022 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_T3_2022');
        $KCbur_acheves_T4__2022 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_T4_2022');
        $KCbur_acheves_2022 = $KCbur_acheves_T3__2022 + $KCbur_acheves_T4__2022;
           
        $KCbur_acheves_T1__2023 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_T1_2023');
        $KCbur_acheves_T2__2023 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_T2_2023');
        $KCbur_acheves_T3__2023 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_T3_2023');
        $KCbur_acheves_T4__2023 = cdlbureaux::whereIn('province',['KASAI-CENTRAL'])->sum('Cumul_acheves_T4_2023');
        $KCbur_acheves_2023 = $KCbur_acheves_T1__2023 +  $KCbur_acheves_T2__2023 + $KCbur_acheves_T3__2023 + $KCbur_acheves_T4__2023;
           
        $KCbureaux_cld_acheves = $KCbur_acheves_2021 + $KCbur_acheves_2022 + $KCbur_acheves_2023;

              //ITURI
        $ITbur_acheves_2021 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_2021');

        $ITbur_acheves_T3__2022 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_T3_2022');
        $ITbur_acheves_T4__2022 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_T4_2022');
        $ITbur_acheves_2022 = $NUbur_acheves_T3__2022 + $NUbur_acheves_T4__2022;
            
        $ITbur_acheves_T1__2023 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_T1_2023');
        $ITbur_acheves_T2__2023 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_T2_2023');
        $ITbur_acheves_T3__2023 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_T3_2023');
        $ITbur_acheves_T4__2023 = cdlbureaux::whereIn('province',['ITURI'])->sum('Cumul_acheves_T4_2023');
        $ITbur_acheves_2023 = $ITbur_acheves_T1__2023 +  $ITbur_acheves_T2__2023 + $ITbur_acheves_T3__2023 + $ITbur_acheves_T4__2023;
            
        $ITbureaux_cld_acheves = $ITbur_acheves_2021 + $ITbur_acheves_2022 + $ITbur_acheves_2023;


            //SUD KIVU
        $SKbur_acheves_2021 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_2021');

        $SKbur_acheves_T3__2022 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_T3_2022');
        $SKbur_acheves_T4__2022 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_T4_2022');
        $SKbur_acheves_2022 = $SKbur_acheves_T3__2022 + $SKbur_acheves_T4__2022;
          
        $SKbur_acheves_T1__2023 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_T1_2023');
        $SKbur_acheves_T2__2023 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_T2_2023');
        $SKbur_acheves_T3__2023 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_T3_2023');
        $SKbur_acheves_T4__2023 = cdlbureaux::whereIn('province',['SUD KIVU'])->sum('Cumul_acheves_T4_2023');
        $SKbur_acheves_2023 = $SKbur_acheves_T1__2023 +  $SKbur_acheves_T2__2023 + $SKbur_acheves_T3__2023 + $SKbur_acheves_T4__2023;
          
        $SKbureaux_cld_acheves = $SKbur_acheves_2021 + $SKbur_acheves_2022 + $SKbur_acheves_2023;
 
             //NORD KIVU
        $NKbur_acheves_2021 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_2021');

        $NKbur_acheves_T3__2022 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_T3_2022');
        $NKbur_acheves_T4__2022 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_T4_2022');
        $NKbur_acheves_2022 = $NKbur_acheves_T3__2022 + $NKbur_acheves_T4__2022;
           
        $NKbur_acheves_T1__2023 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_T1_2023');
        $NKbur_acheves_T2__2023 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_T2_2023');
        $NKbur_acheves_T3__2023 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_T3_2023');
        $NKbur_acheves_T4__2023 = cdlbureaux::whereIn('province',['NORD KIVU'])->sum('Cumul_acheves_T4_2023');
        $NKbur_acheves_2023 = $NKbur_acheves_T1__2023 +  $NKbur_acheves_T2__2023 + $NKbur_acheves_T3__2023 + $NKbur_acheves_T4__2023;
           
        $NKbureaux_cld_acheves = $NKbur_acheves_2021 + $NKbur_acheves_2022 + $NKbur_acheves_2023;

             
             //SUD UBANGI
        $SUbur_acheves_2021 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_2021');

        $SUbur_acheves_T3__2022 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_T3_2022');
        $SUbur_acheves_T4__2022 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_T4_2022');
        $SUbur_acheves_2022 = $SUbur_acheves_T3__2022 + $SUbur_acheves_T4__2022;
           
        $SUbur_acheves_T1__2023 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_T1_2023');
        $SUbur_acheves_T2__2023 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_T2_2023');
        $SUbur_acheves_T3__2023 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_T3_2023');
        $SUbur_acheves_T4__2023 = cdlbureaux::whereIn('province',['SUD UBANGI'])->sum('Cumul_acheves_T4_2023');
        $SUbur_acheves_2023 = $SUbur_acheves_T1__2023 +  $SUbur_acheves_T2__2023 + $SUbur_acheves_T3__2023 + $SUbur_acheves_T4__2023;
           
        $SUbureaux_cld_acheves = $SUbur_acheves_2021 + $SUbur_acheves_2022 + $SUbur_acheves_2023;
  






        return view('dashboard.cld', compact('Nbrechartes','Nbreforma','bureaux_cld_acheves','Nbre_cld_encours',
        'cld_mise_en_oeuvre','cld_en_attente','Total_cld','NUbureaux_cld_acheves','KCbureaux_cld_acheves','ITbureaux_cld_acheves',
        'SKbureaux_cld_acheves','NKbureaux_cld_acheves','SUbureaux_cld_acheves','Tota_ciblecharte','cible_chartes2021',
        'cible_chartes2022','cible_chartes2023','cibleforma_realisation2021','cibleforma_realisation2022','cibleforma_realisation2023',
        'cibleNbreforma'));
    }

}
