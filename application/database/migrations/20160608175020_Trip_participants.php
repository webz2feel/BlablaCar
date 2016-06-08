<?php

class Migration_Trip_participants extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'MEDIUMINT',
                'unsigned' => TRUE,
                'constraint' => 8
            ),
            'trip_id' => array(
                'type' => 'INT',
                'constraint' => 11
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(id)');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (trip_id) REFERENCES trips(id)');
        $this->dbforge->create_table('trip_participants');
    }

    public function down() {
        $this->dbforge->drop_table('trip_participants');
    }

}
