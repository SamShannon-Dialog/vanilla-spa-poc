<div class="inputForm weekComponent">
    <table>
        <tr class="headerRow">
            <th>
                <a href="javascript:void(0)" onclick="toggleComponentsList()" class="dropdownlink">Week &#x25bc;</a>
                <?php include "../components/componentsList.php" ?>
            </th>
        </tr>
        <?php 
                $day = date('w');
                $week_start=date('Y-m-d', strtotime('-'.$day.' days'));
                $week_end=date('Y-m-d', strtotime('+'.(6-$day).' days'));
        ?>
        <tr>
            <td>
                <label for="date">Start Date: </label>
            </td>
            <td>
                <input type="date" id="date" value="<?php echo $week_start ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="date">End Date: </label>
            </td>
            <td>
                <input type="date" id="date" value="<?php echo $week_end ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="hours">Hours: </label>
            </td>
            <td>
                <input type="number" id="hours">
            </td>
        </tr>
        <tr>
            <td>
                <label for="comment">Comment: </label>
            </td>
            <td>
                <input type="text" id="comment">
            </td>
        </tr>
    </table>
</div>