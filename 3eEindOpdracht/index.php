<!DOCTYPE html>
<html>
<head>
  <title>Website met dynamische inhoud</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php
  include 'header.php';

  if (isset($_GET['content'])) {
    $content = $_GET['content'];
    if ($content == '1') {
      include 'content1.php';
    } elseif ($content == '2') {
      include 'content2.php';
    } elseif ($content == '3') {
      include 'content3.php';
    } elseif ($content == '4') {
      include 'content4.php';
    } else {
      echo "Ongeldige contentkeuze!";
    }
  } else {
    include 'content1.php';
  }

  include 'footer.php';
  ?>
</body>
</html>