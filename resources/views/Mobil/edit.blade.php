<h2>Edit car list</h2>

<form action="{{route('mobil.update',$mobil->id)}}" method="GET">
    @csrf
Car name <br>
<input type="text" name="nama" value="{{$mobil->nama}}"><br><br>
@error('nama')
    <span class="invalid-feedback" role="alert" style="color: red">
        <strong>{{ $message }}</strong><br>
    </span>
@enderror

Car price <br>
 <strong>Rp.</strong>  <input type="number" name="price" value="{{$mobil->harga}}"><br><br>
@error('price')
    <span class="invalid-feedback" role="alert" style="color: red">
        <strong>{{ $message }}</strong><br>
    </span>
@enderror


Car stock <br>
<input type="number" name="stock" value="{{$mobil->stock}}"> <br><br>

@error('stock')
    <span class="invalid-feedback" role="alert" style="color: red">
        <strong>{{ $message }}</strong><br>
    </span>
@enderror

<button type="submit">
    Edit
</button>


<form>

