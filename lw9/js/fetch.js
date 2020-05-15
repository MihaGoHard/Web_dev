function start() {
  runCicle();
  const submitEvent = document.querySelector('form');
  submitEvent.addEventListener('submit', () => sentRequest(event));
}
window.onload = start;

async function sentRequest(event) {
  event.preventDefault();
  if (event.defaultPrevented) {
    const validResult = await sendRequest();
    console.log(validResult);
    if (validResult != null) {
      lightFeel(validResult)
    } else {
      console.log('Something went wrong');
    }   
  }
}

function sendRequest() { 
  const url = 'php/request_processing.php';
  const formData = new FormData(document.querySelector('form'));
  return fetch(url, {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      return response.json()
    } else {
      return null; 
    }
  }) 
}

function lightFeel(validResult) {
  if (validResult['status'] != 'succes') {
    chooseBorderColor(validResult);
    showStatus('disappear');
  }
  if (validResult['status'] == 'succes') {
    resetAllParameter(validResult);
    showStatus('appear');
  }
}

function chooseBorderColor(validResult) {
  for (let key in validResult) {
    (key != 'status' && validResult[key] == 'red') 
      ? changeClassName(key, 'form_feel', 'form_feel_red') : null;        
    (key != 'status' && key != 'gender' && key != 'country' && validResult[key] == '') 
      ? changeClassName(key, 'form_feel_red', 'form_feel') : null;  
  }  
}

function resetAllParameter(validResult) {
  for (let key in validResult) {
    if (key != 'status' && key != 'country' && key != 'gender') {
      changeClassName(key, 'form_feel_red', 'form_feel'); 
      document.getElementById(`${key}`).value="";    
    }
  }
}

function changeClassName(key, removedClass, addedClass) {
  let classList = document.getElementById(`${key}`).classList;
  if (classList.contains(removedClass)) {  
    classList.remove(removedClass); 
    classList.add(addedClass);
  }
}

function showStatus(effect) {
  classList = document.getElementById('sent_messege').classList;
  (classList.contains('appearence') && effect == 'disappear' ) ? classList.remove('appearence') : null;
  (!classList.contains('appearence') && effect == 'appear' ) ? classList.add('appearence') : null;      
}




 