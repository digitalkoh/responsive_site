<br><br>
Sample themes: <br>
<a href="#" class="temp-theme-options" id="theme_default" style="background-color:#ccc; padding:2px 8px; color:#000">Default</a> 
<a href="#" class="temp-theme-options" id="theme_override1" style="background-color:#ccc; padding:2px 8px; color:#000">Theme 1</a> 
<a href="#" class="temp-theme-options" id="theme_override2" style="background-color:#ccc; padding:2px 8px; color:#000">Theme 2</a>
<br><br><br><br>

<!-- Below scripts are for DEMO pueposes ONLY -->
<!-- No need to include these in the build -->
<script>
 $(document).ready(function(){
    // READ SESSION COOKIE
    /* ************************************************************************************************** */
    function get_cookie(Name) {
        var search = Name + "="
        var returnvalue = "";
        if (document.cookie.length > 0) {
            offset = document.cookie.indexOf(search)
            // if cookie exists
            if (offset != -1) {
                offset += search.length
                // set index of beginning of value
                end = document.cookie.indexOf(";", offset);
                // set index of end of cookie value
                if (end == -1) end = document.cookie.length;
                returnvalue=unescape(document.cookie.substring(offset, end))
            }
        }
        return returnvalue;
    }

    $('.temp-theme-options').click(function(e){
        var theme = $(this).attr('id');
        document.cookie = "style=" + theme;
        readCookie();
        e.preventDefault();
    });

    function readCookie(){
       if(get_cookie('style') != ""){
            $("#themeToggle").attr("href", "css/"+get_cookie("style")+".css");
        } else {
            $("#themeToggle").attr("href", "css/theme_default.css"); 
        } 
    }
    
     readCookie();
    
})   
</script>