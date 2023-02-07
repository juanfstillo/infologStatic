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
        <div class="col 12 text-center">
            <div class="jumbotron">     
                <h1 class= "text-uppercase"><?= $useCases[0]["name"]; ?></h1><br>
                    <div class="col 12">    
                        <hr class="mx-7 aling-center">
                        <embed src="prot.pdf" width="800px" height="2100px" />
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
