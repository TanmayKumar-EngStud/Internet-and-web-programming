var Question = {};
var QuestionSet = [];
var ansSet = {};
var form = document.forms[0];
function setQp() {
  console.log(form);
  var form = document.forms[0];
  form.style.backgroundColor = "#575252";
  form.style.color = "#ffffff";
  form.innerHTML = "";
  form.style.width = "100%";
  form.innerHTML =
    `<label align= "left">Question ${
      QuestionSet.length + 1
    }:</label><input id='question' class="text" Value = \"Set Question\" required></input><label align ="left">Options:</label>` +
    `<optionSet><input name="ans" type="radio" id="V${1}"></input><input id='Ans_${1}' class="text" Value= \"What is option ${1}\"></input></optionSet>` +
    `<optionSet><input name="ans" type="radio" id="V${2}"></input><input id='Ans_${2}' class="text" Value= \"What is option ${2}\"></input></optionSet>` +
    `<optionSet><input name="ans" type="radio" id="V${3}"></input><input id='Ans_${3}' class="text" Value= \"What is option ${3}\"></input></optionSet>` +
    `<optionSet><input name="ans" type="radio" id="V${4}"></input><input id='Ans_${4}' class="text" Value= \"What is option ${4}\"></input></optionSet>` +
    `<Buttonlist>` +
    `<button onclick='addQ()'>Add Question</button>` +
    `<button onclick='setQp()'>Clear</button>` +
    `<Button onclick='finish()'>Finish</button>` +
    `</buttonlist>`;
}
function addQ() {
  var q = document.getElementById("question").value;
  var a = document.getElementById("Ans_1").value;
  var b = document.getElementById("Ans_2").value;
  var c = document.getElementById("Ans_3").value;
  var d = document.getElementById("Ans_4").value;
  Question[q] = [a, b, c, d];
  QuestionSet.push(Question);
  setQp();
}
