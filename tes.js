
function complete() {
    let btnUpcoming = document.getElementById('btnupc');
    let btnUComplete = document.getElementById('btncmple');
    let upcoming = document.getElementById("upcoming");
    let complete = document.getElementById("complete");
    btnUpcoming.classList.remove("activity-active");
    btnUComplete.classList.add("activity-active");
    complete.style.right = "0";
    upcoming.style.left = "-100%";
}
function upcoming() {
    let btnUpcoming = document.getElementById('btnupc');
    let btnUComplete = document.getElementById('btncmple');
    let upcoming = document.getElementById("upcoming");
    let complete = document.getElementById("complete");
    complete.style.right = "-100%";
    upcoming.style.left = "0";
    btnUpcoming.classList.add("activity-active");
    btnUComplete.classList.remove("activity-active");
}
