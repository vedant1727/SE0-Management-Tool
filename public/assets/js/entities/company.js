var company = {
	getCompanies : function (){
		var _details ={
			method:'GET',
			url:baseUrl+'/company',
			responseType:'json',
			onloadErrorMessage:'Content didn\'t load successfully; error code:',
			onerrorMessage:'There was a network error.'
		}
		requestAPI(_details).then(function(JSONresponse) {
			console.log(JSONresponse);
		}, function(Error) {
		  console.log(Error);
		});
	}
}