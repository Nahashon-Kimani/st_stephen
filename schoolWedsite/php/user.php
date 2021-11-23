<!DOCTYPE html>
<html>
    <head>
        <title>Admin-The Baked Society </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <meta name="viewport"  content="width-device-width, initial-scale-1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/BKD.png" type="images/jpg">

                <!-- Smartsupp Live Chat script -->
         <script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = 'a0fb29d1313ee69ffe18c7c8e58c8081770eb71b';
            window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
            })(document);
         </script> 
    </head>
    <body>

        <header>
    
    
           <nav class="navbar navbar-expand-lg navbar-light bg-white menu">
               <a href="" class="navbar-brand">
                   <img src="../images/BKD.png" width="100px" height="70px">
                   The BKD/ADMIN
               </a>
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigationBar">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navigationBar">
                 <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a href="../index.html" class="nav-link px-3">Home</a>
                    </li>

                   
                    
                    <li  class="nav-item dropdown px-3">
                       <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About Us</a>
                       <div class="dropdown-menu">
                          <a class="dropdown-item" href="aboutHMV.html"><i class="far fa-paper-plane"></i>&nbsp; History/Mission/Vission</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="staff.html"><i class="far fa-paper-plane"></i>&nbsp; School Staff Members</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="Accomplishment.html"><i class="far fa-paper-plane"></i>&nbsp; Accomplishments</a>
                       </div>
                    </li>


                    <li  class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Departments</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="ict.html"><i class="far fa-paper-plane"></i>&nbsp; ICT</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="library.html"><i class="far fa-paper-plane"></i>&nbsp; Library</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="science.html"><i class="far fa-paper-plane"></i>&nbsp; Science</a>
                        </div>
                     </li>


                     <li class="nav-item">
                        <a href="clubs.html" class="nav-link px-3">Clubs and societies</a>
                    </li>

                     <li  class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">More</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="gallery.html"><i class="far fa-paper-plane"></i>&nbsp; Gallery</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="news.html"><i class="far fa-paper-plane"></i>&nbsp; News and events</a>
                        </div>
                     </li>

                     <li class="nav-item">
                        <a href="contact.html" class="nav-link px-3">Contact Us</a>
                    </li>

                    <li class="nav-item lr">
                        <a href="#" class="nav-link">
                            <button class="btn btn-lg btn-default lr-btn">
                                <i class="fa fa-edit">logout</i>
                            </button>
                        </a>

                        <a href="#" class="nav-link">
                            <button class="btn btn-lg btn-default lr-btn">
                                <i class="fa fa-edit">Add User</i>
                            </button>
                        </a>

                    </li>



                 </ul>

               </div>

           </nav>
        </header>

        <main>

        <!--START OF THE WIDGET-->
        <section class="iconsSection">
            <div class="icons-bar">
                <a href="#">
                    <i class="fa fa-address-book"></i>
                    <br>
                    Enroll
                </a>

                <a href="#">
                    <i class="fa fa-plus"></i>
                    <br>
                    Apply
                </a>

                <a href="#">
                    <i class="fa fa-file-signature"></i>
                    <br>
                    Join Us
                </a>

            </div>

            <div class="icons-social">
                <a href="#" style="background-color: blue;" title="facebook">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>

                <a href="#" style="background-color:#1da1f2;" title="twitter">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>

                <a href="#" style="background-color:#ff0000;" title="youtube">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </section>
        <!--END OF THE WIDGET-->
        <section>
        <table class="table table table-hover table-bordered table-sm">
            <thead>
                <tr style="background-color:#0c10fe;color:white">
                    <th scope="col">ID</th>
                    <th scope="col">Full name</th>
                    <th scope="col">email adress</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Password</th> 
                    <th scope="col">Confirm Password</th> 
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
               <?php
                $conn=mysqli_connect("localhost","root","","schoolwebsite");
                $sql="SELECT * FROM `users`";
                $query=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td>
                            <?php echo$row["ID"]?>
                        </td>
                        <td>
                            <?php echo$row["fullname"]?>
                        </td>
                        <td>
                            <?php echo$row["emailadress"]?>
                        </td>
                        <td>
                            <?php echo$row["phonenumber"]?>
                        </td>
                        <td>
                            <?php echo$row["Password"]?>
                        </td>
                        <td>
                            <?php echo$row["Confirm_password"]?>
                        </td>
                        <td>
                        <button type="button" class="btn btn-outline-secondary btsn-sm" data-bs-toggle="modal" data-bs-target="#viewleModal<?php echo$row["ID"]?>">view</button>
                        <button type="button" class="btn btn-outline-danger btsn-sm" data-bs-toggle="modal" data-bs-target="#deleteleModal<?php echo$row["ID"]?>">Delete</button>
                        </td>

                        <div class="modal fade" id="viewleModal<?php echo$row["ID"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">view[ <?php echo$row["fullname"]?> ]</h5>

                                </div>
                                <form>
                                    <div class="modal-body">

                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                            <input type="Text"name="fullname" class="form-control" value="<?php echo$row["fullname"]?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm-2 col-form-label">Emailadress</label>
                                            <div class="col-sm-10">
                                            <input type="email" name="emailadress" class="form-control"  value="<?php echo$row["emailadress"]?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-2 col-form-label">Phone no.</label>
                                            <div class="col-sm-10">
                                            <input type="Text" name="phonenumber" class="form-control"  value="<?php echo$row["phonenumber"]?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                            <input type="Text" name="Password" class="form-control"  value="<?php echo$row["Password"]?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="Password" class="col-sm-2 col-form-label">Confirm password</label>
                                            <div class="col-sm-10">
                                            <input type="Text" name="Confirm_password" class="form-control"  value="<?php echo$row["Confirm_password"]?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" style="background-color:#0c10fe;border-color:#0c10fe">Update</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for delete -->
                        <div class="modal fade" id="deleteleModal<?php echo$row["ID"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ARE YOU SURE YOU WANT TO DELETE THIS RECORD</h5>
                                    </div>
                                    <form method="POST" action="deleteData.php">
                                        <div class="modal-body">
                                        <p>
                                        This action can`t be un done
                                        </p>
                                          <input type="text" name="ID" value="<?php echo$row["ID"]?>" hidden="true">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end of delete modal-->

                    </tr>
                    <?php
                }
               ?>
            </tbody>
        </table>
        </section>
         
        </main>
        <!--FOOTER SECTION-->
        <footer style="background-image: url('../images/links.png');" class="bgimg">
           <div class="footer-main">
              <div class="container">
                  <div class="row">
                    <!--START OF COLUMN ONE-->
                    <div class="col-md-4">
                       <div class="footer-widget">
                          <h4>GET IN TOUCH</h4>
                          <p>
                              Monday- Friday: 08:00am to 5:00pm
                          </p>

                          <p>
                              Saturday: <span>08:00am to 2:00pm</span>
                          </p>

                          <p>
                              Sunday: <span>Closed</span>
                          </p>
                        <div class="footer-top-box">
                              <p>Follow Us</p>
                              <ul>
                                  <li>
                                      <a href="#">
                                          <i class="fab fa-facebook" aria-hidden="true"></i>
                                      </a>
                                  </li>

                                  <li>
                                    <a href="#">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="#">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                    </a>
                                  </li>
                              </ul>
                        </div>
                       </div>
                    </div>
                    <!--END OF COLUMN ONE-->

                    <!--COLUMN TWO-->
                    <div class="col-md-4">
                        <div class="footer-link">
                          <h4>QUICK LINKS</h4>
                          <ul>
                              <li>
                                  <a href="#">Contact Us</a>
                              </li>

                               <li>
                                  <a href="#">Apply</a>
                              </li>

                              <li>
                                <a href="#">Business Portfolio</a>
                              </li>
                          </ul>
                        </div>
                    </div>
                    <!--END OF COLUMN TWO-->

                    <!--COLUMN THREE-->
                    <div class="col-md-4">
                        <div class="footer-link-contact">
                            <h4>CONTACT US</h4>
                            <ul>
                                <li>
                                    <p>
                                        <i class="fas fa-mapmaker"></i>
                                        Home, Ground Floor
                                        <br>
                                        Nairobi
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <i class="fas fa-phone-square"></i>
                                        Phone: +254794585957
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <i class="fas fa-envelope"></i>
                                        Email: info@wackfo3r.com
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--END OF COLUMN THREE-->
                  </div>
              </div>
           </div>
        </footer>
        <!--END OF FOOTER SECTION-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
</html>