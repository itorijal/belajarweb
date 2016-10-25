<?php
    class home {
        private $db;
        function __construct()
        {
            require('config/db.php');
            $this->db = $db;
        }

        public function get_all()
        {
            return $this->db->query("SELECT * FROM `data`");
        }
    }
?>
