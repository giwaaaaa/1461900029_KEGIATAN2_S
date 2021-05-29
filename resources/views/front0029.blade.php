<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Sekolah</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>


<body>
    <h1>[Select All] Data Siswa Keseluruhan</h1> 
        <table>
            <thead>
                <tr>
                    <th>ID Siswa</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelamin</th>
                    <th>Alamat Siswa</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $sis)

                <tr>
                    <td>{{$sis->id_siswa}}</td>
                    <td>{{$sis->nama_siswa}}</td>
                    <td>{{$sis->nis}}</td>
                    <td>{{$sis->kelamin}}</td>
                    <td>{{$sis->alamat_siswa}}</td>
                    <td>{{$sis->telpon_siswa}}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</body>