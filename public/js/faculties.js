(function($){
  $(document).ready(function(){

  $('.asidemenu li.active').addClass('open').children('ul').show();
    $('.asidemenu li.has-sub>a').on('click', function(){
      $(this).removeAttr('href');
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(200);
      }
      else {
        element.addClass('open');
        element.children('ul').slideDown(200);
        element.siblings('li').children('ul').slideUp(200);
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(200);
      }
    });

  });
})(jQuery);

/* ///////////////////////////////////////////////////////////////////////////////// */

(function ($) {
  "use strict";
  /*==================================================================
  [ Focus input ]*/
  $('.input100').each(function(){
    $(this).on('blur', function(){
      if($(this).val().trim() != "") {
        $(this).addClass('has-val');
      }
      else {
        $(this).removeClass('has-val');
      }
    })
  })

  /*==================================================================
  [ Validate ]*/

  var input = $('.validate-input .input100');

  $('.validate-form').on('submit',function(){
    var check = true;

    for(var i=0; i<input.length; i++) {
      if(validate(input[i]) == false){
        showValidate(input[i]);
        check=false;
      }
    }
    return check;
  });

  $('.validate-form .input100').each(function(){
    $(this).focus(function(){
      hideValidate(this);
    });
  });

  function validate (input) {
    if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
      if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
        return false;
      }
    }
    else {
      if($(input).val().trim() == ''){
        return false;
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).addClass('alert-validate');
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass('alert-validate');
  }

  /*==================================================================
  [ Show pass ]*/
  var showPass = 0;
  $('.btn-show-pass').on('click', function(){
    if(showPass == 0) {
      $(this).next('input').attr('type','text');
      $(this).addClass('active');
      showPass = 1;
    }
    else {
      $(this).next('input').attr('type','password');
      $(this).removeClass('active');
      showPass = 0;
    }
  });

})(jQuery);

// ///////////////////////////////////////////////////////

function siteBActive() {
  document.getElementById("content_2_asid").classList.toggle('active');
}
document.addEventListener("click", (e) => {
	if (e.target !== document.querySelector(".bbttnn")) {
    document.getElementById("content_2_asid").classList.remove("active");
	}
});
