$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
	
	 $('#enable').click(function() {
       $('#user .editable').editable('toggleDisabled');
   }); 
    //make username editable
    $('#fname').editable();
    $('#lname').editable();
    $('#dob').editable();
    $('#user .editable').editable('disable');
});