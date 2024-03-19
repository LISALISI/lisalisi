<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Province;
use App\Models\Composante;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\DB;


class ParamController extends Controller
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
    public function viewparam()

    {

        return view('dashboard/param');

      }

    public function viewparamutilisateurs()
    {
        $data_province = Province::orderBy('nom_province','asc')->get();
        $data_groupe = Groupe::orderBy('nom_groupe','asc')->get();
        $data_user = User::orderBy('name','asc')->get();

        return view('dashboard/paramutilisateurs', [
            'data_province' => $data_province,
            'data_groupe' => $data_groupe,
            'data_user' => $data_user
          ]);


    }

    public function viewparamgroupes()

    {
        $data_province = Province::orderBy('nom_province','asc')->get();
        $data_groupe = Groupe::orderBy('nom_groupe','asc')->get();

        return view('dashboard/paramgroupes', [
            'data_province' => $data_province,
            'data_groupe' => $data_groupe
          ]);

    }

    public function viewparamgroupesmodifier($id)
    {


        $data_user = DB::select('select * from users, groupes, affectations where users.id=affectations.id_user and groupes.id=affectations.id_groupe and groupes.id='.$id);

        $data_province = Province::orderBy('nom_province','asc')->get();
        $data_groupe = Groupe::orderBy('nom_groupe','asc')->where('id',$id)->get();

        return view('dashboard/paramgroupesmodifier', [
            'data_province' => $data_province,
            'data_groupe' => $data_groupe,
            'data_user' => $data_user
          ]);

    }

    public function store_groupe(Request $request)

    {

        $validator = Validator::make($request->all(),[
            'nom_groupe'=>'required',
            'nom_localisation'=>'required'
        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $values = [
                 'nom_groupe'=>$request->nom_groupe,
                 'nom_localisation'=>$request->nom_localisation
            ];

            $query = DB::table('groupes')->insert($values);
            if( $query ){
                return response()->json(['status'=>1, 'msg'=>'Enregistrement réussi']);
            }
        }

        // return view('dashboard/paramgroupes', [
        //     'data_province' => $data_province
        //   ]);

    }


    public function update_groupe(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'nom_groupe_upd'=>'required',
            'nom_localisation_upd'=>'required'
        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $values = [
                 'Idgp'=>$request->Idgp,
                 'nom_groupe_upd'=>$request->nom_groupe_upd,
                 'nom_localisation_upd'=>$request->nom_localisation_upd
            ];


            $grp = Groupe::find($request->Idgp);
            $grp->nom_groupe=$request->nom_groupe_upd;
            $grp->nom_localisation=$request->nom_localisation_upd;

            $query = $grp->save();

            if( $query ){
                return response()->json(['status'=>1, 'msg'=>'Modification avec succès']);
            }
        }

    }





    function fetch_groupe(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('groupes')
                ->where('nom_groupe', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->nom_groupe.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    function fetch_localite(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('provinces')
                ->where('nom_province', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->nom_province.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    function search_groupe(Request $request)
    {
        if($request->get('key_nom_groupe_ch'))
        {
            $query = $request->get('key_nom_groupe_ch');
            $data_search_groupe = DB::table('groupes')
                ->where('nom_groupe', '=', $query)
                ->get();
            return response()->json(['data_search_groupe'=>$data_search_groupe]);
        }
    }

    function search_localite(Request $request)
    {
        if($request->get('key_nom_localite_ch'))
        {
            $query = $request->get('key_nom_localite_ch');
            $data_search_localite = DB::table('provinces')
                ->where('nom_province', '=', $query)
                ->get();
            return response()->json(['data_search_localite'=>$data_search_localite]);
        }
    }



    public function liste_groupe()

    {

        $data_groupe = Groupe::orderBy('id','asc')->get();

        $output= "<table class='table'>
            <thead>
            <tr class='text-nowrap'>
            <th></th>
            <th>NomGroupe</th>
            <th>Localisation</th>
            </tr>
            </thead><tbody>";
        foreach($data_groupe as $data_groupe){
                  $output.= "<tr>";
                  $output.= " <td scope='row'>$data_groupe->id</td>";
                  $output.= " <td><table width='100%'><tr><td bgcolor='#efefef'>$data_groupe->nom_groupe</td></tr></table></td>";
                  $output.= " <td><table width='100%'><tr><td bgcolor='#efefef'>$data_groupe->nom_localisation</td></tr></table></td>";
                  $output.= "</tr>";
        }
        $output.= "</tbody>
              </table>";
        return response()->json($output);

    }


    public function filterGroupe(Request $request)
    {
        $query = Groupe::query();

        // $categorie = Categorie::all();



         if($request->ajax()){
              if(empty($request->filter_groupe) and
                 empty($request->filter_localisation)
                ){
                   $data_groupe_filtrer = $query->get();
                }
                    $data_groupe_filtrer = $query->where(['nom_groupe'=>$request->filter_groupe])
                                            ->Where(['nom_localisation'=>$request->filter_localisation])
                                            ->get();

             return response()->json(['data_groupe_filtrer'=>$data_groupe_filtrer]);
          }

    }


    function fetch_user(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('users')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->name.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    function search_user(Request $request)
    {
        if($request->get('key_nom_user_ch'))
        {
            $query = $request->get('key_nom_user_ch');
            $data_search_user = DB::table('users')
                ->where('name', '=', $query)
                ->get();
            return response()->json(['data_search_user'=>$data_search_user]);
        }
    }

    public function viewparamlocalites()
    {
        $data_province = Province::orderBy('nom_province','asc')->get();
        $data_groupe = Groupe::orderBy('nom_groupe','asc')->get();
        $data_composante = Composante::orderBy('nom_composante','asc')->get();

        return view('dashboard/paramlocalites', [
            'data_province' => $data_province,
            'data_groupe' => $data_groupe,
            'data_composante' => $data_composante
          ]);

    }

    public function store_localite(Request $request)

    {

        $validator = Validator::make($request->all(),[
            'nom_province'=>'required',
            'initial'=>'required',
            'responsable'=>''
        ]);
            if(!$validator->passes()){
                return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
                }else{
                $values = [
                    'nom_province'=>$request->nom_province,
                    'initial'=>$request->initial,
                    'responsable'=>$request->responsable
                ];

                $query = DB::table('provinces')->insert($values);
                if( $query ){
                    return response()->json(['status'=>1, 'msg'=>'Enregistrement réussi']);
                }
        }

        // return view('dashboard/paramgroupes', [
        //     'data_province' => $data_province
        //   ]);

    }





    public function modifier_localite(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'Idlocal'=>'required',
            'nom_province_upd'=>'required',
            'initial_upd'=>'',
            'responsable_upd'=>''
        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $values = [
                 'Idlocal'=>$request->Idlocal,
                 'nom_province_upd'=>$request->nom_province_upd,
                 'initial_upd'=>$request->initial_upd,
                 'responsable_upd'=>$request->responsable_upd
            ];


            $prov = Province::find($request->Idlocal);
            $prov->nom_province=$request->nom_province_upd;
            $prov->initial=$request->initial_upd;
            $prov->responsable=$request->responsable_upd;

            $query = $prov->save();

            if( $query ){
                return response()->json(['status'=>1, 'msg'=>'Modification avec succès']);
            }
        }

    }

    public function config_droit(Request $request)
    {

        $validator = Validator::make($request->all(),[
                                'id_dt'=>'',
                                'idb_r'=>'',
                                'idb_w'=>'',
                                'idb_u'=>'',
                                'idb_d'=>'',
                                'cld_r'=>'',
                                'cld_w'=>'',
                                'cld_u'=>'',
                                'cld_d'=>'',
                                'thimo_r'=>'',
                                'thimo_w'=>'',
                                'thimo_u'=>'',
                                'thimo_d'=>'',
                                'tmi_r'=>'',
                                'tmi_w'=>'',
                                'tmi_u'=>'',
                                'tmi_d'=>'',
                                'cerc_r'=>'',
                                'cerc_w'=>'',
                                'cerc_u'=>'',
                                'cerc_d'=>'',
                                'medac_r'=>'',
                                'medac_w'=>'',
                                'medac_u'=>'',
                                'medac_d'=>'',
                                'mgp_r'=>'',
                                'mgp_w'=>'',
                                'mgp_u'=>'',
                                'mgp_d'=>'',
                                'analyse_r'=>'',
                                'analyse_w'=>'',
                                'analyse_u'=>'',
                                'analyse_d'=>'',
                                'mgp_hs_r'=>'',
                                'mgp_hs_w'=>'',
                                'mgp_hs_u'=>'',
                                'mgp_hs_d'=>''
                         ]);
             if(!$validator->passes()){
                 return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
             }else{

                        $groupe_droit = Groupe::find($request->id_dt);
                        $groupe_droit->idb_r=$request->idb_r;
                        $groupe_droit->idb_w=$request->idb_w;
                        $groupe_droit->idb_u=$request->idb_u;
                        $groupe_droit->idb_d=$request->idb_d;

                        $groupe_droit->cld_r=$request->cld_r;
                        $groupe_droit->cld_w=$request->cld_w;
                        $groupe_droit->cld_u=$request->cld_u;
                        $groupe_droit->cld_d=$request->cld_d;

                        $groupe_droit->thimo_r=$request->thimo_r;
                        $groupe_droit->thimo_w=$request->thimo_w;
                        $groupe_droit->thimo_u=$request->thimo_u;
                        $groupe_droit->thimo_d=$request->thimo_d;

                        $groupe_droit->tmi_r=$request->tmi_r;
                        $groupe_droit->tmi_w=$request->tmi_w;
                        $groupe_droit->tmi_u=$request->tmi_u;
                        $groupe_droit->tmi_d=$request->tmi_d;

                        $groupe_droit->cerc_r=$request->cerc_r;
                        $groupe_droit->cerc_w=$request->cerc_w;
                        $groupe_droit->cerc_u=$request->cerc_u;
                        $groupe_droit->cerc_d=$request->cerc_d;

                        $groupe_droit->medac_r=$request->medac_r;
                        $groupe_droit->medac_w=$request->medac_w;
                        $groupe_droit->medac_u=$request->medac_u;
                        $groupe_droit->medac_d=$request->medac_d;

                        $groupe_droit->mgp_r=$request->mgp_r;
                        $groupe_droit->mgp_w=$request->mgp_w;
                        $groupe_droit->mgp_u=$request->mgp_u;
                        $groupe_droit->mgp_d=$request->mgp_d;

                        $groupe_droit->analyse_r=$request->analyse_r;
                        $groupe_droit->analyse_w=$request->analyse_w;
                        $groupe_droit->analyse_u=$request->analyse_u;
                        $groupe_droit->analyse_d=$request->analyse_d;

                        $groupe_droit->mgp_hs_r=$request->mgp_hs_r;
                        $groupe_droit->mgp_hs_w=$request->mgp_hs_w;
                        $groupe_droit->mgp_hs_u=$request->mgp_hs_u;
                        $groupe_droit->mgp_hs_d=$request->mgp_hs_d;

                        $query = $groupe_droit->save();

                    if( $query ){
                        return response()->json(['status'=>1, 'msg'=>'Modification avec succès']);
                    }
              }

         }

    public function view_import_mgp()
    {
        return view('dashboard/import_mgp_data');
    }


    //search user by ID
    function desactiverUserInGroupe($id)
    {

        if($id)
        {

            $StatutSelect = DB::select("SELECT stat FROM affectations WHERE id=".$id);

            foreach($StatutSelect as $StatutSelect){
                $StatutSelected = $StatutSelect->stat;
            }


            if($StatutSelected==0){

              $StatUpd = DB::update('UPDATE affectations set stat = ? WHERE  id = ?', [1 , $id]);

            }elseif($StatutSelected==1){

               $StatUpd = DB::update('UPDATE affectations set stat = ? WHERE  id = ?', [0 , $id]);

            }


            // return redirect('paramgroupesmodifier/'.$id);
            return redirect()->back();
        }
    }

}
