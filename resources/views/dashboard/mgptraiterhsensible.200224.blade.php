@extends('layouts/master')
@section('title', 'Infrastructures de Base')
@section('content')



@if (isset($data_plainte_selected))
            @foreach ($data_plainte_selected as $plainte_selected)

              <div class="card mb-2 px-3 pt-3 pb-2">
                <div class="row">
                    <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
                        <div class="col-md-7 mb-1">
                            <a href="{{url('oriente_plainte_hsensible/'.$plainte_selected->Id)}}" onclick="return confirm('Etes-vous sûr de vouloir orienter ou annuler?')" class="btn btn-outline-primary" title="Orienter plainte">
                                @if ($plainte_selected->Orienter==0)
                                Orienter @else Annuler @endif
                             </a>
                             <a href="javascript:void(0)" onclick="requalifierPlainte({{$plainte_selected->Id}})" type="button" class="btn btn-outline-primary" title="Requalifier plainte" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#div_requalifier_plainte">Requalifier</a>
                             <a href="javascript:void(0)" onclick="solutionPlainte({{$plainte_selected->Id}})" type="button" class="btn btn-outline-primary" title="Solution plainte" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#div_solution_plainte">Solution</a>
                             <a href="{{url('cloturer_plainte_hsensible/'.$plainte_selected->Id)}}" onclick="return confirm('Etes-vous sûr de vouloir clôturer ?')" class="btn btn-outline-primary" title="Cl&ocirc;turer plainte">Cl&ocirc;turer</a>
                        </div>

                     <div class="col-md-2 mb-1">
                        <input type="text" required id="searchTicket" name="searchTicket" class="form-control searchTicket" placeholder="Ticket" />
                        <div id="ticketList" class="ticketList"></div>
                     </div>
                    <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark" id="search_ticket"><i class="fas fa-search"></i></button></div>
                </div>
              </div>

        <div class="row">
        <div class="col-xl-12 col-sm-12 col-12 mb-4">
        <div class="card">
        <div class="card-header py-3"><h6 class="mb-0"><strong>Traitements plaintes</strong></h6></div>
        <div class="card-body">


            <?php
                    $var_back_color_1 ="badge-outline-dark";
                    $var_back_grise_1 ="";
                    $color_1 ="text-dark";

                    $var_back_color_2 ="badge-outline-dark";
                    $var_back_grise_2 ="";
                    $color_2 ="text-dark";

                    $var_back_color_3 ="badge-outline-dark";
                    $var_back_grise_3 ="";
                    $color_3 ="text-dark";

                    $var_back_color_4 ="badge-outline-dark";
                    $var_back_grise_4 ="";
                    $color_4 ="text-dark";

                    $var_back_color_5 ="badge-outline-dark";
                    $var_back_grise_5 ="";
                    $color_5 ="text-dark";

                    $var_back_color_6 ="badge-outline-dark";
                    $var_back_grise_6 ="";
                    $color_6 ="text-dark";

                    $var_back_color_7 ="badge-outline-dark";
                    $var_back_grise_7 ="";
                    $color_7 ="text-dark";

                    $var_back_color_8 ="badge-outline-dark";
                    $var_back_grise_8 ="";
                    $color_8 ="text-dark";

                if ($plainte_selected->Id_statut_plainte_end==4 and
                    $plainte_selected->Proposition_1=="" and
                    $plainte_selected->Round_process==1 and
                    $plainte_selected->Feedback_plaingant==""
                ) {
                    $var_back_color_1 ="badge-dark";
                    $var_back_grise_1 ="";
                    $color_1 ="";

                    $var_back_grise_2 ="bggris";
                    $var_back_grise_3 ="bggris";
                    $var_back_grise_4 ="bggris";
                    $var_back_grise_5 ="bggris";
                    $var_back_grise_6 ="bggris";


                }elseif($plainte_selected->Statut_plainte_end=="En_attente" and
                        $plainte_selected->Proposition_1=="" and
                        $plainte_selected->Round_process==1 and
                        $plainte_selected->Feedback_plaingant==""
                    ){
                    $var_back_color_2 ="badge-dark";
                    $var_back_grise_2 ="";
                    $color_2 ="";

                    $var_back_grise_1 ="bggris";
                    $var_back_grise_3 ="bggris";
                    $var_back_grise_4 ="bggris";
                    $var_back_grise_5 ="bggris";
                    $var_back_grise_6 ="bggris";

                }elseif($plainte_selected->Statut_plainte_end!="Encours" and
                        $plainte_selected->Proposition_1=="" and
                        $plainte_selected->Round_process==1 and
                        $plainte_selected->Feedback_plaingant==""
                    ){
                    $var_back_color_3 ="badge-dark";
                    $var_back_grise_3 ="";
                    $color_3 ="";

                    $var_back_grise_1 ="bggris";
                    $var_back_grise_2 ="bggris";
                    $var_back_grise_4 ="bggris";
                    $var_back_grise_5 ="bggris";
                    $var_back_grise_6 ="bggris";

                }elseif($plainte_selected->Feedback_plaingant!="" and
                        $plainte_selected->Proposition_1!="" and
                        $plainte_selected->Statut_plainte_end!="cloture" and
                        $plainte_selected->Round_process==2
                    ){
                    $var_back_color_4 ="badge-dark";
                    $var_back_grise_4 ="";
                    $color_4 ="";

                    $var_back_grise_1 ="bggris";
                    $var_back_grise_2 ="bggris";
                    $var_back_grise_3 ="bggris";
                    $var_back_grise_5 ="bggris";
                    $var_back_grise_6 ="bggris";

                }elseif($plainte_selected->Proposition_1!="" and
                        $plainte_selected->Feedback_plaingant=="insatisfait" and
                        $plainte_selected->Statut_plainte_end!="cloture" and
                        $plainte_selected->Round_process==3
                    ){
                    $var_back_color_5 ="badge-dark";
                    $var_back_grise_5 ="";
                    $color_5 ="";

                    $var_back_grise_1 ="bggris";
                    $var_back_grise_2 ="bggris";
                    $var_back_grise_3 ="bggris";
                    $var_back_grise_4 ="bggris";
                    $var_back_grise_6 ="bggris";

                }elseif($plainte_selected->Statut_plainte_end=="cloture" and
                        ($plainte_selected->Feedback_plaingant!="" or
                        $plainte_selected->Feedback_plaignant2!="") and
                        $plainte_selected->Proposition_1!=""
                        ){
                    $var_back_color_6 ="badge-dark";
                    $var_back_grise_6 ="";
                    $color_6 ="";

                    $var_back_grise_1 ="bggris";
                    $var_back_grise_2 ="bggris";
                    $var_back_grise_3 ="bggris";
                    $var_back_grise_4 ="bggris";
                    $var_back_grise_5 ="bggris";

                }

                if($plainte_selected->Orienter==0)
                    {
                    $var_back_color_7 ="badge-warning";
                    $var_back_grise_7 ="";

                    $var_back_color_8 ="";
                    $var_back_grise_8 ="bggris";

                }

                elseif($plainte_selected->Orienter==1)
                    {
                        $var_back_color_7 ="";
                        $var_back_grise_7 ="bggris";

                        $var_back_color_8 ="badge-warning";
                        $var_back_grise_8 ="";
                }
            ?>

     <div class="mb-3 px-3 pt-3 rounded border">
         <div class="mb-3"><span class="p-2 border rounded text-white bg-info"><strong>WORKFLOW</strong></span></div>
         <div class="row">
            <div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
                 <h6 class="w-100"><span class="badge w-100 p-2 border rounded {{$var_back_color_1}} {{$color_1}} {{$var_back_grise_1}}">1. Ouvert</span></h6>
            </div>
            <div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
                <h6 class="w-100"><span class="badge w-100 p-2 border rounded {{$var_back_color_2}} {{$color_2}} {{$var_back_grise_2}}">2. Observation</span></h6>
            </div>
            <div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
              <h6 class="w-100"><span class="badge w-100 p-2 border rounded {{$var_back_color_3}} {{$color_3}} {{$var_back_grise_3}}">3. En charge</span> <br> <span class="badge w-100 p-2 border rounded {{$var_back_color_7}} {{$color_7}} {{$var_back_grise_7}}">CLGP</span> <span class="badge w-100 p-2 border rounded {{$var_back_color_8}} {{$color_8}} {{$var_back_grise_8}}">CNGP</span></h6>
            </div>
            <div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
                <h6 class="w-100"><span class="badge w-100 p-2 border rounded {{$var_back_color_4}} {{$color_4}} {{$var_back_grise_4}}">4. R&eacute;ponse</span></h6>
            </div>
            <div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
                <h6 class="w-100"><span class="badge w-100 p-2 border rounded {{$var_back_color_5}} {{$color_5}} {{$var_back_grise_5}}">5. Round</span></h6>
            </div>
            <div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
                <h6 class="w-100"><span class="badge w-100 p-2 border rounded {{$var_back_color_6}} {{$color_6}} {{$var_back_grise_6}}">6. Cl&ocirc;tur&eacute;e</span></h6>
            </div>
         </div>
     </div>







                <div class="mb-3 px-3 pt-3 border rounded">
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 col-12 mb-1">
                            <div class="d-flex justify-content-between px-md-1">
                             <table cellspacing="0" cellpadding="0" border="0">
                               @if ($plainte_selected->Nom_prenom_plaignant)
                                <tr><td>Noms</td><td width="10"></td><td><input id="noms" class="border bg-light p-1 noms" name="noms" type="text" disabled value="{{$plainte_selected->Nom_prenom_plaignant}}"> </td></tr>
                               @endif

                                <tr><td height="5" colspan="3"></td></tr>
                                @if ($plainte_selected->Sexe)
                                <tr><td>Sexe</td><td width="10"></td><td> <input id="sexe" class="border bg-light p-1 sexe" name="sexe" type="text" disabled value="{{$plainte_selected->Sexe}}"></td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                @if ($plainte_selected->Benef_yes_No_Question)
                                <tr><td>Beneficiaire?</td><td width="10"></td><td><input id="benef_oui_non" class="border bg-light p-1 benef_oui_non" name="benef_oui_non" type="text" disabled value="{{$plainte_selected->Benef_yes_No_Question}}"> </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                @if ($plainte_selected->Phone_or_id_identification)
                                <tr><td>ID/Phone</td><td width="10"></td><td> <input id="phone_or_ident" class="border bg-light p-1 phone_or_ident" name="phone_or_ident" type="text" disabled value="{{$plainte_selected->Phone_or_id_identification}}"> </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                @if ($plainte_selected->Composante)
                                <tr><td>Composante</td><td width="10"></td><td><input id="composante" class="border bg-light p-1 composante" name="composante" type="text" disabled value="{{$plainte_selected->Composante}}"> </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                              </table>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 col-12 mb-1">
                            <div class="d-flex justify-content-between px-md-1">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    @if ($plainte_selected->Localisation_incident)
                                    <tr><td>Lieu Incident</td><td width="10"></td><td><input id="lieu_inc" class="border bg-light p-1 lieu_inc" name="lieu_inc" type="text" disabled value="{{$plainte_selected->Localisation_incident}}"> </div></td></tr>
                                    @endif

                                    <tr><td height="5" colspan="3"></td></tr>
                                    @if ($plainte_selected->Date_incident)
                                    <tr><td>Date Incident</td><td width="10"></td><td><input id="date_inc" class="border bg-light p-1 date_inc" name="date_inc" type="text" disabled value="{{ date('d-m-Y', strtotime($plainte_selected->Date_incident))}}">  </td></tr>
                                    @endif
                                    <tr><td height="5" colspan="3"></td></tr>
                                    @if ($plainte_selected->Start_encodage)
                                    <tr><td>Date Plainte</td><td width="10"></td><td> <input id="date_pl" class="border bg-light p-1 date_pl" name="date_pl" type="text" disabled value="{{ date('d-m-Y', strtotime($plainte_selected->Start_encodage))}}"> </td></tr>
                                    @endif
                                    <tr><td height="5" colspan="3"></td></tr>
                                    @if ($plainte_selected->Province)
                                    <tr><td>Province</td><td width="10"></td><td><input id="province" class="border bg-light p-1 province" name="province" type="text" disabled value="{{$plainte_selected->Province}}"></td></tr>
                                    @endif
                                    <tr><td height="5" colspan="3"></td></tr>
                                    @if ($plainte_selected->Personne_impliquee)
                                    <tr><td>Implication</td><td width="10"></td><td><input id="personne_impl" class="border bg-light p-1 personne_impl" name="personne_impl" type="text" disabled value="{{$plainte_selected->Personne_impliquee}}"> </td></tr>
                                    @endif
                                    <tr><td height="5" colspan="3"></td></tr>

                                </table>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 col-12 mb-1">
                            <div class="d-flex justify-content-between px-md-1">
                              <table cellspacing="0" cellpadding="0" border="0">
                                @if ($plainte_selected->Ticket)
                                <tr><td>Num&nbsp;Ticket</td><td width="10"></td><td><input id="ticket" class="border bg-light p-1 ticket" name="ticket" type="text" disabled value="{{$plainte_selected->Ticket}}"> </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                @if ($plainte_selected->Categorie_plainte)
                                <tr><td>Cat&eacute;gorie</td><td width="10"></td><td><input id="categorie_pl" class="border bg-light p-1 categorie_pl" name="categorie_pl" type="text" disabled value="{{$plainte_selected->Categorie_plainte}}"> </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                @if ($plainte_selected->Operateur)
                                <tr><td>Operateur</td><td width="10"></td><td><input id="operateur" class="border bg-light p-1 operateur" name="operateur" type="text" disabled value="{{$plainte_selected->Operateur}}"> </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>

                                @if ($plainte_selected->Date_traitement)
                                <tr><td>DateTraitement</td><td width="10"></td><td><input id="date_traitement" class="border bg-light p-1 date_traitement" name="date_traitement" type="text" disabled value="{{ date('d-m-Y', strtotime($plainte_selected->Date_traitement))}}">  </td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                <?php
                                    $var_color ="";
                                    $var_roundproc =$plainte_selected->Round_process;
                                    if ($var_roundproc==2) {
                                        $var_color ="background-color: rgb(6, 168, 6)";
                                    }elseif($var_roundproc==3){
                                        $var_color ="background-color: rgb(210, 52, 8)";
                                    }
                                ?>
                                @if ($plainte_selected->Round_process)

                                <tr><td>SLA</td><td width="10"></td><td valign="top"><span class="badge rounded-pill badge-light m-1 p-2" style="{{$var_color}}"> </span>&nbsp;&nbsp;<span class="p-2 border text-white bg-success"><strong>OK</strong></span> &nbsp;&nbsp; <span class="p-2 border text-white bg-danger"><strong>KO</strong></span></td></tr>
                                @endif
                                <tr><td height="5" colspan="3"></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="mb-1">
                            <div class="p-3 border rounded">

                        <div class="row mb-3">
                            <div class="col-md-3 mb-1"><span class="p-2 border rounded text-white bg-info"><strong>Type / Description </strong></span></div>
                            <div class="col-md-9 mb-1"><div class="border bg-light p-2"><strong><textarea name="type_pl" class="type_pl" cols="26" rows="3" title="Type de la plainte" disabled> {{$plainte_selected->Type_plainte}}</textarea> <textarea name="description_pl" class="description_pl" cols="26" rows="3" title="description de la plainte" disabled> {{$plainte_selected->Description_plainte}}</textarea> <textarea name="commentaire_op" class="commentaire_op" cols="26" rows="3" title="Commentaire de loperateur" disabled> {{$plainte_selected->Commentaire_operateur}}</textarea>  </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-1"><span class="p-2 border rounded text-white bg-info"><strong>Solutions</strong></span></div>
                        </div>
                          @if ($plainte_selected->Proposition_1)
                            <div class="row mb-3">
                            <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-primary"><strong>R1</strong></span></div><div class="col-md-4 mb-1"><div class="border bg-light p-2"><strong><textarea name="proposition_1" class="proposition_1" cols="30" rows="3" disabled> {{$plainte_selected->Proposition_1}}</textarea>   </strong></div></div>
                            <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-success"><strong>R&eacute;sultat 1</strong></span></div><div class="col-md-4 mb-1"><div class="border bg-light p-2"><strong><input type="text" name="fplaignant" id="fplaignant" value="{{$plainte_selected->Feedback_plaingant}}" disabled> </strong></div></div>
                            </div>
                           @endif
                           @if ($plainte_selected->Proposition_2)
                                <div class="row">
                                    <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-primary"><strong>R2</strong></span></div><div class="col-md-4 mb-1"><div class="border bg-light p-2"><strong><textarea name="proposition_2" class="proposition_2" cols="30" rows="3" disabled> {{$plainte_selected->Proposition_2}}</textarea></strong></div></div>
                                    <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-success"><strong>R&eacute;sultat 2</strong></span></div><div class="col-md-4 mb-1"><div class="border bg-light p-2"><strong><input type="text" name="fplaignant_2" id="fplaignant_2" value="{{$plainte_selected->Feedback_plaignant2}}" disabled> </strong></div></div>
                                </div>
                           @endif
                            </div>
                        </div>
                    </div>

            @endforeach


            <div class="modal fade" id="div_solution_plainte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Solution Plainte</h5>
                                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">

                             <form id="form_solution_plainte">
                                    @csrf
                                    <div class="form-group">
                                            <div class="alert alert-danger text-center" id="RepmsgKoDiv" style="display:none">
                                                 <p id="solution_msg_ko" class="text-danger"></p>
                                            </div>
                                            <div class="alert alert-success text-center" id="RepmsgOkDiv" style="display:none">
                                                <p id="solution_msg_ok" class="text-success"></p>
                                            </div>
                                    </div>
                                <div class="row">

                                           <div class="col-md-12">

                                                <div class="col-md-12">
                                                            <div class="form-label-group">
                                                                    <input type="hidden" id="Idpl" name="Idpl" >
                                                                    <label for="moms">Description</label>
                                                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                                    <textarea class="form-control" placeholder="..." id="Description_plainte" name="Description_plainte" autocomplete="off" cols="10" rows="3"></textarea>
                                                                    <span class="text-danger error-text Description_plainte_error"></span>
                                                            </div>
                                                            <div class="form-label-group">
                                                                 <label for="moms">Commentaire du CGP</label>
                                                                 <textarea class="form-control" placeholder="..." id="Commentaire_operateur" name="Commentaire_operateur" autocomplete="off" cols="10" rows="3"></textarea>
                                                                <span class="text-danger error-text Commentaire_operateur_error"></span>
                                                           </div>


                                                            <div class="form-label-group">
                                                                <label for="moms">Proposition 1</label>
                                                                <textarea class="form-control" placeholder="..." id="Proposition_1" name="Proposition_1" autocomplete="off" cols="10" rows="3"></textarea>
                                                                <span class="text-danger error-text Proposition_1_error"></span>
                                                            </div>
                                                            <div class="form-label-group">
                                                                 <label for="moms">FeedBack</label>
                                                                    <select class="form-control" id="Feedback_1" name="Feedback_1">
                                                                        <option value="satisfait">Satisfait</option>
                                                                        <option value="insatisfait">Insatisfait</option>
                                                                    </select>
                                                                  <span class="text-danger error-text Feedback_1_error"></span>
                                                             </div>
                                                              <div class="form-label-group">
                                                                    <label for="moms">Date traitement </label>
                                                                    <input type="date" class="form-control" id="Date_traitement" name="Date_traitement" >
                                                                    <span class="text-danger error-text Date_traitement_error"></span>
                                                              </div>

                                                            @if (isset($data_plainte_selected))
                                                                             @foreach ($data_plainte_selected as $feedback_selected)

                                                                                @if ($feedback_selected->Feedback_plaingant =="insatisfait")

                                                                                    <div class="form-label-group">
                                                                                        <label for="moms">Proposition 2</label>
                                                                                        <textarea class="form-control" placeholder="..." id="Proposition_2" name="Proposition_2" autocomplete="off" cols="10" rows="3"></textarea>
                                                                                        <span class="text-danger error-text Proposition_2_error"></span>
                                                                                    </div>
                                                                                    <div class="form-label-group">
                                                                                        <label for="moms">FeedBack</label>
                                                                                            <select class="form-control" id="Feedback_2" name="Feedback_2">
                                                                                                <option value="satisfait">Satisfait</option>
                                                                                                <option value="insatisfait">Insatisfait</option>
                                                                                            </select>
                                                                                        <span class="text-danger error-text Feedback_2_error"></span>
                                                                                    </div>

                                                                                    <div class="form-label-group">
                                                                                        <label for="moms">Date traitement 2 </label>
                                                                                        <input type="date" class="form-control" id="Date_traitement2" name="Date_traitement2" >
                                                                                        <span class="text-danger error-text Date_traitement2_error"></span>
                                                                                    </div>
                                                                                @endif

                                                                              @endforeach
                                                            @endif

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

