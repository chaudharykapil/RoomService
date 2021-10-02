@extends('./staff/layout')
  @section('content')
    <div class="flex flex-1 flex-col px-24 py-5">
      <h1 class="font-sans text-2xl text-center font-bold"><span class="font-sans text-4xl text-blue-600 text-center font-bold">B</span>ook <span class="font-sans text-4xl text-blue-600 text-center font-bold">Y</span>our <span class="font-sans text-4xl text-blue-600 text-center font-bold">R</span>oom</h1>
      <div class="flex flex-row">
        <span class="py-1 flex-2 mt-4 text-2xl w-2/5 font-bold border-b-4 border-blue-500 rounded">Your Bookings are as following</span>
        <div class="flex flex-row-reverse w-full"><span class="py-1 px-2 mt-4"><a href="/staff/roombooking"><button class="px-2 py-2 font-bold text-white rounded-lg bg-blue-500 ">Book a Room</button></a></span></div>
      </div>
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
              Description
            </th>
            <th class="w-64 bg-blue-500 text-lg text-center text-white font-bold">
              Status
            </th>
            <th class="w-64 bg-blue-500 text-lg text-center text-white font-bold">
            </th>
          </tr>
          <tr>
            <td class="w-64 pt-2 text-lg text-center">
              14:00 - 16:00
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              B11-1-17
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              Block 11 level 1 room 17 -Lab
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              Unconfirmed
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              <button class="bg-blue-500 w-52 py-1 rounded text-white">Request Cancelation</button>
            </td>
          </tr>
          <tr>
            <td class="w-64 pt-2 text-lg text-center">
              14:00 - 16:00
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              B11-1-17
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              Block 11 level 1 room 17 -Lab
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              Confirmed
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              <button class="bg-blue-500 w-52 py-1 rounded text-white">Request Cancelation</button>
            </td>
          </tr>
          
        </table>
      </div>
    </div>
  @endsection
