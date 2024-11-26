function displayUserAccounts() {
    fetch("display_user.php")
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("UserAccounts").innerHTML = data;
        });
}