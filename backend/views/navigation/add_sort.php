<?php/** * Created by PhpStorm. * User: asusa * Date: 2018/3/28/0028 * Author: Cary.He * Contact QQ  : 373889161($S$-Memory) * email: 373889161@qq.com * Time: 12:01 */use yii\helpers\Html;use yii\widgets\ActiveForm;$this->title='添加导航分类';?><?=Html::cssFile(['@web/css/style.css'])?><h1>添加导航分类</h1><?php $form = ActiveForm::begin(); ?><div class="nav-1 lab">    <?= $form->field($model,'name')->textInput()?></div><div class="nav-1 lab">    <?= $form->field($model,'keywords')->textInput()?></div><div class="nav-4 lab">    <?= $form->field($model,'description')->textarea(['rows'=>5])?></div><?= Html::submitButton('提交',['class'=>'btn btn-primary'])?><?php ActiveForm::end(); ?>