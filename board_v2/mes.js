$(document).ready(function () {
    $("#close").click(function () { 
        $("#username").val("");
        $("#content").val("");
        
    });

    function getid(num){
        console.log(num)
        document.getElementById("edtid").value=num;

    }
});