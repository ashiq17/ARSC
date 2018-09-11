$("#myId").on('change keydown paste input', function(){
	var text = $("#myId").val();
    //$("#par").val(text);
    document.getElementById('par').value = text;
});