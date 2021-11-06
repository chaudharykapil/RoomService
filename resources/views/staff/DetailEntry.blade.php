@extends('./staff/layout')
  @section('content')
    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="w-68 bg-blue-500 py-1 px-1 mt-4 font-bold text-white">Your Booking: {{$all_data["room"]["location"]}} {{$all_data["pref_time"]}} - {{$all_data["end_time"]}} {{$all_data["date"]}}</div>
      <h1 class="font-sans text-2xl mt-2 font-bold">Enter Your detail</h1>
      <form action="/staff/bookingreciept" method="post">
        @csrf
        <div class="flex flex-col">
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">Email:</span>
                <span><input type="email" name="email" class="border-2 border-black w-96" /></span>
            </div>
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">Booking Size:</span>
                <span><input type="text" name="booking_size" class="border-2 border-black w-96" /></span>
            </div>
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">First Name:</span>
                <span><input type="text" name="f_name" class="border-2 border-black w-96" /></span>
            </div>
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">Last Name:</span>
                <span><input type="text" name="l_name" class="border-2 border-black w-96" /></span>
            </div>
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">Telephone:</span>
                <span><input type="tel" name="phone" class="border-2 border-black w-96" /></span>
            </div>
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">Event Description:</span>
                <span><input type="text" name="desc" class="border-2 border-black w-96" /></span>
            </div>
            <div class="flex flex-row px-2 py-2 ml-40 mt-4">
                <span class="w-40 text-lg">Department:</span>
                <span><input type="text" name="depart" class="border-2 border-black w-96" /></span>
            </div>
        </div>
        <div class="flex flex-row-reverse">
            <button type="submit" class="bg-blue-500 py-2 px-2 text-white rounded-lg hover:bg-blue-700">Make Booking</button>
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(setform)
        function setform(){
            var alldata = @json($all_data);
            let form = document.getElementsByTagName("form")[0]
            var id = document.createElement("input");
            id.setAttribute("type", "number");
            id.setAttribute("name", "room_id");
            id.setAttribute("hidden",true);
            id.setAttribute("value",alldata["room"]["id"])
        
            // Create an input element for date of birth
            var pref_time = document.createElement("input");
            pref_time.setAttribute("type", "text");
            pref_time.setAttribute("name", "pref_time");
            pref_time.setAttribute("hidden",true);
            pref_time.setAttribute("value",alldata["pref_time"])
        
            // Create an input element for emailID
            var end_time = document.createElement("input");
            end_time.setAttribute("type", "text");
            end_time.setAttribute("name", "end_time");
            end_time.setAttribute("hidden",true);
            end_time.setAttribute("value",alldata["end_time"])

            var date = document.createElement("input");
            date.setAttribute("type", "text");
            date.setAttribute("name", "date");
            date.setAttribute("hidden",true);
            date.setAttribute("value",alldata["date"])

            form.appendChild(id)
            form.appendChild(pref_time)
            form.appendChild(end_time)
            form.appendChild(date)
            console.log(form)
        }
    </script>
  @endsection
