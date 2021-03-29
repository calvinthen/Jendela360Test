<h2>Insert Penjualan</h2>

<form action="{{route('penjualan.store')}}" method="POST">
@csrf

@php
    $mobils = DB::table('mobils')->get();
@endphp

Nama Pembeli<br>
<input type="text" name="nama"><br>

Email Pembeli <br>
<input type="email" name="email"><br>

Nomor Pembeli <br>
<input type="text" name="nomor"> <br>

Mobil Dibeli <br>
<select name="mobil">
    @foreach ($mobils as $mobil)
        <option value="{{$mobil->id}}">{{$mobil->nama}} - Rp. {{$mobil->harga}}</option>
    @endforeach
</select>

<br><br>
<button type="submit">
    submit
</button>

</form>
<br>

<h2>Daftar Penjualan Hari ini</h2>

@php
    use App\Models\Penjualan;
    use App\Models\Mobil;
    $totalPendapatan  = 0;
    $mytime = Carbon\Carbon::now()->format('Y-m-d');

    $mobils = DB::table('mobils')->get();
    $penjualan = DB::table('penjualans')->where('created_at','LIKE', '%'. $mytime . '%')->count();

    $mobilPenjualanHariInis = Penjualan::where('created_at','LIKE', '%'. $mytime . '%')->get();

    $mobilPalingBanyakDijual = Mobil::where('created_at','LIKE','%'.$mytime.'%')->withCount('Penjualan')->orderByDesc('penjualan_count')->first();

@endphp


@foreach ($mobilPenjualanHariInis as $mobilPenjualanHariIni)

    @php
        $totalPendapatan += $mobilPenjualanHariIni->Mobil->harga;
    @endphp

@endforeach

@if ($penjualan == 0)

@elseif($penjualan > 0)
Mobil Paling banyak dijual : {{$mobilPalingBanyakDijual->nama}}<br>
Penjualan Hari ini : {{$penjualan}}<br>
Total Pendapatan Hari Ini : Rp. {{$totalPendapatan}} <br>
@endif



