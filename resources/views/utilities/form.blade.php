@extends('layouts.app')
@section('content')
    <div class="container">
        @include('includes.urls')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Forms</h6>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#new_form">New Form<i class="fa fa-plus"></i></a>
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
                                <th>Name</th>
                                <th>Time Registered</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Time Registered</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (!empty($forms))
                                @php
                                    $index = 1;
                                @endphp
                                @foreach ($forms as $form)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $form->name }}</td>
                                        <td>{{ $form->created_at }}</td>
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
@endsection
