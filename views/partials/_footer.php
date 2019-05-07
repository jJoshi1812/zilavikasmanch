<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    

        <div class="footer">
            <div class="pull-right">

                   <a class="link-block" href="#">About.</a>
                    <a class="link-block" href="#">Privacy.</a>
                    <a class="link-block" href="#">Terms.</a>

            </div>
            <div>
                <strong>Copyright</strong> Collector Company &copy; 2018-2021
            </div>
        
        </div> 



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
