const ibiForm = document.querySelector('.ibi-add-form');
ibiForm.addEventListener('submit', ibiAddClient);

async function ibiAddClient(e) {
    e.preventDefault();

    const clientData = new FormData(ibiForm);
    const data = Object.fromEntries(clientData);

    try {
        const response = await fetch('./action/inter-branch-inquiry.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });
        const res = await response.json();
        console.log(res);

        ibiForm.reset();

        const formContainer = document.querySelector('.form-container');
        const toast = document.createElement('div');
        const toastMessage = document.createElement('span');
        const strong = document.createElement('strong');
        const toastButton = document.createElement('button');

        strong.textContent = `${res.firstName} ${res.lastName}`;
        toast.textContent = ' has been added!';
        
        toast.classList.add('alert', 'alert-success', 'alert-dismissible', 'fade', 'show');
        toast.setAttribute('role', 'alert');

        toastButton.classList.add('btn-close');
        toastButton.setAttribute('data-bs-dismiss', 'alert');
        toastButton.setAttribute('aria-label', 'Close');
        toastButton.setAttribute('type', 'button');

        // toast.append(toastMessage);
        toast.prepend(strong);
        toast.append(toastButton);

        formContainer.prepend(toast);
        
    } catch(error) {
        console.log(error);
    }
}