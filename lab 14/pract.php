<?php
/*class Monitor {
   private $screenSize;
   private $screenResolution;
   private $screenManufacturer;
   private $screenPrice;

   public function __construct(int $screenSize, string $screenResolution,string $screenManufacturer, int $screenPrice) {
     $this->screenSize = $screenSize;
     $this->screenResolution = $screenResolution;
     $this->screenManufacturer = $screenManufacturer;
     $this->screenPrice = $screenPrice;
   }

   public function setScreenSize(int $screenSize) {
       $this->screenSize = $screenSize;
   }
    public function setScreenResolution(string $screenResolution) {
        $this->screenResolution = $screenResolution;
    }
    public function setScreenManufacturer(string $screenManufacturer) {
        $this->screenManufacturer = $screenManufacturer;
    }
    public function setScreenPrice(int $screenPrice) {
        $this->screenPrice = $screenPrice;
    }

   public function getScreenSize(): int{
       return $this->screenSize;
   }

    public function getScreenResolution(): string{
        return $this->screenResolution;
    }
    public function getScreenManufacturer(): string{
        return $this->screenManufacturer;
    }
    public function getScreenPrice(): int{
        return $this->screenPrice;
    }

    public function printMonitor() {
//       echo 'screenSize:' . $this->screenSize .' ' .  'screenPrice:' . $this->screenPrice . 'грн';
         echo  $this->getMonitorParameters();
    }

    public function getMonitorParameters(): string {
       $parameters = $this->screenSize . ' <br>' . $this->screenResolution . '<br> ' . $this->screenManufacturer . '<br> ' . $this->screenPrice;
       return $parameters;
    }

};

$monitorDell= new Monitor(27,'548489x98458','someone',5647476);
//$monitorDell->setScreenSize(546456);
//$monitorDell->setScreenResolution('565476*67578');
//$monitorDell->setScreenManufacturer('someone');
//$monitorDell->setScreenPrice(53326);
//echo $monitorDell->getScreenSize(), "<br>";
//echo $monitorDell->getScreenResolution(),"<br>";
//echo $monitorDell->getScreenManufacturer(),"<br>";
//echo $monitorDell->getScreenPrice(),"<br>";
//$parameters = $monitorDell->getMonitorParameters();
//echo $parameters;
$monitorDell->printMonitor();*/


/*class Book {
   private $nameOfBook;
    private $countOfPages;
    private $authorOfBook;
    private $editionOfBook;
    private $yearOfEdition;
    public function __construct(string $nameOfBook,int $countOfPages,string $authorOfBook,string $editionOfBook,int $yearOfEdition) {
        $this->nameOfBook = $nameOfBook;
        $this->countOfPages = $countOfPages;
        $this->authorOfBook = $authorOfBook;
        $this->editionOfBook = $editionOfBook;
        $this->yearOfEdition = $yearOfEdition;
    }
   /* public function getNameOfBook(): string{
        return $this->nameOfBook;
    }
    public function getCountOfPages(): int{
        return $this->countOfPages;
    }
    public function getAuthorOfBook(): string{
        return $this->authorOfBook;
    }
    public function getEditionOfBook(): string{
        return $this->editionOfBook;
    }
    public function getYearOfEdition(): int{
        return $this->yearOfEdition;
    }
    public function getPrint1(): string {
        return "name:" . ' ' . $this->nameOfBook . ' ' . "author:" . ' ' . $this->authorOfBook . ' ' . "yearOfEdition:" . ' ' . $this->yearOfEdition;
    }
    public function getPrint2(): string {
        return $this->getPrint1() . ' ' . "pages:" . ' ' .$this->countOfPages;
    }
    public function getPrint3(): string {
        return  $this->getPrint1() . ' ' . "edition:" . ' ' . $this->editionOfBook;
    }
    public function printBook() {
        echo $this->getPrint1() . '<br>';
        echo $this->getPrint2() . '<br>';
        echo $this->getPrint3() . '<br>';
    }
    public function getLeftPages(int $readPages): int {
        return $this->countOfPages - $readPages;
    }

    public function printLeftPages(int $leftPages) {
        echo $leftPages;
    }
};
book = new Book('Kobzar',300,'Shevchenko','Ukraine',1965);
$book2 = new Book('Garry potter',1255,'Someone','USA',1966);
$book->printLeftPages($book->getLeftPages(150));
echo '<br>';
$book2->printLeftPages($book2->getLeftPages(200));*/

include 'SayHelloTrait.php';
include 'SayGoodByeInterface.php';
include 'Abstract.php';


class Animal{
    protected $name;
    protected $color;
    public static function printAge(int $age){
        echo "my age is:" . ' ' . $age . '<br>';

    }
   };

class Wolf extends Animal {
    private $type;
    use SayHelloTrait;

    public function __construct(string $name,string $type,string $color) {
        $this->name = $name;
        $this->type = $type;
        $this->color = $color;
    }

};
$Wolf = new Wolf("Barsik","rare","gray");
$Wolf->SayHello();
Wolf::printAge(5);
$Wolf2 = new Wolf("Snizok","common","white");
$Wolf2->SayHello();

class Wolf2 extends Pet {

    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function echoGoodBye(){
        echo $this->GoodBye();
    }
}
$Wolf = new Wolf2('Вовки');
$Wolf->printValue();
$Wolf->echoGoodBye();

?>