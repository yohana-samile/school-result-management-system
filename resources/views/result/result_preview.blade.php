@extends('layouts.app')
@section('content')
    <div class="containter">
        @include('includes.urls')
        <table id="tableToPrint" class="table table-striped mb-0">
            <tbody>
                <tr>
                    <td><strong>Full Name:</strong></td>
                    <td><span>{{ $result_preview->user_name }}</span></td>
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
                                    <td>{{ $result_preview->subject_name }}</td>
                                    <td>{{ $result_preview->marks }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
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
    </div>
@endsection
