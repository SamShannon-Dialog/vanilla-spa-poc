<div class="inputForm calendarComponent">
    <table>
        <tr class="headerRow">
            <th>
            <a href="javascript:void(0)" onclick="toggleComponentsList()" class="dropdownlink">Calendar &#x25bc;</a>
                <?php include "../components/componentsList.php" ?>
            </th>
        </tr>
        <tr>
            <td>
                <?php
                $date = time();
                ?>
            <div class="calendar">
  <div class="month"><a href="#" class="nav"><i class="fas fa-angle-left"></i></a>
  <div><?php echo date('F',$date) ?> <span class="year"><?php echo date('Y',$date) ?></span></div><a href="#" class="nav"><i class="fas fa-angle-right"></i></a></div>
  <div class="days">
    <span>Mon</span>
    <span>Tue</span>
    <span>Wed</span>
    <span>Thu</span>
    <span>Fri</span>
    <span>Sat</span>
    <span>Sun</span>
  </div>
  <div class="dates">
      <?php
        
        for ($i=1; $i <= date('t',$date); $i++) { 
            $output = "<button ";
            if($i == date('j',$date)){
                $output = $output . "class='today'";
            }
            $output = $output . "> <time>" . $i . "</time></button>";
            echo $output;
        }
      ?>
  </div>
</div>
            </td>
        </tr>
    </table>
</div>