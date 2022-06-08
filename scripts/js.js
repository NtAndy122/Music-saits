const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,

})
sr.reveal('.Me')
sr.reveal('.asses', {interval:150})
sr.reveal('.card1', {origin: 'left'})
sr.reveal('.card2', {origin: 'right'})

/*********************таймер**************/
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline= "June 30 2022 00:00:00 GMT+0200";
initializeClock('countdown', deadline);
/*********************модальное окно**************/
!function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);
document.addEventListener('DOMContentLoaded', function() {
    /* Записываем в переменные массив элементов-кнопок и подложку.
       Подложке зададим id, чтобы не влиять на другие элементы с классом overlay*/
    var modalButtons = document.querySelectorAll('.btn'),
        overlay      = document.querySelector('.js-overlay-modal'),
        closeButtons = document.querySelectorAll('.js-modal-close');
    /* Перебираем массив кнопок */
    modalButtons.forEach(function(item){
        /* Назначаем каждой кнопке обработчик клика */
        item.addEventListener('click', function(e) {
            /* Предотвращаем стандартное действие элемента. Так как кнопку разные
               люди могут сделать по-разному. Кто-то сделает ссылку, кто-то кнопку.
               Нужно подстраховаться. */
            e.preventDefault();
            /* При каждом клике на кнопку мы будем забирать содержимое атрибута data-modal
               и будем искать модальное окно с таким же атрибутом. */
            var modalId = this.getAttribute('data-modal'),
                modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');
            /* После того как нашли нужное модальное окно, добавим классы
               подложке и окну чтобы показать их. */
            modalElem.classList.add('active');
            overlay.classList.add('active');
        }); // end click

    }); // end foreach


    closeButtons.forEach(function(item){
        item.addEventListener('click', function(e) {
            var parentModal = this.closest('.modal');
            parentModal.classList.remove('active');
            overlay.classList.remove('active');
        });
    }); // end foreach

    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;
        if (key == 27) {

            document.querySelector('.modal.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
        };
    }, false);

    overlay.addEventListener('click', function() {
        document.querySelector('.modal.active').classList.remove('active');
        this.classList.remove('active');
    });
}); // end ready
$('#menu-burger').click(function() {
    var overlayMenu = $('#overlay-menu'),
        menuIconLines = $('#menu-burger .menu-icon'),
        menuBurger = $('#menu-burger');

    if(overlayMenu.hasClass('open')) {
        overlayMenu.removeClass('open');
        menuIconLines.removeClass('open');
        menuBurger.removeClass('open');
    }else{    overlayMenu.addClass('open');
        menuIconLines.addClass('open');
        menuBurger.addClass('open');
    };


})



