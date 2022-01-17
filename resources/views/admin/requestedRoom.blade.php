@extends('./admin/layout')
  @section('content')

    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-red-600 text-center font-bold">A</span>dmin <span class="font-sans text-4xl text-red-600 text-center font-bold">P</span>anal </h1>
      <div class="flex justify-center mt-10">
        <table>
          <tr class="bg-red-500">
            <th class="w-64 bg-red-500  text-lg text-center text-white font-bold">
              Time
            </th>
            <th class="w-64 bg-red-500 text-lg text-center text-white font-bold">
              Date
            </th>
            <th class="w-64 bg-red-500 text-lg text-center text-white font-bold">
              Location
            </th>
            <th class="w-64 bg-red-500 text-lg text-center text-white font-bold">
              Capacity
            </th>
            <th class="w-64 bg-red-500 text-lg text-center text-white font-bold">
              Description
            </th>
            <th class="w-64 bg-red-500 text-lg text-center text-white font-bold">
            </th>
          </tr>
          @foreach ($all_rooms as $room)
          <tr>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["time_from"]}} - {{$room["time_to"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["requested_date"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["location"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["size"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              {{$room["description"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              <button class="bg-green-500 w-52 py-1 rounded text-white" onclick="accept({{$room['id']}})"> Accept</button>
              <button class="bg-red-500 w-52 py-1 mt-2 rounded text-white" onclick="deny({{$room['id']}})"> Deny</button>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    
    <script>
      function accept(id) {
        axios.post("/room/accept",{"id":id}).then(e=>location.reload())        
      }
      function deny(id) { 
        axios.post("/room/deny",{"id":id}).then(e=>location.reload())
      }
    </script>
  @endsection
