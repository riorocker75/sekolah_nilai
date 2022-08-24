@extends('layouts.main_app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Nilai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Nilai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->



    </div>  
    
    <section class="content">
  
      <div class="container-fluid">
         <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update Data Nilai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @foreach($data as $dt)
                <form action="{{ url('/dashboard/nilai/update') }}" method="post">
                       @csrf  
                       @method('POST')
                <div class="row">
                 <div class="col-md-6">
                         
                            <div class="form-group">
                                    <label>Nama Siswa</label>
                                        @php
                                            $siswa =App\Models\Siswa::where('id',$dt->siswa_id)->first();   
                                        @endphp
                                <input type="text" class="form-control" value="{{$siswa->nama}} | Nisn : {{$siswa->nisn}}" readonly>
                                <input type="hidden" class="form-control" value="{{$dt->id}}"  name="id">
                                   
                            </div>
                          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan Agama Rerata Raport</label>
                                <input type="number" class="form-control" name="agama_raport" value="{{$dt->agama_raport}}" required>
                            </div>  

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan Agama US</label>
                                <input type="number" class="form-control" name="agama_us" value="{{$dt->agama_us}}" required>
                            </div>

                          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">PKN Rerata Raport</label>
                              <input type="number" class="form-control" name="pkn_raport" value="{{$dt->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN US</label>
                              <input type="number" class="form-control" name="pkn_us" value="{{$dt->pkn_us}}" required>
                          </div>

                        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">B.Indo Rerata Raport</label>
                            <input type="number" class="form-control" name="indo_raport" value="{{$dt->indo_raport}}" required>
                        </div>  

                        <div class="form-group">
                            <label for="exampleInputEmail1">B.Indo US</label>
                            <input type="number" class="form-control" name="indo_us" value="{{$dt->indo_us}}" required>
                        </div>

                        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">B.ing Rerata Raport</label>
                          <input type="number" class="form-control" name="ing_raport" value="{{$dt->ing_raport}}" required>
                      </div>  

                      <div class="form-group">
                          <label for="exampleInputEmail1">B.ing US</label>
                          <input type="number" class="form-control" name="ing_us" value="{{$dt->ing_us}}" required>
                      </div>

                      <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Matematika Rerata Raport</label>
                        <input type="number" class="form-control" name="mm_raport" value="{{$dt->mm_raport}}" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika US</label>
                        <input type="number" class="form-control" name="mm_us" value="{{$dt->mm_us}}" required>
                    </div>

                    <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika Rerata Raport</label>
                      <input type="number" class="form-control" name="fisika_raport" value="{{$dt->fisika_raport}}" required>
                  </div>  

                  <div class="form-group">
                      <label for="exampleInputEmail1">Fisika US</label>
                      <input type="number" class="form-control" name="fisika_us" value="{{$dt->fisika_us}}" required>
                  </div>

                  <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kimia Rerata Raport</label>
                    <input type="number" class="form-control" name="kimia_raport" value="{{$dt->kimia_raport}}" required>
                </div>  

                <div class="form-group">
                    <label for="exampleInputEmail1">Kimia US</label>
                    <input type="number" class="form-control" name="kimia_us" value="{{$dt->kimia_us}}" required>
                </div>

                <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Biologi Rerata Raport</label>
                  <input type="number" class="form-control" name="biologi_raport" value="{{$dt->biologi_raport}}" required>
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Biologi US</label>
                  <input type="number" class="form-control" name="biologi_us" value="{{$dt->biologi_us}}" required>
              </div>
              <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sejarah Rerata Raport</label>
                <input type="number" class="form-control" name="sejarah_raport" value="{{$dt->sejarah_raport}}" required>
            </div>  

            <div class="form-group">
                <label for="exampleInputEmail1">Sejarah US</label>
                <input type="number" class="form-control" name="sejarah_us" value="{{$dt->sejarah_us}}" required>
            </div>

            <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

            <div class="form-group">
              <label for="exampleInputEmail1">SBK Rerata Raport</label>
              <input type="number" class="form-control" name="sbk_raport" value="{{$dt->sbk_raport}}" required>
          </div>  

          <div class="form-group">
              <label for="exampleInputEmail1">SBK US</label>
              <input type="number" class="form-control" name="sbk_us" value="{{$dt->sbk_us}}" required>
          </div>

          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

          <div class="form-group">
            <label for="exampleInputEmail1">Penjas Rerata Raport</label>
            <input type="number" class="form-control" name="penjas_raport" value="{{$dt->penjas_raport}}" required>
        </div>  

        <div class="form-group">
            <label for="exampleInputEmail1">Penjas US</label>
            <input type="number" class="form-control" name="penjas_us" value="{{$dt->penjas_us}}" required>
        </div>

        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

        <div class="form-group">
          <label for="exampleInputEmail1">TIK Rerata Raport</label>
          <input type="number" class="form-control" name="tik_raport" value="{{$dt->tik_raport}}" required>
      </div>  

      <div class="form-group">
          <label for="exampleInputEmail1">TIK US</label>
          <input type="number" class="form-control" name="tik_us" value="{{$dt->tik_us}}" required>
      </div>

    

    <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


    <div class="form-group">
      <label for="exampleInputEmail1">Ket./B.Inggris Rerata Raport</label>
      <input type="number" class="form-control" name="keting_raport" value="{{$dt->keting_raport}}" required>
  </div>  

  <div class="form-group">
      <label for="exampleInputEmail1">Ket./B.Inggris US</label>
      <input type="number" class="form-control" name="keting_us" value="{{$dt->keting_us}}" required>
  </div>

  <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mulok 1 Rerata Raport</label>
    <input type="number" class="form-control" name="mulok1_raport" value="{{$dt->mulok1_raport}}" required>
</div>  

<div class="form-group">
    <label for="exampleInputEmail1">Mulok 1 US</label>
    <input type="number" class="form-control" name="mulok1_us" value="{{$dt->mulok1_us}}" required>
</div>

<div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


<div class="form-group">
  <label for="exampleInputEmail1">Mulok 2 Rerata Raport</label>
  <input type="number" class="form-control" name="mulok2_raport" value="{{$dt->mulok2_raport}}" required>
</div>  

<div class="form-group">
  <label for="exampleInputEmail1">Mulok 2 US</label>
  <input type="number" class="form-control" name="mulok2_us" value="{{$dt->mulok2_us}}" required>
</div>

<div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

<div class="form-group">
  <label for="exampleInputEmail1">Nilai Rerata Raport</label>
  <input type="number" class="form-control" name="rata_raport" value="{{$dt->rata_raport}}" required>
</div>  

<div class="form-group">
  <label for="exampleInputEmail1">Nilai Rerata  US</label>
  <input type="number" class="form-control" name="rata_us" value="{{$dt->rata_us}}" required>
</div>

<div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


</div>

                 
                 
  </div>
  <button type="submit" class="btn btn-primary btn-lg float-right">Ubah</button>
    
    </form>
    @endforeach
              </div>
              <!-- /.card-body -->
      </section>   

</div>  


@endsection