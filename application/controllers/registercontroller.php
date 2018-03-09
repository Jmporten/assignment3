<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 3/9/2018
 * Time: 3:04 PM
 */

class RegisterController extends Controller{

    public $userObject;

    public function defaultTask(){
        $userObject = new Users();
        $this->set('task','add');
    }

    public function add(){
        $this->userObject = new Users();
        $data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$_POST['password']);
        $this->userObject->addUser($data);
        $this->set('message', 'Thanks for registering!');
    }
}