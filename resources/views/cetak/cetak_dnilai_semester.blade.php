<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
{{-- databales --}}
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



    <style type="text/css">
      
			.lead {
				font-family: "Verdana";
				font-weight: bold;
			}
			.value {
				font-family: "Verdana";
			}
			.value-big {
				font-family: "Verdana";
				font-weight: bold;
				font-size: large;
			}
			.td {
				valign : "top";
			}

			/* @page { size: with x height */
			/*@page { size: 20cm 10cm; margin: 0px; }*/
			@page {
                size: auto;
				margin : 0px;
			}
	/*		@media print {
			  html, body {
			  	width: 210mm;
			  }
			}*/
	 .kepala{
        text-align:center;
        font-size: 28px;
        margin:10px 120px;

    }
    .kop_surat {
	position: relative;
	height: 4cm;
	display: flex;
	top: 0;
}

.logo_surat {
	height: 0.5cm;
	width: 0.5cm;
    position: absolute;
    left: 150px;
}
.logo_surat img{
    margin-top: 10px;
  width: 90px;
    height: 75px;
}
.logo_kanan{
    position: absolute;
        right: 150px;

}
.logo_kanan img{
     margin-top: 10px;
    width: 90px;
    height: 75px;
}
.judul_surat {
	padding-top: 0.5cm;
	padding-left: 1cm;
	padding-right: 1cm;
	font-size: 20pt;
	font-weight: 700;
	text-align: center;
	width: 14.8cm;
	/* background: red; */
	margin: 0 auto;
	/* line-height: 1.3;s */
}
	</style>
