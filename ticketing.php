<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.hor{
			display:inline-block
		}
	</style>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>           
<script>
	var app=angular.module("root",[]);
	app.controller("ctrl",["$scope",function($scope){		
		$scope.nums=[0,0,0,0];
		$scope.username="<?php if(COUNT($_SESSION)!=0)echo $_SESSION['username'];?>";
		$scope.mid=<?php echo $_GET['mid']; ?>;
		$scope.update=function(index,val){
			if(val==-1){
				if($scope.nums[index]>0)
					$scope.nums[index]--;
			}
			else
				$scope.nums[index]++;				
		}
		$scope.submit=function(){
			window.location.assign("ticketing_confirm.php?cat1="+$scope.nums[0]+"&cat2="+$scope.nums[1]+"&cat3="+$scope.nums[2]+"&cat4="+$scope.nums[3]+"&mid="+$scope.mid);
		}
	}]);
</script>
<script src="js/navbar.js"></script>
<script src="js/display_query.js"></script>
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />      
<link rel="stylesheet" href="css/navbar.css">
<style>
	* {
		box-sizing: border-box;
	}

	body {
		margin: 0;
		background: url('https://img.fifa.com/images/fwc/2018/bg.jpg');
		background-repeat: no-repeat;

	}

	.upar {
		background-color: #002c5f;
		padding: 1em;
		color: #fff;
	}
</style>
<body ng-app="root" ng-controller="ctrl">
	<navbar active="#ticketing" username="username"></navbar>
	<div class="container" style="background-color: #fff;text-align: center">
        <div class="upar row">
            <div class="col-sm-12">
                <h1>Ticketing</h1>
            </div>
        </div>
        <div class="tic-det row">
            <div class="col-sm-12">
                <img src="https://img.fifa.com/images/fwc/2018/promos/ticketing/salesphases_v2.en.png">
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top:3em;">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Ticket Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Ticket Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Ticket Information</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="tic-cat row" style="margin-top:3em;">
                    <div class="col-sm-12">
                        <h2>Ticket Categories</h2>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-70"
                                        src="https://img.fifa.com/mm/photo/tournament/ticketing/02/90/75/39/2907539_big-lnd.jpg"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70"
                                        src="https://img.fifa.com/mm/photo/tournament/ticketing/02/90/75/42/2907542_big-lnd.jpg"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70"
                                        src="https://img.fifa.com/mm/photo/tournament/ticketing/02/90/75/43/2907543_big-lnd.jpg"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div style="padding-left: 3em;padding-right: 10em;text-align: left">
                            <p>There will be five price categories offered for the 2018 FIFA World Cup Russia™:</P>
                            <p>Individual Match Tickets are offered in categories 1 to 4 and as Partially Obstructed
                                View Tickets; Venue Specific Ticket Series are offered in Categories 1 to 4; Team
                                Specific Ticket Series, Supporter Tickets and Conditional Supporter Tickets are offered
                                in Categories 1 to 3.
                            </p>

                            <p><b> Category 1</b> This is the highest priced and located in prime areas within the
                                Stadium.</p>

                            <p><b>Categories 2 and 3</b> These are located outside of the Category 1 area.</p>

                            <p><b>Category 4</b> This is the most affordable and is reserved exclusively for residents
                                of Russia.</p>
						</div>
						<div>
						<div class="container" style="margin-top:3em;margin-bottom:3em">
							<h1 class="display-4" style="border-bottom: 1px solid black;padding:0.4em;">Book your tickets</h1>
						</div>                                                                                 
							<ul type="none">
								<li ng-repeat="x in nums track by $index">
									<ul >
										<li class="hor">
											<input type="button" value="+" ng-click="update($index,1)">		
										</li>
										<li class="hor">
											Category {{$index+1}}			
										</li>
										<li class="hor">
											<input type="button" value="-" ng-click="update($index,-1)">		
										</li>
										<li class="hor">
											{{nums[$index]}}
										</li>
									</ul>
								</li>		
							</ul>
							<input type="submit" value="Submit" ng-click="submit()">
						</div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tic-price row" style="margin-top:3em;">
                    <div class="col-sm-12">
                        <h2>Ticket Pricing (In RUB)</h2>
                        <img src="https://img.fifa.com/image/upload/t_l3/he6depvktqsxhgs1vges.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="https://img.fifa.com/mm/photo/tournament/ticketing/02/90/09/60/2900960_full-lnd.jpg"
                            class="img-fluid" style="margin:3em;">
                        <div style="text-align: left;padding-right:10em;">
                            <p>In order to ensure a fair and transparent allocation of Tickets, the procedure for Ticket
                                allocation for the 2018 FIFA World Cup RussiaTM has been divided into three phases. The
                                dates given below are all subject to possible change without prior notice which will be
                                communicated on www.FIFA.com/tickets.</p>
                            <p>
                                The first Tickets for the 2018 FIFA World Cup RussiaTM went on sale on 14th September
                                2017.
                            </p>
                            <p>
                                Sales Phase (1) was divided into two Sales Periods. First, fans were able to request
                                Tickets on a Random Selection Draw basis (from 14th September 2017 until 12th October
                                2017), and then after the Random Selection Draw has taken place and the successful
                                Ticket Applications were determined, they were able to purchase the remaining Tickets on
                                a First Come First Served basis from 16th November 2017 to 28th November 2017. During
                                Sales Phase (1), fans were able to buy Tickets based on the date and venue of a Match
                                (teams playing were determined later), or to follow a specific team (date and venue
                                determined later). This is because during Sales Phase (1) it was not yet determined
                                where specific teams were playing any given Match, with the exception of Russia as Team
                                A1.
                            </p>
                            <p>
                                Sales Phase (2) commenced after the Final Draw when football fans found out where all
                                participating teams would be playing. Sales Phase (2) is also divided into two Sales
                                Periods. The first Sales Period of Sales Phase (2) was again a Ticket Application
                                collection period with applications submitted from 5th December 2017 until 31st January
                                2018. Random Selection Draws took place in order to determine which Ticket Applications
                                were successful. The remaining Tickets were available from 13th March 2018 to 3rd April
                                2018 on a First Come First Served basis, where Ticket purchases were processed as a
                                real-time transaction, which means the Tickets were confirmed at the point of purchase.
                            </p>
                            <p>
                                In the Last Minute Sales Phase from 18th April 2018 up until the final Match day of the
                                Competition, the remaining Tickets will be available to all customers online and, from
                                1st May, 2018 (subject to change) until the final Match day of the competition,
                                remaining Tickets will also be available Over the Counter at the designated FIFA Venue
                                Ticketing Centres. During the Last Minute Sales Phase, Ticket purchases are processed as
                                a real-time transaction to the extent inventory remains available. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
	
</body>
</html>
