function isPrimeNumber(n) {
  if (Number.isInteger(n)) {
    isPrime(n);
  } else if (Array.isArray(n)) {
    (n.length == 0) ? console.log('empty array') :   // можно ли переносить длинные тернарные операторы на другую строку?
    n.forEach(element => Number.isInteger(element) ? isPrime(element) : 
      typeof(element) == 'string' ? console.log(element + ' is ' + typeof(element)) : 
      console.log(typeof(element))); 
  } else {
    console.log('wrong input');
  }
}

function isPrime(n) {
  if (n == 1) {
    console.log(n + ' is not prime number');
  } else {   
    let isPrime = true;  
    for (let j = 2; j < n; j++) {
      if (n % j == 0) {
        isPrime = false;
        break;
      }
    }
    if (isPrime) {
      console.log(n + ' is prime number');
    }          
    if (!isPrime) {
      console.log(n + ' is not prime number');
    }
  }
}
