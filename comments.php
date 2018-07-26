<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
    ?>

    <div id="<?php $comments->theId(); ?>" class="comment-body">
        <div class="media">
            <?php if (Helper::options()->commentsAvatar > 0) { ?>
                <figure class="media-left">
                    <p class="image is-64x64">
                        <?php $comments->gravatar('128', ''); ?>
                    </p>
                </figure>
            <?php } ?>
            <div class="media-content">
                <div class="content">
                    <div>
                        <strong><?php $comments->author(); ?></strong>
                        <br>
                        <?php $comments->content(); ?>
                        <small><?php $comments->date('Y 年 m 月 d 日 H:i'); ?></small>
                        <span class="is-pulled-right"><?php $comments->reply(); ?></span>
                    </div>
                </div>

                <?php if ($comments->children) { ?>
                    <?php $comments->threadedComments($options); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<section class="section" id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <p><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></p>

        <?php $comments->listComments(); ?>

        <div class="pagination is-centered">
            <?php $comments->pageNav('上一页', '下一页', 3, '...', [
                'wrapTag' => 'ul',
                'wrapClass' => 'pagination-list',
                'itemTag' => 'li class="pagination-link"',
                'textTag' => 'a',
                'currentClass' => 'is-current',
                'prevClass' => 'pagination-previous',
                'nextClass' => 'pagination-next'
            ]); ?>
        </div>

    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>">
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if (!$this->user->hasLogin()): ?>
                    <label class="label">发表评论</label>
                    <?php $comments->cancelReply(); ?>
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" type="text" name="author" id="author" placeholder="称呼" value="<?php $this->remember('author'); ?>" required>
                        </p>
                        <p class="control">
                            <a class="button is-static">
                                称呼
                            </a>
                        </p>
                    </div>
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" type="email" name="mail" id="mail" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
                        </p>
                        <p class="control">
                            <a class="button is-static">
                                邮箱<?php if (!$this->options->commentsRequireMail): ?>（可选）<?php endif; ?>
                            </a>
                        </p>
                    </div>
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" type="text" name="url" id="url" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
                        </p>
                        <p class="control">
                            <a class="button is-static">
                                网站<?php if (!$this->options->commentsRequireURL): ?>（可选）<?php endif; ?>
                            </a>
                        </p>
                    </div>
                    <div class="field">
                        <div class="control">
                            <textarea name="text" id="textarea" class="textarea" required><?php $this->remember('text'); ?></textarea>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="field">
                        <label class="label">
                            <?php if ($this->user->hasLogin()): ?>
                                使用 <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> 发表评论：<?php $comments->cancelReply(); ?>
                            <?php endif; ?>
                        </label>
                        <div class="control">
                            <textarea name="text" id="textarea" class="textarea is-radiusless" required><?php $this->remember('text'); ?></textarea>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-info">提交评论</button>
                    </div>
                    <?php if ($this->user->hasLogin()): ?>
                    <div class="control">
                        <a href="<?php $this->options->logoutUrl(); ?>" class="button is-text">退出</a>
                    </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</section>
