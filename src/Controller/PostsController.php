<?php

  namespace App\Controller;

  use App\Controller\AppController;

  class PostsController extends AppController
  {
    public function index()
    {
      $this->paginate = [
          'contain' => ['Users']
      ];

      $posts = $this->paginate($this->Posts);
      //pr($posts->toArray());exit;
      $this->set(compact('posts'));
      $this->set('_serialize', ['posts']);
    }


    //add post
    public function add(){
      $post = $this->Posts->newEntity();
      if ($this->request->is('post')) {
        $post = $this->Posts->patchEntity($post, $this->request->getData());
            //4-save rekod baru ke database table
            if ($this->Posts->save($post)) {
              //5- papar berjaya
              $this->Flash->success(__('The post has been saved test.'));
              //6 - redirect ke index
              return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $users = $this->Posts->Users->find('list', ['limit' => 200]);
        //pr($users->toArray());exit;

        //hantar data to tample
        $this->set('post',$post);
        $this->set('users',$users);
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Users']
        ]);
        //pr($post);exit;

        /*$post = $this->Post->find()
        ->contain([
            'Users'
          ])
        ->where([
            'Post.id' => $id
        ])
        ;
        pr($post);exit;
        */
        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

    //add post
    public function edit($id = null){

      $post = $this->Posts->get($id, [
          'contain' => []
      ]);

      if ($this->request->is(['patch', 'post', 'put'])) {
          $post = $this->Posts->patchEntity($post, $this->request->getData());
          if ($this->Posts->save($post)) {
              $this->Flash->success(__('The post has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The post could not be saved. Please, try again.'));
      }
        $users = $this->Posts->Users->find('list', ['limit' => 200]);
        //pr($post->toArray());exit;
        $this->set(compact('post', 'users'));
        $this->set('_serialize', ['post']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



  }
?>
