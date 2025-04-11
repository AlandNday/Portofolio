<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('Depan') }}/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('Depan')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Marianus Aland Gian Nday</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src={{ asset('/Foto/profil.jpg  ') }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Marianus Aland Gian 
                        <span class="text-primary">Nday</span>
                    </h1>
                    <div class="subheading mb-5">
                        Jalan Herewila Gang 17 no.1, Kota Kupang, NTT, 85118 · 081393311179 ·
                        <a href="mailto:name@email.com">alandnday12@gmail.com</a>
                    </div>
                    <p class="lead mb-5">A mobile front-end developer with practical experience in UI development and a solid understanding of Scrum principles. While I'm on a continuous learning journey and consider myself to still have a lot to learn, I'm dedicated to improving my skills and contributing effectively to development teams. I have experience working with flutter, and I'm committed to delivering functional and user-friendly interfaces. </p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/feed"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/AlandNday"><i class="fab fa-github"></i></a>
    
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Flutter Mobile Developer Intern</h3>
                            <div class="subheading mb-3">Sidigs</div>
                            <p>"As a mobile front-end intern at Sidigs,  I developed applications from scratch, gaining practical experience in UI development and Scrum. I contributed to the entire application lifecycle, reinforcing my passion for application development and providing a valuable foundation for my career."</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">february 2024 - february 2025</span></div>
                    </div>



            </section>
            <hr class="m-0" />
            <div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="educationModalLabel">Add Education</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h2>Add Education</h2>
                <form id="educationForm" action="{{ route('Educations.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="school_name" class="form-label">School Name</label>
                        <input type="text" id="school_name" name="school_name" required><br><br>
                    </div>
                    <div class="mb-3">
                        <label for="Major" class="form-label">Degree</label>
                        <input type="text" id="major" name="major" required><br><br>
                    </div>
                    
                    <div class="mb-3">
                        <label for="location" class="form-label">location</label>
                        <input type="text" id="location" name="location" required><br><br>
                    </div>
                    <div class="mb-3">
                        <label for="gpa" class="form-label">GPA</label>
                        <input type="text" id="gpa" name="gpa" required><br><br>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" id="start_date" name="start_date" required><br><br>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date (Optional)</label>
                        <input type="date" id="end_date" name="end_date"required><br><br>
                    <button type="submit" class="btn btn-primary">Save Education</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-3">Education</h2>
                    <button type="button" class="btn btn-success mb-5" data-bs-toggle="modal" data-bs-target="#educationModal">
    Add Education
</button>
                    @foreach ($educations as $education)
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
            <h3 class="mb-1">{{ $education->school_name }}</h3>
            <h5>{{ $education->major }}</h5>
            <h6>{{ $education->location }}</h6>
            <div>Current GPA : {{ $education->gpa }}</div> {{-- Assuming you have a 'field_of_study' column --}}
        </div>
        <div class="flex-shrink-0">
    <span class="text-primary">
        {{ date('M Y', strtotime($education->start_date)) }} - 
        {{ $education->end_date ? date('M Y', strtotime($education->end_date)) : 'Present' }}
    </span>

                        <form action="{{ route('Educations.destroy', $education) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <div style="text-align: right;">
    <button type="submit" onclick="return confirm('Are you sure you want to delete this record?');" style="background: none; border: none; padding: 0; cursor: pointer;">
        <i class="fas fa-trash-alt" style="color: red;"></i>
    </button>
                        </form>
    
</div>
</div>


    </div>
@endforeach
                
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fa-brands fa-flutter"></i></li>
                        <li class="list-inline-item"><i class="fab fa-android"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css"></i></li>
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                    </ul>
                    <div class="d-flex flex-column  justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-2">Flutter</h3>
                            <p>Over the past year, I've gained hands-on experience building Flutter applications from the ground up. I've tackled various projects, solidifying my understanding of widgets, state management, and API integration. I'm comfortable with the Flutter framework and have a proven ability to deliver functional apps. I recognize that Flutter is a rapidly evolving technology, and I'm eager to expand my knowledge and refine my skills further.</p>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="mb-0">HTML/CSS</h3>
                            <p>I have a solid foundation in HTML and CSS, gained through practical application in college assignments. I'm comfortable with structuring web pages using HTML5 and styling them effectively with CSS. While my experience is rooted in academic projects, I'm eager to apply and expand these skills in real-world scenarios.</p>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Flutter</h3>
                            <p>I have introductory experience with Laravel, primarily through college assignments. I've worked with the framework to build basic web applications, gaining familiarity with routing, controllers, and views. While my experience is primarily academic, I'm enthusiastic about learning more about Laravel and applying it in more complex projects</p>
                        </div>
                        
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>I enjoy most of my time free time being indoors. I like playing games, follow a number of sci-fi and fantasy genre movies and television shows, and I also spend my free time exploring the latest technology advancements in the world. </p>
                    <p class="mb-0">I also spend a good amount of time cooking for myself, exploring new recipes and culinary techniques.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-4">Certifications</h2>
                        <h4 class="mb-3">   
                        SIDIGS Internship Certificate
                        </h4>
                        <div>
                        <style>
  .photo-container {
    width: 600px; /* Fixed container width */
  }

  .displayed-photo {
    width: 100%;
    display: block; /* Change from flex to block for left alignment */
    height: 400px; /* Fixed height */
    object-fit: contain; /* Maintain aspect ratio */
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
</style>
</head>
<body>
    <div class="photo-container">
        <!-- Replace "path/to/your/photo.jpg" with your actual local file path -->
        <img src="{{ asset('/Foto/Sertifikatmagang.jpg') }}" alt="" class="displayed-photo">

    </div>
</body>

                        </div>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('Depan') }}/js/scripts.js"></script>
    </body>
</html>
