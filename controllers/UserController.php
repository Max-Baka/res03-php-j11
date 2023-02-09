<?php
    class UserController extends AbstractController{
        private UserManager $manager;
        
        private function _construct()
    {
        $this->manager = new UserManager();
        
    }
        
        public function index(){
            $users = $this->manager->getAllUsers();
            $this->render("index",["users"=>$users]);
        }
        
    }