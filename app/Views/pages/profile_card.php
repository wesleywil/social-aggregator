<div
    class="w-full h-full flex flex-col items-center  text-center bg-[<?= esc($colors['bg_color']) ?>] text-[<?= esc($colors['txt_color']) ?>]">
    <!-- Profile picture -->
    <img src="https://dummyimage.com/150x150" alt="profile" class="mt-8 rounded-full">
    <div class="flex flex-col text-sm">
        <h2>Professional Contact</h2>
        <h2>
            <?= esc($user['email']) ?>
        </h2>
    </div>
    <!-- Social media links - facebook - insta - linkedin - twitter(x) - youtube - tiktok -->
    <div class="flex flex-col gap-2">
        <?php if (esc($socials['twitter'])): ?>
            <div class="w-full mx-auto p-1 flex border border-[<?= esc($colors['acc_color']) ?>] rounded">
                <img src="<?= base_url() ?>assets/images/twitter.svg" alt="twitter icon" class="rounded-full">
                <div class="self-center flex gap-1">
                    <span class="self-center ml-2 font-semibold">@
                        <?= esc($socials['twitter']) ?>
                    </span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>

                    </button>


                </div>
            </div>
        <?php endif ?>

        <?php if (esc($socials['facebook'])): ?>
            <div class="w-full mx-auto p-1 flex border border-[<?= esc($colors['acc_color']) ?>] rounded">
                <img src="<?= base_url() ?>assets/images/facebook.svg" alt="facebook icon" class="rounded-full">
                <div class="self-center flex gap-1">
                    <span class="self-center ml-2 font-semibold">@
                        <?= esc($socials['facebook']) ?>
                    </span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>

                    </button>


                </div>
            </div>
        <?php endif ?>

        <?php if (esc($socials['instagram'])): ?>
            <div class="w-full mx-auto p-1 flex border border-[<?= esc($colors['acc_color']) ?>] rounded">
                <img src="<?= base_url() ?>assets/images/instagram.svg" alt="instagram icon" class="rounded-full">
                <div class="self-center flex gap-1">
                    <span class="self-center ml-2 font-semibold">@
                        <?= esc($socials['instagram']) ?>
                    </span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>

                    </button>


                </div>
            </div>
        <?php endif ?>

        <?php if (esc($socials['linkedin'])): ?>
            <div class="w-full mx-auto p-1 flex border border-[<?= esc($colors['acc_color']) ?>] rounded">
                <img src="<?= base_url() ?>assets/images/linkedin.svg" alt="linkedin icon" class="rounded-full">
                <div class="self-center flex gap-1">
                    <span class="self-center ml-2 font-semibold">@
                        <?= esc($socials['linkedin']) ?>
                    </span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>

                    </button>


                </div>
            </div>
        <?php endif ?>

        <?php if (esc($socials['youtube'])): ?>
            <div class="w-full mx-auto p-1 flex border border-[<?= esc($colors['acc_color']) ?>] rounded">
                <img src="<?= base_url() ?>assets/images/youtube.svg" alt="youtube icon" class="rounded-full">
                <div class="self-center flex gap-1">
                    <span class="self-center ml-2 font-semibold">@
                        <?= esc($socials['youtube']) ?>
                    </span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>

                    </button>


                </div>
            </div>
        <?php endif ?>

        <?php if (esc($socials['tiktok'])): ?>
            <div class="w-full mx-auto p-1 flex border border-[<?= esc($colors['acc_color']) ?>] rounded">
                <img src="<?= base_url() ?>assets/images/tiktok.svg" alt="tiktok icon" class="rounded-full">
                <div class="self-center flex gap-1">
                    <span class="self-center ml-2 font-semibold">@
                        <?= esc($socials['tiktok']) ?>
                    </span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>

                    </button>


                </div>
            </div>
        <?php endif ?>

        <?php if (!esc($socials['twitter']) && !esc($socials['facebook']) && !esc($socials['instagram']) && !esc($socials['linkedin']) && !esc($socials['youtube']) && !esc($socials['tiktok'])): ?>
            <h1>No socials</h1>
        <?php endif ?>
    </div>
</div>