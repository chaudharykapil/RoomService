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
        <div>
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
