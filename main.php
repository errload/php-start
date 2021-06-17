<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title><?= $title; ?></title>
</head>
<body>

    <?php include 'header.inc.php'; ?>

    <content class="content">
        <div class="content__wrapper">
            
            <h2><?= $welcome; ?></h2>

            <div class="about">

                <div class="avatar">
                    <?= '<img src="./img/ava.jpg" class="avatar" />'; ?>
                </div>

                <div class="about__me">
                    <h3><?= "$firstname $lastname"; ?></h3>
                    <p><?= "$data, $city"; ?></p>

                    <div class="knowledge">
                        <p>представим, будто он начинающий php программист и освоил 
                            переменные и логические операторы
                        </p>

                        <p>но давайте не будем с этим долго возиться и приведем пару
                            утомительных примеров, так как тема пока уж слишком скучная и легкая)
                        </p>

                        <?php include 'knowledge.inc.php'; ?>

                        <?php
                            echo "\$a = $a <br /> \$b = $b <br />";
                            echo "\$c = \$a + \$b = $c <br /><br />";

                            echo "\$a >= \$b ? \$a : \$b //  ";
                            echo $a >= $b ? "<i>$a</i>" : "<i>$b</i>";

                            echo '<br /><br />';

                            echo "\$bool = ";
                            echo $bool ? 'true' : 'false';

                            echo '<br /><br />';

                            echo "\$result = $result";
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </content>

    <?php include 'footer.inc.php'; ?>
    
</body>
</html>
