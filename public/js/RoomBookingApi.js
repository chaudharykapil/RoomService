$(document).ready(()=>{
    console.log("start")
    getRoomSizeList()
})
function getRoomSizeList() {
    axios.get("/api/getRoomsizes").then(e=>{
        console.log(e.data)
        setMaxSize(e.data)
    })
}
function setMaxSize(size_list) {
    let select_option = document.getElementById("size_list")
    let option = null
    size_list.forEach(e => {
        option = document.createElement("option")
        option.innerHTML = e
        option.setAttribute("value",e)
        select_option.appendChild(option)
    });
}