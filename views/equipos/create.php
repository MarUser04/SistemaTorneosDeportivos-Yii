<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Equipos */

$this->title = 'Crear Equipos';
?>
<div class="equipos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
