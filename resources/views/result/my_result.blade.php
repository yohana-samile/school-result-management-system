@extends('layouts.app')
@section('content')
    <div class="containter">
        @include('includes.urls')
        @if (!empty($my_result))
            <table id="tableToPrint" class="table table-striped mb-0">
                <tbody>
                    <tr>
                        <td><strong>Full Name:</strong></td>
                        <td><span>{{ $my_result->user_name }}</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $my_result->subject_name }}</td>
                                        <td>{{ $my_result->marks }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Semester:</strong></td>
                        <td><span class="badge badge-primary">{{ $my_result->semester_name }}</span></td>
                    </tr>
                    <tr>
                        <td><strong>Total Marks:</strong></td>
                        <td><span>{{ $total_marks }}</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-3 my-4">
                <div class="btn btn-primary float-right" onclick="printTable()">Print Report <i class="fa fa-download"></i></div>
            </div>
        @else
            <div class="alert alert-danger">Result Not Declared</div>
        @endif
    </div>
@endsection
