
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./images/CSSpage.css">
</head>
<?php
if (count($errors)>0):?>
<div class="error">
<?php foreach ($errors as $error):?>
<p><?php echo $error ?></p>
<?php endforeach?></div>

<?php endif?>