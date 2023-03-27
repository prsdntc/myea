<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1')
    /* Open create content page pop*/
    
    function w3_open_createcontent() {
        document.getElementById("createcontentpopup").style.display = "block";
    }
    
    function w3_close_createcontent() {
        document.getElementById("createcontentpopup").style.display = "none";
    }
    /* /// Open create content page pop*/
    
    /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
    
    function notificationdropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    
    /* When the user clicks on the dropdown menu button, toggle between hiding and showing the dropdown content */
    
    function headerdropdown() {
        document.getElementById("myDropdowntwo").classList.toggle("showtwo");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtntwo')) {
            var dropdowns = document.getElementsByClassName("dropdown-contenttwo");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('showtwo')) {
                    openDropdown.classList.remove('showtwo');
                }
            }
        }
    }
    
    
</script>
</body>
</html>