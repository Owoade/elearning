let serachBtn = document.querySelector('#btn1'),
    serachBtn2 = document.querySelector('#btn2'),
    courseCard = document.querySelectorAll('.course-card'),
    search = document.querySelector('#search');
let no_of_clicks = 0;
// let myStr = "MAyo is good";
// alert(myStr.includes('good'));
let card_wrapper = document.querySelector('.card-wrapper-search');

function searchCourse() {
    let str = search.value.toUpperCase();
    if (search.value !== '') {
        courseCard.forEach(each => {
            // alert(each.getAttribute('data-courseCode'));
            if (each.getAttribute('data-courseCode') === str) {
                clearCards();
                card_wrapper.classList.add('center');
                each.style.display = 'block';
                each.style.animation = 'anim3 .3s forwards';
            }
        })
    }
}


function clearCards() {
    courseCard.forEach(each => {
        each.style.display = 'none';
    })
}
serachBtn.addEventListener('click', searchCourse);
serachBtn2.addEventListener('click', () => {
    no_of_clicks += 1;
    if (no_of_clicks > 1) {
        let str = search.value.toUpperCase();
        if (search.value !== '') {
            courseCard.forEach(each => {
                // alert(each.getAttribute('data-courseCode'));
                if (each.getAttribute('data-courseCode') === str) {
                    clearCards();
                    card_wrapper.classList.add('center');
                    each.style.display = 'block';
                    each.style.animation = 'anim3 .3s forwards';
                }
            })
        }
    }

});