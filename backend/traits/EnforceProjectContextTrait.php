<?php
namespace backend\traits;
use yii;
use backend\models\Project;



trait EnforceProjectContextTrait
{
    public function loadProject($project_id)
    {
        if (($model = Project::findOne($project_id)) !== null) {
            return $model;
        } else {
            throw new ForbiddenHttpException('You must select a valid project.');
        }
    }
}