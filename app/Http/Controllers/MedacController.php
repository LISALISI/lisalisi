<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medac;

class MedacController extends Controller
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
    public function viewmedac()

    {
        $medac = new medac();
            //Realisation 2022
            $realisation_T1_2022 = $medac->sum('Realisation_T1_2022');
            $realisation_T2_2022 = $medac->sum('Realisation_T2_2022');
            $realisation_T3_2022 = $medac->sum('Realisation_T3_2022');
            $realisation_T4_2022 = $medac->sum('Realisation_T4_2022');
            $Tot_realisation2022 = $realisation_T1_2022 + $realisation_T2_2022 + $realisation_T3_2022 + $realisation_T4_2022;

            //Realisation 2023
            $realisation_T1_2023 = $medac->sum('Realisation_T1_2023');
            $realisation_T2_2023 = $medac->sum('Realisation_T2_2023');
            $realisation_T3_2023 = $medac->sum('Realisation_T3_2023');
            $realisation_T4_2023 = $medac->sum('Realisation_T4_2023');
            $Tot_realisation2023 = $realisation_T1_2023 + $realisation_T2_2023 + $realisation_T3_2023 + $realisation_T4_2023;


            //Totaux realisation
            $realisation_globales = $Tot_realisation2022 + $Tot_realisation2023;


            //Cible 2022
            $Cible_T1_2022 = $medac->sum('Cible_T1_2022');
            $Cible_T2_2022 = $medac->sum('Cible_T2_2022');
            $Cible_T3_2022 = $medac->sum('Cible_T3_2022');
            $Cible_T4_2022 = $medac->sum('Cible_T4_2022');
            $Tot_Cible2022 = $Cible_T1_2022 + $Cible_T2_2022 + $Cible_T3_2022 + $Cible_T4_2022;

            //Cible 2023
            $Cible_T1_2023 = $medac->sum('Cible_T1_2023');
            $Cible_T2_2023 = $medac->sum('Cible_T2_2023');
            $Cible_T3_2023 = $medac->sum('Cible_T3_2023');
            $Cible_T4_2023 = $medac->sum('Cible_T4_2023');
            $Tot_Cible2023 = $Cible_T1_2023 + $Cible_T2_2023 + $Cible_T3_2023 + $Cible_T4_2023;

           

            //Totaux Cible
            $Cible_globales = $Tot_Cible2022 + $Tot_Cible2023;

            //En attente
            $En_attente = $Cible_globales - $realisation_globales;

            //Realisation MEDAC formés par province

                
                    //Nord-Ubangi
            $NUmedacforme_T1__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T1_2022');
            $NUmedacforme_T2__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T2_2022');
            $NUmedacforme_T3__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T3_2022');
            $NUmedacforme_T4__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T4_2022');
            $NUmedacforme_2022 = $NUmedacforme_T1__2022 + $NUmedacforme_T2__2022 + $NUmedacforme_T3__2022 + $NUmedacforme_T4__2022;

            $NUmedacforme_T1__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T1_2023');
            $NUmedacforme_T2__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T2_2023');
            $NUmedacforme_T3__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T3_2023');
            $NUmedacforme_T4__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Realisation_T4_2023');
            $NUmedacforme_2023 = $NUmedacforme_T1__2023 + $NUmedacforme_T2__2023 + $NUmedacforme_T3__2023 + $NUmedacforme_T4__2023;
     
            $NUtotmedacforme = $NUmedacforme_2022 + $NUmedacforme_2023;


            
                    //KASSAI CENTRAL
            $KCmedacforme_T1__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T1_2022');
            $KCmedacforme_T2__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T2_2022');
            $KCmedacforme_T3__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T3_2022');
            $KCmedacforme_T4__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T4_2022');
            $KCmedacforme_2022 = $KCmedacforme_T1__2022 + $KCmedacforme_T2__2022 + $KCmedacforme_T3__2022 + $KCmedacforme_T4__2022;

            $KCmedacforme_T1__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T1_2023');
            $KCmedacforme_T2__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T2_2023');
            $KCmedacforme_T3__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T3_2023');
            $KCmedacforme_T4__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Realisation_T4_2023');
            $KCmedacforme_2023 = $KCmedacforme_T1__2023 + $KCmedacforme_T2__2023 + $KCmedacforme_T3__2023 + $KCmedacforme_T4__2023;
     
            $KCtotmedacforme = $KCmedacforme_2022 + $KCmedacforme_2023;
            
                    //ITURI
            $ITmedacforme_T1__2022 = medac::whereIn('province',['ITURI'])->sum('Realisation_T1_2022');
            $ITmedacforme_T2__2022 = medac::whereIn('province',['ITURI'])->sum('Realisation_T2_2022');
            $ITmedacforme_T3__2022 = medac::whereIn('province',['ITURI'])->sum('Realisation_T3_2022');
            $ITmedacforme_T4__2022 = medac::whereIn('province',['ITURI'])->sum('Realisation_T4_2022');
            $ITmedacforme_2022 = $ITmedacforme_T1__2022 + $ITmedacforme_T2__2022 + $ITmedacforme_T3__2022 + $ITmedacforme_T4__2022;

            $ITmedacforme_T1__2023 = medac::whereIn('province',['ITURI'])->sum('Realisation_T1_2023');
            $ITmedacforme_T2__2023 = medac::whereIn('province',['ITURI'])->sum('Realisation_T2_2023');
            $ITmedacforme_T3__2023 = medac::whereIn('province',['ITURI'])->sum('Realisation_T3_2023');
            $ITmedacforme_T4__2023 = medac::whereIn('province',['ITURI'])->sum('Realisation_T4_2023');
            $ITmedacforme_2023 = $ITmedacforme_T1__2023 + $ITmedacforme_T2__2023 + $ITmedacforme_T3__2023 + $ITmedacforme_T4__2023;
     
            $ITtotmedacforme = $ITmedacforme_2022 + $ITmedacforme_2023;

                //SUD KIVU
            $SKmedacforme_T1__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T1_2022');
            $SKmedacforme_T2__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T2_2022');
            $SKmedacforme_T3__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T3_2022');
            $SKmedacforme_T4__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T4_2022');
            $SKmedacforme_2022 = $SKmedacforme_T1__2022 + $SKmedacforme_T2__2022 + $SKmedacforme_T3__2022 + $SKmedacforme_T4__2022;

            $SKmedacforme_T1__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T1_2023');
            $SKmedacforme_T2__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T2_2023');
            $SKmedacforme_T3__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T3_2023');
            $SKmedacforme_T4__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Realisation_T4_2023');
            $SKmedacforme_2023 = $SKmedacforme_T1__2023 + $SKmedacforme_T2__2023 + $SKmedacforme_T3__2023 + $SKmedacforme_T4__2023;
     
            $SKtotmedacforme = $SKmedacforme_2022 + $SKmedacforme_2023;


                 //NORD KIVU
            $NKmedacforme_T1__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T1_2022');
            $NKmedacforme_T2__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T2_2022');
            $NKmedacforme_T3__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T3_2022');
            $NKmedacforme_T4__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T4_2022');
            $NKmedacforme_2022 = $NKmedacforme_T1__2022 + $NKmedacforme_T2__2022 + $NKmedacforme_T3__2022 + $NKmedacforme_T4__2022;

            $NKmedacforme_T1__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T1_2023');
            $NKmedacforme_T2__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T2_2023');
            $NKmedacforme_T3__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T3_2023');
            $NKmedacforme_T4__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Realisation_T4_2023');
            $NKmedacforme_2023 = $NKmedacforme_T1__2023 + $NKmedacforme_T2__2023 + $NKmedacforme_T3__2023 + $NKmedacforme_T4__2023;
     
            $NKtotmedacforme = $NKmedacforme_2022 + $NKmedacforme_2023;


               //SUD UBANGI
            $SUmedacforme_T1__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T1_2022');
            $SUmedacforme_T2__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T2_2022');
            $SUmedacforme_T3__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T3_2022');
            $SUmedacforme_T4__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T4_2022');
            $SUmedacforme_2022 = $SUmedacforme_T1__2022 + $SUmedacforme_T2__2022 + $SUmedacforme_T3__2022 + $SUmedacforme_T4__2022;

            $SUmedacforme_T1__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T1_2023');
            $SUmedacforme_T2__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T2_2023');
            $SUmedacforme_T3__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T3_2023');
            $SUmedacforme_T4__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Realisation_T4_2023');
            $SUmedacforme_2023 = $SUmedacforme_T1__2023 + $SUmedacforme_T2__2023 + $SUmedacforme_T3__2023 + $SUmedacforme_T4__2023;
     
            $SUtotmedacforme = $SUmedacforme_2022 + $SUmedacforme_2023;

        //Cible par province
                //Nord Ubangi
            $NUmedaccible_T1__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T1_2022');
            $NUmedaccible_T2__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T2_2022');
            $NUmedaccible_T3__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T3_2022');
            $NUmedaccible_T4__2022 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T4_2022');
            $NUmedaccible_2022 = $NUmedaccible_T1__2022 + $NUmedaccible_T2__2022 + $NUmedaccible_T3__2022 + $NUmedaccible_T4__2022;

            $NUmedaccible_T1__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T1_2023');
            $NUmedaccible_T2__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T2_2023');
            $NUmedaccible_T3__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T3_2023');
            $NUmedaccible_T4__2023 = medac::whereIn('province',['NORD UBANGI'])->sum('Cible_T4_2023');
            $NUmedaccible_2023 = $NUmedaccible_T1__2023 + $NUmedaccible_T2__2023 + $NUmedaccible_T3__2023 + $NUmedaccible_T4__2023;
 
            $NUtotmedaccible = $NUmedaccible_2022 + $NUmedaccible_2023;

                //KASAI-CENTRAL
            $KCmedaccible_T1__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T1_2022');
            $KCmedaccible_T2__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T2_2022');
            $KCmedaccible_T3__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T3_2022');
            $KCmedaccible_T4__2022 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T4_2022');
            $KCmedaccible_2022 = $KCmedaccible_T1__2022 + $KCmedaccible_T2__2022 + $KCmedaccible_T3__2022 + $KCmedaccible_T4__2022;

            $KCmedaccible_T1__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T1_2023');
            $KCmedaccible_T2__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T2_2023');
            $KCmedaccible_T3__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T3_2023');
            $KCmedaccible_T4__2023 = medac::whereIn('province',['KASAI-CENTRAL'])->sum('Cible_T4_2023');
            $KCmedaccible_2023 = $KCmedaccible_T1__2023 + $KCmedaccible_T2__2023 + $KCmedaccible_T3__2023 + $KCmedaccible_T4__2023;
 
            $KCtotmedaccible = $KCmedaccible_2022 + $KCmedaccible_2023;

                 //ITURI
            $ITmedaccible_T1__2022 = medac::whereIn('province',['ITURI'])->sum('Cible_T1_2022');
            $ITmedaccible_T2__2022 = medac::whereIn('province',['ITURI'])->sum('Cible_T2_2022');
            $ITmedaccible_T3__2022 = medac::whereIn('province',['ITURI'])->sum('Cible_T3_2022');
            $ITmedaccible_T4__2022 = medac::whereIn('province',['ITURI'])->sum('Cible_T4_2022');
            $ITmedaccible_2022 = $ITmedaccible_T1__2022 + $ITmedaccible_T2__2022 + $ITmedaccible_T3__2022 + $ITmedaccible_T4__2022;

            $ITmedaccible_T1__2023 = medac::whereIn('province',['ITURI'])->sum('Cible_T1_2023');
            $ITmedaccible_T2__2023 = medac::whereIn('province',['ITURI'])->sum('Cible_T2_2023');
            $ITmedaccible_T3__2023 = medac::whereIn('province',['ITURI'])->sum('Cible_T3_2023');
            $ITmedaccible_T4__2023 = medac::whereIn('province',['ITURI'])->sum('Cible_T4_2023');
            $ITmedaccible_2023 = $ITmedaccible_T1__2023 + $ITmedaccible_T2__2023 + $ITmedaccible_T3__2023 + $ITmedaccible_T4__2023;
 
            $ITtotmedaccible = $ITmedaccible_2022 + $ITmedaccible_2023;

             //SUD KIVU
             $SKmedaccible_T1__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T1_2022');
             $SKmedaccible_T2__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T2_2022');
             $SKmedaccible_T3__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T3_2022');
             $SKmedaccible_T4__2022 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T4_2022');
             $SKmedaccible_2022 = $SKmedaccible_T1__2022 + $SKmedaccible_T2__2022 + $SKmedaccible_T3__2022 + $SKmedaccible_T4__2022;
 
             $SKmedaccible_T1__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T1_2023');
             $SKmedaccible_T2__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T2_2023');
             $SKmedaccible_T3__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T3_2023');
             $SKmedaccible_T4__2023 = medac::whereIn('province',['SUD KIVU'])->sum('Cible_T4_2023');
             $SKmedaccible_2023 = $SKmedaccible_T1__2023 + $SKmedaccible_T2__2023 + $SKmedaccible_T3__2023 + $SKmedaccible_T4__2023;
  
             $SKtotmedaccible = $SKmedaccible_2022 + $SKmedaccible_2023;

                //NORD KIVU
             $NKmedaccible_T1__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T1_2022');
             $NKmedaccible_T2__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T2_2022');
             $NKmedaccible_T3__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T3_2022');
             $NKmedaccible_T4__2022 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T4_2022');
             $NKmedaccible_2022 = $NKmedaccible_T1__2022 + $NKmedaccible_T2__2022 + $NKmedaccible_T3__2022 + $NKmedaccible_T4__2022;
 
             $NKmedaccible_T1__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T1_2023');
             $NKmedaccible_T2__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T2_2023');
             $NKmedaccible_T3__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T3_2023');
             $NKmedaccible_T4__2023 = medac::whereIn('province',['NORD KIVU'])->sum('Cible_T4_2023');
             $NKmedaccible_2023 = $NKmedaccible_T1__2023 + $NKmedaccible_T2__2023 + $NKmedaccible_T3__2023 + $NKmedaccible_T4__2023;
  
             $NKtotmedaccible = $NKmedaccible_2022 + $NKmedaccible_2023;


                 //SUD UBANGI
             $SUmedaccible_T1__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T1_2022');
             $SUmedaccible_T2__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T2_2022');
             $SUmedaccible_T3__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T3_2022');
             $SUmedaccible_T4__2022 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T4_2022');
             $SUmedaccible_2022 = $SUmedaccible_T1__2022 + $SUmedaccible_T2__2022 + $SUmedaccible_T3__2022 + $SUmedaccible_T4__2022;
 
             $SUmedaccible_T1__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T1_2023');
             $SUmedaccible_T2__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T2_2023');
             $SUmedaccible_T3__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T3_2023');
             $SUmedaccible_T4__2023 = medac::whereIn('province',['SUD UBANGI'])->sum('Cible_T4_2023');
             $SUmedaccible_2023 = $SUmedaccible_T1__2023 + $SUmedaccible_T2__2023 + $SUmedaccible_T3__2023 + $SUmedaccible_T4__2023;
  
             $SUtotmedaccible = $SUmedaccible_2022 + $SUmedaccible_2023;

            // MEDAC en attente par province
 
            $ITattente_medac = $ITtotmedaccible - $ITtotmedacforme;
            $NUattente_medac = $NUtotmedaccible - $NUtotmedacforme;
            $KCattente_medac = $KCtotmedaccible - $KCtotmedacforme;
            $SKattente_medac = $SKtotmedaccible - $SKtotmedacforme;
            $NKattente_medac = $NKtotmedaccible - $NKtotmedacforme;
            $SUattente_medac = $SUtotmedaccible - $SUtotmedacforme;

            //Calcul des totaux

            $totaux_cible_2022 =  $SUmedaccible_2022 + $NUmedaccible_2022 + $KCmedaccible_2022 + $KCmedaccible_2022 + $SKmedaccible_2022 + $ITmedaccible_2022;
            $totaux_cible_2023 =  $SUmedaccible_2023 + $NUmedaccible_2023 + $KCmedaccible_2023 + $KCmedaccible_2023 + $SKmedaccible_2023 + $ITmedaccible_2023;
            $totaux_cible = $totaux_cible_2022 + $totaux_cible_2023;


        return view('dashboard.medac', compact('realisation_globales','Cible_globales','En_attente','SUtotmedacforme',
        'NKtotmedacforme','SKtotmedacforme','ITtotmedacforme','KCtotmedacforme','NUtotmedacforme','NUtotmedaccible','KCtotmedaccible',
        'SUtotmedaccible','SKtotmedaccible','NKtotmedaccible','ITtotmedaccible',
        'SUmedaccible_2022','KCmedaccible_2022','NUmedaccible_2022','SKmedaccible_2022','NKmedaccible_2022','ITmedaccible_2022',
        'SUmedaccible_2023','KCmedaccible_2023','NUmedaccible_2023','SKmedaccible_2023','NKmedaccible_2023','ITmedaccible_2023',
        'ITattente_medac','NUattente_medac','KCattente_medac','SKattente_medac','NKattente_medac','SUattente_medac','totaux_cible_2022',
        'totaux_cible_2023','totaux_cible'));
    }

}
