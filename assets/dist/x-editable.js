$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
	var base_url = window.location.origin;
	 $('#enable').click(function() {
       $('#user .editable').editable('toggleDisabled');
   }); 
    //make username editable
    $('#fname').editable();
    $('#lname').editable();
    $('#dob').editable({
        url: base_url+"/Thiran/inlinedit/user_update",
         ajaxOptions: {
     type: 'post'
   } 
    });
    $('#address').editable({
        url: base_url+"/Thiran/inlinedit/user_update",
         ajaxOptions: {
     type: 'post'
   } 
    });
     $('#city').editable({
source: [
{id: 'chennai', text: 'Chennai'},
{id: 'erode', text: 'Erode'},
{id: 'coimbatore', text: 'Coimbatore'}
],
select2: {
placeholder: 'Select City',
multiple: false
},
url: base_url+"/Thiran/inlinedit/user_update",
 ajaxOptions: {
     type: 'post'
   } 
});
     $('#state').editable({
source: [
{id: 'TN', text: 'TamilNadu'},
{id: 'KL', text: 'Kerala'},
{id: 'BG', text: 'Bangalore'}
],
select2: {
placeholder: 'Select State',
multiple: false
},
url: base_url+"/Thiran/inlinedit/user_update",
 ajaxOptions: {
     type: 'post'
   } 
});
    $('#pincode').editable({
         url: base_url+"/Thiran/inlinedit/user_update",
         ajaxOptions: {
     type: 'post'
   } 
    });
    $('#user .editable').editable("disable");
});