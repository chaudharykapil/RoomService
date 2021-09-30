@extends('./staff/layout')
  @section('content')    
    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="">
        <div class="h-auto py-1 px-2 w-full bg-blue-500 mb-10 border-b-4 rounded-lg border-white-400">
          <span class="text-white font-bold text-lg">1.</span>
          <span class="text-white font-bold text-lg">Location</span>
        </div>
        <div class="flex flex-row">
          <div class="mr-20">
            <img src="../img/icon.png" height="200" width="200" alt="">
          </div>
          <div class="flex flex-col">
            <div class="flex flex-row justify-end mb-10">
              <span class="mr-3 font-bold mr-12 text-lg self-start">Minimum Size:</span>
              <span class="self-end">
                <select name="" id="" class="w-40 border-blue-500 border-2">
                  <option value="">1</option>
                  <option value="">2</option>
              </select>
              </span>
            </div>
            <div class="flex flex-row justify-end mb-10">
              <span class="mr-3 font-bold mr-12 text-lg">Type of room:</span>
              <span class="self-end">
                <select name="" id="" class="w-40 border-blue-500 border-2">
                  <option value="">1</option>
                  <option value="">2</option>
              </select>
              </span>
            </div>
            <div class="flex flex-row justify-end mb-10">
              <span class="mr-3 font-bold mr-12 text-lg">Building:</span>
              <span class="self-end">
                <select name="" id="" class="w-40 border-blue-500 border-2">
                  <option value="">1</option>
                  <option value="">2</option>
              </select>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <div class="h-auto py-1 px-2 w-full bg-blue-500 mb-10 border-b-4 rounded-lg border-white-400">
          <span class="text-white font-bold text-lg">2.</span>
          <span class="text-white font-bold text-lg">Date</span>
        </div>
        <div class="flex flex-row">
          <div class="mr-20">
            <img src="../img/icon.png" height="200" width="200" alt="">
          </div>
          <div class="flex flex-col">
            <div class="flex flex-row justify-end mb-10">
              <span class="self-end">
                <input type="date" name="" id="" class="w-40 border-blue-500 border-2" />
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <div class="h-auto py-1 px-2 w-full bg-blue-500 mb-10 border-b-4 rounded-lg border-white-400">
          <span class="text-white font-bold text-lg">3.</span>
          <span class="text-white font-bold text-lg">Time</span>
        </div>
        <div class="flex flex-row">
          <div class="mr-20">
            <img src="../img/icon.png" height="200" width="200" alt="">
          </div>
          <div class="flex flex-col">
            <div class="flex flex-row justify-end mb-10">
              <span class="self-end mr-10">
                <span class="mr-5">Prefered Start Time:</span>
                <input type="time" name="" id="" class="w-40 border-blue-500 border-2" />
              </span>
              <span class="self-end mr-10">
                <span class="mr-5">Duration</span>
                <input type="time" name="" id="" class="w-40 border-blue-500 border-2" />
              </span>
            </div>
          </div>
        </div>
        <div class="flex justify-end">
          <button class="bg-blue-500 px-2 py-2 rounded border-2 border-blue-700 text-white">Submit</button>
        </div>
      </div>
    </div>
  @endsection
