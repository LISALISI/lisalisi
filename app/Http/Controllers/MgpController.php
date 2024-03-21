<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Categorie;
use App\Models\Type;
use App\Models\Composante;
use App\Models\Statut;
use App\Models\complain;
//use App\Models\Plainte_new;
use App\Models\Mgp_process;
use App\Models\Mgp_hsensible;
use Illuminate\Support\Facades\DB;
use Validator;

class MgpController extends Controller
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
    public function viewmgp()

    {

        return view('dashboard/mgp');

        // if(is_int($prov)){
        //     $prov=[];
        // }
        // return view('dash')->with('benef',$benef)->with('prov',$prov);
   }

   public function viewmgpinserer()

   {
     return view('dashboard/mgpinserer');
   }

   public function viewmgplistes()

    {
        $data_province = Province::orderBy('nom_province','asc')->get();
        $data_categorie = Categorie::orderBy('nom_categorie','asc')->where('nom_categorie','!=','Hypersensible')->get();
        $data_type = Type::orderBy('nom_type','asc')->get();
        $data_composante = Composante::orderBy('nom_composante','asc')->get();
        $data_statut = Statut::orderBy('nom_statut','asc')->get();
        $data_plainte = Mgp_process::orderBy('End_encodage','desc')->paginate(10);



        return view('dashboard/mgplistes', [
            'data_province' => $data_province,
            'data_categorie' => $data_categorie,
            'data_composante' => $data_composante,
            'data_statut' => $data_statut,
            'data_plainte' => $data_plainte
          ]);
       // return view('dashboard/mgplistes');

    }


    public function viewmgpliste_hsensible()

    {
        $data_province = Province::orderBy('nom_province','asc')->get();
        $data_categorie = Categorie::orderBy('nom_categorie','asc')->where('nom_categorie','==','Hypersensible')->get();
        $data_type = Type::orderBy('nom_type','asc')->get();
        $data_composante = Composante::orderBy('nom_composante','asc')->get();
        $data_statut = Statut::orderBy('nom_statut','asc')->get();
        // $data_plainte = DB::select("SELECT * FROM mgp_hsensible Order by End_encodage desc");
        $data_plainte = Mgp_hsensible::orderBy('End_encodage','desc')->paginate(10);

        return view('dashboard/mgpliste_hsensible', [
            'data_province' => $data_province,
            'data_categorie' => $data_categorie,
            'data_composante' => $data_composante,
            'data_statut' => $data_statut,
            'data_plainte' => $data_plainte
          ]);
       // return view('dashboard/mgplistes');

    }


    public function mgp_stata()

    {

        $complain= complain::count();
        $close= complain::where('Statut_plainte_end','cloture')->count();
        $reject= complain::where('Statut_plainte_end','rejete')->count();
        $inprocess= complain::where('Statut_plainte_end','reouverte')->count();
        $open= complain::where('Statut_plainte_end','')->count();
        $complain_processing= $inprocess + $open;

        $nu= complain::where('Province','NU')->count();
        $it= complain::where('Province','IT')->count();
        $kc= complain::where('Province','KC')->count();
        $sk= complain::where('Province','SK')->count();
        $nk= complain::where('Province','NK')->count();
        $su= complain::where('Province','SU')->count();

        $medac= complain::where('Composante','MEDAC')->count();
        $step= complain::where('Composante','STEP')->count();
        $tmi= complain::where('Composante','TMI')->count();
        $thimo= complain::where('Composante','THIMO')->count();
        $cld= complain::where('Composante','CLD')->count();
        $idb= complain::where('Composante','IDB')->count();

       return view('dashboard/mgp',compact('complain','complain_processing','open','inprocess','reject','close','nu','it','kc','sk','nk','su','medac','step','tmi','thimo','cld','idb'));

    }


    public function filterMgp(Request $request)
    {
        $query = Mgp_process::query();

        // $categorie = Categorie::all();


         if($request->ajax()){
              if(empty($request->province) and
                 empty($request->composante) and
                 empty($request->typedropdown) and
                 empty($request->dateD) and
                 empty($request->dateF) and
                 empty($request->statut)
                ){
                   $data_plainte_filtrer = $query->get();
                }
             $data_plainte_filtrer = $query->where(['Id_province'=>$request->province])
                                            ->Where(['Id_composante'=>$request->composante])
                                            ->Where(['Id_type_f'=>$request->typedropdown])
                                            ->orWhere(['Id_statut_plainte_end'=>$request->statut])
                                            ->whereBetween('End_encodage', [$request->dateD, $request->dateF])
                                            ->get();

             return response()->json(['data_plainte_filtrer'=>$data_plainte_filtrer]);
          }
        //   $product = $query->get();
        //   return view('puduct', compact('product','categorie'))


    }


    public function filterMgpHsensible(Request $request)
    {
        $query = Mgp_hsensible::query();

        // $categorie = Categorie::all();


         if($request->ajax()){
              if(empty($request->province) and
                 empty($request->composante) and
                 empty($request->typedropdown) and
                 empty($request->dateD) and
                 empty($request->dateF) and
                 empty($request->statut)
                ){
                   $data_plainte_filtrer = $query->get();
                }
             $data_plainte_filtrer = $query->where(['Id_province'=>$request->province])
                                            ->Where(['Id_composante'=>$request->composante])
                                            ->where(['Id_type_f'=>$request->typedropdown])
                                            ->orWhere(['Id_statut_plainte_end'=>$request->statut])
                                            ->whereBetween('End_encodage', [$request->dateD, $request->dateF])
                                            ->get();

             return response()->json(['data_plainte_filtrer'=>$data_plainte_filtrer]);
          }
        //   $product = $query->get();
        //   return view('puduct', compact('product','categorie'))


    }





    public function fetchType(Request $request)
    {

        $data['type'] = Type::where("id_categorie", $request->id_categorie)
                                ->get(["nom_type", "id"]);

        return response()->json($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function fetchTypeeee(Request $request)
    // {
    //     $data['cities'] = City::where("state_id", $request->state_id)
    //                                 ->get(["name", "id"]);

    //     return response()->json($data);
    // }

    public function viewmgptraiter()

    {
        return view('dashboard/mgptraiter');
    }

    public function viewmgpsensibles()

    {
        return view('dashboard/mgpsensibles');
    }

    // function fetch_ticket(Request $request)
    // {
    //     if($request->get('query'))
    //     {
    //         $query = $request->get('query');
    //         $data = DB::table('mgp_process')
    //             ->where('Ticket', 'LIKE', "%{$query}%")
    //             ->get();
    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
    //         foreach($data as $row)
    //         {
    //             $output .= '
    //             <li><a class="dropdown-item" href="#">'.$row->Ticket.'</a></li>
    //             ';
    //         }
    //         $output .= '</ul>';
    //         echo $output;
    //     }
    // }


    function fetch_ticket_hsensible(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('mgp_hsensible')
                ->where('Ticket', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->Ticket.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }



    //search plainte by Ticket
    function search_ticket(Request $request)
    {
        if($request->get('ticketId'))
        {
            $query = $request->get('ticketId');
            $data_search_ticket = DB::table('mgp_process')
                ->where('Ticket', '=', $query)
                ->get();
            return response()->json(['data_search_ticket'=>$data_search_ticket]);
        }
    }

    //search plainte hyper sensible by Ticket
    function search_ticket_hsensible(Request $request)
    {
        if($request->get('ticketId'))
        {
            $query = $request->get('ticketId');
            $data_search_ticket = DB::table('mgp_hsensible')
                ->where('Ticket', '=', $query)
                ->get();
            return response()->json(['data_search_ticket'=>$data_search_ticket]);
        }
    }

    //search plainte by Ticket
    function getPlaintebyId(Request $request)
    {
        if($request->get('Id_plainte'))
        {
            $query = $request->get('Id_plainte');
            $data_search_Idplainte = DB::table('mgp_process')
                ->where('Ticket', '=', $query)
                ->get();
            return response()->json($data_search_Idplainte);
        }
    }


    //search plainte by ID
    function orienterPlaintebyId($Id)
    {
        if($Id)
        {
            $IdPlainte_retour = DB::select("SELECT Id_plainte, Orienter, Statut_plainte_end FROM mgp_process WHERE Id=".$Id);
            foreach($IdPlainte_retour as $IdPlainte_ret){
                $IdPlainte_ = $IdPlainte_ret->Id_plainte;
                $Orienter = $IdPlainte_ret->Orienter;
                $Statut = $IdPlainte_ret->Statut_plainte_end;
            }

            if($Orienter==0 and $Statut!= "cloture"){
                $data_search_Idplainte = DB::update('UPDATE mgp_process set Orienter = ? WHERE  Id = ?', [1 , $Id]);
            }elseif($Orienter==1 and $Statut!= "cloture"){
                $data_search_Idplainte = DB::update('UPDATE mgp_process set Orienter = ? WHERE  Id = ?', [0 , $Id]);
            }


            return redirect('treat_plainte/'.$IdPlainte_);
        }
    }

    function orienterPlaintebyIdHsensible($Id)
    {
        if($Id)
        {
            $IdPlainte_retour = DB::select("SELECT Id_plainte, Orienter, Statut_plainte_end FROM mgp_hsensible WHERE Id=".$Id);
            foreach($IdPlainte_retour as $IdPlainte_ret){
                $IdPlainte_ = $IdPlainte_ret->Id_plainte;
                $Orienter = $IdPlainte_ret->Orienter;
                $Statut = $IdPlainte_ret->Statut_plainte_end;
            }

            if($Orienter==0 and $Statut!= "cloture"){
                $data_search_Idplainte = DB::update('UPDATE mgp_hsensible set Orienter = ? WHERE  Id = ?', [1 , $Id]);
            }elseif($Orienter==1 and $Statut!= "cloture"){
                $data_search_Idplainte = DB::update('UPDATE mgp_hsensible set Orienter = ? WHERE  Id = ?', [0 , $Id]);
            }


            return redirect('treat_plainte_hsensible/'.$IdPlainte_);
        }
    }


    //cloturer plainte by ID
    function cloturerPlaintebyId($Id)
    {

        if($Id)
        {
            $IdPlainte_sel = DB::select("SELECT Id_plainte, Feedback_plaingant,Feedback_plaignant2, Id_statut_plainte_end, Statut_plainte_end FROM mgp_process WHERE Id=".$Id);

            foreach($IdPlainte_sel as $IdPlainte_sel){
                $IdPlainte = $IdPlainte_sel->Id_plainte;
                $Feedback_plaingant = $IdPlainte_sel->Feedback_plaingant;
                $Feedback_plaignant2 = $IdPlainte_sel->Feedback_plaignant2;
                $Statut_plainte_end = $IdPlainte_sel->Statut_plainte_end;
                $Id_statut_plainte_end = $IdPlainte_sel->Id_statut_plainte_end;
            }

           // dd($Id_statut_plainte_end);

            if(($Feedback_plaingant=="satisfait" or $Feedback_plaignant2=="satisfait") and ($Statut_plainte_end!= "cloture" or $Id_statut_plainte_end!=1)){

               $data_search_plainte_cloture = DB::update('UPDATE mgp_process set Id_statut_plainte_end = ?, Statut_plainte_end = ?  WHERE  Id = ?', [1, "cloture", $Id]);
            }


            return redirect('treat_plainte/'.$IdPlainte);
        }
    }

    function cloturerPlainteHsensiblebyId($Id)
    {
        if($Id)
        {
            $IdPlainte_sel = DB::select("SELECT Id_plainte, Feedback_plaingant,Feedback_plaignant2, Statut_plainte_end FROM mgp_hsensible WHERE Id=".$Id);
            foreach($IdPlainte_sel as $IdPlainte_sel){
                $IdPlainte = $IdPlainte_sel->Id_plainte;
                $Feedback_plaingant = $IdPlainte_sel->Feedback_plaingant;
                $Feedback_plaignant2 = $IdPlainte_sel->Feedback_plaignant2;
                $Statut_plainte_end = $IdPlainte_sel->Statut_plainte_end;
            }

            if($Feedback_plaingant=="satisfait" and $Statut_plainte_end!= "cloture"){
                $data_search_plainte_cloture = DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ?, Statut_plainte_end = ?  WHERE  Id = ?', [1, "cloture", $Id]);
            }elseif($Feedback_plaignant2=="satisfait" and $Statut_plainte_end!= "cloture"){
                $data_search_plainte_cloture = DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ?, Statut_plainte_end = ?  WHERE  Id = ?', [1, "cloture", $Id]);
            }


            return redirect('treat_plainte_hsensible/'.$IdPlainte);
        }
    }




     //search plainte by ID SELECT * FROM `mgp_process` WHERE Ticket ='231219-SK-ID-29741si'
     function requalifierPlaintebyIdHsensible($Id)
     {
         if($Id)
         {
             $selectPlainteById = Mgp_hsensible::find($Id);
             return response()->json($selectPlainteById);
         }
     }


     //search plainte by ID SELECT * FROM `mgp_process` WHERE Ticket ='231219-SK-ID-29741si'
     function requalifierPlaintebyId($Id)
     {
         if($Id)
         {
             $selectPlainteById = Mgp_process::find($Id);
             return response()->json($selectPlainteById);
         }
     }










    //search complain by ID plainte for treatment
    function fetch_id_plainte(Request $request)
    {
        if($request->Id_plainte)
        {
            $query_id_plainte = $request->Id_plainte;
            $data_categorie = Categorie::orderBy('nom_categorie','asc')->where('nom_categorie','!=','Hypersensible')->get();

            $data_plainte_selected = DB::table('mgp_process')
                ->where('Id_plainte', '=', $query_id_plainte)
                ->get();



                if($data_plainte_selected){
                    return view('dashboard/mgptraiter', [
                        'data_plainte_selected' => $data_plainte_selected,
                        'data_categorie' => $data_categorie
                      ]);
                }
                else{
                    return view('dashboard/mgplistes');

                }

        }


    }


    function fetch_id_plainte_hsensible(Request $request)
    {
        if($request->Id_plainte)
        {
            $query_id_plainte = $request->Id_plainte;
            $data_categorie = Categorie::orderBy('nom_categorie','asc')->get();

            $data_plainte_selected = DB::table('mgp_hsensible')
                ->where('Id_plainte', '=', $query_id_plainte)
                ->get();
                if($data_plainte_selected){
                    return view('dashboard/mgptraiterhsensible', [
                        'data_plainte_selected' => $data_plainte_selected,
                        'data_categorie' => $data_categorie
                      ]);
                }
                else{
                    return view('dashboard/mgplistes_hsensible');

                }

        }
    }


    //search complain by ID for displaying
    function fetch_id_plainte_aff(Request $request)
    {
        if($request->Id_plainte)
        {
            $query_id_plainte = $request->Id_plainte;
            $data_categorie = Categorie::orderBy('nom_categorie','asc')->where('nom_categorie','!=','Hypersensible')->get();

            $data_plainte_selected = DB::table('mgp_process')
                ->where('Id_plainte', '=', $query_id_plainte)
                ->get();
                if($data_plainte_selected){
                    return view('dashboard/mgpafficher', [
                        'data_plainte_selected' => $data_plainte_selected,
                        'data_categorie' => $data_categorie
                      ]);
                }
                else{
                    return view('dashboard/mgplistes');

                }

        }
    }



    function fetch_id_plainte_aff_hsensible(Request $request)
    {
        if($request->Id_plainte)
        {
            $query_id_plainte = $request->Id_plainte;
            $data_categorie = Categorie::orderBy('nom_categorie','asc')->where('nom_categorie','=','Hypersensible')->get();

            $data_plainte_selected = DB::table('mgp_hsensible')
                ->where('Id_plainte', '=', $query_id_plainte)
                ->get();
                if($data_plainte_selected){
                    return view('dashboard/mgpafficherhsensible', [
                        'data_plainte_selected' => $data_plainte_selected,
                        'data_categorie' => $data_categorie
                      ]);
                }
                else{
                    return view('dashboard/mgplistes_hsensible');

                }

        }
    }



    public function requalifierPlainte(Request $request)
    {

        $data_categorie=Categorie::find($request->categorie_new);
        $data_type=Type::find($request->type_new);
        $nom_categorie = $data_categorie->nom_categorie;
        $nom_type = $data_type->nom_type;

        $data_plainte=Mgp_process::find($request->Id);

        // $IdPlainte = $data_plainte->Id_plainte;

        // $data_plainte->Id_type_f=$request->type_new;
        // $data_plainte->Type_plainte=$nom_type;
        // $data_plainte->Id_categorie=$request->categorie_new;
        // $data_plainte->Categorie_plainte=$nom_categorie;
        // $execute = $data_plainte->save();

        $execut_upd = DB::update('UPDATE mgp_process set Id_type_f=?, Type_plainte=?, Id_categorie=?, Categorie_plainte=? WHERE  Id = ?', [$request->type_new, $nom_type, $request->categorie_new, $nom_categorie, $request->Id]);


        if($execut_upd){
            return response()->json(['status'=>1, 'msg'=>'Plainte requalifiee avec succes']);
          }else{
            return response()->json(['status'=>0, 'msg'=>'Une erreur sest produite']);
        }
          //return response()->json($msg);

        // return redirect('show_plainte/'.$IdPlainte)->with('msg','Plainte requalifiee avec succes');

    }


    public function requalifierPlainteHsensible(Request $request)
    {

        $data_categorie=Categorie::find($request->categorie_new);
        $data_type=Type::find($request->type_new);
        $nom_categorie = $data_categorie->nom_categorie;
        $nom_type = $data_type->nom_type;

        $data_plainte=Mgp_hsensible::find($request->Id);

        // $IdPlainte = $data_plainte->Id_plainte;

        // $data_plainte->Id_type_f=$request->type_new;
        // $data_plainte->Type_plainte=$nom_type;
        // $data_plainte->Id_categorie=$request->categorie_new;
        // $data_plainte->Categorie_plainte=$nom_categorie;
        // $execute = $data_plainte->save();

        $execut_upd = DB::update('UPDATE mgp_hsensible set Id_type_f=?, Type_plainte=?, Id_categorie=?, Categorie_plainte=? WHERE  Id = ?', [$request->type_new, $nom_type, $request->categorie_new, $nom_categorie, $request->Id]);


        if($execut_upd){
            return response()->json(['status'=>1, 'msg'=>'Plainte requalifiee avec succes']);
          }else{
            return response()->json(['status'=>0, 'msg'=>'Une erreur sest produite']);
        }
          //return response()->json($msg);

        // return redirect('show_plainte/'.$IdPlainte)->with('msg','Plainte requalifiee avec succes');

    }



    public function solutionPlainte(Request $request)
    {

        $Idpl=$request->Idpl;
        $Proposition_1=$request->Proposition_1;
        $Proposition_2=$request->Proposition_2;
        $Feedback_1=$request->Feedback_1;
        $Feedback_2=$request->Feedback_2;
        $Date_traitement=$request->Date_traitement;
        $Date_traitement2=$request->Date_traitement2;

        $data_plainte=Mgp_process::find($request->Idpl);

        $IdPlainte = $data_plainte->Id_plainte;
        $Stat = $data_plainte->Id_statut_plainte_end;

        // $data_plainte->Id_type_f=$request->type_new;
        // $data_plainte->Type_plainte=$nom_type;
        // $data_plainte->Id_categorie=$request->categorie_new;
        // $data_plainte->Categorie_plainte=$nom_categorie;
        // $execute = $data_plainte->save();

        if($Stat!=1){
               $solution_upd = DB::update('UPDATE mgp_process set Date_traitement=?, Date_traitement2=?, Proposition_1=?, Proposition_2=?, Feedback_plaingant=?, Feedback_plaignant2=? WHERE  Id = ?', [$Date_traitement, $Date_traitement2, $Proposition_1, $Proposition_2, $Feedback_1, $Feedback_2, $Idpl]);

               if($solution_upd){
                        $data_feed=Mgp_process::find($request->Idpl);
                        $feed = $data_feed->Feedback_plaingant;

                        if($feed=="satisfait"){
                            $round_upd = DB::update('UPDATE mgp_process set Round_process=? WHERE  Id = ?', [2, $Idpl]);
                        }elseif($feed=="insatisfait"){
                            $round_upd = DB::update('UPDATE mgp_process set Round_process=? WHERE  Id = ?', [3, $Idpl]);
                        }

                     return response()->json(['status'=>1, 'msg'=>'Solution enregistrée avec succes']);
                }else{
                    return response()->json(['status'=>0, 'msg'=>'Une erreur sest produite']);
                }
            }else{
                   return response()->json(['status'=>0, 'msg'=>'Cette plainte est cloturee']);
        }


          //return response()->json($msg);

        // return redirect('show_plainte/'.$IdPlainte)->with('msg','Plainte requalifiee avec succes');

    }


    public function pvPlainte(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'pv_file'=>'required:png,jpg,jpeg,doc,pdf,docx,zip|max:10000'
        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

               $pv_file=$request->file('pv_file');

                $renametitle1=strtolower(trim($pv_file->getClientOriginalName()));
                $renametitle2=$pv_file->getClientOriginalExtension();
                $renametitle=time().'.'.$renametitle1;


            // $renametitle=time().'.'.$title->getClientOriginalExtension();
            $dest=public_path('/pv');
            $pv_file->move($dest,$renametitle);
            // $values = [
            //      'Pv_traitement'=>$renametitle
            // ];
            $pv_upd = DB::update('UPDATE mgp_process set Pv_traitement=? WHERE  Id = ?', [$renametitle, $request->id_plainte_selected]);

            if($pv_upd){
                return response()->json(['status'=>1, 'msg'=>'PV attaché avec succes']);
                }else{
                    return response()->json(['status'=>0, 'msg'=>'Une erreur sest produite']);
                }
        }

    }


    public function pvHSPlainte(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'pv_file'=>'required:png,jpg,jpeg,doc,pdf,docx,zip|max:10000'
        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

               $pv_file=$request->file('pv_file');

                $renametitle1=strtolower(trim($pv_file->getClientOriginalName()));
                $renametitle2=$pv_file->getClientOriginalExtension();
                $renametitle=time().'.'.$renametitle1;


            // $renametitle=time().'.'.$title->getClientOriginalExtension();
            $dest=public_path('/pv');
            $pv_file->move($dest,$renametitle);
            // $values = [
            //      'Pv_traitement'=>$renametitle
            // ];
            $pv_upd = DB::update('UPDATE mgp_hsensible set Pv_traitement=? WHERE  Id = ?', [$renametitle, $request->id_plainte_selected]);

            if($pv_upd){
                return response()->json(['status'=>1, 'msg'=>'PV attaché avec succes']);
                }else{
                    return response()->json(['status'=>0, 'msg'=>'Une erreur sest produite']);
                }
        }

    }

    public function solutionPlainteHsensible(Request $request)
    {



        $Idpl=$request->Idpl;
        $Proposition_1=$request->Proposition_1;
        $Proposition_2=$request->Proposition_2;
        $Feedback_1=$request->Feedback_1;
        $Feedback_2=$request->Feedback_2;
        $Description_plainte=$request->Description_plainte;
        $Commentaire_operateur=$request->Commentaire_operateur;
        $Date_traitement=$request->Date_traitement;
        $Date_traitement2=$request->Date_traitement2;

        $data_plainte=Mgp_hsensible::find($request->Idpl);

        $IdPlainte = $data_plainte->Id_plainte;
        $Stat = $data_plainte->Id_statut_plainte_end;

        // $data_plainte->Id_type_f=$request->type_new;
        // $data_plainte->Type_plainte=$nom_type;
        // $data_plainte->Id_categorie=$request->categorie_new;
        // $data_plainte->Categorie_plainte=$nom_categorie;
        // $execute = $data_plainte->save();

        if($Stat!=1){
               $solution_upd = DB::update('UPDATE mgp_hsensible set Date_traitement=?, Date_traitement2=?, Proposition_1=?, Proposition_2=?, Feedback_plaingant=?, Feedback_plaignant2=?, Commentaire_operateur=?, Description_plainte=? WHERE  Id = ?', [$Date_traitement, $Date_traitement2, $Proposition_1, $Proposition_2, $Feedback_1, $Feedback_2, $Commentaire_operateur, $Description_plainte, $Idpl]);

               if($solution_upd){
                        $data_feed=Mgp_hsensible::find($request->Idpl);
                        $feed = $data_feed->Feedback_plaingant;

                        if($feed=="satisfait"){
                            $round_upd = DB::update('UPDATE mgp_hsensible set Round_process=? WHERE  Id = ?', [2, $Idpl]);
                        }elseif($feed=="insatisfait"){
                            $round_upd = DB::update('UPDATE mgp_hsensible set Round_process=? WHERE  Id = ?', [3, $Idpl]);
                        }

                     return response()->json(['status'=>1, 'msg'=>'Solution enregistrée avec succes']);
                }else{
                    return response()->json(['status'=>0, 'msg'=>'Une erreur sest produite']);
                }
            }else{
                   return response()->json(['status'=>0, 'msg'=>'Cette plainte est cloturee']);
        }


          //return response()->json($msg);

        // return redirect('show_plainte/'.$IdPlainte)->with('msg','Plainte requalifiee avec succes');

    }


}
