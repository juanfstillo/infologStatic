<?php
require 'var.php'

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'head.php';?>
  <body>
    <?php include 'header.php';?>
    
    <section >
    <div class="row">
        <div class="col 12">
            <div class="jumbotron">     
                <h1 class="text-uppercase text-center"><?= $useCases[1]["name"]; ?></h1>
                    <div class="col 12">    
                        <hr class="mx-7">
                            <p><?= $useCases[1]["text"]; ?></p>
                    </div>
            </div>
        </div>
    </div>

      </section>

    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'script.php';?>

  </body>

</html>