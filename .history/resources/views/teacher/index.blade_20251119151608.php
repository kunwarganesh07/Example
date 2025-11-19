@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Teachers') }}
                        <h4 class="text-end">
                            <a href="{{ route('teachers.create') }}" class="btn btn-info">Create Teacher</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Assign Students</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($teacher as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data['contact'] }}</td>
                                        <td>{{ $data['address'] }}</td>
                                        <td>
                                            @foreach ($collection as $item)

                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-danger">Delete</a>
                                            <a href="" class="btn btn-info">Edit</a>

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
@endsection
