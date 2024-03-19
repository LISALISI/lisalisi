@extends('layouts/master')
@section('title', 'Infrastructures de Base')
@section('content')

<div class="card mb-2 px-3 pt-3 pb-2">

<div class="row">
    <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
    <div class="col-md-10 mb-1"><a  href="javascript:void(0)" onclick="modifierUser()" type="button" class="btn btn-outline-primary" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#div_upd_utilisateur">Update</a> <a href="" type="button" class="btn btn-outline-success">Imprimer</a></div>
</div>
</div>

<div class="card mb-4 px-3 pt-3 pb-2">
    <div class="row mt-2 mb-1">

        <div class="col-md-6 mb-1">
            <div class="p-1 border">
                <div class="form-group">
                    <div class="alert alert-danger text-center" id="usrKoDiv" style="display:none">
                         <p id="retour_usr_ko" class="text-danger"></p>
                    </div>
                    <div class="alert alert-success text-center" id="usrOkDiv" style="display:none">
                        <p id="retour_usr_ok" class="text-success"></p>
                    </div>
                </div>
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Infos perso</span></h4></td></tr>

                    <tr><td>Pr&eacute;nom</td><td>:</td><td><div class="form-outline"><input type="text" id="prenom" class="form-control" placeholder="Pr&eacute;nom" /><span class="text-danger error-text prenom_error"></span></div></td></tr>
                    <tr><td>Nom</td><td>:</td><td><div class="form-outline"><input type="text" id="nom" class="form-control" placeholder="Nom" /> <span class="text-danger error-text nom_error"></span></div></td></tr>
                    <tr><td>E-mail</td><td>:</td><td><div class="form-outline"><input type="email" id="email" class="form-control" placeholder="E-mail" /> <span class="text-danger error-text email_error"></span></div></td></tr>
                    <tr><td>T&eacute;l&eacute;phone</td><td>:</td><td><div class="form-outline"><input type="text" id="telephone" class="form-control" placeholder="T&eacute;l&eacute;phone" /> <span class="text-danger error-text telephone_error"></span></div></td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-6 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Paramètres du compte</span></h4></td></tr>
                    <tr><td>Localisation</td><td>:</td><td><div class="form-outline">
                        <select class="form-control"  name="localisation_usr" id="localisation_usr">
                            @foreach ($data_province as $item4)
                                <option value="{{$item4->nom_province}}">{{$item4->nom_province}} </option>
                            @endforeach
                         </select><span class="text-danger error-text localisation_usr_error"></span>

                    </div></td></tr>
                    <tr><td>Fonction</td><td>:</td><td><div class="form-outline"><input type="text" id="fonction" class="form-control" placeholder="Fonction" /><span class="text-danger error-text fonction_error"></span></div></td></tr>
                    <tr><td>Mot de passe</td><td>:</td><td><div class="form-outline"><input type="text" id="password" class="form-control" placeholder="********" /> <span class="text-danger error-text password_error"></span></div></td></tr>
                    <tr><td>Confirmer Mot de passe</td><td>:</td><td><div class="form-outline"><input type="text" id="password_confirmation" class="form-control" placeholder="********" /> <span class="text-danger error-text password_confirmation_error"></span></div></td></tr>
                    <tr><td></td><td></td><td><div class="form-outline">  <button type="submit" class="btn btn-success btn-sm" id="valide_user" data-mdb-ripple-init>Valider</button>  </div></td></tr>

                </table>
            </div>
         </div>


    </div>
    <div class="row mt-2 mb-1">
        <div class="col-md-6 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Groupes</span></h4></td></tr>
                    <tr><td colspan="3">
                        @if (isset($data_groupe))

                        @foreach ($data_groupe as $item1)
                            {{$item1->nom_groupe}}_{{$item1->nom_localisation}}<br />
                        @endforeach
                        @endif
                    </td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-6 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Ajouter ou Retirer du groupe</span></h4></td></tr>
                    <tr>
                        <td>
                            @if (isset($data_groupe))
                              <select class="form-control"  name="groupe_utilisateur" id="groupe_utilisateur">
                                    @foreach ($data_groupe as $item)
                                        <option value="{{$item->id}}">{{$item->nom_groupe}} -> {{$item->nom_localisation}}</option>
                                    @endforeach
                              </select>
                           @endif
                        </td>
                        <td></td>
                        <td>
                            <div class="form-outline">
                                @if (isset($data_user))
                                <select class="form-control"  name="user" id="user">
                                      @foreach ($data_user as $item)
                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                      @endforeach
                                </select>
                             @endif
                            </div>
                        </td>
                        <td><div class="form-outline"><button type="submit" id="btn-aff" class="btn btn-info btn-sm" data-mdb-ripple-init><i class="fas fa-check"></i></button></div></td>
                    </tr>

                    <tr>
                        <td>
                            @if (isset($data_groupe))
                              <select class="form-control"  name="groupe_utilisateur" id="groupe_utilisateur_retirer">
                                    @foreach ($data_groupe as $item2)
                                        <option value="{{$item2->id}}">{{$item2->nom_groupe}} -> {{$item2->nom_localisation}}</option>
                                    @endforeach
                              </select>
                           @endif
                        </td>
                        <td></td>
                        <td>
                            <div class="form-outline">
                                @if (isset($data_user))
                                <select class="form-control"  name="user" id="user">
                                      @foreach ($data_user as $item3)
                                          <option value="{{$item3->id}}">{{$item3->name}}</option>
                                      @endforeach
                                </select>
                             @endif
                            </div>
                        </td>
                        <td><div class="form-outline"><button type="submit" id="btn-desaff" class="btn btn-danger btn-sm" data-mdb-ripple-init><i class="fas fa-close"></i></button></div></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

		  {{-- <div class="row">
			<div class="col-xl-12 col-sm-12 col-12 mb-1">
				  <div class="d-flex justify-content-center px-md-1">
                  <button type="submit" class="btn btn-success btn-lg" name="executer">Enregistrer Modifications</button>
				  </div>
			</div>
		  </div> --}}

    <!-- <div class="row mt-2 mb-1">
        <div class="col-md-12 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="6"><h4><span class="badge badge-secondary">Evolution Global du Chantier</span></h4></td></tr>
                    <tr><td>Nom_Chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="id" /></div></td></tr>
                    <tr><td></td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="nom_chantier" /></div></td></tr>
                    <tr><td>Domaine</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="domaine" /></div></td></tr>
                    <tr><td>Co&ucirc;t Chantier Initial</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="cout_chantier_init" /></div></td></tr>
                </table>
            </div>
        </div>
    </div> -->
