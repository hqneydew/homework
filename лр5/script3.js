function splitString() {
  var inputString = document.getElementById("inputString").value;
  var fragments = [];

  for (var i = 0; i < inputString.length; i += 3) {
    fragments.push(inputString.substr(i, 3));
  }

  var result = document.getElementById("result");
  result.innerHTML = "Фрагменты строки: " + fragments;
}