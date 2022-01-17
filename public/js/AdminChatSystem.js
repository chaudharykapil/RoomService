
let send_to = null
$(document).ready(()=>{
    let chatbox = document.getElementById("chatpanel")
    let activeUsers = []
    Echo.channel('chat')
    .listen('MessageSend', (e) => {
        //console.log(e);
        if(e.message){
            chatbox.removeAttribute("hidden")
            //console.log(e.message.sender_id)
            if (activeUsers.indexOf(e.message.sender_id) == -1){
                activeUsers.push(e.message.sender_id)
                send_to = e.message.sender_id
                axios.post("/api/getmessages",{"sender_id":e.message.sender_id,"reciever_id":e.message.reciever_id}).then(res=>{
                    //console.log(res)
                    res.data.forEach(msg => {
                        if (msg.reciever_id == 2 && msg.sender_id == 1){
                            let msgbox = createSenderChatmsg(msg.message)
                            AddMessage(msgbox)
                        }
                        if(msg.reciever_id == 1 && msg.sender_id == 2){
                            let msgbox = createRecieverChatmsg(msg.message)
                            AddMessage(msgbox)
                        }
                    });
                })
            }
            else{
                let msgbox = createRecieverChatmsg(e.message.message)
                AddMessage(msgbox)
            }
            //console.log(activeUsers)
            
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
function SendMessage(sender_id) {
    let msg = $("#msgbox").val()
    //console.log(msg)
    axios.post("/sendmessage",data = {message:msg,sender_id:sender_id,send_to:send_to}).then((e)=>{
        console.log(e)
    })
    let msgbox = createSenderChatmsg(msg)
    AddMessage(msgbox)
    $("#msgbox").val("")
}