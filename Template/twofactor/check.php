<section class="login-logo">
    <img src="<?= $this->url->dir() ?>plugins/ApplicationBranding/Assets/img/workspace-icon-500x500.png" class="ws-logo" alt="<?= t('Workspace logo') ?>">
    <h3 class="no-top no-bottom login-title">
        <?php if (!empty($this->task->configModel->get('app_rename'))): ?>
            <?= strtoupper($this->task->configModel->get('app_rename')) ?>
        <?php else: ?>
            <?= strtoupper(t('My Workspace')) ?>
        <?php endif ?>
    </h3>
    <div class="form-wrapper relative">
        <div class="otp-area">
            <div class="otp-form form-login relative">
                <form method="post" action="<?= $this->url->href('TwoFactorController', 'check', array('user_id' => $this->user->getId())) ?>">
                    <?= $this->form->csrf() ?>
                    <?= $this->form->label(t('Authentication Code'), 'code') ?>
                    <?= $this->form->text('code', array(), array(), array('placeholder="123456"', 'autofocus', 'autocomplete="one-time-code"', 'pattern="[0-9]*"', 'inputmode="numeric"'), 'form-numeric') ?>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-blue"><?= t('Verify') ?></button>
                        <button type="button" class="btn btn-blue back-btn"><?= $this->url->link(t('Cancel'), 'AuthController', 'logout', array(), false, 'logout-button', t('Logout')) ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
