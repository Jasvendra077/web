<?php
class factorial_of_a_number
{
  protected $_n;
  public function __construct($num)
   {
     if (!is_int($num))
       {
          throw new InvalidArgumentException('Not a number');
       }
    $this->_n = $num;
    }
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
      {
        $factorial *= $i;
      }
       return $factorial;
     }
 }

$factorial = New factorial_of_a_number(7);
echo $factorial->result();
?>
