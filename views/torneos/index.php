<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TorneosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Torneos';
?>
<div class="torneos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nuevo torneo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id_torneo',
            'nombre_torneo',
            'fecha_torneo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
