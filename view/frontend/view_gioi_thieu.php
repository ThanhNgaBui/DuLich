<div class="box">
        <div class="box-title">
            <div class="lb-name">Giới thiệu về công ty</div>
        </div> 
        <?php 
            foreach($arr as $row)
            {
        ?>
        <div class="content">
            <?php echo $row["chi_tiet"];?>
        </div>
        <?php } ?>
</div>
<!-- end box -->
