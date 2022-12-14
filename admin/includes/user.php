<?php

class User extends Db_object {


    protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_all() {
        
        return static::find_by_query("SELECT * FROM " . static::$db_table . " ");
    }


    public static function find_by_id($user_id) {
        global $database;

        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . "WHERE id = '$user_id' LIMIT 1");

        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }

    
    public static function find_by_query($sql) {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();

        while($row = mysqli_fetch_array($result_set)) {

            $the_object_array[] = static::instantiation($row);
            
        }

        return $the_object_array;
    }

    public static function verify_user($username, $password) {

        global $database;

        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        
        $sql = "SELECT * FROM " . static::$db_table . "WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND  password = '{$password}' " ;
        $sql .= "LIMIT 1";

        $the_result_array = static::find_by_query($sql);

        return !empty($the_result_array) ? array_shift($the_result_array) : false;


    }

    public static function instantiation($the_record) {
        
        $calling_class = get_called_class();
        $the_object = new $calling_class;

        foreach ($the_record as $the_attribute => $value) {
            if($the_object->has_the_attribute($the_attribute)) {

                $the_object->$the_attribute = $value;
            }
        }
        
        return $the_object;
    }


    private function has_the_attribute($the_attribute) {
        $object_properties = get_object_vars($this);

        return array_key_exists($the_attribute, $object_properties);
    }

   

    
}



?>