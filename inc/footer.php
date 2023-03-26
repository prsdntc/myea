
<footer class="w3-content w3-row-padding" style="padding-top: 20px;">
    <div class="w3-container">
    
    <div class="w3-quarter">
        <h5 style="color: #344854;">About</h5>
        <a href="aboutus">My Eastrand</a>
        <a href="contact">Contact Us</a>
    </div>
    
    
    <div class="w3-quarter">
        <h5 style="color: #344854;">Social Media</h5>
        <a href="https://www.instagram.com/myeastrand" target="_blank"><i class=""></i> Instagram</a>
        <a href="https://www.facebook.com/myeastrand1" target="_blank"><i class=""></i> Facebook</a>
    </div>
        
    <div class="w3-quarter">
        <h5 style="color: #344854;">Help</h5>
        <a href="cookie">Cookie Policy</a>
    </div>
        
    <div class="w3-quarter">
        <h5 style="color: #344854;">More</h5>
        <a href="watch?v=3355">Elspark Hoërskool</a>
        
    </div>
    
    <div class="w3-container w3-center w3-margin">
        <p style="color: #344854;">My Eastrand, (Pty) Ltd &copy; 2022</p>
    </div>
        
</div>
</footer>

<script>
    
    var myVar;

function reloader() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
    
    
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    
    //Image upload script
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    /// Video upload thumbnail
    function readthumbnail(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#thumbnail')
                    .attr('src', e.target.result);
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    //--
    
    //Post Tabs
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    
    // Javascript Notification panel
    
    function MyEastrand_OpenNotificationsMenu() {
        notification_container = $('.notification-container');
        notification_list = $('#notification-list');
        notification_container.find('.new-update-alert').addClass('hidden');
        Wo_progressIconLoader(notification_container.find('.notification-loading-progress'));
        
        $.get(Wo_Ajax_Requests_File(), {
            f: 'get_notifications'
        }, function (data) {
            if(data.status == 200) {
                if(data.html.length == 0) {
                    notification_list.html('<div class="empty_state"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M18.586 20H4a.5.5 0 0 1-.4-.8l.4-.533V10c0-1.33.324-2.584.899-3.687L1.393 2.808l1.415-1.415 19.799 19.8-1.415 1.414L18.586 20zM6.408 7.822A5.985 5.985 0 0 0 6 10v8h10.586L6.408 7.822zM20 15.786l-2-2V10a6 6 0 0 0-8.99-5.203L7.56 3.345A8 8 0 0 1 20 10v5.786zM9.5 21h5a2.5 2.5 0 1 1-5 0z" fill="currentColor"/></svg>' + data.message + '</div>');
                } else {
                    document.getElementById('notification-list').innerHTML = data.html;
                    Wo_intervalUpdates();
                }
            }
            Wo_progressIconLoader(notification_container.find('.notification-loading-progress'));
        });
    }
    
    // Read dropdown share button
    function dropdownsharemenu() {
        document.getElementById("dropdown-menu").classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("share-dropdown-content");
            var i;
            
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    
    
</script>
</body>
</html>