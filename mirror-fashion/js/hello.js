

document.querySelector('#form-busca').onsubmit = function() { 
	if (document.querySelector('#busca').value== '')
		{
		document.querySelector('#busca').style.background='red' ;
		return false ; 
		}

};



document.querySelector('#busca').onfocus = function() { 
	document.querySelector('#busca').style.background='white';
	 return false ; 
		
};
	
	function trocaBanner (){
	 document.querySelector('#banner').src="verao"
	};
	
	var timer = setInterval(minhaFuncao,2000);
	
