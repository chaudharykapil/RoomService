<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/chatSystem.js')}}"></script>
</head>
<body>
    <div>
        <div>
            <h1>Messages</h1>
            <ul></ul>
        </div>
        <div>
            <input type="text" id="msgbox" placeholder="Type Message here . . .">
            <button type="button" onclick="sendMessage({{$send_to}},2)">Send</button>
        </div>
        <form action="/chat" method="post">
            @csrf
            <input type="text" name="message">
            <input type="text" name="sender_id">
            <input type="text" name="send_to">
            <button type="submit">send</button>

        </form>
    </div>
</body>
</html>