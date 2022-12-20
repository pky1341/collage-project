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
        <input type="text" name="name" placeholder="Enter Your Name" class="w-3/12 border-2 p-2 bg-purple-100 border-orange-400 text-base my-3" required>
        <br>
        <input type="email" name="email" placeholder="Enter Your Email" class="w-3/12 border-2 p-2 bg-purple-100 border-orange-400 text-base my-3" required>
        <br>
        <input type="password" name="passwd" placeholder="Enter password" class="w-3/12 border-2 p-2 bg-purple-100 border-orange-400 text-base my-3" required>
        <br>
        <button type="submit" class="border-2 bg-blue-500 rounded-3xl p-2 px-4 font-bold text-[20px] ">submit</button>
    </form>
  </div>
</body>
</html>