<?php
include __DIR__ . '/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/partials/template/head.php'; 
?>
<body>
   <main>
   <?php
   include __DIR__ . '/partials/template/menu_aside.php'; 
   include __DIR__ . '/dischi_OGGI.php';
   ?> 
   <div class="gallery">
   <?php
   include __DIR__ . '/partials/template/gallery_nav.php'; 
   include __DIR__ . '/partials/template/dischi_INPHP.php';
   ?> 
   </div>
   </main>
   <?php
   include __DIR__ . '/partials/template/footer.php';
   ?> 
</body>
</html>