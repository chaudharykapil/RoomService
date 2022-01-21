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
            <th class="w-64 bg-blue-500  text-lg text-center text-white font-bold">
              Date
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
          @foreach ($request_rooms as $room)
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
              {{$room["description"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              Unconfirmed
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              <button class="bg-blue-500 w-52 py-1 rounded text-white" onclick="requestCancel({{$room['room_id']}})">Request Cancelation</button>
            </td>
          </tr>
          @endforeach
          @foreach ($bookedrooms as $room)
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
              {{$room["description"]}}
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              Confirmed
            </td>
            <td class="w-64 pt-2 text-lg text-center">
              <button class="bg-blue-500 w-52 py-1 rounded text-white" onclick="requestCancel({{$room['room_id']}})">Request Cancelation</button>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <script>
      function requestCancel(id) {
        console.log(id)
        axios.post("/staff/cancel",{"id":id}).then(e=>location.reload())
        
      }
    </script>
  @endsection
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{asset('js/StaffChatSystem.js')}}"></script>
  
  <div id="chatpanel" class="absolute bottom-0 right-0 h-9/10 bg-blue-600 w-1/4 mb-0 mr-5 rounded-lg">
    <div class="flex flex-row ml-5">
    <h3 class="text-left text-lg font-bold text-white w-80">Chat with Admin</h3>
    <span id="vis_btn_span"><button class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded" id="visibilitybtn" onclick="showchatbox()">^</button></span>
    </div>
    <div class="bg-white m-5 p-2 h-100 w-1/1" id="chatbox" hidden>
      <div class="bg-gray-200 m-1 w-1/1 h-98 py-2 px-1 overflow-y-scroll" id="chatList">
        
      </div>
      <div class="flex flex-row">
        <textarea class="text-xl mx-1 w-72 border-2 rounded-xl focus:outline-none  px-3 border-black" id="msgbox" rows="1" placeholder="Type message"></textarea>
        <button class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="SendMessage(2,1)" id="send_btn" type="button">send</button>
      </div>
    </div>
  </div>
  
  <script>
    
    function createShowBtn() {
      let btn = document.createElement("button")
      btn.setAttribute("class","bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded")
      btn.setAttribute("id","visibilitybtn")
      btn.setAttribute("onclick","showchatbox()")
      btn.innerHTML = "^"
      return btn
    }
    function createhideBtn() {
      let btn = document.createElement("button")
      btn.setAttribute("class","bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded")
      btn.setAttribute("id","visibilitybtn")
      btn.setAttribute("onclick","hidechatbox()")
      btn.innerHTML = "V"
      return btn
    }
    function hidechatbox() {
      let chatbox = document.getElementById("chatbox")
      document.getElementById("vis_btn_span").replaceChild(createShowBtn(),document.getElementById("visibilitybtn"))
      chatbox.setAttribute("hidden",true)     
    }
    function showchatbox() {
      let chatbox = document.getElementById("chatbox")
      document.getElementById("vis_btn_span").replaceChild(createhideBtn(),document.getElementById("visibilitybtn"))
      chatbox.removeAttribute("hidden")         
    }
  </script>