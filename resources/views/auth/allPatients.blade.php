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
    <h1 style="margin-top: 25px">قائمة عرض المرضى</h1>
    <a href="createPatient" class="btn btn-primary"
        style= "margin: 10px; width: 200px;position: absolute; right: 25px;">
        اضافة مريض
    </a>
    @if ($patients->count() > 0)
        <table class="table table-striped" style="margin-top:100px ">
            <thead>
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">العنوان</th>
                    <th scope="col" style='padding-left:60px'>رقم الهاتف</th>
                    <th scope="col" style='padding-left:60px'>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td scope="row">{{ $item->name }}</td>
                        <td scope="row">{{ $item->address }} </td>
                        <td scope="row">{{ $item->phone }}</td>
                        <td>
                            <div>

                                <a href="{{ route('classroom.view', ['id' => $item->id]) }}">
                                    <button type="button" class="btn btn-primary">
                                        View
                                    </button>
                                </a>
                                <a href="{{ route('classroom.view', ['id' => $item->id]) }}">
                                    <button type="button" class="btn btn-danger h-30  w-30">
                                        Delete
                                    </button>
                                </a>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger" role="alert" style="margin-top: 20px">
            <h3>
                لا يوجد مرضى
            </h3>
        </div>
    @endif

</body>

</html>
