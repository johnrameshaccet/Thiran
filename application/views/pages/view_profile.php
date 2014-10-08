<a style="float: right" href="<?php echo base_url(); ?>profile/edit_profile"> Edit profile</a>
<div class="row">
    <div class="col-md-12">
                    <!--Profile Body-->
                    <div class="profile-body">
                        <div class="profile-bio">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="img-responsive md-margin-bottom-10" src="<?php if(!empty($profile)){ echo $profile['photo'];} ?>" alt="">
                                    
                                </div>
                                <div class="col-md-7">
                                    <h2><?php echo $user['first_name']; ?>&nbsp;<?php echo $user['last_name']; ?></h2>
                                    <span><strong>Job:</strong> Web Developer</span>
                                    <span><strong>Position:</strong> Web Designer</span>
                                    <hr>
                                    <i class="fa fa-calendar"></i>&nbsp; <?php if(!empty($profile)){ echo $profile['dob'];} ?><br>
                                    <i class="fa fa-map-marker"></i>&nbsp; <?php if(!empty($profile)){ echo $profile['address'];} ?> <br>
                                    &nbsp;  <?php if(!empty($profile)){ echo $profile['city'];} ?><br> 
                                    &nbsp;  <?php if(!empty($profile)){ echo $profile['state'];} ?><br>
                                    &nbsp;  <?php if(!empty($profile)){ echo $profile['pincode'];} ?><br><br>
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
                                        <small>92%</small>
                                        <div class="progress progress-u progress-xxs">
                                            <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
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
                                <a href="#"><i class="fa fa-cog pull-right"></i></a>
                            </div>
                            <div class="panel-body margin-bottom-40">
                                <ul class="timeline-v2 timeline-me">
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span>Mobile Design</span> <span>2012 - Current</span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                            <h2>BFC NYC Partners</h2>
                                            <p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Peasprouts wattle seed rutabaga okra yarrow cress avocado grape.</p> 
                                        </div>
                                    </li>
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span>Web Designer</span> <span>2007 - 2012</span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                        <h2>Freelance</h2>
                                            <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span>Photodesigner</span> <span>2003 - 2007</span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                        <h2>Toren Condo</h2>
                                            <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>    
                        </div>
                        <!--End Timeline-->

                        <!--Timeline-->
                        <div class="panel panel-profile">
                            <div class="panel-heading overflow-h">
                                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-book"></i> Education</h2>
                                <a href="#"><i class="fa fa-cog pull-right"></i></a>
                            </div>
                            <div class="panel-body">
                                <ul class="timeline-v2 timeline-me">
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span>Bachelor of IT</span> <span>2003 - 2000</span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                            <h2>Harvard University</h2>
                                            <p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Peasprouts wattle seed rutabaga okra yarrow cress avocado grape.</p> 
                                        </div>
                                    </li>
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span>Web Design</span> <span>1997 - 2000</span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                        <h2>Imperial College London</h2>
                                            <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time datetime="" class="cbp_tmtime"><span>High School</span> <span>1988 - 1997</span></time>
                                        <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel">
                                        <h2>Chicago High School</h2>
                                            <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot.</p>
                                        </div>
                                    </li>
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
