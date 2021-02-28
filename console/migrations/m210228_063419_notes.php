<?php

use yii\db\Migration;

/**
 * Class m210228_063419_notes
 */
class m210228_063419_notes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210228_063419_notes cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('notes', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'text' => $this->string(),
            'userid' => $this->integer(),
            'date' => $this->date(),
        ]);
    }

    public function down()
    {
        $this->dropTable('notes');
    }
    
}
