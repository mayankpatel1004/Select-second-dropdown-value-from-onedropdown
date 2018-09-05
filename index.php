<script src="jquery.min.js"></script>
<div class="input-field col m6 s12">
    <select name="source_client_id" id="client_id" onchange="fnSourceclient(this.value)">
        <option value="">Source</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>
<div class="input-field col m6 s12">                            
    <select name="copy_client_id[]" id="copy_client_id" multiple="multiple" style="height:200px;">

        <option value="">Destination</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>
<script type="text/javascript">
    function fnSourceclient(client_id) {
        $("#copy_client_id").each(function () {
            $("#copy_client_id option").show();
        });

        if (client_id > 0) {
            $("#copy_client_id option[value=" + client_id + "]").hide();
        }
    }
</script>