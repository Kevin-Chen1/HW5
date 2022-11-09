<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Function </h2>

<p>This function will solve the following 4 * 3</p>

<p id="ligma"></p>

<script>
var x = myFunction(4, 3);
document.getElementById("ligma").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}
  <p> this will generate random number </p>
</script>
  
  <p id="pp" this function will generate random number </p>
  
<script>
document.getElementById("pp").innerHTML =
Math.floor(Math.random() * 101);
</script>
  
<script>
var askname = prompt("enter name?");
</script>

  <h2>JavaScript Alert</h2>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  alert("ligma balls");
}
</script>
  
  <button onclick="document.getElementById('tiempo').innerHTML=Date()">Que hora es?</button>

<p id="tiempo"></p>
  
</body>
</html>
