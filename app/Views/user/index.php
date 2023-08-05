<div class="h-screen w-screen">
    <?php if (!empty($user)): ?>

        <h1>
            <?= esc($user['username']) ?>
        </h1>

    <?php else: ?>
        <h1>NO USER</h1>
    <?php endif ?>
</div>