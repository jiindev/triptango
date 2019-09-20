<?php
/**
 * Created by PhpStorm,
 * User: 63328
 * Date: 2019-08-02
 * Time: 오전 12:05
 */
?>
<style>
    .login_popup{
        display: none;
        width: 200px;
        height: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -150px;
        margin-left: -100px;
        background: #3f9ae5;
    }
</style>

<div class="login_popup">
    <div class="close">close</div>
    <a href="{{ url('/auth/redirect/facebook') }}">페이스북 로그인</a>
</div>

<script>
    $('.close').on('click', function(){
        $('.login_popup').hide();
    });

    if (window.location.hash === '#_=_') {
        window.location.href="/quiz";
    }
</script>