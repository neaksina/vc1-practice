<?php 
    
    class NotificationsController extends BaseController{
        
        public function index(){
            $this->view('notifications/notification');
        }
    }
?>