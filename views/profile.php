<!-- <!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Admin UI</title>

    
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link href="css/styles.css" rel="stylesheet">
    </head>

  <body> -->
    <div ng-init="init('ID432223')"></div>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Faultless Hoses</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#/!">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#!profile">Company Profile<span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row">
          <div class="col-12 my-col">
            <h1>Jacob</h1>
          </div>
        </div>
        <!-- container for details/profile container -->
        <div class="row details-table-container-vh">
          <div class="col-3 my-col">
            <nav class="nav-sidebar">
          		<ul class="nav tabs">
                <li class="active"> <a ng-click="tab1()">Personal Information</a></li>
                <li class=""> <a ng-click="tab2()">Password and Security</a></li>
                <li class=""><a href="#tab3" data-toggle="tab">Profile Photo</a></li>
                <li class=""><a href="#tab4" data-toggle="tab">Company Information/Location</a></li>
          		</ul>
	           </nav>
          </div>
          <!-- right-side -->
          <div class="col-9 my-col">
            <div class="tab-content">
              <!-- tab one -->
              <div class="tab-pane active text-style" id="tab1">
                <div class="row my-row">
                  <div class="col-12 my-col">
                    <h3>Personal Information</h3>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>name:</b>
                  </div>
                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="First Name" aria-label="firstname" value={{names[0].FirstName}}>
                  </div>

                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-4" type="text" placeholder="Last Name" aria-label="lastname" value={{names[0].LastName}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>website:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" value={{names[0].Website}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Date of Birth:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="DD/MM/YYYY" aria-label="dob" readonly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Telephone:</b>
                  </div>
                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="(   )" aria-label="telephone" value={{names[0].Phone}}>
                  </div>

                  <div class="col-1 my-col">
                    <b>Ext.</b>
                  </div>

                  <div class="col-2  my-col">
                    <input class="form-control mr-sm-4" type="text" placeholder="Ext." aria-label="extension">
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Email:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="Email" aria-label="email" value={{names[0].Email}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b># of Hoses:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="0" aria-label="hosenum" value={{names[0].NumberOfHoses}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
              <!-- tab two -->
              <div class="tab-pane text-style" id="tab2">
                <h2>Password and Security</h2>
                 <p>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                  ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
              </div>
              <!-- tab three -->
              <div class="tab-pane text-style" id="tab3">
                <h2>Profile Photo</h2>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                  facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                  augue duis dolore te feugait nulla facilisi.</p>
              </div>
              <!-- tab four -->
              <div class="tab-pane text-style" id="tab4">
                <h2>Company Information/Location</h2>
                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html> -->
