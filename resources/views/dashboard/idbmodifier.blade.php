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
    <div class="col-md-7 mb-1"><a href="" type="button" class="btn-sm btn-outline-primary">Update</a> <a href="" type="button" class="btn-sm btn-outline-success">Imprimer</a></div>
    <div class="col-md-2 mb-1"><a href="" type="button" class="btn-sm btn-link">IDB / Update_IDB</a></div>
</div>
</div>

<div class="card mb-4 px-3 pt-3 pb-2">
    <div class="row mt-2 mb-1">
        <div class="col-md-4 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h5><span class="badge badge-dark">Meta-donn&eacute;es</span></h5></td></tr>
                    <tr><td>ID_Chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="id" /></div></td></tr>
                    <tr><td>Nom_Chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="nom_chantier" /></div></td></tr>
                    <tr><td>Domaine</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="domaine" /></div></td></tr>
                    <tr><td>Co&ucirc;t Chantier Initial</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="cout_chantier_init" /></div></td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-4 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h5><span class="badge badge-dark">Localisation</span></h5></td></tr>
                    <tr><td>Province</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="province" /></div></td></tr>
                    <tr><td>Groupement</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="groupement" /></div></td></tr>
                    <tr><td>Communaut&eacute;</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="communaute" /></div></td></tr>
                    <tr><td>Nombre de chantier</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="nbre_chantiers" /></div></td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-4 mb-1">
            <div class="p-1 border">
                <table width="100%" cellspacing="5" cellpadding="5">
                    <tr><td colspan="2"><h5><span class="badge badge-dark">Finances</span></h5></td></tr>
                    <tr><td>Montant R&eacute;el</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="montant_reel" /></div></td></tr>
                    <tr><td>Montant Pr&eacute;vus</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="montant_prevus" /></div></td></tr>
                    <tr><td>Diff&eacute;rence</td><td>:</td><td><div class="form-outline"><input type="text" id="form12" class="form-control" value="différence" /></div></td></tr>
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
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Installation  de chantier :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Fondation :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Elevation des murs :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Toiture et faux plafond :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Menuiserie :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">&Eacute;lectricit&eacute; :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">0</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Travaux de finitions :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">5</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">100</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">Am&eacute;nagement ext&eacute;rieur et Repli chantier :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">5</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">100</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">R&eacute;ceptions provisoire des travaux :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">100</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">100</div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark p-1 fw-bold">R&eacute;ceptions D&eacute;finitives des travaux :</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">Cl&ocirc;ts</div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1">100</div></td>
                      </tr>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Commentaires Evolution chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control">Commentaires Evolution chantier</textarea></div>
              </div>


            </div>

            <div class="mb-2 p-2 border">
            <h5><span class="badge badge-dark">Détails des informations du chantier</span></h5>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Retard du chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Raison Retard du chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control">nom chantier</textarea></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Photos du chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><div class="h-100 border text-dark p-1">Demarrage_chantier_FM105.jpg | installation_chantier_FM105.jpg</div></div>
              </div>

            </div>

            <div class="mb-2 p-2 border">

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">Incidents sur le chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
              </div>

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="border text-dark p-1 fw-bold">D&eacute;tails Incidents&nbsp;:</div></div>
                  <div class="col-md-9 mb-1">
                      <div class="row m-2">
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date incident</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">d&eacute;tails incident</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">CTIC Commentaire</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">STIC Commentaire</textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                      <div class="row m-2">
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date incident</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">d&eacute;tails incident</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">CTIC Commentaire</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">STIC Commentaire</textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
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
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">d&eacute;tails r&eacute;union</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">DPO Commentaire</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">CTIC Commentaire</textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                      <div class="row m-2">
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date r&eacute;union</div></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">d&eacute;tails r&eacute;union</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">DPO Commentaire</textarea></div>
                          <div class="col-md-2 mb-1"><textarea name="" id="" class="form-control">CTIC Commentaire</textarea></div>
                          <div class="col-md-2 mb-1 text-center"><div class="border text-center text-dark p-1">R&eacute;solu?</div><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
                          <div class="col-md-2 mb-1"><div class="border text-dark p-1">date cl&ocirc;ture</div></div>
                      </div>
                  </div>
              </div>

            </div>

            <div class="mb-2 p-2 border">

              <div class="row m-2">
                  <div class="col-md-3 mb-1"><div class="h-100 border text-dark p-1 fw-bold">D&eacute;comptes chantier&nbsp;:</div></div>
                  <div class="col-md-9 mb-1"><input class="form-check-input" type="checkbox" value="" id="" checked /></div>
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
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                      </tr>
                      <tr>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
                        <td><div class="border text-dark text-center p-1"><br /></div></td>
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
                  <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control">remarques chantier</textarea></div>
              </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection
