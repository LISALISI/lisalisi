<?php

namespace App\Http\Controllers;
use App\Models\evolution_thimo;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ThimoController extends Controller
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
    public function viewthimo()

    {

        //espace de récupération et traiatement de donnees pour affichage
        $data= DB::table('evolution_thimo')->select('*')->get();
        $evolution_thimo = new evolution_thimo();
        $chantier_thimo= $evolution_thimo->sum('Nbre_chantier');
        $chantier_acheve= $evolution_thimo->sum('chantier_acheve');
        $chantier_encours= $chantier_thimo - $chantier_acheve;
        $benef_thimo= $evolution_thimo->sum('Actifs');
        $gradue_thimo= $evolution_thimo->sum('Gradue');
        $enservice_thimo= $benef_thimo - $gradue_thimo;
        $passervice_thimo= $evolution_thimo->sum('Inactif');
        $benef_remplace= $evolution_thimo->sum('Nbre_remplace');

        $nu = evolution_thimo::whereIn('province',['NORD UBANGI'])->sum('Nbre_chantier');
        $su = evolution_thimo::whereIn('province',['SUD UBANGI'])->sum('Nbre_chantier');
        $kc = evolution_thimo::whereIn('province',['KASAI-CENTRAL'])->sum('Nbre_chantier');
        $it = evolution_thimo::whereIn('province',['ITURI'])->sum('Nbre_chantier');
        $nk = evolution_thimo::whereIn('province',['NORD KIVU'])->sum('Nbre_chantier');
        $sk = evolution_thimo::whereIn('province',['SUD KIVU'])->sum('Nbre_chantier');

        return view('dashboard.thimo',compact('chantier_thimo','chantier_acheve','chantier_encours','benef_thimo','gradue_thimo',
        'enservice_thimo','passervice_thimo','benef_remplace','nu','su','kc','it','nk','sk','data'));
        
    }

}
