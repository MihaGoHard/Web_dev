let direction = 'middle';                 // начальное направление
let number_of_indexes = films.length - 1;
let number_of_elements = films.length;

function moveRight() {
  if (direction == 'middle') {        // певрое нажатие вправо 
    direction = 'right'
    count = 3;
  }  
  if (direction == 'left') {          // пересчёт счётчика, изменение направления left => right
    recalcCount();
    direction = 'right';
  }   
  filmsArticles.removeChild(filmsArticles.firstElementChild);                               
  count < number_of_indexes ? count += 1 : count = 0;   // инкремент счётчика 
  createElement();      
  filmsArticles.appendChild(new_element);
}

function moveLeft() {
  if (direction == 'middle') {
    direction = 'left';
    count = number_of_elements; 
  }  
  if (direction == 'right') {
    recalcCount()
    direction = 'left';
  }                              
  filmsArticles.removeChild(filmsArticles.lastElementChild);
  count > 0 ? count -= 1 : count = number_of_indexes; 
  createElement();
  filmsArticles.insertBefore(new_element, filmsArticles.firstElementChild);  
}  

function createElement() {
  new_element = document.createElement('div');
  new_element.className = 'film-column'
  new_element.innerHTML = `<img alt="PoteryaPoter=(" src="${films[count].preview}" class="image">
                           <span class="film-name">
                             ${films[count].tittle}
                           </span>
                           <p class="film-text">
                             ${films[count].description}                          
                           </p>`;
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




/*window.onload = run;
function ChangePlaceLeft() {
  let movie = document.querySelectorAll('.film-column');
  filmsArticles.removeChild(movie[0])
  filmsArticles.appendChild(movie[0]);
}
document.querySelector('.a:last-child')
function ChangePlaceRight() {
  let movie = document.querySelectorAll('.film-column');
  filmsArticles.removeChild(movie[4])
  filmsArticles.insertBefore(movie[4], movie[0]);
}*/
