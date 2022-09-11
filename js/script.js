//javascript file for skynet_mart



//jssor slider script
window.jssor_1_slider_init = function() {

    var jssor_1_SlideshowTransitions = [
      {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
      {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
      {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
      {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
      {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
      {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
      {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
    ];

    var jssor_1_options = {
      $AutoPlay: 1,
      $SlideshowOptions: {
        $Class: $JssorSlideshowRunner$,
        $Transitions: jssor_1_SlideshowTransitions,
        $TransitionsOrder: 1
      },
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 16,
        $SpacingY: 16
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
};

//set active class for categories in mobile display
$(function() {
  var $li = $('#categories').find('.btn');
  $li.on('click', function() {
    $li.removeClass('active');
    $(this).addClass('active');
  })

  //set active class for nav bar fixed bottom in mobile display
  var $liBottom = $('.navbar-fixed-bottom').find('.btn');
  $liBottom.on('click', function() {
    $liBottom.removeClass('active');
    $(this).addClass('active');
  })
  
  // javascript code for flashing the flash sales text
  function flash() {
    var text = document.getElementById('sales');
    text.style.color = (text.style.color=='red') ? 'green':'red';
  }
  var clr = setInterval(flash, 500);

  //remove modal classes from the mobile login page
  /* var $modalClass = $('.login').find('.modal, .fade, .modal-dialog, .modal-content, .modal-body');
  if ($(window).width() < 910) {
    $modalClass.removeClass('modal fade modal-dialog modal-content modal-body');
  }*/

});



/*$(document).resize(function(){
	if (window.matchMedia('(max-width: 479px)').matches) {
		$('.navbar-header').hide;
	}
});*/

/*
	function check_input() {
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;

		if (username = "" || password = "") {
			alert('Please fill in all the fields');
			return false;
		} else {
			return true;
		}
	}
*/

/*   //validate password if both matches
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("passwords Don't Match");
  } else{
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
*/
  

$("#profileImage").click(function(e) {
  $("#imageUpload").click();
});

function fasterPreview(uploader) {
  if (uploader.files && uploader.files[0]) {
    $("#profileImage").attr('src', window.URL.createObjectURL(uploader.files[0]));
  }
}

$("#imageUpload").change(function(){
  fasterPreview(this);
})

// Editing profile information
const editBtn = document.getElementsByClassName("editBtn");
editBtn.addEventListener("click", function(){
  const noedit = document.getElementsByClassName("noedit");
  for (const item of noedit) {
    noedit.style.display = "none";
  }
  const edit = document.getElementsByClassName("edit");
  for (const item of edit) {
    edit.style.display = "block";
  }
  
});
// function profileEdit() {
//   const noedit = document.getElementsByClassName("noedit");
//   for (const item of noedit) {
//     item.style.display = "none";
//   }
//   const edit = document.getElementsByClassName("edit");
//   for (const item of edit) {
//     item.style.display = "block";
//   }
// }


function cancelEdit() {
  const noedit = document.getElementsByClassName("noedit");
  for (const item of noedit) {
    item.style.display = "block";
  }
  const edit = document.getElementsByClassName("edit");
  for (const item of edit) {
    item.style.display = "none";
  }
}