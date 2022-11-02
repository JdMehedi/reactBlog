@extends('admin.layouts.master')
@section('title')
    Dashboard page - admin panel
@endsection
@section('admin-content')
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.html">Home</a></li>
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

</div>
@endsection