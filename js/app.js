'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('home', 'home.php', true)            
            ,new Route('wfh-entries', 'wfh-entries.php')
            ,new Route('wfh-review', 'wfh-review.php')
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

  function toggleComponentsList(forceClose = false) {
    var cpl = document.querySelector(".componentList-content");
    if(cpl.style.display == "block" || forceClose == true){
      cpl.style.display = "none";
    } else {
      cpl.style.display = "block";
    }
  }
  document.addEventListener('mouseup', function(e) {
    var ddlToggle = document.querySelector('.dropdownlink');
    if(!ddlToggle.contains(e.target)){
      toggleComponentsList(true);
    }
  })

  function toggleComponent(componentHtmlName) {
    toggleComponentsList(true);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      console.log(this.responseText);
      if(this.readyState == 4) {
        if(this.status == 200) {document.querySelector("#componentPanel").innerHTML = this.responseText;}
        if(this.status == 404) {document.querySelector("#componentPanel").innerHTML += "Unable to load Component<br />";}
      }
    }
    xhttp.open("GET", "components/" + componentHtmlName, true);
    xhttp.send();
    return;
  }