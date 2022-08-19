// back to the top btn

var btnBackToTop = document.querySelector(".back-to-header");
console.log(btnBackToTop)

btnBackToTop.addEventListener('click', function() {

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
})
console.log(document.documentElement)



// $(document).ready(function() {
//     var url = window.location;
//     var element = $('.header-desktop-menu-list li a').filter(function() {
//         return this.href == url || url.href.indexOf(this.href) == 0;
//     }).parent().addClass('active-current-page');
//     if (element.is('li')) {
//         element.addClass('active-current-page').parent().parent('li').addClass('active-current-page')
//     }
// });

// jQuery(document).ready(function() {

//     console.log("ready!");
//     var url = window.location;
//     var element = $('.header-desktop-menu-list li a').filter(function() {
//         return this.href == url || url.href.indexOf(this.href) == 0;
//     }).parent().addClass('active-current-page');
//     if (element.is('li')) {
//         element.addClass('active-current-page').parent().parent('li').addClass('active-current-page')
//     }
// });


var listCurrentPage = document.querySelectorAll(".nav-link")

console.log(listCurrentPage)
for (var i = 0; i < listCurrentPage.length; i++) {
    listCurrentPage[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.className += "active";
    });
}