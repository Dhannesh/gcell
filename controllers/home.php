<?php
class Home extends Controller{
    protected function Index(){
        $viewmodel=new HomeModel();
      
        $this->returnView($viewmodel->login(),true);
    }
   
    protected function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('Location: '.ROOT_URL);
    
    
    }
}