</head>
<body onload="window.print();">
    {{-- <body> --}}
	<div class="wrapper">
		<div class="container">
		<div style="margin-top:248px;margin-left:60px;margin-right:60px">
        
        <div style="position:relative;left:310px;width:500px;margin-top:10px;margin-bottom:80px">
            <div style="margin-top:50px;margin-right:300px;">
                <p style="text-transform:uppercase">{{$siswa->nama}}</p>
            </div>
            <div style="">
                 <p style="text-transform:uppercase">{{$siswa->tmp_lhr}}, {{format_tanggal(date('Y-m-d',strtotime($siswa->tgl_lhr)))}}</p>
             </div>
             <div style="">
                 <p style="text-transform:uppercase">{{$siswa->nis}}</p>
             </div>
         
             <div style="">
                 <p style="text-transform:uppercase">{{$siswa->nisn}}</p>
             </div>

        </div>

   
            <div style="margin-bottom:15px"></div>
            <div style="margin-left:600px;margin-bottom:7px">
                    <div style="display:inline-block">
                        <span style="margin:15px 10px">{{$dt1->agama_raport}}</span>
                        <span style="margin:15px 10px">{{$dt2->agama_raport}}</span>
                        <span style="margin:15px 10px">{{$dt3->agama_raport}}</span>
                        <span style="margin:15px 10px">{{$dt4->agama_raport}}</span>
                        <span style="margin:15px 10px">{{$dt5->agama_raport}}</span>
                        <span style="margin:15px 10px">{{$dt6->agama_raport}}</span>

                    </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->pkn_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->pkn_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->pkn_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->pkn_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->pkn_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->pkn_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->indo_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->indo_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->indo_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->indo_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->indo_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->indo_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->ing_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->ing_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->ing_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->ing_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->ing_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->ing_raport}}</span>

                </div>
            </div>

            <div style="margin-bottom:15px"></div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->sbk_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->sbk_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->sbk_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->sbk_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->sbk_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->sbk_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->penjas_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->penjas_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->penjas_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->penjas_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->penjas_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->penjas_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->tik_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->tik_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->tik_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->tik_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->tik_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->tik_raport}}</span>

                </div>
            </div>
        
            <div>
                <div style="margin-top:25px;">
                    Bahasa Arab
                </div>

                <div style="margin-left:600px;margin-top:-27px">
                    <div style="display:inline-block">
                        <span style="margin:15px 10px">{{$dt1->keting_raport}}</span>
                        <span style="margin:15px 10px">{{$dt2->keting_raport}}</span>
                        <span style="margin:15px 10px">{{$dt3->keting_raport}}</span>
                        <span style="margin:15px 10px">{{$dt4->keting_raport}}</span>
                        <span style="margin:15px 10px">{{$dt5->keting_raport}}</span>
                        <span style="margin:15px 10px">{{$dt6->keting_raport}}</span>

                    </div>
                </div>
            </div>

           <div>
                <div style="margin-top:25px;">
                    Al-Quran
                </div>

                <div style="margin-left:600px;margin-top:-27px">
                    <div style="display:inline-block">
                        <span style="margin:15px 10px">{{$dt1->mulok1_raport}}</span>
                        <span style="margin:15px 10px">{{$dt2->mulok1_raport}}</span>
                        <span style="margin:15px 10px">{{$dt3->mulok1_raport}}</span>
                        <span style="margin:15px 10px">{{$dt4->mulok1_raport}}</span>
                        <span style="margin:15px 10px">{{$dt5->mulok1_raport}}</span>
                        <span style="margin:15px 10px">{{$dt6->mulok1_raport}}</span>

                    </div>
                </div>
            </div>

            <div>
                <div style="margin-top:5px;">
                    Tarbiyah Islamiyah
                </div>

                <div style="margin-left:600px;margin-top:-27px">
                    <div style="display:inline-block">
                        <span style="margin:15px 10px">{{$dt1->mulok2_raport}}</span>
                        <span style="margin:15px 10px">{{$dt2->mulok2_raport}}</span>
                        <span style="margin:15px 10px">{{$dt3->mulok2_raport}}</span>
                        <span style="margin:15px 10px">{{$dt4->mulok2_raport}}</span>
                        <span style="margin:15px 10px">{{$dt5->mulok2_raport}}</span>
                        <span style="margin:15px 10px">{{$dt6->mulok2_raport}}</span>

                    </div>
                </div>
            </div>

            <div>
                <div style="margin-top:5px;">
                    -
                </div>

                <div style="margin-left:600px;margin-top:-27px">
                    <div style="display:inline-block">
                        <span style="margin:15px 43px">-</span>
                        <span style="margin:15px 50px">-</span>
                    </div>
                </div>
            </div>

            <div style="margin-bottom:15px"></div>


            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->mm_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->mm_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->mm_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->mm_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->mm_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->mm_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->fisika_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->fisika_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->fisika_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->fisika_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->fisika_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->fisika_raport}}</span>

                    
                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->kimia_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->kimia_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->kimia_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->kimia_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->kimia_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->kimia_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->biologi_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->biologi_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->biologi_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->biologi_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->biologi_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->biologi_raport}}</span>

                </div>
            </div>

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->sejarah_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->sejarah_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->sejarah_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->sejarah_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->sejarah_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->sejarah_raport}}</span>

                </div>
            </div>

           

            <div style="margin-left:600px;margin-bottom:7px">
                <div style="display:inline-block">
                    <span style="margin:15px 10px">{{$dt1->rata_raport}}</span>
                    <span style="margin:15px 10px">{{$dt2->rata_raport}}</span>
                    <span style="margin:15px 10px">{{$dt3->rata_raport}}</span>
                    <span style="margin:15px 10px">{{$dt4->rata_raport}}</span>
                    <span style="margin:15px 10px">{{$dt5->rata_raport}}</span>
                    <span style="margin:15px 10px">{{$dt6->rata_raport}}</span>

                </div>
            </div>

            <div style="margin-left:400px;margin-top:45px">
                <div style="display:inline-block">
                    <span style="margin:35px 15px">Kabupaten Deli Serdang,</span>
                    <span style="margin:25px 5px">{{format_tanggal(date('Y-m-d'))}}</span>
                </div>
            </div>


            <div style="margin-left:500px;margin-top:75px">
                <div style="display:inline-block">
                    <span style="margin:35px 15px">Alirman, S.Ag</span>
                </div>
            </div>

            
		</div>

		</div>
	</div>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
$('#absensi').dataTable({
	searching: false, paging: false, info: false
});
</script>    
</body>
</html>