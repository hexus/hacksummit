<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>{block "title"}Prolist{/block}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/sandstone/bootstrap.min.css" integrity="sha256-oqtj+Pkh1c3dgdH6V9qoS7qwhOy2UZfyVK0qGLa9dCc= sha512-izanB/WZ07hzSPmLkdq82m5xS7EH/qDMgl5aWR37EII+rJOi5c6ouJ3PYnrw6K+DWQcnMZ+nO1NqDr6SBKLBDg==" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/assets/css/layout.css"/>
        {block "styles"}{/block}
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        {block "scripts"}{/block}
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-align-left"></span> Prolist</a>
                </div>
                <ul class="nav navbar-nav">
                
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-question-sign"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <div class="container">
                {block "messages"}
                    {if $flashes.error}
                        {foreach $flashes.error as $error}
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Whoops!</strong> {$error}
                            </div>
                        {/foreach}
                    {/if}
                {/block}
            </div>
            {block "top"}
                
            {/block}
            <div class="container">
                {block "content"}
                    
                {/block}
            </div>
        </div>
    </body>
</html>
