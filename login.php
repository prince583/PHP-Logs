<?php

//Create a Class

class log{
    public $action;
    public $message;

    //For write data

    public function write($action,$message){
        if(file_exists("loged.txt")){
        echo file_put_contents("loged.txt",date("Y-m-s"),FILE_APPEND);
        echo file_put_contents("loged.txt",date("h:i:s"),FILE_APPEND);
        echo file_put_contents("loged.txt","$action,$message\n",FILE_APPEND);
        }
        else{
            echo "File does not exist";
        }

    }

    //For read data

    public function read(){
        if(file_exists("loged.txt")){
        echo file_get_contents(loged.txt);
        }
        else{
            echo "File not found";
        }

    }
}
//Create object of Class

$ob=new log();
$ob->write(" | Action : Login | , Message : User has been Login");
$ob->write(" | Action : Logout | , Message : User has been Logout");
$ob->write(" | Action : Login | , Message : User has been Login");
$ob->write(" | Action : Logout | , Message : User has been Logout");
$ob->read();






