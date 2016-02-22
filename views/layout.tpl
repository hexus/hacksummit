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
                        <a href="#">{date('H:i')}</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target=".help-modal"><span class="glyphicon glyphicon-question-sign"></span></a>
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
        <div class="help-modal modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</span></button>
                        <h4>About Prolist</h4>
                    </div>
                    <div class="modal-body">
                        <p>This project was brought to life for the <a target="_blank" href="https://hacksummit.org/">hack.summit()</a> <a target="_blank" href="https://www.koding.com/Hackathon">hackathon</a> of 2016.</p>
                        <p>Unfortunately I didn't make enough time at the weekend to dedicate to the project, and <a target="_blank" href="https://github.com/hexus/hacksummit/compare/5c149627e29c6b3cf0de6c092ec094a30855da5e...88f76fea57d60f6d1ebbbadacc6f59a4db89bef9">spent the entirety of the first day setting up the framework</a>.</p>
                        <p>Herein lies a taster of what could have been. The app was intended as something similar to <a target="_blank" href="https://todoist.com">Todoist</a>, but for any kind of list, not just todo lists.</p>
                        <p>I would have tried to retain Todoist's fantastic focus on dates as well, except this would be across the board. Projects, lists, and list items would all be dated and searchable/listable by date.</p>
                        <p>The furthest I got was setting up anonymous no-login sessions with default projects that are editable and sortable on the front-end, but aren't persisted.</p>
                        <p>Regardless of not reaching my minimum viable product, I had fun hacking this together and found a great jQuery plugin for nested sortable lists in the process.</p>
                        <p>Cheers to the folks at hack.summit(),</p>
                        <p><a target="_blank" href="https://github.com/hexus">Chris</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
