function isPrimeNumber(n){
  if ((!Number.isInteger(n) && !Array.isArray(n)) || (Array.isArray(n) && !checkNum(n)))  {  
    console.log('mistace')
  }    
  if (Array.isArray(n) && checkNum(n)) { 
    n.forEach(element => isPrime(element))
  }                    
  if (Number.isInteger(n)) {
    isPrime(n) 
  } 
}

function checkNum(n){
  let fl = true
  for (let entry of n) {
    if (!Number.isInteger(entry)) {
      fl = false
    }
  }
  return !fl ? false : true 
}    

function isPrime(n){
  let isPrime = true
  for (let i = 2; i <= n; i++){
    isPrime = true
    for (let j = 2; j < i; j++) {
      if (i % j == 0) {
        isPrime = false
        break
      }
    }
    if ((isPrime) && (i == n)) {
      console.log(i + ' is prime number')
    }          
  }
  if (!isPrime || (n == 1)) {
    console.log(n + ' is not prime number')
  }
}
