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
    <form action="{{ url('/dashboard/nilai/update') }}" method="post">
      @csrf  
      @method('POST')
    <section class="content">
      
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                          <div class="form-group">
                            <label>Nama Siswa</label>
                            @foreach ($data as $ds)
                                
                                @php
                                    $siswa1 =App\Models\Siswa::where('id',$ds->siswa_id)->first();   
                                @endphp
                        <input type="text" class="form-control" value="{{$siswa1->nama}} | Nisn : {{$siswa1->nisn}}" readonly>
                        @endforeach
                           
                    </div>
                  </div>
                </div>



                </div>
            </div>
        

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6 col-12"> 
         <div class="card card-default collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Update Nilai Akhir</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @foreach($data as $dt)
               
                <div class="row">
                 <div class="col-md-12">
                         
                            <div class="form-group">
                                  
                                <input type="hidden" class="form-control" value="{{$dt->siswa_id}}"  name="siswa_id">
                                   
                            </div>
                          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan Agama Rerata Raport</label>
                                <input type="number" class="form-control nilai_raport" name="agama_raport" value="{{$dt->agama_raport}}" required>
                            </div>  

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan Agama US</label>
                                <input type="number" class="form-control nilai_us" name="agama_us" value="{{$dt->agama_us}}" required>
                            </div>

                          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">PKN Rerata Raport</label>
                              <input type="number" class="form-control nilai_raport" name="pkn_raport" value="{{$dt->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN US</label>
                              <input type="number" class="form-control nilai_us" name="pkn_us" value="{{$dt->pkn_us}}" required>
                          </div>

                        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">B.Indo Rerata Raport</label>
                            <input type="number" class="form-control nilai_raport" name="indo_raport" value="{{$dt->indo_raport}}" required>
                        </div>  

                        <div class="form-group">
                            <label for="exampleInputEmail1">B.Indo US</label>
                            <input type="number" class="form-control nilai_us" name="indo_us" value="{{$dt->indo_us}}" required>
                        </div>

                        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">B.ing Rerata Raport</label>
                          <input type="number" class="form-control nilai_raport" name="ing_raport" value="{{$dt->ing_raport}}" required>
                      </div>  

                      <div class="form-group">
                          <label for="exampleInputEmail1">B.ing US</label>
                          <input type="number" class="form-control nilai_us" name="ing_us" value="{{$dt->ing_us}}" required>
                      </div>

                      <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Matematika Rerata Raport</label>
                        <input type="number" class="form-control nilai_raport" name="mm_raport" value="{{$dt->mm_raport}}" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika US</label>
                        <input type="number" class="form-control nilai_us" name="mm_us" value="{{$dt->mm_us}}" required>
                    </div>

                    <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika Rerata Raport</label>
                      <input type="number" class="form-control nilai_raport" name="fisika_raport" value="{{$dt->fisika_raport}}" required>
                  </div>  

                  <div class="form-group">
                      <label for="exampleInputEmail1">Fisika US</label>
                      <input type="number" class="form-control nilai_us" name="fisika_us" value="{{$dt->fisika_us}}" required>
                  </div>

                  <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kimia Rerata Raport</label>
                    <input type="number" class="form-control nilai_raport" name="kimia_raport" value="{{$dt->kimia_raport}}" required>
                </div>  

                <div class="form-group">
                    <label for="exampleInputEmail1">Kimia US</label>
                    <input type="number" class="form-control nilai_us" name="kimia_us" value="{{$dt->kimia_us}}" required>
                </div>

                <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Biologi Rerata Raport</label>
                  <input type="number" class="form-control nilai_raport" name="biologi_raport" value="{{$dt->biologi_raport}}" required>
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Biologi US</label>
                  <input type="number" class="form-control nilai_us" name="biologi_us" value="{{$dt->biologi_us}}" required>
              </div>
              <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sejarah Rerata Raport</label>
                <input type="number" class="form-control nilai_raport" name="sejarah_raport" value="{{$dt->sejarah_raport}}" required>
            </div>  

            <div class="form-group">
                <label for="exampleInputEmail1">Sejarah US</label>
                <input type="number" class="form-control nilai_us" name="sejarah_us" value="{{$dt->sejarah_us}}" required>
            </div>

            <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

            <div class="form-group">
              <label for="exampleInputEmail1">SBK Rerata Raport</label>
              <input type="number" class="form-control nilai_raport" name="sbk_raport" value="{{$dt->sbk_raport}}" required>
          </div>  

          <div class="form-group">
              <label for="exampleInputEmail1">SBK US</label>
              <input type="number" class="form-control nilai_us" name="sbk_us" value="{{$dt->sbk_us}}" required>
          </div>

          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

          <div class="form-group">
            <label for="exampleInputEmail1">Penjas Rerata Raport</label>
            <input type="number" class="form-control nilai_raport" name="penjas_raport" value="{{$dt->penjas_raport}}" required>
        </div>  

        <div class="form-group">
            <label for="exampleInputEmail1">Penjas US</label>
            <input type="number" class="form-control nilai_us" name="penjas_us" value="{{$dt->penjas_us}}" required>
        </div>

        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

        <div class="form-group">
          <label for="exampleInputEmail1">TIK Rerata Raport</label>
          <input type="number" class="form-control nilai_raport" name="tik_raport" value="{{$dt->tik_raport}}" required>
      </div>  

      <div class="form-group">
          <label for="exampleInputEmail1">TIK US</label>
          <input type="number" class="form-control nilai_us" name="tik_us" value="{{$dt->tik_us}}" required>
      </div>

    

    <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


    <div class="form-group">
      <label for="exampleInputEmail1">Ket./B.Inggris Rerata Raport</label>
      <input type="number" class="form-control nilai_raport" name="keting_raport" value="{{$dt->keting_raport}}" required>
  </div>  

  <div class="form-group">
      <label for="exampleInputEmail1">Ket./B.Inggris US</label>
      <input type="number" class="form-control nilai_us" name="keting_us" value="{{$dt->keting_us}}" required>
  </div>

  <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mulok 1 Rerata Raport</label>
    <input type="number" class="form-control nilai_raport" name="mulok1_raport" value="{{$dt->mulok1_raport}}" required>
