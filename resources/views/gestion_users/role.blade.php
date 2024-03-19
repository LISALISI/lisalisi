@extends('layouts/master')

@section('title', 'Role|Module|Droit')
@section('content')

        
<div class="row mb-4">
                            {{-- table role --}}
                            <div class="col-md-4">  
                                <div class="card h-100"> 
                                    <div class="d-flex"> 
                                        <h5 class="card-header">Role Table</h5>
                                        <button type="button" class="btn btn-sm btn-success my-3" data-bs-toggle="modal" data-bs-target="#FormAddRole" title="Add New">
                                        Nouveau Role
                                        </button>
                                    </div>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                                    <thead>
                                                                            <tr>
                                                                                <th>Categorie</th>
                                                                                <th>Name</th> 
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                    </thead>
                                                <tbody class="table-border-bottom-0">
                                                    @if($data_role)
                                                            @foreach($data_role as $role)
                                                                <tr>
                                                                    <td>{{$role->categorie}}</td>
                                                                    <td>{{$role->name}}</td>            
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="editPC({{$role->id}})"
                                                                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                                                    >
                                                                                    <a class="dropdown-item" href="{{url('role/'.$role->id.'/delete')}}" onclick="return confirm('Are you sure to delete this data?')"
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
                            </div>  
                            {{-- /table role --}}

                            {{-- table module --}}
                            <div class="col-md-4">  
                                <div class="card h-100">  
                                    <div class="d-flex">
                                        <h5 class="card-header">Module Table</h5>
                                            <button type="button" class="btn btn-sm btn-success my-3" data-bs-toggle="modal" data-bs-target="#FormAddModule" title="Add New">
                                            Nouveau Module
                                            </button>
                                    </div>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table">
                                                <thead>
                                                        <tr> 
                                                            <th>Name</th> 
                                                            <th>Actions</th>
                                                        </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    @if($data_module)
                                                            @foreach($data_module as $module)
                                                                <tr> 
                                                                    <td>{{$module->name}}</td>            
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="editModule({{$module->id}})"
                                                                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                                                    >
                                                                                    <a class="dropdown-item" href="{{url('module/'.$module->id.'/delete')}}" onclick="return confirm('Are you sure to delete this data?')"
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
                            </div>     
                            {{-- / table module --}}

                            {{-- table droit --}}
                            <div class="col-md-4">    
                                <div class="card h-100">
                                    <div class="d-flex">
                                        <h5 class="card-header">Droit Table</h5>
                                            <button type="button" class="btn btn-sm btn-success my-3" data-bs-toggle="modal" data-bs-target="#FormAddDroit" title="Add New">
                                            Nouveau Droit
                                            </button>
                                    </div>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                    <thead>
                                                            <tr> 
                                                                <th>Module</th> 
                                                                <th>Role</th> 
                                                                <th>Droit</th> 
                                                                <th>Red</th> 
                                                                <th>Write</th> 
                                                                <th>Delete</th> 
                                                                <th>Export</th> 
                                                                <th>Import</th> 
                                                                <th>Actions</th>
                                                            </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        @if($data_droit)
                                                                @foreach($data_droit as $droit)
                                                                    <tr> 
                                                                        <td>{{$droit->module_name}}</td>            
                                                                        <td>{{$droit->role_name}}</td>            
                                                                        <td>{{$droit->name}}</td>  
                                                                        <td>           
                                                                            @if($droit->red==1)
                                                                            <span class="badge bg-label-primary me-1">Oui </span>
                                                                            @else 
                                                                            <span class="badge bg-label-danger me-1">Non</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>           
                                                                            @if($droit->write==1)
                                                                            <span class="badge bg-label-primary me-1">Oui </span>
                                                                            @else 
                                                                            <span class="badge bg-label-danger me-1">Non</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>           
                                                                            @if($droit->update==1)
                                                                            <span class="badge bg-label-primary me-1">Oui </span>
                                                                            @else 
                                                                            <span class="badge bg-label-danger me-1">Non</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>           
                                                                            @if($droit->delete==1)
                                                                            <span class="badge bg-label-primary me-1">Oui </span>
                                                                            @else 
                                                                            <span class="badge bg-label-danger me-1">Non</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>           
                                                                            @if($droit->import==1)
                                                                            <span class="badge bg-label-primary me-1">Oui </span>
                                                                            @else 
                                                                            <span class="badge bg-label-danger me-1">Non</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>           
                                                                            @if($droit->export==1)
                                                                            <span class="badge bg-label-primary me-1">Oui </span>
                                                                            @else 
                                                                            <span class="badge bg-label-danger me-1">Non</span>
                                                                            @endif
                                                                        </td>          
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                                </button>
                                                                                <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="editDroit({{$droit->id}})"
                                                                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                                                        >
                                                                                        <a class="dropdown-item" href="{{url('droit/'.$droit->id.'/delete')}}" onclick="return confirm('Are you sure to delete this data?')"
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
                            </div> 
                            {{-- / table droit --}}
