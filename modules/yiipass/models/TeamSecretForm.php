<?php
/**
 * Created by Peter Majmesku.
 * E-Mail: p.majmesku@gmail.com
 * Date: 28.07.15
 * Time: 06:52
 */

namespace app\modules\yiipass\models;

use yii\base\Model;

class TeamSecretForm extends Model
{

    public $teamSecret;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['teamSecret'], 'required']
        ];
    }

}
