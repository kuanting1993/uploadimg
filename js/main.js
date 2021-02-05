//檢查照片尺寸大小
function ImageSize(){
	$(".custom-file-input").change(function () {
		$(this).next(".custom-file-label").html($(this).val().split("\\").pop());
		var datacnt=0;
		var formData = new FormData();
		formData.append('action', 'CheckImageSize');
		for(var i=0;i<$('#customFile')[0].files.length;i++){
			formData.append('file[]', $('#customFile')[0].files[i]);
			datacnt++;
		}
		
		$.ajax({
			url : "upload_file.php",
			type : "post",
			global : false,
			async: false,
			contentType : false,
			processData : false,
			data : formData,
			success : function(response){
				if(response){
					alert(response);			
				}
				else{
					var Ucnt = $('#Ucnt').val();
					var rcnt =parseInt(Ucnt) + parseInt(datacnt);
					//$('#Ucnt').val(rcnt);
					$('#filecnt').html('已選取：'+rcnt+'張照片');
				}
			}
		});	
	});
}

//儲存照片
function saveImage(){
	var formData = new FormData();
	for(var i=0;i<$('#customFile')[0].files.length;i++){
		formData.append('file[]', $('#customFile')[0].files[i]);
	}
		
	$.ajax({
		url : "upload_file.php",
		type : "post",
		global : false,
		async: false,
		contentType : false,
		processData : false,
		data : formData,
		success : function(response){
			alert(response);
			
		}
	});	
}