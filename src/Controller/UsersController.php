<?php

  namespace App\Controller;

  use App\Controller\AppController;

  class UsersController extends AppController
  {
    public function index()
    {
      $users = $this->paginate($this->Users);

      //pr($users);

      $this->set('users', $users);
      //$this->set(compact('users'));
      //$this->set('_serialize', ['users']);
    }
  }

?>