</div>  

<div class="form-group">
    <label for="exampleInputEmail1">Mulok 1 US</label>
    <input type="number" class="form-control nilai_us" name="mulok1_us" value="{{$dt->mulok1_us}}" required>
</div>

<div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


<div class="form-group">
  <label for="exampleInputEmail1">Mulok 2 Rerata Raport</label>
  <input type="number" class="form-control nilai_raport" name="mulok2_raport" value="{{$dt->mulok2_raport}}" required>
</div>  

<div class="form-group">
  <label for="exampleInputEmail1">Mulok 2 US</label>
  <input type="number" class="form-control nilai_us" name="mulok2_us" value="{{$dt->mulok2_us}}" required>
</div>

<div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

<div class="form-group">
  <label for="exampleInputEmail1">Nilai Rerata Raport</label>
  <input type="number" class="form-control raport" name="rata_raport" value="{{$dt->rata_raport}}" readonly required>
</div>  

<div class="form-group">
  <label for="exampleInputEmail1">Nilai Rerata  US</label>
  <input type="number" class="form-control us" name="rata_us" value="{{$dt->rata_us}}" readonly required>
</div>

<div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


</div>

    <script>
        $('.form-group').on('input change','.nilai_raport',function(){
        var totalRaport=0;
        var hasilRaport=0;
            $('.form-group .nilai_raport').each(function(){
                var inputRaport =$(this).val();
                if($.isNumeric(inputRaport)){
                totalRaport += parseFloat(inputRaport);
                }
            });
            hasilRaport= totalRaport / 15;

            $('.raport').val(Math.round(hasilRaport));

        });

        $('.form-group').on('input change','.nilai_us',function(){
        var totalus=0;
        var hasilus=0;
            $('.form-group .nilai_us').each(function(){
                var inputus =$(this).val();
                if($.isNumeric(inputus)){
                totalus += parseFloat(inputus);
                }
            });
            hasilus= totalus / 15;

            $('.us').val(Math.round(hasilus));

        });
    </script>       
                 
  </div>
    
    @endforeach
              </div>
            </div>
          </div>  
        </div>        

              <!-- /.card-body -->


        <div class="row">
          {{-- semester1 --}}
            @foreach ($data1 as $dt1)
                  
          <div class="col-md-4 col-12"> 
            <div class="card card-default collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Semester 1</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                     
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:none">
                 
                    <div class="row">
                     <div class="col-md-12">
                               
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pendidikan Agama </label>
                              <input type="number" class="form-control nilai_raport_1" name="agama_raport_1" value="{{$dt1->agama_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN</label>
                              <input type="number" class="form-control nilai_raport_1" name="pkn_raport_1" value="{{$dt1->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">B.Indo</label>
                              <input type="number" class="form-control nilai_raport_1" name="indo_raport_1" value="{{$dt1->indo_raport}}" required>
                          </div>  
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">B.ing</label>
                            <input type="number" class="form-control nilai_raport_1" name="ing_raport_1" value="{{$dt1->ing_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">Matematika</label>
                              <input type="number" class="form-control nilai_raport_1" name="mm_raport_1" value="{{$dt1->mm_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Fisika</label>
                            <input type="number" class="form-control nilai_raport_1" name="fisika_raport_1" value="{{$dt1->fisika_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kimia</label>
                            <input type="number" class="form-control nilai_raport_1" name="kimia_raport_1" value="{{$dt1->kimia_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Biologi</label>
                            <input type="number" class="form-control nilai_raport_1" name="biologi_raport_1" value="{{$dt1->biologi_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Sejarah</label>
                            <input type="number" class="form-control nilai_raport_1" name="sejarah_raport_1" value="{{$dt1->sejarah_raport}}" required>
                          </div>  

              

                          <div class="form-group">
                              <label for="exampleInputEmail1">SBK</label>
                              <input type="number" class="form-control nilai_raport_1" name="sbk_raport_1" value="{{$dt1->sbk_raport}}" required>
                          </div>  

                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Penjas</label>
                              <input type="number" class="form-control nilai_raport_1" name="penjas_raport_1" value="{{$dt1->penjas_raport}}" required>
                          </div>  


                          <div class="form-group">
                            <label for="exampleInputEmail1">TIK</label>
                            <input type="number" class="form-control nilai_raport_1" name="tik_raport_1" value="{{$dt1->tik_raport}}" required>
                          </div>  

                            <div class="form-group">
                              <label for="exampleInputEmail1">Ket./B.Inggris</label>
                              <input type="number" class="form-control nilai_raport_1" name="keting_raport_1" value="{{$dt1->keting_raport}}" required>
                          </div>  
                          

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mulok 1</label>
                            <input type="number" class="form-control nilai_raport_1" name="mulok1_raport_1" value="{{$dt1->mulok1_raport}}" required>
                        </div>  

                        <div class="form-group">
                          <label for="exampleInputEmail1">Mulok 2</label>
                          <input type="number" class="form-control nilai_raport_1" name="mulok2_raport_1" value="{{$dt1->mulok2_raport}}" required>
                        </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="number" class="form-control raport_1" name="rata_raport_1" readonly value="{{$dt1->rata_raport}}" required>
                      </div>  


                      <script>
                       $('.form-group').on('input change','.nilai_raport_1',function(){
                          var totalRaport_1=0;
                          var hasilRaport_1=0;
                            $('.form-group .nilai_raport_1').each(function(){
                                var inputRaport_1 =$(this).val();
                                if($.isNumeric(inputRaport_1)){
                                  totalRaport_1 += parseFloat(inputRaport_1);
                                }
                            });
                            hasilRaport_1= totalRaport_1 / 15;

                            $('.raport_1').val(Math.round(hasilRaport_1));

                        });
                   </script>


  </div>
