$(document).ready(()=>{
    console.log("hello")
    var server = new WebSocket("ws://localhost:5000")

    server.onerror = (ev)=>{
        console.log(ev)
    }
})
