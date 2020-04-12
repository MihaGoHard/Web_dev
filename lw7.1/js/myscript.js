function isPrimeNumber(n){
  if ( (Number.isInteger(n) === false ) && ( Array.isArray(n) === false) ) {  
    console.log('mistace')
  }

  if ( (Array.isArray(n) === true ) && ( checkNum(n) === false) ) {
    console.log('mistace') 
  }    

  if ( (Array.isArray(n) === true ) && ( checkNum(n) === true) ) { 
    n.forEach(element => isPrime(element))
  }    
                
  if ( Number.isInteger(n) === true ) {
    isPrime(n) 
  } 

}

function checkNum(n){
  let fl
  n.forEach( function(entry) {
    if ( Number.isInteger(entry) === false ){
      fl = 1; 
    }
  });
  if (fl === 1){
        return false
    } else {
        return true
    }
}    

function isPrime(n){
  let isPrime
  for (let i = 2; i <= n; i++){
    isPrime = true
    for (let j = 2; j < i; j++) {
      if (i % j == 0) {
        isPrime = false
        break
      }
    }
    if ( (isPrime) && (i === n) ) {
      console.log(i + ' is prime number')
    }          
  }
  if (isPrime === false) {
    console.log(n + ' is not prime number')
  }
}

isPrimeNumber(3)
