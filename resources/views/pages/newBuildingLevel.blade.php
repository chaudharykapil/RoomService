@extends('..layout')
  @section('content')  
  @if(Session::has('message'))
    <script>
      alert('{{Session::get("message")}}')
    </script>
  @endif
      <!-- component -->
      <div class="flex items-center justify-center">
        <div
          class="
            grid
            bg-white
            rounded-lg
            shadow-xl
            w-11/12
            md:w-9/12
            lg:w-1/2
            p-4
          "
        >
          <div class="flex justify-center">
            <div class="flex">
              <h1 class="text-gray-600 font-semibold md:text-2xl text-xl">
                New Building Level
              </h1>
            </div>
          </div>
          <form action="" method="post">
            @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
              <label
                class="
                  uppercase
                  md:text-sm
                  text-xs text-gray-500 text-light
                  font-semibold
                "
                >Building
              </label>
              <input
                class="
                  py-2
                  px-3
                  rounded-lg
                  border-2 border-red-300
                  mt-1
                  focus:outline-none
                  focus:ring-2
                  focus:ring-red-500
                  focus:border-transparent
                "
                name="build_id"
                type="text"
                placeholder="Block 11"
              />
            </div>
            <div class="grid grid-cols-1">
              <label
                class="
                  uppercase
                  md:text-sm
                  text-xs text-gray-500 text-light
                  font-semibold
                "
                >Level</label
              >
              <input
                class="
                  py-2
                  px-3
                  rounded-lg
                  border-2 border-red-300
                  mt-1
                  focus:outline-none
                  focus:ring-2
                  focus:ring-red-500
                  focus:border-transparent
                "
                name="level_no"
                type="text"
                placeholder="1"
              />
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
              <label
                class="
                  uppercase
                  md:text-sm
                  text-xs text-gray-500 text-light
                  font-semibold
                "
                >Level Name</label
              >
              <input
                class="
                  py-2
                  px-3
                  rounded-lg
                  border-2 border-red-300
                  mt-1
                  focus:outline-none
                  focus:ring-2
                  focus:ring-red-500
                  focus:border-transparent
                "
                name="level_name"
                type="text"
                placeholder="Level Name"
              />
            </div>
            <div class="grid grid-cols-1">
              <label
                class="
                  uppercase
                  md:text-sm
                  text-xs text-gray-500 text-light
                  font-semibold
                "
                >Status</label
              >
              <div>
                <div
                  class="
                    relative
                    inline-block
                    w-10
                    mr-2
                    align-middle
                    select-none
                    transition
                    duration-200
                    ease-in
                  "
                >
                  <input
                    type="checkbox"
                    name="status"
                    id="toggle"
                    class="
                      toggle-checkbox
                      absolute
                      block
                      w-6
                      h-6
                      rounded-full
                      bg-white
                      border-4
                      appearance-none
                      cursor-pointer
                    "
                  />
                  <label
                    for="toggle"
                    class="
                      toggle-label
                      block
                      overflow-hidden
                      h-6
                      rounded-full
                      bg-gray-300
                      cursor-pointer
                    "
                  ></label>
                </div>
                <label for="toggle" class="text-lg text-gray-700">Active</label>
              </div>
            </div>
            <div class="grid grid-cols-1">
              <button
              type="submit"
                class="
                  text-white
                  rounded-lg
                  bg-red-500
                  shadow-lg
                  block
                  md:inline-block
                  w-24
                  h-10
                  mt-2
                "
              >
                🖫 Create
              </button>
            </div>
          </div>
        </form>
        </div>
      </div>
  @endsection
