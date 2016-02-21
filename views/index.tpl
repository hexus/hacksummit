{extends "layout"}

{block "top"}
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to Prolist!</h1>
            <p class="lead">There are currently {$sessions} active Prolist sessions.</p>
            <p class="lead">
                <a href="/new" class="btn-lg btn btn-primary">Get started</a>
            </p>
        </div>
    </div>
{/block}
