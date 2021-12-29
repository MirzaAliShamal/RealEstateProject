<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Record History </title>
    <style>
        input[type="text"] {
            font-size: 13px;
            font-weight: 300;


        }

    </style>

</head>

<body>
    <div style="">
        <div style="float:left">
            <label for="name" style="font-weight:500">Name</label><br>
            <input type="text" value="{{ $data->name ? $data->name : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:300;">
        </div>
        <div style="float: right;">
            <label for="father_name" style="font-weight:500">Father Name</label><br>
            <input type="text" value="{{ $data->father_name ? $data->father_name : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="r_no" style="font-weight:500">R No</label><br>
            <input type="text" value="{{ $data->r_no ? $data->r_no : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="balance" style="font-weight:500">Balance</label><br>
            <input type="text" value="{{ $data->balance ? $data->balance : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="option" style="font-weight:500">Option</label><br>
            <input type="text" value="{{ $data->option ? $data->option : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="status" style="font-weight:500">Status</label><br>
            <input type="text" value="{{ $data->status ? $data->status : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="number" style="font-weight:500">Number</label><br>
            <input type="text" value="{{ $data->number ? $data->number : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="bps" style="font-weight:500">Bps</label><br>
            <input type="text" value="{{ $data->bps ? $data->bps : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="name" style="font-weight:500">Birth</label><br>
            <input type="text" value="{{ $data->birth ? $data->birth : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="retirement" style="font-weight:500">Retirement</label><br>
            <input type="text" value="{{ $data->retirement ? $data->retirement : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="death" style="font-weight:500">Death</label><br>
            <input type="text" value="{{ $data->death ? $data->death : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="new_nic" style="font-weight:500">New NIC</label><br>
            <input type="text" value="{{ $data->new_nic ? $data->new_nic : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="old_nic" style="font-weight:500">Old NIC</label><br>
            <input type="text" value="{{ $data->old_nic ? $data->old_nic : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="documents" style="font-weight:500">Documents</label><br>
            <input type="text" value="{{ $data->documents ? $data->documents : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="name" style="font-weight:500">Demand</label><br>
            <input type="text" value="{{ $data->demand ? $data->demand : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="pifra" style="font-weight:500">Pifra</label><br>
            <input type="text" value="{{ $data->pifra ? $data->pifra : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="designation" style="font-weight:500">Designation</label><br>
            <input type="text" value="{{ $data->designation ? $data->designation : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="h_no" style="font-weight:500">House No</label><br>
            <input type="text" value="{{ $data->h_no ? $data->h_no : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>

    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="street" style="font-weight:500">Street</label><br>
            <input type="text" value="{{ $data->street ? $data->street : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="colony" style="font-weight:500">Colony</label><br>
            <input type="text" value="{{ $data->colony ? $data->colony : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>
    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="street" style="font-weight:500">Street</label><br>
            <input type="text" value="{{ $data->street ? $data->street : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="colony" style="font-weight:500">Colony</label><br>
            <input type="text" value="{{ $data->colony ? $data->colony : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>
    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="city" style="font-weight:500">City</label><br>
            <input type="text" value="{{ $data->city ? $data->city : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="posting" style="font-weight:500">Posting</label><br>
            <input type="text" value="{{ $data->posting ? $data->posting : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>
    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="final" style="font-weight:500">Final</label><br>
            <input type="text" value="{{ $data->final ? $data->final : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="phone_home" style="font-weight:500">Phone Home</label><br>
            <input type="text" value="{{ $data->phone_home ? $data->phone_home : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>
    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="mobile" style="font-weight:500">Mobile</label><br>
            <input type="text" value="{{ $data->mobile ? $data->mobile : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="balating" style="font-weight:500">Balating</label><br>
            <input type="text" value="{{ $data->balating ? $data->balating : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>
    <div style="margin-top:80px;">
        <div style="float:left">
            <label for="new_no" style="font-weight:500">New No.</label><br>
            <input type="text" value="{{ $data->new_no ? $data->new_no : 'N/A' }}"
                style="width: 300px; padding:8px; margin-top:8px;font-weight:200;  ">
        </div>
        <div style="float: right;">
            <label for="d_call" style="font-weight:500">D Call</label><br>
            <input type="text" value="{{ $data->d_call ? $data->d_call : 'N/A' }}"
                style="width: 300px; padding:8px;margin-top:8px; ">
        </div>
    </div>
    <div style="margin-top:80px;">
        <div style="">
            <label for="comment" style="font-weight:500">Comment</label><br>
            <textarea style="width: 100%; padding:8px;margin-top:8px; ;margin-right:20px;">
                {{ $data->comment ? $data->comment : 'N/A' }}
            </textarea>
        </div>
    </div>
</body>

</html>
