var input = document.getElementById('inp');
var result = document.getElementById('resultShow');
var button = document.getElementById('but');
var a = [];
function add(){
    var i = 0;
    a.push(input.value);
    result.innerHTML =``;
    for(i = 0 ;i < a.length ; i++){
        result.innerHTML += `<li class="list-group-item" > ${a[i]} </li>`;
    }
    input.value = '';
    
}
if (event.keyCode === 13) {
    document.getElementById("button-addon2").click();
  }
// function disbutton(){
//     if(input.value.length==0)
//     {
//         button.disabled = true;
//     }
// }