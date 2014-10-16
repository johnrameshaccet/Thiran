
<div class="row">
 <div class="col-md-12">
  <!-- Custom Tabs -->
   <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Timeline</a></li>
                                     <?php if($user['role']=="ST"){ ?>
                                    <li><a href="#tab_2" data-toggle="tab">Educational</a></li>
                                    <?php }?>
                                    <li><a href="#tab_3" data-toggle="tab">Profession</a></li>
                               
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            Dropdown <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="pull-right"><a href="#" class="text-muted" title="profile settings"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                       <form id="save_1" name="save_1" role="form" method="post">
                <fieldset>
                    <legend class="text-light-blue">Personal Info <span id="msg"></span></legend>
                                        <div class="form-group">
                                            <label  for="first_name">First Name</label><input type="text" readonly class="form-control" id="first_name" value="<?php echo $user['first_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label><input type="text" readonly class="form-control" id="last_name" value="<?php echo $user['last_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Date Of Birth:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input class="form-control" required oninvalid="this.setCustomValidity('Enter DOB Here')" oninput="setCustomValidity('')"  name="dob" id='datemask' data-inputmask="'alias': 'dd/mm/yyyy'" value="<?php if(!empty($profile)){ echo $profile['dob'];}?>" data-mask="" type="text">
                                        </div>
                                         </div>
                                        <div class='form-group'>
                                            <label for="gender">Gender</label>
                                            <div class="input-group"> <input type="radio" required name="gender" <?php  if(!empty($profile)&&($profile['gender']=='male')){ echo 'checked="checked"';}?> value="male">Male</input>
                                               <input type="radio" name="gender" required <?php if(!empty($profile)&&($profile['gender']=='female')){ echo 'checked="checked"';}?> value="female">Female</input></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" id="address"  required oninvalid="this.setCustomValidity('Enter address Here')" oninput="setCustomValidity('')"  name="address" rows="3"><?php if(!empty($profile)){ echo $profile['address'];} ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select name="city"  required oninvalid="this.setCustomValidity('Pick one Here')" oninput="setCustomValidity('')" class="form-control">
                                   
                                               <?php if(!empty($profile)){ echo '<option value='.$profile['city'].'>'.$profile['city'].'</option>';}else{echo '<option value="0">select city</option>';} ?>
                                               <option value="chennai">chennai</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <select name="state"  required oninvalid="this.setCustomValidity('Pick one Here')" oninput="setCustomValidity('')" class="form-control">
                                                 
                                                 <?php if(!empty($profile)){ echo '<option value='.$profile['state'].'>'.$profile['state'].'</option>';}else{echo '<option value="0">select state</option>';} ?>
                                                <option value="TN">Tamil Nadu</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                             <label for="pincode">Pincode</label><input   required oninvalid="this.setCustomValidity('Enter pincode Here')" oninput="setCustomValidity('')"  type="text" class="form-control" value="<?php if(!empty($profile)){ echo $profile['pincode'];} ?>" id="pincode" name="pincode">
                                        </div>  
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                </fieldset>
                                           <div class="box-footer"> <button type="submit" name="save1" id="personal_save" class="btn btn-primary">Save</button> &nbsp; <button type="reset" class="btn btn-default">Reset</button></div>
                                       </form>
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <?php if($user['role']=="ST" && $user['profile_notify']!="empty"){ ?>
                <form id="save_2" name="save_2" role="form" method="post">
  <fieldset>
      <legend class="text-light-blue">Educational Info  <span id="msg2"></span></legend>
                                        <div class="form-group">
                                            <label for="tenth">Tenth Percent</label><input type="text" class="form-control" name="tenth" id="tenth" value="<?php if(!empty($profile['tenth'])){ echo $profile['tenth'];} ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="twelvth">Twelvth Percent</label><input type="text" class="form-control" name="twelvth" id="twelvth" value="<?php if(!empty($profile['twelvth'])){ echo $profile['twelvth'];} ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="diploma">Diploma Percent</label><input type="text" class="form-control" name="diploma" id="diploma" value="<?php if(!empty($profile['diploma'])){ echo $profile['diploma'];} ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="degree">UG Degree</label><input type="text" class="form-control" name="degree" id="degree" value="<?php if(!empty($profile['degree'])){ echo $profile['degree'];} ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Course type</label>
                                            <select name="type_degree" id="type_degree" class="form-control">
                                   
                                               <?php if(!empty($profile['type_degree'])){ echo '<option value='.$profile['type_degree'].'>'.$profile['type_degree'].'</option>';}else{echo '<option value="0">select course type</option>';} ?>
                                               <option value="full">full-time</option>
                                               <option value="part">part-time</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="college">College</label><input type="text" class="form-control" name="college" readonly id="college" value="<?php echo $user['college_id']; ?>">
                                        </div>
                                         <div class="form-group">
                                             <label for="duration">Duration Period</label> <div class='selectMonths'>
                                                 <input type='text' id="duration" name="duration" placeholder='choose duration' readonly value='<?php if(!empty($profile['duration'])){ echo $profile['duration'];} ?>' /><i class="caret"></i>
                                         </div>
                                         </div>
                                        <div class="form-group">
                                            <label for="uregno">University Regno.</label><input type="text" class="form-control" name="university_regno" value="<?php if(!empty($profile['university_regno'])){ echo $profile['university_regno'];} ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="specialization">Specialization</label><input type="text" class="form-control" name="specialization" value="<?php if(!empty($profile['specialization'])){ echo $profile['specialization'];} ?>">
                                        </div>
                 
                                         <div class="form-group">
                                            <label for="cgpa">CGPA</label><input type="text" class="form-control" name="cgpa" value="<?php if(!empty($profile['cgpa'])){ echo $profile['cgpa'];} ?>">
                                        </div>
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <input type="hidden" name="is_current_stud" value="1" />
  </fieldset>    
                                
 
                
                    <div class="box-footer"><button type="submit" name="save2" id="edu_save" class="btn btn-primary">Save</button> &nbsp; <button type="reset" class="btn btn-default">Reset</button></div>
                                </form>
                   <?php }
                   else{?>
                                        <p>please fill the personal details first..</p>
                   <?php }?>
                                    </div><!-- /.tab-pane -->
                            <div class="tab-pane active" id="tab_3">
                               
                            </div>
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                    
                                </div>
   
</div>
