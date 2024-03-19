@extends('layouts/master')
@section('title', 'Infrastructures de Base')
@section('content')



@if (isset($data_plainte_selected))
            @foreach ($data_plainte_selected as $plainte_selected)

              <div class="card mb-2 px-3 pt-3 pb-2">
                <div class="row">
                    <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
                        <div class="col-md-7 mb-1">
                            {{-- <a href="{{url('oriente_plainte/'.$plainte_selected->Id)}}" onclick="return confirm('Etes-vous sûr de vouloir orienter ou annuler?')" class="btn-sm btn-outline-primary" title="Orienter plainte">
                                @if ($plainte_selected->Orienter==0)
                                Orienter @else Annuler @endif
                             </a>
                             <a href="javascript:void(0)" onclick="requalifierPlainte({{$plainte_selected->Id}})" class="btn-sm btn-outline-primary" title="Requalifier plainte">Requalifier</a>
                             <a href="javascript:void(0)" onclick="solutionPlainte({{$plainte_selected->Id}})" class="btn-sm btn-outline-primary" title="Solution plainte">Solution</a>
                             <a href="javascript:void(0)" onclick="solutionPlainte({{$plainte_selected->Id}})" class="btn-sm btn-outline-primary" title="Cl&ocirc;turer plainte">Cl&ocirc;turer</a> --}}
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
        <div class="card-header py-3"><h6 class="mb-0"><strong>Affichage plainte</strong></h6></div>
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

             <div class="mb-3 p-3 rounded border">
                 <div class="mb-3"><h4><span class="badge badge-primary">WORKFLOW</span></h4></div>
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

                <div class="mb-3 p-3 border rounded">
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
                <div class="mb-3 p-3 border rounded">
                            <table>
                                <tr><td><h4><span class="badge badge-primary">Type / Description</span></h4></td></tr>
                                <tr><td><h5><span class="badge badge-secondary">Type</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Type_plainte}}</td></tr>
                                <tr><td><h5><span class="badge badge-secondary">Description</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Description_plainte}}</td></tr>
                                <tr><td><h5><span class="badge badge-secondary">Commentaire de l'op&eacute;rateur</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Commentaire_operateur}}</td></tr>
                            </table>
                </div>
                <div class="mb-3 p-3 border rounded">
                        <div class="row mb-3">
                            <div class="col-md-12 mb-1"><h4><span class="badge badge-primary">Solutions</span></h4></div>
                        </div>
                          @if ($plainte_selected->Proposition_1)
                            <table>
                                <tr><td><h5><span class="badge badge-secondary">R&eacute;ponse 1</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Proposition_1}}</td></tr>
                                <tr><td><h5><span class="badge badge-secondary">R&eacute;sultat 1</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Feedback_plaingant}}</td></tr>
                            </table>
                           @endif
                           @if ($plainte_selected->Proposition_2)
                           <table>
                                <tr><td><h5><span class="badge badge-secondary">R&eacute;ponse 2</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Proposition_1}}</td></tr>
                                <tr><td><h5><span class="badge badge-secondary">R&eacute;sultat 2</span></h5></td></tr>
                                <tr><td>{{$plainte_selected->Feedback_plaingant}}</td></tr>
                            </table>
                           @endif
                </div>
            </div>

            @endforeach

@endif







        <div class="modal fade" id="div_requalifier_plainte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">RequalifierPlainte</h5>
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
                                        <button type="submit" id="btn_addpc" class="btn-sm btn-info">Valider</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <div class="modal fade" id="div_orienter_plainte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        {{-- <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">SolutionPlainte</h5>
                        <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">


                </div>
            </div>
        </div> --}}
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
                            url:"{{ route('autocomplete.fetchTicket') }}",
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
                            url:"{{ route('autocomplete.searchTicket') }}",
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
                $.get('/requalifier_plainte/'+Id, function(selectPlainteById){
                    $("#Id").val(selectPlainteById.Id);
                    $("#Ticket").val(selectPlainteById.Ticket);
                    $("#Categorie").val(selectPlainteById.Categorie_plainte);
                    $("#Type").val(selectPlainteById.Type_plainte);
                    $("#div_requalifier_plainte").modal('toggle');
                });
            }


             //this function call the id plainte in a form
             function solutionPlainte(Id){
                $.get('/requalifier_plainte/'+Id, function(selectPlainteById){
                    $("#Id").val(selectPlainteById.Id);
                    $("#Proposition_1").val(selectPlainteById.Proposition_1);
                    $("#Proposition_2").val(selectPlainteById.Proposition_2);
                    $("#Feedback_1").val(selectPlainteById.Feedback_plaingant);
                    $("#Feedback_2").val(selectPlainteById.Feedback_plaignant2);
                    $("#pcaddmodel").modal('toggle');
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
            url:"{{url('upd_requalifier_plainte')}}",
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

 </script>







@endsection
