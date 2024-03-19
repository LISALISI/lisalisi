<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Affectation;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Validator;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $data_user = User::orderBy('id','desc')->get();
        $data_role = T_role::orderBy('id','asc')->get();
        return view('gestion_users.users', ['data_user' => $data_user, 'data_role' => $data_role]);
        // return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */




    //  public function store(Request $request): RedirectResponse
     public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'prenom' => ['required', 'string'],
            'nom' => ['required', 'string'],
            'telephone' => ['required'],
            'localisation_usr' => ['required'],
            'fonction' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
            }else{
                    $values = [
                        'name' => $request->prenom.' '.$request->nom,
                        'telephone' => $request->telephone,
                        'localisation' => $request->localisation_usr,
                        'fonction' => $request->fonction,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ];

                    $query = DB::table('users')->insert($values);
                    if( $query ){
                        return response()->json(['status'=>1, 'msg'=>'Enregistrement réussi']);
                    }
            }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom_user_upd' => ['required', 'string'],
            'telephone_upd' => ['required'],
            'localisation_upd' => ['required'],
            'fonction_upd' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password_upd' => ['required', Rules\Password::defaults()],
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
            }else{
                    // $values = [
                    //     'name' => $request->nom_user_upd,
                    //     'telephone' => $request->telephone_upd,
                    //     'localisation' => $request->localisation_upd,
                    //     'fonction' => $request->fonction_upd,
                    //     'email' => $request->email_upd,
                    //     'password' => Hash::make($request->password_upd),
                    // ];

                    $query = User::find($request->Idupd);
                    $query->name=$request->nom_user_upd;
                    $query->telephone=$request->telephone_upd;
                    $query->localisation=$request->localisation_upd;
                    $query->fonction=$request->fonction_upd;
                    $query->email=$request->email;
                    $query->password=Hash::make($request->password_upd);
                    $query = $query->save();

                    // $query = DB::table('users')->insert($values);
                    if( $query ){
                        return response()->json(['status'=>1, 'msg'=>'Modification réussi']);
                    }
            }
    }

    public function store_affection(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'id_user' => ['required'],
            'id_groupe' => ['required']
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
            }else{
                    $values = [
                        'id_user' => $request->id_user,
                        'id_groupe' => $request->id_groupe
                    ];

                    $query = DB::table('affectations')->insert($values);
                    if( $query ){
                        return response()->json(['status'=>1, 'msg'=>'Affectation réussi']);
                    }
            }
    }


    public function update_affectation(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id_user' => ['required'],
            'id_groupe' => ['required']
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
            }else{
                    $values = [
                        'id_user' => $request->id_user,
                        'id_groupe' => $request->id_groupe
                    ];

                    $query = DB::update('UPDATE affectations set stat = 0 WHERE  id_user ='.$request->id_user.'
                                         AND id_groupe='.$request->id_groupe);
                    ;
                    if( $query ){
                        return response()->json(['status'=>1, 'msg'=>'Affectation annulée']);
                    }
            }
    }



}
