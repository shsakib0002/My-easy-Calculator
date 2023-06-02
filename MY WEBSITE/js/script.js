function calculate() {
  var num1 = parseFloat(document.getElementById('num1').value);
  var num2 = parseFloat(document.getElementById('num2').value);
  var result = document.getElementById('result');

  if (isNaN(num1) || isNaN(num2)) {
    result.textContent = 'Please enter valid numbers.';
  } else {
    // Perform the calculation here
    var sum = num1 + num2;

    // Display the result
    result.textContent = 'The sum is: ' + sum;
  }
}