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

const params = new URLSearchParams(window.location.search);

if(!params.has('offset') || params.get('offset') == 0) {
    const transaction = document.getElementById("transaction-offset0");

    transaction.classList.add('transaction-disabled');
    transaction.addEventListener('click', (e) => {
        e.preventDefault();
    });

} else {
    let count = 10;
    while(count >= 10) {
        if(params.get('offset') == count) {
            const transaction = document.getElementById(`transaction-offset${count}`);

            transaction.classList.add('transaction-disabled');
            transaction.addEventListener('click', (e) => {
            e.preventDefault();
            });

            count = 0;
        } else {
            count = count + 10;
        }
    }
}