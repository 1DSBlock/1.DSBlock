<div class="breadcrumb_category">
    <div class="container">
        <span class="name_cate_parent">Q & A</span>
    </div>
</div>
<div class="wrapper_color">
    <div class="container">
        <div class="wrap_question_anwser clearfix">
        <?php
        $index = 0;
        foreach($questions as $question) :
        ?>
            <?php if($index && $index % 2 == 0) :
            ?>
            </div><div class="wrap_question_anwser clearfix">
            <?php endif; ?>

            <div class="wrap_question_anwser_item">
                <div class="question_anwser_item">
                    <div class="question">
                        <span class="number"><?php echo $index+1; ?></span>
                        <p><?php echo $question->name; ?></p>
                    </div>
                    <div class="anwser">
                        <p style="text-align: justify;"><?php echo $question->answer; ?></p>
                    </div>
                </div>
            </div>
        <?php
        $index++;
        endforeach;
        ?>
        </div>
    </div>
</div>
