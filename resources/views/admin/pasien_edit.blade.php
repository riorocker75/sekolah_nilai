@extends('layouts.main_app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->



    </div>  
    
    <section class="content">
  
      <div class="container-fluid">
         <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pasien</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  @foreach ($data as $dt)
                      
                <form action="{{ url('/dashboard/pasien/update') }}" method="post">
                       @csrf  
                       @method('POST')
                <div class="row">
                 <div class="col-md-6">
                         
                               
                                <input name="id" value="{{$dt->id}}" required hidden>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nomor Rekam</label>
                                  <input type="text" class="form-control" name="no_rm" value="{{$dt->no_rm}}" required>
                              </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$dt->nama}}" required>
                            </div>
                        

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lhr" value="{{date('Y-m-d',strtotime($dt->tanggal_lahir))}}"required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp_lhr" value="{{$dt->tempat_lahir}}" required>
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Jenis Kelamin</label>
                              <select class="custom-select form-control-border border-width-2"  name="kelamin" required="required">
                                    <option value="{{$dt->jenis_kelamin}}" selected>{{jenis_kelamin($dt->jenis_kelamin)}}</option>
                                      <option value="1">Pria</option>
                                      <option value="2">Wanita</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label for="exampleInputEmail1">Pekerjaan</label>
                              <input type="text" class="form-control" name="kerja" value="{{$dt->pekerjaan}}">
                          </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                 <select class="custom-select form-control-border border-width-2"  name="agama" required="required">
                                        <option value="{{$dt->agama}}" selected>{{agama($dt->agama)}}</option>
                                        <option value="1">ISLAM</option>
                                        <option value="2">KRISTEN</option>
                                        <option value="3">KONGHUCU</option>
                                        <option value="4">LAINYA</option>
                                </select>
                            </div>


                         

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                  <textarea class="form-control" rows="3" placeholder="Alamat" style="height: 65px;" name="alamat" required="required">{{$dt->alamat}}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Status Perkawinan</label>
                              <input type="text" class="form-control" name="status_nikah" value="{{$dt->status_nikah}}">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Hp.</label>
                            <input type="number" class="form-control" name="no_hp" value="{{$dt->no_hp}}">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Golongan Darah</label>
                          <input type="text" class="form-control" name="gol_darah" value="{{$dt->gol_darah}}">
                      </div>

                 </div>

                 <div class="col-lg-6 col-md-12 col-12">
                    <p>Nomor Kartu</p>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nomor induk Kependudukan</label>
                        <input type="text" class="form-control" name="nik" value="{{$dt->nik}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jaminan Kesehatan Nasional(JKN)</label>
                      <input type="text" class="form-control" name="jkn" value="{{$dt->jkn}}">
                  </div>

                  <p>Riwayat Alergi</p>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alergi Obat-obatan</label>
                        <input type="text" class="form-control" name="alergi_obat" value="{{$dt->alergi_obat}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alergi Makanan</label>
                      <input type="text" class="form-control" name="alergi_makan" value="{{$dt->alergi_makan}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alergi Udara</label>
                    <input type="text" class="form-control" name="alergi_udara" value="{{$dt->alergi_udara}}">
                </div>
                 <div class="form-group">
                      <label for="exampleInputEmail1">Alergi Lainya</label>
                      <input type="text" class="form-control" name="alergi_lain" value="{{$dt->alergi_lain}}">
                  </div>
                 </div>

                </div>
                <button type="submit" class="btn btn-primary btn-lg float-right">Update</button>
                 
                 </form>
                  @endforeach


              </div>
              <!-- /.card-body -->
      </section>   

</div>  


@endsection