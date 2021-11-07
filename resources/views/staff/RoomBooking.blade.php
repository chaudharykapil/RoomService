@extends('./staff/layout')
  @section('content')    
    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="">
        <form action="/staff/roombooking" method="post">
          @csrf
          <div class="h-auto py-1 px-2 w-full bg-blue-500 mb-10 border-b-4 rounded-lg border-white-400">
            <span class="text-white font-bold text-lg">1.</span>
            <span class="text-white font-bold text-lg">Location</span>
          </div>
          <div class="flex flex-row">
            <div class="mr-20">
              <img src="{{asset('images/location.png')}}" height="200" width="200" alt="">
            </div>
            <div class="flex flex-col">
              <div class="flex flex-row justify-end mb-10">
                <span class="mr-3 font-bold mr-12 text-lg self-start">Maximum Size:</span>
                <span class="self-end">
                  <input name="size" type="number" id="size_list" class="w-40 border-blue-500 border-2" />
      
                </span>
              </div>
              <div class="flex flex-row justify-end mb-10">
                <span class="mr-3 font-bold mr-12 text-lg">Type of room:</span>
                <span class="self-end">
                  <select name="room_type" id="" class="w-40 border-blue-500 border-2">
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
                </span>
              </div>
              <div class="flex flex-row justify-end mb-10">
                <span class="mr-3 font-bold mr-12 text-lg">Building:</span>
                <span class="self-end">
                  <select name="build_id" id="building_list" class="w-40 border-blue-500 border-2">
                    
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
              <img src="{{asset('images/date.png')}}" height="200" width="200" alt="">
            </div>
            <div class="flex flex-col">
              <div class="flex flex-row justify-end mb-10">
                <span class="self-end">
                  <input type="date" name="date" id="" class="w-40 border-blue-500 border-2" />
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
              <img src="{{asset('images/time.jpg')}}" height="200" width="200" alt="">
            </div>
            <div class="flex flex-col">
              <div class="flex flex-row justify-end mb-10">
                <span class="self-end mr-10">
                  <span class="mr-5">Prefered Start Time:</span>
                  <input type="time" name="pref_time" id="" class="w-40 border-blue-500 border-2" />
                </span>
                <span class="self-end mr-10">
                  <span class="mr-5">Duration</span>
                  <input type="number" name="duration" id="" class="w-40 border-blue-500 border-2" />
                </span>
              </div>
            </div>
          </div>
          <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 px-2 py-2 rounded border-2 border-blue-700 text-white">Submit</button>
          </div>
        </form>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/Listapi.js')}}"></script>
    <script>
      $(document).ready(()=>{
        setBuldingId_List()
      })
    </script>
    
  @endsection
