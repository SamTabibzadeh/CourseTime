$(document).ready(function(){
 
	$('#loginOpen').hover(function(){
		$('#loginOpen').css('cursor', 'pointer');
	}, function(){
		$('#loginOpen').css('cursor', 'default');
	});
 
	$('#loginOpen').on('click', function(){
 
		$('#overlay').show();
		$('#loginbox').show();
		$('#loginbox').children().hide();
		$('#loginButton').show();
		$('#registerButton').show();
		$('.loginboxHead').show();
	});
 
	$('#loginboxExit, #overlay').on('click', function(){
		$('#overlay').hide();
		$('#loginbox').hide();
		$('#fullsizeimage').hide();
		$('#editprofile').hide();
		$('#loginbox').css('height', '180px');
	});
 
	$('.loginboxButton, #loginboxExit, .loginsubmit, #thumbnailprofile, #cmnttop').hover(function(){
		$(this).addClass("loginboxButtonhover").css('cursor', 'pointer');
	}, function(){
		$(this).removeClass("loginboxButtonhover").css('default', 'default');
	});
 
	$('#loginButton').on('click', function(){
		$('#loginformContainer').show();
		$("#loginform").show();
		$('#formback').show();
		$(this).hide();
		$('#registerButton').hide();
		$('#registerform').hide();
	});
 
	$('#registerButton').on('click', function(){
		$('#loginformContainer').show();
		$("#registerform").show();
		$('#regback').show();
		$(this).hide();
		$('#loginButton').hide();
		$('#loginform').hide();
		$('#loginbox').css('height', '230px');
	});
 
	$('#regback, #formback').on('click', function(){
		$('#loginformContainer').hide();
		$(this).hide();
		$('#loginform').hide();
		$('#registerform').hide();
		$('#registerButton').show();
		$('#loginButton').show();
		$('#loginbox').css('height', '180px');
	});
 
	$('#loginform').on('submit', function(e){
 
		e.preventDefault();
 
		var usermail = $('form #loginmail').val();
		var password = $('form #loginpassword').val();
 		
		$.post("loginprocess.php", $('#loginform').serialize(), function(){
 
			$.get("welcometext.php", function(data){
			$('#welcome').show().html(data)});
			$('#welcome').fadeIn().delay(2000).fadeOut();
			$.get("currentuser.php", function(data){
			$('#userPage').show().html(data)});
			$('#loginOpen').hide();
			$.get("rightnavheader.php", function(data){
				$('#rightheader').html(data);
			}); 
		});
		$('#loginbox').fadeOut();
		$('#overlay').fadeOut();
		$('#loginbox').children().hide();
		$('#loginButton').delay(1000).show();
		$('#registerButton').delay(1000).show();
		$('.loginboxHead').delay(1000).show();
 	});
 
	$('#registerform').on('submit', function(e){
 
		e.preventDefault();
 
		var regmail = $('form #regmail').val();
		var regname = $('form #regname').val();
		var regpassword = $('form #regpassword').val();
 
		$.post("registerprocess.php", $('#registerform').serialize(), function(){
			$.get("welcometext.php", function(data){
			$('#welcome').show().html(data)});
			$('#welcome').fadeIn().delay(2000).fadeOut();
		});
		$('#formback').show();
		$('#loginform').show();
		$('#regback').hide();
		$('#registerform').hide();
	});
 
	$('#logoutButton').on('click', function(){
		window.location.replace("logoutprocess.php");
	});

	$('.titelReview').on('click', function(){
		$(this).find('.reviewStyle').toggleClass('wholeReview');
	}); 

	$('#thumbnailprofile').on('click', function(){
		$.get('fullsizeprofilepic.php', function(data){
			if(data != "0"){
				$('#overlay').show();
				$('#fullsizeimage').html(data).fadeIn();
			}
		});
	});
 
	$('#editform').on('submit', function(e){
 
		e.preventDefault();
 
		var text = $('form #editText').val();
 
		$.post("editprocess.php", {editText:text}, function(){
			$.get('profileinfo.php', function(data){
				$('#profileinfo').html(data);
				$('#overlay').fadeOut();
				$('#editprofile').fadeOut();
			});
		});
	});
 
	$('#editButton').on('click', function(){
		$('#editprofile').show();
		$('#overlay').show();
	});

});


