@extends('layouts/master')
@section('title', 'Parametre_localite')
@section('content')

<div class="card mb-2 px-3 pt-3 pb-2">
        <div class="row mb-2">
            <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
            <div class="col-md-10 mb-1"><a href="javascript:void(0)" onclick="modifierLocalite()" type="button" class="btn btn-danger" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#div_upd_localite">Update Localit&eacute;s</a></div>
        </div>
        <hr class="m-0" />
        <div class="row mt-3">
            <div class="col-md-1 mb-1"><div class="m-1">Filtres</div></div>
            <div class="col-md-10 mb-1">
                <div class="row">
                    <div class="col-md-2 mb-1"><select class="form-control" name="" id=""><option value="">Groupe</option></select></div>
                    <div class="col-md-2 mb-1"><select class="form-control" name="" id=""><option value="">Localit&eacute;</option></select></div>
                    <div class="col-md-8 mb-1"></div>
                </div>
            </div>
            <div class="col-md-1 mb-1"><button type="button" id="filter" class="btn btn-dark" data-mdb-ripple-init><i class="fas fa-magnifying-glass"></i></button></div>
        </div>
</div>

<div class="card mb-4 px-3 pt-3 pb-2">
    <div class="row mt-2 mb-1">
        <div class="col-md-6 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Infos G&eacute;n&eacute;rales</span></h4></td></tr>
                    <tr>
                        <div class="form-group">
                            <div class="alert alert-danger text-center" id="msgKoDiv" style="display:none">
                                <p id="retour_msg_ko" class="text-danger"></p>
                            </div>
                            <div class="alert alert-success text-center" id="msgOkDiv" style="display:none">
                                <p id="retour_msg_ok" class="text-success"></p>
                            </div>
                        </div>
                    </tr>
                    <form id="form_localite">
                        <tr><td>Nom province</td><td>:</td><td><div class="form-outline"><input type="text" id="nom_province" class="form-control" placeholder="SUD-UBANGI" /> <span class="text-danger error-text nom_province_error"></span></div></td></tr>
                        <tr><td>Initiale</td><td>:</td><td><div class="form-outline"><input type="text" id="initial" class="form-control" placeholder="SU" /> <span class="text-danger error-text initial_error"></span></div></td></tr>
                        <tr><td>Reponsable Localit&eacute;</td><td>:</td><td><div class="form-outline"><input type="text" id="responsable" class="form-control" placeholder="Noms" /> <span class="text-danger error-text responsable_error"></span></div></td></tr>
                        <tr><td></td><td></td><td><div class="form-outline"><button type="submit" class="btn btn-success" data-mdb-ripple-init>Valider</button></div></td></tr>
                    </form>
                </table>
            </div>
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Les Localit&eacute;s</span></h4></td></tr>
                    <tr><td colspan="3">
                        @if (isset($data_province))

                            @foreach ($data_province as $item)
                                {{$item->nom_province}}_{{$item->initial}}_{{$item->responsable}}<br />
                            @endforeach

                        @endif

                    </td></tr>
                </table>
            </div>

        </div>
        <div class="col-md-6 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Groupes Utilisateur et Localit&eacute;</span></h4></td></tr>
                    <tr><td colspan="3">
                        @if (isset($data_groupe))

                            @foreach ($data_groupe as $item)
                                {{$item->nom_groupe}}_{{$item->nom_localisation}}<br />
                            @endforeach
                       @endif
                    </td></tr>
                </table>
            </div>
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Composantes Activ&eacute;s</span></h4></td></tr>
                    <tr><td colspan="3">
                        @if (isset($data_composante))

                            @foreach ($data_composante as $item)
                                {{$item->nom_composante}}<br />
                            @endforeach

                       @endif
                    </td></tr>
                </table>
            </div>
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Groupements</span></h4></td></tr>
                    <tr><td colspan="3">
                    BAVIRA<br />
                    KALEHE<br />
                    UVIRA<br />
                    BAFULIRO<br />

                    </td></tr>
                </table>
            </div>
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h4><span class="badge badge-secondary">Villages</span></h4></td></tr>
                    <tr><td colspan="3">
                    BENI<br />
                    BUTEMBO<br />
                    NYIRAGONGO<br />

                    </td></tr>
                </table>
            </div>
        </div>
    </div>

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


