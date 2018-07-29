<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'label' => 'Связанный аккаунт',
            'value' => function($model){
                return $model->id_account;
            }
        ],
        [
            'label' => 'Ф.И.О.',
            'value' => function($model){
                return $model->surname.' '.$model->name.' '.$model->last_name;
            }
        ],
        [
            'label' => 'Контакты',
            'format' => 'raw',
            'value' => function($model){
                $st = '';
                if($model->phone != '') $st .= '<p style="margin: 0px;">Тел.: <a href="tel:'.$model->phone.'">'.$model->phone.'</a></p>';
                if($model->mobile_phone != '') $st .= '<p style="margin: 0px;">Моб..: <a href="tel:'.$model->mobile_phone.'">'.$model->mobile_phone.'</a></p>';
                if($model->email != '') $st .= '<p style="margin: 0px;">Тел.: <a href="mailto:'.$model->email.'">'.$model->email.'</a></p>';
                if($model->skype != '') $st .= '<p style="margin: 0px;">Skype: <a href="skype:'.$model->skype.'">'.$model->skype.'</a></p>';

                return $st;
            }
        ]
        //*['id_account' =>
        //*['name' =>
        //*['surname' =>
        //*['last_name' =>
        //['phone' =>
        //['mobile_phone'
        //['email' =>
        //['photo' =>
        //['website' =>
        //['balance' =>
        //['rate' =>
        //['comment' =>
        //['create_at' =>
        //['is_active' =>
    ],
]);