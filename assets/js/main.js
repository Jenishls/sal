
function sendAjax(url,data,method,callback = ''){

	$.ajax({

		url:url,
		data:data,
		method:method,
		success:function(response){
			if(typeof(callback) != "string"){
				callback(response);
			}
		}
	});

}