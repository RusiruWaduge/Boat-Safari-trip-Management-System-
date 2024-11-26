function displayFeedBack() {
    fetch("display_feedback.php")
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("feedbackList").innerHTML = data;
        });
}

