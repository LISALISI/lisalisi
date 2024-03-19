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
              </div>
 -->

<div class="card mb-2 px-3 pt-3 pb-2">

<div class="row mt-2">
    <div class="col-md-3 mb-1"><div class="m-1">Actions Contextuelles</div></div>
    <div class="col-md-7 mb-1"><a href="" type="button" class="btn-sm btn-outline-primary">Insert</a> <a href="" type="button" class="btn-sm btn-outline-success">Imprimer</a></div>
    <div class="col-md-2 mb-1"><a href="" type="button" class="btn-sm btn-link">IDB / Insert_IDB</a></div>
</div>
</div>

<div class="card mb-4 px-3 pt-3 pb-2">
    <div class="row mt-2 mb-1">
        <div class="col-md-4 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h5><span class="badge badge-dark">Meta-donn&eacute;es</span></h5></td></tr>
                    <tr><td>ID_Chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="id" /></div></td></tr>
                    <tr><td>Nom_Chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="nom_chantier" /></div></td></tr>
                    <tr><td>Domaine</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="domaine" /></div></td></tr>
                    <tr><td>Co&ucirc;t Chantier Initial</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="cout_chantier_init" /></div></td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-4 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h5><span class="badge badge-dark">Localisation</span></h5></td></tr>
                    <tr><td>Province</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="province" /></div></td></tr>
                    <tr><td>Groupement</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="groupement" /></div></td></tr>
                    <tr><td>Communaut&eacute;</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="communaute" /></div></td></tr>
                    <tr><td>Nombre de chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="nbre_chantiers" /></div></td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-4 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h5><span class="badge badge-dark">Finances</span></h5></td></tr>
                    <tr><td>Montant R&eacute;el</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="montant_reel" /></div></td></tr>
                    <tr><td>Montant Pr&eacute;vus</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="montant_prevus" /></div></td></tr>
                    <tr><td>Diff&eacute;rence</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" placeholder="différence" /></div></td></tr>
                </table>
            </div>
        </div>
    </div>
<hr class="m-0" />
    <div class="row mt-2 mb-1">
        <div class="col-md-12 mb-1">
            <div class="mb-2 p-2 border">
            <h5><span class="badge badge-dark">Evolution Global du Chantier</span></h5>
              <!-- Responsive Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                      <tr>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">Nom_Chantier</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">Evolution / 100%</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">Poids_Post_Act</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">Poids_Post_Ref</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">Poids_Gl_Act</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">Poids_Gl_Ref</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Démarrage des travaux /<br />Avoir un PV de démarrage + Notification Ordre de Service</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Installation  de chantier :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Fondation :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Elevation des murs :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Toiture et faux plafond :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Menuiserie :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">&Eacute;lectricit&eacute; :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Travaux de finitions :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Am&eacute;nagement ext&eacute;rieur et Repli chantier :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">R&eacute;ceptions provisoire des travaux :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">R&eacute;ceptions D&eacute;finitives des travaux :</div></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Commentaires Evolution chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control" placeholder="Commentaires Evolution chantier"></textarea></div>
              </div>


            </div>

            <div class="mb-2 p-2 border">
            <h5><span class="badge badge-dark">Détails des informations du chantier</span></h5>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Retard du chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><input class="form-check-input" type="checkbox" value="" id="" /></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Raison Retard du chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control" placeholder="nom chantier"></textarea></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="border text-dark p-1 fw-bold">Photos du chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1">
                    <div class="file-upload">
                      <div class="custom-file">
                          <div class="input-group mb-3">
                              <input id="file_upload" name="file_upload1" type="file" class="custom-file-input form-control" aria-label="File Upload" />
                          </div>
                          <div class="input-group mb-3">
                              <input id="file_upload" name="file_upload2" type="file" class="custom-file-input form-control" aria-label="File Upload" />
                          </div>
                      </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="mb-2 p-2 border">

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Incidents sur le chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><input class="form-check-input" type="checkbox" value="" id="" /></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="border text-dark p-1 fw-bold">D&eacute;tails Incidents&nbsp;:</div></div>
                  <div class="col-md-9 mb-1">
                      <div class="row m-2">
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date incident</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="d&eacute;tails incident"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="CTIC Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="STIC Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                      <div class="row m-2">
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date incident</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="d&eacute;tails incident"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="CTIC Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="STIC Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                  </div>
              </div>

            </div>

            <div class="mb-2 p-2 border">

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="border text-dark p-1 fw-bold">R&eacute;unions de chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1">
                      <div class="row m-2">
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date r&eacute;union</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="d&eacute;tails r&eacute;union"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="DPO Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="CTIC Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                      <div class="row m-2">
                      <div class="col-md-2 mb-1"><div class="border text-dark p-1">date r&eacute;union</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="d&eacute;tails r&eacute;union"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="DPO Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control" placeholder="CTIC Commentaire"></textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                  </div>
              </div>

            </div>

            <div class="mb-2 p-2 border">

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">D&eacute;comptes chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><input class="form-check-input" type="checkbox" value="" id="" /></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="border text-dark p-1 fw-bold">D&eacute;tails D&eacute;comptes&nbsp;:</div></div>
                  <div class="col-md-9 mb-1">
              <!-- Responsive Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                      <tr>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Date D&eacute;compte</div></td>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Etat Evolution Chantier</div></td>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Montant Facture</div></td>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Montant Pay&eacute;</div></td>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Montant &agrave; Payer</div></td>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Solde</div></td>
                        <td><div class="p-2 text-dark text-center bgver1 fw-bold">Retenus</div></td>
                      </tr>
                      <tr>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                        <td><input type="text" id="" name="" class="form-control" /></td>
                      </tr>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->


                  </div>
              </div>
            </div>

            <div class="mb-2 p-2 border">
              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Remarques sur le chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control" placeholder="remarques chantier"></textarea></div>
              </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection
