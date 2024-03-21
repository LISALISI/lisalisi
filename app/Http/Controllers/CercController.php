<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parametre_cerc;
use App\Models\beneficiaries_cerc;

class CercController extends Controller
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
    public function viewcerc()

    {

        // CERC Data request for views
        $beneficiaries_cerc = new beneficiaries_cerc();
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
        $af= beneficiaries_cerc::where('Operateur','Afrimoney')->count();
        $gd= beneficiaries_cerc::where('Operateur','GiveDirectly')->count();
        $gp= beneficiaries_cerc::where('Operateur','GeoPoll')->count();

    // CERC End data realisation by operator

        // CERC Data realisation by objectifs and location ** Ben
        $afobjectif= parametre_cerc::whereIn('Operateur',['Afrimoney'])->sum('objectifs_contrat');
        $gdobjectif= parametre_cerc::whereIn('Operateur',['GiveDirectly'])->sum('objectifs_contrat');
        $gpobjectif= parametre_cerc::whereIn('Operateur',['GeoPoll'])->sum('objectifs_contrat');

        // CERC End data realisation by objectif and location



        return view('dashboard.cerc',compact('afobjectif','gdobjectif','gpobjectif',
    'af','gd','gp','cerctotalmontant','communautecerc','partenairecerc','benefcerc','provcerc'));


        // if(is_int($prov)){
        //     $prov=[];
        // }
        // return view('dash')->with('benef',$benef)->with('prov',$prov);


    }
//     public function listetmi()

//     {


// }
}
