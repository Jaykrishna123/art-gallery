<!DOCTYPE html>
<head>
  <title>Art Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Crete+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" class="css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:dark">
    <img src="7.jpg" width="80" height="80"alt="">
    <a class="navbar-brand conn" href="#">Digital Painting</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="parent.location='index.html'">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" onclick="parent.location='about.html'">About Us </a>
            <a class="dropdown-item" href="#">Events</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Gallery</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" onclick="parent.location='Gallery.html'">Colourful </a>
            <a class="dropdown-item" href="#">Classic</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Market Place</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" onclick="parent.location='woodenArts.html'">Wooden Arts</a>
            <a class="dropdown-item" href="#"onclick="parent.location='bags.html'">Bags</a>
            <a class="dropdown-item" href="#" onclick="parent.location='Paintings.html'">Paintings</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Sign IN
      </button>
      &nbsp;&nbsp;&nbsp;<a href="#collapse1" class="login" data-toggle="collapse" data-placement="bottom"><img src="shop.png" width="40"></a><span class="badge badge-light">1</span>
      a



      <div class="modal fade formcol" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Sign In Here</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="modal-body formcol">
              <div class="conatiner-fluid">
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-6 col-md-6">
                    <form class="formconn formcol" method="post" action="insert.php" >
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text"  class="form-control" name="Email" value="Enter your Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" name="password" value="Enter your Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                    </form>

                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </nav>
  <div class="container-fluid bg">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="web2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="web1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="web3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br><Br>
    <br><Br>



      <h1 class="ft">Art Gallery</h1>
      <p class="text-center br">Lorem ipsum dolor sit amet, consectetur.</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="footer.png" class="br">
      <br><Br>
        <br><Br>
          <br><Br>
            <div class="container">
              <div class="row justify-content-center">





                <div class="col-md-6">
                  <button class="btn btn-outline-danger btn-lg" type ="button" onclick="parent.location='index.html'">All</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class ="btn btn-outline-danger btn-lg" type ="button" onclick="myFunction()">Nature</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class ="btn btn-outline-danger btn-lg" type ="button" onclick="myFunction1()">Street</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class ="btn btn-outline-danger btn-lg" type ="button" onclick="myFunction2()">People</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>



              </div>
            </div>

            <br><Br>
              <br><Br>

                <div class="container bv">
                  <div class="row">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="col-md-3 align-self-left bc ">
                      <img src="na.jpg" id="bigpic1"style="width:100%" class ="img-thumbnail" >
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="col-md-3 align-self-center bc">
                      <img src="9.jpg" id="bigpic2"style="width:100%"class ="img-thumbnail">

                    </div>
                    <br><Br>
                      <Br><Br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3 align-self-center bc">
                          <img src="10.jpg" id="bigpic3" style="width:100%"class ="img-thumbnail">

                        </div>
                      </div>
                      <br><br><br>
                      <div class="container bv">
                        <div class="row">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <div class="col-md-5 align-self-center bc">
                            <img src="all2.jpg" id="bigpic4" style="width:100%"class ="img-thumbnail">
                          </div>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="col-md-5 align-self-center bc">
                            <img src="all3.jpg" id = "bigpic5" style="width:100%"class ="img-thumbnail">

                          </div>
                        </div>
                        <br><br><br>
                        <div class="container bv">
                          <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <div class="col-md-5 align-self-center bc">
                              <img src="all4.webp" id="bigpic6" style="width:100%"class ="img-thumbnail">
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-5 align-self-center bc">
                              <img src="13.jpg"id="bigpic7" style="width:100%"class ="img-thumbnail">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br><br><br>
                    <div class="conatiner">
                      <div class="row">
                        <div class="col">
                          <h1 class="text-center display-1 abt1">BLOG</h1>
                          <p class="text-center abt">Lorem ipsum dolor sit amet.</p>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <img src="footer.png" class="br">
                          <br><br><br>
                        </div>
                      </div>
                    </div>


                    <br><br><br>
                    <div class="row">
                      <div class="col-lg-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="15.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="16.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="17.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

                      </div>
                      <div class="col-lg-6">
                        <h2 class="abt1 text-center">Nature</h2>
                        <p class="abt1">Nature, in the broadest sense, is the natural, physical, or material world or universe. "Nature" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.</p>

                      </div>
                    </div>


                  </div>
                  <br><br><br>
                  <div class="row">
                    <div class="col-lg-6">
                      <h2 class="abt1 text-center">Stock Paintings</h2>
                      <p class="abt1">Stock photography is the supply of photographs, which are often licensed for specific uses.The stock photo industry, which began to gain hold in the 1920s,[1] has established models including traditional macrostock photography,[2] midstock photography,and microstock photography.Conventional stock agencies charge from several hundred to several thousand United States dollars per image, while microstock photography may sell for around USD 25 cents.Professional stock photographers traditionally place their images with one or more stock agencies on a contractual basis.</p>

                    </div>
                    <div class="col-lg-6">
                      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="18.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="19.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="20.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                    <br><br><br>
                    <br><br><br>
                    <br><br>
                    <br>
                    <br><br><br>
                    <div class="conatiner">
                      <div class="row">
                        <div class="col-md-12">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <br><br>
                          <br><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <h1 class="float-right display-1 abt1">About Us</h1>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <br><br><br><br><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <p class="text-center abt1">Lorem ipsum dolor sit amet.</p>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <img src="footer.png" class="br">
                          <br><br><br>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <img src="14.jpg" style="width:100%">
                      </div>
                      <div class="col-lg-6">
                        <br><br><br><br><br><br>

                        <h2 class="abt1 text-center">A LITTLE INTRODUCTION</h2>
                        <p class="abt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque animi voluptas, perspiciatis sint quis qui rem reiciendis delectus soluta. Modi incidunt esse corrupti praesentium deleniti qui aspernatur quae nam, ea aliquid laborum, obcaecati nesciunt saepe id error libero, dolores beatae voluptas totam corporis excepturi. Explicabo nesciunt in dolore sit recusandae.</p>
                        <br><br>
                        <h2 class="abt1 text-center">EXHIBITIONS</h2>
                        <p class="abt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque animi voluptas, perspiciatis sint quis qui rem reiciendis delectus soluta. Modi incidunt esse corrupti praesentium deleniti qui aspernatur quae nam, ea aliquid laborum, obcaecati nesciunt saepe id error libero, dolores beatae voluptas totam corporis excepturi. Explicabo nesciunt in dolore sit recusandae.</p>
                        <br><br>


                      </div>

                    </div>



                    <script>
                    function myFunction()
                    {
                      var sourceOfPicture1 = "na.jpg";
                      var img1 = document.getElementById('bigpic1')
                      img1.src = sourceOfPicture1.replace('640x640', '443x443');
                      img1.style.display = "block";

                      var sourceOfPicture2 = "9.jpg";
                      var img2 = document.getElementById('bigpic2')
                      img2.src = sourceOfPicture2.replace('640x640', '443x443');
                      img2.style.display = "block";

                      var sourceOfPicture3 = "10.jpg";
                      var img3 = document.getElementById('bigpic3')
                      img3.src = sourceOfPicture3.replace('90x90', '225x225');
                      img3.style.display = "block";


                      var sourceOfPicture = "21.jpg";
                      var img = document.getElementById('bigpic4')
                      img.src = sourceOfPicture.replace('200x200', '400x400');
                      img.style.display = "block";

                      var sourceOfPicture1 = "22.jpg";
                      var img1 = document.getElementById('bigpic5')
                      img1.src = sourceOfPicture1.replace('90x90', '225x225');
                      img1.style.display = "block";

                      var sourceOfPicture2 = "23.jpg";
                      var img2 = document.getElementById('bigpic6')
                      img2.src = sourceOfPicture2.replace('640x640', '443x443');
                      img2.style.display = "block";

                      var sourceOfPicture3 = "24.jpg";
                      var img3 = document.getElementById('bigpic7')
                      img3.src = sourceOfPicture3.replace('90x90', '225x225');
                      img3.style.display = "block";

                    }
                    function myFunction1()
                    {

                      var sourceOfPicture1 = "stree5.jpeg";
                      var img1 = document.getElementById('bigpic1')
                      img1.src = sourceOfPicture1.replace('640x640', '443x443');
                      img1.style.display = "block";

                      var sourceOfPicture2 = "street6.jpg";
                      var img2 = document.getElementById('bigpic2')
                      img2.src = sourceOfPicture2.replace('640x640', '443x443');
                      img2.style.display = "block";

                      var sourceOfPicture3 = "street7.jpg";
                      var img3 = document.getElementById('bigpic3')
                      img3.src = sourceOfPicture3.replace('90x90', '225x225');
                      img3.style.display = "block";

                      var sourceOfPicture = "street1.jpg";
                      var img = document.getElementById('bigpic4')
                      img.src = sourceOfPicture.replace('200x200', '400x400');
                      img.style.display = "block";

                      var sourceOfPicture1 = "street2.jpg";
                      var img1 = document.getElementById('bigpic5')
                      img1.src = sourceOfPicture1.replace('90x90', '225x225');
                      img1.style.display = "block";

                      var sourceOfPicture2 = "street3.jpg";
                      var img2 = document.getElementById('bigpic6')
                      img2.src = sourceOfPicture2.replace('640x640', '443x443');
                      img2.style.display = "block";

                      var sourceOfPicture3 = "street4.jpg";
                      var img3 = document.getElementById('bigpic7')
                      img3.src = sourceOfPicture3.replace('90x90', '225x225');
                      img3.style.display = "block";

                    }
                    function myFunction2()
                    {
                      var sourceOfPicture1 = "people5.jpg";
                      var img1 = document.getElementById('bigpic1')
                      img1.src = sourceOfPicture1.replace('640x640', '443x443');
                      img1.style.display = "block";

                      var sourceOfPicture2 = "people6.jpg";
                      var img2 = document.getElementById('bigpic2')
                      img2.src = sourceOfPicture2.replace('640x640', '443x443');
                      img2.style.display = "block";

                      var sourceOfPicture3 = "people7.jpg";
                      var img3 = document.getElementById('bigpic3')
                      img3.src = sourceOfPicture3.replace('90x90', '225x225');
                      img3.style.display = "block";

                      var sourceOfPicture = "people2.jpg";
                      var img = document.getElementById('bigpic4')
                      img.src = sourceOfPicture.replace('200x200', '400x400');
                      img.style.display = "block";

                      var sourceOfPicture1 = "people.webp";
                      var img1 = document.getElementById('bigpic5')
                      img1.src = sourceOfPicture1.replace('90x90', '225x225');
                      img1.style.display = "block";

                      var sourceOfPicture2 = "people3.jpg";
                      var img2 = document.getElementById('bigpic6')
                      img2.src = sourceOfPicture2.replace('640x640', '443x443');
                      img2.style.display = "block";

                      var sourceOfPicture3 = "people4.jpg";
                      var img3 = document.getElementById('bigpic7')
                      img3.src = sourceOfPicture3.replace('90x90', '225x225');
                      img3.style.display = "block";

                    }

                    </script>
                    <script>
                    function myfun()
                    {
                      window.open("");
                    }

                    </script>







                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                  </body>
                  </html>
