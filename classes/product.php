<?php

//if im being perfectly honest here im not sure if this is how abstract classes should be used. I just needed an excuse to toy with it for purpose practices. 
abstract class Product
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    abstract public function getDescription();
}

class Apparel extends Product
{

    public function __construct($name, $category)
    {
        parent::__construct($name, $category);

    }
    public function getDescription()
    {
        $extrahtml = "<h3 class='white'>Size</h3>
                    <select name='size'>
                        <option value='Small'>Small</option>
                        <option value='NORMIE' selected>Regular</option>
                        <option value='Large'>Large</option>
                        <option value='Extra Large'>Extra Large</option>
                        <option value='Fetus'>Fetus</option>
                        <option value='Supersize'>Supersize</option>
                        <option value='Bitch Size'>No! How rude of you to ask!</option>
                        <option value='With Chips'>With a side of chips</option>
                        <option value='It doesn't matter anyways :('>I hate my life</option>
                    </select>";
        return $extrahtml;
    }
}

class Accessories extends Product
{

    public function __construct($name, $category)
    {
        parent::__construct($name, $category);
    }

    public function getDescription()
    {
        $extrahtml = "<input type='hidden' name='size' value='Generic'>";
        return $extrahtml;
    }
}