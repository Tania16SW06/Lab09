<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$( "p" ).focusin(function() {
  $( this ).find( "span" ).css( "display", "inline" ).fadeOut( 5000 );
});
});
</script>




</head>

<body>
<form >
<p>Name:<input type="text" id="name" name="name" />
</br>
<span style=" display: none;" >Enter your name in UPPER CASE</span></p>
</br>
<p>Last Name:<input type="text" id="lastname" name="name" />
</br></br>
<span style=" display: none;">Enter your Lastname in UPPER CASE</span></p>
</br>
<p>Roll no:<input type="text" id="roll"nname="roll" />
</br>
<span style=" display: none;">Enter your roll number</span></p>
</br>
<button type="submit" id="submit">SUBMIT</button>
</form>
</body>
</html>