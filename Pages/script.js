
function addItem(){
    var ul = document.getElementById("dynamic-list");
    var candidate = document.getElementById("candidate");
    var li = document.createElement("li");
    li.setAttribute('id',candidate.value);
    li.appendChild(document.createTextNode(candidate.value));
    ul.appendChild(li);
}

function removeItem(){
    var ul = document.getElementById("dynamic-list");
    var candidate = document.getElementById("candidate");
    var item = document.getElementById(candidate.value);
    ul.removeChild(item);
}


$('.submit-button').click(()=> alert('Redirecting to main page'));
$('.create-btn').click(() => alert("Account succesfully created!"));

function on() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function off() {
    document.getElementById("overlay").style.display = "none";
  }