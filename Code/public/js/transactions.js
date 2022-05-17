function redirectButtons(boton) {
    const btnRedirect = document.getElementById(boton);

    btnRedirect.addEventListener('click',() => {
        window.location.href = `transactionsHistory.php?${boton}`;
    })
}

redirectButtons("deposit");
redirectButtons("extract");
redirectButtons("send");
redirectButtons("changeArs");
redirectButtons("changeUsd");