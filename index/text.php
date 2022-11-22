<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Fruit
{
  // Properties
  public $name;
  public $color;
  public $a , $b;
  

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function set_sum($a ,$b){
  $this->sum = $a+$b;
  }
  
  function get_name() {
    return $this->name;
  }
  function get_sum(){
  return $this->sum;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

$add = new Fruit();
$add->set_sum("a" ,"b");
echo $add->get_sum();
echo "<br>";

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
 
</body>
</html>