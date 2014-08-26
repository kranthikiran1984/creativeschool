
function MoveToDept(){
    var dep = document.getElementById("depList");
    var selectedVal = dep.options[dep.selectedIndex].value;
    window.location = "./"+selectedVal;
    

}
