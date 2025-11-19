@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Assign Teachers List') }}
                        <h4>Name: {{ $data->name }}</h4>
                        <h4 class="text-end">
                            <form action="" method="POST">
                                @csrf
                                div.form-grou
                            </form>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>S.N</th>
                                <th>Teacher Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                            </thead>
                            <tbody>
                                {{-- @foreach ($student->fees as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->amount }}</td>
                                        <td>{{ $data['date'] }}</td>
                                        <td>{{ $data['message'] }}</td>

                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
