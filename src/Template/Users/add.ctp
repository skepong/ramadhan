<h1>Create New User</h1>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
          <?= $this->Form->control('name'); ?>
          <?= $this->Form->control('username'); ?>
          <?= $this->Form->control('password'); ?>
          <?= $this->Form->control('email'); ?>
          <?= $this->Form->control('status'); ?>
      <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
