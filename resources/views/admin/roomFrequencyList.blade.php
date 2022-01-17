@extends('./admin/layout')
  @section('content')
    @if(Session::has('message'))
      <script>
        alert('{{Session::get("message")}}')
      </script>
    @endif
      <!-- component -->
      <div class="bg-white pb-4 px-4 rounded-md w-full">
        <div class="overflow-x-auto mt-6">
          <table class="table-auto border-collapse w-full">
            <thead>
              <tr
                class="rounded-lg text-sm font-medium text-gray-700 text-left"
                style="font-size: 0.9674rem"
              >
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  #
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Building
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Level
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Room
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Room Name
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Frequency used
                </th>
                
              </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
              @foreach ($all_rooms as $room)
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">{{$room->id}}</td>
                <td class="px-4 py-4">{{$room->build_id}}</td>
                <td class="px-4 py-4">{{$room->level_no}}</td>
                <td class="px-4 py-4">{{$room->room_no}}</td>
                <td class="px-4 py-4">{{$room->room_name}}</td>
                <td class="px-4 py-4">{{$room->frequency}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div>
            <button class="px-3 py-2 m-5 text-center font-semibold text-xl bg-red-600 text-white rounded-lg" onclick="window.print()">Print</button>
          </div>
        </div>
      </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    