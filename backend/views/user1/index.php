<?php

use yii\helpers\Html;
use yii\grid\GridView;

use common\models\User1;
/* @var $this yii\web\View */
/* @var $searchModel common\models\User1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user1-index">

    <p>
        <?= Html::a('新增用户', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'id',
                'headerOptions' => array('style'=>'width:5%;'),
            ],

            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',
            'mobile',
            //'library_id',

            [
                'attribute' => 'library_id',
                'label' => '分配至图书馆',
                'value'=>function ($model, $key, $index, $column) {
                    return User1::getLibraryOption($model->library_id);
                },
                'filter'=> User1::getLibraryOption(),
                //'headerOptions' => array('style'=>'width:120px;'),
            ],
            //'pid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>