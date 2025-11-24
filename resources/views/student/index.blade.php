@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student') }}
                        @can('create_user')
                            <h4 class="text-end">
                                <a href="{{ route('student.create') }}" class="btn btn-info">Create Student</a>
                            </h4>
                        @endcan

                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Imaage</th>
                                <th>father name</th>
                                <th>class</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($student as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data['contact'] }}</td>
                                        <td>{{ $data['address'] }}</td>
                                        <td>
                                            @if ($data->image)
                                                <img src="{{ asset('upload/images/' . $data->image) }}" alt=""
                                                    width="150px">
                                            @else
                                                {{ 'NA' }}
                                            @endif
                                        </td>
                                        <td>{{ $data->profile->father_name ?? '-' }}</td>
                                        <td>{{ $data->profile->class ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('assign.teachers', $data->id) }}"
                                                class="btn btn-secondary">Assign Teacher</a>
                                            <a href="{{ route('students.fees', $data->id) }}"
                                                class="btn btn-primary">Fees</a>
                                            <a href="{{ route('students.profile', $data->id) }}"
                                                class="btn btn-primary">Profile</a>
                                            @can('edit_user')
                                                <a href="{{ route('students.edit', $data->id) }}" class="btn btn-info">Edit</a>
                                            @endcan
                                            @can('delete_user')
                                                <form action="{{ route('students.delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            @endcan
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
