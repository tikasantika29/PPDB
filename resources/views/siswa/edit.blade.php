<!DOCTYPE html>
<html>

    <head>
        <title>Tutorial Laravel : Relasi One To One Eloquent</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
                        <a href="{{ url('data_siswa') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    {{-- <form action="{{ url('edit_siswa/'.$siswa->id_siswa) }}" method="POST">
                        @csrf
                        @method('head') --}}

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$siswa->nama}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student NISN</label>
                            <input type="text" name="course" value="{{$siswa->nisn}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student NIK</label>
                            <input type="text" name="section" value="{{$siswa->nik}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    </body>