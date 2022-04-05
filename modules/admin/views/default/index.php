<?php

use yii\helpers\Html;

?>

<div class="admin-default-index">
    <h1>Админка</h1>
<p>
    Привет, добро пожаловать в админку :)
    <br/>
    <br/>
    Для редактирования постов, перейди в <?=Html::a('открыть редактор', '/admin/article/index', ['class' => 'btn btn-primary']);?>
    <br/>
    <br/>
    Для возврата в блог, тыкни кнопку <?=Html::a('назад в блог', '/site/index', ['class' => 'btn btn-secondary']);?>
</p>
</div>
