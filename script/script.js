// Formato para telefone
document.getElementById('telefone').addEventListener('input', function(event) {
    const input = event.target;
    let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    if (value.length <= 10) {
        value = value.replace(/(\d{2})(\d{0,4})/, '($1) $2');
        value = value.replace(/(\d{4})(\d{0,4})/, '$1-$2');
    } else {
        value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
    }

    input.value = value;
});