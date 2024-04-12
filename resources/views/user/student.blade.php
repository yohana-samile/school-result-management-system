@extends('layouts.app')
@section('content')
    <div class="container">
        @include('includes.urls')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Student Registered</h6>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#new_student">New Student<i class="fa fa-plus"></i></a>
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
                                <th>enrolment number</th>
                                <th>Name</th>
                                <th>address</th>
                                <th>Time Registered</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>enrolment number</th>
                                <th>Name</th>
                                <th>address</th>
                                <th>Time Registered</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (!empty($students))
                                @php
                                    $index = 1;
                                @endphp
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $student->enrolment_number }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->created_at }}</td>
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
    @include('modals.student_modal')
@endsection
