@extends('layouts.app')
@section('content')
    <div class="container">
        @include('includes.urls')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Staff Registered</h6>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#new_teacher">New <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="alert alert-success" style="display: none;"></div>
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>regstration_number</th>
                                <th>Name</th>
                                <th>phone_number</th>
                                <th>Time Registered</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>regstration_number</th>
                                <th>Name</th>
                                <th>phone_number</th>
                                <th>Time Registered</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (!empty($teachers))
                                @php
                                    $index = 1;
                                @endphp
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $teacher->regstration_number }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>+255{{ $teacher->phone_number }}</td>
                                        <td>{{ $teacher->created_at }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <i class="fa fa-eye text-primary"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="fa fa-edit text-success"></i>
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="fa fa-trash text-danger"></i>
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
    </div>
    @include('modals.staff_model')
@endsection
