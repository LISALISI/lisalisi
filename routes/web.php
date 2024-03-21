<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DeconController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MgpController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\CldController;
use App\Http\Controllers\CercController;
use App\Http\Controllers\IdbController;
use App\Http\Controllers\TmiController;
use App\Http\Controllers\ThimoController;
use App\Http\Controllers\MedacController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\PlainteController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\SuiviinfraController;
use App\Http\Controllers\AutosearchController;


/*
|--------------------------------------------------------------------------
| Web Routesparamgroupesmodifier
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [DeconController::class,'destroy_session']);
Route::group(['middleware' => 'prevent-back-history'],function(){



// Route::get('/', function () {
//     return view('auth/login');
//     // return view('welcome');
// });







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard/dash');
    // })->name('dashboard');

     //route controller home page
     Route::get('/dashboard',[HomeController::class,'viewhome'])->name('dashboard');

     //route controller dashboard
     Route::get('/dash',[DashController::class,'viewdash'])->name('dash');

     //route controller cld
     Route::get('/cld',[CldController::class,'viewcld'])->name('cld');

     //route controller thimo
     Route::get('/thimo',[ThimoController::class,'viewthimo'])->name('thimo');

     //route controller cld
     Route::get('/medac',[MedacController::class,'viewmedac'])->name('medac');

     //route controller mgp
     Route::get('/mgp',[MgpController::class,'viewmgp'])->name('mgp');
     Route::get('/mgpinserer',[MgpController::class,'viewmgpinserer'])->name('mgpinserer');
     Route::get('/mgplistes',[MgpController::class,'viewmgplistes'])->name('mgplistes');
     Route::get('/mgpliste_hsensible',[MgpController::class,'viewmgpliste_hsensible']);
     Route::get('/mgptraiter',[MgpController::class,'viewmgptraiter'])->name('mgptraiter');
     Route::get('/mgp',[MgpController::class,'mgp_stata'])->name('mgp');

     Route::get('/idbsuiviinfra',[SuiviinfraController::class,'viewsuiviinfra']);

     Route::get('/mgp',[MgpController::class,'mgp_stata'])->name('mgp_stata');

     Route::post('api/fetch-type', [MgpController::class, 'fetchType']);
     Route::get('filter',[MgpController::class, 'filterMgp'])->name('filter');
     Route::get('filter_hsensible',[MgpController::class, 'filterMgpHsensible'])->name('filter_hsensible');

     Route::get('/mgpsensibles',[MgpController::class,'viewmgpsensibles'])->name('mgpsensibles');
        //route search autocomplete
        // Route::post('/autocomplete_fetch_ticket', [MgpController::class, 'fetch_ticket'])->name('autocomplete.fetchTicket');
        // Route::post('/autocomplete_fetch_ticket_hsensible', [MgpController::class, 'fetch_ticket_hsensible'])->name('autocomplete.fetchTicketHsensible');
        // Route::post('/autocomplete_search_ticket', [MgpController::class, 'search_ticket'])->name('autocomplete.searchTicket');
        // Route::post('/autocomplete_search_ticket_hsensible', [MgpController::class, 'search_ticket_hsensible'])->name('autocomplete.searchTicketHsensible');
      //route afficher plainte
      Route::get('/show_plainte/{Id_plainte}', [MgpController::class,'fetch_id_plainte_aff']);
      Route::get('/show_plainte_hsensible/{Id_plainte}', [MgpController::class,'fetch_id_plainte_aff_hsensible']);

      //route traite plainte
      Route::get('/treat_plainte/{Id_plainte}', [MgpController::class,'fetch_id_plainte']);
      Route::get('/treat_plainte_hsensible/{Id_plainte}', [MgpController::class,'fetch_id_plainte_hsensible']);

     //route form orienter plainte
     Route::get('oriente_plainte/{Id}', [MgpController::class,'orienterPlaintebyId']);
     Route::get('oriente_plainte_hsensible/{Id}', [MgpController::class,'orienterPlaintebyIdHsensible']);
     //route cloturer plainte
     Route::get('cloturer_plainte/{Id}', [MgpController::class,'cloturerPlaintebyId']);
     Route::get('cloturer_plainte_hsensible/{Id}', [MgpController::class,'cloturerPlainteHsensiblebyId']);
    //  Route::get('oriente_plainte/{Id_plainte}', [MgpController::class,'getPlaintebyId']);

    //route form orienter plainte
    Route::get('requalifier_plainte/{Id}', [MgpController::class,'requalifierPlaintebyId']);
    Route::get('requalifier_plainte_hsensible/{Id}', [MgpController::class,'requalifierPlaintebyIdHsensible']);
    Route::get('requalifier_plainte/{Id}', [MgpController::class,'requalifierPlaintebyId']);
    Route::post('upd_requalifier_plainte', [MgpController::class,'requalifierPlainte']);
    Route::post('upd_requalifier_plainte_hsensible', [MgpController::class,'requalifierPlainteHsensible']);
    Route::post('upd_pv_plainte', [MgpController::class,'pvPlainte']);
    Route::post('upd_pv_hs_plainte', [MgpController::class,'pvHSPlainte']);
    Route::post('upd_solution_plainte', [MgpController::class,'solutionPlainte']);
    Route::post('upd_solution_plainte_hsensible', [MgpController::class,'solutionPlainteHsensible']);
    //  Route::get('oriente_plainte/{Id_plainte}', [MgpController::class,'getPlaintebyId']);

     //route parametre
     Route::get('/param',[ParamController::class,'viewparam'])->name('param');
     Route::get('/paramutilisateurs',[ParamController::class,'viewparamutilisateurs'])->name('paramutilisateurs');
    //  Route::post('/autocomplete_fetch_user', [ParamController::class, 'fetch_user'])->name('autocomplete.fetchUser');
    //  Route::post('/autocomplete_search_user', [ParamController::class, 'search_user'])->name('autocomplete.searchUser');



     Route::get('/paramgroupes',[ParamController::class,'viewparamgroupes'])->name('paramgroupes');
     Route::get('paramgroupesmodifier/{id}',[ParamController::class,'viewparamgroupesmodifier'])->name('paramgroupesmodifier');
     Route::get('/paramlocalites',[ParamController::class,'viewparamlocalites'])->name('paramlocalites');
     Route::post('/insert_localite',[ParamController::class,'store_localite']);
     Route::post('/update_localite',[ParamController::class,'modifier_localite']);
     Route::get('/parametre_import_mgp',[ParamController::class,'view_import_mgp']);

     //insert groupe
     Route::post('/parametre_insert_groupe',[ParamController::class,'store_groupe']);
     Route::post('/parametre_upd_groupe',[ParamController::class,'update_groupe']);
     Route::get('/lister_groupe',[ParamController::class,'liste_groupe']);
     Route::post('/autocomplete_fetch_groupe', [ParamController::class, 'fetch_groupe'])->name('autocomplete.fetchGroupe');
    //  Route::post('/autocomplete_fetch_localite', [ParamController::class, 'fetch_localite'])->name('autocomplete.fetchLocalite');
     Route::post('/autocomplete_search_groupe', [ParamController::class, 'search_groupe'])->name('autocomplete.searchGroupe');
    //  Route::post('/autocomplete_search_localite', [ParamController::class, 'search_localite'])->name('autocomplete.searchLocalite');
    //  Route::get('filter_groupe_droit',[ParamController::class, 'filterGroupe'])->name('filter_groupe_droit');
     Route::get('config_groupe_droit',[ParamController::class, 'config_droit'])->name('config_groupe_droit');
     Route::get('desactiver_user/{id}', [ParamController::class,'desactiverUserInGroupe']);

    // route module autocomplete start
     Route::post('/autocomplete_recherche',[AutosearchController::class, 'search_key'])->name('autocomplete_recherche');
     Route::post('/valid_autocomplete_recherche',[AutosearchController::class, 'valid_search_ticket'])->name('valid_autocomplete_recherche');
        // end route module autocomplete


     // route import data from kobo
     Route::get('/import_mgp_data',[PlainteController::class,'call']);
    // route insert hsensible data
     Route::get('/insert_mgp_hsensible',[PlainteController::class,'insert_hsensible']);



      //route cerc
     Route::get('/cerc',[CercController::class,'viewcerc'])->name('cerc');
      //route idb
     Route::get('/idb',[IdbController::class,'viewidb'])->name('idb');
     Route::get('/idblistes',[IdbController::class,'viewidblistes'])->name('idblistes');
     Route::get('/idbinserer',[IdbController::class,'viewidbinserer'])->name('idbinserer');
     Route::get('/idbmodifier',[IdbController::class,'viewidbmodifier'])->name('idbmodifier');
     Route::get('/idbrapports',[IdbController::class,'viewidbrapports'])->name('idbrapports');
     Route::get('/idbbeneficiaires',[IdbController::class,'viewidbbeneficiaires'])->name('idbbeneficiaires');
      //route tmi
     Route::get('/tmi',[TmiController::class,'viewtmi'])->name('tmi');

    //  create user
    Route::post('/users', [RegisteredUserController::class, 'store'])->name('registers');
    Route::post('/users_upd', [RegisteredUserController::class, 'update'])->name('user_update');
    Route::get('/affection_set', [RegisteredUserController::class, 'store_affection'])->name('affection_set');

});


Route::get('logout',[AuthenticatedSessionController::class,'destroy']);

///require __DIR__.'/auth.php';
});  //prevent back
