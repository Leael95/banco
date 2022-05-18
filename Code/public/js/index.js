const params = new URLSearchParams(window.location.search);
const errLogin = document.getElementById('index-error-login');
const regOk = document.getElementById('index-register');

if(params.has('errLogin')) {
    errLogin.removeAttribute('hidden');
} else if(params.has('regOk')) {
    regOk.removeAttribute('hidden');
}