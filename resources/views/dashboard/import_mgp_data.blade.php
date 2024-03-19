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

<div class="card mb-4 px-3 pt-3 pb-2">

    <div class="row mt-2">
        <div class="col-md-3 mb-1"><div class="m-1">Actions Contextuelles</div></div>
        <div class="col-md-3 mb-1"><a href="{{url('import_mgp_data')}}" type="button" class="btn-sm btn-outline-primary">Import MGP DATA</a> </div>
        <div class="col-md-3 mb-1"><a href="{{url('insert_mgp_hsensible')}}" type="button" class="btn-sm btn-outline-danger">Insert Hsensible</a> </div>
        <div class="col-md-3 mb-1"><a href="{{url('parametre_import_mgp')}}" type="button" class="btn-sm btn-link">Param / Import MGP</a></div>
    </div>
</div>



  <div class="row">
    <div class="col-xl-12 col-sm-12 col-12 mb-1">
          <div class="d-flex justify-content-between">
            @if (isset($retour_msg) and isset($retour_msg_ok) and isset($retour_msg_err) and isset($queryStatus))
                <div class="d-flex justify-content-between " style="background-color: #000; color:azure; width:100%; border-radius: 15px; padding : 10px">
                    <p>{{$retour_msg}}</p><br>
                    <p style="color: green">{{$retour_msg_ok}}</p>
                    <p style="color: red">{{$retour_msg_err}}</p>
                    <p style="color: green">{{$queryStatus}}</p>

                </div>
            @endif

            @if (isset($retour_msg_hsensible))
                <div class="d-flex justify-content-between " style="background-color: #000; color:azure; width:100%; border-radius: 15px; padding : 10px">
                     <p style="color: green">{{$retour_msg_hsensible}}</p>

                </div>
            @endif




          </div>
    </div>
  </div>


</div>
</div>
</div>
</div>


@endsection
