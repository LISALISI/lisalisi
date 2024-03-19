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
    <div class="col-md-2 mb-1"><div class="m-1">Filtres</div></div>
    <div class="col-md-10 mb-1">
        <div class="row">
            <div class="col-md-3 mb-1">
                <select class="form-control" name="filter_groupe" id="filter_groupe">
                    <option value="">Groupe</option>
                        @if (isset($data_groupe))
                            @foreach ($data_groupe as $item1)
                                <option value="{{$item1->nom_groupe}}">{{$item1->nom_groupe}}</option>
                            @endforeach
                        @endif
                </select>
            </div>
            <div class="col-md-3 mb-1">
                <select class="form-control" name="filter_localisation" id="filter_localisation">
                    <option value="">Localisation</option>
                        @if (isset($data_province))
                            @foreach ($data_province as $item2)
                                <option value="{{$item2->nom_province}}">{{$item2->nom_province}}</option>
                            @endforeach
                        @endif
                </select>
            </div>
            <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark" data-mdb-ripple-init><i class="fas fa-magnifying-glass"></i></button></div>
            <div class="col-md-5 mb-1"></div>
        </div>
    </div>
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
                      <tr>
                        <td valign="middle"><div class="border p-1 text-center">CTM_NU</div></td>
                        <td valign="middle"><div class="border p-1 text-center">NU</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><a href="{{url('paramgroupesmodifier')}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                      <tr>
                        <td valign="middle"><div class="border p-1 text-center">CTIC_SK</div></td>
                        <td valign="middle"><div class="border p-1 text-center">SK</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><a href="{{url('paramgroupesmodifier')}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                      <tr>
                        <td valign="middle"><div class="border p-1 text-center">CTHIMO_IT</div></td>
                        <td valign="middle"><div class="border p-1 text-center">IT</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><a href="{{url('paramgroupesmodifier')}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                      <tr>
                        <td valign="middle"><div class="border p-1 text-center">CA_SU</div></td>
                        <td valign="middle"><div class="border p-1 text-center">SU</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><a href="{{url('paramgroupesmodifier')}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                      <tr>
                        <td valign="middle"><div class="border p-1 text-center">VBG_Team</div></td>
                        <td valign="middle"><div class="border p-1 text-center">SU</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><a href="{{url('paramgroupesmodifier')}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                      </tr>
                      <tr><td colspan="12"><hr></td></tr>
                      <tr>
                        <td valign="middle"><div class="border p-1 text-center">Ethiq_Team</div></td>
                        <td valign="middle"><div class="border p-1 text-center">SU</div></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><table><tr><td>&nbsp;R&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" checked disabled /></td></tr><tr><td>&nbsp;W&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;U&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr><tr><td>&nbsp;D&nbsp;</td><td><input class="form-check-input" type="checkbox" value="" id="" disabled /></td></tr></table></td>
                        <td align="center"><a href="{{url('paramgroupesmodifier')}}" type="button" class="btn btn-sm btn-danger">Modifier</a></td>
                      </tr>
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

