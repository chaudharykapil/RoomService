@extends('./staff/layout')
  @section('content')
    <h1 class="self-center text-3xl text-blue-500">Staff Login</h1>
    <div class="h-100 px-10 flex justify-center">
      <div class="py-1 px-8 mt-5 bg-white rounded shadow-xl">
        <form action="/staff/login" method="POST">
          @csrf
          <div class="mb-6">
            <label for="name" class="block text-gray-800 font-bold">UserName/ID</label>
            <input
              type="text"
              name="staff_id"
              id="name"
              placeholder="username"
              class="
                w-full
                border border-gray-300
                py-2
                pl-3
                rounded
                mt-2
                outline-none
                focus:ring-blue-500
                :ring-indigo-600
              "
            />
          </div>

          <div>
            <label for="email" class="block text-gray-800 font-bold"
              >Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="password"
              class="
                w-full
                border border-gray-300
                py-2
                pl-3
                rounded
                mt-2
                outline-none
                focus:ring-blue-500
                :ring-indigo-600
              "
            />

            <a
              href="#"
              class="
                text-sm
                font-thin
                text-gray-800
                hover:underline
                mt-2
                inline-block
                hover:text-blue-500
              ">
              Forget Password
            </a>
          </div>
          <button
            class="
              cursor-pointer
              py-2
              px-4
              block
              mt-6
              bg-blue-500
              text-white
              font-bold
              w-full
              text-center
              rounded
            "
          >
            Login
          </button>
          
        </form>
      </div>
    </div>
  @endsection
      