</div>
        
<div class="row mb-4">
                            {{-- table user --}}
                            <div class="col-md-12">  
                                <div class="card">  
                                    <div class="d-flex">
                                        <h5 class="card-header">User Table</h5>
                                        <button type="button" class="btn btn-sm btn-success my-3" data-bs-toggle="modal" data-bs-target="#FormAddUser" title="Add New">
                                            Nouvel utilisateur
                                        </button>
                                    </div>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                                    <thead>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>Role</th>
                                                                                <th>Localisation</th>
                                                                                <th>Categorie</th>
                                                                                <th>Status</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                    </thead>
                                                <tbody class="table-border-bottom-0">
                                                    @if($data_user)
                                                            @foreach($data_user as $user)
                                                                <tr>
                                                                    <td>{{$user->name}}</td>
                                                                    <td>{{$user->email}}</td>
                                                                    <td>{{$user->role_name}}</td>
                                                                    <td>{{$user->localisation}}</td>
                                                                    <td>{{$user->role_categorie}}</td>
                                                                    <td>
                                                                        @if($user->status==1)
                                                                        <span class="badge bg-label-primary me-1">Activated</span>
                                                                        @else
                                                                        <span class="badge bg-label-danger me-1">Desabled</span>
                                                                        @endif
                                                                        
                                                                        
                                                                    </td>          
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="viewUser({{$user->id}})"
                                                                                        ><i class="bx bx-show-alt me-1"></i> View</a
                                                                                    > 
                                                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="editUser({{$user->id}})"
                                                                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                                                    > 
                                                                                    @if($user->status==1) 
                                                                                    <a class="dropdown-item" href="{{url('user/'.$user->id.'/desactive')}}" onclick="return confirm('Are you sure to disable this user?')"
                                                                                        ><i class="bx bx-dislike me-1"></i>Disabled</a
                                                                                    >
                                                                                    @else
                                                                                    <a class="dropdown-item" href="{{url('user/'.$user->id.'/desactive')}}" onclick="return confirm('Are you sure to activate this user?')"
                                                                                        ><i class="bx bx-dislike me-1"></i> Activated</a
                                                                                    >
                                                                                    @endif
                                                                                    <a class="dropdown-item" href="{{url('user/'.$user->id.'/delete')}}" onclick="return confirm('Are you sure to delete this data?')"
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
                            </div>  
                            {{-- /table user --}}
</div>

<div class="container">

<!-- Button trigger modal -->
  
<!-- Modal -->

 {{-- Insert role form --}}
    <div class="modal fade" id="FormAddRole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <form id="main_form">
                    @csrf
                         <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                                                <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                    <div class="modal-body">
                                                            <p id="msg" class="text-success"></p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <div class="form-label-group">
                                                        <label for="moms">Name</label>
                                                        <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                                                        <input type="text" class="form-control" placeholder="role name..." name="role_name" autocomplete="off">
                                                        <span class="text-danger error-text role_name_error"></span>  
                                                    </div>
                                                    <div class="form-label-group">
                                                        <label for="moms">Catégorie</label>
                                                        <input type="text" class="form-control" placeholder="role categorie..." name="role_categorie" autocomplete="off">
                                                        <span class="text-danger error-text role_categorie_error"></span>  
                                                    </div> 
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
{{-- End role form --}}

 {{-- Insert module form --}}
 <div class="modal fade" id="FormAddModule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form id="module_form">
               @csrf
                    <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Add Module</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                               <div class="modal-body">
                                                       <p id="module_msg" class="text-success"></p>
                                   <div class="row">
                                       <div class="col-md-12">
                                               <div class="form-label-group">
                                                   <label for="moms">Name</label>
                                                   <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                                                   <input type="text" class="form-control" placeholder="mudule name..." name="module_name" autocomplete="off">
                                                   <span class="text-danger error-text module_name_error"></span>  
                                               </div>
                                               
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
{{-- End role form --}}


