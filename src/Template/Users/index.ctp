
    <h1> ini adalah Indexs </h1>
    <?= $this->html->link('Add User',['action'=>'add'])?>
    <table>
      <tr>
        <th>bil</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Action</th>
      </tr>

      <?php $i=1; ?>
        <?php foreach ($users as $user): ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= $user->name ?></td>
              <td><?= $user->email ?></td>
              <td>
                  <?= $this->html->link('View',['action'=>'view',$user->id]) ?>
                  <?= $this->html->link('Edit',['action'=>'edit',$user->id]) ?>
                  <?= $this->html->link('Delete',['action'=>'delete',$user->id],['confirm'=>'Are You Sure to Delete?']) ?>
              </td>
          </tr>
          <?php $i++; ?>
      <?php endforeach; ?>
    </table>
