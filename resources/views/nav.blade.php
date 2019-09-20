<style>
    .nav{
        width: 100%;
        height: 30px;
        background: #dee2e6;
    }
</style>
<div class="nav">
    <div>
        @if (auth()->check())
            <div class="top-right links">
                <a href="{{ url('/logout') }}">로그아웃</a>
            </div>
        @endif
    </div>
</div>