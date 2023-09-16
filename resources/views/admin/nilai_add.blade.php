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
    
    <form action="{{ url('/dashboard/nilai/act') }}" method="post">
      @csrf  
      @method('POST')
    <section class="content">

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                          <label>Nis Siswa</label>
                          <select class="form-control select2" style="width: 100%;" name="siswa" required>
                              <option value="">--Pilih Siswa--</option>
                              @php
                                  $siswa =App\Models\Siswa::get();  
                              @endphp
                              @foreach ($siswa as $sw)
                              @php
                                  $cek_siswa=App\Models\Nilai::where('siswa_id',$sw->id)->count();
                              @endphp
                              @if ($cek_siswa < 1 )
                                <option value="{{$sw->id}}">{{$sw->nama}} | Nis : {{$sw->nis}}</option>
                              @endif
                              @endforeach
                        
                          </select>
                  </div>
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
                <h3 class="card-title">Nilai Akhir</h3>
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
                                <label for="exampleInputEmail1">Pendidikan Agama Rerata Raport</label>
                                <input type="number" class="form-control nilai_raport" name="agama_raport" required>
                            </div>  

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan Agama US</label>
                                <input type="number" class="form-control nilai_us" name="agama_us" required>
                            </div>

                          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">PKN Rerata Raport</label>
                              <input type="number" class="form-control nilai_raport" name="pkn_raport" required>
                          </div>  

                          <div class="form-group">
                              <label for="exampleInputEmail1">PKN US</label>
                              <input type="number" class="form-control nilai_us" name="pkn_us" required>
                          </div>

                        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">B.Indo Rerata Raport</label>
                            <input type="number" class="form-control nilai_raport" name="indo_raport" required>
                        </div>  

                        <div class="form-group">
                            <label for="exampleInputEmail1">B.Indo US</label>
                            <input type="number" class="form-control nilai_us" name="indo_us" required>
                        </div>

                        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">B.ing Rerata Raport</label>
                          <input type="number" class="form-control nilai_raport" name="ing_raport" required>
                      </div>  

                      <div class="form-group">
                          <label for="exampleInputEmail1">B.ing US</label>
                          <input type="number" class="form-control nilai_us" name="ing_us" required>
                      </div>

                      <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Matematika Rerata Raport</label>
                        <input type="number" class="form-control nilai_raport" name="mm_raport" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika US</label>
                        <input type="number" class="form-control nilai_us" name="mm_us" required>
                    </div>

                    <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika Rerata Raport</label>
                      <input type="number" class="form-control nilai_raport" name="fisika_raport" required>
                  </div>  

                  <div class="form-group">
                      <label for="exampleInputEmail1">Fisika US</label>
                      <input type="number" class="form-control nilai_us" name="fisika_us" required>
                  </div>

                  <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kimia Rerata Raport</label>
                    <input type="number" class="form-control nilai_raport" name="kimia_raport" required>
                </div>  

                <div class="form-group">
                    <label for="exampleInputEmail1">Kimia US</label>
                    <input type="number" class="form-control nilai_us" name="kimia_us" required>
                </div>

                <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Biologi Rerata Raport</label>
                  <input type="number" class="form-control nilai_raport" name="biologi_raport" required>
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Biologi US</label>
                  <input type="number" class="form-control nilai_us" name="biologi_us" required>
              </div>
              <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sejarah Rerata Raport</label>
                <input type="number" class="form-control nilai_raport" name="sejarah_raport" required>
            </div>  

            <div class="form-group">
                <label for="exampleInputEmail1">Sejarah US</label>
                <input type="number" class="form-control nilai_us" name="sejarah_us" required>
            </div>

            <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

            <div class="form-group">
              <label for="exampleInputEmail1">SBK Rerata Raport</label>
              <input type="number" class="form-control nilai_raport" name="sbk_raport" required>
          </div>  

          <div class="form-group">
              <label for="exampleInputEmail1">SBK US</label>
              <input type="number" class="form-control nilai_us" name="sbk_us" required>
          </div>

          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

          <div class="form-group">
            <label for="exampleInputEmail1">Penjas Rerata Raport</label>
            <input type="number" class="form-control nilai_raport" name="penjas_raport" required>
        </div>  

        <div class="form-group">
            <label for="exampleInputEmail1">Penjas US</label>
            <input type="number" class="form-control nilai_us" name="penjas_us" required>
        </div>

        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

        <div class="form-group">
          <label for="exampleInputEmail1">TIK Rerata Raport</label>
          <input type="number" class="form-control nilai_raport" name="tik_raport" required>
      </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">TIK US</label>
                  <input type="number" class="form-control nilai_us" name="tik_us" required>
              </div>

          
            <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


            <div class="form-group">
              <label for="exampleInputEmail1">Ket./B.Inggris Rerata Raport</label>
              <input type="number" class="form-control nilai_raport" name="keting_raport" required>
          </div>  

          <div class="form-group">
              <label for="exampleInputEmail1">Ket./B.Inggris US</label>
              <input type="number" class="form-control nilai_us" name="keting_us" required>
          </div>

          <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

          <div class="form-group">
            <label for="exampleInputEmail1">Mulok 1 Rerata Raport</label>
            <input type="number" class="form-control nilai_raport" name="mulok1_raport" required>
        </div>  

        <div class="form-group">
            <label for="exampleInputEmail1">Mulok 1 US</label>
            <input type="number" class="form-control nilai_us" name="mulok1_us" required>
        </div>

        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>


        <div class="form-group">
          <label for="exampleInputEmail1">Mulok 2 Rerata Raport</label>
          <input type="number" class="form-control nilai_raport" name="mulok2_raport" required>
        </div>  

        <div class="form-group">
          <label for="exampleInputEmail1">Mulok 2 US</label>
          <input type="number" class="form-control nilai_us" name="mulok2_us" required>
        </div>

        <div style="margin-bottom:10px;width:100%;border:1px solid rgb(117, 110, 110)"></div>

        <div class="form-group">
          <label for="exampleInputEmail1">Nilai Rerata Raport</label>
          <input type="number" class="form-control raport" name="rata_raport" readonly required>
        </div>  

        <div class="form-group">
          <label for="exampleInputEmail1">Nilai Rerata  US</label>
          <input type="number" class="form-control us" name="rata_us" readonly required>
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
          </div>       
        </div>
      </div>
      </div>

    {{-- semester1 --}}
    <div class="row">
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
                                    <input type="number" class="form-control nilai_raport_1" name="agama_raport_1" value="0" required>
                                </div>  
  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">PKN</label>
                                    <input type="number" class="form-control nilai_raport_1" name="pkn_raport_1" value="0" required>
                                </div>  
  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">B.Indo</label>
                                    <input type="number" class="form-control nilai_raport_1" name="indo_raport_1" value="0" required>
                                </div>  
                                
                                <div class="form-group">
                                  <label for="exampleInputEmail1">B.ing</label>
                                  <input type="number" class="form-control nilai_raport_1" name="ing_raport_1" value="0" required>
                                </div>  
  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Matematika</label>
                                    <input type="number" class="form-control nilai_raport_1" name="mm_raport_1" value="0" required>
                                </div>  
  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Fisika</label>
                                  <input type="number" class="form-control nilai_raport_1" name="fisika_raport_1" value="0" required>
                                 </div>  
  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Kimia</label>
                                  <input type="number" class="form-control nilai_raport_1" name="kimia_raport_1" value="0" required>
                                </div>  
  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Biologi</label>
                                  <input type="number" class="form-control nilai_raport_1" name="biologi_raport_1" value="0" required>
                                 </div>  
  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Sejarah</label>
                                  <input type="number" class="form-control nilai_raport_1" name="sejarah_raport_1" value="0" required>
                                </div>  
  
                    
  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SBK</label>
                                    <input type="number" class="form-control nilai_raport_1" name="sbk_raport_1" value="0" required>
                                </div>  
  
                                
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Penjas</label>
                                    <input type="number" class="form-control nilai_raport_1" name="penjas_raport_1" value="0" required>
                                </div>  
  
  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">TIK</label>
                                  <input type="number" class="form-control nilai_raport_1" name="tik_raport_1" value="0" required>
                                </div>  
  
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Ket./B.Inggris</label>
                                    <input type="number" class="form-control nilai_raport_1" name="keting_raport_1" value="0" required>
                                </div>  
                                
  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Mulok 1</label>
                                  <input type="number" class="form-control nilai_raport_1" name="mulok1_raport_1" value="0" required>
                              </div>  
  
                              <div class="form-group">
                                <label for="exampleInputEmail1">Mulok 2</label>
                                <input type="number" class="form-control nilai_raport_1" name="mulok2_raport_1" value="0" required>
                              </div>  
  
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nilai</label>
                              <input type="number" class="form-control raport_1" name="rata_raport_1" readonly value="0" required>
                            </div>  
  
  
                            <script>
                             $('.form-group').on('input change','.nilai_raport_1',function(){
                                var totalRaport1=0;
                                var hasilRaport1=0;
                                  $('.form-group .nilai_raport_1').each(function(){
                                      var inputRaport1 =$(this).val();
                                      if($.isNumeric(inputRaport1)){
                                        totalRaport1 += parseFloat(inputRaport1);
                                      }
                                  });
                                  hasilRaport1= totalRaport1 / 15;
  
                                  $('.raport_1').val(Math.round(hasilRaport1));
  
                              });
                         </script>
  
  
        </div>
      </div>
    </div>
  </div>
