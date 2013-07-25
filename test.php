<html>
<head>
<style>
div { background:yellow; border:1px solid #AAA; width:80px; height:80px; margin:0 5px; float:left; }
div.colored { background:green; }
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<button id="run">Run</button>
<div id="mover5"></div>
<div id="mover"></div>
<div></div>
<script>
$("#run").click(function(){

if ($("#mover").is(':animated'))
document.getElementById("mover").innerHTML="yes";


});
function animateIt() {
$("#mover").slideToggle("slow", animateIt);
}
animateIt();
</script>
</body>
</html>