const VISIBLELEMENTS = 4;
const ALLELEMENTS = 10;
const LEFTBOTTOM = 0;
const RIGHTBOTTOM = 9;

function turnLeft(name_indexes) {
  let direction = 'left';
  const FILMCOLUMNLAST = document.querySelectorAll('.film-column')[3];
  let name = FILMCOLUMNLAST.querySelector('.film-name').innerText;    // имя 4, удаляемого элемента, в HTML
  let count = name_indexes[name] - VISIBLELEMENTS;                                                               // получить индекс элемента для добавления
  count < LEFTBOTTOM ? count += ALLELEMENTS : null;                                                                   // если значение отрицательное
  filmsArticles.removeChild(filmsArticles.lastElementChild);
  createElement(count, direction);                                                                  // добавить элемент в html
} 
  
function turnRight(name_indexes) {
  let direction = 'right';
  const FILMCOLUMFIRST = document.querySelector('.film-column')
  let name = FILMCOLUMFIRST.querySelector('.film-name').innerText;
  let count = name_indexes[name] + VISIBLELEMENTS;
  count > RIGHTBOTTOM ? count -= ALLELEMENTS : null;
  filmsArticles.removeChild(filmsArticles.firstElementChild);
  createElement(count, direction);
} 

function createElement(count, direction) {
  const new_element = document.createElement('div');
  new_element.className = 'film-column'
  new_element.innerHTML = `<img alt="PoteryaPoter=(" src="${films[count].preview}" class="image">
                           <span class="film-name">
                             ${films[count].tittle}
                           </span>
                           <p class="film-text">
                             ${films[count].description}                          
                           </p>`;
  direction == 'right' ? filmsArticles.append(new_element) : filmsArticles.prepend(new_element);                       
}

function run() {
  let name_indexes = [];                                              // массив: имя элемента => индекс
  for (let i = 0; i < films.length; i ++) {                                       
    name_indexes[films[i].tittle] = i;
  }
  const moveLeft = document.querySelector('.move_left');
  moveLeft.addEventListener('click', () => turnLeft(name_indexes));
    
	const moveRight = document.querySelector('.move_right');
	moveRight.addEventListener('click', () => turnRight(name_indexes));
}

window.onload = run;

