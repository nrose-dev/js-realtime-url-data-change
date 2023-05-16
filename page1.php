<!DOCTYPE html>
<html>
<head>
  <title>Change URL without reloading page using ajax & PHP</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php

 include('header.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">
    The name of our country is bangladesh
</div>
<?php

include('footer.php');
?>


</body>
</html>