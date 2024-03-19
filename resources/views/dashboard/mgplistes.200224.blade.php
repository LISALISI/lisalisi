@extends('layouts/master')
@section('title', 'Infrastructures de Base')
@section('content')

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
<!--
              <div class="row">
                <div class="col-12 mb-4">
                  <div class="card h-100 w-100 p-3">
                  <h6 class="mb-0">@yield('title')</h6>
                  </div>
                </div>
              </div> -->

<div class="card mb-2 px-3 pt-3 pb-2">
        <div class="row mb-2">
            <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
            <div class="col-md-7 mb-1"></div>
            <div class="col-md-2 mb-1">
                <input type="text" required id="searchTicket" name="searchTicket" class="form-control searchTicket" placeholder="Ticket" />
                <div id="ticketList" class="ticketList"></div>
            </div>
            <div class="col-md-1 mb-1"><button type="button" class="btn btn-dark" id="search_ticket"><i class="fas fa-search"></i></button></div>
        </div>
        <hr class="m-0" />
        <div class="row mt-3">
            <div class="col-md-1 mb-1"><div class="m-1">Filtres</div></div>
            <div class="col-md-10 mb-1">
                <div class="row">


                    {{-- display province table  --}}
                        <div class="col-md-2 mb-1">
                           @if ($data_province)
                                <select class="form-control" name="province" id="province">
                                    <option value="">Province</option>
                                    @foreach($data_province as $province)
                                    <option value="{{$province->id}}">{{$province->nom_province}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                     {{-- end display province table  --}}
                     <div class="col-md-2 mb-1">
                           @if ($data_composante)
                                <select class="form-control" name="composante" id="composante">
                                    <option value="">Composante</option>
                                    @foreach($data_composante as $composante)
                                      <option value="{{$composante->id}}">{{$composante->nom_composante}}</option>
                                    @endforeach
                                </select>
                            @endif

                    </div>

                     <div class="col-md-2 mb-1">

                         <select class="form-control" name="categorie_dropdown" id="categorie_dropdown">
                                    <option value="">Categorie</option>
                               @if ($data_categorie)
                                   @foreach ($data_categorie as $categorie)
                                     <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                                   @endforeach
                               @endif

                         </select>

                     </div>


                    <div class="col-md-1 mb-1">
                        <select class="form-control" name="type-dropdown" id="type-dropdown">
                            <option value="">Type</option>
                        </select>
                    </div>

                    <div class="col-md-2 mb-1">
                        <input class="form-control" type="date" name="dated" id="dated" title="date debut">
                    </div>
                    <div class="col-md-2 mb-1">
                        <input class="form-control" type="date" name="datef" id="datef" title="date fin">
                    </div>
                    <div class="col-md-1 mb-1">
                        @if ($data_statut)
                            <select class="form-control" name="statut" id="statut">
                                <option value="">Statut</option>
                                @foreach($data_statut as $statut)
                                <option value="{{$statut->id}}">{{$statut->nom_statut}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-1 mb-1"><button type="button" id="filter" class="btn btn-dark" data-mdb-ripple-init><i class="fas fa-magnifying-glass"></i></button></div>
        </div>
</div>

              <!-- Responsive Table -->


              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th class="bggris fw-bold">NUM_TICKET</th>
                        <th class="bggris fw-bold">PLAIGNANT</th>
                        <th class="bggris fw-bold">LOCALIT&Eacute;</th>
                        <th class="bggris fw-bold">COMPOSANTE</th>
                        <th class="bggris fw-bold">DATE</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                   @if ($data_plainte)
                       <?php $num = 0;?>
                      @foreach ($data_plainte as $plainte)
                            <tr>
                                <td scope="row">{{$num=$num+1}}</td>
                                <td class="text-wrap">{{$plainte->Ticket}}</td>
                                <td class="text-wrap">{{$plainte->Nom_prenom_plaignant}}</td>
                                <td class="text-wrap">{{$plainte->Village_quartier}}</td>
                                <td>{{$plainte->Composante}}</td>
                                <td>{{date('d-m-Y', strtotime($plainte->Date_incident))}}</td>
                                <td><a class="form-control btn btn-sm btn-info" href="{{url('show_plainte/'.$plainte->Id_plainte)}}"  style="cursor: pointer;">Afficher</a></td><td><a class="form-control btn btn-sm btn-warning" href="{{url('treat_plainte/'.$plainte->Id_plainte)}}"  style="cursor: pointer;">Traiter</a></td>
                            </tr>
                       @endforeach
                    @endif


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






           $(document).ready(function(){
				$("#filter").on('click',function(){
                    var province = $("#province").val();
                    var composante = $("#composante").val();
                    var typedropdown = $("#type-dropdown").val();
                    var dateD = $("#dated").val();
                    var dateF = $("#datef").val();
                    var statut = $("#statut").val();
                    // var province = $(this).val(); $("#inpt").val();


                        $.ajax({
                            url:"{{ route('filter')}}",
                            type:"GET",
                            data:{
                                'province':province,
                                'composante':composante,
                                'typedropdown':typedropdown,
                                'dateD':dateD,
                                'dateF':dateF,
                                'statut':statut
                            },
                            success:function(data){
                            var data_plainte_filtrer = data.data_plainte_filtrer;
                            var html = '';

                            if(data_plainte_filtrer.length >0){
                                for(let i=0; i<data_plainte_filtrer.length;i++){
                                html +='<tr>\
                                        <td>'+(i+1)+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Ticket']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Nom_prenom_plaignant']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Village_quartier']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Composante']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Date_incident']+'</td>\
                                        <td><a class="form-control btn-sm btn-info" style="cursor: pointer;" href="show_plainte/'+data_plainte_filtrer[i]['Id_plainte']+'">Afficher</a></td><td><a class="form-control btn-sm btn-warning" style="cursor: pointer;" href="treat_plainte/'+data_plainte_filtrer[i]['Id_plainte']+'">Traiter</a></td>\
                                        </tr>';
                                }
                            }else{
                                html +='<tr>\
                                <td>Aucune plainte trouvée</td>\
                                </tr>';
                            }
                            $("tbody").html(html);
                            }

                        })
				})

			})




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
                            // success:function(result){

                            //     $.each(result.data_search_ticket, function (key, value) {

                            //         $(".type_pl").val(value.Type_plainte);
                            //         $(".description_pl").val(value.Description_plainte);
                            //         $(".proposition_1").val(value.Proposition_1);
                            //         $(".fplaignant").val(value.Feedback_plaingant);
                            //         $(".proposition_2").val(value.Proposition_2);
                            //         $(".fplaignant_2").val(value.Feedback_plaignant2);
                            //         $(".ticket").val(value.Ticket);
                            //         $(".categorie_pl").val(value.Categorie_plainte);
                            //         $(".operateur").val(value.Operateur);
                            //         $(".date_traitement").val(value.Date_traitement);
                            //         $(".lieu_inc").val(value.Localisation_incident);
                            //         $(".date_inc").val(value.Date_incident);
                            //         $(".date_pl").val(value.Start_encodage);
                            //         $(".province").val(value.Province);
                            //         $(".personne_impl").val(value.Personne_impliquee);
                            //         $(".noms").val(value.Nom_prenom_plaignant);
                            //         $(".sexe").val(value.Sexe);
                            //         $(".benef_oui_non").val(value.Benef_yes_No_Question);
                            //         $(".phone_or_ident").val(value.Phone_or_id_identification);
                            //         $(".composante").val(value.Composante);
                            //         $(".commentaire_op").val(value.Commentaire_operateur);
                            //         });



                            // }

                            success:function(result){
                            var data_plainte_filtrer = result.data_search_ticket;
                            var html = '';

                            if(data_plainte_filtrer.length >0){
                                for(let i=0; i<data_plainte_filtrer.length;i++){
                                html +='<tr>\
                                        <td>'+(i+1)+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Ticket']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Nom_prenom_plaignant']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Village_quartier']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Composante']+'</td>\
                                        <td>'+data_plainte_filtrer[i]['Date_incident']+'</td>\
                                        <td><a class="form-control btn-sm btn-info" style="cursor: pointer;" href="show_plainte/'+data_plainte_filtrer[i]['Id_plainte']+'">Afficher</a></td><td><a class="form-control btn-sm btn-warning" style="cursor: pointer;" href="treat_plainte/'+data_plainte_filtrer[i]['Id_plainte']+'">Traiter</a></td>\
                                        </tr>';
                                }
                            }else{
                                html +='<tr>\
                                <td>Aucune plainte trouvée</td>\
                                </tr>';
                            }
                            $("tbody").html(html);
                            }

                        });
                    }

            });



            });



        </script>


@endsection


