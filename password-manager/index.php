<?php include "includes/header.php"; ?>
<?php

include('includes/database.php');
include('includes/functions.php');

?>

<a href="login"></a>

<!-- blog dynamic section -->

<?php if ($stm = $connect->prepare('SELECT * FROM posts ORDER BY `date` DESC')) {
  $stm->execute();

  $result = $stm->get_result();

  if ($result->num_rows > 0) {
?>
    <div class="container mt-5 pcpost">
      <div class="row">
        <?php while ($record = mysqli_fetch_assoc($result)) { ?>
          <div class="col-md-6 mb-4">
            <div id="card" class="card h-100">
              <div class="card-body">
                <a href="single.php?id=<?php echo $record['id']; ?>">
                  <img src="<?php echo $record['Url-image']; ?>" class="img-fluid mb-4 card-img-top rounded">
                  <h5 class="card-title"><?php echo $record['title']; ?></h5>
                  <p class="card-text"><?php echo substr(strip_tags($record['content']), 0, 230) . '...'; ?></p>
                  <p class="card-text"><?php /* echo $record['date']; */ ?></p>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
<?php
  }
} ?>





<?php  include "includes/footer.php";  ?>