$(document).ready(function() {
    if($("a.delete").length) {
        $("a.delete").click(function(e) {
            e.preventDefault();
            if(confirm("Are you sure you want to delete this item?")) {
                window.location.href = $(this).attr("href");
            }
        }) 
    }
});