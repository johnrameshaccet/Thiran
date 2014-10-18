
<a style="float: right" data-pjax="content" href="<?php echo site_url('profile/me/edit') ?>"> Edit profile</a>
<hr>
<div class="profile">
<div class="row">
    <div class="col-md-12">
                    <!--Profile Body-->
                    <div class="profile-body">
                        <div class="profile-bio">
                            <div class="row">
                                <div class="col-md-4 md-margin-bottom-20">
  <div id="crop-avatar">

    <!-- Current avatar -->
    <div class="avatar-view" title="Change the avatar">
      <img src="<?php if(!empty($profile)){ echo $profile['photo'];} ?>" alt="Avatar">
    </div>

    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog" aria-labelledby="avatar-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="avatar-form" method="post" action="<?php echo base_url(); ?>crop-avatar/" enctype="multipart/form-data">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
            </div>
            <div class="modal-body">
              <div class="avatar-body">

                <!-- Upload image and data -->
                <div class="avatar-upload">
                  <input class="avatar-src" name="avatar_src" type="hidden">
                  <input class="avatar-data" name="avatar_data" type="hidden">
                  <label for="avatarInput">Local upload</label>
                  <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                </div>

                <!-- Crop and preview -->
                <div class="row">
                  <div class="col-md-9">
                    <div class="avatar-wrapper"></div>
                  </div>
                  <div class="col-md-3">
                    <div class="avatar-preview preview-lg"></div>
                    <div class="avatar-preview preview-md"></div>
                    <div class="avatar-preview preview-sm"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
              <button class="btn btn-primary avatar-save" type="submit">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.modal -->

    <!-- Loading state -->
    <div class="loading" tabindex="-1" role="img" aria-label="Loading"></div>
  </div>
                                </div>
                                <div id="user" class="col-md-7">
                                    <button id="enable" class="btn btn-xs btn-primary btn-flat pull-right" type="button">edit</button>
                                    <h2><a id="fname" data-type="text" data-placement="top" data-url="profile/user_update" data-title="Enter first_name"><?php echo ucfirst($user['first_name']); ?></a>&nbsp;<a id="lname" data-type="text" data-placement="top" data-title="Enter last_name"><?php echo ucfirst($user['last_name']); ?></a></h2>
                                    <span><strong>Job:</strong> Web Developer</span>
                                    <span><strong>Position:</strong> Web Designer</span>
                                    <hr>
                                    <i class="fa fa-calendar"></i>&nbsp;<a data-title="Select Date of birth" data-name="dob" data-pk="<?php echo $user['id']; ?>" data-template="D / MMM / YYYY" data-viewformat="DD/MM/YYYY" data-format="DD-MM-YYYY" data-value="<?php if(!empty($profile)){ echo $profile['dob'];} ?>" data-type="combodate" id="dob" class="editable editable-click"><?php if(!empty($profile)){ echo $profile['dob'];} ?></a> <br>
                                    <i class="fa fa-map-marker"></i>&nbsp; <a id="address" data-type="textarea" data-name="address" data-pk="<?php echo $user['id']; ?>" data-placement="top" data-title="Enter address"><?php if(!empty($profile)){ echo $profile['address'];} ?></a> <br>
                                    &nbsp; &nbsp; <a id="city" data-type="select2" data-pk="<?php echo $user['id']; ?>" data-value="<?php if(!empty($profile)){ echo $profile['city'];} ?>" data-title="Select city"> <?php if(!empty($profile)){ echo $profile['city'];} ?></a><br>
                                    &nbsp; &nbsp; <a id="state" data-type="select2" data-pk="<?php echo $user['id']; ?>" data-value="<?php if(!empty($profile)){ echo $profile['state'];} ?>" data-title="Select state"> <?php if(!empty($profile)){ echo $profile['state'];} ?></a><br>
                                    &nbsp; &nbsp; <a id="pincode" data-type="text" data-placement="top" data-name="pincode" data-pk="<?php echo $user['id']; ?>" data-title="Enter pincode"><?php if(!empty($profile)){ echo $profile['pincode'];} ?></a><br><br>
                                    
                                    <?php echo app_btn('','followers<br>67', $url = 'followers'); ?>
			            <?php echo app_btn('','starred<br>37', $url = 'starred'); ?>
			            <?php echo app_btn('','follows<br>57', $url = 'follows'); ?>
                                    
                                    </div>
                                   
                            </div>
                            
                        </div><!--/end row-->
                                
                        <hr>

                        <div class="row">
                            <!--Social Icons v3-->
                            <div class="col-sm-6 sm-margin-bottom-30">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i> Social Contacts <small>(option 1)</small></h2>
                                        <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                    </div>
                                    <div class="panel-body">
                                         <ul class="list-unstyled social-contacts-v2">
                                            <li><i class="rounded-x tw fa fa-twitter"></i> <a href="#">edward.rooster</a></li>
                                            <li><i class="rounded-x fb fa fa-facebook"></i> <a href="#">Edward Rooster</a></li>
                                            <li><i class="rounded-x sk fa fa-skype"></i> <a href="#">edwardRooster77</a></li>
                                            <li><i class="rounded-x gp fa fa-google-plus"></i> <a href="#">rooster77edward</a></li>
                                            <li><i class="rounded-x gm fa fa-envelope"></i> <a href="#">edward77@gmail.com</a></li>
                                        </ul>
                                    </div>       
                                </div>
                            </div>
                            <!--End Social Icons v3-->

                            <!--Skills-->
                            <div class="col-sm-6 sm-margin-bottom-30">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-lightbulb-o"></i> Skills</h2>
                                        <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                    </div>
                                    <div class="panel-body">
                                        <small>HTML/CSS</small>
                                        <small>82%</small>
                                        <div class="progress progress-u progress-xxs">
                                            <div style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar" class="progress-bar progress-bar-u">
                                            </div>
                                        </div>

                                        <small>Photoshop</small>
                                        <small>77%</small>
                                        <div class="progress progress-u progress-xxs">
                                            <div style="width: 77%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="77" role="progressbar" class="progress-bar progress-bar-u">
                                            </div>
                                        </div>

                                        <small>PHP</small>
                                        <small>85%</small>
                                        <div class="progress progress-u progress-xxs">
                                            <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-u">
                                            </div>
                                        </div>

                                        <small>Javascript</small>
                                        <small>81%</small>
                                        <div class="progress progress-u progress-xxs">
                                            <div style="width: 81%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="81" role="progressbar" class="progress-bar progress-bar-u">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>    
                            <!--End Skills-->            
                        </div><!--/end row-->    

                        <hr>                                

                        <!--Timeline-->
                        <div class="panel panel-profile">
                            <div class="panel-heading overflow-h">
                                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-briefcase"></i> Experience</h2>
                                <button id="exp_enable" class="btn btn-xs btn-primary btn-flat pull-right" type="button">edit</button>
                            </div>
                            <div class="panel-body margin-bottom-40">
                                  <button id="exp_btn" type="button" class="btn-u"><i class="fa fa-plus"></i> Add new</button>
                                <div id="exp_save" style="display: none;padding-top: 20px;padding-bottom: 20px;font-family:'Raleway'">
                                   <form id="saveForm2" name="saveForm2" role="form" method="post">
                              <fieldset>
                                  <legend class="text-light-blue">Experience Info  <span id="msg2"></span></legend>
                                  <div class="row">
                                <section class="col-xs-4">
                                <div class="form-group">
                                    <label for="organization">Organization</label><input type="text" class="form-control" name="organization">
                                </div>
                                </section>
                               <section class="col-xs-4">
                                <div class="form-group">
                                    <label for="role">Role</label><input type="text" class="form-control" name="role">
                                </div>
                                </section>
                               <section class="col-xs-4">
                                <div class="form-group">
                                    <label for="us_exp">User Experience</label><textarea class="form-control" name="us_experience"></textarea>
                                </div>
                                </section>
                                  </div>
                                  <div class="row">
                                       <section class="col-xs-4">
                                <div class="form-group">
                                        <label for="join_date">Join Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input class="form-control" name="join_date" id='datemask' data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text">
                                        </div>
                                         </div>
           
                                </section>
                                       <section class="col-xs-4">
                                <div class="form-group">
                                     <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input class="form-control" name="end_date" id='datemask2' data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text">
                                        </div>
                                         </div>
                                </div>
                                </section>
                                       <section class="col-xs-4">
                               <div class="form-group">
                                            <div class="checkbox">
                                                <label for="cur_emp">
                                                    <input name="is_current_role" value="1" type="checkbox">
                                                    Current Employee
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input name="is_entreprenur" value="1" type="checkbox">
                                                    Entreprenur
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input name="is_ngo" value="1" type="checkbox">
                                                    NGO
                                                </label>
                                            </div>
                                        </div>
                                </section>
                                  </div>
                              </fieldset>
