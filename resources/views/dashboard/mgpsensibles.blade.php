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
        <div class="row mt-2 mb-1">
            <div class="col-md-2 mb-1"><div class="border p-1 text-center">Actions</div></div>
            <div class="col-md-5 mb-1"><button type="submit" class="btn-sm btn-outline-primary" name="">Orienter</button> <button type="submit" class="btn-sm btn-outline-primary" name="">Solution</button> <button type="submit" class="btn-sm btn-outline-primary" name="">Retour Infos B&eacute;n&eacute;ficiaire</button> <button type="submit" class="btn-sm btn-outline-primary" name="">Cl&ocirc;turer</button></div>
            <div class="col-md-2 mb-1"><select name="" id="" class="form-control"><option value="">Requalifier</option></select></div>
            <div class="col-md-1 mb-1"><button type="button" class="btn-sm btn-success">OK</button></div>
            <div class="col-md-2 mb-1"><a href="" type="button" class="btn-sm btn-link">MGP / HSensibles</a></div>
        </div>
</div>

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="card">
<div class="card-header py-3"><h6 class="mb-0"><strong>Traitements plaintes</strong></h6></div>
<div class="card-body">

<div class="mb-3 px-3 pt-3 rounded border">
    <div class="mb-3"><span class="p-2 border rounded text-white bg-info"><strong>WORKFLOW</strong></span></div>
		<div class="row">
			<div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
        <h6 class="w-100"><span class="badge w-100 p-2 border rounded badge-outline-dark text-dark bggris">1. Ouvert</span></h6>
			</div>
			<div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
        <h6 class="w-100"><span class="badge w-100 p-2 border rounded badge-outline-dark text-dark bggris">2. Observation</span></h6>
			</div>
			<div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
        <h6 class="w-100"><span class="badge w-100 p-2 border rounded badge-dark">3. Sp&eacute;cialiste</span></h6>
			</div>
			<div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
        <h6 class="w-100"><span class="badge w-100 p-2 border rounded badge-outline-dark text-dark">4. R&eacute;ponse</span></h6>
			</div>
			<div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
        <h6 class="w-100"><span class="badge w-100 p-2 border rounded badge-outline-dark text-dark">5. Round</span></h6>
			</div>
			<div class="col-xl-2 col-sm-4 col-12 mb-1 d-flex">
        <h6 class="w-100"><span class="badge w-100 p-2 border rounded badge-outline-dark text-dark">6. Cl&ocirc;tur&eacute;e</span></h6>
			</div>
		</div>
	</div>

  <div class="mb-3 px-3 pt-3 border rounded">
		<div class="row">
			<div class="col-xl-4 col-sm-12 col-12 mb-1">
				  <div class="d-flex justify-content-between px-md-1">
                    <table cellspacing="0" cellpadding="0" border="0">
                    <tr><td>Pr&eacute;nom</td><td width="10"></td><td><div class="border bg-light p-2"><strong>Julie</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Nom</td><td width="10"></td><td><div class="border bg-light p-2"><strong>Kitoko</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Postnom</td><td width="10"></td><td><div class="border bg-light p-2"><strong>Nabintu</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>T&eacute;l&eacute;phone</td><td width="10"></td><td><div class="border bg-light p-2"><strong>084 03 05 955</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    </table>
				  </div>
			</div>
			<div class="col-xl-4 col-sm-12 col-12 mb-1">
				  <div class="d-flex justify-content-between px-md-1">
                    <table cellspacing="0" cellpadding="0" border="0">
                    <tr><td>Lieu Incident</td><td width="10"></td><td><div class="border bg-light p-2"><strong>Bukavu</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Date Incident</td><td width="10"></td><td><div class="border bg-light p-2"><strong>14-03-2023</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Date Plainte</td><td width="10"></td><td><div class="border bg-light p-2"><strong>26-05-2023</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Date Cl&ocirc;ture</td><td width="10"></td><td><input type="date" name="" id="" class="form-control"></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    </table>
				  </div>
			</div>
			<div class="col-xl-4 col-sm-12 col-12 mb-1">
				  <div class="d-flex justify-content-between px-md-1">
                    <table cellspacing="0" cellpadding="0" border="0">
                    <tr><td>Num&nbsp;Ticket</td><td width="10"></td><td><div class="border bg-light p-2"><strong>002586</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Cat&eacute;gorie</td><td width="10"></td><td><div class="border bg-light p-2"><strong>VBG</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>Sp&eacute;cialiste</td><td width="10"></td><td><div class="border bg-light p-2"><strong>Benjamin Ngande</strong></div></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr><td>SLA</td><td width="10"></td><td valign="top"><span class="badge rounded-pill badge-success m-1 p-2"> </span>&nbsp;&nbsp;<button type="submit" class="btn-sm btn-success" name="ok">OK</button>&nbsp;&nbsp;<button type="submit" class="btn-sm btn-danger" name="ko">KO</button></td></tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    </table>
				  </div>
			</div>
		</div>
  </div>

		<div class="row">
			<div class="mb-1">
				  <div class="p-3 border rounded">

            <div class="row mb-3">
                <div class="col-md-3 mb-1"><span class="p-2 border rounded text-white bg-info"><strong>Description Plainte</strong></span></div>
                <div class="col-md-9 mb-1"><textarea name="" id="" class="form-control">Tentative d'agression sexuelle par un agent après multiple refus de ma part de céder à ses avances.</textarea></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 mb-1"><span class="p-2 border rounded text-white bg-info"><strong>Solutions</strong></span></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-primary"><strong>R&eacute;ponse 1</strong></span></div><div class="col-md-4 mb-1"><textarea name="" id="" class="form-control">Prenez contact avec notre antenne au Sud-Kivu</textarea></div>
                <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-success"><strong>R&eacute;sultat 1</strong></span></div><div class="col-md-4 mb-1"><textarea name="" id="" class="form-control">Sans suite</textarea></div>
            </div>
            <div class="row">
                <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-primary"><strong>R2</strong></span></div><div class="col-md-4 mb-1"><textarea name="" id="" class="form-control">Appelez la Police</textarea></div>
                <div class="col-md-2 mb-1"><span class="p-2 border rounded-pill text-white bg-success"><strong>R&eacute;sultat 2</strong></span></div><div class="col-md-4 mb-1"><textarea name="" id="" class="form-control">OK</textarea></div>
            </div>

				  </div>
			</div>
		</div>
</div>
</div>
</div>
</div>


@endsection
