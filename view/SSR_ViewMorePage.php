<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <title>Smart Search Results Page</title>
  <link rel="stylesheet" type="text/css" href="../resources/css/SSR_ViewMorePage.css">
  <link rel="stylesheet" href="../resources/css/top_bar.css">
  <link rel="stylesheet" href="../resources/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('../resources/img/2.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">

  <?php
  if (!isset($_SESSION['id'])) {
    include('../view/top_bar.php');
  } else {
    include('../view/new_top_bar.php');
  }
  ?>

  <div class="con">
    <?php
    if (isset($_GET['place'])) {
      $place = $_GET['place'];
      //print_r($place);
    }
    ?>
    <h1 class="ttl"><b> <?php echo $place['place_name']; ?></b></h1>
    <div class="image">
      <?php
      if ($place['image_path']) {
        echo '<img src="' . $place['image_path'] . '" alt="" style="width:60%; height:350px;">';
      } else {
        echo '<img src="../resources/img/SmartSearchResult/default.jpg" alt="" style="width:60%; height:350px;">';
      }
      ?>
    </div>

    <div>
      <p class="paragraph"><?php echo $place['long_description']; ?></p>
    </div>

    <?php
    if ($_SESSION['level'] == 'moderator') {
    ?>
      <div class="submitCls">
        <div>
          <form action="../controller/SS_edit_place_controller.php" method="get">
            <button class="btnbtn" name="edit_place" value="<?php echo $place['place_name']; ?>">Edit Place</button>
          </form>
        </div>
        <div>
          <form action="../controller/SS_delete_place_controller.php" method="get">
            <button class="btnbtn" name="delete_place" id="delete_place" value="<?php echo $place['place_id']; ?>" onclick="return confirm('Are you sure you want to Delete this place?')">Delete Place</button>
          </form>
        </div>
      </div>
    <?php
    }
    ?>
  </div>

  <?php include('../view/footer.php'); ?>

</body>

</html>