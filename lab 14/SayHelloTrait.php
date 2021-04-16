<?php
trait SayHelloTrait{
    public function SayHello(){
        echo "hello!" . ' ' ."my name is:" . ' ' . $this->name .'<br>'  . "my color is:" . ' ' . $this->color . '<br>' . "my type is:" . ' ' . $this->type . '<br>';
    }
}
?>