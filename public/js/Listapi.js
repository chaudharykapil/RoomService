
function setBuldingId_List() {
    axios.get("/api/getBuildings").then((e)=>{
        //console.log(e.data)
        let list = e.data;
        let build_list = document.getElementById("building_list")
        build_list.innerHTML = ""
        let option = null
        
        if (list.length == 0) {
            option = document.createElement("option")
            option.setAttribute("value","")
            option.setAttribute("disabled",true)
            option.innerHTML = "No building added"
            build_list.appendChild(option)
        }
        else{
            option = document.createElement("option")
            option.setAttribute("value","")
            option.innerHTML = "Select Building ID"
            build_list.appendChild(option)
            list.forEach(id => {
                option = document.createElement("option")
                option.setAttribute("value",id)
                option.innerHTML = id
                build_list.appendChild(option)
            });
        }
    })
}
function ListenBuildingChange() {
    $("#building_list").change((e)=>{
        let build_id = $("#building_list").val()
        setLevelId_List(build_id)
    })
}
function setLevelId_List(build_id){
    axios.get(`/api/getLevels/${build_id}`).then((e)=>{
        let list = e.data;
        let level_list = document.getElementById("level_list")
        level_list.removeAttribute("disabled")
        level_list.innerHTML = ""
        let option = null
        if (list.length == 0) {
            option = document.createElement("option")
            option.setAttribute("value","")
            option.setAttribute("disabled",true)
            option.innerHTML = "No Level added in building"
            level_list.appendChild(option)
        }
        else{
            option = document.createElement("option")
            option.setAttribute("value","")
            option.innerHTML = "Select Level No"
            level_list.appendChild(option)
            list.forEach(id => {
                option = document.createElement("option")
                option.setAttribute("value",id)
                option.innerHTML = id
                level_list.appendChild(option)
            });
        }
    })
}