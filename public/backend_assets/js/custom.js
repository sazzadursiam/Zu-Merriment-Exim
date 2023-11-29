$(document).ready(function(){
    $(".reset_btn").click(function(e){
        e.preventDefault()
        $("form").each(function() { this.reset() });
        $(".error").text("");
    });
});