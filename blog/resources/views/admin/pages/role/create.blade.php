@extends('admin.layouts.master')
@section('title')
    Role create - admin panel
@endsection


@section('admin-content')
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Roles create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('roles.index')}}">All Roles</a></li>
                    <li><span>All Roles</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
             @include('admin.layouts.partials.logout')
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Role create</h4>
                    <form action="{{route('roles.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="role name" name="name">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permissions</label>
                            <div class="form-check">
                                <input type="checkbox"class="form-check-input" id="checkdata" value="">
                                <label class="form-check-label" for="exampleCheckAll">All</label>
                            </div>
                            <hr>
                            @php $i = 1; @endphp
                            @foreach ($permissionGroups as $group)
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-check">
                                        <input type="checkbox" name="permissions[]" class="form-check-input" id="{{$i}}Management" value="{{$group->name}}" onclick="checkPermissionByGroup('role-{{$i}}-checkbox',this)">

                                        <label class="form-check-label" for="checkPermission">
                                               {{$group->name}}
                                                </label>
                                      
                                    </div>
                                  </div>
                                
                                  <div class="col-md-3 role-{{$i}}-checkbox">
                                 @php
                                    $permissions = \App\Models\User::getPermissionsByGroupName($group->name);
                                     $j = 1;
                                 @endphp
                                        @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" name="permissions[]" class="form-check-input" id="exampleCheck{{$permission->id}}" value="{{$permission->name}}">
                                            <label class="form-check-label" for="exampleCheck{{$permission->id}}">{{$permission->name}}</label>
                                        </div>
                                        @php $j++; @endphp 
                                        @endforeach
                                        <br><br>
                                  </div>
                              </div>
                              @php $i++; @endphp      
                            @endforeach
                          
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
    @include('admin.layouts.partials.scripts')
@endsection
