<script>
    $("#checkdata").click(function(){
    if($(this).is(':checked')){
        $('input[type = checkbox]').prop('checked',true)

    }else{
        $('input[type = checkbox]').prop('checked',false)
    }
})
    function checkPermissionByGroup(className, checkThis){
        const groupName = $("#"+checkThis.id);
        const classCheckBox = $('.'+className+' input')
        if(groupName.is(':checked')){
                classCheckBox.prop('checked',true)

            }else{
                classCheckBox.prop('checked',false)
            }
    }
</script>