<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<form action="{{route('login')}}" method="get">
    @csrf
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" name="password" type="password" placeholder="******************">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
        Login
      </button>


    </div>
</form>
Doesn't have an account ? <a href="{{route('register.index')}}">Click here</a>
</div>
</body>
</html>


