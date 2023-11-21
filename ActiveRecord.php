<?php
/**
 * @copyright Copyright (c) 2023 Didik Irawan
 */

namespace ddkirawan\clickhouse;

use bashkarev\clickhouse\ActiveRecord as ClickhouseActiveRecord;
use Yii;

abstract class ActiveRecord extends ClickhouseActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function getDb()
    {
        return Yii::$app->get('clickhouse');
    }

    /**
     * @return ActiveQuery
     */
    public static function find()
    {
        return new ActiveQuery(get_called_class());
    }

}