<?php
class content
{
    public $text;
    public static $total;

    function __construct($content)
    {
        $this->text = $content;
        $this->total = 0;
    }

    public static function vote()
    {
        self::$total++;
    }

}


$foo = new content("hai");
echo "<pre>";
print_r($foo);
echo "</pre>";

$foo::vote();

echo "<pre>";
print_r($foo);
echo "</pre>";
?>