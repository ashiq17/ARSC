$(document).ready(function() {
	$("#login").click(function(){
		$("#cube").removeClass();
		$("#cube").addClass("login-animate");
		//alert("hello");
	});
	$("#login-home").click(function(){
		$("#cube").removeClass();
		$("#cube").addClass("login-home");
		//alert("hello");
	});
	 $("#register").click(function(){
		$("#cube").removeClass();
		$("#cube").addClass("register-animate");
		//alert("hello");
	});
	 $("#register-home").click(function(){
		$("#cube").removeClass();
		$("#cube").addClass("register-home");
		//alert("hello");
	});
	$("#forgotPass").click(function(){
		$("#cube").removeClass();
		$("#cube").addClass("forgotPass-animate");
		//alert("hello");
	});
	 $("#forgot-password").click(function(){
		$("#cube").removeClass();
		$("#cube").addClass("forgotPass-home");
		//alert("hello");
	});
});

$(".user").focusin(function(){
  $(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function(){
  $(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputPassIcon").css("color", "white");
});