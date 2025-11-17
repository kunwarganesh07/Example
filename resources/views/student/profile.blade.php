@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Student Profile') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.profileupdate') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="hidden" name='student_id' value="{{ $student->id }}">
                            <div class="mb-3">
                                <label class="form-label">Father Name:</label>
                                <input type="text" name="father_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Class:</label>
                                <input type="text" name="class" class="form-control" required>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="contact" class="form-label">Contact:</label>
                                <input type="text" name="contact" class="form-control" value="{{ $student->contact }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="file" name='image'>
                                <img src="{{ asset('upload/images/' . $student->image) }}" alt="" width="150px">
                            </div> --}}

                            <button type="submit" class="btn btn-success">Update Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
