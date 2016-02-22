{extends "app"}

{block "content"}
    <h2>{$session->name|default:'New session'} <span class="text-muted">{$session->key}</span></h2>
    
    <h3>Projects</h3>
    
    <script type="text/html" class="project-template">
        {include "project"}
    </script>
    
    <div class="projects">
        <ol class="project-list">
            {foreach $projects as $project}
                {include "project" project=$project}
            {/foreach}
        </ol>
        <div class="add-project btn btn-primary">Add project</div>
    </div>
{/block}