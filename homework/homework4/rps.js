var imgPlayer;
var btnRock;
var btnPaper;
var btnScissors;
var btnGo;
var computerChoice;
var playerChoice;

//events
/*$("#btnGo").on("click", function() {
	go();
})*/

//functions
function init(){
	imgPlayer = document.getElementById("imgPlayer");
	btnRock = document.getElementById("btnRock");
	btnPaper = document.getElementById("btnPaper");
	btnScissors = document.getElementById("btnScissors");
	deselectAll();
}

function select(choice) {
	//alert(choice);
	playerChoice = choice;
	//imgPlayer.src = 'images/' + choice + '.png';
	$("#imgPlayer").attr("src","images/" + choice + ".png");
	deselectAll();
	if (choice == 'rock') {
		btnRock.style.backgroundColor = '#888888';
	}
	
	if (choice == 'paper') {
		btnPaper.style.backgroundColor = '#888888';
	}
	
	if (choice == 'scissors') {
		btnScissors.style.backgroundColor = '#888888';
	}
	
	btnGo.style.display = 'block';
}

function deselectAll() {
	btnRock.style.backgroundColor = 'silver';
	btnPaper.style.backgroundColor = 'silver';
	btnScissors.style.backgroundColor = 'silver';
}

function go() {
	var txtEndTitle = document.getElementById('txtEndTitle');
	var txtEndMessage = document.getElementById('txtEndMessage');
	//alert("Ready to Go");
	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
	
	if (numChoice == 0) {
		computerChoice = 'rock';
		imgComputer.src = 'images/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'yellow';
		if (playerChoice == 'rock') {
			//alert('TIE');
			//txtEndTitle.innerHTML = '';
			//txtEndMessage.innerHTML = 'TIE';
			$("#txtEndTitle").append("<span class='title'></span>");
			$("#txtEndMessage").append("<span class='title'>TIE</span>");
		}
		
		else if (playerChoice == 'paper') {
			//alert('YOU WIN');
			//txtEndTitle.innerHTML = 'Paper covers Rock';
			//txtEndMessage.innerHTML = 'YOU WIN';
			$("#txtEndTitle").append("<span class='title'>Paper covers Rock</span>");
			$("#txtEndMessage").append("<span class='title'>You WIN</span>");
		}
		
		else if (playerChoice == 'scissors') {
			//alert('YOU LOSE');
			//txtEndTitle.innerHTML = 'Rock smashes Scissors';
			//txtEndMessage.innerHTML = 'YOU LOSE';
			$("#txtEndTitle").append("<span class='title'>Rock smashes Scissors</span>");
			$("#txtEndMessage").append("<span class='title'>YOU LOSE</span>");
		}
	}
	
	else if (numChoice == 1) {
		computerChoice = 'paper';
		imgComputer.src = 'images/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'yellow';
		if (playerChoice == 'rock') {
			//alert('YOU LOSE');
			//txtEndTitle.innerHTML = 'Paper covers Rock';
			//txtEndMessage.innerHTML = 'YOU LOSE';
			$("#txtEndTitle").append("<span class='title'>Paper covers Rock</span>");
			$("#txtEndMessage").append("<span class='title'>YOU LOSE</span>");
		}
		
		else if (playerChoice == 'paper') {
			//alert('TIE');
			//txtEndTitle.innerHTML = '';
			//txtEndMessage.innerHTML = 'TIE';
			$("#txtEndTitle").append("<span class='title'></span>");
			$("#txtEndMessage").append("<span class='title'>TIE</span>");
		}
		
		else if (playerChoice == 'scissors') {
			//alert('YOU WIN');
			//txtEndTitle.innerHTML = 'Scissors cuts Paper';
			//txtEndMessage.innerHTML = 'YOU WIN';
			$("#txtEndTitle").append("<span class='title'>Scissors cuts Paper</span>");
			$("#txtEndMessage").append("<span class='title'>YOU WIN</span>");
		}
	}
	
	else if (numChoice == 2) {
		computerChoice = 'scissors';
		imgComputer.src = 'images/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'yellow'
		if (playerChoice == 'rock') {
			//alert('YOU WIN');
			//txtEndTitle.innerHTML = 'Rock smashes Scissors';
			//txtEndMessage.innerHTML = 'YOU WIN';
			$("#txtEndTitle").append("<span class='title'>Rock smashes Scissors</span>");
			$("#txtEndMessage").append("<span class='title'>YOU WIN</span>");
		}
		
		else if (playerChoice == 'paper') {
			//alert('YOU LOSE');
			//txtEndTitle.innerHTML = 'Scissors cuts Paper';
			//txtEndMessage.innerHTML = 'YOU LOSE';
			$("#txtEndTitle").append("<span class='title'>Scissors cuts Paper</span>");
			$("#txtEndMessage").append("<span class='title'>YOU LOSE</span>");
		}
		
		else if (playerChoice == 'scissors') {
			//alert('TIE');
			//txtEndTitle.innerHTML = '';
			//txtEndMessage.innerHTML = 'TIE';
			$("#txtEndTitle").append("<span class='title'></span>");
			$("#txtEndMessage").append("<span class='title'>TIE</span>");
		}
	}
	//alert (playerChoice + ', ' + computerChoice);
	document.getElementById('endScreen').style.display = 'block';
}

function startGame() {
	//alert('Start Game button pressed');
	document.getElementById('introScreen').style.display = 'none';
}

function startGame() {
	document.getElementById('introScreen').style.display = 'none';
}

function replay() {
	document.getElementById('endScreen').style.display = 'none';
}

function replay() {
	location.reload();
}
	
/*function selectRock(){
	//alert('rock');
	imgPlayer.src = 'images/rock.png';
	deselectAll();
	btnRock.style.backgroundColor = '#888888';
}

function selectPaper(){
	//alert('paper');
	imgPlayer.src = 'images/paper.png';
	deselectAll();
	btnPaper.style.backgroundColor = '#888888';
}

function selectScissors(){
	//alert('scissors');
	imgPlayer.src = 'images/scissors.png';
	deselectAll();
	btnScissors.style.backgroundColor = '#888888';
}*/

