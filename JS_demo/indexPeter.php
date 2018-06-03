<!DOCTYPE html>
<html>
<body>
<h1>The XMLHttpRequest Object</h1>
<h3>Start typing a name in the input field below:</h3>
First name: <input type="text" id="name" onkeyup="showHint(this.value)">

<p>Suggestions: <span id="txtHint"><!--write the incoming hint text here--></span></p> 
<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  
  
  xhttp = new XMLHttpRequest(); //object instantiation
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "getHint.php?q="+str, true);
  xhttp.send();   
}
</script>
</body>
</html>