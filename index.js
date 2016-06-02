var xhr = new XMLHttpRequest;
xhr.open('get','index.php');
xhr.send(null);
xhr.onreadystatechange = function(){
	if(xhr.readyState ==4 && xhr.status == 200){
		console.log(xhr.responseText);
	}
};