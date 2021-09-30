@extends('./staff/layout')
  @section('content')
    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="w-68 bg-blue-500 py-1 px-1 mt-4 font-bold text-white">Your Booking: B11-1-17 14:00 -16:00 30/09/21</div>
      <h1 class="font-sans text-2xl mt-2 font-bold">Enter Your detail</h1>
      <div class="flex flex-col">
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">Email:</span>
              <span><input type="email" class="border-2 border-black w-96"></span>
          </div>
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">Booking Size:</span>
              <span><input type="text" class="border-2 border-black w-96"></span>
          </div>
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">First Name:</span>
              <span><input type="text" class="border-2 border-black w-96"></span>
          </div>
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">Last Name:</span>
              <span><input type="text" class="border-2 border-black w-96"></span>
          </div>
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">Telephone:</span>
              <span><input type="tel" class="border-2 border-black w-96"></span>
          </div>
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">Event Description:</span>
              <span><input type="text" class="border-2 border-black w-96"></span>
          </div>
          <div class="flex flex-row px-2 py-2 ml-40 mt-4">
              <span class="w-40 text-lg">Department:</span>
              <span><input type="text" class="border-2 border-black w-96"></span>
          </div>
      </div>
      <div class="flex flex-row-reverse">
        <button class="bg-blue-500 py-2 px-2 text-white rounded-lg hover:bg-blue-700">Make Booking</button>
      </div>
    </div>

  @endsection
