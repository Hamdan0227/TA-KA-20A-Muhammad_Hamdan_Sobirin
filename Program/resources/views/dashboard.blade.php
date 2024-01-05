<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    @extends('layout.main')
    @section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Data Obat</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title ">DATA OBAT APOTEK</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Harga Beli</th>
                      <th>Harga Jual</th>
                      <th>Satuan</th>
                      <th>Stok</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $d) --}}
                        
                        <tr>
                            {{-- <td>{{$d->kode_obat}}</td> --}}
                            <td>B0001</td>
                            <td>Panadol</td>
                            <td>1.000.000</td>
                            <td>9.500</td>
                            <td>BOX</td>
                            <td>10</td>
                        </tr>

                        {{-- @endforeach --}}
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
    @endsection

    
    {{-- <button id="btn_logout">Logout</button> --}}

    <!--- kode js -->
    {{-- <script>
        //deklarasi variabel komponen
        let btn_logout = document.querySelector("#btn_logout");

        //event untuk "btn_logout"
        btn_logout.addEventListener("click",function(){
            //alihkan ke halaman logout
            location.href = "{{url('logout')}}";
        });
    </script> --}}
</body>
</html>