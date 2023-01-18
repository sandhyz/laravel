<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- jangan lupa untuk mengimport bootstrap untuk styling -->
    <link rel="stylesheet" href="{{ public_path('bootstrap.min.css') }}">

    <title>Table</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Table Example</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Perusahaan</th>
                </tr>
            </thead>
            <tbody class="small">
                @foreach ($data as $data)
                    <tr>
                        <th class="text-center">{{ $data->id+1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->company }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>