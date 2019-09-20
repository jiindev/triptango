@include('header')
@include('nav')
@include('social_login')

@if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif

    <h1>TripTango</h1>
    <div class="go_login">
        테스트 시작</a>
    </div>

    <div>테스트를 한적이 있다면?</div>
    <div class="go_login">
        결과값 보기
    </div>
@include('footer')

<script>
    $('.go_login').on('click', function(){
        $('.login_popup').show();
    })
</script>