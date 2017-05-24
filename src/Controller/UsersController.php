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

    public function view($id=null)
    {
      if($id==null){
        die ('No Data');
      }
      else {
        $user = $this->Users->get($id);
        //pr($user);
        $this->set('user', $user);
      }
    }

    //add user
    public function add(){

      //1-bagitau cake nak buat rekod baru
      $user = $this->Users->newEntity();
      //2-check ada post tak
      if ($this->request->is('post')) {
        //pr($this->request->data);exit;
        //3-masukkan data dari form ke rekod baru
        $user = $this->Users->patchEntity($user, $this->request->getData());
            //4-save rekod baru ke database table
            if ($this->Users->save($user)) {
              //5- papar berjaya
              $this->Flash->success(__('The user has been saved.'));
              //6 - redirect ke index
              return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      //$this->set(compact('user'));
      //$this->set('_serialize', ['user']);
    }

    public function edit($id=null)
    {
      /*if($id==null){
        die ('No Data');
      }
      else {
        $user = $this->Users->get($id);
        //pr($user);exit;
        $this->set('user', $user);
      }
    }
*/
      $user = $this->Users->get($id, [
          'contain' => []
      ]);

      //check form data
      if ($this->request->is(['patch', 'post', 'put'])) {
          //pr($this->request->data);exit; //check dulu structure data

          //assign edited data kepada data asal
          $user = $this->Users->patchEntity($user, $this->request->getData());

          //save edited data ke database table
          if ($this->Users->save($user)) {

            //buat redirect dan papar mesej success
              $this->Flash->success(__('The Users has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The Users could not be saved. Please, try again.'));
      }
      $this->set(compact('user'));
      $this->set('_serialize', ['user']);
    }

    public function delete($id = null)
    {
        $user = $this->Users->get($id);

        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The User has been deleted.'));
        } else {
            $this->Flash->error(__('The User could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

  }
?>
