const VISIBLELEMENTS = 4;
const ALLELEMENTS = 10;
const LEFTBOTTOM = 0;
const RIGHTBOTTOM = 9;
const RIGHT = 'right';
const LEFT = 'left'; 

function turnLeft() {
  const FILMCOLUMNLAST = document.querySelectorAll('.film_column')[3];
  let name = FILMCOLUMNLAST.querySelector('.film_name').innerText;                                   // имя 4, удаляемого элемента, в HTML  
  const index = films.findIndex(filmInfo => filmInfo.tittle == name);
  let count = index - VISIBLELEMENTS;                                                               // получить индекс элемента для добавления
  count < LEFTBOTTOM ? count += ALLELEMENTS : null;                                                 // если значение отрицательное
  filmsArticles.removeChild(filmsArticles.lastElementChild);
  createElement(count, LEFT);                                                                       // добавить элемент в html
} 
  
function turnRight() {
  const FILMCOLUMFIRST = document.querySelector('.film_column')
  let name = FILMCOLUMFIRST.querySelector('.film_name').innerText;
  const index = films.findIndex(filmInfo => filmInfo.tittle == name);
  let count = index + VISIBLELEMENTS;
  count > RIGHTBOTTOM ? count -= ALLELEMENTS : null;
  filmsArticles.removeChild(filmsArticles.firstElementChild);
  createElement(count, RIGHT);
} 

function createElement(count, direction) {
  const new_element = document.createElement('div');
  new_element.className = 'film_column'
  new_element.innerHTML = `<img alt="PoteryaPoter=(" src="${films[count].preview}" class="image">
                           <span class="film_name">
                             ${films[count].tittle}
                           </span>
                           <p class="film_text">
                             ${films[count].description}                          
                           </p>`;
  direction == RIGHT ? filmsArticles.append(new_element) : filmsArticles.prepend(new_element);                       
}

function runCicle() {
  const moveLeft = document.querySelector('.move_left');
  moveLeft.addEventListener('click', () => turnLeft());
    
	const moveRight = document.querySelector('.move_right');
	moveRight.addEventListener('click', () => turnRight());
}



