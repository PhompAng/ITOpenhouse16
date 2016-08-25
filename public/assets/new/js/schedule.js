$(document).ready {
    var objDate = new Date();
    var minutes = objDate.getMinutes();
    var hours = objDate.getHours();
    if (hours >= 9 && hours <= 16) {
        if (minutes >= 0 && minutes <= 30) {
            $("tr:odd:first").addClass("selected highlight");
        }
    }
    if (hours >= 9 && hours <= 10) {
        if (minutes >= 0 && minutes <= 30) {
            $("tr:even:odd:first").addClass("selected highlight");
        }
    }
    if (hours >= 10 && hours <= 15) {
        if (minutes >= 30 && minutes <= 59) {
            $("tr:odd:odd:first").addClass("selected highlight");
        }
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:even:even:odd:first").addClass("selected highlight");
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:odd:even:odd:first").addClass("selected highlight");
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:even:odd:odd:first").addClass("selected highlight");
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:odd:odd:odd:first").addClass("selected highlight");
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:even:even:even:odd:first").addClass("selected highlight");
    }
    if (hours >= 13 && hours <= 14) {
        $("tr:odd:even:even:odd:last").addClass("selected highlight");
    }
    if (hours >= 14 && hours <= 15) {
        $("tr:even:odd:even:last").addClass("selected highlight");
    }
    if (hours >= 10 && hours <= 16) {
        $("tr:odd:odd:last").addClass("selected highlight");
    }
    if (hours >= 13 && hours <= 16) {
        $("tr:even:even:last").addClass("selected highlight");
        if (minutes >= 0 && minutes <= 30) {
            $("tr:odd:odd:first").addClass("selected highlight");
        }
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:odd:last").addClass("selected highlight");
        if (minutes >= 0 && minutes <= 30) {
            $("tr:odd:odd:first").addClass("selected highlight");
        }
    }
    if (hours >= 9 && hours <= 16) {
        $("tr:even:last").addClass("selected highlight");
        if (minutes >= 0 && minutes <= 30) {
            $("tr:odd:odd:first").addClass("selected highlight");
        }
    }
    setTimeout(function() {
        window.location.reload(1);
    }, 60000);
    setInterval('objDate.getMinutes()', 1000);
};