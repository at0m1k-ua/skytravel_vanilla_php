guide_start_onclick = function () {
    document.getElementById('guide-start').classList.add('disappear-left');
    document.getElementById('guide-first').classList.remove('appear-right-start');
    document.getElementById('guide-first').classList.add('appear-right');
};

guide_first_onclick = function () {
    document.getElementById('guide-first').classList.remove('appear-right');
    document.getElementById('guide-first').classList.add('disappear-left');
    document.getElementById('guide-second').classList.add('appear-right-start');
    document.getElementById('guide-second').classList.add('appear-right');
    document.getElementById('guide-second').classList.remove('appear-right-start');
}

open_menu = function () {
    document.getElementById('menu').classList.remove('inactive-menu');
    document.getElementById('menu').classList.add('active-menu');
}

close_menu = function () {
    document.getElementById('menu').classList.remove('active-menu');
    document.getElementById('menu').classList.add('inactive-menu');
}

open_footer = function() {
    close_menu();
    window.scrollTo(0, document.body.scrollHeight);
}