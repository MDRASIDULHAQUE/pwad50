
<?php
class testStatic{
     
  public static $x = 0;
 
   
  static public function counter(){
      self::$x++;
      echo "<br>". self::$x; // accessing static Property inside class
  }
  
}
// Calling Static Method Outside Class
echo testStatic::$x; 
testStatic::counter();
testStatic::counter();
testStatic::counter();
?>