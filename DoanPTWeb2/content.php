

 <script src="js/angular.min.js"></script>
<section class="reservation">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header wow fadeInDown">
                <h1>Reservations<br><small>Book a table online. Leads will reach in your email.</small></h1>
            </div>
        </div>
    </div>
    <div class="reservation-form wow fadeInUp">
    <div ng-app="myApp" ng-controller="myCtrl">
        <form action="#" id="reservationform" method="POST">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="datepicker">Date</label>
                        <input type="text" name="date" class="form-control" ng-model="date" id="datepicker" placeholder="Pick a date" title="Please choose a date" required>
                        <i class="fa fa-calendar-o"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" ng-model="name" placeholder="Full Name" title="Your Full Name please" required>
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="timepicker">Time</label>
                        <input type="text" class="form-control" id="timepicker" name="time" ng-model="time" placeholder="Pick a time" title="Choose Preferred Time" required>
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" ng-model="email" placeholder="Your Email ID" 
                        title="Please enter your email id" required>
                        <i class="fa fa-envelope-o"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="guests">Guests</label>
                        <input class="form-control" type="number" id="guests" name="guests" ng-model="guests" placeholder="How many of you?" title="Please enter number of guests" required>
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" ng-model="phone" placeholder="Enter your Phone Number" title="Please enter your phone number" required>
                        <i class="fa fa-phone"></i>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="reservation-btn">
                    <button type="submit" class="btn btn-default btn-lg" id="js-reservation-btn">Make Reservation</button>
                    <div id="js-reservation-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                    </div>
                </div>
                 </div> 
                <div id="myModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2>Modal Header</h2>
                </div>
                <div class="modal-body">
                                             
                                <p>Date: {{date}}</p>
        
                                <p>Your Name: {{name}}</p>
                            
                                <p>Time: {{time}}</p>
                           
                                <p>Email Address: {{email}}</p>
                            
                                <p>Guests: {{guests}}</p>
                            
                                <p>Phone Number: {{phone}}</p>   
                            
                </div>
                <div class="modal-footer">
                  <h3>Modal Footer</h3>
                </div>
              </div>
            </div>
           
        </form>
    </div>



    <div class="reservation-footer">
        <p>You can also call: <strong>+1 224 6787 004</strong> to make a reservation.</p>
        <span></span>
    </div>
</div>
</div>
</section>


<section class="features">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header wow fadeInDown">
            <h1 class="white">Our features<br><small>Little things make us best in town</small></h1>
            </div>
        </div>
    </div>
    <div class="row wow fadeInUp">
        <div class="col-md-4 col-sm-6">
            <div class="features-tile">
                <div class="features-img">
                    <img src="images/thumb5.png" alt="" />
                </div>
                <div class="features-content">
                    <div class="page-header">
                        <h1>Serving with love</h1>
                    </div>
                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="features-tile">
                <div class="features-img">
                    <img src="images/thumb6a.png" alt="" />
                </div>
                <div class="features-content">
                    <div class="page-header">
                        <h1>Serving with love</h1>
                    </div>
                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="features-tile">
                <div class="features-img">
                    <img src="images/thumb7.png" alt="" />
                </div>
                <div class="features-content">
                    <div class="page-header">
                        <h1>Serving with love</h1>
                    </div>
                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>