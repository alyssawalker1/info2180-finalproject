
window.onload = click;

function click(){
    document.getElementsByClassName("btn")[0].addEventListener('click', redirect);
}

function redirect(event){
    event.preventDefault();
    window.location.href = "index.php"
}