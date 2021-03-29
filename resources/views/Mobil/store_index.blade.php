<h2>Add new cars </h2>

<form action="{{route('mobil.store')}}" method="POST">
    @csrf
Car name <br>
<input type="text" name="nama"><br><br>
@error('nama')
    <span class="invalid-feedback" role="alert" style="color: red">
        <strong>{{ $message }}</strong><br>
    </span>
@enderror

Car price <br>
 <strong>Rp.</strong>  <input type="number" name="price"><br><br>
@error('price')
    <span class="invalid-feedback" role="alert" style="color: red">
        <strong>{{ $message }}</strong><br>
    </span>
@enderror


Car stock <br>
<input type="number" name="stock"> <br><br>

@error('stock')
    <span class="invalid-feedback" role="alert" style="color: red">
        <strong>{{ $message }}</strong><br>
    </span>
@enderror

<button type="submit">
    Add
</button>

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<form>
