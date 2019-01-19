<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">


</style>
</head>

<body>
<h1>SELECT YOUR COUNTRY</h1>
<H3>know about it famous cities</H3>
<select id="country" style="width:150px">
  <option value="Select one" selected >select one</option>
    <option value="Pakistan">Pakistan</option>
  <option value="Italy">Italy</option>
  <option value="USA">USA</option>
  <option value="Canada" >Canada</option>
  <option value="France">France</option>
</select>
<select id="city" style="width:150px">
</select>
</BR></BR>

<script>
$(document).ready(function () {
  $("#country").change(function () {
     switch($(this).val()) {
        case 'Pakistan':
            $("#city").html("<option value='Islamabad'>Islamabad</option><option value='Karachi'>Karachi<option value='Lahore'>Lahore</option><option value='Swat'>Swat</option><option value='Hyderabad'>Hyderabad</option>");
            break;
        case 'Italy':
            $("#city").html("<option value='Rome'>Rome</option><option value='Venice'>Venice<option value='Milan'>Milan</option><option value='Naples'>Naples</option><option value='Pisa'>Pisa</option>");
            break;
        case 'USA':
            $("#city").html("<option value='New york'>New York</option><option value='Boston'>Boston<option value='New Orleans'>New Orleans</option><option value='Las Vegas'>Las Vegas</option><option value='Chicago'>Chicago</option>");
            break;
			case 'Canada':
            $("#city").html("<option value='Toronto'>Toronto</option><option value='Vancouver'>Vancouver</option><option value='Montreal'>New Montral</option><option value='Ottawa'>Ottawa</option><option value='Calgary'>Calgary</option>");
            break;
			case 'France':
            $("#city").html("<option value='Paris'>Paris</option><option value='Nice'>Nice<option value='Lyon'>Lyon</option><option value='Lillie'>Lillie</option><option value='Cannes'>Cannes</option>");
            break;
			
        default:
            $("#city").html("<option value=''>--select one--</option>");
     }
  });
});

$(document).ready(function(){
$("button").click(function(){
$( "span" ).focusin(function() {
  $( this ).find( "p" ).css( "display", "inline" ).fadeOut( 1000 );
});
}
);
});


</script>

<span style="display:none">
<p class="karachi">
<h1 > Karachi</h1>
Karachi (Urdu: کراچی‬‎; ALA-LC: Karācī, IPA: [kəˈraːtʃi] (About this soundlisten); Sindhi: ڪراچي‎) is the capital of the Pakistani province of Sindh. It is the most populous city in Pakistan,[12][13] and fifth-most-populous city proper in the world.[9] Ranked as a beta world city,[14][15] the city is Pakistan's premier industrial and financial centre[16] and is considered as the cultural, economic, philanthropic, educational, and political hub of the country.[17] Karachi is also Pakistan's most cosmopolitan city.[18] Situated on the Arabian Sea, Karachi serves as a transport hub, and is home to Pakistan's two largest seaports, the Port of Karachi and Port Bin Qasim, as well as the Pakistan's busiest airport, Jinnah International Airport.</p>
</span>

</body>
</html>