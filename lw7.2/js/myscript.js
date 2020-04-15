function calc(n){
  let regular = /([(])?(\+|\-|\*|\/)(\s+)?(\-)?(\d+)(((\.)(\d+))?)(\s+)(\-)?(\d+)(((\.)(\d+))?)([)])?/
  if((n == null) || (typeof(n) != "string") || (n.match(regular) == null)) {
    return 'invalid input'  
  } 
  if (n.match(/(\d+)(((\.)(\d+))?)/g).length - n.match(/(\+|\-|\*|\/)(?=\D)/g).length != 1){
    return 'invalid input'
  }
  let searched = n.match(regular)
  let secondOper = Number((searched[11] != null ? searched[11] : '') + searched[12] + searched[13]) 
  let firstOper = Number((searched[4] != null ? searched[4] : '') + searched[5] + searched[6])
  let operator = searched[2]
  let result = calcNum(firstOper, operator, secondOper)
  n = n.replace(regular, result)  

  while (n.match(regular) != null) {   
    searched = n.match(regular)
    secondOper = Number((searched[11] != null ? searched[11] : '') + searched[12] + searched[13]) 
    firstOper = Number((searched[4] != null ? searched[4] : '') + searched[5] + searched[6])
    operator = searched[2]
    result = ' ' + calcNum(firstOper, operator, secondOper)
    n = n.replace(regular, result)
  }
  return('result = ') + result 
}  

function calcNum(firstOper, operator, secondOper){
  if ((operator == '/') && (secondOper == 0))  {
    return 'secon operand is 0'
  }
  if(operator == '/') {
    return firstOper / secondOper
  }
  if(operator == '*') {
    return firstOper * secondOper
  }
  if(operator == '+') {
    return firstOper + secondOper
  }
  if(operator == '-') {
    return firstOper - secondOper
  }
}




    
