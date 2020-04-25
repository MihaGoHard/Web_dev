let direction = 'middle';                  // начальное направление
let number_of_indexes = films.length - 1;
let number_of_elements = films.length;
let count = number_of_elements;
function moveRight() {
  if (direction == 'middle') {            // певрое нажатие вправо 
    direction = 'right'
    count = 3;
  }  
  if (direction == 'left') {              // пересчёт счётчика, изменение направления left => right
    recalcCount();
    direction = 'right';
  }                                   
  count < number_of_indexes ? count += 1 : count = 0;
  for(i = 0; i < 3; i++){                 // обмен содержимым между 1, 2, 3 блоками  
    exchBetweenElements();            
  }
  updateFarElement();                     // добавление нового содержимого в крайний (4) блок 
}

function moveLeft() {
  if (direction == 'middle') {
    direction = 'left'; 
  }  
  if (direction == 'right') {
    recalcCount()
    direction = 'left';
  }
  count > 0 ? count -= 1 : count = number_of_indexes;
  for(i = 3; i > 0; i--){ 
    exchBetweenElements();;
  }
  updateFarElement();
}  

function exchBetweenElements() {
  let exch = null;
  direction == 'left' ? exch = -1 : exch = 1;
  (document.querySelectorAll('.film-column')[i]).querySelector('.image').src = (document.querySelectorAll('.film-column')[i + exch]).querySelector('.image').src;
  (document.querySelectorAll('.film-column')[i]).querySelector('.film-name').innerText = (document.querySelectorAll('.film-column')[i + exch]).querySelector('.film-name').innerText;
  (document.querySelectorAll('.film-column')[i]).querySelector('.film-text').innerText = (document.querySelectorAll('.film-column')[i + exch]).querySelector('.film-text').innerText;
}

function updateFarElement() {
  let n = null;
  direction == 'left' ? n = 0 : n = 3;
  (document.querySelectorAll('.film-column')[n]).querySelector('.image').src = films[count].preview;
  (document.querySelectorAll('.film-column')[n]).querySelector('.film-name').innerText = films[count].tittle;
  (document.querySelectorAll('.film-column')[n]).querySelector('.film-text').innerText = films[count].description;  
}

function recalcCount() { 
  if (direction == 'left') {
    count -= (number_of_indexes - 2); 
    count < 0 ? count += number_of_elements : null;  
  }
  if (direction == 'right') {
    count += (number_of_indexes - 3);
    count >= number_of_indexes ? count -= number_of_indexes : count += 1;
  }
}
