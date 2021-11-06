$(document).ready(()=>{
    let chatbox = document.getElementById("chatpanel")
    let activeUsers = []
    Echo.channel('chat')
    .listen('MessageSend', (e) => {
        //console.log(e);
        if(e.message){
            //chatbox.removeAttribute("hidden")
            console.log(e.message.sender_id)
            if (activeUsers.indexOf(e.message.sender_id) == -1){
                activeUsers.push(e.message.sender_id)
                
            }
            console.log(activeUsers)
            let msgbox = createRecieverChatmsg(e.message.message)
            AddMessage(msgbox)
        }
    });
})
function createSenderChatmsg(msg){
    let msgbox = document.createElement("p")
    msgbox.setAttribute("class","mb-3 flex flex-row ")
    let spn = document.createElement("span")
    spn.setAttribute("class","bg-blue-500 p-1 text-white rounded-xl")
    spn.innerHTML = msg
    msgbox.appendChild(spn)
    return msgbox
}
function createRecieverChatmsg(msg){
    let msgbox = document.createElement("p")
    msgbox.setAttribute("class","mb-3 flex flex-row-reverse ")
    let spn = document.createElement("span")
    spn.setAttribute("class","bg-green-500 p-1 text-white rounded-xl")
    spn.innerHTML = msg
    msgbox.appendChild(spn)
    return msgbox
}
function AddMessage(node) {
    let chatlist = document.getElementById("chatList")
    chatlist.appendChild(node)
}
function SendMessage(send_to,sender_id) {
    let msg = $("#msgbox").val()
    //console.log(msg)
    axios.post("/sendmessage",data = {message:msg,sender_id:sender_id,send_to:send_to}).then((e)=>{
        //console.log(e)
    })
    let msgbox = createSenderChatmsg(msg)
    AddMessage(msgbox)
    $("#msgbox").val("")
}