function calculateSum() {
  var arr = [2, 9, 4, 16, 1, 25, 5]; // Ваш массив чисел
  var sum = 0;
  var startIndex = -1;
  var endIndex = -1;

  for (var i = 0; i < arr.length; i++) {
    if (Math.abs(Math.sqrt(arr[i]) - Math.cbrt(arr[i])) <= Math.pow(10, -5)) {
      if (startIndex === -1) {
        startIndex = i;
      } 
      endIndex = i;
    }
  }

  if (startIndex !== -1 && endIndex !== -1 && startIndex !== endIndex) {
    for (var j = startIndex + 1; j < endIndex; j++) {
      sum += arr[j];
    }
  }

  var result = document.getElementById("result");
  result.innerHTML = "Сумма элементов между первым и последним числами: " + sum;
}