<?php
// Template edit.php:

?>

<div class='container'>
    <div class='row'>
        <div class='col-xs-12 col-md-12'>
            <div class='header-box'>
                <h2><?php edit_side_heading($page) ?></h2>
                <?php //edit_main_category_dropdown($page) ?>
            </div>
            
            <div class='form-box'>
                <form class="" action="" method="post">
                    <?php
                        form_category($page);
                    ?>
                </form>
            </div><!-- END class 'form-box' -->
            
        </div><!-- END side column -->

        <div class='col-xs-12 col-md-12'>
            <div class='form-box'>
                <div class='row'>
                    <?php
                        $custom_subject = '';
                        if($page=='homes'){
                            $custom_subject = 'Address/주소';
                        } else if($page=='jobs'){
                            $custom_subject = 'Employer/회사명';
                        } else{
                            $custom_subject = '제목';
                        }
                    ?>
                    <form class="" action="" method="post">
                        <div class="form-group col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="subject" placeholder="<?php echo $custom_subject; ?>">
                                
                            </div>
                        </div> <!-- END subject form -->
                    
                        <div class="form-group col-xs-12 col-sm-5">
                            <div class="input-group" >
                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="email" placeholder="Email (optional)">
                            </div>
                        </div><!-- END email form -->
                        
                        <div class="form-group col-xs-6 col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" class="form-control" id="phone" placeholder="전화 (optional)">
                            </div>
                        </div><!-- END phone form -->
                        
                        <div class="dropdown col-xs-6 col-sm-3">
                            <div class="input-group">
                                <label for="region">
                                    <?php
                                    if(!empty($_GET['region'])) {
                                        echo $_GET['region'];
                                    } ?>
                                </label>
                                <select class="form-control" id="region">
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Los Angeles">Los Angeles, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Fullerton">Fullerton, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Cerritos">Cerritos, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Torrance">Torrance, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Irvine">Irvine, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Torrance">Glendale, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Diamond Bar">Diamond Bar, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Buena Park">Buena Park, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Rowland Heights">Rowland Heights, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Cypress">Cypress, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=La Mirada">La Mirada, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=La Crescenta">La Crescenta, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=La Canada">La Canada, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Garden Grove">Garden Grove, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=San Diego">San Diego, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Anaheim">Anaheim, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Yorba Linda">Yorba Linda, CA</a></option>
                                    <option><a href="?page=<?php echo $page;?>&action=edit&region=Walnut">Walnut, CA</a></option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="form-group col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                <textarea class="form-control vresize" rows="15" id="body" placeholder="Comment/Description..."></textarea>
                            </div>
                        </div>
                    </form><!-- END textarea -->
                </div><!-- END row -->
            </div><!-- END form card -->
            
            <div class='tray-box'>
                <div class="btn-form-submit">
                    <button type="submit" class="btn btn-default btn-lg btn-primary"><b>등록하기</b></button>
                </div>
            </div><!-- END submit button -->
            
        </div><!-- END main column -->
    </div>
</div>