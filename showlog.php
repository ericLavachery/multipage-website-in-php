<?php
$teou = 'Log';
include '_head.php';
?>
<body>
    <div class="container tm-container">
        <?php include '_navbar.php'; ?>
        <!-- page content -->
        <div class="tm-page-content">

            <!-- #log -->
            <section id="tm-section-1" class="row tm-section-log">
                <div class="tm-white-curve-text">
                    <p>&nbsp;</p>
                    <h2 class="tm-section-header">Logs</h2>
                    <ul>
                        <?php
                        if (file_exists('log.json')) {
                            $logJSON = file_get_contents("log.json");
                            $logARRAY = json_decode($logJSON, TRUE);
                            foreach ($logARRAY as $key => $value) {
                                $newLine = '<li>' . $value["prenom"] . ' | ' . $value["objet"] . ' | ' . $value["message"] . ' | ' . $value["date"] . ' | ' . $value["format"] . '</li>';
                                echo $newLine;
                            }
                        } else {
                            echo("Il n'y a pas encore de fichier log...");
                        }
                        ?>
                    </ul>
                    <p>&nbsp;</p>
                </div>
            </section>
            <!-- #log -->

            <?php include '_footer.php'; ?>

        </div>
        <!-- page content -->

    </div>
    <!-- .container -->

    <?php include '_js.php'; ?>

</body>
</html>
