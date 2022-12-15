<!DOCTYPE html>
<html>

    <head>
        <title>Tutorial Laravel : Relasi One To One Eloquent</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="text-center"><a href="https://www.agussuratna.net">www.agussuratna.net</a></h3>
                    <h5 class="text-center my-4">Relasi One To One Eloquent</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>NISN</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Nama Orang Tua</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody> @foreach($siswa as $item) 
                            <tr>
                                <td>{{ $item->id_siswa }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->ortu->nama_ortu }}</td>
                                <td>
                                    <a type="button" class="btn btn-success" href="{{ 'edit_siswa2/'.$item->id_siswa }}">Edit</button>
                                </td>
                            </tr> @endforeach </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>