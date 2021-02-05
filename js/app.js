
function getOrderStatus() {
    this.render = (dialog) => {
        let winW = innerWidth;
        let winH = innerHeight;
        let dialogoverlay = document.getElementById('dialogoverlay');
        let dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = (winH/2) - 350+"px";
        dialogbox.style.display = "block";
        document.getElementById("dialogboxhead").innerHTML = "You'r Order Has be Submited";
        document.getElementById("dialogboxbody").innerHTML = dialog;
        document.getElementById("dialogboxfoot").innerHTML = '<button class="btn dialog-btn" onclick="Alert.ok()">OK</button>';
    }
    this.ok = () => {
        document.getElementById('dialogoverlay').style.display = "none";
        document.getElementById('dialogbox').style.display = "none";

    }
}
let Alert = new getOrderStatus();