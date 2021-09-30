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
              @foreach ($all_rooms as $room)
                  
              
              <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">{{$room->id}}</td>
                <td class="px-4 py-4">{{$room->build_id}}</td>
                <td class="px-4 py-4">{{$room->level_no}}</td>
                <td class="px-4 py-4">{{$room->room_no}}</td>
                <td class="px-4 py-4">{{$room->room_name}}</td>
                <td class="px-4 py-4">
                  <div>
                    @if ($room->status)
                    <label  class="text-lg text-gray-700 bg-green-300 px-2 py-2 rounded-lg"
                    >Active</label>
                    @else
                    <label  class="text-lg text-gray-700 bg-red-300 px-2 py-2 rounded-lg"
                    >Inactive</label>
                    @endif
                  </div>
                </td>
                <td class="px-4 py-4"><a href="/room/edit/{{$room->id}}"><button>✏️</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/AdminChatSystem.js')}}"></script>
    
    <div id="chatpanel" hidden class="absolute bottom-0 right-0 h-9/10 bg-red-600 w-1/4 mb-0 mr-5 rounded-lg">
      <div class="flex flex-row ml-5">
      <h3 class="text-left text-lg font-bold text-white w-80">Chat with Admin</h3>
      <span id="vis_btn_span"><button class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 m-1 px-4 rounded" id="visibilitybtn" onclick="showchatbox()">^</button></span>
      </div>
      <div class="bg-white m-5 p-2 h-100 w-1/1" id="chatbox" hidden>
        <div class="bg-gray-200 m-1 w-1/1 h-98 py-2 px-1 overflow-y-scroll" id="chatList">
          
        </div>
        <div class="flex flex-row">
          <textarea class="text-xl mx-1 w-72 border-2 rounded-xl focus:outline-none  px-3 border-black" id="msgbox" rows="1" placeholder="Type message"></textarea>
          <button class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="SendMessage({{$send_to}},1)" id="send_btn" type="button">send</button>
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