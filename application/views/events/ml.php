<div class="single-event-container" id="{pageId}">
    <div class="page-area" style="background:url('{base_url}assets/img/gallery/0.jpg')">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline">
                            <h3>Mobile Legends Tournament</h3>
                        </div>
                        <ul class="breadcrumb-bg">
                            <li class="home-bread"> <a href="{base_url}events">Events</a></li>
                            <li>Mobile Legends Tournament</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Events Area -->
    <div class="product-area bg-color-1 area-padding">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline white-headline text-center">
                        <h3>Events</h3>
                        <p>Join and register your team in our upcomming tournament events</p>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="best-product">
                    <!-- Start single product -->
                    <div class="col-md-12 col-sm-12 col-xs-12 single-event">
                        <div class="single-product">
                            <h1>Mobile Legends: Summer Tournament</h1>
                            <div class="product">
                                <img src="{base_url}assets/img/events/mobile-legends-tournament.jpg" alt="Mobile Legends Tournament">
                            </div>
                            <!-- Start product content -->
                            <div class="col-md-6 col-sm-6">
                                <div class="service-details">
                                    <p>Date: March 28, 2020</p>
                                    <p>Call time: 9am</p>
                                    <p>Game match start: 10am</p>
                                    <br>
                                    <h5>Prizes:</h5>
                                    <p class="pool">Prize Pool: P15,000</p>
                                    <p>Champion: P10,000 + Trophy + Certificate</p>
                                    <p>2nd Place: P3,000 + Certificate</p>
                                    <p>3rd Place: P2,000 + Certificate</p>
                                    <br>
                                    <p>Registration Fee: P500</p>
                                    <br>
                                    <p>Location: Cabrera St. Pasay City (In front of San Roque Church) <a href="https://goo.gl/maps/dDSSkXtak5a47sN87">View Google Map</a><br>
                                    
                                    Call time: 9AM<br>
                                    Start Time: 10AM<br>
                                    </p>
                                    <br>
                                    <label>TOURNAMENT DETAILS</label><br>
                                    Open to all male & female players<br>
                                    <label>RULES</label>
                                    <ul>
                                        <li>NO CHANGING OF PLAYERS, REGISTERED PLAYER ONLY WILL BE ACCEPTED</li>
                                        <li>EACH TEAMS WILL BE GIVEN 10 MINUTES ONLY FOR WAITING/SETTING UP BEFORE EVERY MATCH ELSE WILL GIVE OPPONENT AN AUTOMATIC WIN AND BYE BETTER LUCK NEXT TIME !</li>
                                    </ul>
                                    <label>Tournament Format</label>
                                    <ul>
                                        <li>5 vs 5 (5 per team, substitute not allowed)</li>
                                        <li>Best of 3</li>
                                    </ul>
                                    <label>Player Restrictions</label>
                                    <ul>
                                        <li>OPEN TO ALL PLAYERS/TEAMS</li>
                                    </ul>

                                    <br>
                                    <h5>How To Join?</h5>
                                    <p class="step">Step 1: Register your team</p>
                                    <label>Registration option:</label>
                                    <ul>
                                        <li>Register in website (fill up the registration form)</li>
                                        <li>Register in facebook page (shortlink)</li>
                                        <li>Visit us in Timestamp Cyber Cafe shop</li>
                                    </ul>
                                        * this step only consider as pre-registered if not proceed to step 2<br><br>
                                    <p class="step">Step 2: Pay registration fee</p>
                                    <label>Registration payment option:</label>
                                    <ul>
                                        <li>Transfer Gcash</li>
                                        <li>Bank transfer</li>
                                        <li>Pay at Timestamp Cyber Cafe shop</li>
                                    </ul>

                                    <br>
                                    *Pc rent not included in Registration Fee

                                </div>
                            </div>
                            <!-- End product content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
                                <div class="contact-form">
                                    <div class="service-details row">
                                        <h4>Register your team</h4>
                                        <?php if($this->session->flashdata('register_msg')): ?>
                                        <div class="alert alert-<?php echo $this->session->flashdata('register_msg'); ?> alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <strong>
                                            <?php 
                                                switch ($this->session->flashdata('register_msg')) {
                                                case 'success':
                                                    $msg = 'Successfully Registered!';
                                                    break;
                                                case 'warning':
                                                    $msg = 'Failed to registere, Please try again.';
                                                    break;
                                                }
                                                echo $msg; 
                                                ?>
                                            </strong>
                                        </div>
                                        <?php endif; ?>    
                                        <form id="registerEvent" method="POST" action="{base_url}events/register">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label><span>*</span> Team Name</label>
                                                <input type="text" name="team_name" id="team_name" class="form-control" placeholder="Your Team Name" required="" data-error="Please enter your name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Captain Name</label>
                                                    <input type="text" name="captain" id="captain" class="form-control" placeholder="Name" required="" data-error="Please enter your name" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Captain Mobile Number</label>
                                                    <input type="text" name="captain_mobile" class="phone form-control" id="captain_mobile" placeholder="Mobile Number" required="" data-error="Please enter your mobile number" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Player 1 Name</label>
                                                    <input type="text" name="player1" id="player1" class="form-control" placeholder="Name" required="" data-error="Please enter your name" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Player 1 Mobile Number</label>
                                                    <input type="text" name="player1_mobile" class="phone form-control" id="player1_mobile" placeholder="Mobile Number" required="" data-error="Please enter your mobile number" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Player 2 Name</label>
                                                    <input type="text" name="player2" id="player2" class="form-control" placeholder="Name" required="" data-error="Please enter your name" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Player 2 Mobile Number</label>
                                                    <input type="text" name="player2_number" class="phone form-control" id="player2_number" placeholder="Mobile Number" required="" data-error="Please enter your mobile number">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Player 3 Name</label>
                                                    <input type="text" name="player3" id="player3" class="form-control" placeholder="Name" required="" data-error="Please enter your name" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Player 3 Mobile Number</label>
                                                    <input type="text" name="player3_number" class="phone form-control" id="player3_number" placeholder="Mobile Number" required="" data-error="Please enter your mobile number">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label><span>*</span> Player 4 Name</label>
                                                    <input type="text" name="player4" id="player4" class="form-control" placeholder="Name" required="" data-error="Please enter your name" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Player 4 Mobile Number</label>
                                                    <input type="text" name="player4_number" class="phone form-control" id="player4_number" placeholder="Mobile Number" required="" data-error="Please enter your mobile number">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Reserve player Name</label>
                                                    <input type="text" name="player5" id="player5" class="form-control" placeholder="Name" required="" data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Reserve Player Mobile Number</label>
                                                    <input type="text" name="player5_number" class="phone form-control" id="player5_number" placeholder="Mobile Number" required="" data-error="Please enter your mobile number">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <input type="hidden" name="event_name" value="mobile-legends">
                                                <input type="hidden" name="event_id" value="mobile-legends-tournament-march-28-2020">
                                                <button type="submit" id="submit_register" class="add-btn contact-btn">Register</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>
                                            </div>      
                                        </form>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single product -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Events Area -->

    <!-- Start Adds Area -->
    <?php $this->view('inc/reloga'); ?>
    <!-- End Adds Area -->
</div>