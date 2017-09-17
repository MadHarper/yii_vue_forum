<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $slug
 * @property integer $posts
 * @property boolean $active
 * @property string $desc
 *
 * @property Category $parent
 * @property Category[] $categories
 * @property Theme[] $themes
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'posts'], 'integer'],
            [['name', 'slug', 'active'], 'required'],
            [['active'], 'boolean'],
            [['desc'], 'string'],
            [['slug'], 'unique'],
            [['name'], 'string', 'max' => 150],
            [['slug'], 'string', 'max' => 50],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'slug' => 'Slug',
            'posts' => 'Posts',
            'active' => 'Active',
            'desc' => 'Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChilds()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThemes()
    {
        return $this->hasMany(Theme::className(), ['category_id' => 'id']);
    }


    public function fields()
    {
        return [
            'name'      => 'name',
            'childs'    => 'childs',
            'slug'      => 'slug',
            'link'      => function ($model) {
                return '/' . $model->slug;
            },
            'themes'      => function ($model) {
                return $model->themes;
            },
        ];
    }
}
