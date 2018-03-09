<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 3/9/2018
 * Time: 3:35 PM
 */

class MembersController extends Controller
{
    public $userObject;

    public function view($uID){
        $this->userObject = new Users();
        $user = $this->userObject->getUser($uID);
        $this->set('user',$user);
    }

    public function defaultTask(){
        $this->userObject = new Users();
        $users = $this->userObject->getAllUsers();
        $this->set('title', 'Members');
        $this->set('users',$users);
    }
}