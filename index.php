<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Homepage</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span style="font-size: xx-large; color: aqua; font-weight: bolder;">P</span>atna
                <span style="font-size: xx-large; color: aqua; font-weight: bolder;">C</span>ollege
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto ms-auto">
                    <li class="nav-item fw-bold"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item fw-bold"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item fw-bold"><a class="nav-link" href="#departments">Departments</a></li>
                    <li class="nav-item fw-bold"><a class="nav-link" href="#events">Events</a></li>
                    <li class="nav-item fw-bold"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->


    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active"
                style="background-image: url('https://cdn.pixabay.com/photo/2021/10/11/04/08/university-6699377_1280.jpg');">
                <div class="carousel-caption">
                    <h1>Welcome to Patna college</h1>
                    <p>Your pathway to excellence starts here!</p>
                    <a href="#courses" class="btn btn-primary btn-lg">Explore Our Courses</a>
                </div>
            </div>

            <div class="carousel-item"
                style="background-image: url('https://images.pexels.com/photos/8199165/pexels-photo-8199165.jpeg');">
                <div class="carousel-caption">
                    <h1>Discover Knowledge</h1>
                    <p>Explore our world-class library and resources.</p>
                    <a href="#departments" class="btn btn-success btn-lg">View Departments</a>
                </div>
            </div>

            <div class="carousel-item"
                style="background-image: url('https://images.pexels.com/photos/7683704/pexels-photo-7683704.jpeg');">
                <div class="carousel-caption">
                    <h1>Engaging Events</h1>
                    <p>Join exciting seminars, workshops, and cultural activities.</p>
                    <a href="#events" class="btn btn-warning btn-lg">Upcoming Events</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Content Placeholder -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <h6>About Patna College</h6>
                <h2 class="fs-1">Our education system inspires the next generation</h2>
                <p style="font-family: serif; font-size: 20px; color: rgb(79, 76, 71);">
                    Patna College, established in 2001, is dedicated to providing high-quality
                    education that nurtures the intellectual and personal growth of students.
                    We offer a wide range of undergraduate and postgraduate programs, focusing
                    on academic excellence, innovation, and skill development. Our experienced
                    faculty members and modern facilities create a dynamic learning environment
                    where students can thrive and achieve their goals.
                    <br>
                    <span style="font-family: serif; font-style: italic; font-size: 20px; color: rgb(79, 76, 71);">
                        At Patna College, we believe in the holistic development of our students,
                        offering various extracurricular activities and opportunities for community
                        engagement. Our commitment to fostering a culture of respect, collaboration,
                        and social responsibility prepares students to become leaders of tomorrow and
                        make meaningful contributions to society.
                    </span>
                </p>
            </div>
            <!-- Right Column -->
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center">
                    <div class="custom-box" style="max-width: 100%; border: 15px solid rgb(54, 69, 102);">
                        <div class="inner-box d-flex mt-5 m-5 " style="height: 100%; width: 100%;">
                            <img src="img/about2.jpg" class="img-fluid" alt="About Patna College">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- 3rd part -->
    <section class="slider-container">
        <!-- Blue overlay -->
        <div class="slider-overlay"></div>

        <!-- Text content -->
        <div class="slider-content">
            
            <br>
            <br>
            <br>

            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!-- Carousel with cards -->
            <div class="mt-5">
                <div class="container mt-5 ">
                    <h1>Browse courses by study area</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna.
                    </p>
                    <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- First slide -->
                            <div class="carousel-item active">
                                <div class="row  mt-3">
                                    <div class="card mx-1">
                                        <div class="icon">🌐</div>
                                        <h5>Business and finance</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                    <div class="card mx-1">
                                        <div class="icon">💻</div>
                                        <h5>IT and data science</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                    <div class="card mx-1 ">
                                        <div class="icon">⚖️</div>
                                        <h5>Law and criminology</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                    <div class="card mx-1 ">
                                        <div class="icon">📈</div>
                                        <h5>Marketing</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Second slide -->
                            <div class="carousel-item">
                                <div class="row  mt-3">
                                    <div class="card mx-1">
                                        <div class="icon">🔬</div>
                                        <h5>Science and research</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                    <div class="card mx-1">
                                        <div class="icon">🎨</div>
                                        <h5>Design and arts</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                    <div class="card mx-1">
                                        <div class="icon">📚</div>
                                        <h5>Education</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                    <div class="card mx-1">
                                        <div class="icon">⚙️</div>
                                        <h5>Engineering</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <a href="#" class="btn btn-link">Find out more →</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <!-- 4th part -->
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column (Image) -->
            <div class="col-12 col-md-6">
                <img src="https://angular.envytheme.com/lian/assets/images/campus-img.jpg" class="img-fluid"
                    alt="Campus Image">
            </div>

            <!-- Right Column (Text Content) -->
            <div class="col-12 col-md-6" id="ourcampus">
                <div class="m-3 p-3">
                    <h6>Our campus information</h6>
                    <p class="fs-1" style="font-weight: bolder;">
                        We are proud that more than 50 students from different nationalities study on our campus
                    </p>
                    <p>
                        Our campus is a vibrant, multicultural environment, where over 50 students from various
                        nationalities come together to learn and grow. This diversity fosters an atmosphere of
                        inclusivity, where students can exchange ideas, share unique perspectives, and build global
                        connections. We take pride in offering a welcoming space for students from all walks of life to
                        thrive academically and personally.
                    </p>
                    <a href="#" class="btn btn-link">Find out more →</a>
                </div>
            </div>
        </div>
    </div>




    <!-- 5th part -->
    <div class="container mt-5">
        <div class="ms-auto me-auto d-flex flex-column align-items-center justify-content-center">
            <p>How it works</p>
            <h2>Simple steps to start</h2>
            <p>ollege work usually begins by understanding the project requirements or
                syllabus and <span
                    class="ms-auto me-auto d-flex flex-column align-items-center justify-content-center">then breaking
                    the tasks into smaller, manageable parts.</span></p>
        </div>

        <div class="row">
            <div class="col-sm-3 ">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                    </div>
                    <h5>Querist</h5>
                    <p>In the college admission process, a "querist" is an individual who seeks
                        information or clarification about specific aspects of the procedure,
                        such as eligibility, documents, or deadlines.</p>
                    <a href="#" class="btn btn-link">Find out more →</a>
                </div>

            </div>
            <div class="col-sm-3 ">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-user-large"></i>
                    </div>
                    <h5>Choose</h5>
                    <p> "choose" means selecting courses, programs, or colleges
                        based on preferences and goals. It involves decisions like
                        picking subjects or electives during the academic process.</p>
                    <a href="#" class="btn btn-link">Find out more →</a>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <h5>Enroll</h5>
                    <p>"enroll" means registering or officially joining a course,
                        program, or institution. It signifies the process of becoming
                        an official student by completing the required formalities..</p>
                    <a href="#" class="btn btn-link">Find out more →</a>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
                    <h5>Start</h5>
                    <p>"Start" in a college context refers to the beginning of a student's academic
                        journey, such as starting a course, semester, or program. It marks the initiation
                        of learning and participation in college activities..</p>
                    <a href="#" class="btn btn-link">Find out more →</a>
                </div>
            </div>

        </div>

    </div>


    <!-- 6th part -->
    <div class="container-fluid mt-5 six">
        <div class="container">
            <div class="row">
                <!-- Left Section -->
                <div class="col-12 col-lg-8 mt-5">
                    <h6>Events</h6>
                    <h2 class="fs-1 fw-bold">Upcoming events</h2>
                    <!-- Event Rows -->
                    <div class="row align-items-start mb-4">
                        <div class="col-3 col-sm-2 text-center">
                            <div class="date">
                                <div class="datess p-2">
                                    <span>1 Jan<br>2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-9 col-sm-10">
                            <h6>Conference</h6>
                            <h3 class="fs-4 fw-bold">Universities admission conference 2024</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna.</p>
                            <a href="#" class="btn btn-link">Find out more →</a>
                        </div>
                    </div>

                    <div class="row align-items-start mb-4">
                        <div class="col-3 col-sm-2 text-center">
                            <div class="date">
                                <div class="datess p-2">
                                    <span>1 Jan<br>2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-9 col-sm-10">
                            <h6>Conference</h6>
                            <h3 class="fs-4 fw-bold">History and culture open day conference 2024</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna.</p>
                            <a href="#" class="btn btn-link">Find out more →</a>
                        </div>
                    </div>

                    <div class="row align-items-start mb-4">
                        <div class="col-3 col-sm-2 text-center">
                            <div class="date">
                                <div class="datess p-2">
                                    <span>1 Jan<br>2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-9 col-sm-10">
                            <h6>Conference</h6>
                            <h3 class="fs-4 fw-bold">Undergraduate and postgraduate open days 2024</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna.</p>
                            <a href="#" class="btn btn-link">Find out more →</a>
                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-12 col-lg-4 mt-5">
                    <div class="eventimg mt-5">
                        <div class="card">
                            <img src="https://angular.envytheme.com/lian/assets/images/event-img.jpg"
                                class="card-img-top img-fluid" alt="Next Event">
                            <div class="card-body text-center">
                                <h5>Next Event</h5>
                                <h2 class="text-center countdown" id="countdown" style="color: blue;">00:00:00</h2>
                                <a href="#" class="btn btn-primary mt-3">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 7th part -->

    <br>
    <div class="container my-5">
        <div class="row">
            <!-- Left Side: Search Form -->
            <div class="col-md-6">
                <div class="search-section">
                    <h3 class="mb-4 mt-4 fs-1 fw-bold">Find a Course</h3>
                    <hr>
                    <div class="mb-3">
                        <input type="radio" id="undergraduate" name="level" checked>
                        <label for="undergraduate" class="ms-1">Undergraduate</label>
                        <input type="radio" id="postgraduate" name="level" class="ms-3">
                        <label for="postgraduate">Postgraduate</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Keyword search">
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Category course</option>
                            <option value="1">Science</option>
                            <option value="2">Arts</option>
                            <option value="3">Commerce</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>United States</option>
                            <option value="1">Canada</option>
                            <option value="2">India</option>
                            <option value="3">Australia</option>
                        </select>
                    </div>
                    <button class="btn btn-search w-100">Search</button>
                </div>
            </div>

            <!-- Right Side: Info Cards -->
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="info-card red">
                            <div class="icon">🎓</div>
                            <div class="number">4517</div>
                            <div class="text">Students</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card blue">
                            <div class="icon">👩‍🏫</div>
                            <div class="number">640</div>
                            <div class="text">Teachers</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card blue">
                            <div class="icon">📚</div>
                            <div class="number">54</div>
                            <div class="text">Subjects</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card red">
                            <div class="icon">🎓</div>
                            <div class="number">269</div>
                            <div class="text">Degrees</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 8th -->

    <div class="container-fluid mt-5">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center">
        <h6>Academic’s News</h6>
        <div class="col-sm-5">
        <p>Academics' News delivers timely and insightful updates on education, exams, scholarships, and career opportunities, empowering students to achieve their academic and professional dreams.</p>
        </div>
        </div>
        <?php
