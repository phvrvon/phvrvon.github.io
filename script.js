function greet(){
	window.alert("Hello everybody");
}

function init(){
	document.getElementById("first").src = "flower2.png";
	document.getElementById("container").getElementsByTagName("img")[1].src = "flower2.png";
	document.getElementById("container").getElementsByTagName("img")[3].src = "flower2.png";
	document.getElementById("container2").innerHTML="<div><p>Your are great!</p></div>";

    let image = document.createElement("img");
    image.src="flower2.png";
    document.getElementById("new_element").appendChild(image);


    let spans =  document.getElementById("rainbow").getElementsByTagName("span")// fill with proper code
let colors = ["red", "orange","yellow","green","blue","purple","pink"];

for (var i = spans.length - 1; i >= 0; i--) {
	spans[i].style.color = colors[i];// fill with proper code
}

var changeSrc = function(event) {
  if (event.target.src) {
  	let filename = event.target.src.replace(/^.*[\\\/]/, '');
  	if(filename=="flower2.png"){
    event.target.src = "flower1.png";}
    	if(filename=="flower1.png"){
    event.target.src = "flower2.png";}


  }
 
};

document.getElementById("event").addEventListener("mouseover", changeSrc);



}
function addItem(){
	let v =document.getElementById("buy").value;
	let t = document.createTextNode(v)
	let LII= document.createElement("LI");

	LII.appendChild(t);
	if(document.getElementById("imp").checked==true){
			LII.style.textDecoration="underline";      

	}
	if(document.getElementById("groc").checked==true){
			LII.style.color="red";      

	}

	document.getElementById("yep").appendChild(LII);




}
function rmItem(){
	let ele = document.getElementById("yep");
	let value = document.getElementById("rm").value;
	ele.removeChild(ele.childNodes[value]);


}