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
  <div ng-init="init('ID432223', 'PSP')"></div>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> -->
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
          <div class="col-9 my-col">
            <h1>Hose Type: HXR1</h1>
          </div>
            <div class="col-3 my-col">
            <button type="button" class="btn btn-light">toggle</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Generate Certificate</button>
          </div>
        </div>

        <div class="row details-table-container-vh">
          <div class="col-3 my-col details-bar">
            <a href="#"><img src="https://via.placeholder.com/250"></a>
            <h3 class ="details">Details:</h3>
            <ul>
              <!-- We will insert the specific details here later -->
              <li class="br-location">1426 Lynden RD, ON</li>
              <li class="customer-po">#12345610</li>
              <li class="crn">n/a</li>
              <li class="lic-num">123456</li>
              <li class="order-num">#123456</li>
              <li class="hose-type">2XPR</li>
              <li class="hose-p">30</li>
              <li class="hose-r">10</li>
            </ul>
            <h3 class ="details">Testing:</h3>
            <ul>
              <li class="tested by">Phil Robertson</li>
              <li class="dot">01/30/19</li>
            </ul>
          </div>

          <div class="col-6 my-col">
            <div class="row my-row">
              <div class="col-9 my-col">
                <h3>Purchase history</h3>
              </div>

              <div class="col-3 my-col">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              </div>
            </div>

            <table class="table">
              <thead>
                <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Order Num</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Hose Length</th>
                            <th scope="col">Customer PO #</th>
                            <th scope="col">Date of test</th>
                </tr>
              </thead>
              <tbody>
             <tr ng-repeat='a in names'>

                <th scope="row">{{a.ProductID}}</th>


                  <td>{{a.OrderNum}}</td>
                  <td>{{a.HoseType}}</td>
                  <td>{{a.HoseLength}}</td>
                  <td>{{a.CustomerPO}}</td>
                  <td>{{a.NextInspection}}</td>

                </tr>
                
              </tbody>
            </table>
          </div>

          <div class="col-3 my-col sidebar">
            <h3 class ="descrip">Description</h3>
            <p>{{names[0].Description}}</p>
            <!-- <p>The Xhose Pro is the original garden hose
                that expands up to 3-times its original
                length when water courses through it. its
                reinforced high-grade drag resistant Dac-5
                polyester outer layer which is specially
                woven to make it tougher and stronger.
                The solid brass fittings and superios strain
                relief collar are crush resistant while the
                thick, specially formulated latex inner layer
                expands to produce more velocity and
                higher pressure.
            </p> -->
            <h3 class ="comments">Comments</h3>
            <input class="form-control mr-sm-2" type="text" placeholder="Comment..." aria-label="comment">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">send</button>
          </div>
        </div>
      </div>
    </header>

      <!-- MODAL -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Generate Certificate</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Select</th>
                    <th scope="col">Product ID</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox" id="exampleCheck1"></th>
                      <td>#PR019303</td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" id="exampleCheck1"></th>
                    <td>#PR920482</td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" id="exampleCheck1"></th>
                    <td>#PR284029</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Generate</button>
            </div>
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html> -->
