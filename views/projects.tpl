{extends "app"}

{block "content"}
    <h2>{$session->name|default:'New session'} <span class="text-muted">{$session->key}</span></h2>
{/block}