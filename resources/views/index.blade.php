@extends('layout')
  @section('content')
      <h1 class="self-center text-3xl text-red-500">Admin Login</h1>
      <div class="max-h-screen flex justify-center">
        <div class="py-6 px-8 mt-20 bg-white rounded shadow-xl">
          <form action="/admin/login" method="POST">
            @csrf
            <div class="mb-6">
              <label for="email" class="block text-gray-800 font-bold"
                >Email</label
              >
              <input
                type="text"
                name="email"
                id="email"
                placeholder="@email"
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
              <label for="password" class="block text-gray-800 font-bold"
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

            </div>
            <button
            type="submit"
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
            </form>
            <hr class="
            cursor-pointer
            py-0
            px-4
            block
            mt-6
            bg-white
            text-red-500
            font-bold
            w-full
            text-center
            rounded
          ">
            <a href="/admin/login/provider">
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
            </a>
          
        </div>
      </div>
  @endsection