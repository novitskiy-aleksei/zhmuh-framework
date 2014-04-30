<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive email layout.">

    <title>Guest Book</title>

    <link rel="stylesheet" href="/attaches/pure-min.css">
    <link rel="stylesheet" href="/attaches/gallery.css">
    <link rel="stylesheet" href="/attaches/main.css">
</head>

<body>

<div class="header">
    <div class="pure-menu pure-menu-open pure-menu-horizontal">
        <a class="pure-menu-heading" href="/">Guest book</a>

        <ul>
            <li class="pure-menu-selected"><a href="/">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <ul class="profile">
            <?php if(User::isUserLoggedIn()){ ?>
                <li><?php echo Session::get('user')['name'] ?></li>
                <li><a href="/logout">Logout</a></li>
            <?php }else{ ?>
                <li><a href="/login">Login</a></li>
            <?php } ?>
        </ul>
        <br style="clear: both">
    </div>
</div>

<div class="container">
    <?php if (Session::get('flash')) { ?>
        <div class="flash-message"><?php echo View::flash(); ?></div>
    <?php } ?>
    <?php View::content() ?>
</div>

<div class="footer">
    View the source of this layout to learn more. Made with love by the YUI Team.
</div>
</body>