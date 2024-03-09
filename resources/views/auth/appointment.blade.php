<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <style>
        @include('main');
    </style>
</head>

<body>
    <h1 style="margin-top: 25px">قائمة مواعيد المرض</h1>
    @if ($appointment->count() > 0)
        <table class="table table-striped" style="margin-top:100px ">
            <thead>
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">التاريخ</th>
                    <th scope="col">الوقت</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointment as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td scope="row">{{ $item->date }}</td>
                        <td scope="row">{{ $item->time }} </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger" role="alert" style="margin-top: 100px">
            <h3>
                لا يوجد مواعيد للمريض
            </h3>
        </div>
    @endif

</body>

</html>
