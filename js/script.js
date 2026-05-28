const ibiForm = document.querySelector('.ibi-add-form');
const loader = document.querySelector('.loader-container');
ibiForm.addEventListener('submit', ibiAddClient);

async function ibiAddClient(e) {
    e.preventDefault();

    const clientData = new FormData(ibiForm);
    const data = Object.fromEntries(clientData);

    try {
        loader.style.display = 'block';

        await setTimeout(async () => {
            const response = await fetch('./action/add-client.inc.php', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });
            const res = await response.json();
            displayToast(res);
            
            loader.style.display = 'none';

            ibiForm.reset();    
        }, 500);
        
    } catch(error) {
        console.log(error);
    }
}

function displayToast(res) {
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
}