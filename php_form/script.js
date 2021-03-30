$(document).ready(function(){
    var id_count = 1;
    $('#userData').on('submit', function(e){
        e.preventDefault();
        formData = {Tmp_id: id_count};
        $(this).find("input").each(function(){
            formData[$(this).attr("name")] = $(this).val();
        })
        
        $.ajax({
            url         : 'formData.php',
            type        : 'POST',
            data        : formData,
            dataType    : 'html',
            cache       : false,
            success     : function(response){
                $('#records').append(response);
                
                $('#userData').trigger('reset'); 
            }

        })

        id_count++;
    })

    
})