</div>
</div>


@endsection


<div class="modal fade" id="div_upd_utilisateur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Utilisateur</h5>
                    <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form id="form_upd_localite">
                        @csrf
                        <div class="form-group">
                            <div class="alert alert-danger text-center" id="updKoDiv" style="display:none">
                                 <p id="retour_upd_ko" class="text-danger"></p>
                            </div>
                            <div class="alert alert-success text-center" id="updOkDiv" style="display:none">
                                <p id="retour_upd_ok" class="text-success"></p>
                            </div>
                       </div>


                         <div class="col-md-12">

                                    <div class="col-md-12">
                                               <div class="form-label-group">
                                                        <label for="moms">Chercher Utilisateur</label>
                                                        <input type="text" class="form-control" placeholder="nom..." id="nom_user_ch" name="nom_localite_ch" autocomplete="off" >
                                                        <div id="UserList" class="UserList"></div>
                                                        <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark btn-sm" id="search_user"><i class="fas fa-search"></i></button></div>
                                                </div>

                                                <div class="form-label-group">
                                                    <input type="hidden" id="Iduser" name="Iduser" >
                                                    <label for="moms">Nom</label>
                                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                    <input type="text" class="form-control" placeholder="localite nom..." id="nom_user_upd" name="nom_user_upd" autocomplete="off" >

                                                    <span class="text-danger error-text nom_user_upd_error"></span>
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="moms">Email</label>
                                                    <input type="text" class="form-control" placeholder="email..." id="email_upd" name="email_upd" autocomplete="off" >
                                                    <span class="text-danger error-text email_upd_error"></span>
                                                </div>
                                                <div class="form-label-group">
                                                    <label for="moms">Telephone</label>
                                                    <input type="text" class="form-control" placeholder="telephone" id="telephone_upd" name="responsable_upd" autocomplete="off" >
                                                    <span class="text-danger error-text telephone_upd_error"></span>
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="moms">Password</label>
                                                    <input type="text" class="form-control" placeholder="******" id="password_upd" name="responsable_upd" autocomplete="off" >
                                                    <span class="text-danger error-text password_upd_error"></span>
                                                </div>

                                                {{-- <div class="form-label-group">
                                                    <label for="moms">ConfirmerPassword</label>
                                                    <input type="text" class="form-control" placeholder="******" id="password_confirmation_upd" name="responsable_upd" autocomplete="off" >
                                                    <span class="text-danger error-text password_confirmation_upd_error"></span>
                                                </div> --}}

                                                <div class="form-label-group">
                                                    <label for="moms">Localisation</label>
                                                    <select class="form-control"  name="localisation_upd" id="localisation_upd">
                                                        @foreach ($data_province as $item5)
                                                            <option value="{{$item5->nom_province}}">{{$item5->nom_province}} </option>
                                                        @endforeach
                                                     </select>
                                                     <span class="text-danger error-text localisation_upd_error"></span>
                                                </div>
                                                <div class="form-label-group">
                                                    <label for="moms">Fonction</label>
                                                    <input type="text" class="form-control" placeholder="fonction" id="fonction_upd" name="responsable_upd" autocomplete="off" >
                                                    <span class="text-danger error-text fonction_upd_error"></span>
                                                </div>
                                    </div>
                            </div>

                              <div class="modal-footer">
                                <button type="submit" id="btn_upd_usr" class="btn btn-success">Valider</button>
                              </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script>

