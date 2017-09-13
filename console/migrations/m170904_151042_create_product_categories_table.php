<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_categories`.
 */
class m170904_151042_create_product_categories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_categories', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->null(),
            'name' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_categories');
    }
}