@endif







        <div class="modal fade" id="div_requalifier_plainte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Requalifier Plainte</h5>
                            <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">

                        <form id="form_requalifier_plainte">
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
                                                                <label for="moms">Ticket</label>
                                                                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                                <input type="text" class="form-control" placeholder="nom..." id="Ticket" name="Ticket" autocomplete="off" disabled>

                                                                <span class="text-danger error-text titre_error"></span>
                                                        </div>
                                                        <div class="form-label-group">

                                                             <input type="text" class="form-control" placeholder="nom..." id="Categorie" name="Categorie" autocomplete="off" disabled>
                                                             <span class="text-danger error-text titre_error"></span>
                                                        </div>
                                                        <div class="form-label-group">

                                                            <textarea class="form-control" id="Type" name="Type" disabled> </textarea>
                                                            <span class="text-danger error-text titre_error"></span>
                                                        </div>

                                                       <div class="form-label-group">
                                                            <label for="moms">Nouvelle Catégorie</label>
                                                            <select class="form-control" name="categorie_new" id="categorie_new">
                                                                <option value="">Catégorie</option>
                                                                    @if ($data_categorie)
                                                                        @foreach ($data_categorie as $categorie_new)
                                                                            <option value="{{$categorie_new->id}}">{{$categorie_new->nom_categorie}}</option>
                                                                        @endforeach
                                                                    @endif
                                                            </select>
                                                            <span class="text-danger error-text new_categorie_error"></span>
                                                       </div>
                                                        <div class="form-label-group">
                                                            <label for="moms">Nouveau Type</label>
                                                            <select class="form-control" name="type_new" id="type_new">
                                                                <option value="">Choix type</option>
                                                            </select>
                                                            <span class="text-danger error-text type_new_error"></span>
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

                $('.searchTicket').keyup(function(){
                    var query = $(this).val();

                    if(query != '')
                    {
                        var _token = $('input[name="_token"]').val();
                         $.ajax({
                            url:"{{ route('autocomplete.fetchTicketHsensible') }}",
                            method:"POST",
                            data:{query:query, _token:_token},
                            success:function(data){
                            $('.ticketList').fadeIn();
                                $('.ticketList').html(data);
                            }
                        });
                    }else{
                        $('.ticketList').fadeOut();
                    }
                });

                $(document).on('click', 'li', function(){
                    $('.searchTicket').val($(this).text());
                    $('.ticketList').fadeOut();
                    var key_searchTicket = $('.searchTicket').val();

                    // $("#set1").val(key_searchTicket);

                });

            });




            $(document).ready(function () {
/*------------------------------------------
--------------------------------------------
auto fill search result
--------------------------------------------
--------------------------------------------*/
            $("#btnContextuel").attr("disabled", true);
            $('#search_ticket').on('click', function () {
            var ticketId = $('.searchTicket').val();
            //$('.btnContextuel').disabled = true ;

            if(ticketId != '')
                    {
                        var _token = $('input[name="_token"]').val();
                         $.ajax({
                            url:"{{ route('autocomplete.searchTicketHsensible') }}",
                            method:"POST",
                            data:{ticketId:ticketId, _token:_token},
                            success:function(result){

                                $.each(result.data_search_ticket, function (key, value) {

                                    $(".type_pl").val(value.Type_plainte);
                                    $(".description_pl").val(value.Description_plainte);
                                    $(".proposition_1").val(value.Proposition_1);
                                    $(".fplaignant").val(value.Feedback_plaingant);
                                    $(".proposition_2").val(value.Proposition_2);
                                    $(".fplaignant_2").val(value.Feedback_plaignant2);
                                    $(".ticket").val(value.Ticket);
                                    $(".categorie_pl").val(value.Categorie_plainte);
                                    $(".operateur").val(value.Operateur);
                                    $(".date_traitement").val(value.Date_traitement);
                                    $(".lieu_inc").val(value.Localisation_incident);
                                    $(".date_inc").val(value.Date_incident);
                                    $(".date_pl").val(value.Start_encodage);
                                    $(".province").val(value.Province);
                                    $(".personne_impl").val(value.Personne_impliquee);
                                    $(".noms").val(value.Nom_prenom_plaignant);
                                    $(".sexe").val(value.Sexe);
                                    $(".benef_oui_non").val(value.Benef_yes_No_Question);
                                    $(".phone_or_ident").val(value.Phone_or_id_identification);
                                    $(".composante").val(value.Composante);
                                    $(".commentaire_op").val(value.Commentaire_operateur);
                                    });



                            }
                        });
                    }

            });



            });

        //this function call the id plainte in a form
            function requalifierPlainte(Id){
                $.get('/requalifier_plainte_hsensible/'+Id, function(selectPlainteById){
                    $("#Id").val(selectPlainteById.Id);
                    $("#Ticket").val(selectPlainteById.Ticket);
                    $("#Categorie").val(selectPlainteById.Categorie_plainte);
                    $("#Type").val(selectPlainteById.Type_plainte);
                    $("#div_requalifier_plainte").modal('toggle');
                });
            }



             //this function call the id plainte in a form
             function solutionPlainte(Id){
                $.get('/requalifier_plainte_hsensible/'+Id, function(selectPlainteById){
                    $("#Idpl").val(selectPlainteById.Id);
                    $("#Proposition_1").val(selectPlainteById.Proposition_1);
                    $("#Proposition_2").val(selectPlainteById.Proposition_2);
                    $("#Feedback_1").val(selectPlainteById.Feedback_plaingant);
                    $("#Feedback_2").val(selectPlainteById.Feedback_plaignant2);
                    $("#Description_plainte").val(selectPlainteById.Description_plainte);
                    $("#Commentaire_operateur").val(selectPlainteById.Commentaire_operateur);
                    $("#div_solution_plainte").modal('toggle');
                });
            }





            $(document).ready(function () {
                        /*------------------------------------------
                        Country Dropdown Change Event
                        --------------------------------------------*/
                        $('#categorie_new').on('change', function () {
                        var categorieId = this.value;

                        $("#type_new").html('');
                        $.ajax({
                            url: "{{url('api/fetch-type')}}",
                            type: "POST",
                            data: {
                                id_categorie: categorieId,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            success: function (result) {
                                $('#type_new').html('<option value="">-- Choix Type --</option>');
                                $.each(result.type, function (key, value) {
                                    $("#type_new").append('<option value="' + value
                                        .id + '">' + value.nom_type + '</option>');
                                });
                            //   $('#city-dropdown').html('<option value="">-- Select City --</option>');
                            }
                      });
                  });
                });





    $(function(){
    $("#form_requalifier_plainte").on('submit', function(e){
        e.preventDefault();
        let Id = $('#Id').val();
        let categorie_new = $('#categorie_new').val();
        let type_new = $('#type_new').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{url('upd_requalifier_plainte_hsensible')}}",
            type:'post',
            data:{
                Id:Id,
                categorie_new:categorie_new,
                type_new:type_new,
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
    $("#form_solution_plainte").on('submit', function(e){
        e.preventDefault();
        let Idpl = $('#Idpl').val();
        let Proposition_1 = $('#Proposition_1').val();
        let Feedback_1 = $('#Feedback_1').val();
        let Proposition_2 = $('#Proposition_2').val();
        let Feedback_2 = $('#Feedback_2').val();
        let Description_plainte = $('#Description_plainte').val();
        let Commentaire_operateur = $('#Commentaire_operateur').val();
        let Date_traitement = $('#Date_traitement').val();
        let Date_traitement2 = $('#Date_traitement2').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{url('upd_solution_plainte_hsensible')}}",
            type:'post',
            data:{
                Idpl:Idpl,
                Proposition_1:Proposition_1,
                Feedback_1:Feedback_1,
                Proposition_2:Proposition_2,
                Feedback_2:Feedback_2,
                Description_plainte:Description_plainte,
                Commentaire_operateur:Commentaire_operateur,
                Date_traitement:Date_traitement,
                Date_traitement2:Date_traitement2,
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
                    $('#RepmsgKoDiv').toggle("slide");
                    $("#solution_msg_ko").text(data.msg);
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                  //  $('#second_form')[0].reset();
                    $('#RepmsgOkDiv').toggle("slide");
                    $("#solution_msg_ok").text(data.msg);

                }
            }


        });
    });
});

 </script>







@endsection
