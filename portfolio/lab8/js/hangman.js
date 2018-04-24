//variables
var selectedWord="";
var selectedHint="";
var board = [];
var remainingGuesses = 6;
//var words = ["snake", "monkey", "bettle", "lion", "fox"];

var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                
var words = [{word: "snake", hint: "It's a reptile"},
             {word: "monkey", hint: "It's a mammal"},
             {word: "beetle", hint: "It's an insect"},
             {word: "lion", hint: "Mammal with a large mane"}];

  
//listener
window.onload = startGame();

$(".letter").click(function() {
    checkLetter($(this).attr("id"))
    disableButton($(this));
});

$(".replayBtn").on("click", function() {
   location.reload(); 
});

$("#hint").on("click", function(){
    displayHint();
})

/*$("#letterBtn").click(function() {
    var boxVal = $("#letterBox").val();
    console.log("The value in the box " + boxVal);
})*/
           
//functions
function startGame() {
    pickWord();
    initBoard();
    createLetters();
    updateBoard();
}

function initBoard() {
   for (var letter in selectedWord) {
       board.push("_");
       }
   }

function pickWord() {
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
}

function checkLetter(letter) {
    var positions = new Array();
    
    for (var i = 0; i < selectedWord.length; i++) {
        if (letter == selectedWord[i]) {
            positions.push(i);
        }
    }
    
    if (positions.length > 0) {
        updateWord(positions, letter);
        
        if (!board.includes('_')) {
            endGame(true);
        }
    }
    else {
        remainingGuesses -= 1;
        updateMan();
    }
    
    if (remainingGuesses <= 0) {
        endGame(false);
    }
}

function updateWord(positions, letter) {
    for (var pos of positions) {
        board[pos] = letter;
    }
    updateBoard();
}

function createLetters() {
    for (var letter of alphabet) {
        $("#letters").append("<button class='letter btn btn-success' id='" + letter + "'>" + letter + "</button>")
    }
}

function updateBoard() {
    $("#word").empty();
    
    for (var letter of board) {
        document.getElementById("word").innerHTML += letter + " ";
    }
    $("#word").append("<br/>");
    //$("#hint").append("<button class='hint btn btn-success' id=''>" + Hint + "</button>");
    //$("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>");
}

function updateMan() {
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}

function endGame(win) {
    $("#letters").hide();
    
    if (win) {
        $('#won').show();
    }
    else {
        $('#lost').show();
    }
}

function disableButton(btn) {
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}

function displayHint() {
    $("#word").append("<br/>");
    $("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>");
    remainingGuesses--;
    updateMan();
}
//console.log(selectedWord);
//initBoard();