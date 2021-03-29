<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<form action="{{route('register.submit')}}" method="POST">
    @csrf
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Username
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3" name="username" id="grid-first-name" type="text" >
      @error('username')
        <span class="invalid-feedback" role="alert" style="color: red">
            <strong>{{ $message }}</strong><br>
        </span>
      @enderror

    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Email
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3" name="email"  id="grid-first-name" type="email" >
      @error('email')
        <span class="invalid-feedback" role="alert" style="color: red">
            <strong>{{ $message }}</strong><br>
        </span>
      @enderror
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Password
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" name="password" type="password" placeholder="******************">
      @error('password')
        <span class="invalid-feedback" role="alert" style="color: red">
            <strong>{{ $message }}</strong><br>
        </span>
      @enderror
    </div>
  </div>

  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Confirm Password
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" name="confPassword" type="password" placeholder="******************">
      @error('confPassword')
        <span class="invalid-feedback" role="alert" style="color: red">
            <strong>{{ $message }}</strong><br>
        </span>
      @enderror
    </div>
  </div>


  <button type="submit" class="btn btn-primary">
    Register
  </button>


  </div>
</form>
</div>
</body>
</html>

