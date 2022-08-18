<?php
class Point
{
    private $x;
    private $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString()
    {
        return "(" . $this->x . ":" . $this->y . ")";
    }
    public function __get($index)
    {
        //echo "!".$index."!";
        if ($index == "xCoord") {
            echo "!".$this->x."!";
        }
    }
}
$p = new Point(100, 200);
//echo $p . '<br/>';
echo "[".$p->xCoord."]";
echo "some changes";
echo "____";
print_r(PDO::getAvailableDrivers());
