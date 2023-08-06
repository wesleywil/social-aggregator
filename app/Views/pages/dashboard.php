<div class="w-full h-full flex flex-col items-center text-center">
    <h1 class="mt-8 text-4xl font-bold">Dashboard</h1>
    <div class="w-full mt-8">
        <img src="https://dummyimage.com/100x100" alt="profile" class="mx-auto rounded-full">
        <h1>
            <?= esc($user['name']) ?>
        </h1>
        <h2>
            <?= esc($user['email']) ?>
        </h2>
        <h1 class="mt-4">Palette of colors</h1>
        <div class="w-1/2 mx-auto mt-2 h-8 flex rounded overflow-hidden">
            <span class="grow h-8 bg-[<?= esc($colors['txt_color']) ?>]"></span>
            <span class="grow h-8 bg-[<?= esc($colors['bg_color']) ?>]"></span>
            <span class="grow h-8 bg-[<?= esc($colors['acc_color']) ?>]"></span>
        </div>
        <div class="flex flex-wrap justify-center">
            <?php if (esc($socials['twitter'])): ?>
                <div class="w-40 p-1 flex items-center text-xs">
                    <img src="https://dummyimage.com/40x40" alt="social media" class="rounded-full">
                    <span class="ml-1">@
                        <?= esc($socials['twitter']) ?>
                    </span>
                </div>
            <?php endif ?>
            <?php if (esc($socials['facebook'])): ?>
                <div class="w-40 p-1 flex items-center text-xs">
                    <img src="https://dummyimage.com/40x40" alt="social media" class="rounded-full">
                    <span class="ml-1">@
                        <?= esc($socials['fabook']) ?>
                    </span>
                </div>
            <?php endif ?>
            <?php if (esc($socials['instagram'])): ?>
                <div class="w-40 p-1 flex items-center text-xs">
                    <img src="https://dummyimage.com/40x40" alt="social media" class="rounded-full">
                    <span class="ml-1">@
                        <?= esc($socials['instagram']) ?>
                    </span>
                </div>
            <?php endif ?>
            <?php if (esc($socials['linkedin'])): ?>
                <div class="w-40 p-1 flex items-center text-xs">
                    <img src="https://dummyimage.com/40x40" alt="social media" class="rounded-full">
                    <span class="ml-1">@
                        <?= esc($socials['linkedin']) ?>
                    </span>
                </div>
            <?php endif ?>
            <?php if (esc($socials['youtube'])): ?>
                <div class="w-40 p-1 flex items-center text-xs">
                    <img src="https://dummyimage.com/40x40" alt="social media" class="rounded-full">
                    <span class="ml-1">@
                        <?= esc($socials['youtube']) ?>
                    </span>
                </div>
            <?php endif ?>
            <?php if (esc($socials['tiktok'])): ?>
                <div class="w-40 p-1 flex items-center text-xs">
                    <img src="https://dummyimage.com/40x40" alt="social media" class="rounded-full">
                    <span class="ml-1">@
                        <?= esc($socials['tikok']) ?>
                    </span>
                </div>
            <?php endif ?>
            <?php if (!esc($socials['twitter']) && !esc($socials['facebook']) && !esc($socials['instagram']) && !esc($socials['linkedin']) && !esc($socials['youtube']) && !esc($socials['tiktok'])): ?>
                <h1>No socials</h1>
            <?php endif ?>

        </div>
        <div class="mt-4">
            <a href="/profile_edit"
                class=" px-2 py-1 text-2xl text-white font-bold bg-[<?= esc($colors['acc_color']) ?>] hover:bg-[<?= esc($colors['acc_color']) ?>]/70 rounded">Edit
                Profile</a>
        </div>

    </div>
</div>