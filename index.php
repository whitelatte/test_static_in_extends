<?php
abstract class Model
{
    protected static $db;

    public static function set_db($db)
    {
        self::$db = $db;
    }

    public static function get_db()
    {
        return self::$db;
    }
}

class Order extends Model
{
}

class User extends Model
{
    public static function show_1()
    {
     return 3;
    }
}


User::set_db(3);
echo 'User::set_db(3) <br>' ; 
echo 'User::get_db() : ' . User::get_db() . '<br>'; 
echo 'Model::get_db() : ' . Model::get_db() . '<br>'; 
echo 'Order::get_db() : ' . Order::get_db() . '<br>'; 
echo '<br> <br> ' ; 

Model::set_db(2);
echo 'User::set_db(2) <br>' ; 
echo 'User::get_db() : ' . User::get_db() . '<br>'; 
echo 'Model::get_db() : ' . Model::get_db() . '<br>'; 
echo 'Order::get_db() : ' . Order::get_db() . '<br>'; 
echo '<br> <br> ' ; 

abstract class Model2
{
    protected static $db;

    public static function set_db($db)
    {
        self::$db = $db;
    }

    public static function get_db()
    {
        return self::$db;
    }
}

class Order2 extends Model2
{
}

class User2 extends Model2
{
    public static function show_1()
    {
     return 3;
    }
}


Model2::set_db(2);
echo 'Model2::set_db(2) <br>' ; 
echo 'User2::get_db() : ' . User2::get_db() . '<br>'; 
echo 'Model2::get_db() : ' . Model2::get_db() . '<br>'; 
echo 'Order2::get_db() : ' . Order2::get_db() . '<br>'; 
echo '<br> <br> ' ; 

