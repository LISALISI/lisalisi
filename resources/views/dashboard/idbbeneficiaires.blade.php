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

<div class="card mb-2 px-3 pt-3 pb-2">
        <div class="row mb-1">
            <div class="col-md-3 mb-1"><div class="">Actions Contextuelles</div></div>
            <div class="col-md-7 mb-1"></div>
            <div class="col-md-2 mb-1"><a href="" type="button" class="btn-sm btn-link">IDB / B&eacute;n&eacute;ficiaires</a></div>
        </div>
</div>
<div class="card mb-2 px-3 pt-3 pb-2">
        <div class="row">
            <div class="col-md-2 mb-1"><div class="m-1">Filtres</div></div>
            <div class="col-md-9 mb-1">
                <div class="row">

                     <div class="col-md-2 mb-1">
                         <select class="form-control" name="" id="">
                              <option value="">ID Chantier</option>
                         </select>
                     </div>
                     <div class="col-md-2 mb-1">
                         <select class="form-control" name="" id="">
                              <option value="">Chantier</option>
                         </select>
                     </div>
                     <div class="col-md-2 mb-1">
                         <select class="form-control" name="" id="">
                              <option value="">Localit&eacute;</option>
                         </select>
                     </div>
                     <div class="col-md-2 mb-1">
                         <select class="form-control" name="" id="">
                              <option value="">Statut</option>
                         </select>
                     </div>
                     <div class="col-md-2 mb-1">
                         <select class="form-control" name="" id="">
                              <option value="">Nom B&eacute;n&eacute;ficiaire</option>
                         </select>
                     </div>
                     <div class="col-md-2 mb-1">
                         <select class="form-control" name="" id="">
                              <option value="">Domaine</option>
                         </select>
                     </div>

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
                        <th><div class="border p-1 text-center bggris">ID Chantier</div></th>
                        <th><div class="border p-1 text-center bggris">Chantier</div></th>
                        <th><div class="border p-1 text-center bggris">Localit&eacute;</div></th>
                        <th><div class="border p-1 text-center bggris">Statut</div></th>
                        <th><div class="border p-1 text-center bggris">Nom B&eacute;n&eacute;ficiaire</div></th>
                        <th><div class="border p-1 text-center bggris">Domaine</div></th>
                        <th><div class="border p-1 text-center bggris">Date</div></th>
                        <th><div class="border p-1 text-center bggris">Date Fin</div></th>
                        <th><div class="border p-1 text-center bggris">$ R&eacute;cu</div></th>
                        <th><div class="p-1 text-center">Actif ?</div></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-success">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-success">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-danger">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-success">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-danger">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-success">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td><div class="border p-1"><br /></div></td>
                        <td align="center"><span class="badge bg-success">&nbsp;</span></td>
                        <td><a href="{{url('idbafficher')}}" type="button" class="form-control btn-sm btn-info">Afficher</a></td><td><a href="{{url('idbmodifier')}}" type="button" class="form-control btn-sm btn-warning">Modifier</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script>
                $(document).ready(function () {



                    /*------------------------------------------
                    --------------------------------------------
                    Country Dropdown Change Event
                    --------------------------------------------
                    --------------------------------------------*/
                    $('#categorie_dropdown').on('change', function () {
                        var categorieId = this.value;

                        $("#type-dropdown").html('');
                        $.ajax({
                            url: "{{url('api/fetch-type')}}",
                            type: "POST",
                            data: {
                                id_categorie: categorieId,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            success: function (result) {
                                $('#type-dropdown').html('<option value="">-- Type --</option>');
                                $.each(result.type, function (key, value) {
                                    $("#type-dropdown").append('<option value="' + value
                                        .id + '">' + value.nom_type + '</option>');
                                });
                              //   $('#city-dropdown').html('<option value="">-- Select City --</option>');
                            }
                        });
                      });
                    });

        </script>


@endsection


