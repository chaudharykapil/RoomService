@extends('layout')
  @section('content')
      <h1 class="self-center text-3xl text-red-500">Admin Login</h1>
      <div class="max-h-screen flex justify-center">
        <div class="py-6 px-8 mt-20 bg-white rounded shadow-xl">
          <form action="">
            <div class="mb-6">
              <label for="name" class="block text-gray-800 font-bold"
                >Name or Email</label
              >
              <input
                type="text"
                name="name"
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
                  focus:ring-red-500
                  :ring-indigo-600
                "
              />
            </div>

            <div>
              <label for="email" class="block text-gray-800 font-bold"
                >Password</label
              >
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
                  focus:ring-red-500
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
                  hover:text-red-500
                "
                >Forget Password</a
              >
            </div>
            <button
              class="
                cursor-pointer
                py-2
                px-4
                block
                mt-6
                bg-red-500
                text-white
                font-bold
                w-full
                text-center
                rounded
              "
            >
              Login
            </button>
            <button
              class="
                cursor-pointer
                py-2
                px-4
                block
                mt-6
                bg-white
                text-red-500
                font-bold
                w-full
                text-center
                rounded
              "
            >
              Sign In with Google
            </button>
          </form>
        </div>
      </div>
  @endsection