</div>
</div>
</div>
</div>      
            @endforeach

          {{-- semester2 --}}
          
            @foreach ($data2 as $dt2)
              
                
          <div class="col-md-4 col-12"> 
            <div class="card card-default collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Semester 2</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                     
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:none">
                 
                    <div class="row">
                     <div class="col-md-12">
                               
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pendidikan Agama </label>
                              <input type="number" class="form-control nilai_raport_2" name="agama_raport_2" value="{{$dt2->agama_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN</label>
                              <input type="number" class="form-control nilai_raport_2" name="pkn_raport_2" value="{{$dt2->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">B.Indo</label>
                              <input type="number" class="form-control nilai_raport_2" name="indo_raport_2" value="{{$dt2->indo_raport}}" required>
                          </div>  
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">B.ing</label>
                            <input type="number" class="form-control nilai_raport_2" name="ing_raport_2" value="{{$dt2->ing_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">Matematika</label>
                              <input type="number" class="form-control nilai_raport_2" name="mm_raport_2" value="{{$dt2->mm_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Fisika</label>
                            <input type="number" class="form-control nilai_raport_2" name="fisika_raport_2" value="{{$dt2->fisika_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kimia</label>
                            <input type="number" class="form-control nilai_raport_2" name="kimia_raport_2" value="{{$dt2->kimia_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Biologi</label>
                            <input type="number" class="form-control nilai_raport_2" name="biologi_raport_2" value="{{$dt2->biologi_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Sejarah</label>
                            <input type="number" class="form-control nilai_raport_2" name="sejarah_raport_2" value="{{$dt2->sejarah_raport}}" required>
                          </div>  

              

                          <div class="form-group">
                              <label for="exampleInputEmail1">SBK</label>
                              <input type="number" class="form-control nilai_raport_2" name="sbk_raport_2" value="{{$dt2->sbk_raport}}" required>
                          </div>  

                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Penjas</label>
                              <input type="number" class="form-control nilai_raport_2" name="penjas_raport_2" value="{{$dt2->penjas_raport}}" required>
                          </div>  


                          <div class="form-group">
                            <label for="exampleInputEmail1">TIK</label>
                            <input type="number" class="form-control nilai_raport_2" name="tik_raport_2" value="{{$dt2->tik_raport}}" required>
                          </div>  

                            <div class="form-group">
                              <label for="exampleInputEmail1">Ket./B.Inggris</label>
                              <input type="number" class="form-control nilai_raport_2" name="keting_raport_2" value="{{$dt2->keting_raport}}" required>
                          </div>  
                          

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mulok 1</label>
                            <input type="number" class="form-control nilai_raport_2" name="mulok1_raport_2" value="{{$dt2->mulok1_raport}}" required>
                        </div>  

                        <div class="form-group">
                          <label for="exampleInputEmail1">Mulok 2</label>
                          <input type="number" class="form-control nilai_raport_2" name="mulok2_raport_2" value="{{$dt2->mulok2_raport}}" required>
                        </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="number" class="form-control raport_2" name="rata_raport_2" readonly value="{{$dt2->rata_raport}}" required>
                      </div>  


                      <script>
                       $('.form-group').on('input change','.nilai_raport_2',function(){
                          var totalRaport_2=0;
                          var hasilRaport_2=0;
                            $('.form-group .nilai_raport_2').each(function(){
                                var inputRaport_2 =$(this).val();
                                if($.isNumeric(inputRaport_2)){
                                  totalRaport_2 += parseFloat(inputRaport_2);
                                }
                            });
                            hasilRaport_2= totalRaport_2 / 15;

                            $('.raport_2').val(Math.round(hasilRaport_2));

                        });
                   </script>


              </div>
            </div>
            </div>
            </div>
            </div>
            
            @endforeach
          
          {{-- semester3 --}}
            @foreach ($data3 as $dt3)

              
          <div class="col-md-4 col-12"> 
            <div class="card card-default collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Semester 3</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                     
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:none">
                 
                    <div class="row">
                     <div class="col-md-12">
                               
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pendidikan Agama </label>
                              <input type="number" class="form-control nilai_raport_3" name="agama_raport_3" value="{{$dt3->agama_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN</label>
                              <input type="number" class="form-control nilai_raport_3" name="pkn_raport_3" value="{{$dt3->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">B.Indo</label>
                              <input type="number" class="form-control nilai_raport_3" name="indo_raport_3" value="{{$dt3->indo_raport}}" required>
                          </div>  
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">B.ing</label>
                            <input type="number" class="form-control nilai_raport_3" name="ing_raport_3" value="{{$dt3->ing_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">Matematika</label>
                              <input type="number" class="form-control nilai_raport_3" name="mm_raport_3" value="{{$dt3->mm_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Fisika</label>
                            <input type="number" class="form-control nilai_raport_3" name="fisika_raport_3" value="{{$dt3->fisika_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kimia</label>
                            <input type="number" class="form-control nilai_raport_3" name="kimia_raport_3" value="{{$dt3->kimia_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Biologi</label>
                            <input type="number" class="form-control nilai_raport_3" name="biologi_raport_3" value="{{$dt3->biologi_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Sejarah</label>
                            <input type="number" class="form-control nilai_raport_3" name="sejarah_raport_3" value="{{$dt3->sejarah_raport}}" required>
                          </div>  

              

                          <div class="form-group">
                              <label for="exampleInputEmail1">SBK</label>
                              <input type="number" class="form-control nilai_raport_3" name="sbk_raport_3" value="{{$dt3->sbk_raport}}" required>
                          </div>  

                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Penjas</label>
                              <input type="number" class="form-control nilai_raport_3" name="penjas_raport_3" value="{{$dt3->penjas_raport}}" required>
                          </div>  


                          <div class="form-group">
                            <label for="exampleInputEmail1">TIK</label>
                            <input type="number" class="form-control nilai_raport_3" name="tik_raport_3" value="{{$dt3->tik_raport}}" required>
                          </div>  

                            <div class="form-group">
                              <label for="exampleInputEmail1">Ket./B.Inggris</label>
                              <input type="number" class="form-control nilai_raport_3" name="keting_raport_3" value="{{$dt3->keting_raport}}" required>
                          </div>  
                          

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mulok 1</label>
                            <input type="number" class="form-control nilai_raport_3" name="mulok1_raport_3" value="{{$dt3->mulok1_raport}}" required>
                        </div>  

                        <div class="form-group">
                          <label for="exampleInputEmail1">Mulok 2</label>
                          <input type="number" class="form-control nilai_raport_3" name="mulok2_raport_3" value="{{$dt3->mulok2_raport}}" required>
                        </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="number" class="form-control raport_3" name="rata_raport_3" readonly value="{{$dt3->rata_raport}}" required>
                      </div>  


                      <script>
                       $('.form-group').on('input change','.nilai_raport_3',function(){
                          var totalRaport_3=0;
                          var hasilRaport_3=0;
                            $('.form-group .nilai_raport_3').each(function(){
                                var inputRaport_3 =$(this).val();
                                if($.isNumeric(inputRaport_3)){
                                  totalRaport_3 += parseFloat(inputRaport_3);
                                }
                            });
                            hasilRaport_3= totalRaport_3 / 15;

                            $('.raport_3').val(Math.round(hasilRaport_3));

                        });
                   </script>


        </div>
      </div>
      </div>
      </div>
      </div>
                  
            @endforeach
          
          {{-- semester4 --}}
            @foreach ($data4 as $dt4)
                  
                  
          <div class="col-md-4 col-12"> 
            <div class="card card-default collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Semester 4</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                     
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:none">
                 
                    <div class="row">
                     <div class="col-md-12">
                               
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pendidikan Agama </label>
                              <input type="number" class="form-control nilai_raport_4" name="agama_raport_4" value="{{$dt4->agama_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN</label>
                              <input type="number" class="form-control nilai_raport_4" name="pkn_raport_4" value="{{$dt4->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">B.Indo</label>
                              <input type="number" class="form-control nilai_raport_4" name="indo_raport_4" value="{{$dt4->indo_raport}}" required>
                          </div>  
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">B.ing</label>
                            <input type="number" class="form-control nilai_raport_4" name="ing_raport_4" value="{{$dt4->ing_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">Matematika</label>
                              <input type="number" class="form-control nilai_raport_4" name="mm_raport_4" value="{{$dt4->mm_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Fisika</label>
                            <input type="number" class="form-control nilai_raport_4" name="fisika_raport_4" value="{{$dt4->fisika_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kimia</label>
                            <input type="number" class="form-control nilai_raport_4" name="kimia_raport_4" value="{{$dt4->kimia_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Biologi</label>
                            <input type="number" class="form-control nilai_raport_4" name="biologi_raport_4" value="{{$dt4->biologi_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Sejarah</label>
                            <input type="number" class="form-control nilai_raport_4" name="sejarah_raport_4" value="{{$dt4->sejarah_raport}}" required>
                          </div>  

              

                          <div class="form-group">
                              <label for="exampleInputEmail1">SBK</label>
                              <input type="number" class="form-control nilai_raport_4" name="sbk_raport_4" value="{{$dt4->sbk_raport}}" required>
                          </div>  

                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Penjas</label>
                              <input type="number" class="form-control nilai_raport_4" name="penjas_raport_4" value="{{$dt4->penjas_raport}}" required>
                          </div>  


                          <div class="form-group">
                            <label for="exampleInputEmail1">TIK</label>
                            <input type="number" class="form-control nilai_raport_4" name="tik_raport_4" value="{{$dt4->tik_raport}}" required>
                          </div>  

                            <div class="form-group">
                              <label for="exampleInputEmail1">Ket./B.Inggris</label>
                              <input type="number" class="form-control nilai_raport_4" name="keting_raport_4" value="{{$dt4->keting_raport}}" required>
                          </div>  
                          

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mulok 1</label>
                            <input type="number" class="form-control nilai_raport_4" name="mulok1_raport_4" value="{{$dt4->mulok1_raport}}" required>
                        </div>  

                        <div class="form-group">
                          <label for="exampleInputEmail1">Mulok 2</label>
                          <input type="number" class="form-control nilai_raport_4" name="mulok2_raport_4" value="{{$dt4->mulok2_raport}}" required>
                        </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="number" class="form-control raport_4" name="rata_raport_4" readonly value="{{$dt4->rata_raport}}" required>
                      </div>  


                      <script>
                       $('.form-group').on('input change','.nilai_raport_4',function(){
                          var totalRaport_4=0;
                          var hasilRaport_4=0;
                            $('.form-group .nilai_raport_4').each(function(){
                                var inputRaport_4 =$(this).val();
                                if($.isNumeric(inputRaport_4)){
                                  totalRaport_4 += parseFloat(inputRaport_4);
                                }
                            });
                            hasilRaport_4= totalRaport_4 / 15;

                            $('.raport_4').val(Math.round(hasilRaport_4));

                        });
                   </script>


  </div>
