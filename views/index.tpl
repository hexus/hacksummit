{extends "layout"}

{block "top"}
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to Prolist!</h1>
            <p class="lead">Never forget anything again.</p>
            <p class="lead">
                {if $session}
                    <a href="/app/{$session->key}" class="btn-lg btn btn-success">Continue</a>
                {else}
                    <a href="/new" class="btn-lg btn btn-primary">Get started</a>
                {/if}
            </p>
            <p>There are currently {$active_sessions} active Prolist sessions.</p>
        </div>
    </div>
{/block}
