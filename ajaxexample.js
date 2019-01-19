// JavaScript Document
$(document).ready(function(e){
	$('#submit').click(function(e){
	
	e.preventDefault();
	var name=$('#name').val();
	var email=$('#email').val();
	var message=$('#message').val();
	//var phone=$('#phone').val();
$.ajax({
	
	url:"postform.php",
	type:"POST",
	 data: {name:name, email:email, msg:message },  
	 success:function(data) {
		 
		 $('#name').val("");
	$('#email').val("");
		 $('#message').val("");
		 alert("your data has inserted successfully ");
		 
		 },
	 error: function(error) {

     console.log(error);
     alert (error);
     alert( JSON.stringify(error) );
    
  }
	})	;
}	);
}
);