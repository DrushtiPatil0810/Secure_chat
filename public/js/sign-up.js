document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.form');
    const signupbtn = document.getElementById('signupbtn');

    function clearInputs() {
        document.querySelector('input[name="Username"]').value = '';
        document.querySelector('input[name="Contact_Number"]').value = '';
    }

    function redirectToDashboard() {
        window.location.href = 'dashboard.html';
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const username = form.elements.Username.value.trim();
        const contactNumber = form.elements.Contact_Number.value.trim();

        if (!username || !contactNumber) {
            alert('Please fill in all fields.');
            return;
        }

        console.log('Username:', username);
        console.log('Contact Number:', contactNumber);
    });

    signupbtn.addEventListener('click', function (event) {
        event.preventDefault();

        const usernameInput = document.querySelector('input[name="Username"]');
        const contactNumberInput = document.querySelector('input[name="Contact_Number"]');

        const username = usernameInput.value.trim();
        const contactNumber = contactNumberInput.value.trim();

        if (!username || !contactNumber) {
            alert('Please fill in all fields.');
            if (!username) {
                usernameInput.value = '';
            }
            if (!contactNumber) {
                contactNumberInput.value = '';
            }
            return;
        }

        redirectToDashboard();
    });

    window.addEventListener('pageshow', function (event) {
        if (event.persisted || (window.performance && window.performance.type === 2)) {
            clearInputs();
        }
    });
});
