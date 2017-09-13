<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_categories".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 */
class ProductCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
        ];
    }


    public function getChilds(){
        return self::find()->where(['parent_id' => $this->id])->all();
    }

    /**
     * @inheritdoc
     * @return ProductCategoriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductCategoriesQuery(get_called_class());
    }
}
