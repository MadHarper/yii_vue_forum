<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "theme".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category_id
 * @property boolean $active
 * @property boolean $closed
 * @property boolean $visible
 * @property string $created
 * @property string $updated
 * @property boolean $fixed
 *
 * @property Post[] $posts
 * @property Category $category
 */
class Theme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'theme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'created', 'updated'], 'required'],
            [['title'], 'string'],
            [['category_id'], 'integer'],
            [['active', 'closed', 'visible', 'fixed'], 'boolean'],
            [['created', 'updated'], 'safe'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'active' => 'Active',
            'closed' => 'Closed',
            'visible' => 'Visible',
            'created' => 'Created',
            'updated' => 'Updated',
            'fixed' => 'Fixed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['theme_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
