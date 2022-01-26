<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Record</title>
    <style>
        .row1 {
            display: flex;
        }

        .column1 {
            flex: 50%;
        }

        input {
            outline: 0;
            border-width: 0 0 2px;
            padding: 5px;
        }

        td{
            height: 30px;
        }

    </style>
</head>

<body>
    <div class="row1">
        <div class="column1" style="float: left">
            <input type="text" value="Null" style="width: 180px"><br>
            <input type="text" value="Null" style="width: 180px"><br>
            <input type="text" value="Null" style="width: 180px"><br>
        </div>
        <div class="column1" style="float:right; margin-right:100px;">
            <input type="text"  style="border:2px;width: 250px;height:30px;"><br>
            <strong>NIC :</strong><input type="text" value="{{ $data->new_nic }}" style="width: 200px"><br>
            <strong>REG:</strong><input type="text" value="{{ $data->r_no }}" style="width: 200px"><br>
        </div>
    </div>

    <div class="row2" style="margin-top: 140px;">
        <div class="column2" style="float: left">
            <strong>D.O.B :</strong><input type="text" value="{{ $data->birth }}" style="width: 180px"><br>

        </div>
        <div class="column2" style="float:right; margin-right:100px;">
            <strong>Superannuation :</strong> <input type="text" value="Null" style="boder-width:2px 2px 2px ;width: 170px"><br>
        </div>
    </div>

    <div class="row3" style="margin-top: 60px;">
        <div class="column3" style="">
            <strong>Name :</strong><input type="text" value="{{ $data->name. '  '.' S/O '. $data->father_name }}" style="width: 550px"><br>
        </div>
    </div>

    <div class="row4" style="margin-top: 20px;">
        <div class="column4" style="">
            <strong>Designation :</strong><input type="text" value="{{ $data->designation }}" style="width: 400px"><br>
        </div>
    </div>

    <div class="row5" style="margin-top: 20px;">
        <div class="column5" style="float: left">
           <strong>BPS :</strong><input type="text" value="{{ $data->bps }}" style="width: 180px"><br>

        </div>
        <div class="column5" style="float:right; margin-right:100px;">
            <strong>RS : </strong><input type="text" value="{{ $data->balance }}" style="boder-width:2px 2px 2px ;width: 170px"><br>
        </div>
    </div>
    <div class="row5" style="margin-top:50px;">
        <div class="column5" style="float: left">
           <strong>House :</strong><input type="text" value="{{ $data->h_no }}" style="width: 180px"><br>

        </div>
        <div class="column5" style="float:right; margin-right:100px;">
            <strong>Option : </strong><input type="text" value="Null" style="boder-width:2px 2px 2px ;width: 170px"><br>
        </div>
    </div>

    <div class="row5" style="margin-top:50px;">
        <label style="float: left; margin-bottom:10px;"><strong>Street:</strong></label>
        <div class="column5" style="float: left">
           <input type="text" value="{{ $data->colony .'  '. '  '. $data->city }}" style="boder-width:0 ;width: 170px"><br>
        </div>
    </div>

    <div class="row6" style="margin-top:120px;">
            <h2><strong style=""><center>Remarks</center></strong></h2>
                  <table border=1 style="width: 70% ; height:auto; border: 2px solid black; margin-left:100px;border-collapse:collapse;">
                      <tr style="height: 30px;">
                          <td ></td>
                          <td ></td>
                      </tr>
                      <tr style="height: 30px;">
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="height: 30px;">
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="height: 30px;">
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="height: 30px;">
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="height: 30px;">
                        <td></td>
                        <td></td>
                    </tr>
                  </table>

    </div>




</body>

</html>

