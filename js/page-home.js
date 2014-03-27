// Full height homepage image
var primaryHeader   = document.getElementById('index-header');
primaryHeader.style.height = (window.innerHeight || document.documentElement.clientHeight) + 'px';

window.addEventListener('resize', function() {
    primaryHeader.style.height = (window.innerHeight || document.documentElement.clientHeight) + 'px';
});