const amountArs = document.getElementById("amountArs");
const amountUsd = document.getElementById("amountUsd");
const money = document.getElementById("money");
const amountToChangeArs = document.getElementById("calcAmountArs");
const params = new URLSearchParams(window.location.search);
const btnSubmit = document.getElementById("btnInputSubmit");

function interactedAmounts() {
    const amountArsInt = Number(amountArs.textContent);
    const moneyInt = Number(money.value);
    let resultArs = null;
    let resultUsd = null;

    if(params.has('deposit')) {
        resultArs = amountArsInt + moneyInt;
    } else if(params.has('extract') || params.has('send')) {
        resultArs = amountArsInt - moneyInt;
    } else if(params.has('changeArs') || params.has('changeUsd')) {
        const usdApi = document.getElementById("valueUsdApi");
        const amountUsdInt = Number(amountUsd.textContent);
        const usdApiInt = Number(usdApi.textContent);

        const amountToChangeUsd = document.getElementById("calcAmountUsd");

        if(params.has('changeArs')) {
            const conversionArsToUsd = moneyInt / usdApiInt;
            resultUsd = amountUsdInt + conversionArsToUsd;

            resultArs = amountArsInt - moneyInt;
        } else if(params.has('changeUsd')) {
            const conversionUsdToArs = moneyInt * usdApiInt;
            resultUsd = amountUsdInt - moneyInt;

            resultArs = amountArsInt + conversionUsdToArs;
        }

        amountToChangeUsd.innerHTML = resultUsd;

    }

    amountToChangeArs.innerHTML = resultArs;

    if(params.has('changeUsd')) {
        if(resultUsd < 0) {
            btnSubmit.disabled = true;
        } else {
            btnSubmit.disabled = false;
        }
    } else {
        if(resultArs < 0) {
            btnSubmit.disabled = true;
        } else {
            btnSubmit.disabled = false;
        }
    }
}

money.addEventListener('input', interactedAmounts);