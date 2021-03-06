<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Equipos */

$this->title = "Datos del equipo";
?>
<div class="equipos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id_equipo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_equipo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_equipo',
            'nombre_equipo',
            'shortname_equipo',
            'fecha_equipo',
            'direccion_equipo',
            'email_equipo:email',
            'web_equipo',
            'user_equipo',
           // 'password_equipo',
           // 'authkey',
           // 'admin',
        ],
    ]) ?>

</div>
