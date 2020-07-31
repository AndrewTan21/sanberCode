<?php
    class Ape extends Animal {
        public $suara = "Auooo";

        public function __construct($name = "Ape") {
            parent::__construct($name);
        }

        public function yell() {
            return $this->suara;
        }
    };
?>