<div class="w-full pb-4 flex flex-col items-center text-center">
    <h1 class="mt-8 text-4xl font-bold">Profile Edit</h1>

    <h2 class="mt-1 text-xl font-semibold">Personal Info</h2>
    <form action="/profile_edit" method="post"
        class="w-11/12 md:w-10/11 xl:w-1/3 p-2 flex flex-col gap-1 bg-slate-200 rounded">
        <?= csrf_field() ?>
        <input type="text" name="name" value="<?php echo $user['name'] ?>" placeholder="Name"
            class="w-full px-2 py-1 rounded">
        <input type="text" name="username" value="<?php echo $user['username'] ?>" placeholder="Username"
            class="w-full px-2 py-1 rounded">
        <input type="email" name="email" value="<?php echo $user['email'] ?>" placeholder="E-mail"
            class="w-full px-2 py-1 rounded">
        <div class="mt-1 flex gap-4 justify-center">
            <button class="px-2 py-1 text-white font-semibold bg-red-500 hover:bg-red-700 rounded">Submit</button>
            <button type="button"
                class="px-2 py-1 text-white font-semibold bg-red-500 hover:bg-red-700 rounded">Cancel</button>
        </div>
    </form>
    <h2 class="mt-1 text-xl font-semibold">Color Palette</h2>
    <form action="/color_edit" method="post"
        class="w-11/12 md:w-10/11 xl:w-1/3 p-2 flex flex-col gap-1 bg-slate-200 rounded">
        <?= csrf_field() ?>
        <div class="flex gap-1 px-2 py-1 bg-white rounded">
            <input name="bg_color" value="<?php echo $colors['bg_color'] ?>" type="color">
            <span class="w-2/3 text-left text-gray-400">Background Color</span>
        </div>
        <div class="flex gap-1 px-2 py-1 bg-white rounded">
            <input name="txt_color" value="<?php echo $colors['txt_color'] ?>" type="color">
            <span class="w-2/3 text-left text-gray-400">Text Color</span>
        </div>
        <div class="flex gap-1 px-2 py-1 bg-white rounded">
            <input name="acc_color" value="<?php echo $colors['acc_color'] ?>" type="color">
            <span class="w-2/3 text-left text-gray-400">Accent Color</span>
        </div>
        <div class="mt-1 flex gap-4 justify-center">
            <button class="px-2 py-1 text-white font-semibold bg-red-500 hover:bg-red-700 rounded">Submit</button>
            <button type="button"
                class="px-2 py-1 text-white font-semibold bg-red-500 hover:bg-red-700 rounded">Cancel</button>
        </div>
    </form>
    <h2 class="mt-1 text-xl font-semibold">Social Medias (@)</h2>
    <form action="/socials_edit" method="post"
        class="w-11/12 md:w-10/11 xl:w-1/3 p-2 flex flex-col gap-1 bg-slate-200 rounded">
        <?= csrf_field() ?>
        <input type="text" name="twitter" value="<?php echo $socials['twitter'] ?>" placeholder="Twitter(X)"
            class="w-full px-2 py-1 rounded">
        <input type="text" name="facebook" value="<?php echo $socials['facebook'] ?>" placeholder="Facebook"
            class="w-full px-2 py-1 rounded">
        <input type="text" name="instagram" value="<?php echo $socials['instagram'] ?>" placeholder="Instagram"
            class="w-full px-2 py-1 rounded">
        <input type="text" name="linkedin" value="<?php echo $socials['linkedin'] ?>" placeholder="Linkedin"
            class="w-full px-2 py-1 rounded">
        <input type="text" name="youtube" value="<?php echo $socials['youtube'] ?>" placeholder="Youtube"
            class="w-full px-2 py-1 rounded">
        <input type="text" name="tiktok" value="<?php echo $socials['tiktok'] ?>" placeholder="Tiktok"
            class="w-full px-2 py-1 rounded">
        <div class="mt-1 flex gap-4 justify-center">
            <button class="px-2 py-1 text-white font-semibold bg-red-500 hover:bg-red-700 rounded">Submit</button>
            <button type="button"
                class="px-2 py-1 text-white font-semibold bg-red-500 hover:bg-red-700 rounded">Cancel</button>
        </div>
    </form>
</div>