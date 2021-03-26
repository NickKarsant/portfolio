<?php
    $message_sent = false;

if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nkarsant@gmail.com";
    $email_subject = "From portfolio contact form";

    function problem($error)
    {
        echo "There were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    $message_sent = true;

}
?>


<?php
 if($message_sent):
?>

<h3>Thanks, I will be in touch soon</h3>

<a href="https://nkarsant.herokuapp.com/">Go Back</a>



<?php
 else:
?>

<!-- error message -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <meta content="width=device-width, initial-scale=1" name="viewport" />


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />

  <script src="https://kit.fontawesome.com/03d1dd37cf.js" crossorigin="anonymous" SameSite=None> </script>


  <title>N. Karsant Portfolio</title>

</head>

<body>
  <div class="container">
    <header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
          <img src="assets/nickHeadshotsquare.jpg" alt="">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">Nick Karsant</h1>

                <div class="d-flex flex-row justify-content-end align-items-center">
                  <div class="d-none  d-lg-block">
                    <a class="text-white" target="_blank" href="https://www.linkedin.com/in/nkarsant/">
                      <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                  </div>
                  <div class="d-none d-lg-block ml-3">
                    <a class="text-white" target="_blank" href="https://github.com/greenHermes">
                      <i class="fab fa-github fa-2x"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>

            <div class="bg-black p-4 text-white h3 m-0">
              Front-End Developer <p id="circus">and part-time circus artist</p>
            </div>

            <div>
              <div class="d-flex flex-row text-white align-items-stretch text-center">
                <div class="tab p-4 bg-primary" data-toggle="collapse" data-target="#home">
                  <i class="fas fa-home fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Home</span>
                </div>
                <div class="tab p-4 bg-success" data-toggle="collapse" data-target="#work">
                  <i class="fas fa-folder-open fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Work</span>
                </div>
                <div class="tab p-4 bg-warning" data-toggle="collapse" data-target="#resume">
                  <i class="fas fa-graduation-cap fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Resume</span>
                </div>
                <div class="tab p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                  <i class="fas fa-envelope fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Contact</span>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </header>



    <!-- home -->
    <div id="home" class="collapse">

      <div class="card card-body bg-primary text-white py-5">
        <h2>About Me</h2>
        <p class="lead">The world is moving toward move specialized,
          disparate but ever more connected. and this is possible for a "significant portion of reason" through screens.
          The affect COVID has had on the entire world highlights this. Being a visual learner and
          diagnosed with ADHD, I have an appreciation for well designed websites and user experiences.
          Drawing from my education in psychology, I am passionte about building things that are well designed for
          interaction, providing and receivie information.
          I have mainly full-stack training and experience, but I am best utilized as a front-end developer;
          that is where i am able to work most effectively. I struggle with backend development. what information can be
          dispalyed
          on the front-end all depends on what information can be, in the first place be saved in a meaningful way, and
          then
          presented to the indented audience/user.</p>
      </div>

      <div class="card card-body py-5">
        <h3>My Skills</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente saepe doloremque earum aspernatur quaerat
          natus!</p>

        <hr>
        <h4> <i class="fab fa-html5"></i> HTML5</h4>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
        <hr>
        <h4><i class="fa fa-css3" aria-hidden="true"></i> CSS3</h4>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
        <hr>
        <h4> <i class="fab fa-bootstrap"></i> Bootstrap</h4>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
        <hr>
        <h4><i class="fab fa-js"></i> Javascript</h4>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" style="width: 85%"></div>
        </div>
        <hr>
        <h4><i class="fab fa-react"></i> React.js</h4>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" style="width: 50%"></div>
        </div>
        <hr>
        <h4>MERN Stack</h4>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" style="width: 60%"></div>
        </div>
      </div>


    </div>





    <!-- Work -->
    <div id="work" class="collapse">

      <div class="card card-body bg-success text-white py-5">
        <h2>My Work</h2>
      </div>

      <div class="card card-body py-5">
        <h3>What Have I Built?</h3>
        <div class="row justify-content-around d-flex mb-1">
          <div class="featured project col-md-5">
            <h3><a href="https://kindojo.netlify.app" target="_blank">Kindojo</a> </h3>
            <div class="wrap">
              <a href="https://kindojo.netlify.app" data-toggle="lightbox">
                <p class="description">Solo and first project completed for an active
                  business, made with pure css.
                  Design
                  by Aline Jalalian</p>
                <img src="assets/Kindojo.png" alt="" class="featuredImage img-fluid">
              </a>
            </div>
          </div>


          <div class="featured project col-md-5">
            <h3><a href="https://playlistify-express.herokuapp.com/" target="_blank">Playlistify</a></h3>
            <div class="wrap">
              <a href="https://playlistify-express.herokuapp.com/" target="_blank">
                <p class="description">Full-stack project, limited clone of Spotify</p>
                <img src="assets/playlistify.png" alt="" class="featuredImage img-fluid">
              </a>
            </div>
          </div>


        </div>
        <div class="row justify-content-around d-flex">
          <div class="others project col-md-3">
            <h3><a href="https://clone-of-yelp.herokuapp.com/yelpcamp" target="_blank">Yelpcamp</a></h3>
            <a class="text-center items-center" href="https://clone-of-yelp.herokuapp.com/yelpcamp" target="_blank">
              <img src="assets/yelpcamp.png" alt="" class="img-fluid">
            </a>
          </div>
          <div class="others project col-md-3">
            <h3><a href="https://actionable-item-list.netlify.app" target="_blank">ToDo List</a></h3>
            <a href="https://actionable-item-list.netlify.app" data-toggle="lightbox">
              <img src="assets/todo.png" alt="" class="img-fluid">
            </a>
          </div>
          <div id="colorgame" class="others project col-md-3">
            <h3><a href="https://rbg-guessing.netlify.app" target="_blank">Color Game</a></h3>
            <a href="https://rbg-guessing.netlify.app" data-toggle="lightbox">
              <img src="assets/RGBguessing.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>





    <!-- resume -->
    <div id="resume" class="collapse">

      <div class="card card-body bg-warning text-white py-5">
        <h2>My Resume</h2>
      </div>

      <div class="card card-body py-5">
        <h3>Where Have I Worked?</h3>
        <p>Regardless of the type of work in which I find myself,
          conveying information patiently, accurately and effectively has been an ever-present and primary aspiration.
        </p>

        <div class="card-deck">
          <div class="card job">
            <div class="card-body">
              <h4 class="card-title">Trilogy Education Services</h4>
              <p class="role h5">Online Tutor</p>
              <p class="card-text">Help students with a variety of skills and technologies including simple Git commits,
                adding in third-party APIs, and helping debug full-stack projects</p>
              <p class="p-2 mb-3 bg-dark text-white">(646) 618-8898</p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: Jan 2020 - Present</h6>
            </div>
          </div>
          <div class="card job">
            <div class="card-body">
              <h4 class="card-title">UC Berkeley Extension</h4>
              <p class="role h5">Teaching Assistant</p>
              <p class="card-text">COMPSCI 854 - Full Stack Web Development Bootcamp. JavaScript, MySQL, MongoDB,
                Express, Node, React</p>
              <p class="p-2 mb-3 bg-dark text-white">(510) 642-4111</p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: Jan 2020 - Present</h6>
            </div>
          </div>
          <div class="card job">
            <div class="card-body">
              <h4 class="card-title">Circus Center</h4>
              <p class="role h5 text-decoration-underline">Adult Cyr Wheel/ <br> Youth Acrobatics Instructor</p>
              <p class="card-text">Lead a class and teach children from ages 6-14, of varying skill levels, basic to
                intermediate
                tumbling and acrobatic movements.
                Breaking down movements into constituent parts</p>
              <p class="p-2 mb-3 bg-dark text-white">(415) 759-8123</p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: Feb 2019 - Present</h6>
            </div>
          </div>
          <div class="card job">
            <div class="card-body">
              <h4 class="card-title">Center for Learning and Autism Support Services</h4>
              <p class="role h5 text-decoration-underline">Behavior Therapist</p>
              <p class="card-text">Practice Applied Behavioral Analysis. Carried out individualized treatment plans
                developed by the Clinical Manager for autistic children, ages ranging from 3 to 13,
                to teach skills unique to their impairment.</p>
              <p class="p-2 mb-3 bg-dark text-white">(800) 538-8365</p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: Aug 2015 - June 2018</h6>
            </div>
          </div>
        </div>
      </div>
    </div>






    <!-- contact -->
    <div id="contact" class="collapse show">

      <div class="card card-body bg-danger text-white py-5">
        <h2>Contact</h2>
      </div>

      <div class="card card-body py-5">
				<h3>Get in Touch</h3>
				
        <form action="contact-form-process.php" method="POST">
          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input id="Name" type="text" name="Name" class="form-control bg-dark text-white" placeholder="Name" required>
            </div>
          </div>

          <form method="post" action="contact-form-process.php">
            <div class="form-group">
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-danger text-white">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <input id="Email" type="emal" name="Email" class="form-control bg-dark text-white" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-danger text-white">
                    <i class="fas fa-pencil-alt"></i>
                  </span>
                </div>
                <textarea id="Message" class="form-control bg-dark text-white" name="Message" cols="30" rows="4" required></textarea>
              </div>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-lg btn-block">
          </form>
      </div>
    </div>




    <!-- footer -->
    <footer id="main-footer" class="p-5 bg-dark text-white">
      <div class="row">
        <div class="col-md-6">
          <a href="assets/CV.pdf" download="assets/CV.pdf" target="_blank" class="btn btn-outline-light">
            <i class="fa fa-cloud"> Download Resumé</i>
          </a>
        </div>
      </div>
    </footer>

  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <!-- lightbox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <script>
    $('.tab').click(function () {
      $('.collapse').collapse('hide');
    });

    $(document).on('click', '[data-toggle="lightbox"]', function (e) {
      e.preventDefault();
      $(this).ekkoLightbox();
    });





    // when mouseover  featuredImage  this. class="description"  display is show
    // $('.featuredImage').mouseenter(function () {
    //   $('.description')();
    // });


    // $('.featuredImage').mouseleave(function () {
    //   $('.description').hide();
    // });
  </script>
</body>

</html>




<?php
endif;
    ?>


