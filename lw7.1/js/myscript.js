function isPrimeNumber(n) {
  if (Number.isInteger(n)) {
    isPrime(n);                        // return?
  } else if (Array.isArray(n)) {
    (n.length == 0) ? console.log('empty array') : n.forEach(element => checkElement(element));
  } else {
    console.log('wrong input');
  }
}

function checkElement(n) {
  if (Number.isInteger(n)) {
    isPrime(n)
  } else if (typeof(n) == 'string') {
    console.log(n + ' is ' + typeof(n))
  } else {
    console.log(typeof(n))
  }
}

function isPrime(n) {
  if (n == 1 || n <= 0 ) {
    console.log(n + ' is not prime number');
  } else {
    let isPrime = true;  
    for (let j = 2; j < n; j++) {
      if (n % j == 0) {
        isPrime = false;
        break;
      }
    }     
    isPrime ? console.log(n + ' is prime number') : console.log(n + ' is not prime number'); 
  }
}

