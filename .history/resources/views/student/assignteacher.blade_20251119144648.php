@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student Fees') }}
                        <h4>Name: {{ $student->name }}</h4>
                        <h4 class="text-end">
                            <a href="{{ route('pay.fees', $student->id) }}" class="btn btn-info">pay Fees</a>

                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>S.N</th>
                                <th>Amount</th>
                                <th>date</th>
                                <th>Message</th>
                                <th>Action</th>
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
