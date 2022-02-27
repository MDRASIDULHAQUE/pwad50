<?php
    // class simpleClass
    // {
    //   private $x;
    //   protected $y = "Rahim";
    //   public const A = "Something";

    //   public function info()
    //   {
    //       return $this->x="Hello";
    //   }
    // }
    // $obj1 =new simpleClass;
    // echo $obj1->info();
    // echo simpleClass::A;
?>

<?php
//     class simpleClass
//     {
//       private $x;
//       protected $y = "Rahim";
//       public const A = "Something";

//       static public function info()
//       {
//           return"Hello";
//       }
//     }
//     //$obj1 =new simpleClass;
//    // echo $obj1->info();
//     echo simpleClass::info();
?>
<?php
//scope resolution operator
    class simpleClass
    {
      static protected $x="Hello";
      protected $y = "Rahim";
      public const A = "Something";

      static public function info()
      {
          return self::$x;
          return self::$x;
      }
    }
    //$obj1 =new simpleClass;
   // echo $obj1->info();
    echo simpleClass::info();
?>