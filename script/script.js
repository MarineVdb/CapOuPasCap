function chevron() {
    let chevron = document.getElementById('chevron').innerHTML;
    let chevronDown = '<i class="fas fa-chevron-down fa-2x pt-1" style="color:#303030" aria-hidden="true"></i>';
    let chevronUp = '<i class="fas fa-chevron-up fa-2x pt-1" style="color:#303030" aria-hidden="true"></i>';
    if (chevron == chevronDown) {
        document.getElementById('chevron').innerHTML = chevronUp;
    } else {
        document.getElementById('chevron').innerHTML = chevronDown;
    }
}
