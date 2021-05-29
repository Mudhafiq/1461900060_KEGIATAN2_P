<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Buku</title>
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
    .tambah{
    padding: 8px 16px ;
    text-decoration: none;
    }
    </style>
</head>
<a href="/join" class="text-sm text-gray-700 underline">Select Join</a>
    <body>
    <h3>M. Mudhafiq Sholiq (1461900060)</h3>
    <h3>Data Buku</h3>
    <p>Cari Buku :</p>
    <form action="/buku/cari" method="GET">
    <input type="text" name="lihat" placeholder="Cari berdasarkan judul.." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
    </form>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode buku</th>
                        <th>Kode Kategori</th>
                        <th>Kode Penerbit</th>
                        <th>Judul Buku</th>
                        <th>Jumlah Buku</th>
                        <th>Pengarang Buku</th>
                        <th>Tahun Terbit Buku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($ms_buku as $buku)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$buku->kode_buku}}</td>
                        <td>{{$buku->kode_kategori}}</td>
                        <td>{{$buku->kode_penerbit}}</td>
                        <td>{{$buku->judul_buku}}</td>
                        <td>{{$buku->jumlah_buku}}</td>
                        <td>{{$buku->pengarang_buku}}</td>
                        <td>{{$buku->tahun_terbit_buku}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>