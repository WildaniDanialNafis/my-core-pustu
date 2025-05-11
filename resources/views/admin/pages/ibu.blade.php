@extends('admin.layouts.layout')
@section('title', 'SB Admin 2 - Tables')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <!-- Modal -->
                @include('admin.components.create-modal')
                <!-- Modal Edit foreign -->
                @include('admin.components.edit-modal')

                @include('admin.components.table')

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
