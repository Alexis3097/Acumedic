$('.checks').on('change',function(){
    
    if(this.checked) {
        $(this).parents("tr").find(".check").each(function() {
            return $(this).prop( "checked", true );
        });
    }
    else if(!this.checked){
        $(this).parents("tr").find(".check").each(function() {
            return $(this).prop( "checked", false );
        });
    }
    
});