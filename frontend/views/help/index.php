<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="help-index">

    <h1><?= Html::encode($this->title); ?></h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus orci sed neque rutrum commodo. Vivamus aliquam est tincidunt nibh fringilla, eget porttitor magna dictum. Pellentesque non eros euismod, aliquet quam at, varius ipsum. Pellentesque sagittis rhoncus dolor a facilisis. Nullam vehicula, arcu vitae fermentum posuere, odio elit vulputate lectus, non volutpat ipsum sapien non erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin ut nibh purus. Sed quis est turpis. Suspendisse sed cursus mauris. Cras porttitor enim nec mi scelerisque posuere. Mauris fringilla urna in nunc imperdiet, non imperdiet felis ornare. Nulla auctor ipsum quis faucibus mollis. Quisque placerat vestibulum justo eu volutpat. Quisque auctor ante quis risus vestibulum, id pharetra leo viverra. Duis pulvinar ornare dui, sit amet malesuada augue vestibulum in.</p>

    <div><?= Html::a('Account Settings', ['help/account-settings']) ?></div>
    <div><?= Html::a('Login and Security', ['help/login-and-security']) ?></div>
    <div><?= Html::a('Privacy', ['help/privacy']) ?></div>

</div>