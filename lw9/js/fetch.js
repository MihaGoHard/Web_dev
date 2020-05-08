function lightFeel(validResult) {
  if (validResult['status'] != 'succes') {
    const status = '.default';
    for (let key in validResult) {
      if (key != 'status') {
        document.getElementById(`${key}`).style=`border-color:${validResult[key]}`;      
      } 
    }
    showStatus(status);
  }
  if (validResult['status'] == 'succes') {
    const status = '.succes';
    for (let key in validResult) {
      if (key != 'status' && key != 'country' && key != 'gender') {
        document.getElementById(`${key}`).style=`border-color:""`; 
        document.getElementById(`${key}`).value="";    
      }
    }
    showStatus(status);
  }
}

function showStatus(status) {
  document.querySelector(status).style='opacity:100%'; 
  setTimeout(() => {
    document.querySelector(status).style='opacity:0';
  }, 2000)   
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

async function sentRequest() {
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

function start() {
  runCicle();
  const submitEvent = document.querySelector('form');
  submitEvent.addEventListener('submit', () => sentRequest());
}

window.onload = start; 