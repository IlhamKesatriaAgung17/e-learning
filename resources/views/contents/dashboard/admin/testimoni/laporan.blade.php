<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('judul','Laporan Data  Pengguna')
    <style>
        table tr .text2{
            text-align: center;
        }
        table tr td {
            font-size: 13px;
        }

        table tr .text{
            text-align: right;
            font-size: 13px;
        }
    </style>
</head>
<body onload="window.print();">

    <center>
        <table border="0">
            <tr>
                <td><img src="{{asset('adminlte-3.1.0\dist\img\AMIK.png')}}" width="90" height="90" alt=""></td>
                <td>
                    <center>
                        <font size="4">LAPORAN PENGGUNAAN</font><br>
                        <font size="5">SISTEM PEMEBELAJARAN ONLINE</font><br>
                        <font size="5">AMIK BUMI NUSANTARA CIREBON</font><br>
                        <font size="2">Jl.Cideng Raya No.181, Kertawinangun,Kec.Kedawung,Kabupaten Cirebon,Jawa Barat 45153</font><br>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
        <table border="0" width="599">
            <tr>
                <td class="text" id="dt"></td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td>Nomer</td>
                <td width="547">: -</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td width="547">: -</td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
               <th width="30" height="20">No</th>
                <th  width="150px">Nama</th>
                <th  width="70px">Role</th>
                <th width="280px">Pesan</th>
            </tr>
            <?php $no=1;?>
            @foreach ($testimoni as  $items )
            <tr class="bg-light text-center" height="30">
               <td style="text-align: center">{{$no}}</td>
                <td>{{$items->nama}}</td>
                <td style="text-align: center">{{$items->role}}</td>
                <td>{{$items->pesan}}</td>
            </tr>
            <?php $no++ ;?>
            @endforeach
        </table>
        <br>
        <table border="0" width="599">
            <tr>
                <td width="430"></td>
                <td class="text2">AMIK Bumi Nusantara Cirebon <br><br><br><br>Drs.H.Nurachman,MM</td>
            </tr>
        </table>

        {{-- <div class="content text-dark">
            <div class="container-fluid">
             <div class="card">
                <div class="card-body">
                     <table class="table table-bordered" border="1">
                         <tr class="text-center bg-primary">
                            <th>No</th>
                             <th class="text-center" width="300px">Nama</th>
                             <th class="text-center" width="100px">Role</th>
                             <th width="230px">Pesan</th>
                         </tr>
                         <?php $no=1;?>
                         @foreach ($testimoni as  $items )
                         <tr class="bg-light text-center">
                            <td>{{$no}}</td>
                             <td>{{$items->nama}}</td>
                             <td>{{$items->role}}</td>
                             <td>{{$items->pesan}}</td>
                         </tr>
                         <?php $no++ ;?>
                         @endforeach

                     </table>
                </div>
             </div>
            </div>
        </div> --}}
    </center>

    <script>
        // var date = new Date();
        // document.getElementById("dt").innerHTML = date.toDateString();
        function dtku() {
            function tambahnol(param) {
                if (param < 10) {
                    param = "0" + param;
                }
                return param;
            }
            arr_bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

            var today = new Date();

            var tgl = tambahnol(today.getDate());
            var bln = arr_bulan[today.getMonth()];
            var thn = today.getFullYear();

            // var jam = tambahnol(today.getHours());
            // var menit = tambahnol(today.getMinutes());
            // var detik = tambahnol(today.getSeconds());

            var dt = "Cirebon, " + tgl + " " + bln + " " + thn;

            document.getElementById("dt").innerHTML = dt;
        }
        setInterval(dtku, 100);
    </script>
</body>
</html>
