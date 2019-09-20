@include('header')
@include('login')
    <input type="hidden" name="number" value="<?= $number ?>">
    <h2><?= $quiz['quiz'] ?></h2>
    <div class="select">
        <?php foreach ($quiz['answer'] as $row) { ?>
            <div class="option">
                <a href="javascript:;" id="submit" data-answer="<?= $row['id'] ?>"><?= $row['text'] ?></a>
            </div>
        <?php } ?>
    </div>
@include('footer')

<script>
    $('#submit').on('click',function (){
        var number = $('input[name=number]').val();
        var answer = $(this).data('answer');
        $.ajax({
           url: '/quiz',
           data: {
               'number': number,
               'answer' : answer,
           },
            success: function (result) {
                $('body').html(result);
            }
        });
    });
</script>
