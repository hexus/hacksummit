{extends "app"}

{block "content"}
    <h2>{$session->name|default:'New session'} <span class="text-muted">{$session->key}</span></h2>
    
    <h3>Projects</h3>
    
    <div class="projects">
        <ul class="projects-list sortable">
            {foreach $projects as $project}
                <li class="project"><div class="project-name sortable-handle">{$project->name}</div></li>
            {/foreach}
        </ul>
        <div class="add-project btn btn-primary">Add project</div>
    </div>
{/block}