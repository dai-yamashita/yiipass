<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\BaseHtml;

/* @var $this yii\web\View */
/* @var $model app\models\Password */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="password-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::button('Generate Password', array('id' => 'generate_password')) ?>
    <?= Html::button('Toggle Password', array('id' => 'toggle_password')) ?>

    <p>
        <?= BaseHtml::hiddenInput('Password[id]', $model->id) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'expire')->textInput() ?>
    </p>

    <?php
    $user_checkboxes = '<label class="control-label" for="users">Allowed users</label><ul class="list-group">';

    foreach($all_users as $user){
        $checkbox_status = null;
        if(is_array($users_account_credential_ids) && in_array($model->id, $users_account_credential_ids[$user->id])){
            $checked = true;
        } else {
            $checked = false;
        }
        $user_checkboxes .= '<li class="list-group-item">' . Html::checkbox('user-id', $checked, ['value' => $user->id]) . " $user->username</li>";
    }

    $user_checkboxes .= '</ul>';
    ?>


    <?= $user_checkboxes ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
