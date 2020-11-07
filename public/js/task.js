
$( document ).ready(function() {
    $('#addTask').click(function(){
        $('#addForm').attr('style','display:flex')
    })
    $('.closeform').click(function(){
       
        $('#deleteForm').attr('style','display:none');
        $('#addForm').attr('style','display:none');
    })
    $('.deleteTask').click(function(){
        let fila = $(this).parent().parent();
        let idTask = ($(fila[0]['cells'][0]).text());
        let description = ($(fila[0]['cells'][2]).text());
        $('#idTask').text(idTask);
        $('#description').text(description);
        $('#deleteForm').show();
    })

})