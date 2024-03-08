<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <style>
        @include('main');
    </style>
    <title>معلومات المريض </title>
</head>

<body>
    <div class="div-info">
        <h1>معلومات المريض</h1>
        <div>

            <h2><span style="color: #5353e3;">الاسم: </span>{{ $pat->name }}</h2>
            <h2><span style="color: #5353e3;"> العنوان: </span>{{ $pat->address }}</h2>
            <h2> <span style="color: #5353e3;">رقم التواصل: </span>{{ $pat->phone }}</h2>
        </div>
        <div>

            <h2 class="info-money"><span style="color: #5353e3; display: flex;">الحساب المتبقي:
                </span>{{ $wa->account }}</h2>
            {{-- <a class="info-money" href="/description">>اضافة أو تسديد مبلغ</a> --}}
        </div>
    </div>

    <div class="div-info" style="height: 150px;">
        <h1>اضافة وصف للمريض</h1>
        <form action="{{ url('description') }}" onsubmit="return validateFormStudent()"method="POST">
            @csrf
            <input type="text" name="details" class="form-control1" placeholder="وصف المريض">
            <input type="hidden" name="user_id" value="{{ $pat->id }}" class="form-control"
                placeholder="عنوان المريض">
            <button class="but Des" type="submit" value="Send">
                <h5 style="margin-top: 10px; color:white; font-size: 18px;">
                    حفظ الوصف
                </h5>
            </button>
        </form>
    </div>



    @if ($Des->count() > 0)
        <table class="table table-striped" style="margin-top:100px ">
            <thead>
                <tr>
                    <th scope="col">الوصف</th>
                    <th scope="col">التاريخ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Des as $item)
                    <tr>
                        <td scope="row">{{ $item->details }}</td>
                        <td scope="row">{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger" role="alert" style="margin-top: 100px">
            <h3>
                لا يوجد وصف لمريض
            </h3>
        </div>
    @endif

</body>

</html>
