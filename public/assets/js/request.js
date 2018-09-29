/****************************************
***********API CALL FUNCTIONs************
*****************************************/
/***************
paramObj Example:
paramObj={
	authorizationRequest:false,
	method:'GET',
	url:'example.com/something',
	responseType:'json',
	contentType:'application/json',
	onloadErrorMessage:'Content didn\'t load successfully; error code:',
	onerrorMessage:'There was a network error.',
	data: {
		key :'value'
		..
	}
};
*****************************************/

function requestAPI(paramObj) {
	
  // return a promise for loading article
  return new Promise(function(resolve, reject) {

    var request = new XMLHttpRequest();
    request.open(paramObj.method, paramObj.url);
    request.responseType = paramObj.responseType;
    if (paramObj.method=='POST') {
    	request.setRequestHeader('Content-type', paramObj.contentType);
    }
    // if (paramObj.authorizationRequest && paramObj.method=='GET') {
    // 	request.setRequestHeader('Authorization', getCookie('userId'));
    // }

    request.onload = function() {
      if (request.status == 200) {
      	var JSONresponse = request.response;
        resolve(JSONresponse);
      } else {
        reject(Error(paramObj.onloadErrorMessage + request.statusText));
      }
    };

    request.onerror = function() {
      reject(Error(paramObj.onerrorMessage));
    };

    // Send the request
    if (paramObj.method=='GET' || paramObj.method=='DELETE') {
    	request.send();
    } else if (paramObj.method=='POST' || paramObj.method=='PUT') {
    	request.send(JSON.stringify(paramObj.data));
    }
  });
}