    <main id="content">


    <div class="sub_title">
        <strong>
            <?php 
                    if($board['bo_table']) {
                        echo $board['bo_subject'];
                        $num = 3;
                    } else {
                        echo $title;
                    }
                    ?>
        </strong>
    </div>

    <style>
       .sub_title  {
        padding: 120px 40px;
        background: url(<?=G5_THEME_URL;?>/images/main_slider_n0<?=$num;?>.jpg);
       }
    </style>

        <article class="sub_content inner">
            <div class="title">
                <h2>
                    <?php 
                    if($board['bo_table']) {
                        echo $board['bo_subject'];
                    } else {
                        echo $title;
                    }
                    ?>

                </h2>
            </div>