<html>
    <head>
        <title>Call Test Process</title>
    </head>
    <body>
      <center><label>Start Call</label><br><br><br><br>
<input type="text" id="astroNum" name="astroNum" placeholder="Please enter the 1st Number"/><br><br>
<buton type="button" name="startcall" id="startcall" style="cursor:pointer">Click to Start Call</buton></center>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
          $('#startcall').click(function () {
                var astroNum = $("#astroNum").val();
                $.ajax({
                    url: "make_call.php",
                    type: 'POST',
                    dataType: "json",
                    data: {'astroNum': astroNum
                    },
                    success: function (response) {
                      alert('call start');
                    }
                });
            });
    });
</script>
    </body>
</html>


