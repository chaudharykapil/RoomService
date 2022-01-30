@extends('./staff/layout')
  @section('content')
    <div class="flex flex-1 flex-col px-24 py-5">
      <div class="flex flex-col justify-center mt-10">
        @for ($i = 0; $i < count($allnotification); $i++)
        <div class="flex flex-row flex-1" id="notification-box-{{$allnotification[$i]->id}}">
          <div class="border-2 border-gray-100 rounded-md hover:bg-gray-100  shadow-lg flex-1 my-2 py-3 flex flex-col justify-start overflow-hidden "  onclick="toggle_notification({{$allnotification[$i]->id}})">
            <div class="flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bell m-2" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
              </svg>
              <h1 class="text-3xl font-bold flex-1">{{$allnotification[$i]->title}}</h1>
              @if (!$allnotification[$i]->isread)
              <div class="h-3 w-3 m-3 bg-blue-500 rounded-2xl" id="dot-{{$allnotification[$i]->id}}"></div>    
              @endif
              
            </div>
            <div hidden class="mx-3 mt-10" id="notification-{{$allnotification[$i]->id}}">
              <p>{{$allnotification[$i]->notification}}</p>
              <button class="py-2 px-3 bg-blue-700 hover:bg-blue-500 text-xl text-center text-white mt-10 rounded-lg" onclick="printnotificatiion({{$allnotification[$i]->id}})">Print</button>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      function toggle_notification(id) {
        let not = document.getElementById("notification-" + id)
        not.toggleAttribute("hidden")
        let dot = document.getElementById("dot-" + id)
        if (dot) {
          dot.toggleAttribute("hidden",true)
          axios.post("/api/shownotification",{id:id}).then(e=>{
          })
        }
      }
      function printnotificatiion(id) {
        let box = document.getElementById("notification-box-" + id)
        console.log(box)
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(box.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
      }
    </script>
  @endsection
