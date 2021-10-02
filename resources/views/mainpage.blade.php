<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="w-screen flex flex-col justify-center h-screen bg-main-bg">
            <p class="text-center mt-40 text-5xl font-bold" style="text-shadow: 2px 2px 2px white;">
                <span class="text-7xl w-12 h-12 font-serif text-white border-2 border-black bg-black rounded-full px-3 py-3">W</span>elecome 
                <span class="text-7xl w-12 h-12 font-serif text-white border-2 border-black bg-black rounded-full px-6 py-2">T</span>o 
                <span class="text-7xl font-serif text-white border-2 border-black bg-black rounded-full px-8 py-2">I</span>nfrastructure 
                <span class="text-7xl font-serif text-white border-2 border-black bg-black rounded-full px-6 py-3">U</span>niversity
            </p>
        
        <div class="flex flex-row justify-center items-center w-screen h-screen">
            <a href="/admin/login"><button class="text-white m-4 text-xl underline border-2 border-white hover:border-black hover:bg-white-100 hover:text-black px-2 py-2 rounded-lg">
                Continue as Admin
            </button></a>
            <a href="/staff/login"><button class="text-white m-4 text-xl underline border-2 border-white hover:border-black hover:bg-white-100 hover:text-black px-2 py-2 rounded-lg">
                Continue as Staff
            </button></a>
            <a href=""><button class="text-white m-4 text-xl underline border-2 border-white hover:border-black hover:bg-white-100 hover:text-black px-2 py-2 rounded-lg">
                Continue as Student
            </button></a>
        </div>
    </div>
</body>
</html>