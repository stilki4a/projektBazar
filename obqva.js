
var obqva =document.getElementById('upload');

obqva.onklick = function() {
	
	var curier = new XMLHttpRequest();
	
	curier.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			
			var obqvaElements=this.responseText.split(' ');
			var divResult=document.getElementById('main');
			divResult.innerHTML=" ";
				
			
				for (var index=0; index < obqvaElements.length; index++) {
				console.log( obqvaElements[index]);
				
				var p = document.createElement('p');
				p.innerHTML = obqvaElements[index];
				divResult.appendChild(p);
				
				}
			
		}
	};
	curier.open('GET',
				'http://localhost/allStuff/newes.php',
				true);
	
	curier.send(null);	
};

