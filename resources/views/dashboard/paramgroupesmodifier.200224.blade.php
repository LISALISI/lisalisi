@extends('layouts/master')
@section('title', 'Parametre')
@section('content')

<div class="card mb-2 px-3 pt-3 pb-2">
    <div class="row">
        <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
        <div class="col-md-10 mb-1"><a href="{{url('paramgroupes')}}" type="button" class="btn btn-outline-primary">Liste Groupes</a> <a href="javascript:void(0)" onclick="appelerGroupe()" class="btn btn-outline-success" title="Creer groupe" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#div_groupe">Nouveau Groupe</a></div>
    </div>
</div>

              <!-- Responsive Table -->
              <div class="card p-3 mb-2">
                <div class="table-responsive-lg text-nowrap">
                  <table width="100%">
                    <colgroup width="80" span="12"></colgroup>
                    <tr class="text-nowrap">
                        <th><div class="p-1 text-center bggris">Groupes</div></th>
                        <th><div class="p-1 text-center bggris">Loc.</div></th>
                        <th><div class="p-1 text-center bggris">IDB</div></th>
                        <th><div class="p-1 text-center bggris">CLD</div></th>
                        <th><div class="p-1 text-center bggris">THIMO</div></th>
                        <th><div class="p-1 text-center bggris">TMI</div></th>
                        <th><div class="p-1 text-center bggris">CERC</div></th>
                        <th><div class="p-1 text-center bggris">MEDAC</div></th>
                        <th><div class="p-1 text-center bggris">MGP</div></th>
                        <th><div class="p-1 text-center bggris">Analy.</div></th>
                        <th><div class="p-1 text-center bg-warning">Hsens</div></th>
                        <th></th>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                      @php($num = 0)
                      @if (isset($data_groupe))
                        @foreach ($data_groupe as $item3)
                      <tr id={{$item3->id}}>
                        <td valign="middle"><div class="border p-1 text-center">{{$item3->nom_groupe}}</div></td>
                        <td valign="middle"><div class="border p-1 text-center">{{$item3->nom_localisation}}</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_r" @if($item3->idb_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_w" @if($item3->idb_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_u" @if($item3->idb_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_d" @if($item3->idb_d==1) checked @endif /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_r" @if($item3->cld_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_w" @if($item3->cld_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_u" @if($item3->cld_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_d" @if($item3->cld_d==1) checked @endif /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_r" @if($item3->thimo_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_w" @if($item3->thimo_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_u" @if($item3->thimo_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_d" @if($item3->thimo_d==1) checked @endif /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_r" @if($item3->tmi_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_w" @if($item3->tmi_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_u" @if($item3->tmi_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_d" @if($item3->tmi_d==1) checked @endif /></td></tr></table></td>
                        <td align="center"><button class="btn btn-sm btn-success" id="btn_check" value="{{$item3->id}}">Valider</button></td>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                        @endforeach
                      @endif
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->

<div class="card mb-4 px-3 pt-3 pb-2">
<div class="row">
    <div class="col-md-3 mb-1"><div class="m-1">Membres du groupe</div></div>
    <div class="col-md-8 mb-1">
        <div class="row">
            <div class="col-md-2 mb-1"><select class="form-control" name="" id=""><option value="">Groupe</option></select></div>
            <div class="col-md-2 mb-1"><select class="form-control" name="" id=""><option value="">Localit&eacute;</option></select></div>
            <div class="col-md-8 mb-1"></div>
        </div>
    </div>
    <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark" data-mdb-ripple-init><i class="fas fa-magnifying-glass"></i></button></div>
</div>
</div>


              <!-- Responsive Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Pr&eacute;nom</th>
                        <th>Nom</th>
                        <th>Postnom</th>
                        <th>Fonction</th>
                        <th>Localit&eacute;</th>
                        <th>Composante</th>
                        <th>Statut</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><button class="btn btn-sm btn-info">Modifier</button></td><td><button class="btn btn-sm btn-danger">Supprimer</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><button class="btn btn-sm btn-info">Modifier</button></td><td><button class="btn btn-sm btn-danger">Supprimer</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><button class="btn btn-sm btn-info">Modifier</button></td><td><button class="btn btn-sm btn-danger">Supprimer</button></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><button class="btn btn-sm btn-info">Modifier</button></td><td><button class="btn btn-sm btn-danger">Supprimer</button></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><button class="btn btn-sm btn-info">Modifier</button></td><td><button class="btn btn-sm btn-danger">Supprimer</button></td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><table width="100%"><tr><td bgcolor="#efefef"><br /></td></tr></table></td>
                        <td><button class="btn btn-sm btn-info">Modifier</button></td><td><button class="btn btn-sm btn-danger">Supprimer</button></td>
                      </tr>


                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->



              <div class="modal fade" id="div_groupe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cr&eacute;er un groupe</h5>
                                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">

                            <form id="form_groupe">
                                    @csrf
                                    <div class="form-group">
                                            <div class="alert alert-danger text-center" id="msgKoDiv" style="display:none">
                                                 <p id="retour_msg_ko" class="text-danger"></p>
                                            </div>
                                            <div class="alert alert-success text-center" id="msgOkDiv" style="display:none">
                                                <p id="retour_msg_ok" class="text-success"></p>
                                            </div>
                                    </div>
                                <div class="row">

                                        <div class="col-md-12">

                                                <div class="col-md-12">
                                                            <div class="form-label-group">
                                                                    <input type="hidden" id="Id" name="Id" >
                                                                    <label for="moms">Groupe Nom</label>
                                                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                                    <input type="text" class="form-control" placeholder="groupe nom..." id="nom_groupe" name="nom_groupe" autocomplete="off" >

                                                                    <span class="text-danger error-text nom_groupe_error"></span>
                                                            </div>

                                                           <div class="form-label-group">
                                                                <label for="moms">Localisation</label>
                                                                <select class="form-control" name="nom_localisation" id="nom_localisation">
                                                                    <option value="">Province</option>
                                                                        @if ($data_province)
                                                                            @foreach ($data_province as $prov)
                                                                                <option value="{{$prov->nom_province}}">{{$prov->nom_province}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                </select>
                                                                <span class="text-danger error-text nom_province_error"></span>
                                                           </div>
                                                </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" id="btn_addpc" class="btn btn-success">Cr&eacute;er</button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>








@endsection

        <div class="modal fade" id="div_groupe_liste" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Liste Groupe</h5>
                            <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">

                        <div class="card">
                            <div class="table-responsive text-nowrap" id="table_groupe">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="div_upd_groupe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier Groupe</h5>
                            <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">

                        <form id="form_upd_groupe">
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
                                                                <label for="moms">Chercher Groupe</label>
                                                                <input type="text" class="form-control" placeholder="groupe nom..." id="nom_groupe_ch" name="nom_groupe_ch" autocomplete="off" >
                                                                <div id="GroupeList" class="GroupeList"></div>
                                                                <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark" id="search_groupe"><i class="fas fa-search"></i></button></div>
                                                        </div>

                                                        <div class="form-label-group">
                                                            <input type="hidden" id="Idgp" name="Idgp" >
                                                            <label for="moms">Groupe Nom</label>
                                                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                            <input type="text" class="form-control" placeholder="groupe nom..." id="nom_groupe_upd" name="nom_groupe_upd" autocomplete="off" >

                                                            <span class="text-danger error-text nom_groupe_upd_error"></span>
                                                        </div>

                                                       <div class="form-label-group">
                                                            <label for="moms">Localisation</label>
                                                            <select class="form-control" name="nom_localisation_upd" id="nom_localisation_upd">
                                                                <option value="">Province</option>
                                                                    @if ($data_province)
                                                                        @foreach ($data_province as $province)
                                                                            <option value="{{$province->nom_province}}">{{$province->nom_province}}</option>
                                                                        @endforeach
                                                                    @endif
                                                            </select>
                                                            <span class="text-danger error-text nom_province_upd_error"></span>
                                                         </div>
                                            </div>
                                    </div>

                                      <div class="modal-footer">
                                        <button type="submit" id="btn_addgp" class="btn btn-success">Valider</button>
                                      </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="div_check_groupe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Groupe</h5>
                            <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">

                        <form id="form_groupe">
                                @csrf
                                    <div class="form-group">
                                                    <div class="alert alert-danger text-center" id="msgKoDiv" style="display:none">
                                                        <p id="retour_msg_ko" class="text-danger"></p>
                                                    </div>
                                                    <div class="alert alert-success text-center" id="msgOkDiv" style="display:none">
                                                        <p id="retour_msg_ok" class="text-success"></p>
                                                    </div>
                                    </div>


                                    <div class="col-md-12">
                                                <div class="col-md-12">
                                                            <div class="form-label-group">
                                                                    <input type="hidden" id="Id" name="Id" >
                                                                    <label for="moms">Groupe Nom</label>
                                                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                                    <input type="text" class="form-control" placeholder="groupe nom..." id="nom_groupe" name="nom_groupe" autocomplete="off" >

                                                                    <span class="text-danger error-text nom_groupe_error"></span>
                                                            </div>
                                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" id="btn_addpc" class="btn btn-success">Valider</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
      $(document).ready(function(){
                $("#valider_check").on('click',function(){
                    var key_id = $("#id_dt").val();

                    // var idb_r = $("#idb_r").val();
                    // var idb_w = $("#idb_w").val();
                    // var idb_u = $("#idb_u").val();
                    // var idb_d = $("#idb_d").val();
                    // var cld_r = $("#cld_r").val();
                    // var cld_w = $("#cld_w").val();
                    // var cld_u = $("#cld_u").val();
                    // var cld_d = $("#cld_d").val();
                    // var thimo_r = $("#thimo_r").val();
                    // var thimo_w = $("#thimo_w").val();
                    // var thimo_u = $("#thimo_u").val();
                    // var thimo_d = $("#thimo_d").val();
                    // var tmi_r = $("#tmi_r").val();
                    // var tmi_w = $("#tmi_w").val();
                    // var tmi_u = $("#tmi_u").val();
                    // var tmi_d = $("#tmi_d").val();
                    // var cerc_r = $("#cerc_r").val();
                    // var cerc_w = $("#cerc_w").val();
                    // var cerc_u = $("#cerc_u").val();
                    // var cerc_d = $("#cerc_d").val();
                    // var medac_r = $("#medac_r").val();
                    // var medac_w = $("#medac_w").val();
                    // var medac_u = $("#medac_u").val();
                    // var medac_d = $("#medac_d").val();
                    // var mgp_r = $("#mgp_r").val();
                    // var mgp_w = $("#mgp_w").val();
                    // var mgp_u = $("#mgp_u").val();
                    // var mgp_d = $("#mgp_d").val();
                    // var analyse_r = $("#analyse_r").val();
                    // var analyse_w = $("#analyse_w").val();
                    // var analyse_u = $("#analyse_u").val();
                    // var analyse_d = $("#analyse_d").val();
                    var _token = _token;
                    // if(idb_r.is(':checked');){idb_r = 1}else{idb_r = 0}
                    // }

                       alert(key_id)

                        // $.ajax({
                        //     url:"{{ route('filter_groupe_droit')}}",
                        //     type:"GET",
                        //     data:{
                        //         'filter_groupe':filter_groupe,
                        //         'filter_localisation':filter_localisation,
                        //         _token:_token
                        //     },
                        //     success:function(data){
                        //     var data_groupe_filtrer = data.data_groupe_filtrer;
                        //     var html = '';

                        //     if(data_groupe_filtrer.length >0){
                        //         for(let i=0; i<data_groupe_filtrer.length;i++){
                        //         html +='<tr>\
                        //                 <td>'+(i+1)+'</td>\
                        //                 <td>'+data_groupe_filtrer[i]['Ticket']+'</td>\
                        //                 <td>'+data_groupe_filtrer[i]['Nom_prenom_plaignant']+'</td>\
                        //                 <td>'+data_groupe_filtrer[i]['Village_quartier']+'</td>\
                        //                 <td>'+data_groupe_filtrer[i]['Composante']+'</td>\
                        //                 <td>'+data_groupe_filtrer[i]['Date_incident']+'</td>\
                        //                 <td><a class="btn btn-sm btn-info" style="cursor: pointer;" href="show_plainte/'+data_plainte_filtrer[i]['Id_plainte']+'">Afficher</a></td><td><a class="btn btn-sm btn-warning" style="cursor: pointer;" href="treat_plainte/'+data_plainte_filtrer[i]['Id_plainte']+'">Traiter</a></td>\
                        //                 </tr>';
                        //         }
                        //     }else{
                        //         html +='<tr>\
                        //         <td>Aucune plainte trouvée</td>\
                        //         </tr>';
                        //     }
                        //     $("tbody").html(html);
                        //     }

                        // })
                })

            })
   </script>
<script>


function checkDroit(){
        $("#div_check_groupe").modal('toggle');
}
function appelerGroupe(){
        $("#div_groupe").modal('toggle');
}

function modifierGroupe(){
        $("#div_upd_groupe").modal('toggle');
}

function listerGroupe(){
                $.get('/lister_groupe', function(output){
                  $("#table_groupe").html(output);
                  //$('#type_new').html('<option value="">-- Choix Type --</option>');
                    $("#div_groupe_liste").modal('toggle');
                });
            }




$(function(){
    $("#form_groupe").on('submit', function(e){
        e.preventDefault();
        let Id = $('#Id').val();
        let nom_groupe = $('#nom_groupe').val();
        let nom_localisation = $('#nom_localisation').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{url('parametre_insert_groupe')}}",
            type:'post',
            data:{
                Id:Id,
                nom_groupe:nom_groupe,
                nom_localisation:nom_localisation,
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
                    $('#msgKoDiv').toggle("slide");
                    $("#retour_msg_ko").text(data.msg);
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                  //  $('#second_form')[0].reset();
                    $('#msgOkDiv').toggle("slide");
                    $("#retour_msg_ok").text(data.msg);

                }
            }


        });
    });
});



$(function(){
    $("#form_upd_groupe").on('submit', function(e){
        e.preventDefault();
        let Idgp = $('#Idgp').val();
        let nom_groupe_upd = $('#nom_groupe_upd').val();
        let nom_localisation_upd = $('#nom_localisation_upd').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{url('parametre_upd_groupe')}}",
            type:'post',
            data:{
                Idgp:Idgp,
                nom_groupe_upd:nom_groupe_upd,
                nom_localisation_upd:nom_localisation_upd,
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
                    $("#retour_upd_ko").text(data.msg);
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



$(document).ready(function(){

$('#nom_groupe_ch').keyup(function(){
    var query = $(this).val();

    if(query != '')
    {
        var _token = $('input[name="_token"]').val();
         $.ajax({
            url:"{{ route('autocomplete.fetchGroupe') }}",
            method:"POST",
            data:{query:query, _token:_token},
            success:function(data){
            $('.GroupeList').fadeIn();
                $('.GroupeList').html(data);
            }
        });
    }else{
        $('.GroupeList').fadeOut();
    }
});

$(document).on('click', 'li', function(){
    $('#nom_groupe_ch').val($(this).text());
    $('.GroupeList').fadeOut();
    var key_nom_groupe_ch = $('#nom_groupe_ch').val();


});

});




$(document).ready(function () {
                                    $('#search_groupe').on('click', function () {
                                    var key_nom_groupe_ch = $('#nom_groupe_ch').val();

                                    if(key_nom_groupe_ch != '')
                                            {
                                                var _token = $('input[name="_token"]').val();
                                                $.ajax({
                                                    url:"{{ route('autocomplete.searchGroupe')  }}",
                                                    method:"POST",
                                                    data:{key_nom_groupe_ch:key_nom_groupe_ch, _token:_token},
                                                    success:function(result){
                                                        $.each(result.data_search_groupe, function (key, value) {

                                                                $("#Idgp").val(value.id);
                                                                $("#nom_groupe_upd").val(value.nom_groupe);
                                                                $("#nom_localisation_upd").val(value.nom_localisation);
                                                                });

                                                    }
                                                });
                                            }

                                    });

                                });














</script>




