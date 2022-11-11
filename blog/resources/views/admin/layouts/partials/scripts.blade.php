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

    function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
            const classCheckbox = $('.'+groupClassName+ ' input');
            const groupIDCheckBox = $("#"+groupID);
            console.log(classCheckbox.length);
            console.log("group",countTotalPermission);
            // if there is any occurance where something is not selected then make selected = false
            if($('.'+groupClassName+ ' input:checked').length == countTotalPermission){
                groupIDCheckBox.prop('checked', true);
            }else{
                groupIDCheckBox.prop('checked', false);
            }
         }

    // function implementAllChecked(){
    //     const countPermissions={{count($permissions)}};
    //     const countPermissionGroups={{count($permissionGroups)}};

    //     //    console.log((countPermissions + countPermissionGroups));
    //     //    console.log($(' input[type="checkbox"]:checked').length);

    //     if($(' input[type="checkbox"]:checked').length >= (countPermissions + countPermissionGroups)){
    //     $("#checkPermissionAll").prop('checked',true);

    //     }else{
    //     $("#checkPermissionAll").prop('checked',false);

    //     }

    // }
</script>