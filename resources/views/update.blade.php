<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('UPDATE ITEM') }} </div>
        <div class="card-body">
            <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Karyawan</label>
                    <input name="nama" type="text" value="{{$book->nama}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Karyawan">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input name="umur" type="text" value="{{$book->umur}}" class="form-control" id="formGroupExampleInput" placeholder="Input Umur">
                    @error('umur')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="numeric" value="{{$book->alamat}}" class="form-control" id="formGroupExampleInput" placeholder="Input Alamat">
                    @error('alamat')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telfon" class="form-label">Nomor Telfon</label>
                    <input name="telfon" type="date" value="{{$book->release}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nomor Telfon">
                    @error('telfon')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
