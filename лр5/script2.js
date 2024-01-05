function calculateSum() {
  var arr = [2, 9, 4, 16, 1, 25, 5]; // Ваш массив чисел
  
  var filteredArr = arr.filter(function(num) {
    var sumOfDigits = String(num).split("").reduce(function(acc, digit) {
      return parseInt(digit) + acc;
    }, 0);

    return (sumOfDigits % 2 === 0 && Math.floor(num) >= 1);
  });

  var sum = filteredArr.slice(1, filteredArr.length - 1).reduce(function(acc, num) {
    return acc + num;
  }, 0);

  var result = document.getElementById("result");
  result.innerHTML = "Сумма элементов между первым и последним числами: " + sum;
}