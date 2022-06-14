<?php
    class ValidatePassword{
        const MIN_LENGHT = 6;
        const MAX_LENGHT = 20;

        public function validateLenght($password){
            $passLenght = strlen($password);
            return $passLenght >= self::MIN_LENGHT && $passLenght <= self::MAX_LENGHT;
        }
    }
?>