<button type="submit" name="save_exp" id="save_exp" class="btn btn-primary">Save</button> &nbsp;  <button id="exp_btn_cancel" class="btn btn-default">Cancel</button>
                                   
                                  </form>
                                </div>
                                <ul class="timeline-v2 timeline-me">
                                    <li id="new_exp" style=" padding-bottom: 20px"></li>
                                    <?php if(!empty($profile['exp'])) {
                                        
                                       foreach ($profile['exp'] as $data)
                                       {
                                        ?>
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span><?php echo $data['organization'] ?>-<?php echo $data['role'] ?></span> <span><?php echo $data['join_date'] ?>&nbsp; to &nbsp;<?php echo $data['end_date'] ?></span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                            <h2> University</h2>
                                            <p><?php echo $data['us_experience'] ?></p> 
                                        </div>
                                    </li>
                                    <?php
                                       }
                                    
                                       } ?>
                                </ul>
                            </div>    
                        </div>
                        <!--End Timeline-->
                        <br>
                        <!--Timeline-->
                        <div class="panel panel-profile">
                            <div class="panel-heading overflow-h">
                                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-book"></i> Education</h2>
                                <button id="edu_enable" class="btn btn-xs btn-primary btn-flat pull-right" type="button">edit</button>
                            </div>
                            <div class="panel-body">
                                <button id="edu_btn" type="button" class="btn-u"><i class="fa fa-plus"></i> Add new</button>
                                <div id="edu_save" style="display: none;padding-top: 20px;padding-bottom: 20px;font-family:'Raleway'">
                                   <form id="saveForm" name="saveForm" role="form" method="post">
  <fieldset>
      <legend class="text-light-blue">Educational Info  <span id="msg2"></span></legend>
                                       <div class="row">
