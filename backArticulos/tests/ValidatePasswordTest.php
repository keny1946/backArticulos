<?php
    class ValidatePasswordTest extends PHPUnit_Framework_Testcases{

        public function testValidLenght(){
            $valPass = new ValidatePassword();
            $this->assertFalse($valPass->validLenght('1234'));

        }
    }
?>
