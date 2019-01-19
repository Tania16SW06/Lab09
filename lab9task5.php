<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("p").click(function(){
    $( this ).find( "span" ).css( "display", "inline" );
  });
});
</script>


</head>

<body>
<ol class="list" >
<li>Apple</li>
<li>Apple</li>
<li>Apple</li>
<li>Apple</li>
<li>Apple</li>
<li>Apple</li>
</ol>
</br>
<p>
<button>SHOW</button>
<span style="display:none">total=6</span></p>
</body>
</html>