'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('home', 'home.html', true)            
            ,new Route('wfh-entries', 'wfh-entries.html')
            ,new Route('wfh-review', 'wfh-review.html')
        ]);
    }
    init();
}());

 /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
 function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("app").style.marginLeft = "250px";
    document.getElementById("closedNav").style.width = "0px";
    document.getElementById("openBtn").style.visibility = false;
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("app").style.marginLeft = "60px";
    document.getElementById("closedNav").style.width = "60px";
    document.getElementById("openBtn").style.visibility = true;
  } 