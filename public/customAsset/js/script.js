// To set timeout alert in css custom .alert
setTimeout(() => {
    const alertElement = document.getElementById("autoCloseAlert");
    if (alertElement) {
        const alert = new bootstrap.Alert(alertElement);
        alert.close();
    }
}, 3000);
