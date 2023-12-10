function showProfileOptions() {
        var options = document.getElementById("profile-options");
        options.style.display = "block";
    }

    function hideProfileOptions() {
        var options = document.getElementById("profile-options");
        options.style.display = "none";
    }

    function showUpdateProfileForm() {
        var updateForm = document.getElementById("update-profile-form");
        updateForm.style.display = "block";
    }

    function deleteProfilePic() {
        // You can implement deletion logic here
        // For demonstration purposes, let's reload the page
        location.reload();
    }
