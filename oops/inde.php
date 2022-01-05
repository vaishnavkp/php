   <?php 
   class fruit {
   	public $name;
   	public $color;

   	function set_name($name) {
   		$this->name = $name;
   	}
   	function set_color($color) {
   		$this->color = $color;
   	}
   	// function get_name() {
   	// 	return $this->name;
   	// }
   	function get_color() {
   		return $this->color;
   	}
   }

   $apple = new fruit();
   $banana = new fruit();
   $apple->set_name("Apple"); // $apple->name = 'Apple';
   $banana->set_name("banana");
   $apple->set_color('red');
   $banana->set_color('yellow');
   echo $apple->name;
   echo "<br>";
   echo $banana->name; 
   echo "<br>";
   echo $apple->get_color();
   echo "<br>";
 
   echo $banana->get_color();
echo "<br>";

   class car {
   	public $n;
   	public $c;
     function __construct($n,$c) {
     	$this->n = $n;
     	$this->c = $c;
     }
     function get_n() {
     	return $this->n;
     }
     function get_c() {
     	return $this->c;
     }


   }
 
   $audi = new car('Audi','White');
   echo $audi->get_n();
   echo "<br>";
   echo $audi->get_c();



    ?>