<label>
Out of Stock
<input type="checkbox" name="outofstock" id="outofstock">
</label>

<script>
    {if $out_of_stock == true} var out_of_stock = true;
    {else} var out_of_stock = false;
    {/if}
    if(out_of_stock) $("#outofstock").attr('checked', true);
</script>