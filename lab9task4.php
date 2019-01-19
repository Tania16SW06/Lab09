<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
$("#name").blur(function(){  
        alert("This text box has lost its focus.");  
  
});
});

</script>

</head>

<body><form >
<p>Name:<input type="text" id="name" name="name" />
<span style="display:none">You cant write aything</span><p>
</br>
<p>Last Name:<input type="text" id="lastname" name="name" />
</br></br>
<span id="two"></span>
</br></p>
</form>
</body>
</html>