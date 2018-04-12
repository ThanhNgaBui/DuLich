<div class="search-tour">
                         <div class="st-title">
                            <div class="st-label"><span class="icon-findtour"></span>Tìm kiếm tour</div>
                        </div>
                        <!--st-title-->
                        <div class="st-content">
                            <div class="form">
                                <form action="search.php" method="get">
                                    <div class="row fix-inline" style="margin-top: 15px;">
                                        <label>Nơi khởi hành:</label>
                                        <div class="text-outer">
                                            <select name="keyword" class="long-sl">
                                                <option value="">--Tất cả--</option>
                                                <?php
                                                    foreach($arr_departure as $row)
                                                    {
                                                ?>
                                                    <option name="" value=<?php echo $row["pk_search_id"];?> ><?php echo $row["tim_kiem_ten_khoi_hanh"];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End nơi khởi hành -->
                                     <div class="row fix-inline">
                                        <label>Thời gian:</label>
                                        <div class="text-outer">
                                            <select name="time" class="long-sl ccat">
                                                <option>--Tất cả--</option>
                                                <?php
                                                   foreach($arr_time as $row)
                                                    {
                                                ?>
                                                <option><?php echo $row["thoi_gian"];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>   
                                    </div>
                                    <!-- End điểm đến -->
                                    <div class="row fix-inline">
                                        <label>Giá:</label>
                                        <div class="text-outer">
                                        <select name="price" class="medium-sl">
                                            <option value="0">--Tất cả--</option>
                                            <?php 
                                                foreach($arr_price as $row)
                                                {
                                            ?>
                                            <option ><?php echo $row["tim_kiem_ten_gia"];?></option>
                                            <?php } ?>
                                            
                                        </select>
                                            <span class="inline-lb">(VNĐ)</span>
                                        </div>
                                    </div>
                                    <!-- End giá -->
                                    <div class="row fix-inline">
                                        <div class="text-outer price">
                                            <input name="" type="submit" class="button" value="Tìm kiếm" />
                                        </div>
                                    </div>
                                    <!-- End nút tìm kiếm -->
                                </form>
                            </div>
                            <!-- End form -->
                        </div>
                        <!-- End st-content -->
                    </div>
                    <!-- End search-tour -->