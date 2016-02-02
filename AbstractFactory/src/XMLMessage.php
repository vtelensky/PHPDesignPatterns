<?php
	class XMLMessage extends Message {
		public function __construct($content) {
			parent::__construct($content);
		}
		
		public function __toString() {
			$string = '<?xml version="1.0"?>';
			$string .= '<message>';
			$string .= '<sender>' . $this->getSender() . '</sender>';
			  
			$string .= '<receivers>';
			foreach ($this->getReceivers() as $receiver) {
				$string .= '<receiver>' . $receiver . '</receiver>';
			}
			$string .= '</receivers>';
			
			$string .= '<content>' . $this->getContent() . '</content>';
			$string .= '</message>';
			return $string;
		}
	}
?>