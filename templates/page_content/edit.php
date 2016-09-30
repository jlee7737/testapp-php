<?php
// Template edit.php:

?>

<div class='container'>
    <div class='row'>
        <div class='col-xs-12 col-md-3'>
            <h2><i class='fa fa-folder-o' aria-hidden='true'></i> Category</h2>
            <div class='clear'></div>
            
            <div class="btn-group" style="margin: 9px;">
                <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        게시판 목록 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">구인</a></li>
                    <li><a href="#">사고팔고</a></li>
                    <li><a href="#">자동차</a></li>
                    <li><a href="#">집/부동산</a></li>
                    <li><a href="#">전문서비스</a></li>
                    <li><a href="#">톡톡</a></li>
                </ul>
            </div><!-- END category choice button -->
            
            <?php
            // edit_side:
                
            
            ?>
            
        </div><!-- END side column -->
        <div class='col-xs-12 col-md-9'>
            <h2><i class='fa fa-edit' aria-hidden='true'></i><?php listing_main_heading($page); ?></h2>
            <div class='clear'></div>
            
            <div class='card' style='padding: 12px 0px 0px 24px;'>
                <div class='row'>
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="title" placeholder="제목">
                            </div>
                        </div><!-- END subject form -->
                        
                        <div class="form-group col-xs-12 col-sm-3" style="margin-right: 24px;">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input type="text" class="form-control" id="price" placeholder="가격">
                            </div>
                        </div><!-- END price form -->
                        
                        <div class="form-group col-xs-12 col-sm-4" style="margin-right: 6px;">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" class="form-control" id="phone" placeholder="전화번호 (optional)">
                            </div>
                        </div><!-- END phone form -->
                        
                        <div class="form-group col-xs-12 col-sm-5">
                            <div class="input-group" >
                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="email" placeholder="Email (optional)">
                            </div>
                        </div><!-- END email form -->
                        
                        <?php
                        // edit_main:
                            page_form($page);
                            
                        ?><!-- END category specific form -->
                        
                        <div class="form-group col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                <textarea class="form-control vresize" rows="12" id="body" placeholder="Comment/Description..."></textarea>
                            </div>
                        </div><!-- END textarea form -->
                        
                    </form>
                </div><!-- END row -->
            </div><!-- END form card -->
            

            
            <div class="form-group" style="margin: 6px 0px 6px 0px; float:right;">
                <div class="">
                    <button type="submit" class="btn btn-default btn-lg"><b>등록하기</b></button>
                </div>
            </div><!-- END submit button -->
            
        </div><!-- END main column -->
    </div>
</div>