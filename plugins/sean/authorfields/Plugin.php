<?php namespace Sean\AuthorFields;

use System\Classes\PluginBase;
use Backend\Models\User as BackendUserModel;
use Backend\Controllers\Users as BackendUsersController;

class Plugin extends PluginBase
{
    public $require = ['Backend.Models.User'];

    public function boot()
    {
        // Add college and teacher field to Users table
        BackendUserModel::extend(function($model){
            $model->belongsTo['teacher'] = ['Ex\Vct\Models\Teacher'];
            $model->belongsTo['college'] = ['Ex\Vct\Models\College'];
        });

        // Add college and teacher field to Users form
        BackendUsersController::extendFormFields(function($form, $model, $context){

            if (!$model instanceof BackendUserModel)
                return;


            $form->addTabFields([
                'teacher' => [
                    'label'   => 'Teacher',
                    'comment' => 'Associate this user with a teacher.',
                    'type' => 'recordfinder',
                    'list' => '$/ex/vct/models/teacher/columns.yaml',
                    'prompt' => 'Click the %s to find a teacher',
                    'select' => 'concat(first_name, " ", last_name)',
                    'tab' => 'account'
                ],
                'college' => [
                    'label'   => 'College',
                    'comment' => 'Associate this user with a college.',
                    'type' => 'recordfinder',
                    'list' => '$/ex/vct/models/college/columns.yaml',
                    'prompt' => 'Click the %s to find a college',
                    'nameFrom' => 'name',
                    'tab' => 'account'
                ],
            ]);
        });
    }