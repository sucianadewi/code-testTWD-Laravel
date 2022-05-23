<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undian Doorprize</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="d-grid gap-2 col-6 mx-auto justify-content-center mt-4">
        <form action="{{ url('cari') }}" method="GET">
            <button class="btn btn-round btn-info">Undi Doorprize</button>
        </form>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 menu">
            @if (isset($pemenang))
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Kupon</th>
                            <th>Sales Code</th>
                            <th>Nama Pemenang</th>
                            <th>Hadiah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pemenang as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->no_kupon }}</td>
                                <td>{{ $item->sales_code }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis_hadiah }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <br>
        </div>

        @endif


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
