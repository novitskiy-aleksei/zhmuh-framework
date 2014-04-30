<div class="pure-g-r" id="yui_3_12_0_1_1380318448161_15">
    <div class="pure-u-1-3 photo-box">
        <a>
            <img src="http://lorempixel.com/430/287/nature" >
        </a>

        <aside class="photo-box-caption">
            Welcome to our guestbook
        </aside>
    </div>

    <div class="pure-u-2-3 text-box">
        <div class="l-box">
            <h1 class="text-box-head">Photos from around the world</h1>
            <p class="text-box-subhead">And messaging for you</p>
        </div>
    </div>

    <div class="post">
        <?php foreach($posts as $one) { ?>
            <br>
            <div class="pure-menu pure-menu-open post-item">
                <a class="pure-menu-heading">
                    '<?php echo Core::e($one['post']['title']); ?>'
                    &nbsp posted by <span class="author"><?php echo Core::e($one['user'][0]['name']); ?></span>
                </a>

                <ul>
                    <li class="text">
                        <span>
                            <?php echo Core::e($one['post']['text']); ?>
                        </span>
                    </li>
                </ul>
            </div>
        <?php } ?>
    </div>
    <br>

    <?php if (User::isUserLoggedIn()) { ?>
        <form class="pure-form auth-form" action="/post" method="post">
            <fieldset class="pure-group">
                <input type="text" name="title" class="pure-input-1-2" placeholder="Title">
                <textarea name="text" class="pure-input-1-2 post-text" placeholder="Your text here"></textarea>
            </fieldset>
            <button type="submit" class="pure-button pure-input-1-3 pure-button-primary">Post</button>
        </form>
        <br>
    <?php } ?>

    <div class="pure-u-1">
        <div class="l-box">
            <h2>Creating a post</h2>
            <p>Be kind to your mates, don't post any crap and think about shiny little rabbits</p>
        </div>
    </div>
</div>