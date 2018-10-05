document.getElementById("rewrite").addEventListener("click", function(){
	var iframevalue = document.getElementsByName("iframe-rewrite")[0].value;
	var data = iframevalue.split(" ");
	var url;
	for(var element = 0; element < data.length; element++){
		if(data[element].includes("src")){
			url = data[element];
			url = " data-" + url;
			data[element] = "";
		}
	}
	data[data.length - 2] += url;

	document.getElementsByName("iframe-rewrite")[0].value = data.join(" ");
});
