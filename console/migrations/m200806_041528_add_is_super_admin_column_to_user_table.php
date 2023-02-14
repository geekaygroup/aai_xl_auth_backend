<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m200806_041528_add_is_super_admin_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'is_super_admin', $this->smallInteger()->notNull()->defaultValue(10));
        
        $this->insert('{{%user}}', [
            'username' => 'treasury_admin',
            'auth_key' => 'vCd4jWYC8P3uVxbTJT8BeVF7nwcJKu1O',
            'password_hash' => '$2y$13$ZFSvwYuqmEw0ao8L6tSdl.av3N.YIPJY67l.GInPm4EfVFdbXVSjy',
            'password_reset_token' => '',
            'email' => 'kuldeepsonawane16@gmail.com',
            'status' => 10,
            'created_at' => 1596467441,
            'updated_at' => 1596467547,
            'verification_token' => 'dfwB9KcFIo7Sqat5sKsA1GENEnivCgOq_1596467441',
            'first_name' => 'Air-Asia',
            'last_name' => 'Admin',
            'is_super_admin' => 10
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'is_super_admin');
    }
}
