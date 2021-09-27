$(document).ready(()=>{
    Echo.channel('chat')
    .listen('MessageSend', (e) => {
        console.log(e);
        let msglist = document.getElementById("msglist")
        let li = document.createElement("li")
        li.innerHTML = e.message.message
        msglist.appendChild(li)
    });
    
})
function SendMessage(send_to,sender_id) {
    let msg = $("#msgbox").val()
    console.log(msg)
    axios.post("/sendmessage",data = {message:msg,sender_id:sender_id,send_to:send_to}).then((e)=>{
        console.log(e)
    })
    let msglist = document.getElementById("msglist")
    let li = document.createElement("li")
    li.innerHTML = msg
    msglist.appendChild(li)
}