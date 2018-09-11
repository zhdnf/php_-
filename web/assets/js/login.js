$(function(){
	var is_submit = false;
	var options = {
		type : 'post',
		dataType : 'json',
		success : function(res, state) {
			if(res.code == 200) {
				$("#info").removeClass("am-alert-danger");
				$("#info").addClass("am-alert-success");
			}else{
				is_submit = false;
				$("#info").removeClass("am-alert-success");
				$("#info").addClass("am-alert-danger");
				$(".submit-btn").prop("disable", false);
			}
			$("#note").html(res.msg);
			$("#info").show();
			setTimeout(function(){
				$("#info").hide();
				if(res.code == 200 && res.url !="") {
					window.location.href = res.url;
				}
			},3000);
		}
	}
	

	$(".submit-btn").click(function(e){
		e.stopPropagation();
		if(!is_submit){
			is_submit = true;
			$(this).prop("disable", true);
			$(".submit-form").ajaxSubmit(options);			
		}
		return false;
	});
});