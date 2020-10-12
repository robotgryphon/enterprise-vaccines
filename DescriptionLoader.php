<?php

    require_once("IPreparable.php");

    class DescriptionLoader {

        private $locale;
        
        function __construct($locale) {
            $this->locale = $locale;
        }

        public function getDescriptionForState($preparable) {
            if(!($preparable instanceof IPreparable)) {
                return "Object passed is not an instance of an IPreparable object.";
            }

            $state = $preparable->getPrepareState();
            switch($state) {
                case PreparationState::PREPARED:
                    return "Successfully vaccinated!";

                case PreparationState::UNPREPARED:
                    return "Prepare the vaccine before application!";

                default:
                    return "Unknown preparation state.";
            }
        }
    }

?>