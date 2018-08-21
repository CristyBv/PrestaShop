<!-- Block mymodule -->
<div id="cristymodule_block_left" class="block">
  <h4>{l s='Welcome!' d='Modules.CristyModule'}</h4>
  <div class="block_content">
    <p>
      {if !isset($my_module_name) || !$my_module_name}
        {capture name='cristymodule_tempvar'}{l s='World' d='Modules.CristyModule'}{/capture}
        {assign var='cristymodule_name' value=$smarty.capture.cristymodule_tempvar}
      {else}
        {assign var='cristymodule_name' value=$my_module_name}
      {/if}     
      {l s='Hello %1$s!' sprintf=[$cristymodule_name] d='Modules.CristyModule'}
    </p>
    <ul>
      <li><a href="{$my_module_link}"  title="{l s='Click this link' d='Modules.CristyModule'}">{l s='Click me!' d='Modules.CristyModule'}</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule -->