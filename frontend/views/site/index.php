<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = Yii::$app->name . ' - My Portfolio';
?>
<div class="site-index">

    <div class="p-5 mb-4 bg-transparent rounded-3">

        <div class="container-fluid py-5 text-center">

            <?= Html::img('@web/images/photo.jpg', [
                'alt' => Yii::t('app', 'My profile photo'),
                'class' => 'side-index__photo',
            ]) ?>

            <h1 class="side-index__h1"><?= Yii::t('app', 'Hi, my name is Gerard') ?></h1>

            <p class="fs-5 fw-light"><?= Yii::t('app', 'Passionate for developing Yii 2 websites and web applications') ?></p>

            <p>
                <?= Html::a(Yii::t('app', 'See my work'), ['/project'], ['class' => 'btn btn-primary']); ?>
            </p>
        </div>
    </div>

</div>