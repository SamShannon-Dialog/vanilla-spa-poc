<div>
    <h2>WFH Entries</h2>
    <div id="componentPanel">
    <?php include "../components/singleDay.php" ?>
    </div>

    <script>
    function loadComponent (htmlName) {
            var url = 'components/' + htmlName,
                xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.querySelector("#componentPanel").innerHTML = this.responseText;
                }
            };
            xhttp.open('GET', url, true);
            xhttp.send();
    }
    </script>
</div>