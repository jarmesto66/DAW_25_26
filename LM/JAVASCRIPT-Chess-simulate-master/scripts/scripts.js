var positionInitial;
var positionLetter = ["A", "B", "C", "D", "E", "F", "G", "H"];
window.onload=function () {
	do{
		positionInitial = prompt("Introduce las cordenadas");
		positionInitial = positionInitial.toUpperCase();	
	}while(positionInitial.length!=2)		
	//Creamos el tablero
	crearTablero();
	//Empezamos el juego	
	startGame();
}

function crearTablero(){	
	var bodyHTML = document.getElementById("tablero");
	/*
		Crearemos el tablero con dos bucles for
	*/
	for (var i = 0 ; i < 8 ; i++){
		/*
			Dependiendo del valor del primer bucle empezará a pintar de un color o de otro
		*/
		for(var x = 1 ; x < 9 ; x++){
			var newDiv = document.createElement("div");
			if(i % 2 == 0 ){
				if(x % 2 == 0 ){					
					newDiv.classList.add("negra");			
				}else{					
					newDiv.classList.add("blanca");
				}				
			}else{
				if(x % 2 == 0 ){					
					newDiv.classList.add("blanca");
				}else{
					newDiv.classList.add("negra");			
				}				
			}
			newDiv.style.display = 'inline-block';			
			newDiv.setAttribute("id", positionLetter[i]+x);	
			bodyHTML.appendChild(newDiv);		
		}
		linebreak = document.createElement("br");
		bodyHTML.appendChild(linebreak);		
	}		
}

function startGame(){
	/*
		Inlcuimos la imagen del caballo de una variable
	*/
	horsePiece = "<img id=caballo class=dropable src=images/caballo.png />";
	document.getElementById(positionInitial).innerHTML = horsePiece;
	/*
		Inlcuimos en la pieza del ajedrez el atributo dragable, para que pueda ser seleccionado
	*/
	document.getElementById("caballo").setAttribute("draggable", "true");
	/*
		La siguiente función sirve para capturar el id del objeto que estamos moviendo
	*/
	document.getElementById("caballo").addEventListener("dragstart", drag);
	/*
		A continuación vamos a guardar en una misma variable los posibles movimientos del caballo y 
		les agregaremos el listener de drop, conseguimos las cordenadas sacando la 
		siguiente información de la posición inicial;
		*-De la posicion inicial, buscamos buscamos la primera letra y su posicion en el array de letras y 
		le restamos las posiciones oportunas (-2, -1, +2, +1).
		*-De la posicion inicial buscamos el segundo digito y le restamos los valores que toquen
		para poder dejar la ficha en ellos (-2, -1, +1, +2).
	*/
	var posiblePosition = null;
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))-2)]+(parseInt(positionInitial.substring(1,2))-1));
	/*
		Introducimos todo en condiciones porque puede haver celdas que no existan y 
		el código se pararía
	*/
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}
	
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))-1)]+(parseInt(positionInitial.substring(1,2))-2));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}
	
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))-2)]+(parseInt(positionInitial.substring(1,2))+1));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}
	
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))-1)]+(parseInt(positionInitial.substring(1,2))+2));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}
	
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))+1)]+(parseInt(positionInitial.substring(1,2))-2));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}
	
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))+1)]+(parseInt(positionInitial.substring(1,2))+2));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}

	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))+2)]+(parseInt(positionInitial.substring(1,2))-1));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);
	}
	
	posiblePosition = document.getElementById(positionLetter[(positionLetter.indexOf(positionInitial.substring(0,1))+2)]+(parseInt(positionInitial.substring(1,2))+1));
	if(posiblePosition != null){
		posiblePosition.addEventListener("drop", suelta);
		posiblePosition.addEventListener("dragover", allowDrop);		
	}
}

function drag(event){
	/*
		Esta función es necesaria para l drag-and-drop, sirve para indicarle al elemeneto
		que hemos seleccionado un iidentificador que luego le indcaremos al elemento 
		donde dejaremos lo que hemos seleccionado
	*/
	event.dataTransfer.setData("text", event.target.id);
}

function suelta(event){
	event.preventDefault();
	//Recogemos el id del elemento 
	var data = event.dataTransfer.getData("text");
	this.appendChild(document.getElementById(data));
	/*
		Para poder mover el caballo tantas veces como queramos, incluimos el valor
		actual , donde se encuentra el cavallo como la posición inicial y llamamos 
		a la funcion startGame()
	*/
	positionInitial = this.getAttribute("id");
	/*
	El siguiente paso es quitar el listener de drag a los posicones posibles de aqntes, de 
	no ser así se sumarían las posiciones anteriores con las nuevas y con el paso del tiempo
	sería todo el tablero dragable
	*/	
	
	//Recogemos la clase del elemento donde se ha dejado la pieza del caballo 
	var atribute = this.getAttribute("class");
	//creamos una variable donde almacenaremos todas las posiciones posibles
	var elements = null;
	if(atribute == "blanca"){
		//Si la clase es blanca el caballo solo podrá moverse a posiciones que tengan 
		//la clase negra y al contrario		
		elements = document.getElementsByClassName("blanca");
		console.log("la ficha es blanca");
	}
	if(atribute == "negra"){
		elements = document.getElementsByClassName("negra");
		console.log("la ficha es negra");
	}		
	//Una vez almacenados los elementos posibles, les quitamos el listener.	
	for(var i = 0 ; i < elements.length ; i++){
		elements[i].removeEventListener("drop", suelta);		
		elements[i].removeEventListener("dragover", allowDrop);
	}	
	startGame();	
}

function allowDrop(event) {
	event.preventDefault();
}