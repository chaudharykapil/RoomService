@extends('..layout')
  @section('content')
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
                View Room
              </h1>
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
                >Building ID</label
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
                type="text"
                placeholder="Block 1"
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
                >Room Number</label
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
                type="text"
                placeholder=" 101"
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
                >Room Name</label
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
                type="text"
                placeholder="Room Name"
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
                >Room Type</label
              >
              <select
                name=""
                id=""
                class="
                  py-2
                  px-3
                  rounded-lg
                  border-2 border-red-300
                  mt-1
                  focus:outline-none focus:ring-2 focus:ring-red-500
                "
              >
                <option value="Any Room" label="Any Room"></option>
                <option value="Computer Room" label="Computer Room"></option>
                <option value="Drama Studio" label="Drama Studio"></option>
                <option
                  value="Fixed Furniture"
                  label="Fixed Furniture"
                ></option>
                <option
                  value="Flat Lecture Room 40+"
                  label="Flat Lecture Room 40+"
                ></option>
                <option value="Flat  Room " label="Flat  Room "></option>
                <option
                  value="Flat Seminar Room "
                  label="Flat Seminar Room "
                ></option>
                <option
                  value="Language Laboratory"
                  label="Language Laboratory"
                ></option>
                <option value="Meeting Room" label="Meeting Room"></option>
                <option
                  value="Music Practice Room"
                  label="Music Practice Room"
                ></option>
                <option value="Rooms 1-40" label="Rooms 1-40"></option>
                <option value="Rooms 41-100" label="Rooms 41-100"></option>
                <option value="Rooms over 150" label="Rooms over 150"></option>
                <option value="Teaching All" label="Teaching All"></option>
                <option
                  value="Tiered Lecture Theaters"
                  label="Tiered Lecture Theaters"
                ></option>
                <option
                  value="Video Conference Room"
                  label="Video Conference Room"
                ></option>
              </select>
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
                    name="toggle"
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
                >User Remark</label
              >
              <textarea
                name=""
                id=""
                cols="10"
                rows="6"
                placeholder="User Remark"
                class="border p-2 mt-3 w-full rounded-lg border-red-500"
              ></textarea>
            </div>
          </div>
        </div>
      </div>
  
      
  @endsection
