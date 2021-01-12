$(function () {
    initTopbarDropdown();

    function initTopbarDropdown() {
        let toggle = document.querySelector('.prehead__trigger');
        let toggleClassOpen = 'prehead__trigger_open';
    
        let dropdown = document.querySelector('.prehead__dropdown');
        let dropdownClassOpen = "prehead__dropdown_open";

        let closeBtn = document.querySelector('.prehead__close-btn');    
        if (!toggle || !dropdown || !closeBtn) return null;   

        dropdown.classList.remove(dropdownClassOpen);
        toggle.classList.remove(toggleClassOpen);
    
        toggle.addEventListener('click', toggleDropdown);           
        closeBtn.addEventListener('click', toggleDropdown);

        function toggleDropdown() {
            if (dropdown.classList.contains(dropdownClassOpen) || toggle.classList.contains(toggleClassOpen)) {
                dropdown.classList.remove(dropdownClassOpen);
                toggle.classList.remove(toggleClassOpen);
            } else {
                dropdown.classList.add(dropdownClassOpen);
                toggle.classList.add(toggleClassOpen);
            }
        }
    }
    $('.wrapper').on('click', (e) => {
        /* console.log(e.target, e.currentTarget) */
    })
})
