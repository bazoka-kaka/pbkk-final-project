<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
  <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
  <nav class="flex justify-between items-center mb-4 fixed w-full bg-white z-50 border-b-[1px] border-b-gray-50">
    <a href="/"><img class="w-24" src="{{asset('images/dptsi.jpg')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-8 mr-6 text-lg">
      @auth
      <li>
        <span class="font-bold uppercase">
          Welcome {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href="/jobs/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Jobs</a>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed"></i> Logout
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-blue-600">Register</a>
      </li>
      <li>
        <a href="/login" class="hover:text-blue-600">Login</a>
      </li>
      @endauth
    </ul>
  </nav>

  <main class="pt-[96px]">
    {{$slot}}
  </main>
  <footer
    class="bottom-0 left-0 w-full flex items-center justify-start font-bold bg-blue-600 text-white h-24 mt-24 opacity-90 md:justify-center relative">
    <p class="ml-2">Copyright &copy; 2024, Yehezkiel & Samuel</p>

    <a href="/jobs/create" class="absolute top-1/3 right-10 bg-white text-black py-2 px-5 rounded-lg hover:bg-gray-100 transition duration-200">Post Job</a>
  </footer>

  <x-flash-message />
</body>

</html>