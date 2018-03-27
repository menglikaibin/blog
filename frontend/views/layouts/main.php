<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\ActiveForm;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '学习yii2.0',
        'brandOptions'=>['style'=>'color:yellow;front-size:23px'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
        ['label' => '关于我们', 'url' => ['/site/about']],
        ['label' => '联系我们', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
        $menuItems[] = ['label' => '上传头像', 'url' => ['/post/upload']];

    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/user/security/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';

    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;学习yii2.0 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
        <br>
    </div>
    <div style="text-align: center">
        <script>
            var _fxi = _fxi || [];
            (function () {
                var it = document.createElement("script");
                it.src = "https://www.fangxinnet.org/js/identity.js?b77142F4F5AE26C3B8B9B010FCB0438A4";
                it.setAttribute('host', 'https://zs.fangxinnet.org');
                it.setAttribute('path', '');
                it.setAttribute('objectId', '1520328175aVpic85899345');
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(it, s);
            })();
        </script>
    </div>
<!--    <a href="http://chinab2b.org.cn/zilvgongyue/show.php?id=108"><img src="http://chinab2b.org.cn/zilvgongyue/img/logo.png"></a>-->

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script></script>
