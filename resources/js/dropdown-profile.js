document.addEventListener("DOMContentLoaded", function () {
    const dropdownBtn = document.getElementById("profileDropdownButton");
    const dropdownMenu = document.getElementById("profileDropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

    dropdownBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        dropdownMenu.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
    });

    document.addEventListener("click", function (e) {
        if (!dropdownMenu.contains(e.target) && !dropdownBtn.contains(e.target)) {
            dropdownMenu.classList.add("hidden");
            dropdownIcon.classList.remove("rotate-180"); 
        }
    });
});
