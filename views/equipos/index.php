<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquiposSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipos';
?>
<div class="equipos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Equipo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           

            'id_equipo',
            'nombre_equipo',
            'shortname_equipo',
            'fecha_equipo',
            'direccion_equipo',
            'email_equipo:email',
            'web_equipo',
            
            'user_equipo',
            //'password_equipo',
            //'authkey',
            //'admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
