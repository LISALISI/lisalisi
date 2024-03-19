@extends('layouts/master')
@section('title', 'mgp')
@section('content')

<div class="card mb-2 px-3 pt-3 pb-2">
    <div class="row">
        <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
        <div class="col-md-10 mb-1"><a href="{{url('paramgroupes')}}" type="button" class="btn btn-outline-primary">Liste Groupes</a> <a href="javascript:void(0)" onclick="appelerGroupe()" class="btn btn-outline-success" title="Creer groupe" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#div_groupe">Nouveau Groupe</a></div>
    </div>
</div>

<div class="card mb-2 px-3 pt-3 pb-2">
<div class="row">
    <div class="col-md-2 mb-1"><div class="border p-1 text-center">Filtres</div></div>
    <div class="col-md-10 mb-1">
        <div class="row">
            <div class="col-md-3 mb-1">
                <input type="text" required id="filter_groupe" name="filter_groupe" class="form-control filter_groupe" placeholder="Nom du groupe" />
                <div id="groupeList" class="groupeList"></div>
            </div>
                {{-- <div class="col-md-3 mb-1">
                    <select class="form-control" name="filter_groupe" id="filter_groupe">
                        <option value="">Groupe</option>
                            @if (isset($data_groupe))
                                @foreach ($data_groupe as $item1)
                                    <option value="{{$item1->nom_groupe}}">{{$item1->nom_groupe}}</option>
                                @endforeach
                            @endif
                    </select>
                </div> --}}
                {{-- <div class="col-md-3 mb-1">
                    <select class="form-control" name="filter_localisation" id="filter_localisation">
                        <option value="">Localisation</option>
                            @if (isset($data_province))
                                @foreach ($data_province as $item2)
                                    <option value="{{$item2->nom_province}}">{{$item2->nom_province}}</option>
                                @endforeach
                            @endif
                    </select>
                </div> --}}
            <div class="col-md-1 mb-1"><button type="button" id="btn_search_grp" class="btn btn-dark" data-mdb-ripple-init><i class="fas fa-magnifying-glass"></i></button></div>
            <div class="col-md-8 mb-1"></div>
        </div>
    </div>