function modifierUser(){
        $("#div_upd_utilisateur").modal('toggle');
}







$(function(){
    $("#valide_user").on('click', function(e){
        e.preventDefault();
        let prenom = $('#prenom').val();
        let nom = $('#nom').val();
        let email = $('#email').val();
        let telephone = $('#telephone').val();
        let localisation_usr = $('#localisation_usr').val();
        let fonction = $('#fonction').val();
        let password = $('#password').val();
        let password_confirmation = $('#password_confirmation').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            url:"{{route('registers')}}",
            type:'post',
            data:{
                prenom:prenom,
                nom:nom,
                email:email,
                telephone:telephone,
                localisation_usr:localisation_usr,
                fonction:fonction,
                password:password,
                password_confirmation:password_confirmation,
                _token:_token
            },
           // processData:false,
           // dataType:'json',
           // contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },

            success:function(data){
                if(data.status == 0){
                    $('#usrKoDiv').toggle("slide");
                    $("#retour_usr_ko").text(data.msg);
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                  //  $('#second_form')[0].reset();
                    $('#usrOkDiv').toggle("slide");
                    $("#retour_usr_ok").text(data.msg);

                }
            }


        });
    });
});









$(function(){
    $("#btn_upd_usr").on('click', function(e){
        e.preventDefault();
        let Iduser = $('#Iduser').val();
        let nom_user_upd = $('#nom_user_upd').val();
        let email_upd = $('#email_upd').val();
        let telephone_upd = $('#telephone_upd').val();
        let password_upd = $('#password_upd').val();
        // let password_confirmation_upd = $('#password_confirmation_upd').val();
        let localisation_upd = $('#localisation_upd').val();
        let fonction_upd = $('#fonction_upd').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            url:"{{route('user_update')}}",
            type:'post',
            data:{
                Idupd:Iduser,
                nom_user_upd:nom_user_upd,
                email:email_upd,
                telephone_upd:telephone_upd,
                password_upd:password_upd,
                // password_confirmation:password_confirmation_upd,
                localisation_upd:localisation_upd,
                fonction_upd:fonction_upd,
                _token:_token
            },
           // processData:false,
           // dataType:'json',
           // contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },

            success:function(data){
                if(data.status == 0){
                    $('#updKoDiv').toggle("slide");
                    $("#retour_updko").text(data.msg);
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                  //  $('#second_form')[0].reset();
                    $('#updOkDiv').toggle("slide");
                    $("#retour_upd_ok").text(data.msg);

                }
            }


        });
    });
});


$(function(){
    $("#btn-aff").on('click', function(e){
        e.preventDefault();
        let key = 1;
        let user = $('#user').val();
        let groupe_utilisateur = $('#groupe_utilisateur').val();
        let _token = $('input[name=_token]').val();

         $.ajax({
            url:"{{route('affection_set')}}",
            type:'post',
            data:{
                key:key,
                user:user,
                email:email_upd,
                groupe_utilisateur:groupe_utilisateur,
                _token:_token
            }
            ,
            success:function(data){
                if(data.status == 0){
                     alert("Erreur dans l'affectation!")
                }else{
                    alert("Affection réussi!")

                }
            }

         });
    });
});

$(document).ready(function(){

$('#nom_user_ch').keyup(function(){
    var query = $(this).val();

    if(query != '')
    {
        var _token = $('input[name="_token"]').val();
         $.ajax({
            url:"{{ route('autocomplete.fetchUser') }}",
            method:"POST",
            data:{query:query, _token:_token},
            success:function(data){
            $('.UserList').fadeIn();
                $('.UserList').html(data);
            }
        });
    }else{
        $('.UserList').fadeOut();
    }
});

    $(document).on('click', 'li', function(){
        $('#nom_user_ch').val($(this).text());
        $('.UserList').fadeOut();
        var key_nom_groupe_ch = $('#nom_user_ch').val();


    });

});



$(document).ready(function () {
                                    $('#search_user').on('click', function () {
                                        var key_nom_user_ch = $('#nom_user_ch').val();

                                        if(key_nom_user_ch != '')
                                                {
                                                    var _token = $('input[name="_token"]').val();
                                                  $.ajax({
                                                    url:"{{ route('autocomplete.searchUser')  }}",
                                                    method:"POST",
                                                    data:{key_nom_user_ch:key_nom_user_ch, _token:_token},
                                                    success:function(result){
                                                        $.each(result.data_search_user, function (key, value) {

                                                                $("#Iduser").val(value.id);
                                                                $("#nom_user_upd").val(value.name);
                                                                $("#email_upd").val(value.email);
                                                                $("#telephone_upd").val(value.telephone);
                                                                $("#localisation_upd").val(value.localisation);
                                                                $("#fonction_upd").val(value.fonction);
                                                                });
                                                    }
                                                });
                                            }

                                    });

                                });











</script>
