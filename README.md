# test_static_in_extends

只是想要試著看看  如果static 在class裡面的話 繼承的類別是否跟父類別共用
User::set_db(3) 
User::get_db() : 3
Model::get_db() : 3
Order::get_db() : 3


User::set_db(2) 
User::get_db() : 2
Model::get_db() : 2
Order::get_db() : 2


Model2::set_db(2) 
User2::get_db() : 2
Model2::get_db() : 2
Order2::get_db() : 2


