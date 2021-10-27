<html>

<head>
  <title>PHP Quiz Day 13</title>
</head>

<body>

  <?php

  class Shop {
    protected $custName;
    protected $itemList;

    public function __construct($name, $list) {
      $this -> custName = $name;
      $this -> itemList = $list;
    }

    public function getItemList($list) {
      $this -> itemList = $list;
    }

    protected function displayDispatchStatement() {
      echo "Errand boy is dispatched to get more item!";
    }
  }

  class Customer extends Shop {

    public function displayStatement() {
      echo "Hello, $this->custName  is buying ";
      foreach ($this -> itemList as $item) {
        echo "$item,  ";
      }
      echo "at the shop! ";

      if ($this-> custName === 'arjun') {
        $this -> displayDispatchStatement();
      }
    }
  }

  // kevin scenario
  $itemKevin = ['book', 'icecream', 'pen'];
  $kevin = new Customer('kevin', $itemKevin);
  echo $kevin -> displayStatement();

  // fikri
  echo "<br><br>";
  $itemFikri = ['nasi lemak', 'roti gardenia', 'coffee'];
  $fikri = new Customer('fikri', $itemFikri);
  echo $fikri -> displayStatement();

  // arjun
  echo "<br><br>";
  $itemArjun = ['roti canai', 'bottled water', 'tea'];
  $fikri = new Customer('arjun', $itemArjun);
  echo $fikri -> displayStatement();
  ?>
</body>

</html>