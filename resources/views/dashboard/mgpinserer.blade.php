@extends('layouts/master')
@section('title', 'Infrastructures de Base')
@section('content')

<!--
              <div class="row">
                <div class="col-12 mb-4">
                  <div class="card h-100 w-100 p-3">
                  <h6 class="mb-0">@yield('title')</h6>
                  </div>
                </div>
              </div> -->

<!-- 
              <div class="card mb-4 px-3 pt-3 pb-2">
                <div class="row mt-2 mb-1">
                    <div class="col-md-3 mb-1"><div class="">Actions Contextuelles</div></div>
                    <div class="col-md-7 mb-1"></div>
                    <div class="col-md-2 mb-1"><a href="" type="button" class="btn-sm btn-link">MGP / Listes</a></div>
                </div>
            </div>
 -->
            <div class="row">
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
            <div class="card">
            <div class="card-header py-3"><h6 class="mb-0"><strong>Nouvelle plainte</strong></h6></div>
            <div class="card-body">

                      <div class="row">
                        <div class="col-xl-4 col-sm-4 col-12 mb-1">
                              <div class="d-flex justify-content-between px-md-1">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><td><i class="fas fa-user fa-fw me-3"></i> Plaignant</td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="text" class="form-control" name="prenom" value="" placeholder="Pr&eacute;nom" /></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="text" class="form-control" name="nom" value="" placeholder="Nom" /></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="text" class="form-control" name="postnom" value="" placeholder="Postom" /></td></tr>
                                <tr><td height="10"></td></tr>
                                </table>
                              </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 col-12 mb-1">
                              <div class="d-flex justify-content-between px-md-1">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><td><i class="fas fa-info fa-fw me-3"></i> Infos</td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="text" class="form-control" name="numtel" value="" placeholder="Num T&eacute;l&eacute;phone" /></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="email" class="form-control" name="elecmail" value="" placeholder="E-mail" /></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="text" class="form-control" name="localite" value="" placeholder="Localit&eacute;" /></td></tr>
                                <tr><td height="10"></td></tr>
                                </table>
                              </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 col-12 mb-1">
                              <div class="d-flex justify-content-between px-md-1">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><td><i class="fas fa-clock fa-fw me-3"></i> Occurence</td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="text" class="form-control" name="lieu" value="" placeholder="Lieu exact" /></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="date" class="form-control" name="dateocc" value="" /></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="time" class="form-control" name="heureocc" value="" /></td></tr>
                                <tr><td height="10"></td></tr>
                                </table>
                              </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-6 col-sm-4 col-12 mb-1">
                              <div class="d-flex justify-content-between px-md-1">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><td><input type="text" class="form-control" name="titre" value="" placeholder="Titre" /></td></tr>
                                <tr><td height="10"></td></tr>
                                </table>
                              </div>
                        </div>
                        <div class="col-xl-6 col-sm-4 col-12 mb-1">
                              <div class="d-flex justify-content-between px-md-1">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><td><select class="form-control" name="categorie"><option value="">Choisir une Cat&eacute;gorie</option><option value="1">Cat&eacute;gorie 1</option><option value="2">Cat&eacute;gorie 2</option><option value="3">Cat&eacute;gorie 3</option><option value="4">Cat&eacute;gorie 4</option><option value="5">Cat&eacute;gorie 5</option><option value="6">Cat&eacute;gorie 6</option></select></td></tr>
                                <tr><td height="10"></td></tr>
                                </table>
                              </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 mb-1">
                              <div class="d-flex justify-content-between px-md-1">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><td><textarea class="form-control" name="contenu" placeholder="D&eacute;tails"></textarea></td></tr>
                                <tr><td height="10"></td></tr>
                                <tr><td><input type="file" class="form-control" name="monfichier" /></td></tr>
                                <tr><td height="10"></td></tr>
                               </table>
                              </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 mb-1">
                              <div class="d-flex justify-content-center px-md-1">
                              <button type="submit" class="btn btn-success" name="executer">Ins&eacute;rer</button>
                              </div>
                        </div>
                      </div>

            </div>
            </div>
            </div>
            </div>
@endsection
