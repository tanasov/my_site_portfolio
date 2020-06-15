document.querySelector('.burger').addEventListener('click', function() {
    document.querySelector('.burger span').classList.toggle('active');
    document.querySelector('.burger').classList.toggle('btn_menu');
    document.querySelector('.menu').classList.toggle('animate');

})