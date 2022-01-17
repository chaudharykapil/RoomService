<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <script src="{{asset('js/app.js')}}"></script>
    <title>Home</title>
  </head>
  <body>
    <div class="flex flex-col min-h-screen justify-between">
      <nav
        class="relative px-4 py-4 flex justify-between items-center bg-blue-500"
      >
        <a class="text-3xl font-bold leading-none text-white" href="index.html">
          Logo
        </a>
        <div class="lg:hidden">
          <button class="navbar-burger flex items-center text-white p-3">
            <svg
              class="block h-4 w-4 fill-current"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Mobile menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </button>
        </div>
        @if (Session::has("staff"))
        <div class="flex flex-row justify-center items-center">
          <div class="mx-2 text-white text-lg border-2 border-white px-2 py-2">
            <a href="/staff/notification">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
            </svg>
          </a>
          </div>
          <a href="/staff/logout">
          <button class="rounded-lg bg-white text-blue-500 p-2 text-lg">
            Sign Out
          </button>
          </a>
        </div>    
        @endif
      </nav>
      <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
          class="
            fixed
            top-0
            left-0
            bottom-0
            flex flex-col
            w-5/6
            max-w-sm
            py-6
            px-6
            bg-blue-500
            border-r
            overflow-y-auto
          "
        >
          <div class="flex items-center mb-8">
            <a
              class="mr-auto text-3xl font-bold leading-none text-white"
              href="index.html"
            >
              Logo
            </a>
            <button class="navbar-close">
              <svg
                class="h-6 w-6 text-white cursor-pointer hover:text-gray-100"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>
          </div>
          <div>
          </div>
        </nav>
      </div>

      <script>
        // Burger menus
        document.addEventListener("DOMContentLoaded", function () {
          // open
          const burger = document.querySelectorAll(".navbar-burger");
          const menu = document.querySelectorAll(".navbar-menu");

          if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
              burger[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle("hidden");
                }
              });
            }
          }

          // close
          const close = document.querySelectorAll(".navbar-close");
          const backdrop = document.querySelectorAll(".navbar-backdrop");

          if (close.length) {
            for (var i = 0; i < close.length; i++) {
              close[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle("hidden");
                }
              });
            }
          }

          if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
              backdrop[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle("hidden");
                }
              });
            }
          }
        });
      </script>

      @yield('content')

      <footer
        class="
          p-4
          bg-blue-500
          text-white
          flex flex-col
          md:flex-row
          items-start
          md:justify-between
        "
      >
      </footer>
    </div>
  </body>
</html>
