<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title>Home</title>
  </head>
  <body>
    <div class="flex flex-col min-h-screen justify-between">
      <nav
        class="relative px-4 py-4 flex justify-between items-center bg-red-500"
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
        @if (Session::has('admin'))
        <ul
          class="
            hidden
            absolute
            top-1/2
            left-1/2
            transform
            -translate-y-1/2 -translate-x-1/2
            lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6
          "
        >
          
          <li>
            <a
              class="text-sm text-white hover:text-gray-100"
              href="/room/list"
              >View Rooms</a
            >
          </li>
          <li>
            <a
              class="text-sm text-white hover:text-gray-100"
              href="/room/new"
              >Add Rooms</a
            >
          </li>
          <li>
            <a
              class="text-sm text-white hover:text-gray-100"
              href="/building/list"
              >View Building</a
            >
          </li>
          <li>
            <a
              class="text-sm text-white hover:text-gray-100"
              href="/building/new"
              >Add Building</a
            >
          </li>
          <li>
            <a
              class="text-sm text-white hover:text-gray-100"
              href="/level/list"
              >View Level</a
            >
          </li>
          <li>
            <a
              class="text-sm text-white hover:text-gray-100"
              href="/level/new"
              >Add Building Level</a
            >
          </li>
        </ul>
        @endif
        <div>
          @if (Session::has('admin'))
          <a href="/admin/logout">
          <button class="rounded-lg bg-white text-red-500 p-2 text-lg">
            LogOut
          </button>
          </a>
          @endif
        </div>
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
            bg-red-500
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
            @if (Session::has('admin'))
            <ul>
              
              <li class="mb-1">
                <a
                  class="
                    block
                    p-4
                    text-sm
                    font-semibold
                    text-white
                    hover:bg-blue-50 hover:text-white
                    rounded
                  "
                  href="/room/edit"
                  >View Rooms</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="
                    block
                    p-4
                    text-sm
                    font-semibold
                    text-white
                    hover:bg-blue-50 hover:text-white
                    rounded
                  "
                  href="/room/new"
                  >Add Rooms</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="
                    block
                    p-4
                    text-sm
                    font-semibold
                    text-white
                    hover:bg-blue-50 hover:text-white
                    rounded
                  "
                  href="/building/edit"
                  >View Building</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="
                    block
                    p-4
                    text-sm
                    font-semibold
                    text-white
                    hover:bg-blue-50 hover:text-white
                    rounded
                  "
                  href="/building/new"
                  >Add Building</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="
                    block
                    p-4
                    text-sm
                    font-semibold
                    text-white
                    hover:bg-blue-50 hover:text-white
                    rounded
                  "
                  href="/level/edit"
                  >View Level</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="
                    block
                    p-4
                    text-sm
                    font-semibold
                    text-white
                    hover:bg-blue-50 hover:text-white
                    rounded
                  "
                  href="/level/new"
                  >Add Building Level</a
                >
              </li>
            </ul>
            @endif
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

      <div class="absolute bottom-0 right-0 h-9/10 bg-red-600 w-1/4 mb-0 mr-5 rounded-lg">
        <div class="flex flex-row ml-5">
        <h3 class="text-left text-lg font-bold text-white w-80">Chat with Admin</h3>
        <span id="vis_btn_span"><button class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded" id="visibilitybtn" onclick="showchatbox()">^</button></span>
        </div>
        <div class="bg-white m-5 p-2 h-100 w-1/1" id="chatbox" hidden>
          <div class="bg-gray-200 m-1 w-1/1 h-98 py-2 px-1  overflow-y-scroll">
            <p class="mb-3 flex flex-row "><span class="bg-blue-500 p-1 text-white rounded-xl" >hy</span></p>
            <p class="mb-3 flex flex-row-reverse "><span class="bg-green-500 p-1 text-white rounded-xl" >hy how are you</span></p>
          </div>
          <div class="flex flex-row">
            <textarea class="text-xl mx-1 w-72 border-2 rounded-xl focus:outline-none  px-3 border-black" rows="1" placeholder="type message"></textarea>
            <button class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button">send</button>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script>
        
        function createShowBtn() {
          let btn = document.createElement("button")
          btn.setAttribute("class","bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded")
          btn.setAttribute("id","visibilitybtn")
          btn.setAttribute("onclick","showchatbox()")
          btn.innerHTML = "^"
          return btn
        }
        function createhideBtn() {
          let btn = document.createElement("button")
          btn.setAttribute("class","bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded")
          btn.setAttribute("id","visibilitybtn")
          btn.setAttribute("onclick","hidechatbox()")
          btn.innerHTML = "V"
          return btn
        }
        function hidechatbox() {
          let chatbox = document.getElementById("chatbox")
          document.getElementById("vis_btn_span").replaceChild(createShowBtn(),document.getElementById("visibilitybtn"))
          chatbox.setAttribute("hidden",true)     
        }
        function showchatbox() {
          let chatbox = document.getElementById("chatbox")
          document.getElementById("vis_btn_span").replaceChild(createhideBtn(),document.getElementById("visibilitybtn"))
          chatbox.removeAttribute("hidden")         
        }
      </script>
			<footer
			class="
			p-4
			bg-red-500
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






