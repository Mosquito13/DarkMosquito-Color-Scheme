
<?php
    use Test\Test2\MyNamespace;
    namespace MyNamespace;

    class MyClass extends MyParentClass implements MyInterface {

        const TEST = 1;

        /**
         * A boolean
         * @var boolean
         */
        private $myBoolean;

        /**
         * A string
         * @var String
         */
        protected $myString;

        /**
         * An Array
         * @var array
         */
        public $myArray;

        public function __construct() {
            global $anyGlobal;
            
            parent::staticCall();

            self::TEST;
            
            $this->myBoolean = false;

            $this->myString = "str";

            $this->myArray = array(
                1     => "value1";
                "key" => "value2";
            );

            $sql = "SELECT
                        A.FIELD_A, COUNT(A.FIELD_B) AS COUNT_FIELD_B
                    FROM
                        TABLE A
                    WHERE
                        A.FIELD_C = 1 OR
                        A.FIELD_D LIKE 'ANYTHING'
                    GROUP BY
                        FIELD_A";

            $anotherBoolean = $this->myFunction();
            
            myGlobalFunction();
        }

        /**
         * A function
         * @param  boolean $param
         * @return boolean
         */
        private function myFunction($param) {
            if($param === null || is_bool($param)) {
                return $param;
            }
            return false;
        }
    }
?>
