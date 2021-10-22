function Quiz(questions) {
  this.score = 0;
  this.questions = questions;
  this.questionIndex = 0;
}

Quiz.prototype.getQuestionIndex = function () {
  return this.questions[this.questionIndex];
};

Quiz.prototype.guess = function (answer) {
  if (this.getQuestionIndex().isCorrectAnswer(answer)) {
    this.score++;
  }

  this.questionIndex++;
};

Quiz.prototype.isEnded = function () {
  return this.questionIndex === this.questions.length;
};

function Question(text, choices, answer) {
  this.text = text;
  this.choices = choices;
  this.answer = answer;
}

Question.prototype.isCorrectAnswer = function (choice) {
  return this.answer === choice;
};

function populate() {
  if (quiz.isEnded()) {
    showScores();
  } else {
    var element = document.getElementById("question");
    element.innerHTML = quiz.getQuestionIndex().text;

    var choices = quiz.getQuestionIndex().choices;
    for (var i = 0; i < choices.length; i++) {
      var element = document.getElementById("choice" + i);
      element.innerHTML = choices[i];
      guess("btn" + i, choices[i]);
    }

    showProgress();
  }
}

function guess(id, guess) {
  var button = document.getElementById(id);
  button.onclick = function () {
    quiz.guess(guess);
    populate();
  };
}

function showProgress() {
  var currentQuestionNumber = quiz.questionIndex + 1;
  var element = document.getElementById("progress");
  element.innerHTML =
    "Question " + currentQuestionNumber + " of " + quiz.questions.length;
}

function showScores() {
  emotions = ["😎", "🙂", "😒", "😕", "🥺", "😔"];
  percentage = (quiz.score / quiz.questions.length) * 100;
  index = 0;
  if (percentage >= 90) {
    grade = "S";
    index = 0;
  } else if (percentage >= 80) {
    grade = "A";
    index = 1;
  } else if (percentage >= 60) {
    grade = "B";
    index = 2;
  } else if (percentage >= 40) {
    grade = "C";
    index = 3;
  } else if (percentage >= 20) {
    grade = "D";
    index = 4;
  } else {
    grade = "F";
    index = 5;
  }
  var gameOverHTML = "<h1>Result" + emotions[index] + "</h1>";
  gameOverHTML +=
    "<h2 id='score'> Your score " +
    quiz.score +
    " points!</h2>" +
    "<h2 id='score'> your percentage:" +
    (quiz.score / quiz.questions.length) * 100 +
    "</h2>";
  "<h2 id='score'> your grade:" + grade + "</h2>";
  var element = document.getElementById("quiz");
  element.innerHTML = gameOverHTML;
}

