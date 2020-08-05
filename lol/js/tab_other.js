function openOther(evt, rewardsName) {
    var i, tab_other, tab_other_link;
    tab_other = document.getElementsByClassName("tab_other");
    for (i = 0; i < tab_other.length; i++) {
         tab_other[i].style.display = "none";
    }
    tab_other_link = document.getElementsByClassName("menu-other");
    for (i = 0; i < tab_other_link.length; i++) {
        tab_other_link[i].className = tab_other_link[i].className.replace(" menu-other-active", "");
    }
    document.getElementById(rewardsName).style.display = "block";
    evt.currentTarget.className += " menu-other-active";
}
document.getElementById("defaulTabOther").click();