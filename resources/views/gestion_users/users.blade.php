@extends('layouts/app')

@section('title', 'DashboardThimo')
@section('content')

   <!-- Content wrapper -->
   <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">New /</span> User</h4>

              <!-- Basic Bootstrap Table -->

              {{-- start insert user form --}}  

                <div class="modal fade" id="pcaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <form id="main_form">
                            @csrf
                              <div class="modal-content">
                                        <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                            <div class="modal-body">
                                                      <div class="alert alert-success text-center" id="msgDiv" style="display:none">
                                                          <p id="return_msg_add" class="text-success"></p>
                                                      </div>
                                                <div class="row">
                                    
                                                    <div class="col-md-6">
                                                            <div class="form-label-group"> 
                                                               </div>
                                                              <!-- Name -->
                                                            <label for="defaultFormControlInput" class="form-label" :value="__('Name')">Name</label>
                                                            <input 
                                                              class="form-control" 
                                                              placeholder="Your Name"
                                                              aria-describedby="defaultFormControlHelp" 
                                                              id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                                                            />
                                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                                            <!-- Email Address -->
                                                            <label for="defaultFormControlInput" class="form-label" :value="__('Name')">Email</label>
                                                            <input 
                                                              class="form-control" 
                                                              placeholder="Your Email"
                                                              aria-describedby="defaultFormControlHelp" 
                                                              id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email"
                                                            />
                                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                            
                                                            <!-- Password -->
                                                            <label for="defaultFormControlInput" class="form-label" :value="__('Password')">Password</label>
                                                            <input 
                                                              class="form-control" 
                                                              placeholder="Your password"
                                                              aria-describedby="defaultFormControlHelp" 
                                                              id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"
                                                            />
                                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                                            <!-- Confirm Password -->
                                                            <label for="defaultFormControlInput" class="form-label" :value="__('Confirm Password')"></label>
                                                            <input 
                                                              class="form-control"  
                                                              placeholder="Confirm your password"
                                                              aria-describedby="defaultFormControlHelp" 
                                                              id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"  required autocomplete="new-password"
                                                            />
                                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                            
                                                            <!-- Role -->
                                                            <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                                            <select class="form-select" id="type" name="type" aria-label="Default select example">
                                                                @if($data_role)
                                                                    @foreach($data_role as $d)
                                                                    <option value="{{$d->id}}">{{$d->title}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <div class="modal-footer"> 
                                                               <button type="submit" id="btn_add" class="btn btn-primary">Save</button>
                                                            </div>
                                    
                                                    </div>
                                              </div>
                        
                                          </div>
                                                
                              </div>
                           </form>
                      </div>
                </div>
              {{-- end insert user form --}}

 

                {{-- start update user form --}}

         <div class="container">
             <div class="row"> 
                  <div class="col-md-4">
                          <div class="modal fade " id="pcedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
                                                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>  </button>
                                          </div>
                                        <div class="modal-body"> 
                                                  <form id="second_form">
                                                                @csrf
                                                            <div class="form-group">
                                                                <div class="alert alert-success text-center" id="msgDiv" style="display:none">
                                                                        <p id="messg" class="text-success"></p>
                                                                </div>
                                                            </div>
                                                      <div class="row">  
                                                            <div class="col-md-6">
                                                                <div class="form-label-group"> 
                                                                        <input type="hidden" id="id_user_upd" name="id_user_upd">
                                                                          <label for="moms">Name</label>
                                                                          <input type="text" class="form-control" id="name_usr_upd" name="name_usr_upd">  
                                                                          <span class="text-danger error-text name_usr_upd_error"></span>  
                                                                  </div>
                                                                  <div class="form-label-group">  
                                                                          <label for="moms">Email</label>
                                                                          <input type="email" class="form-control" id="email_usr_upd" name="email_usr_upd">  
                                                                          <span class="text-danger error-text email_usr_upd_error"></span>  
                                                                  </div>
                                                                    <div class="form-label-group">   
                                                                        <label for="moms">Password</label>
                                                                        <input type="password" class="form-control" id="password_usr_upd" name="password_usr_upd">  
                                                                        <span class="text-danger error-text password_usr_upd_error"></span>  
                                                                    </div>
                                                                      <div class="form-label-group">
                                                                          <label for="moms">ConfirmerPassword</label>
                                                                          <input type="password" class="form-control" id="password_confirmation_usr_upd" name="password_confirmation_usr_upd">  
                                                                          <span class="text-danger error-text password_confirmation_usr_upd_error"></span>  
                                                                      </div>
                                                                        <div class="form-label-group">
                                                                            <label for="moms">Role</label>
                                                                            <select class="form-select" id="id_role_usr_upd" name="id_role_usr_upd" aria-label="Default select example">
                                                                              @if($data_role)
                                                                                  @foreach($data_role as $dd)
                                                                                  <option value="{{$dd->id}}">{{$dd->title}}</option>
                                                                                  @endforeach
                                                                              @endif
                                                                          </select>
                                                                            <span class="text-danger error-text id_role_usr_upd_error"></span>  
                                                                        </div> 

                                                                        <div class="modal-footer"> 
                                                                          <button type="submit" id="btn_addpc" class="btn btn-info">Update</button>
                                                                          </div>
                                                            </div>
                                                        </div> 
                                            
                                                        
                                                  </form>
                                          </div>
                                    </div>
                                </div>
                          </div> 
                    </div> 
               </div>
          </div>
            {{-- end update user form --}}




              
             
           {{-- start user table --}}
           <button type="button" class="float-end btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#pcaddmodel" title="Add New">
               Nouvel Utilisateur
          </button>
              <hr class="my-5" />

              <div class="card">
                <h5 class="card-header">User Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @if($data_user)
                      @foreach($data_user as $da)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$da->name}}</strong></td>
                        <td>{{$da->email}}</td>
                        <td>{{$da->type}}</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);" onclick="editPC({{$da->id}})"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                      
                    </tbody>
                  </table>
                </div>
              </div>
              
               {{-- end user table --}}

             
              
 
            

             
             

             
         

            
         
            </div>
            <!-- / Content -->
 
            
                  

   <script>
 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$(function(){              
    $("#main_form").on('submit', function(e){
        e.preventDefault();
        let id = $('#id_user_upd').val();
        let name = $('#name').val();
        let email = $('#email').val();
        let id_role = $('#id_role').val();
        let password = $('#password').val();
        let password_confirmation = $('#password_confirmation').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
            url:"{{route('registers')}}",
            type:'post',
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#main_form')[0].reset();
                    $("#msg").text(data.msg);
                    
                }
            }
        });
    });
});
      
    // call data from table and complete upd form fields  
    function editPC(id){
        $.get('/users/'+id, function(alluser){
          $("#id_user_upd").val(alluser.id); 
          $("#name_usr_upd").val(alluser.name); 
          $("#email_usr_upd").val(alluser.email);  
          $("#id_role_usr_upd").val(alluser.type); 
          $("#pcedit").modal('toggle');
        });
    }

    
      // send data by jquery and ajax
    $(function(){              
    $("#second_form").on('submit', function(e){
        e.preventDefault();
        let id = $('#id_user_upd').val();
        let name_usr_upd = $('#name_usr_upd').val();
        let email_usr_upd = $('#email_usr_upd').val();
        let id_role_usr_upd = $('#id_role_usr_upd').val();
        let password_usr_upd = $('#password_usr_upd').val();
        let password_confirmation_usr_upd = $('#password_confirmation_usr_upd').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
         
            type:'PUT',
            data:{
                id:id,
                name_usr_upd:name_usr_upd,
                email_usr_upd:email_usr_upd,
                id_role_usr_upd:id_role_usr_upd,
                password_usr_upd:password_usr_upd,
                password_confirmation_usr_upd:password_confirmation_usr_upd,
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
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                  //  $('#second_form')[0].reset();
                    $("#messg").text(data.msg);
                    
                }
            }
        });
    });
});
    
    </script>     



@endsection