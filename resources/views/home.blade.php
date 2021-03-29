<h2> Home Page </h2>
Welcome, {{Auth::user()->username}} <br>
<br><br>


<button>
    <a href="{{route('mobil.index')}}">
        Daftar Mobil
    </a>
</button>

<button>
    <a href="{{route('penjualan.index')}}">
      Penjualan Mobil
    </a>
</button>

