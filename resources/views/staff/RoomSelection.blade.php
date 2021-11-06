@extends('./staff/layout')
  @section('content')

    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="flex justify-center mt-10">
        <table>
          <tr class="bg-blue-500">
            <th class="w-64 bg-blue-500  text-lg text-center text-white font-bold">
              Time
            </th>
            <th class="w-64 bg-blue-500 text-lg text-center text-white font-bold">
              Location
            </th>
            <th class="w-64 bg-blue-500 text-lg text-center text-white font-bold">
              Capacity
            </th>
            <th class="w-64 bg-blue-500 text-lg text-center text-white font-bold">
              Description
            </th>
            <th class="w-64 bg-blue-500 text-lg text-center text-white font-bold">
            </th>
          </tr>
          @foreach ($all_data["rooms"] as $room)
          <tr>
            <td class="w-64 pt-2 text-lg text-center">
              {{$all_data["pref_time"]}} - {{$all_data["end_time"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["location"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["max_size"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["description"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              <button class="bg-blue-500 w-52 py-1 rounded text-white" onclick="selectRoom(`{{$room}}`)"> Select</button>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    
    <script>
      
      function selectRoom(room) {
        room = JSON.parse(room)
        var alldata = @json($all_data);
        console.log(alldata)
        let form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "/staff/detailentry");
        form.setAttribute("hidden", true);
        form.innerHTML = `@csrf`
        console.log(form)
        // Create an input element for Full Name
        var id = document.createElement("input");
        id.setAttribute("type", "number");
        id.setAttribute("name", "room_id");
        id.setAttribute("hidden",true);
        id.setAttribute("value",room["id"])
      
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
        var s = document.createElement("button");

        var date = document.createElement("input");
        date.setAttribute("type", "text");
        date.setAttribute("name", "date");
        date.setAttribute("hidden",true);
        date.setAttribute("value",alldata["date"])
        var s = document.createElement("button");
        s.setAttribute("type", "submit");
          // Append the full name input to the form
        form.appendChild(id); 
        form.appendChild(pref_time); 
        form.appendChild(end_time);
        form.appendChild(date); 
        form.appendChild(s);
        document.body.appendChild(form)
        form.submit()
      }
    </script>
  @endsection
