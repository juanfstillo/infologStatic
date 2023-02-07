<?php
require 'var.php'


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'head.php';?>
  <body>
    <?php include 'header.php';?>
    
    <section id="use-cases" class="py-4 my-4">
        <div class="container">
          <div class="row">
            <?php foreach ($useCases as $useCase): ?>
               
              <div class="col-12 col-md-6 col-lg-6 text-center my-4">
                <img class="img-fluid img-thumbnail" src="<?= $useCase["imageUrl"]; ?>" alt="<?= $useCase["name"] ?>">
                <br>
                <div class="<?= $clasesTexto ?>">
                  
                  <a class="btn btn-secondary" href="<?= $useCase["url"]; ?>" role="button"><?= $useCase["name"] ?></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'script.php';?>

  </body>

</html>
