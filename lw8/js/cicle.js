direction = 'left';
count = 3;
begin_left_direct = true;
number_of_indexes = films.length - 1;
number_of_elements = films.length;

function ChangePlaceRight() {
  begin_left_direct ? begin_left_direct = false : null;
  if (direction == 'left') {
    count -= (number_of_indexes - 2); 
    count < 0 ? count += number_of_elements : null;
    direction = 'right';
  }   
  filmsArticles.removeChild(filmsArticles.firstElementChild);                               
  count < number_of_indexes ? count += 1 : count = 0;
  createElement();      
  filmsArticles.appendChild(new_element);
}

function ChangePlaceLeft() {
  if (begin_left_direct) {
    begin_left_direct = false;
    count = number_of_elements; 
    direction = 'left';
  }  
  if (direction == 'right') {
    direction = 'left';
    count += (number_of_indexes - 3);
    count >= number_of_indexes ? count -= number_of_indexes : count += 1;
  }                              
  count > 0 ? count -= 1 : count = number_of_indexes;
  filmsArticles.removeChild(filmsArticles.lastElementChild); 
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
