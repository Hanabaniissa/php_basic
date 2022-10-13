<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts}}`.
 */
class m221013_091724_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
        CREATE TABLE posts(
            id int AUTO_INCREMENT PRIMARY KEY,
            title varchar(255) not null ,
            description varchar(255) not null ,
            phone int not null , 
            user_id int not null,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            created_by int not null,
          
        )
     CREATE TABLE category(
         category_ID int AUTO_INCREMENT PRIMARY KEY,
         category_parent int not null,
         category_name varchar(50) not null,
         category_dec varchar(255) not null
          
     )
        
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%posts}}');
    }
}
