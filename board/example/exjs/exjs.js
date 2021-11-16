

window.onload=function(){
    document.getElementById("preview").addEventListener("click", function () {
        const title = document.getElementById("main").value;
        const yourname = document.getElementById("myname").value;
        const content = document.getElementById("borad").value;
        var pretitle = document.getElementById("previewTitle");
            pretitle.innerHTML = title;
        var prename = document.getElementById("previewName");
            prename.innerHTML = yourname;
        var premes = document.getElementById("previewContent");
            premes.innerHTML = content;
 })
    document.getElementById("del").addEventListener("click", function () {
     document.getElementById("previewTitle").innerHTML = "";
    document.getElementById("previewName").innerHTML = "";
    document.getElementById("previewContent").innerHTML = "";
    
})
}


