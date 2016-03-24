<?php
    namespace MyNamespace;

    class MyClass extends MyParentClass {

        /**
         * A Boolean attribute
         * @var boolean
         */
        private $myBoolean;

        /**
         * A String attribute
         * @var string
         */
        private $myString;

        /**
         * An Array attribute
         * @var array
         */
        private $myArray;

        public function __construct() {
            global $anyGlobal;

            $this->myBoolean = false;

            $this->myString = "str";

            $this->myArray = array(
                1     => "value1",
                "key" => "value2"
            );

            $sql = "SELECT A.FIELD_A, COUNT(B.FIELD_B) AS COUNT_FIELD_B
                    FROM TABLE A
                    WHERE A.FIELD_C = 1
                    GROUP BY FIELD_A";

            $anotherBoolean = $this->myFunction();
        }

        /**
         * A function
         * @param  boolean $parameter
         * @return boolean
         */
        private function myFunction( $parameter ) {
            if($parameter === null || is_bool($parameter)) {
                return $parameter;
            }
            return false;
        }

    }
?>