<?php 
namespace Controller;
abstract class UserController{
    abstract public function verifyUser(string $_login, string $_senha);

}