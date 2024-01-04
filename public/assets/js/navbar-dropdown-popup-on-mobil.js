   // Add a script to close the dropdown on small screens when clicking outside
   $(document).ready(function () {
    $(".dropbtn").click(function () {
        $(".dropdown-content").toggle();
    });

    // Close the dropdown when clicking outside of it
    $(document).on("click", function (event) {
        if (!$(event.target).closest(".dropdown").length) {
            $(".dropdown-content").hide();
        }
    });
});