var questions = [
  new Question(
    "What is the name of the main character in the Harry Potter series?",
    ["Harry Potter", "Hermione Granger", "Ron Weasley", "Albus Dumbledore"],
    "Harry Potter"
  ),
  new Question(
    "What is the name of the main character in the Lord of the Rings series?",
    ["Frodo", "Gandalf", "Aragorn", "Legolas"],
    "Gandalf"
  ),
  new Question(
    "Who is the Prime Minister of the United Kingdom?",
    ["David Cameron", "Gordon Brown", "Tony Blair", "Tony Blair"],
    "Tony Blair"
  ),
  new Question(
    "How many countries are there in the European Union?",
    ["15", "24", "28", "30"],
    "24"
  ),
  new Question(
    "Which country has the longest coastline in the world?",
    ["Russia", "Indonesia", "Australia", "Canada"],
    "Canada"
  ),
  new Question(
    "What is the world's most populated country?",
    ["China", "India", "Japan", "USA"],
    "China"
  ),
  new Question(
    "The Great Barrier Reef is off the coast of which country?",
    ["Fiji", "New Zealand", "Australia", "All"],
    "Australia"
  ),
  new Question(
    "In which country is Mount Fuji located?",
    ["Japan", "North Korea", "Fiji", "Peru"],
    "Japan"
  ),
  new Question(
    "Which country has the most people of European ancestry?",
    ["France", "Germany", "Italy", "Spain"],
    "France"
  ),
  new Question(
    "Which country is the largest producer of vanilla in the world?",
    ["Brazil", "Venezuela", "Russia", "United States"],
    "Brazil"
  ),
  new Question(
    "Who is the prime minister of India?",
    ["Sonia Gandhi", "Rahul Gandhi", "Manmohan Singh", "Narendra Modi"],
    "Narendra Modi"
  ),
  new Question(
    "Which university is the oldest in the world?",
    ["Harvard", "Princeton", "Oxford", "Yale"],
    "Harvard"
  ),
  new Question(
    "How many countries are there in the world?",
    ["200", "300", "400", "500"],
    "200"
  ),
  new Question(
    "Which country has the most people of Asian ancestry?",
    ["Thailand", "Singapore", "Malaysia", "China"],
    "Thailand"
  ),
  new Question(
    "Which country is the smallest in the world?",
    ["Vatican City", "Monaco", "San Marino", "Liechtenstein"],
    "Vatican City"
  ),
  new Question(
    "Who is the current president of the United States?",
    ["Donald Trump", "Barack Obama", "George Bush", "None of these"],
    "None of these"
  ),
  new Question(
    "Where is the Statue of Liberty located?",
    ["New York", "Washington D.C", "Paris", "London"],
    "New York"
  ),
  new Question(
    "Who has the highest gross domestic product in the world?",
    ["China", "India", "United States", "Brazil"],
    "China"
  ),
  new Question(
    "What is the best selling book of all time?",
    [
      "Harry Potter and the Philosopher's Stone",
      "The Hobbit",
      "The Da Vinci Code",
      "The Lord of the Rings",
    ],
    "The Lord of the Rings"
  ),
  new Question(
    "Which of the following is not a real animal?",
    ["Aardvark", "Alligator", "Ant", "Ape"],
    "Aardvark"
  ),
  new Question(
    "Which of the following is not a real fruit?",
    ["Banana", "Coconut", "Cherry", "Coconut"],
    "Coconut"
  ),
  new Question(
    "Which of the following is not a real vegetable?",
    ["Carrot", "Cucumber", "Cabbage", "Cabbage"],
    "Cabbage"
  ),
  new Question(
    "Which of the following is not a real mineral?",
    ["Gold", "Silver", "Copper", "Gold"],
    "Gold"
  ),
  new Question(
    "Which one of them the most disturbing?",
    [
      "Requiem for a Dream",
      "Silence of the Lambs",
      "Midsommar",
      "The Exorcist",
    ],
    "Requiem for a Dream"
  ),
  new Question(
    "Which one of them is the most beautiful?",
    [
      "The Great Wave off Kanagawa",
      "The Great Wall of China",
      "The Great Pyramid of Giza",
      "Statue of Unity",
    ],
    "The Great Pyramid of Giza"
  ),
  new Question(
    "Smallest building in the world is located in which city?",
    ["New York", "London", "Paris", "Tokyo"],
    "Tokyo"
  ),
  new Question(
    "Name of the tallest building in the world?",
    ["Burj Khalifa", "Shanghai Tower", "Taipei 101", "Eiffel Tower"],
    "Burj Khalifa"
  ),
  new Question(
    "Biggest city in the world?",
    ["Tokyo", "New York", "London", "Beijing"],
    "Tokyo"
  ),
  new Question(
    "Name city of love?",
    ["Paris", "New York", "London", "Tokyo"],
    "Paris"
  ),
  new Question(
    "Where is Yuzuriha?",
    ["Tokyo", "New York", "London", "Paris"],
    "Tokyo"
  ),
  new Question(
    "Name the most famous anime?",
    ["Death Note", "Bleach", "One Piece", "Dragon Ball"],
    "Death Note"
  ),
  new Question(
    "Name the most famous manga?",
    ["One Piece", "Naruto", "Dragon Ball", "Bleach"],
    "One Piece"
  ),
  new Question(
    "Name the most famous game?",
    ["Minecraft", "Overwatch", "League of Legends", "Dota"],
    "Overwatch"
  ),
  new Question(
    "Best Action movie?",
    [
      "The Avengers",
      "The Dark Knight",
      "The Dark Knight Rises",
      "Justice League",
    ],
    "The Dark Knight"
  ),
  new Question(
    "Best Comedy movie?",
    ["The Hangover", "Firr Hera Feri", "Naked Gun", "Charlie's angels"],
    "Firr Hera Feri"
  ),
  new Question(
    "Best Horror movie?",
    ["The Conjuring", "The Conjuring 2", "The Babadook", "Return of the Devil"],
    "The Babadook"
  ),
  new Question(
    "Best Sci-Fi movie?",
    ["The Matrix", "RoboCop", "Terminator", "Jhon Wick"],
    "The Matrix"
  ),
  new Question(
    "Most popular TV show?",
    ["The Walking Dead", "Game of Thrones", "Breaking Bad", "The Simpsons"],
    "Breaking Bad"
  ),

  new Question(
    "Best Documentary?",
    [
      "The Big Bang Theory",
      "The Expanse",
      "The Martian",
      "The House of Secrets",
    ],
    "The House of Secrets"
  ),
  new Question(
    "Independence day of the USA?",
    ["July 4th", "July 5th", "July 6th", "July 7th"],
    "July 4th"
  ),
];
var quiz = new Quiz(questions);
populate();
