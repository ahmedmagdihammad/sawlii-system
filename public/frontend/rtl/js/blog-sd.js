$(document).ready(function(){

    $(document).on('click',"#btn_search_blog",function(){
        var search_keyword = $("#search_keyword_blog").val();
        window.location.href = site_url+"blog/search/"+search_keyword;
    });
    $(document).on('click',"#btn_search",function(e){
        var search_keyword = $("#search_keyword").val();
        $.ajax({
            url: site_url+'blog-search-ajax',
            type:"POST",
            dataType:"JSON",
            data:{action : 'search', search_keyword: search_keyword},
            success:function(data) {
                $(".search_results_blog").html(data.content);
            }
        });
        e.stopImmediatePropagation();
    });

    $(document).on('keypress',"#search_keyword_blog",function(e){
        if(e.which == 13) {
            var search_keyword = $("#search_keyword_blog").val();
            window.location.href = site_url+"blog/search/"+search_keyword;
        }
    });
    
});
