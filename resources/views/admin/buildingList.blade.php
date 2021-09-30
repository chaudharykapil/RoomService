@extends('layout')
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
                  Building Name
                </th>

                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Status
                </th>
                <th
                  class="px-4 py-2 bg-gray-200"
                  style="background-color: #f8f8f8"
                >
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
              @foreach ($all_buildings as $building)

              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">{{$building->id}}</td>
                <td class="px-4 py-4">{{$building->b_id}}</td>
                <td class="px-4 py-4">{{$building->b_name}}</td>

                <td class="px-4 py-4">
                  <div>
                    @if ($building->status)
                    <label  class="text-lg text-gray-700 bg-green-300 px-2 py-2 rounded-lg"
                    >Active</label>
                    @else
                    <label  class="text-lg text-gray-700 bg-red-300 px-2 py-2 rounded-lg"
                    >Inactive</label>
                    @endif
                  </div>
                </td>
                <td class="px-4 py-4"><a href="/building/edit/{{$building->id}}"><button>✏️</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @endsection