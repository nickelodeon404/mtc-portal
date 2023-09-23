@extends('layouts.dashboard')

@section('content')
    @include('students._sidenav')
    <x-panel>
        <main>
            <div class="container-fluid px-4">
                <ol class="breadcrumb mt-4">
                    <li class="breadcrumb-item active">Grades</li>
                </ol>
                <h1>Grades</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Initial Grade</th>
                            <th>Quarterly Grade</th>
                            <th>Average</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>subject name</td>
                            <td>initial grade</td>
                            <td>quarterly_grade</td>
                            <td>average</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <x-footer />
    </x-panel>
@endsection
