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
  <title>DPTSI Jobs</title>
</head>

<body>
  <nav class="flex justify-between items-center mb-4 fixed w-full bg-white z-50 border-b-[1px] border-b-gray-50">
    <a href="/" class="flex items-center text-3xl font-bold"><img class="w-24" src="{{asset('images/dptsi.jpg')}}" alt="" class="logo" /> IT Jobs</a>
    <ul class="flex mr-6 space-x-8 text-lg">
      <li>
        <a href="/" class="hover:text-blue-600">Home</a>
      </li>
      <li>
        <a href="/about" class="hover:text-blue-600">About</a>
      </li>
      <li>
        <a href="https://github.com/bazoka-kaka/pbkk-final-project" target="_blank" class="hover:text-blue-600">Github</a>
      </li>
      <p> | </p>
      @auth
      <li>
        <span class="font-semibold uppercase">
          Welcome, {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href="/jobs/manage" class="hover:text-blue-600"><i class="fa-solid fa-gear"></i> Manage Jobs</a>
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
        <a href="/login" class="hover:text-blue-600">Login</a>
      </li>
      @endauth
    </ul>
  </nav>

  <main class="pt-[96px] mb-48">
    {{$slot}}
  </main>


<footer class="m-4 bg-white rounded-lg">
  <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
          <a href="https://flowbite.com/" class="flex items-center mb-4 space-x-1 sm:mb-0 rtl:space-x-reverse">
              <img src="{{ url('images/dptsi.jpg') }}" class="h-12" alt="Flowbite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">IT Jobs</span>
          </a>
          <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">About</a>
              </li>
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
              </li>
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
              </li>
              <li>
                  <a href="#" class="hover:underline">Contact</a>
              </li>
          </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 Yehezkiel & Samuel™. All Rights Reserved.</span>
  </div>
</footer>


  {{-- <footer
    class="relative bottom-0 left-0 flex items-center justify-start w-full h-24 mt-24 font-bold text-white bg-blue-600 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2024, Yehezkiel & Samuel</p>

    <a href="/jobs/create" class="absolute px-5 py-2 text-black transition duration-200 bg-white rounded-lg top-1/3 right-10 hover:bg-gray-100">Post Job</a>
  </footer> --}}

  <x-flash-message />
</body>

</html>