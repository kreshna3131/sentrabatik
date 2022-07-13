<?php
include "templates/header.php";
?>

<!-- pages -->
<?php
if (isset($_GET['home'])) {
  include "pages/home.php";
} else if (isset($_GET['list'])) {
  include "pages/list.php";
} else if (isset($_GET['gallery'])) {
  include "pages/gallery.php";
} else if (isset($_GET['about'])) {
  include "pages/about.php";
} else if (isset($_GET['contact'])) {
  include "pages/contact.php";
} else {
  include "pages/home.php";
}
?>
<!-- akhir pages -->

<?php
include "templates/footer.php";
?>