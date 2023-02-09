<?php
    class UserController extends AbstractController{
        private UserManager $manager;
        
        public function index(){
            $users = $this->manager->getAllUsers();
            $this->render("index",["users"=>$users]);
        }
        
    }