</div>
</div>
</div>
</div>

            @endforeach
          
          {{-- semester5 --}}
            @foreach ($data5 as $dt5)
                  
                  
          <div class="col-md-4 col-12"> 
            <div class="card card-default collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Semester 5</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                     
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:none">
                 
                    <div class="row">
                     <div class="col-md-12">
                               
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pendidikan Agama </label>
                              <input type="number" class="form-control nilai_raport_5" name="agama_raport_5" value="{{$dt5->agama_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN</label>
                              <input type="number" class="form-control nilai_raport_5" name="pkn_raport_5" value="{{$dt5->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">B.Indo</label>
                              <input type="number" class="form-control nilai_raport_5" name="indo_raport_5" value="{{$dt5->indo_raport}}" required>
                          </div>  
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">B.ing</label>
                            <input type="number" class="form-control nilai_raport_5" name="ing_raport_5" value="{{$dt5->ing_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">Matematika</label>
                              <input type="number" class="form-control nilai_raport_5" name="mm_raport_5" value="{{$dt5->mm_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Fisika</label>
                            <input type="number" class="form-control nilai_raport_5" name="fisika_raport_5" value="{{$dt5->fisika_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kimia</label>
                            <input type="number" class="form-control nilai_raport_5" name="kimia_raport_5" value="{{$dt5->kimia_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Biologi</label>
                            <input type="number" class="form-control nilai_raport_5" name="biologi_raport_5" value="{{$dt5->biologi_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Sejarah</label>
                            <input type="number" class="form-control nilai_raport_5" name="sejarah_raport_5" value="{{$dt5->sejarah_raport}}" required>
                          </div>  

              

                          <div class="form-group">
                              <label for="exampleInputEmail1">SBK</label>
                              <input type="number" class="form-control nilai_raport_5" name="sbk_raport_5" value="{{$dt5->sbk_raport}}" required>
                          </div>  

                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Penjas</label>
                              <input type="number" class="form-control nilai_raport_5" name="penjas_raport_5" value="{{$dt5->penjas_raport}}" required>
                          </div>  


                          <div class="form-group">
                            <label for="exampleInputEmail1">TIK</label>
                            <input type="number" class="form-control nilai_raport_5" name="tik_raport_5" value="{{$dt5->tik_raport}}" required>
                          </div>  

                            <div class="form-group">
                              <label for="exampleInputEmail1">Ket./B.Inggris</label>
                              <input type="number" class="form-control nilai_raport_5" name="keting_raport_5" value="{{$dt5->keting_raport}}" required>
                          </div>  
                          

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mulok 1</label>
                            <input type="number" class="form-control nilai_raport_5" name="mulok1_raport_5" value="{{$dt5->mulok1_raport}}" required>
                        </div>  

                        <div class="form-group">
                          <label for="exampleInputEmail1">Mulok 2</label>
                          <input type="number" class="form-control nilai_raport_5" name="mulok2_raport_5" value="{{$dt5->mulok2_raport}}" required>
                        </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="number" class="form-control raport_5" name="rata_raport_5" readonly value="{{$dt5->rata_raport}}" required>
                      </div>  


                      <script>
                       $('.form-group').on('input change','.nilai_raport_5',function(){
                          var totalRaport_5=0;
                          var hasilRaport_5=0;
                            $('.form-group .nilai_raport_5').each(function(){
                                var inputRaport_5 =$(this).val();
                                if($.isNumeric(inputRaport_5)){
                                  totalRaport_5 += parseFloat(inputRaport_5);
                                }
                            });
                            hasilRaport_5= totalRaport_5 / 15;

                            $('.raport_5').val(Math.round(hasilRaport_5));

                        });
                   </script>


  </div>
