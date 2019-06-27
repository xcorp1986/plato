<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BarCode */

// $this->title = $model->title;

$this->title = "条码号序列信息";

$this->params['breadcrumbs'][] = ['label' => '条码号序列', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bar-code-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('D删除elete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '删除本条记录，确定?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'prefix',
            'number_length',
            'min_number',
            'max_number',
            'description',
            'library_id',
            'user_id',
            'created_at:dateime',
            'updated_at:datetime',
            //'status',
        ],
    ]) ?>

</div>