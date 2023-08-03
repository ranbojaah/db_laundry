<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
      .container {
        border-radius:5px;
        background-color:white; 
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        margin-top: 40px;
        padding: 20px;
      }
    </style>
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <div class="container">
        <h1>Transaksi</h1>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Invoice</th>
                <th scop="col">Nama</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Nama Paket</th>
                <th scope="col">Total Harga</th>
            </tr>
              <?php $i = 1; ?>
              @foreach ($transaksi as $row)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$row->kode_invoice}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->tanggal_transaksi}}</td>
                <td>{{$row->nama_paket}}</td>
                <td>Rp{{ number_format($row->harga_akhir, 0, ',', '.') }}</td>
            </tr>
              @endforeach
        </table>
    </div>
  </body>
</html>