include('dbconection.php');
$result = $conn->query("SELECT * FROM cards");
?>
<div class="container mt-5">
    <div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="col-md-4">
            <div class="">
                <img src="admin/uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <p><small><?php echo date("F j, Y", strtotime($row['date'])); ?></small></p>
                    <a href="<?php echo $row['button_link']; ?>" class="btn btn-primary"><?php echo $row['button_text']; ?></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


</div>





    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Information</h5>
                    <p>123 College Road, City, State</p>
                    <p>Email: info@college.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#"><i class="fab fa-facebook-f me-3"></i></a>
                    <a href="#"><i class="fab fa-twitter me-3"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
            <p class="mt-3">&copy; 2024 College Name. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->


</body>



<script>

    function updatetime() {
        const currenttime = new Date();
        const endtime = new Date(" Nov 30 , 2024  00:00:00");

        const timeLeft = endtime - currenttime;

        if (timeLeft <= 0) {
            document.querySelector("#countdown").innerHTML = "Events";
            return;
        }
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor(timeLeft % (1000 * 60 * 60) / (1000 * 60));
        const sec = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.querySelector('#countdown').innerHTML =

            ` <span  id="time">${days}d</span>
         <span  id="time"> ${hours}h</span>
         <span  id="time">${minutes}min</span>
         <span id="time">${sec}Sec</span>`

    }
    setInterval(updatetime, 1000);
    updatetime();

</script>




</html>