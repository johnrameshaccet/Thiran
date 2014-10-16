$(document).ready(function() {
$("body").toggleClass("fixed");
$("#signout").click(function(){
    var base_url = window.location.origin;
 window.location.href=base_url+"/Thiran/account/logout";
});
});
$(document).on('hover', '#datemask', function(){  
  //Datemask dd/mm/yyyy
 $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
 });
 
 $(document).on('hover', '#duration', function(){  
     $('.selectMonths:first input')
                .rangePicker({ minDate:[1,1980], maxDate:[10,2014], RTL:true })
                // subscribe to the "done" event after user had selected a date
                .on('datePicker.done', function(e, result){
                    if( result instanceof Array )
                        console.log(new Date(result[0][1], result[0][0] - 1), new Date(result[1][1], result[1][0] - 1));
                    else
                        console.log(result);
                });

            // update settings
			$('.selectMonths:last input').rangePicker({setDate:null,closeOnSelect:false });
 });
 $(document).on('click', '#profile_pic', function() {
     $('#my_photo').click();
    });
     
      $(document).on('change', '#my_photo', function(e) {
          e.preventDefault();
              var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
             document.getElementById('uploadButton').removeAttribute("disabled");
              var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("my_photo").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
            document.getElementById("picture").valueOf(oFREvent.target.result);
            document.getElementById("uploadPreview").style.display="block";
            $('#image').html('');
        };
            break;
        default:
            document.getElementById('uploadButton').setAttribute("disabled","disabled");
            document.getElementById("uploadPreview").style.display="none";
            $('#image').html('Only jpg,png,gif are allowed');
            this.value = '';
    }
      });
       $(document).on('click', '#uploadButton', function(e) {
          e.preventDefault();
           var base_url = window.location.origin;
  $.ajax({
    url:base_url+"/Thiran/profile/general",
    
});
      });
         $(document).on('click', '#cancel', function() {
          $('#image').html('');
          document.getElementById("uploadPreview").style.display="none";
          document.getElementById('uploadButton').setAttribute("disabled","disabled");
         });
 
 
 $(document).on('click', '.toggle-link', function(e) {
		
			var target = $($(this).attr('href')).toggleClass('hidden');
			
			
			e.preventDefault();
		
		});
	
 $(document).on('click', '#personal_save', function(e){  
  e.preventDefault();
 var base_url = window.location.origin;
  $.ajax({
    url:base_url+"/Thiran/profile/general",
    type:"post",
    data: $('#save_1').serialize(),
    success: function(result){
        $('#msg').html('<span class="alert-success">info saved!</span>');
        setTimeout(function() {
  $("#msg").fadeOut().empty();
}, 5000);
    }
  });
 });
 
  $(document).on('click', '#edu_save', function(e){  
  e.preventDefault();
  var base_url = window.location.origin;
  $.ajax({
    url:base_url+"/Thiran/profile/education",
    type:"post",
    data: $('#save_2').serialize(),
    success: function(result){
        $('#msg2').html('<span class="alert-success">info saved!</span>');
        setTimeout(function() {
  $("#msg2").fadeOut().empty();
}, 5000);
    }
  });
 });