<div class="modal fade" id="div_upd_localite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Localit&eacute;</h5>
                    <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form id="form_upd_localite">
                        @csrf
                        <div class="form-group">
                            <div class="alert alert-danger text-center" id="localKoDiv" style="display:none">
                                 <p id="retour_local_ko" class="text-danger"></p>
                            </div>
                            <div class="alert alert-success text-center" id="localOkDiv" style="display:none">
                                <p id="retour_local_ok" class="text-success"></p>
                            </div>
                       </div>


                         <div class="col-md-12">

                                    <div class="col-md-12">
                                               <div class="form-label-group">
                                                        <label for="moms">Chercher Localite</label>
                                                        <input type="text" class="form-control" placeholder="localite nom..." id="nom_localite_ch" name="nom_localite_ch" autocomplete="off" >
                                                        <div id="LocaliteList" class="LocaliteList"></div>
                                                        <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark btn-sm" id="search_localite"><i class="fas fa-search"></i></button></div>
                                                </div>

                                                <div class="form-label-group">
                                                    <input type="hidden" id="Idlocal" name="Idlocal" >
                                                    <label for="moms">LocaliteNom</label>
                                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                    <input type="text" class="form-control" placeholder="localite nom..." id="nom_localite_upd" name="nom_localite_upd" autocomplete="off" >

                                                    <span class="text-danger error-text nom_localite_upd_error"></span>
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="moms">Initial</label>
                                                    <input type="text" class="form-control" placeholder="localite nom..." id="initial_upd" name="initial_upd" autocomplete="off" >
                                                    <span class="text-danger error-text initial_upd_error"></span>
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="moms">Responsable</label>
                                                    <input type="text" class="form-control" placeholder="responsable..." id="responsable_upd" name="responsable_upd" autocomplete="off" >
                                                    <span class="text-danger error-text responsable_upd_error"></span>
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script>

function modifierLocalite(){
        $("#div_upd_localite").modal('toggle');
}





$(function(){
    $("#form_localite").on('submit', function(e){
        e.preventDefault();
        let nom_province = $('#nom_province').val();
        let initial = $('#initial').val();
        let responsable = $('#responsable').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{url('insert_localite')}}",
            type:'post',
            data:{
                nom_province:nom_province,
                initial:initial,
                responsable:responsable,
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
    $("#form_upd_localite").on('submit', function(e){
        e.preventDefault();
        let Idlocal = $('#Idlocal').val();
        let nom_province_upd = $('#nom_localite_upd').val();
        let initial_upd = $('#initial_upd').val();
        let responsable_upd = $('#responsable_upd').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{url('update_localite')}}",
            type:'post',
            data:{
                Idlocal:Idlocal,
                nom_province_upd:nom_province_upd,
                initial_upd:initial_upd,
                responsable_upd:responsable_upd,
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
                    $('#localKoDiv').toggle("slide");
                    $("#retour_local_ko").text(data.msg);
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                  //  $('#second_form')[0].reset();
                    $('#localOkDiv').toggle("slide");
                    $("#retour_local_ok").text(data.msg);

                }
            }


        });
    });
});






$(document).ready(function(){

$('#nom_localite_ch').keyup(function(){
    var query = $(this).val();

    if(query != '')
    {
        var _token = $('input[name="_token"]').val();
        var key_search = "nom_province";
        var table_name = "provinces";
         $.ajax({
            url:"{{ route('autocomplete_recherche') }}",
            method:"POST",
            data:{
                keyId:query,
                key_search:key_search,
                table_name:table_name,
                _token:_token},
            success:function(data){
            $('.LocaliteList').fadeIn();
                $('.LocaliteList').html(data);
            }
        });
    }else{
        $('.LocaliteList').fadeOut();
    }
});

    $(document).on('click', 'li', function(){
        $('#nom_localite_ch').val($(this).text());
        $('.LocaliteList').fadeOut();
        var key_nom_groupe_ch = $('#nom_localite_ch').val();


    });

});



$(document).ready(function () {
                                    $('#search_localite').on('click', function () {
                                    var key_nom_localite_ch = $('#nom_localite_ch').val();

                                    if(key_nom_localite_ch != '')
                                            {
                                                var _token = $('input[name="_token"]').val();
                                                var valueSearch = "nom_province";
                                                var tableName = "provinces";
                                                $.ajax({
                                                    url:"{{ route('valid_autocomplete_recherche')  }}",
                                                    method:"POST",
                                                    data:{
                                                        keyupId:key_nom_localite_ch,
                                                        valueSearch:valueSearch,
                                                        tableName:tableName,
                                                        _token:_token},
                                                    success:function(result){
                                                        $.each(result.data_searched, function (key, value) {

                                                                $("#Idlocal").val(value.id);
                                                                $("#nom_localite_upd").val(value.nom_province);
                                                                $("#initial_upd").val(value.initial);
                                                                $("#responsable_upd").val(value.responsable);
                                                                });
                                                    }
                                                });
                                            }

                                    });

                                });



</script>
