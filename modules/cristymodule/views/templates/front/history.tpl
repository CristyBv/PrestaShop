{extends file='page.tpl'}
{block name='page_content'}
    {if $show}
        <div id='history_div'>
            <table class="table table-responsive table-striped">
                <thead>
                    <th>ID</th>
                    <th>BODY</th>
                    <th>HISTORY</th>
                    <th>DATE</th>
                </thead>
                <tbody>
                    {foreach from=$my_history_list item=history_item}
                    <tr>
                        {foreach from=$history_item item=history}
                            <td> {$history} </td>
                        {/foreach}
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    {else}
        History is disabled!
    {/if}
{/block}

