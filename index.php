<!DOCTYPE html>
<html>
  <link rel="stylesheet"  href="css/style.css">
  <head lang="en">
      <meta charset="UTF-8">
      <title>Single Page Application</title>
  </head>
  <body>
    <div id="closedNav" class="tiny-sidebar">
      <a id="openBtn" class="openbtn" onclick="openNav()">&#9776;</a>
      <a href="#home" title="Home">&#127963;</a>
      <a href="#wfh-entries" title="WFH Entries">&#128188;</a>
      <a href="#wfh-review" title="WFH Review">&#128214;</a>
      <hr>
      <a href="javascript:void(0)" onclick="alert('Auth with GDrive?')" title="Save">&#128190;</a>
      <a href="javascript:void(0)" onclick="alert('Auth with GDrive?')" title="Load">&#128194;</a>
    </div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#home">Home</a>
      <a href="#wfh-entries">WFH Entries</a>
      <a href="#wfh-review">WFH Review</a>
      <hr>
      <a href="javascript:void(0)" onclick="alert('Auth with GDrive?')">Save</a>
      <a href="javascript:void(0)" onclick="alert('Auth with GDrive?')">Load</a>
    </div>
    <div style="margin-left: 60px;" id="app">
      <div id="header">
        <h1 class="header"><span><img class="headerImg" src="images/tax.png"> WFH Hours Tracker (Taxy McTaxface) <img class="headerImg" src="images/tax.png"></span></h1>
</div>
      <div id="contentPanel"></div>
    </div>
    <script src="js/route.js"></script>
    <script src="js/router.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
