<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\RecordHelpers;

use yii;
/* @var $this yii\web\View */
/* @var $model backend\models\Task */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            [
                'label' => 'Project Id',
                'value' => 
                function ($searchModel) {
                    return $searchModel->project->name;
                }
            ],
            'status.description',
            [
                'label' => 'Owner Id',
                'value' => RecordHelpers::getUserName($model->owner_id)
            ],
            [
                'label' => 'Requester Id',
                'value' => RecordHelpers::getUserName($model->requester_id)
            ],
            'created_at',
            'updated_at',
            //'created_by',
           // 'updated_by',
           
            [
                'label' => 'Created By',
                'value' => RecordHelpers::getUserName($model->created_by)
            ],
            [
                'label' => 'Updated By',
                'value' => RecordHelpers::getUserName($model->updated_by)
            ],
            
             
        ],
    ]) ?>

</div>