<section class="col-xs-4">
                                        <div class="form-group">
                                            <label for="degree">Degree</label><input type="text" class="form-control" name="degree" id="degree">
                                        </div>
</section>
            <section class="col-xs-4">                            <div class="form-group">
                                            <label>Course type</label>
                                            <select name="type_degree" id="type_degree" class="form-control">
                                               <option value="full-time">full-time</option>
                                               <option value="part-time">part-time</option>
                                            </select>
                                        </div>
            </section>
                <section class="col-xs-4"> 
                                        <div class="form-group">
                                            <label for="college">College</label><input type="text" class="form-control" name="college" id="college">
                                        </div>
                </section>       
                                       </div>
                                             <div class="row">
<section class="col-xs-4">
                                         <div class="form-group">
                                             <label for="duration">Duration Period</label> <div class='selectMonths'>
                                                 <input type='text' id="duration" name="duration" placeholder='choose duration' readonly /><i class="caret"></i>
                                         </div>
                                         </div>
</section>
                                                 <section class="col-xs-4">
                                        <div class="form-group">
                                            <label for="uregno">University Regno.</label><input type="text" class="form-control" name="university_regno">
                                        </div>
                                                 </section>
                                                 <section class="col-xs-4">
                                        <div class="form-group">
                                            <label for="specialization">Specialization</label><input type="text" class="form-control" name="specialization">
                                        </div>
                                                 </section>
                                             </div>
                                                   <div class="row">
<section class="col-xs-4">
                                         <div class="form-group">
                                            <label for="cgpa">CGPA</label><input type="text" class="form-control" name="cgpa">
                                        </div>
