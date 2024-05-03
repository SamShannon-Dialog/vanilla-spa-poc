<div class="inputForm singleDayComponent">
    <table>
        <tr class="headerRow">
            <th>
            <a href="javascript:void(0)" onclick="toggleComponentsList()" class="dropdownlink">Single Day &#x25bc;</a>
                <?php include "../components/componentsList.php" ?>
            </th>
        </tr>
        <tr>
            <td>
                <label for="date">Date: </label>
            </td>
            <td>
                <input type="date" id="date" value="<?php echo date('Y-m-d', time()); ?>">
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