// Animated scroll
var pageFlow = document.getElementById('index-more');
 
pageFlow.addEventListener('click', function(e) {
   e.preventDefault();
   var position = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
   var target   = document.getElementById('about').offsetParent.offsetTop - 80;
   var timer = setInterval(function() {
       window.scrollTo(0, position);
       position += 20;
       if(position >= target) {
           clearInterval(timer);
       }
   }, 10);
});