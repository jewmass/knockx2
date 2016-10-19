<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register a Visitor</title>
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
          width: 20px;
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
              <a href="#" class="pull-left"><img style="max-width:100px; margin-top: 100px src="/KnockLogo.png"></a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="#">List</a></li>
              <li class="active"><a href="#">Register</a></li>
              <li><a href="#">History Log</a></li> 
            </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>


<div class="row">
<br/>
<br/>
  <div class="col-xs-20 col-sm-12 col-md-8 col-sm-offset-6 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" align="center">Register New Visitor</h3>
      </div>
      <div class="panel-body">
        <form role="form">
         
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="visitorName" class="form-control input-sm" placeholder="Visitor Name">
              </div>
            </div>
          
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="DriverID" class="form-control input-sm" placeholder="Driver's License ID">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="contact" name="contactNo" class="form-control input-sm" placeholder="Contact No.">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="CarPlateNo" name="CarPlateNo" class="form-control input-sm" placeholder="Car Registration No.">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="UnitNo" name="UnitNo" class="form-control input-sm" placeholder="Unit Number">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <select class="form-control" id="exampleSelect2" placeholder="Time of Visit">
              <option>Time of Visit:</option>
              <option>10am</option>
              <option>11am</option>
              <option>12pm</option>
              <option>1pm</option>
              <option>2pm</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <select class="form-control" id="purposeOfVisit" placeholder="Time of Visit">
              <option>Purpose of Visit:</option>
              <option>Visitation</option>
              <option>Services</option>
              <option>Repairs</option>
              <option>Others</option>
              </select>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-6">
              <div class="form-group">
                <input type="UnitNo" name="UnitNo" class="form-control input-sm" placeholder="Unit Number">
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="Remarks" name="Remarks" class="form-control input-sm" placeholder="Remarks">
          </div>

          <input type="submit" value="Register" class="btn btn-info btn-block">
          
        </form>
      </div>
    </div>
  </div>
</div>
    </body>
</html>