{{-- Insert droit form --}}
<div class="modal fade" id="FormAddDroit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form id="droit_form">
               @csrf
                    <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Add Droit</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                               <div class="modal-body">
                                                       <p id="droit_msg" class="text-success"></p>
                                   <div class="row">
                                       <div class="col-md-12">
                                               <div class="form-label-group">
                                                   <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                                                   <label for="exampleFormControlSelect1" class="form-label">Nom droit</label>
                                                   <input type="text" class="form-control" name="droit_name" >
                                                   <span class="text-danger error-text droit_name_error"></span> 
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="exampleFormControlSelect1" class="form-label">Module</label>
                                                    <select class="form-select" name="modules_id" aria-label="Default select example">
                                                      @if($data_module)
                                                        @foreach($data_module as $module2)
                                                         <option value="{{$module2->id}}">{{$module2->name}}</option>
                                                        @endforeach
                                                      @endif
                                                    </select> 
                                                    <span class="text-danger error-text modules_id_error"></span> 
                                                 </div>

                                                 <div class="form-label-group">
                                                    <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                                        <select class="form-select" name="roles_id" aria-label="Default select example">
                                                            @if($data_role)
                                                                @foreach($data_role as $role2)
                                                                <option value="{{$role2->id}}">{{$role2->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select> 
                                                    <span class="text-danger error-text roles_id_error"></span> 
                                                 </div>

                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="red" />
                                                    <label class="form-check-label" for="defaultCheck1">Red</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="write" />
                                                    <label class="form-check-label" for="defaultCheck1">Write</label>
                                                  </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="update" />
                                                    <label class="form-check-label" for="defaultCheck1">Update</label>
                                                  </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="delete" />
                                                    <label class="form-check-label" for="defaultCheck1">Delete</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="import" />
                                                    <label class="form-check-label" for="defaultCheck1">Import</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="export" />
                                                    <label class="form-check-label" for="defaultCheck1">Export</label>
                                                 </div>
                                                
                                               
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
{{-- /insert droit form --}}


{{-- Insert user form --}}
<div class="modal fade" id="FormAddUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form id="user_form">
               @csrf
                    <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                               <div class="modal-body">
                                        <p id="user_msg" class="text-success"></p>
                                        <p id="user_msg_error" class="text-danger"></p>
                                   <div class="row">
                                       <div class="col-md-12">
                                                
                                                <div class="form-label-group"> 
                                                    {{-- <input type="hidden" name="id_user"> --}}
                                                    <label for="moms">Name</label>
                                                    <input type="text" class="form-control" name="name" :value="old('name')">  
                                                    <span class="text-danger error-text name_error"></span>  
                                                    {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}

                                                </div>
                                                <div class="form-label-group">  
                                                        <label for="moms">Email</label>
                                                        <input type="email" class="form-control" name="email" :value="old('email')">  
                                                        <span class="text-danger error-text email_error"></span>  
                                                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                                </div>
                                                <div class="form-label-group">   
                                                    <label for="moms">Password</label>
                                                    <input type="password" class="form-control" name="password" :value="__('Password')">  
                                                    <span class="text-danger error-text password_error"></span> 
                                                    {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" />  --}}
                                                </div>
                                                <div class="form-label-group">
                                                    <label for="moms">ConfirmerPassword</label>
                                                    <input type="password" class="form-control" name="password_confirmation" >  
                                                    <span class="text-danger error-text password_confirmation_error"></span>  
                                                    {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
                                                </div>
                                                <div class="form-label-group">
                                                    <label for="moms">Role</label>
                                                    <select class="form-select" name="user_id_role" id="user_id_role" aria-label="Default select example">
                                                    @if($data_role)
                                                        @foreach($data_role as $role4)
                                                        <option value="{{$role4->id}}">{{$role4->name}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
                                                    <span class="text-danger error-text user_id_role_error"></span>  
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="moms">Localisation</label>
                                                    <select class="form-select" name="localisation" aria-label="Default select example">
                                                    @if($data_local)
                                                        @foreach($data_local as $local)
                                                        <option value="{{$local->name}}">{{$local->name}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
                                                    <span class="text-danger error-text localisation_error"></span>  
                                                </div>
                                                

                                                  
                                               
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
{{-- /insert user form --}}




{{-- upd role form --}}
<div class="row">  
 <div class="col-md-6">
   <div class="modal fade " id="callFormUpdRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
                               <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Role</h5>
                                            <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                </div>
            <div class="modal-body">
 
                <form id="second_form">
                    @csrf
                           <div class="form-group">
                                <p id="messg" class="text-success"></p>
                                </div>
                     <div class="row">  
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <label for="moms">Name</label>
                                <input type="hidden" id="id_role" name="id_role">
                                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                                <input type="text" class="form-control" placeholder="role name..." name="role_name" id="role_name" autocomplete="off">
                                <span class="text-danger error-text role_name_error"></span>  
                            </div>
                            <div class="form-label-group">
                                <label for="moms">Catégorie</label>
                                <input type="text" class="form-control" placeholder="role categorie..." name="role_categorie" id="role_categorie" autocomplete="off">
                                <span class="text-danger error-text role_categorie_error"></span>  
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
{{-- /upd role form --}}

{{-- upd module form --}}
 <div class="row">  
    <div class="col-md-6">
        <div class="modal fade " id="callFormUpdModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Module</h5>
                                                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                </button>
                                    </div>
                <div class="modal-body">
        
                    <form id="upd_module_form">
                        @csrf
                                <div class="form-group">
                                    <p id="module_upd_msg" class="text-success"></p>
                                </div>
                            <div class="row">  
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label for="moms">Name</label>
                                    <input type="hidden" id="id_module" name="id_module">
                                    <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                                    <input type="text" class="form-control" placeholder="role name..." name="module_name" id="module_name" autocomplete="off">
                                    <span class="text-danger error-text module_name_error"></span>  
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

{{--/ upd module form --}}


{{-- upd droit form --}}
<div class="modal fade" id="callFormUpdDroit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form id="upd_droit_form">
               @csrf
                    <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Update Droit</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                               <div class="modal-body">
                                                       <p id="droit_upd_msg" class="text-success"></p>
                                   <div class="row">
                                       <div class="col-md-6">
                                               <div class="form-label-group">
                                                    <input type="hidden" class="form-control" id="id" name="id">
                                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                   <label for="exampleFormControlSelect1" class="form-label">Nom droit</label>
                                                   <input type="text" class="form-control" name="droit_name" id="droit_name" >
                                                  
                                                   <span class="text-danger error-text droit_name_error"></span> 
                                                </div>

                                                <div class="form-label-group">
                                                    <label for="exampleFormControlSelect1" class="form-label">Module</label>
                                                    <select class="form-select" name="modules_id" id="modules_id" aria-label="Default select example">
                                                      @if($data_module)
                                                        @foreach($data_module as $module3)
                                                         <option value="{{$module3->id}}">{{$module3->name}}</option>
                                                        @endforeach
                                                      @endif
                                                    </select> 
                                                    <span class="text-danger error-text modules_id_error"></span> 
                                                 </div>

                                                 <div class="form-label-group">
                                                    <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                                        <select class="form-select" name="roles_id" id="roles_id" aria-label="Default select example">
                                                            @if($data_role)
                                                                @foreach($data_role as $role3)
                                                                <option value="{{$role3->id}}">{{$role3->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select> 
                                                    <span class="text-danger error-text roles_id_error"></span> 
                                                 </div>

                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="red" id="red_" />
                                                    <label class="form-check-label" for="defaultCheck1">Red</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="write" id="write_" />
                                                    <label class="form-check-label" for="defaultCheck1">Write</label>
                                                  </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="update_" id="update_" />
                                                    <label class="form-check-label" for="defaultCheck1">Update</label>
                                                  </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="delete_" id="delete_" />
                                                    <label class="form-check-label" for="defaultCheck1">Delete</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="import_" id="import_" />
                                                    <label class="form-check-label" for="defaultCheck1">Import</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                    <input class="form-check-input" type="checkbox" value="1" name="export_" id="export_" />
                                                    <label class="form-check-label" for="defaultCheck1">Export</label>
                                                 </div>
                                                
                                               
                                               <div class="modal-footer"> 
                                                <button type="submit" id="btn_droit" class="btn btn-info">Update</button>
                                               </div>
                                       </div>
                                   </div> 
                               </div>
                               
                    </div>
       </form>
   </div>
</div>
{{-- / droit form --}}
 

{{-- upd user form --}}
<div class="modal fade" id="callFormUpdUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form id="upd_user_form">
               @csrf
                    <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                               <div class="modal-body">
                                                       <p id="user_upd_msg" class="text-success"></p>
                                  <div class="row">
                                     <div class="col-md-6">
                                               

                                        <div class="form-label-group"> 
                                            <input type="hidden" name="id_user" id="id_user">
                                            <label for="moms">Name</label>
                                            <input type="text" class="form-control" name="user_name" id="user_name">  
                                            <span class="text-danger error-text user_name_error"></span>  
                                        </div>
                                        <div class="form-label-group">  
                                                <label for="moms">Email</label>
                                                <input type="email" class="form-control" name="user_email" readonly id="user_email">  
                                                <span class="text-danger error-text email_error"></span>  
                                        </div>
                                        <div class="form-label-group">   
                                            <label for="moms">Password</label>
                                            <input type="password" class="form-control" name="user_password" id="user_password">  
                                            <span class="text-danger error-text password_error"></span>  
                                        </div>
                                        <div class="form-label-group">
                                            <label for="moms">ConfirmerPassword</label>
                                            <input type="password" class="form-control" id="user_password_confirmation"  name="user_password_confirmation">  
                                            <span class="text-danger error-text password_confirmation_error"></span>  
                                        </div>
                                        <div class="form-label-group">
                                            <label for="moms">Role</label>
                                            <select class="form-select" name="user_id_role" id="user_id_role" aria-label="Default select example">
                                            @if($data_role)
                                                @foreach($data_role as $role4)
                                                <option value="{{$role4->id}}">{{$role4->name}}</option>
                                                @endforeach
                                            @endif
                                            </select>
                                            <span class="text-danger error-text id_role_error"></span>  
                                        </div>

                                        <div class="form-label-group">
                                            <label for="moms">Localisation</label>
                                            <select class="form-select" name="localisation" id="localisation" aria-label="Default select example">
                                            @if($data_local)
                                                @foreach($data_local as $local2)
                                                <option value="{{$local2->name}}">{{$local2->name}}</option>
                                                @endforeach
                                            @endif
                                            </select>
                                            <span class="text-danger error-text localisation_error"></span>  
                                        </div>   
                                               
                                               <div class="modal-footer"> 
                                                <button type="submit" id="btn_droit" class="btn btn-info">Update</button>
                                               </div>
                                     </div>
                                  </div> 
                             </div>
                               
                    </div>
       </form>
   </div>
</div>
{{-- /upd users form --}}



{{-- view user form --}}
<div class="modal fade" id="viewUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form id="view_user_form">
               @csrf
                    <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">View User</h5>
                                           <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                               <div class="modal-body">
                                                       <p id="user_upd_msg" class="text-success"></p>
                                  <div class="row">
                                     <div class="col-md-12">
                                               

                                         <div class="form-label-group"> 
                                            <label for="">Name</label>
                                             <input type="text" class="form-control" readonly name="view_user" id="view_user">  
                                         </div>
                                         <div class="form-label-group"> 
                                            {{-- <label for="">Role</label> --}}
                                             <input type="hidden" class="form-control" readonly name="role_user" id="role_user">  
                                         </div>
                                        <div class="form-label-group">  
                                                
                                            <div class="table-responsive text-nowrap" id="tab1">
                                                {{-- <table class="table" id="tab1">
                                                        <thead>
                                                                <tr> 
                                                                    <th>Module</th>  
                                                                    <th>Droit</th> 
                                                                    <th>Red</th> 
                                                                    <th>Write</th> 
                                                                    <th>Delete</th> 
                                                                    <th>Export</th> 
                                                                    <th>Import</th>  
                                                                </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0">
                                                            {{-- @if($data_droit)
                                                                    @foreach($data_droit as $droit)
                                                                        <tr> 
                                                                            <td>{{$droit->module_name}}</td>           
                                                                            <td>{{$droit->name}}</td>  
                                                                            <td>           
                                                                                @if($droit->red==1)
                                                                                <span class="badge bg-label-primary me-1">Oui </span>
                                                                                @else 
                                                                                <span class="badge bg-label-danger me-1">Non</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>           
                                                                                @if($droit->write==1)
                                                                                <span class="badge bg-label-primary me-1">Oui </span>
                                                                                @else 
                                                                                <span class="badge bg-label-danger me-1">Non</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>           
                                                                                @if($droit->update==1)
                                                                                <span class="badge bg-label-primary me-1">Oui </span>
                                                                                @else 
                                                                                <span class="badge bg-label-danger me-1">Non</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>           
                                                                                @if($droit->delete==1)
                                                                                <span class="badge bg-label-primary me-1">Oui </span>
                                                                                @else 
                                                                                <span class="badge bg-label-danger me-1">Non</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>           
                                                                                @if($droit->import==1)
                                                                                <span class="badge bg-label-primary me-1">Oui </span>
                                                                                @else 
                                                                                <span class="badge bg-label-danger me-1">Non</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>           
                                                                                @if($droit->export==1)
                                                                                <span class="badge bg-label-primary me-1">Oui </span>
                                                                                @else 
                                                                                <span class="badge bg-label-danger me-1">Non</span>
                                                                                @endif
                                                                            </td>          
                                                                            <td>
                                                                               
                                                                            </td>
                                                                            </tr>
                                                                    @endforeach
                                                            @endif  
                                                        </tbody>
                                                </table> --}}


                                            </div>

                                        </div>
                                         
                                               
                                     </div>
                                  </div> 
                             </div>
                               
                    </div>
       </form>
   </div>
</div>
{{-- /view users form --}}



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<script>
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 
//  sent data from insert role form
$(function(){              
    $("#main_form").on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url:"{{url('role')}}",
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

//  sent data from insert module form
$(function(){              
    $("#module_form").on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url:"{{url('add_module')}}",
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
                    $('#module_form')[0].reset();
                    $("#module_msg").text(data.msg);
                    
                }
            }
        });
    });
});

//  sent data from insert droit form
$(function(){              
    $("#droit_form").on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url:"{{url('add_droit')}}",
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
                    $('#droit_form')[0].reset();
                    $("#droit_msg").text(data.msg);
                    
                }
            }
        });
    });
});

