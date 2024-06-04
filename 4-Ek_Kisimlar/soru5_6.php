<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>User Management</h2>
        <button id="deactivateBtn" class="btn btn-danger">Kullanıcıyı Devre Dışı Bırak</button>
        <button id="activateBtn" class="btn btn-success">Kullanıcıyı Aktif Et</button>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
   
    $("#deactivateBtn").click(function(){
        var userId = 1; 
        var action = "deactivate"; 

        $.ajax({
            url: "soru5_6_back.php",
            type: "POST",
            data: {action: action, userId: userId},
            success:function(response){
                if(response == "success") {
                    alert("Kullanıcı başarıyla devre dışı bırakıldı.");
                } else {
                    alert("Bir hata oluştu. Kullanıcı devre dışı bırakılamadı.");
                }
            }
        });
    });

    $("#activateBtn").click(function(){
        var userId = 1; 
        var action = "activate"; 


        $.ajax({
            url: "soru5_6_back.php",
            type: "POST",
            data: {action: action, userId: userId},
            success:function(response){
                if(response == "success") {
                    alert("Kullanıcı başarıyla aktifleştirildi.");
                } else {
                    alert("Bir hata oluştu. Kullanıcı aktifleştirilemedi.");
                }
            }
        });
    });
});

    </script>

</body>
</html>
