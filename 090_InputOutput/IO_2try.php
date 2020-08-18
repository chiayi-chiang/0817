<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color:red;
        }
    </style>
</head>
<body>
<?php
    $scoreList = array(100,98,50,95);
?>
    <ul>
        <?php foreach($scoreList as $score ){?>
            <li><?= $score ?></li>
            
        <?php } ?>


        <!-- <?php for($i=1;$i<=3;$i++){?>
            <li><?= $i ?></li>
        <?php } ?> -->
        
        <!-- <?php
            for($i = 1;$i<=3;$i++){
                echo "<li> $i </li>";
            }

        ?> -->
    </ul>
<hr>
    <ul>
            <?php foreach ($scoreList as $score ){?>
            <?php if ($score >= 60?>
                <li class="pass"> <?=$score ?> </li>
            <?php}else{?>
                <li class = "fail"><?=$score?></li>
            <?php } ?>
    </ul> 
<hr>
    <ul>
        <?php foreach ($scoreList as $score ){?>
            <li class="<?=(($score<60)?"fail":"")?>"><!--= is echo-->
                <?= $score ?>
            </li>
        <?php } ?>
</body>
</html>