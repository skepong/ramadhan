
    <h1> ini adalah Indexs </h1>
    <table>
      <tr>
        <th>Nama</th>
        <th>Email</th>
      </tr>
      <?php foreach ($users as $user): ?>
          <tr>
              <td><?php echo $user->name ?></td>
              <td><?php echo $user->email ?></td>
          </tr>
      <?php endforeach; ?>

    </table>
