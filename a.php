<?php
$s = 'MÌNH TÊN LÀ ';
?>
<h1><?php echo $s;?></h1>
<?php 
for  ($i=1; $i<=10;$i++)
{
    echo '<h2>' .$s .'</h2>';
}
?>
<hr>
<h1> HỒ THÀNH KHẢI  </h1>
<?php  
$n1 = 10;
$n2 = 0;
for ($i=0; $i<=$n1; $i++)
{
    $n2 += $i;
}

echo $n2;
?>

