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
                  <table width="100%" border="1">
                    <colgroup width="80" span="12"></colgroup>
                        <tr class="text-nowrap">
                            <td><div class="bono1 p-1 text-center fw-bold bggris">Groupe</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">Loc.</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">IDB</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">CLD</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">THIMO</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">TMI</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">CERC</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">MEDAC</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">MGP</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bggris">Analy.</div></td>
                            <td><div class="bono1 p-1 text-center fw-bold bgora1">MGP-HS</div></td>
                            <td></td>
                        </tr>

                        @php($num = 0)

                        @if (isset($data_groupe))
                        @foreach ($data_groupe as $item3)

                        <tr>

                            @csrf

                            <input class="form-check-input" type="hidden" value="{{$item3->id}}" id="id_dt" disabled />
                            <td valign="middle"><div class="bono1 fw-bold p-1 text-center text-white bg-dark">{{$item3->nom_groupe}}</div></td>
                            <td valign="middle"><div class="bono1 fw-bold p-1 text-center bgblu1">{{$item3->nom_localisation}}</div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="idb_r" @if($item3->idb_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="idb_w" @if($item3->idb_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="idb_u" @if($item3->idb_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="idb_d" @if($item3->idb_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cld_r" @if($item3->cld_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cld_w" @if($item3->cld_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cld_u" @if($item3->cld_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cld_d" @if($item3->cld_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="thimo_r" @if($item3->thimo_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="thimo_w" @if($item3->thimo_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="thimo_u" @if($item3->thimo_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="thimo_d" @if($item3->thimo_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="tmi_r" @if($item3->tmi_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="tmi_w" @if($item3->tmi_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="tmi_u" @if($item3->tmi_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="tmi_d" @if($item3->tmi_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cerc_r" @if($item3->cerc_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cerc_w" @if($item3->cerc_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cerc_u" @if($item3->cerc_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="cerc_d" @if($item3->cerc_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="medac_r" @if($item3->medac_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="medac_w" @if($item3->medac_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="medac_u" @if($item3->medac_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="medac_d" @if($item3->medac_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_r" @if($item3->mgp_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_w" @if($item3->mgp_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_u" @if($item3->mgp_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_d" @if($item3->mgp_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="analyse_r" @if($item3->analyse_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="analyse_w" @if($item3->analyse_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="analyse_u" @if($item3->analyse_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="analyse_d" @if($item3->analyse_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_hs_r" @if($item3->mgp_hs_r==1) checked @endif /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_hs_w" @if($item3->mgp_hs_w==1) checked @endif /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_hs_u" @if($item3->mgp_hs_u==1) checked @endif /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" id="mgp_hs_d" @if($item3->mgp_hs_d==1) checked @endif /></td></tr></table></div></td>
                            <td align="center"><button type="button" class="btn btn-sm btn-success" id="btn_dt" data-dismiss="modal" aria-label="Close">Valider</button></td>

                        </tr>

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
        {{-- <div class="row">
            <div class="col-md-3 mb-1">
                <input type="text" required id="filter_groupe" name="filter_groupe" class="form-control filter_groupe" placeholder="Nom du groupe" />
                <div id="groupeList" class="groupeList"></div>
            </div>
            <div class="col-md-1 mb-1"><button type="button" id="btn_search_grp" class="btn btn-dark" data-mdb-ripple-init><i class="fas fa-magnifying-glass"></i></button></div>
        </div> --}}
    </div>

</div>
</div>


              <!-- Responsive Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Noms</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Fonction</th>
                        <th>Localit&eacute;</th>
                        <th>Statut</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                            @php($num = 0)

                             @if (isset($data_user))
                                    @foreach ($data_user as $item4)
                                        <tr>
                                            <th scope="row">{{$num = $num+1}}</th>
                                            <td><table width="100%"><tr><td bgcolor="#efefef">{{$item4->name}}</td></tr></table></td>
                                            <td><table width="100%"><tr><td bgcolor="#efefef">{{$item4->email}}</td></tr></table></td>
                                            <td><table width="100%"><tr><td bgcolor="#efefef">{{$item4->telephone}}</td></tr></table></td>
                                            <td><table width="100%"><tr><td bgcolor="#efefef">{{$item4->fonction}}</td></tr></table></td>
                                            <td><table width="100%"><tr><td bgcolor="#efefef">{{$item4->localisation}}</td></tr></table></td>
                                            <td><table width="100%"><tr><td bgcolor="#efefef">@if ($item4->stat==1)Actif @else Inactif @endif</td></tr></table></td>
                                            <td><a href="{{url('desactiver_user/'.$item4->id)}}" onclick="return confirm('Etes-vous sûr de vouloir activer ou desactiver cet utilisateur?')" class="form-control btn-sm btn-danger" title="DesactiverOrActiverUser">@if ($item4->stat==0) Activer @else Desactiver @endif </a></td>
                                        </tr>
                                    @endforeach
                             @endif

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
                $("#btn_dt").on('click',function(){
                    var id_dt = $("#id_dt").val();

                    if(document.getElementById('idb_r').checked == true){ var idb_r = 1; } else{ var idb_r =0; }
                    if(document.getElementById('idb_w').checked == true){ var idb_w = 1; } else{ var idb_w =0; }
                    if(document.getElementById('idb_u').checked == true){ var idb_u = 1; } else{ var idb_u =0; }
                    if(document.getElementById('idb_d').checked == true){ var idb_d = 1; } else{ var idb_d =0; }

                    if(document.getElementById('cld_r').checked == true){ var cld_r = 1; } else{ var cld_r =0; }
                    if(document.getElementById('cld_w').checked == true){ var cld_w = 1; } else{ var cld_w =0; }
                    if(document.getElementById('cld_u').checked == true){ var cld_u = 1; } else{ var cld_u =0; }
                    if(document.getElementById('cld_d').checked == true){ var cld_d = 1; } else{ var cld_d =0; }

                    if(document.getElementById('thimo_r').checked == true){ var thimo_r = 1; } else{ var thimo_r =0; }
                    if(document.getElementById('thimo_w').checked == true){ var thimo_w = 1; } else{ var thimo_w =0; }
                    if(document.getElementById('thimo_u').checked == true){ var thimo_u = 1; } else{ var thimo_u =0; }
                    if(document.getElementById('thimo_d').checked == true){ var thimo_d = 1; } else{ var thimo_d =0; }

                    if(document.getElementById('tmi_r').checked == true){ var tmi_r = 1; } else{ var tmi_r =0; }
                    if(document.getElementById('tmi_w').checked == true){ var tmi_w = 1; } else{ var tmi_w =0; }
                    if(document.getElementById('tmi_u').checked == true){ var tmi_u = 1; } else{ var tmi_u =0; }
                    if(document.getElementById('tmi_d').checked == true){ var tmi_d = 1; } else{ var tmi_d =0; }

                    if(document.getElementById('cerc_r').checked == true){ var cerc_r = 1; } else{ var cerc_r =0; }
                    if(document.getElementById('cerc_w').checked == true){ var cerc_w = 1; } else{ var cerc_w =0; }
                    if(document.getElementById('cerc_u').checked == true){ var cerc_u = 1; } else{ var cerc_u =0; }
                    if(document.getElementById('cerc_d').checked == true){ var cerc_d = 1; } else{ var cerc_d =0; }

                    if(document.getElementById('medac_r').checked == true){ var medac_r = 1; } else{ var medac_r =0; }
                    if(document.getElementById('medac_w').checked == true){ var medac_w = 1; } else{ var medac_w =0; }
                    if(document.getElementById('medac_u').checked == true){ var medac_u = 1; } else{ var medac_u =0; }
                    if(document.getElementById('medac_d').checked == true){ var medac_d = 1; } else{ var medac_d =0; }

                    if(document.getElementById('mgp_r').checked == true){ var mgp_r = 1; } else{ var mgp_r =0; }
                    if(document.getElementById('mgp_w').checked == true){ var mgp_w = 1; } else{ var mgp_w =0; }
                    if(document.getElementById('mgp_u').checked == true){ var mgp_u = 1; } else{ var mgp_u =0; }
                    if(document.getElementById('mgp_d').checked == true){ var mgp_d = 1; } else{ var mgp_d =0; }

                    if(document.getElementById('analyse_r').checked == true){ var analyse_r = 1; } else{ var analyse_r =0; }
                    if(document.getElementById('analyse_w').checked == true){ var analyse_w = 1; } else{ var analyse_w =0; }
                    if(document.getElementById('analyse_u').checked == true){ var analyse_u = 1; } else{ var analyse_u =0; }
                    if(document.getElementById('analyse_d').checked == true){ var analyse_d = 1; } else{ var analyse_d =0; }

                    if(document.getElementById('mgp_hs_r').checked == true){ var mgp_hs_r = 1; } else{ var mgp_hs_r =0; }
                    if(document.getElementById('mgp_hs_w').checked == true){ var mgp_hs_w = 1; } else{ var mgp_hs_w =0; }
                    if(document.getElementById('mgp_hs_u').checked == true){ var mgp_hs_u = 1; } else{ var mgp_hs_u =0; }
                    if(document.getElementById('mgp_hs_d').checked == true){ var mgp_hs_d = 1; } else{ var mgp_hs_d =0; }

                    var _token = _token;


                        $.ajax({
                            url:"{{ route('config_groupe_droit')}}",
                            type:"get",
                            data:{
                                'id_dt':id_dt,
                                'idb_r':idb_r,
                                'idb_w':idb_w,
                                'idb_u':idb_u,
                                'idb_d':idb_d,
                                'cld_r':cld_r,
                                'cld_w':cld_w,
                                'cld_u':cld_u,
                                'cld_d':cld_d,
                                'thimo_r':thimo_r,
                                'thimo_w':thimo_w,
                                'thimo_u':thimo_u,
                                'thimo_d':thimo_d,
                                'tmi_r':tmi_r,
                                'tmi_w':tmi_w,
                                'tmi_u':tmi_u,
                                'tmi_d':tmi_d,
                                'cerc_r':cerc_r,
                                'cerc_w':cerc_w,
                                'cerc_u':cerc_u,
                                'cerc_d':cerc_d,
                                'medac_r':medac_r,
                                'medac_w':medac_w,
                                'medac_u':medac_u,
                                'medac_d':medac_d,
                                'mgp_r':mgp_r,
                                'mgp_w':mgp_w,
                                'mgp_u':mgp_u,
                                'mgp_d':mgp_d,
                                'analyse_r':analyse_r,
                                'analyse_w':analyse_w,
                                'analyse_u':analyse_u,
                                'analyse_d':analyse_d,
                                'mgp_hs_r':mgp_hs_r,
                                'mgp_hs_w':mgp_hs_w,
                                'mgp_hs_u':mgp_hs_u,
                                'mgp_hs_d':mgp_hs_d,
                                _token:_token
                            },
                            success:function(data){

                                if(data.status == 0){
                                    alert('Validatin a échoué!')
                                }else{
                                    alert('Validatin a réussi avec succès!')
                                }

                            }

                        })
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



// $(document).ready(function(){

// $('#nom_groupe_ch').keyup(function(){
//     var query = $(this).val();

//     if(query != '')
//     {
//         var _token = $('input[name="_token"]').val();
//          $.ajax({
//             url:"{{ route('autocomplete.fetchGroupe') }}",
//             method:"POST",
//             data:{query:query, _token:_token},
//             success:function(data){
//             $('.GroupeList').fadeIn();
//                 $('.GroupeList').html(data);
//             }
//         });
//     }else{
//         $('.GroupeList').fadeOut();
//     }
// });

// $(document).on('click', 'li', function(){
//     $('#nom_groupe_ch').val($(this).text());
//     $('.GroupeList').fadeOut();
//     var key_nom_groupe_ch = $('#nom_groupe_ch').val();


// });

// });



// $(document).ready(function(){

// $('.filter_groupe').keyup(function(){
//         var query = $(this).val();

//         if(query != '')
//         {
//             var _token = $('input[name="_token"]').val();
//             var key_search ="nom_groupe";
//             var table_name ="groupes";
//             $.ajax({
//                 url:"{{ route('autocomplete_recherche') }}",
//                 method:"POST",
//                 data:{
//                     keyId:query,
//                     key_search:key_search,
//                     table_name:table_name,
//                     _token:_token},
//                 success:function(data){
//                 $('.groupeList').fadeIn();
//                     $('.groupeList').html(data);
//                 }
//             });
//         }else{
//             $('.groupeList').fadeOut();
//         }
//     });

//     $(document).on('click', 'li', function(){
//         $('.filter_groupe').val($(this).text());
//         $('.groupeList').fadeOut();
//         var key_searchTicket = $('.searchGroupe').val();

//     });

// });








$(document).ready(function(){
				$("#btn_search_grp").on('click',function(){
                    var filter_groupe = $("#filter_groupe").val();
                    var valueSearch = "nom_groupe";
                    var tableName = "groupes";
                    var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url:"{{ route('valid_autocomplete_recherche')}}",
                            type:"POST",
                            data:{
                                'keyupId':filter_groupe,
                                'valueSearch':valueSearch,
                                'tableName':tableName,
                                _token:_token
                            },
                            success:function(data){
                            var data_groupe_filtrer = data.data_searched;
                            var html = '';

                            if(data_groupe_filtrer.length >0){
                                for(let i=0; i<data_groupe_filtrer.length;i++){
                                html +='<tr>\
                                                <td>'+(i+1)+'</td>\
                                                <td><div class="border p-1 text-center">'+data_groupe_filtrer[i]['nom_groupe']+'</div></td>\
                                                <td><div class="border p-1 text-center">'+data_groupe_filtrer[i]['nom_localisation']+'</div></td>\
                                                <td>\
                                                   <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                     <tr><td align="center">\
                                                        <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                            <input class="form-check-input" type="checkbox" value="" id=""    disabled /></td><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id=""   disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id=""    disabled /></td></tr></table>\
                                                </td>\
                                                <td>\
                                                    <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                        <tr><td align="center">\
                                                            <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id=""   disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id=""   disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value=""  id=""  disabled /></td></tr></table>\
                                                 </td>\
                                                 <td>\
                                                        <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                            <tr><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table>\
                                                    </td>\
                                                    <td>\
                                                        <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                            <tr><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id=""  disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table>\
                                                    </td>\
                                                    <td>\
                                                        <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                            <tr><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table>\
                                                    </td>\
                                                    <td>\
                                                        <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                            <tr><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id=""   disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id=""  disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id=""  disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id=""  disabled /></td></tr></table>\
                                                    </td>\
                                                    <td>\
                                                            <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                                <tr><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id=""  disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                                <input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table>\
                                                    </td>\
                                                    <td>\
                                                        <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                            <tr><td align="center">\
                                                                <input class="form-check-input" type="checkbox" value="" id="" @if($item3->analyse_r==1) checked @endif disabled /></td><td align="center">\
                                                                    <input class="form-check-input" type="checkbox" value="" id="" @if($item3->analyse_w==1) checked @endif disabled /></td><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id="" @if($item3->analyse_u==1) checked @endif disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id="" @if($item3->analyse_d==1) checked @endif disabled /></td></tr></table></td>\
                                                        <td>\
                                                                <table width="100%"><tr><td>&nbsp;R</td><td>&nbsp;W</td><td>&nbsp;U</td><td>&nbsp;D</td></tr>\
                                                                    <tr><td align="center">\
                                                                        <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                            <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                                <input class="form-check-input" type="checkbox" value="" id="" disabled /></td><td align="center">\
                                                                                    <input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table>\
                                                        </td>\
                                                        <td>\
                                                            <a href="paramgroupesmodifier/'+data_groupe_filtrer[i]['id']+'" type="button" class="btn btn-sm btn-danger">Modifier</a>\
                                                        </td>\
                                       </tr>';
                                }
                            }else{
                                html +='<tr>\
                                <td>Aucun Groupe</td>\
                                </tr>';
                            }
                            $("tbody").html(html);
                            }

                        })
				})

			})












</script>




