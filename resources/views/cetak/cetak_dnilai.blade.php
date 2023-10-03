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
        margin:40px 120px;

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
    margin-top: 40px;
  width: 90px;
    height: 75px;
}
.logo_kanan{
    position: absolute;
        right: 150px;

}
.logo_kanan img{
     margin-top: 40px;
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
{{-- <body onload="window.print();"> --}}
    <body>
	<div class="wrapper">
		<div class="container">
		<div style="margin-top:248px;margin-left:60px;margin-right:60px">
            <div style="margin-top:40px;">
                <h5 style='text-align:center'> DAFTAR NILAI</h5>
                <h5 style='text-align:center'> SEKOLAH MENENGAH ATAS</h5>
                <h5 style='text-align:center'> PEMINATAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM</h5>

                
                 <h5 style='text-align:center'> TAHUN PELAJARAN {{ date('Y', strtotime('-1 year')) }}/{{date('Y')}}</h5>
              </div>
         <div style="position:relative;left:120px;width:100%;margin-top:10px;margin-bottom:80px">
             <div style="margin-top:50px;margin-right:300px;">
                 <p style="text-transform:uppercase">Nama <span style='margin-left:235px'>: {{$siswa->nama}}</span></p>
             </div>
             <div style="">
                  <p style="text-transform:uppercase">Tempat, Tanggal Lahir <span style='margin-left:100px'>: {{$siswa->tmp_lhr}}, {{format_tanggal(date('Y-m-d',strtotime($siswa->tgl_lhr)))}}</span></p>
              </div>
              <div style="">
                  <p style="text-transform:uppercase">Nomor Induk Siswa<span style='margin-left:125px'>: {{$siswa->nis}}</span></p>
              </div>
              <div style="">
                <p style="text-transform:uppercase">Nomor Induk Siswa Nasional<span style='margin-left:45px'>: {{$siswa->nisn}}</span></p>
            </div>
             
 
         </div>
       

         <div style="position:relative;left:120px;width:100%;margin-top:10px;margin-bottom:80px">
            <style>
             
                    table {
                    width: 80%;
                    }
            </style>
            <table cellspacing="0" border="0">
                <colgroup width="64"></colgroup>
                <colgroup width="305"></colgroup>
                <colgroup width="140"></colgroup>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=top><font color="#000000">No</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><font color="#000000">Mata Pelajaran</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><font color="#000000">Nilai</font></td>
                </tr>
                <tr>
                    </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><b><font color="#000000">Kelompok A</font></b></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="31" align="center" valign=top sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Pendidikan Agama dan Budi Pekerti</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->pkn_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="28" align="center" valign=top sdval="2" sdnum="1033;"><font color="#000000">2</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Pendidikan Pancasila dan Kewarganegaraan</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->pkn_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="3" sdnum="1033;"><font color="#000000">3</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Bahasa Indonesia</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->indo_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="4" sdnum="1033;"><font color="#000000">4</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Matematika</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->mm_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="5" sdnum="1033;"><font color="#000000">5</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Sejarah Indonesia</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->sejarah_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="6" sdnum="1033;"><font color="#000000">6</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Bahasa Inggris</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->ing_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="center" valign=top><font color="#000000"><br></font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><b><font color="#000000">Kelompok B</font></b></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000"><br></font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Seni Budaya</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->sbk_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="2" sdnum="1033;"><font color="#000000">2</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Pendidikan Jasmani, Olahraga dan Kesehatan</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->penjas_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="3" sdnum="1033;"><font color="#000000">3</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Prakarya dan Kewirausahaan</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->keting_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="4" sdnum="1033;"><font color="#000000">4</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Muatan Lokal</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000"><br></font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top><font color="#000000"><br></font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">     a. Al-Quran</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->mulok1_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top><font color="#000000"><br></font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">     b.Tarbiyah Islamiyah</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->mulok2_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="center" valign=top><font color="#000000"><br></font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><b><font color="#000000">Kelompok C</font></b></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000"><br></font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Matematika</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->mm_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="2" sdnum="1033;"><font color="#000000">2</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Biologi</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->biologi_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="3" sdnum="1033;"><font color="#000000">3</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Fisika</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->fisika_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="4" sdnum="1033;"><font color="#000000">4</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Kimia</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->kimia_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top sdval="5" sdnum="1033;"><font color="#000000">5</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Mata pelajaran pilihan</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000"><br></font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">    a. Geografi</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{$dt->tik_us}}</font></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="20" align="center" valign=bottom><font color="#000000">Rata - rata</font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font color="#000000">{{$dt->rata_us}}</font></td>
                </tr>
            </table>
        </div>
        {{-- end table div --}}
            <div style="margin-left:600px;margin-top:45px">
                <div style="display:inline-block">
                    <span style="margin:35px 15px">Kabupaten Deli Serdang,</span>
                    <span style="margin:25px 5px">{{format_tanggal(date('Y-m-d'))}}</span>
                </div>
            </div>


            <div style="margin-left:700px;margin-top:75px">
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