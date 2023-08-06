<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/user/create" method="post" class="w-11/12 mx-auto mt-8 p-2 flex flex-col gap-2 bg-slate-200 rounded">
    <?= csrf_field() ?>

    <input type="text" name="name" value="<?= set_value('name') ?>" placeholder="name" class="w-full px-2 py-1 rounded">
    <input type="text" name="username" value="<?= set_value('username') ?>" placeholder="username"
        class="w-full px-2 py-1 rounded">
    <input type="email" name="email" value="<?= set_value('email') ?>" placeholder="email"
        class="w-full px-2 py-1 rounded">
    <input type="password" name="password" value="<?= set_value('password') ?>" placeholder="password"
        class="w-full px-2 py-1 rounded">
    <div class="mt-2 flex gap-4 justify-center">
        <button name="submit" class="px-2 py-1 bg-black text-white rounded">Submit</button>
        <button type="button" class="px-2 py-1 bg-black text-white rounded">Cancel</button>
    </div>
</form>