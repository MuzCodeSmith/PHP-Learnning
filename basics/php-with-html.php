<?php

$template = "<h1 style='color:red' >PHP with HTML</h1>";
echo $template;


$name = "Muzaffar Shaikh";
$style ="color:green";
$color ="pink";
echo "<h1 style='$style'>my name is: $name</h1>";
?>
<h1 style="<?php echo $style ?>" >
    <?php
    echo $name;
    ?>
</h1>

<h2><?="this is short echo"; ?></h2>

<h1 style="color:<?php echo $color; ?>"> this is pink</h1>