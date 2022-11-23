<?php

    class PokerDice {
        //Atributos de clase
        protected $figura;
        protected $dado;
        protected static $i;
    //un atributo de contar tiradas en la clase

        //Metodos
        public function throw() {
            $this->dado = mt_rand(1, 6);
            $this->i++;
            echo "el num aleatorio es: " . $this->dado;
            echo "<br>";
            echo $this->i;
            echo "<br>";

        }

        public function shapeName() {
            $this->dado;
            $this->figura = "";

            switch ($this->dado){

                case 1:
                    $this->figura = "As";
                    break;
                case 2:
                    $this->figura = "K";

                    break;
                case 3:
                    $this->figura = "Q";
                    break;
                case 4:
                    $this->figura = "J";
                    break;
                case 5:
                    $this->figura = 8;
                    break;
                case 6:
                    $this->figura = 7;
                    break;
            }
            
            echo "La figura es :" . $this->figura;
            echo "<br>";
            
   
        }

        public function getTotalThrows() {
            echo $this->i;
            echo "<br>";
        }

    }

    $s1 = new PokerDice();
    $s1->throw();
    $s1->shapeName();
    echo "<br>";

    $s1->throw();
    $s1->shapeName();
    echo "<br>";

    $s2 = new PokerDice();
    $s2->throw();
    $s2->shapeName();
    echo "<br>";

    $s3 = new PokerDice();
    $s3->throw();
    $s3->shapeName();
    echo "<br>";

    $s4 = new PokerDice();
    $s4->throw();
    $s4->shapeName();
    echo "<br>";

    $s5 = new PokerDice();
    $s5->throw();
    $s5->shapeName();
    echo "<br>";

    echo $s5->getTotalThrows();

?>