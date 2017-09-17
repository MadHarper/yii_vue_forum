<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $theme_id
 * @property integer $author_id
 * @property string $text
 * @property boolean $blocked
 * @property string $created
 * @property string $updated
 * @property integer $column_8
 *
 * @property Theme $theme
 * @property User $author
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['theme_id', 'author_id', 'column_8'], 'integer'],
            [['author_id', 'text', 'created', 'updated'], 'required'],
            [['text'], 'string'],
            [['blocked'], 'boolean'],
            [['created', 'updated'], 'safe'],
            [['theme_id'], 'exist', 'skipOnError' => true, 'targetClass' => Theme::className(), 'targetAttribute' => ['theme_id' => 'id']],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'theme_id' => 'Theme ID',
            'author_id' => 'Author ID',
            'text' => 'Text',
            'blocked' => 'Blocked',
            'created' => 'Created',
            'updated' => 'Updated',
            'column_8' => 'Column 8',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTheme()
    {
        return $this->hasOne(Theme::className(), ['id' => 'theme_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
}
