<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 3/9/2018
 * Time: 3:14 PM
 */

class Users extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getUser($uID){
        $sql = 'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
        $user = $this->db->getrow($sql, array($uID));
        return $user;
    }

    public function getAllUsers(){
        $sql = 'SELECT uID, first_name, last_name, email, password FROM users';
        $results = $this->db->execute($sql);
        while ($row=$results->fetchrow()) {
            $users[] = $row;
        }
        return $users;
    }

    public function addUser($data){
        $sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        return 'User has be added to the database.';
    }
}