$(document).ready(function(){
	var input="<tr><td>Monday</td><td><select class='form-control'><option value='2.0'>2.0</option><option value='3.0'>3.0</option><option value='4.0'>4.0</option></select><td><td><select class='form-control'><option value='1.0'>1.0</option><option value='2.0'>2.0</option></select><td><td><select class='form-control'><option value='1.0'>1.0</option><option value='2.0'>2.0</option></select><td></tr>";
	$('body').on('click','#add',function(){
		$('#tbody').append(input);
	});
});