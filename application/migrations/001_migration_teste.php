<?php

    class Migration_teste extends CI_Migration {
        
        public function add() {

            if (!$this->db->field_exists('logo_usuario', 'usuarios')) {
            
                $this->load->dbforge();

                $campos = [
                    'logo_usuario' => [
                        'type'     => 'varchar(100)',
                        'default'  => 'assets/img/logo.png'
                    ]
                ];

                $this->dbforge->add_column('usuarios', $campos);
            }
        }
    }
?>