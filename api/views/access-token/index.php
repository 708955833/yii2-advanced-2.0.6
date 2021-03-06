<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel api\models\AccessTokenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Access Tokens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-token-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Access Token', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tokenid',
            'clientid',
            'appkey',
            'orgid',
            'uid',
            // 'validity',
            // 'createtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
