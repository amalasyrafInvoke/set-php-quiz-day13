<html>

<head>
  <title>Classes Demo</title>
</head>

<body>
  <?php

  class Invoke {
    public $studentList;
    public function __construct($studentList) {
      $this-> studentList = $studentList;
    }

    public function showList() {
      foreach($this -> studentList as $student) {
        echo $student->name . ' has bag color of ' . $student->bagColor .' <br>';
      }
    }
  }

  class Student {
    public $name;
    public $bagColor;

    public function __construct($name, $bagColor)
    {
      $this->name = $name;
      $this->bagColor = $bagColor;
    }
    // protected function getBag($color) {
    //   $this->bagColor = $color;
    // }
  }

  // class Bag {
  //   public $color;

  //   public function 
  // }

  $studentList = [
    new Student('hafiy', 'black'),
    new Student('amir', 'red'),
    new Student('fikri', 'black'),
    new Student('azizi', 'black'),
    new Student('zhafri', 'yellow')
  ];

  $invoke = new Invoke($studentList);
  echo $invoke -> showList();

  

  ?>
</body>

</html>