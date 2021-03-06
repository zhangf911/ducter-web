<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DcmdOprCmdExec */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dcmd-opr-cmd-exec-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'opr_cmd_id')->textInput() ?>

    <?= $form->field($model, 'opr_cmd')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'run_user')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'timeout')->textInput() ?>

    <?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'arg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'utime')->textInput() ?>

    <?= $form->field($model, 'ctime')->textInput() ?>

    <?= $form->field($model, 'opr_uid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
