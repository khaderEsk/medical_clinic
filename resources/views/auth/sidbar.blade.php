<header>
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
</header>
<style>
    @include('main');

    i {
        direction: ltr;
        margin-right: 140px;
        font-size: 10px;
    }

</style>

<div class="sidebar">
    
    <div style="margin-top: 20px">
        <ul style='margin: 0 0 0 -30px;padding: 0px'>
            <li style="list-style-type: none">
                <a href="/dashboard" class="sidebarItem">
                    <h5>الصفحة الرئيسية</h5>
                </a>
            </li>
            <li>
                <a href="/getPatient" class="sidebarItem">
                    <h5>قائمة المرضى</h5>
                </a>
            </li>
            <li>
                <a href="/createPatient" class="sidebarItem">
                    <h5>إضافة مريض</h5>
                </a>
            </li>
        </ul>
    </div>
</div>
