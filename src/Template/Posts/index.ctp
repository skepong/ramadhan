
    <h1> ini adalah Indexs Post </h1>
    <?= $this->html->link('Add Posts',['action'=>'add'])?>
    <table>
      <tr>
        <th>Bil</th>
        <th>Title</th>
        <th>Body</th>
        <th>Status</th>
        <th>User ID</th>
        <th>Action</th>
      </tr>

      <?php $i=1; ?>
        <?php foreach ($posts as $post): ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= $post->title ?></td>
              <td><?= $post->body ?></td>
              <td><?= $post->status ?></td>
              <td><?= $post->has('user') ? $post->user->name : '' ?></td>
              <td>
                  <?= $this->html->link('View',['action'=>'view', $post->id]) ?>
                  <?= $this->html->link('Edit',['action'=>'edit', $post->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
              </td>
          </tr>
          <?php $i++; ?>
      <?php endforeach; ?>
    </table>
