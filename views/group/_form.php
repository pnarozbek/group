<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\group\models\group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grup_id')->textInput() ?>

    <?= $form->field($model, 'grup_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grup_uyeler')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grup_aciklama')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