//  sent data from insert user form
$(function(){              
    $("#user_form").on('submit', function(e){
        e.preventDefault();

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
                    // $("#user_msg_error").text(data.errors);
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#user_form')[0].reset();
                    $("#user_msg").text(data.msg);
                    
                }
            }
        });
    });
});

//  fill data in role upd form
function editPC(id){
        $.get('role/'+id, function(var_role){ 
            $("#id_role").val(var_role.id);
            $("#role_name").val(var_role.name);
            $("#role_categorie").val(var_role.categorie);  
            $("#callFormUpdRole").modal('toggle');
        });
    }
 //  fill data in module upd form   
function editModule(id){
        $.get('module/'+id, function(var_module){ 
            $("#id_module").val(var_module.id);
            $("#module_name").val(var_module.name); 
            $("#callFormUpdModule").modal('toggle');
        });
    }
 //  fill data in droit upd form   
function editUser(id){
        $.get('users/'+id, function(var_user){ 
            $("#id_user").val(var_user.id);
            $("#user_name").val(var_user.name);
            $("#user_email").val(var_user.email);
            $("#localisation").val(var_user.localisation);
            $("#user_id_role").val(var_user.id_role); 
            
            $("#callFormUpdUser").modal('toggle');
        });
    }

    function viewUser(id){
        $.get('userview/'+id, function([output, var_view]){ 
            
          //  console.log(var_view['name']);
           // $("#tab1 tbody").val(var_viewUser.name);
            $("#view_user").val(var_view.name); 
            // $("#role_user").val(var_view.role_name); 

            $('#tab1').html(output);  
                     

            $("#viewUser").modal('toggle');
          });
    }
     
    

    function editDroit(id){
        $.get('droit/'+id, function(var_droit){ 
            $("#id").val(var_droit.id);
            $("#droit_name").val(var_droit.name);
            $("#roles_id").val(var_droit.roles_id);
            $("#modules_id").val(var_droit.modules_id);
            $("#red").val(var_droit.red);
            $("#write").val(var_droit.write);
            $("#update").val(var_droit.update);
            $("#delete").val(var_droit.delete);
            $("#import").val(var_droit.import);
            $("#export").val(var_droit.export); 
            
            $("#callFormUpdDroit").modal('toggle');
        });
    }

