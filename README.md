# test_static_in_extends

index.php    
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


f.php  
計算費式數列用static的差異  上為沒用  下為使用static     

40:165580141 ： 9.06869698     
40:165580141 ： 1.693E-5      

