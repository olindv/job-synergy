$(function() {
    questionAccordeon();

    function questionAccordeon() {
        const questionTitle = $('.questions__item');
        const questionContent = '.questions__item-content';

        questionTitle.on('click', function() {
            $(this).find(questionContent).slideToggle();
            $(this).toggleClass('active');
        })
    }
})