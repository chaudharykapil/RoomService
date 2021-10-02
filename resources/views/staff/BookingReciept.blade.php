@extends('./staff/layout')
  @section('content')
    <div class="flex flex-1 flex-col items-center px-24 py-5 ">
      <h1 class="font-sans text-2xl font-bold mb-16"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="h-96 w-96 border-2 border-black flex flex-col items-center px-2 py-2">
          <p class="font-bold text-lg py-2">Request Subbmitted</p>
          <p class="font-bold text-lg py-2">B11-1-17</p>
          <p class="font-bold text-lg py-2">has been requested for you</p>
          <p class="font-bold text-lg py-2">from</p>
          <p class="font-bold text-lg py-2">14:00 - 16:00</p>
          <p class="font-bold text-lg py-2">on</p>
          <p class="font-bold text-lg py-2">30/09/21</p>
          <p class="font-bold text-lg py-2">Thank You</p>
      </div>
      <div class="m-4">
          <a href="/staff/roombooking"><button class="bg-blue-500 px-8 py-2 rounded text-white font-bold">Book Another</button></a>
      </div>
      <div>
          <a href="/staff/allbooking" class="text-blue-500 underline text-lg">My Bookings</a>
      </div>
    </div>
  @endsection
