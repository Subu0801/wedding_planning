$(document).ready(function(){
    $('#type').on('change',function(){
        var value =$(this).val();

        if(value=='1'){
            $('#venderSec').show('slow');
        }else{
            $('#venderSec').hide('slow');
        }

    })
});