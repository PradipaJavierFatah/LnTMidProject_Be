<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-header text-center"><b>{{ __('DAFTAR KARYAWAN') }}</b></div>
                <div class="card-body">
                    <div class="col-md-6" style="">
                        <form action="" method="GET" class="input-group row">
                            <div class="input-group" style="">
                                <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    <br>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nomor Telfon</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $book->nama }}</td>
                                <td>{{ $book->umur }}</td>
                                <td>{{ $book->alamat }}</td>
                                <td>{{ $book->telfon }}</td>
                                <td>
                                    <a href="{{route('getBookById', ['id'=>$book->id])}}">
                                        <button type="submit" class="btn btn-success col-md">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('delete',['id' => $book->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger col-md">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>


</html>
