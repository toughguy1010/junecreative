// back to the top btn

var btnBackToTop = document.querySelector(".back-to-header");
console.log(btnBackToTop)

btnBackToTop.addEventListener('click', function() {

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

})
console.log(document.documentElement)




jQuery(document).ready(function() {


    $(".back-to-header").hide();
    $(function toTop() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-header').fadeIn();
            } else {
                $('.back-to-header').fadeOut();
            }
        });

        $('.back-to-header').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});