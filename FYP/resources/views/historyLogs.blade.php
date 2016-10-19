<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"
        rel="stylesheet">


        <style>
        body{
          background-color: rgba(184, 29, 54);
        }

        .centered-form .panel{
          background: rgba(255, 255, 255, 0.8);
          box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
          color: #4e5d6c;
        }

        .centered-form{
          margin-top: 60px;
        }

        .navbar-default {
        background-color: #B81D36;
        border-color: #030033;
        }

        .navbar {
        border-radius: 8px;
         min-height: 40px;
        }

        .navbar-nav li a{
        font-size: 18px;
        color:  black;
        }

        .btn-info{
          background-color: #B81D36;
        }

        .navbar-default .navbar-text {
        color: #FFF;
        }
        </style>

    </head>

    <body >

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Knock Knock</a> 
            </div>
            <a href="#" class="pull-left"><img style="max-width:100px; margin-top: 100px src="/KnockLogo.png"></a>
            <ul class="nav navbar-nav">
              
              <li><a href="#">List</a></li>
              <li><a href="#">Register</a></li>
              <li class="active"><a href="#">History Log</a></li> 
            </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        
		<div class="container">
		  <p><H2 href="#"><span class="glyphicon glyphicon-hourglass"></span> History Log </H2></p>
		  <p>Last Updated: <b>19/10/2016</b></p>

		  <div class="row">

			<div class="col-xs-2 col-sm-2 col-md-2">
			<h6>From:</h6>
              <select class="form-control" id="updateTime" placeholder="Choose date:">
              <option>Select date :</option>
              <option>19th Jan 2016</option>
              <option>20th Jan 2016</option>
              <option>21st Jan 2016</option>
              <option>22nd Jan 2016</option>
              <option>23rd Jan 2016</option>
              </select>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
            <h6>To:</h6>
              <select class="form-control" id="updateTime" placeholder="Choose date:">
			  <option>Select date :</option>
              <option>19th Jan 2016</option>
              <option>20th Jan 2016</option>
              <option>21st Jan 2016</option>
              <option>22nd Jan 2016</option>
              <option>23rd Jan 2016</option>
              </select>
            </div>
            <br/>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>

           </div>

		  <table class="table">
		    <thead>
		      <tr>
		        <th>Name of Visitor</th>
		        <th>Driver's License Info</th>
		        <th>Contact No</th>
		        <th>Car Registration No.</th>
		        <th>Unit No.</th>
		        <th>Time of Visit</th>
		        <th>Purpose of Visit</th>
		        <th>Remarks</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>John</td>
		        <td>K123456</td>
		        <td>012-341 5910</td>
		        <td>AAA 1111</td>
		        <td>284-11-01</td>
		        <td>3.00pm</td>
		        <td>Services</td>
		        <td> - </td>
		      </tr>
		      <tr>
		        <td>Kylie</td>
		        <td>K121242</td>
		        <td>012-102 9483</td>
		        <td>WWW 111</td>
		        <td>284-11-02</td>
		        <td>11.00am</td>
		        <td>Maintenance</td>
		        <td> - </td>
		      </tr>
		    </tbody>
		  </table>

    </body>
</html>