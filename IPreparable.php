<?php

    interface IPreparable {
        public function prepare();
        public function getPrepareState();
        public function getPreparationState($descriptionLoader);
    }

?>