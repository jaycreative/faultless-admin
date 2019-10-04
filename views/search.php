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
        <li class="nav-item active">
          <a class="nav-link" href="#!product">Temp link to Product screen<span class="sr-only">(current)</span></a>
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

  <nav class="nav-panel">
    <ul class="nav tabs">
      <li class="active"><a href="#tab1" data-toggle="tab">D</a></li>
      <li class=""><a href="#tab2" data-toggle="tab">F</a></li>
    </ul>
   </nav>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row my-row table-container-vh">
          <div class="col-9 my-col">

            <div class="row my-row">
              <div class="col-9 my-col">
                <h1>Product Search</h1>
              </div>

              <div class="col-3 my-col">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              </div>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td><a link href="details.html">Mark</a></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><a link href="profile.html">Jacob</a></td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-3 my-col sidebar">
            <div class="tab-content">
              <div class="tab-pane active text-style" id="tab1">
                <div class="tab-pane active text-style" id="tab1">
                  <h1> Details </h1>
                  <a href="#"><img src="https://via.placeholder.com/250"></a>
                  <h3 class ="product-id"> Product ID </h3>
                  <ul>
                    <li class="customer">name</li>
                    <li class="customer-po">#123456</li>
                    <li class="crn">n/a</li>
                    <li class="serial-num">123456</li>
                    <li class="order-num">123456</li>
                    <li class="hose-type">2XPR</li>
                    <li class="hose-l">5ft</li>
                    <li class="hose-d">1ft</li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane text-style" id="tab2">
                <h1>filters</h2>
                  <div class="filter-queries">
                    <div class="row my-row">
                      <div class="col-4 my-col">
                        <b>CRN:</b>
                      </div>

                    <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Name:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="name">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Product ID:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="productid">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>License:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="license">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Customer PO:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="customerpo">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Order #:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="ordernum">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Date of Test:</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Hose Pressure:</b>
                    </div>

                    <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Temp. Range:</b>
                    </div>

                    <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Tested By:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="tested">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Hose Type:</b>
                    </div>

                    <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Hose Length:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="hoselength">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Order Diameter:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="orderdia">
                    </div>
                  </div>
                </div>
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