</div>
</div>

              <!-- Responsive Table -->
              <div class="card p-3 mb-2">
                <div class="table-responsive-lg text-nowrap">
                  <table width="100%" border="1">
                    <colgroup width="80" span="12"></colgroup>

                        @php($num = 0)

                      @if (isset($data_groupe))
                        @foreach ($data_groupe as $item3)

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
                        <tr>
                            <td valign="middle"><div class="bono1 fw-bold p-1 text-center text-white bg-dark">{{$item3->nom_groupe}}</div></td>
                            <td valign="middle"><div class="bono1 fw-bold p-1 text-center bgblu1">{{$item3->nom_localisation}}</div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_r" @if($item3->idb_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_w" @if($item3->idb_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_u" @if($item3->idb_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_d" @if($item3->idb_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_r" @if($item3->cld_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_w" @if($item3->cld_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_u" @if($item3->cld_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_d" @if($item3->cld_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_r" @if($item3->thimo_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_w" @if($item3->thimo_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_u" @if($item3->thimo_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_d" @if($item3->thimo_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_r" @if($item3->tmi_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_w" @if($item3->tmi_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_u" @if($item3->tmi_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_d" @if($item3->tmi_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_r" @if($item3->cerc_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_w" @if($item3->cerc_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_u" @if($item3->cerc_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_d" @if($item3->cerc_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_r" @if($item3->medac_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_w" @if($item3->medac_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_u" @if($item3->medac_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_d" @if($item3->medac_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_r" @if($item3->mgp_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_w" @if($item3->mgp_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_u" @if($item3->mgp_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_d" @if($item3->mgp_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_r" @if($item3->analyse_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_w" @if($item3->analyse_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_u" @if($item3->analyse_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_d" @if($item3->analyse_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><div class="bono1 mb-1"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_r" @if($item3->mgp_hs_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_w" @if($item3->mgp_hs_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_u" @if($item3->mgp_hs_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_d" @if($item3->mgp_hs_d==1) checked @endif disabled /></td></tr></table></div></td>
                            <td align="center"><a href="{{url('paramgroupesmodifier/'.$item3->id)}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                        </tr>

                        @endforeach
                      @endif

                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
              <div class="card pt-3 mb-2">
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                       Pr&eacute;c&eacute;dent&nbsp;&nbsp;&nbsp;<span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>&nbsp;&nbsp;&nbsp;Suivant
                    </a>
                    </li>
                </ul>
                </nav>
              </div>

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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
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





$(document).ready(function(){

$('.filter_groupe').keyup(function(){
        var query = $(this).val();

        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            var key_search ="nom_groupe";
            var table_name ="groupes";
            $.ajax({
                url:"{{ route('autocomplete_recherche') }}",
                method:"POST",
                data:{
                    keyId:query,
                    key_search:key_search,
                    table_name:table_name,
                    _token:_token},
                success:function(data){
                $('.groupeList').fadeIn();
                    $('.groupeList').html(data);
                }
            });
        }else{
            $('.groupeList').fadeOut();
        }
    });

    $(document).on('click', 'li', function(){
        $('.filter_groupe').val($(this).text());
        $('.groupeList').fadeOut();
        var key_searchTicket = $('.searchGroupe').val();

        // $("#set1").val(key_searchTicket);

    });

});






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
                                html +='<tr class="text-nowrap">\
                                        <td><div class="bono1 p-1 text-center fw-bold bggris">Groupe</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">Loc.</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">IDB</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">CLD</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">THIMO</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">TMI</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">CERC</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">MEDAC</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">MGP</div></td><td><div class="bono1 p-1 text-center fw-bold bggris">Analy.</div></td><td><div class="bono1 p-1 text-center fw-bold bgora1">MGP-HS</div></td><td></td>\
                                        </tr>\
                                        <tr>\
                                                <td><div class="bono1 fw-bold p-1 text-center text-white bg-dark">'+data_groupe_filtrer[i]['nom_groupe']+'</div></td>\
                                                <td><div class="bono1 fw-bold p-1 text-center bgblu1">'+data_groupe_filtrer[i]['nom_localisation']+'</div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_r" @if($item3->idb_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_w" @if($item3->idb_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_u" @if($item3->idb_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="idb_d" @if($item3->idb_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_r" @if($item3->cld_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_w" @if($item3->cld_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_u" @if($item3->cld_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cld_d" @if($item3->cld_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_r" @if($item3->thimo_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_w" @if($item3->thimo_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_u" @if($item3->thimo_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="thimo_d" @if($item3->thimo_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_r" @if($item3->tmi_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_w" @if($item3->tmi_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_u" @if($item3->tmi_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="tmi_d" @if($item3->tmi_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_r" @if($item3->cerc_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_w" @if($item3->cerc_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_u" @if($item3->cerc_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="cerc_d" @if($item3->cerc_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_r" @if($item3->medac_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_w" @if($item3->medac_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_u" @if($item3->medac_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="medac_d" @if($item3->medac_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_r" @if($item3->mgp_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_w" @if($item3->mgp_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_u" @if($item3->mgp_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_d" @if($item3->mgp_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_r" @if($item3->analyse_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_w" @if($item3->analyse_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_u" @if($item3->analyse_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="analyse_d" @if($item3->analyse_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center"><div class="bono1 mb-1">\
                                                <table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_r" @if($item3->mgp_hs_r==1) checked @endif disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_w" @if($item3->mgp_hs_w==1) checked @endif disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_u" @if($item3->mgp_hs_u==1) checked @endif disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="mgp_hs_d" @if($item3->mgp_hs_d==1) checked @endif disabled /></td></tr></table>\
                                                </div></td>\
                                                <td align="center">\
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
