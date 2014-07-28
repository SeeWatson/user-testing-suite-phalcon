<?php

class RecordingController extends ControllerBase
{

    public function indexAction()
    {
      
    }
    
    public function viewAction($id=1) {
      $this->assets
        ->addJs('js/playback.js');
    
      $recording = new Recording();
      
      $result = $recording->findfirst(array(
        'conditions' => "id = $id AND user_id = 2"
      ));
      
      $this->view->setVar('recordingData',$result->data);
    }
    
    public function saveAction($user=2,$site=1) {
      $this->view->disable();
      
      $recording = new Recording();

      //Store and check for errors
      $result = $recording->save(
        //$this->request->getPost(), 
        array( 
          'user_id' => $user,
          'site_id' => $site,
          'url' => $this->request->getPost('url'),
          'data' => $this->request->getPost('data'),
        )
        //array('user_id','site_id','data')
      );
      
      if($result){
        echo "The record was inserted successfully";
      } else {
        echo "There was a problem";
      }
    }
}

