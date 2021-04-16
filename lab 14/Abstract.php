<?php
abstract class Pet implements SayGoodBye {
    abstract public function getValue();

    public function printValue()
    {
        echo 'Які ми тварини: ' . $this->getValue() . '<br>';
    }

    public function GoodBye(): string
    {
        return "Good Bye";
    }
}
?>