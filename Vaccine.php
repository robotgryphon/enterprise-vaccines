<?php
	// Require the IPreparable interface, used for extraction for the lulz
	require_once "IPreparable.php";
	require_once "PreparationState.php";

	/**
	 * A Vaccine implements IPreparable; it has a prepared state and some information
	 * about what it is.
	 */
	class Vaccine implements IPreparable { 
		public $code;
		public $description;
		public $valid;
		public $prepared;
		
		/**
		 * Create a new instance of a Vaccine.
		 */
		function __construct() {
			$this->prepared = PreparationState::UNPREPARED;
		}

		/**
		 * Output the preparation state to an HTML body.
		 */
		public function getPreparationState($descriptions){
			if(!($descriptions instanceof DescriptionLoader))
				throw new Exception();

			return $descriptions->getDescriptionForState($this);
		}
		
		public function getPrepareState() {
			return $this->prepared;
		}

		function prepare(){
			$this->prepared = PreparationState::PREPARED;
		}
	}
?>