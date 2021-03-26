    <!-- Latest compiled JavaScript and jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <?php
    if($currentPage === "index") {
        echo '
            <!-- Morris chart Lib -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        ';
    }
    ?>

    <!-- Custom scripts -->
    <?php
    if($currentPage === "index") {
        require_once(SCRIPTS_PATH . "/charts.php");
    }

    if($currentPage === "details") {
        require_once(SCRIPTS_PATH . "/dataGrid.php");
    }
    ?>

</body>
</html>