</div>

     {{-- semester2 --}}
          
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
                        <input type="number" class="form-control nilai_raport_2" name="agama_raport_2" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">PKN</label>
                        <input type="number" class="form-control nilai_raport_2" name="pkn_raport_2" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">B.Indo</label>
                        <input type="number" class="form-control nilai_raport_2" name="indo_raport_2" value="0" required>
                    </div>  
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">B.ing</label>
                      <input type="number" class="form-control nilai_raport_2" name="ing_raport_2" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika</label>
                        <input type="number" class="form-control nilai_raport_2" name="mm_raport_2" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika</label>
                      <input type="number" class="form-control nilai_raport_2" name="fisika_raport_2" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kimia</label>
                      <input type="number" class="form-control nilai_raport_2" name="kimia_raport_2" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Biologi</label>
                      <input type="number" class="form-control nilai_raport_2" name="biologi_raport_2" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Sejarah</label>
                      <input type="number" class="form-control nilai_raport_2" name="sejarah_raport_2" value="0" required>
                    </div>  

        

                    <div class="form-group">
                        <label for="exampleInputEmail1">SBK</label>
                        <input type="number" class="form-control nilai_raport_2" name="sbk_raport_2" value="0" required>
                    </div>  

                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Penjas</label>
                        <input type="number" class="form-control nilai_raport_2" name="penjas_raport_2" value="0" required>
                    </div>  


                    <div class="form-group">
                      <label for="exampleInputEmail1">TIK</label>
                      <input type="number" class="form-control nilai_raport_2" name="tik_raport_2" value="0" required>
                    </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ket./B.Inggris</label>
                        <input type="number" class="form-control nilai_raport_2" name="keting_raport_2" value="0" required>
                    </div>  
                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mulok 1</label>
                      <input type="number" class="form-control nilai_raport_2" name="mulok1_raport_2" value="0" required>
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mulok 2</label>
                    <input type="number" class="form-control nilai_raport_2" name="mulok2_raport_2" value="0" required>
                  </div>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" class="form-control raport_2" name="rata_raport_2" readonly value="0" required>
                </div>  


                <script>
                 $('.form-group').on('input change','.nilai_raport_2',function(){
                    var totalRaport2=0;
                    var hasilRaport2=0;
                      $('.form-group .nilai_raport_2').each(function(){
                          var inputRaport2 =$(this).val();
                          if($.isNumeric(inputRaport2)){
                            totalRaport2 += parseFloat(inputRaport2);
                          }
                      });
                      hasilRaport2= totalRaport2 / 15;

                      $('.raport_2').val(Math.round(hasilRaport2));

                  });
             </script>


      </div>
      </div>
      </div>
    </div>
    </div>

    {{-- semester3 --}}
        
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
                        <input type="number" class="form-control nilai_raport_3" name="agama_raport_3" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">PKN</label>
                        <input type="number" class="form-control nilai_raport_3" name="pkn_raport_3" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">B.Indo</label>
                        <input type="number" class="form-control nilai_raport_3" name="indo_raport_3" value="0" required>
                    </div>  
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">B.ing</label>
                      <input type="number" class="form-control nilai_raport_3" name="ing_raport_3" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika</label>
                        <input type="number" class="form-control nilai_raport_3" name="mm_raport_3" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika</label>
                      <input type="number" class="form-control nilai_raport_3" name="fisika_raport_3" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kimia</label>
                      <input type="number" class="form-control nilai_raport_3" name="kimia_raport_3" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Biologi</label>
                      <input type="number" class="form-control nilai_raport_3" name="biologi_raport_3" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Sejarah</label>
                      <input type="number" class="form-control nilai_raport_3" name="sejarah_raport_3" value="0" required>
                    </div>  

        

                    <div class="form-group">
                        <label for="exampleInputEmail1">SBK</label>
                        <input type="number" class="form-control nilai_raport_3" name="sbk_raport_3" value="0" required>
                    </div>  

                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Penjas</label>
                        <input type="number" class="form-control nilai_raport_3" name="penjas_raport_3" value="0" required>
                    </div>  


                    <div class="form-group">
                      <label for="exampleInputEmail1">TIK</label>
                      <input type="number" class="form-control nilai_raport_3" name="tik_raport_3" value="0" required>
                    </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ket./B.Inggris</label>
                        <input type="number" class="form-control nilai_raport_3" name="keting_raport_3" value="0" required>
                    </div>  
                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mulok 1</label>
                      <input type="number" class="form-control nilai_raport_3" name="mulok1_raport_3" value="0" required>
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mulok 2</label>
                    <input type="number" class="form-control nilai_raport_3" name="mulok2_raport_3" value="0" required>
                  </div>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" class="form-control raport_3" name="rata_raport_3" readonly value="0" required>
                </div>  


                <script>
                 $('.form-group').on('input change','.nilai_raport_3',function(){
                    var totalRaport3=0;
                    var hasilRaport3=0;
                      $('.form-group .nilai_raport_3').each(function(){
                          var inputRaport3 =$(this).val();
                          if($.isNumeric(inputRaport3)){
                            totalRaport3 += parseFloat(inputRaport3);
                          }
                      });
                      hasilRaport3= totalRaport3 / 15;

                      $('.raport_3').val(Math.round(hasilRaport3));

                  });
             </script>


