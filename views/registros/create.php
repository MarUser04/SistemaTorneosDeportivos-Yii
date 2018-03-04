<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registros */

$this->title = 'Registro en torneo';
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


$itemsDropDown = [];
$itemsDropDown2 = [];
foreach ($torneos as $torneo) {
	$itemsDropDown[$torneo->id_torneo] =
	$torneo->nombre_torneo;
}

foreach ($equipos as $equipo ) {
	$itemsDropDown2[$equipo->id_equipo] =
	$equipo->nombre_equipo;
}





?>
<div class="registros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'itemsDropDown' => $itemsDropDown,
   		'itemsDropDown2' => $itemsDropDown2
    ]) ?>

</div>
