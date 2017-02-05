<?php
$currentPage = $_SERVER['REQUEST_URI'];
?>

<?php 
echo '<a '; if ($currentPage == '/index.php') {echo 'class="current"';}; echo ' href="index.php">Home</a> | <a '; if ($currentPage == '/BreedsPage.php') {echo 'class="current"';}; echo ' href="BreedsPage.php">All About Breeds</a> | <a '; if ($currentPage == '/Dressage.php') {echo 'class="current"';}; echo 'href="Dressage.php">Dressage</a> | <a '; if ($currentPage == '/ShowJumping.php') {echo 'class="current"';}; echo 'href="ShowJumping.php">Show Jumping</a> | <a '; if ($currentPage == '/CrossCountry.php') {echo 'class="current"';}; echo 'href="CrossCountry.php">Cross Country</a>';
?>