</div>
</div>
</div>
</div>
</div>
    
    {{-- semester4 --}}

      
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
                        <input type="number" class="form-control nilai_raport_4" name="agama_raport_4" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">PKN</label>
                        <input type="number" class="form-control nilai_raport_4" name="pkn_raport_4" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">B.Indo</label>
                        <input type="number" class="form-control nilai_raport_4" name="indo_raport_4" value="0" required>
                    </div>  
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">B.ing</label>
                      <input type="number" class="form-control nilai_raport_4" name="ing_raport_4" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika</label>
                        <input type="number" class="form-control nilai_raport_4" name="mm_raport_4" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika</label>
                      <input type="number" class="form-control nilai_raport_4" name="fisika_raport_4" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kimia</label>
                      <input type="number" class="form-control nilai_raport_4" name="kimia_raport_4" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Biologi</label>
                      <input type="number" class="form-control nilai_raport_4" name="biologi_raport_4" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Sejarah</label>
                      <input type="number" class="form-control nilai_raport_4" name="sejarah_raport_4" value="0" required>
                    </div>  

        

                    <div class="form-group">
                        <label for="exampleInputEmail1">SBK</label>
                        <input type="number" class="form-control nilai_raport_4" name="sbk_raport_4" value="0" required>
                    </div>  

                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Penjas</label>
                        <input type="number" class="form-control nilai_raport_4" name="penjas_raport_4" value="0" required>
                    </div>  


                    <div class="form-group">
                      <label for="exampleInputEmail1">TIK</label>
                      <input type="number" class="form-control nilai_raport_4" name="tik_raport_4" value="0" required>
                    </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ket./B.Inggris</label>
                        <input type="number" class="form-control nilai_raport_4" name="keting_raport_4" value="0" required>
                    </div>  
                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mulok 1</label>
                      <input type="number" class="form-control nilai_raport_4" name="mulok1_raport_4" value="0" required>
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mulok 2</label>
                    <input type="number" class="form-control nilai_raport_4" name="mulok2_raport_4" value="0" required>
                  </div>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" class="form-control raport_4" name="rata_raport_4" readonly value="0" required>
                </div>  


                <script>
                 $('.form-group').on('input change','.nilai_raport_4',function(){
                    var totalRaport4=0;
                    var hasilRaport4=0;
                      $('.form-group .nilai_raport_4').each(function(){
                          var inputRaport4 =$(this).val();
                          if($.isNumeric(inputRaport4)){
                            totalRaport4 += parseFloat(inputRaport4);
                          }
                      });
                      hasilRaport4= totalRaport4 / 15;

                      $('.raport_4').val(Math.round(hasilRaport4));

                  });
             </script>


