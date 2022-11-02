@extends('admin.layouts.master')
@section('title')
    Role page - admin panel
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
@endsection

@section('admin-content')
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Roles</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('roles.create')}}">Create Role</a></li>
                    <li><span>Dashboard</span></li>
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
                    <h4 class="header-title">Role List</h4>
                    <div class="">
                        <table class="table table-striped table-hover table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="10%">Name</th>
                                    <th width="60%">Total Permissions</th>
                                    <th width="15%" style="width: 140px!important">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role)
                            <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                            <?php 
                            $role_id = $role->id;
                        
                            $html = "Total - <span class='badge badge-default mr-1'>" . count( DB::table('role_has_permissions')->where('role_id', $role_id)->get()
                                ) . "</span>";
                            echo $html;
                            ?>
                            </td>
                            <td>
                            <a class="btn btn-default btn-circle btn-xs btn-info" href="{{ route('roles.show', $role->id )}}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-success text-white" href="{{route('roles.edit',$role->id)}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger text-white" href="{{ url('roles/destroy', $role->id )}}" onclick="return confirm('Are you sure to delete')">
                            <i class="fa fa-trash"></i>
                                        </a>
                                        
                            </td>
                            
                            
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script>
    if ($('#dataTable').length) {
    $('#dataTable').DataTable({
        responsive: true
        });
    }
</script>
@endsection