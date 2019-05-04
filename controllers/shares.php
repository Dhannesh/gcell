<?php

class Shares extends Controller{

    protected function Index(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL);
        }
        $viewmodel=new ShareModel();
        $this->returnView($viewmodel->Index(),true);
    }

    protected function show(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL);
        }
        $viewmodel=new ShareModel();
        $this->returnView($viewmodel->show(),true);
    }

    protected function details(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL);
        }
        $viewmodel=new ShareModel();
        $this->returnView($viewmodel->details(),true);
    }

    protected function delete(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL);
        }
        $viewmodel=new ShareModel();
        $this->returnView($viewmodel->delete(),true);
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL);
        }
        $viewmodel=new ShareModel();
        $this->returnView($viewmodel->add(),true);
    }
    
        protected function update(){
        if($_SESSION['user_data']['name']!='admin'){
            header('Location: '.ROOT_URL);
        }
        $viewmodel=new ShareModel();
        $this->returnView($viewmodel->update(),true);
    }
}