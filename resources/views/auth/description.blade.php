<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>تسديد مبلغ</title>

    <style>
        @include('main');
    </style>
</head>
<!--Coded with love by Mutiullah Samim-->

<body>
    <br><br><br>
    <br>
    <div class="form_id">
        <h1>اضافة مريض</h1>
        <form action="{{ url('description') }}" onsubmit="return validateFormStudent()"method="POST">
            @csrf
            <label for="description">وصف المستخدم:</label><br>
            <input type="text" name="details" class="form-control" placeholder="عنوان المريض">
            <input type="text" name="user_id" class="form-control" placeholder="عنوان المريض">
            <button class="but" type="submit" value="Send">
                <h5 style="margin-top: -1px; color:white">
                    حفظ البيانات
                </h5>
            </button>
        </form>
    </div>

</html>