</div>
</div>
</div>
</div>
</div>

    {{-- semester5 --}}
        
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
                        <input type="number" class="form-control nilai_raport_5" name="agama_raport_5" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">PKN</label>
                        <input type="number" class="form-control nilai_raport_5" name="pkn_raport_5" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">B.Indo</label>
                        <input type="number" class="form-control nilai_raport_5" name="indo_raport_5" value="0" required>
                    </div>  
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">B.ing</label>
                      <input type="number" class="form-control nilai_raport_5" name="ing_raport_5" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika</label>
                        <input type="number" class="form-control nilai_raport_5" name="mm_raport_5" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika</label>
                      <input type="number" class="form-control nilai_raport_5" name="fisika_raport_5" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kimia</label>
                      <input type="number" class="form-control nilai_raport_5" name="kimia_raport_5" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Biologi</label>
                      <input type="number" class="form-control nilai_raport_5" name="biologi_raport_5" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Sejarah</label>
                      <input type="number" class="form-control nilai_raport_5" name="sejarah_raport_5" value="0" required>
                    </div>  

        

                    <div class="form-group">
                        <label for="exampleInputEmail1">SBK</label>
                        <input type="number" class="form-control nilai_raport_5" name="sbk_raport_5" value="0" required>
                    </div>  

                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Penjas</label>
                        <input type="number" class="form-control nilai_raport_5" name="penjas_raport_5" value="0" required>
                    </div>  


                    <div class="form-group">
                      <label for="exampleInputEmail1">TIK</label>
                      <input type="number" class="form-control nilai_raport_5" name="tik_raport_5" value="0" required>
                    </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ket./B.Inggris</label>
                        <input type="number" class="form-control nilai_raport_5" name="keting_raport_5" value="0" required>
                    </div>  
                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mulok 1</label>
                      <input type="number" class="form-control nilai_raport_5" name="mulok1_raport_5" value="0" required>
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mulok 2</label>
                    <input type="number" class="form-control nilai_raport_5" name="mulok2_raport_5" value="0" required>
                  </div>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" class="form-control raport_5" name="rata_raport_5" readonly value="0" required>
                </div>  


                <script>
                 $('.form-group').on('input change','.nilai_raport_5',function(){
                    var totalRaport5=0;
                    var hasilRaport5=0;
                      $('.form-group .nilai_raport_5').each(function(){
                          var inputRaport5 =$(this).val();
                          if($.isNumeric(inputRaport5)){
                            totalRaport5 += parseFloat(inputRaport5);
                          }
                      });
                      hasilRaport5= totalRaport5 / 15;

                      $('.raport_5').val(Math.round(hasilRaport5));

                  });
             </script>


