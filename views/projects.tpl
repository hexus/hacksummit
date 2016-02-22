{extends "app"}

{block "content"}
    <h2>{$session->name|default:'New session'} <span class="text-muted">{$session->key}</span></h2>
    
    <h3>Projects</h3>
    
    <div class="projects">
        <ol class="project-list">
            {foreach $projects as $project}
                <li class="project">
                    <div class="project-handle">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </div>
                    <div class="project-name" contenteditable="true">{$project->name}</div>
                </li>
            {/foreach}
        </ol>
        <div class="add-project btn btn-primary">Add project</div>
    </div>
{/block}