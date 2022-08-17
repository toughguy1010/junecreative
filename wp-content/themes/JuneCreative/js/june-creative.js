// back to the top btn

var btnBackToTop = document.querySelector(".back-to-header");
console.log(btnBackToTop)

btnBackToTop.addEventListener('click', function() {

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
})
console.log(document.documentElement)