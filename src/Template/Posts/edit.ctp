<h1>Edit Posts</h1>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
          <?= $this->Form->control('title'); ?>
          <?= $this->Form->control('body'); ?>
          <?= $this->Form->control('status'); ?>
          <?= $this->Form->control('user_id',['options' => $users]); ?>
      <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
