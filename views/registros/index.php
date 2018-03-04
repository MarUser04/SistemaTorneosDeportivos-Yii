<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Torneos;
use app\models\Equipos;


/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registros';
?>
<div class="registros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?= Html::a('Crear Registros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        
        'columns' => [
            

            'id_registro',
            'equipo.nombre_equipo',
            
            'torneo.nombre_torneo',
            'categoria',
            'cant_participantes',

            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]); ?>


    <?php 
        $todo = Torneos::find()->all();
        $toda = Equipos::find()->all();
       
     ?>
</div>
