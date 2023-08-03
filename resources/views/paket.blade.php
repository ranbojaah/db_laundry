<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paket Outlet</title>
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
    <div class="container">
      <h1>Paket Outlet</h1>
      <table class="table table-striped table-hover">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Outlet</th>
            <th scope="col">Alamat Outlet</th>
            <th scope="col">Telepon Outlet</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Harga Paket</th>
          </tr>
          <?php $no = 1; ?>
          @foreach ($paket as $row)
          <tr>
              <td>{{$no++}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->tlp}}</td>
              <td>{{$row->nama_paket}}</td>
              <td>Rp{{number_format($row->harga,0,',','.')}}</td>
          </tr>
        @endforeach
      </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>