</section>
                            <section class="col-xs-4">           <div class='form-group'>
                                            <label for="current_stud">Current Pursuing</label>
                                            <div class="input-group"> <input type="radio" name="is_current_stud" value="1">Yes</input>
                                               <input type="radio" name="is_current_stud" value="0">No</input></div>
                                        </div>
                            </section>
                                                   </div>                   
                                </fieldset>
                                   <button type="submit" name="save_ed" id="save_ed" class="btn btn-primary">Save</button> &nbsp;  <button id="edu_btn_cancel" class="btn btn-default">Cancel</button>
                                    
                                </form>
                                  </div>
                                
                                <ul class="timeline-v2 timeline-me">
                                    <li id="new_edu" style=" padding-bottom: 20px"></li>
                                    <?php if(!empty($profile['edu'])) {
                                        
                                       foreach ($profile['edu'] as $data)
                                       {
                                        ?>
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span><?php echo $data['degree'] ?>-<?php echo $data['specialization'] ?></span> <span><?php echo $data['duration'] ?></span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                            <h2> University</h2>
                                            <p><?php echo $data['college'] ?></p> 
                                        </div>
                                    </li>
                                    <?php
                                       }
                                    
                                       } ?>
                                </ul>
                            </div>    
                        </div>
                        <!--End Timeline--> 

                        <hr>

                        <div class="row">
                            <!--Social Contacts v2-->
                            <div class="col-sm-6">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-lightbulb-o"></i> Social Contacts <small>(option 2)</small></h2>
                                        <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-unstyled social-contacts-v3">
                                            <li><i class="rounded-x tw fa fa-twitter"></i> <a href="#">edward.rooster</a></li>
                                            <li><i class="rounded-x fb fa fa-facebook"></i> <a href="#">Edward Rooster</a></li>
                                            <li><i class="rounded-x sk fa fa-skype"></i> <a href="#">edwardRooster77</a></li>
                                            <li><i class="rounded-x gp fa fa-google-plus"></i> <a href="#">rooster77edward</a></li>
                                            <li><i class="rounded-x gm icon-envelope"></i> <a href="#">edward77@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                            <!--End Social Contacts v2-->

                            <!--Design Skills-->
                            <div class="col-sm-6">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i> Language Skills</h2>
                                        <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                             <div class="p-chart col-sm-6 col-xs-6 sm-margin-bottom-10">
                                                <div class="circle margin-bottom-20" id="circle-4"><div class="circles-wrp" style="position:relative; display:inline-block;"><svg width="70" height="70"><path fill="transparent" stroke="#eee" stroke-width="2" d="M 34.99307511107436 1.0000007052071638 A 34 34 0 1 1 34.95277468210556 1.0000327975253782 Z"></path><path fill="transparent" stroke="#72c02c" stroke-width="2" d="M 34.99307511107436 1.0000007052071638 A 34 34 0 1 1 3.395134154018084 47.53524849604051 "></path></svg><div class="circles-text-wrp" style="position:absolute; top:0; left:0; text-align:center; width:100%; font-size:17.5px; height:70px; line-height:70px;"><span class="circles-number"><span class="circles-number">69</span></span><span class="circles-text">%</span></div></div></div>
                                                <h3 class="heading-xs">Engagement Score</h3>
                                                <p>Celery coriander bitterleaf epazote radicchio shallot.</p>
                                            </div> 
                                            <div class="p-chart col-sm-6 col-xs-6">
                                                <div class="circle margin-bottom-20" id="circle-5"><div class="circles-wrp" style="position:relative; display:inline-block;"><svg width="70" height="70"><path fill="transparent" stroke="#eee" stroke-width="2" d="M 34.99307511107436 1.0000007052071638 A 34 34 0 1 1 34.95277468210556 1.0000327975253782 Z"></path><path fill="transparent" stroke="#9B6BCC" stroke-width="2" d="M 34.99307511107436 1.0000007052071638 A 34 34 0 1 1 4.215417757692592 20.56706903755819 "></path></svg><div class="circles-text-wrp" style="position:absolute; top:0; left:0; text-align:center; width:100%; font-size:17.5px; height:70px; line-height:70px;"><span class="circles-number"><span class="circles-number">82</span></span><span class="circles-text">%</span></div></div></div>
                                                <h3 class="heading-xs">Progfile Completness</h3>
                                                <p>Celery coriander bitterleaf epazote radicchio shallot.</p>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                            <!--End Design Skills-->            
                        </div><!--/end row-->
                    </div>
                    <!--End Profile Body-->
                
</div>
    
</div>
</div>