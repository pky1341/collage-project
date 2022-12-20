<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" text-slate-400">
  <h1 class="text-3xl font-bold sm:text-[30px] bg-sky-300 mt-5 font-mono font-medium text-center">
    Registration Form!!!
  </h1>
  <div class="container  m-auto my-7">
    <form action="{{url('/')}}/register" method="post">
        @csrf
        @php
          $demo=2;
        @endphp
         <x-input type="text" name="name" placeholder="Enter your Name" :demo="$demo" />
        <x-input type="email" name="email" placeholder="Enter your Email" :demo="$demo" />
        <x-input type="password" name="passwd" placeholder="Enter your password" :demo="$demo" />
        <x-input type="password" name="cpasswd" placeholder="Enter your Confirm password" :demo="$demo" />
        <button type="submit" class="border-2 bg-blue-500 rounded-3xl p-2 px-4 font-bold text-[20px] ">submit</button>
    </form>
  </div>
</body>
</html>