// upd role
    $(function(){              
    $("#second_form").on('submit', function(e){
        e.preventDefault();
        let id = $('#id_role').val();
        let user_id = $('#user_id').val();
        let name = $('#role_name').val();
        let categorie = $('#role_categorie').val(); 
        let _token = $('input[name=_token]').val();
        $.ajax({
            
            url:"{{url('upd')}}", 
            type:'post',
            data:{
                id:id,
                user_id:user_id,
                name:name,
                categorie:categorie,
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

// upd module
$(function(){              
    $("#upd_module_form").on('submit', function(e){
        e.preventDefault();
        let id = $('#id_module').val();
        let user_id = $('#user_id').val();
        let name = $('#module_name').val();  
        let _token = $('input[name=_token]').val();
        $.ajax({
            
            url:"{{url('upd_module')}}", 
            type:'post',
            data:{
                id:id,
                user_id:user_id,
                name:name, 
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
                    $("#module_upd_msg").text(data.msg);
                    
                }
            }
        });
    });
});




// upd droit
$(function(){               
    $("#upd_droit_form").on('submit', function(e){
        e.preventDefault();
        // let id = $('#droit_id').val();
        // let user_id = $('#user_id').val();
        // let name = $('#droit_name').val();  
        // let roles_id = $('#roles_id').val();  
        // let modules_id = $('#modules_id').val();  
        // let red = $('#red_').val();  
        // let write = $('#write_').val();  
        // let update_ = $('#update_').val();  
        // let delete_ = $('#delete_').val();  
        // let import_ = $('#import_').val();  
        // let export_ = $('#export_').val();  
        // let _token = $('input[name=_token]').val();
        $.ajax({
            
            url:"{{url('upd_droit')}}", 
            type:'post',
            // data:{
            //     id:id,
            //     user_id:user_id,
            //     name:name, 
            //     roles_id:roles_id, 
            //     modules_id:modules_id, 
            //     red:red, 
            //     write:write, 
            //     update:update_, 
            //     delete:delete_, 
            //     import:import_, 
            //     export:export_, 
            //     _token:_token
            // },
           
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
                  //  $('#second_form')[0].reset();
                    $("#droit_upd_msg").text(data.msg);
                    
                }
            }
        });
    });
});







// upd user
$(function(){               
    $("#upd_user_form").on('submit', function(e){
        e.preventDefault();
        let id = $('#id_user').val();
        let user_name = $('#user_name').val();
        let user_email = $('#user_email').val();  
        let user_password = $('#user_password').val();  
        let user_password_confirmation = $('#user_password_confirmation').val();  
        let user_id_role = $('#user_id_role').val(); 
        let localisation = $('#localisation').val(); 
        let _token = $('input[name=_token]').val();
        $.ajax({
            
            url:"{{url('upd_user')}}", 
            type:'post',
            data:{
                id:id,
                name:user_name,
                email:user_email, 
                password:user_password, 
                password_confirmation:user_password_confirmation, 
                id_role:user_id_role,
                localisation:localisation,
                _token:_token
            },
            

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
                    $("#user_upd_msg").text(data.msg);
                    
                }
            }
        });
    });
});
 
</script>


@endsection