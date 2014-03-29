// // Full height homepage image
// var indexHeader   = document.getElementById('index-header');
// indexHeader.style.height = (window.innerHeight || document.documentElement.clientHeight) + 'px';

// window.addEventListener('resize', function() {
//     indexHeader.style.height = (window.innerHeight || document.documentElement.clientHeight) + 'px';
// });

// Nav fade
var navBar  = document.getElementsByTagName('nav')[0];
var position;
var target;

window.addEventListener('scroll', function () {
    target  = document.getElementsByTagName('main')[0].offsetTop - 100;
    position = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;

    changeNavbarBkg();
});

function changeNavbarBkg() {
    if (position >= target) {
        navBar.className = 'blue';
    } else {
        navBar.className = 'white';
    }
}