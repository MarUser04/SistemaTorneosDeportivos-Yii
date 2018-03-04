<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registros */

$this->title = 'Actualizando Registro';
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_registro, 'url' => ['view', 'id' => $model->id_registro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registros-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
foreach ($torneos as $torneo) {
	$itemsDropDown[$torneo->id_torneo] =
	$torneo->nombre_torneo;
}
foreach ($equipos as $equipo ) {
	$itemsDropDown2[$equipo->id_equipo] =
	$equipo->nombre_equipo;
}


     ?>
    <?= $this->render('_form', [
        'model' => $model,
        'itemsDropDown' => $itemsDropDown,
  		'itemsDropDown2' =>$itemsDropDown2
    ]) ?>

</div>