</div>
</div>
</div>
</div>
</div>

    {{-- semester6 --}}
        
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
                        <input type="number" class="form-control nilai_raport_6" name="agama_raport_6" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">PKN</label>
                        <input type="number" class="form-control nilai_raport_6" name="pkn_raport_6" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">B.Indo</label>
                        <input type="number" class="form-control nilai_raport_6" name="indo_raport_6" value="0" required>
                    </div>  
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">B.ing</label>
                      <input type="number" class="form-control nilai_raport_6" name="ing_raport_6" value="0" required>
                    </div>  

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matematika</label>
                        <input type="number" class="form-control nilai_raport_6" name="mm_raport_6" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisika</label>
                      <input type="number" class="form-control nilai_raport_6" name="fisika_raport_6" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kimia</label>
                      <input type="number" class="form-control nilai_raport_6" name="kimia_raport_6" value="0" required>
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Biologi</label>
                      <input type="number" class="form-control nilai_raport_6" name="biologi_raport_6" value="0" required>
                     </div>  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Sejarah</label>
                      <input type="number" class="form-control nilai_raport_6" name="sejarah_raport_6" value="0" required>
                    </div>  

        

                    <div class="form-group">
                        <label for="exampleInputEmail1">SBK</label>
                        <input type="number" class="form-control nilai_raport_6" name="sbk_raport_6" value="0" required>
                    </div>  

                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Penjas</label>
                        <input type="number" class="form-control nilai_raport_6" name="penjas_raport_6" value="0" required>
                    </div>  


                    <div class="form-group">
                      <label for="exampleInputEmail1">TIK</label>
                      <input type="number" class="form-control nilai_raport_6" name="tik_raport_6" value="0" required>
                    </div>  

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ket./B.Inggris</label>
                        <input type="number" class="form-control nilai_raport_6" name="keting_raport_6" value="0" required>
                    </div>  
                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mulok 1</label>
                      <input type="number" class="form-control nilai_raport_6" name="mulok1_raport_6" value="0" required>
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mulok 2</label>
                    <input type="number" class="form-control nilai_raport_6" name="mulok2_raport_6" value="0" required>
                  </div>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" class="form-control raport_6" name="rata_raport_6" readonly value="0" required>
                </div>  


                <script>
                 $('.form-group').on('input change','.nilai_raport_6',function(){
                    var totalRaport6=0;
                    var hasilRaport6=0;
                      $('.form-group .nilai_raport_6').each(function(){
                          var inputRaport6 =$(this).val();
                          if($.isNumeric(inputRaport6)){
                            totalRaport6 += parseFloat(inputRaport6);
                          }
                      });
                      hasilRaport6= totalRaport6 / 15;

                      $('.raport_6').val(Math.round(hasilRaport6));

                  });
             </script>


</div>
</div>
</div>
</div>
</div>

      {{-- end row --}}
    </div>



  

   

   
   </div>
              <!-- /.card-body -->
             
            </section>  
            <div class="container-fluid">
              <button button type="submit" class="btn btn-primary btn-lg float-right">Tambah</button>
           </div>
    </form> 

</div>  


@endsection