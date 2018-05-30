<?php

use yii\db\Migration;

class m164985_167953_group extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		$this->createTable('group', [
            'grup_id' => $this->primaryKey(),
            'grup_ad' => $this->string(200)->notNull(),
			'grup_uyeler' => $this->text()->notNull(),
            'grup_aciklama' => $this->text(),
        ]);

        $this->insert('group', [
            'grup_id' => '1',
            'grup_ad' => 'A Grubu',
			'grup_uyeler' => 'Ali,Veli,Mehmet,Aslı',
            'grup_aciklama' => 'Web Programlama dersi 1.grup',
        ]);
		
		$this->insert('group', [
            'grup_id' => '2',
            'grup_ad' => 'B Grubu',
			'grup_uyeler' => 'Mehmet,Ayşe,Selim,Emel',
            'grup_aciklama' => 'Web Programlama dersi 2.grup',
        ]);
		
		$this->insert('group', [
            'grup_id' => '3',
            'grup_ad' => 'C Grubu',
			'grup_uyeler' => 'Demir,Bengü,İrem,Can',
            'grup_aciklama' => 'Web Programlama dersi 3.grup',
        ]);
		
		$this->insert('group', [
            'grup_id' => '4',
            'grup_ad' => 'D Grubu',
			'grup_uyeler' => 'Ahmet,Mustafa,Eren,İrem',
            'grup_aciklama' => 'Web Programlama dersi 4.grup',
        ]);
		
		$this->insert('group', [
            'grup_id' => '5',
            'grup_ad' => 'E Grubu',
			'grup_uyeler' => 'Yasemin,Yıldız,Ezgi,Sinem',
            'grup_aciklama' => 'Web Programlama dersi 5.grup',
        ]);
    }
	

    public function down()
    {
        $this->dropTable('{{%group}}');
    }
	
	
	
}