</div>
</div>
</div>
</div>

            @endforeach
          
          {{-- semester6 --}}
            @foreach ($data6 as $dt6)
                  
                  
          <div class="col-md-4 col-12"> 
            <div class="card card-default collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Semester 6</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                     
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:none">
                 
                    <div class="row">
                     <div class="col-md-12">
                               
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pendidikan Agama </label>
                              <input type="number" class="form-control nilai_raport_6" name="agama_raport_6" value="{{$dt6->agama_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN</label>
                              <input type="number" class="form-control nilai_raport_6" name="pkn_raport_6" value="{{$dt6->pkn_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">B.Indo</label>
                              <input type="number" class="form-control nilai_raport_6" name="indo_raport_6" value="{{$dt6->indo_raport}}" required>
                          </div>  
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">B.ing</label>
                            <input type="number" class="form-control nilai_raport_6" name="ing_raport_6" value="{{$dt6->ing_raport}}" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">Matematika</label>
                              <input type="number" class="form-control nilai_raport_6" name="mm_raport_6" value="{{$dt6->mm_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Fisika</label>
                            <input type="number" class="form-control nilai_raport_6" name="fisika_raport_6" value="{{$dt6->fisika_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kimia</label>
                            <input type="number" class="form-control nilai_raport_6" name="kimia_raport_6" value="{{$dt6->kimia_raport}}" required>
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Biologi</label>
                            <input type="number" class="form-control nilai_raport_6" name="biologi_raport_6" value="{{$dt6->biologi_raport}}" required>
                           </div>  

                          <div class="form-group">
                            <label for="exampleInputEmail1">Sejarah</label>
                            <input type="number" class="form-control nilai_raport_6" name="sejarah_raport_6" value="{{$dt6->sejarah_raport}}" required>
                          </div>  

              

                          <div class="form-group">
                              <label for="exampleInputEmail1">SBK</label>
                              <input type="number" class="form-control nilai_raport_6" name="sbk_raport_6" value="{{$dt6->sbk_raport}}" required>
                          </div>  

                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Penjas</label>
                              <input type="number" class="form-control nilai_raport_6" name="penjas_raport_6" value="{{$dt6->penjas_raport}}" required>
                          </div>  


                          <div class="form-group">
                            <label for="exampleInputEmail1">TIK</label>
                            <input type="number" class="form-control nilai_raport_6" name="tik_raport_6" value="{{$dt6->tik_raport}}" required>
                          </div>  

                            <div class="form-group">
                              <label for="exampleInputEmail1">Ket./B.Inggris</label>
                              <input type="number" class="form-control nilai_raport_6" name="keting_raport_6" value="{{$dt6->keting_raport}}" required>
                          </div>  
                          

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mulok 1</label>
                            <input type="number" class="form-control nilai_raport_6" name="mulok1_raport_6" value="{{$dt6->mulok1_raport}}" required>
                        </div>  

                        <div class="form-group">
                          <label for="exampleInputEmail1">Mulok 2</label>
                          <input type="number" class="form-control nilai_raport_6" name="mulok2_raport_6" value="{{$dt6->mulok2_raport}}" required>
                        </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="number" class="form-control raport_6" name="rata_raport_6" readonly value="{{$dt6->rata_raport}}" required>
                      </div>  


                      <script>
                       $('.form-group').on('input change','.nilai_raport_6',function(){
                          var totalRaport_6=0;
                          var hasilRaport_6=0;
                            $('.form-group .nilai_raport_6').each(function(){
                                var inputRaport_6 =$(this).val();
                                if($.isNumeric(inputRaport_6)){
                                  totalRaport_6 += parseFloat(inputRaport_6);
                                }
                            });
                            hasilRaport_6= totalRaport_6 / 15;

                            $('.raport_6').val(Math.round(hasilRaport_6));

                        });
                   </script>


  </div>
</div>
</div>
</div>
</div>

            @endforeach


          {{-- end row --}}
        </div>
         

      </section>   
      <button type="submit" class="btn btn-primary btn-lg float-right">Ubah</button>

    </form>

</div>  


@endsection