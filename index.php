<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Md. Kamruzzaman (Methun)</title>
        <meta name="description" content="Resume, PhD, computational genomics, phenomics, TDA, Topology" />
        <meta name="author" content="Md. Kamruzzaman (Methun)" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />

        <link rel="stylesheet" href="css/bootstrap.min.css?t=<?php echo rand(-1000000, 10000000); ?>" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css?t=<?php echo rand(-1000000, 10000000); ?>" />
        <link rel="stylesheet" href="css/fontAwesome.css?t=<?php echo rand(-1000000, 10000000); ?>" />
        <link rel="stylesheet" href="css/light-box.css?t=<?php echo rand(-1000000, 10000000); ?>" />
        <link rel="stylesheet" href="css/templatemo-main.css?t=<?php echo rand(-1000000, 10000000); ?>" />

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>

        <link rel="shortcut icon" href="favicon.png"  />
    </head>

    <body>

        <div class="sequence">

            <div class="seq-preloader">
                <svg width="39" height="16" viewBox="0 0 39 16" xmlns="https://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
            </div>

        </div>


        <nav>
            <ul>
                <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
                <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
                <li><a href="#3"><i class="fa fa-pencil"></i> <em>Knowledge</em></a></li>
                <li><a href="#4"><i class="fa fa-cogs"></i> <em>Experience</em></a></li>
                <li><a href="#" onclick="location.href = 'https://mhmethun.wordpress.com';"><i class="fa fa-rss"></i> <em>Blogs</em></a></li>
            </ul>
        </nav>

        <div class="slides">
            <div class="slide" id="1">
                <div class="content first-content">
                    <div class="container-fluid">
                        <div class="col-md-3">
                            <div class="author-image"><img src="img/profilepic.jpg" alt=""></div>
                        </div>
                        <div class="col-md-9">
                            <h2>I'm <span class="typed"></span></h2>
                            <p>
                                I am doing my Ph.D. in 
                                <a style="color: wheat" href="https://school.eecs.wsu.edu/">Washington State University</a> under the 
                                supervision of <a style="color: wheat" href="https://www.eecs.wsu.edu/~ananth/">Prof. Ananth Kalyanaraman</a> (Computer science) and <a style="color: wheat" href="http://www.math.wsu.edu/math/faculty/bkrishna/">Prof. Bala Krishnamoorthy</a> (Math) in the 
                                field of Data science and Visual analytics.
                            </p>
                            <div class="main-btn"><a href="#2">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" id="2">
                <div class="content second-content">
                    <div class="container-fluid">
                        <div class="col-md-6">
                            <div class="left-content">
                                <h2>About Me</h2>
                                <p>
                                    Every step in life is important. It is hard to predict where you will go but your current step will reaches you towards the goal.
                                </p>
                                <p>I grew up in a family where education, patience, mutual respect and hard work were treated as the main assets to being a good human. As well as the right way to achieve success in life . My parents as teachers propelled my self growth encouraging my dreams and individuality. I thank them for the great start in life and feel pride in being their son. My wife and kids also bring the love and joy into my life that teaches me further about family and meaning. </p>
                                <p>Community service as well as helping in Feed the Hungry programs, non profits, and local environmental clean ups and beautification that enriches my locality, gives me joy and humility. For social balance and physical health I enjoy the following: tennis, fishing, hiking, soccer, cricket, golf, travel, concerts, and boating.</p>
                                <p>
                                    Now I live in Pullman, WA, USA. I like this 
                                    place very much because it is quiet and full of green. People of this territory are gentle, polite and affable. 
                                </p>
                                <p>
                                    My academic and professional details are in my resume.
                                </p>
                                <div class="main-btn"><a href="#3">Read More</a></div>
                                <div class="fb-btn"><a href="resume/Methun_resume.pdf" target="_blank"><i class="fa fa-download"></i>My Resume</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-image">
                                <img id="abtimg" src="img/me.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" id="3">
                <div class="content third-content">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <h2>Knowledge</h2>
                                                    <p>
                                                        Brain is an amazing part of every living creature. It controls the actions as well as emotions. 
                                                        Family is everything for me. It is the very first place to train our brain using customs, values and manners.
                                                        Over the time, we adjust our non-linear learning curve based on surrounding knowledge. I love all the institutions 
                                                        from where I get chance to acquire knowledge. I also love those individuals who help me to get through.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/brain.png" alt="Brain" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-image">
                                                    <img src="img/wsu.jpg" alt="Washington State University" title="Washington State University" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-content">
                                                    <p>
                                                        Currently I am doing my Ph.D. in <a href="https://school.eecs.wsu.edu/" style="color: wheat; text-decoration: none;">Washington State University</a>, USA. I inaugurated 
                                                        here from <i>Fall, 2015</i>. My major is computer science. As a research project, I am developing a exploratory data 
                                                        analysis tool named <a href='https://xperthut.github.io/HYPPO-X' style="color: wheat; text-decoration: none;"><strong>HYPPO&ndash;X</strong></a> that extract the structural property and explore the hidden information of a high dimensional dataset. I am 
                                                        using Algebraic Topology to extract the structural features of the dataset.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <p>
                                                        <a href="https://cse.buet.ac.bd/" style="color: wheat; text-decoration: none;">BUET</a> is the most prestigious university in Bangladesh for Engineering and technology. Each year only 1400 students get admitted 
                                                        after a very tough and competitive examination. I admitted in <a href="https://cse.buet.ac.bd/" style="color: wheat; text-decoration: none;">BUET</a> in Computer Science and Engineering department in March 2004.
                                                        I completed my graduation (B.Sc.) in March 2009. 
                                                    </p>
                                                    <p>
                                                        It was a different journey. The study pattern is totally different than elementary and high school. I enjoyed the years a lot. I made many friends.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/buet.jpg" alt="Bangladesh University of Engineering and Technology" title="Bangladesh University of Engineering and Technology">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-image">
                                                    <img src="img/ndc.jpg" alt="Notre Dame college" title="Notre Dame college, Dhaka, Bangladesh" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-content">
                                                    <p>
                                                        <a href="http://www.notredamecollege-dhaka.com/" style="color: wheat; text-decoration: none;">Notre Dame</a> college (High school equivalents in US) is one of the most prestigious college in Bangladesh. 
                                                        Each year nearly 2000 students get admitted after a very competitive examination. 
                                                        According to historical statistics, each student of this institution is very successful in his professional life.
                                                    </p>
                                                    <p>
                                                        The study technique of teachers of this institution is very interactive. 
                                                        The innovative teaching styles of teachers attracted me a lot. 
                                                        My most favorite teachers are Jaharlal Sarkar Sir and Nimai Chandra Dey Sir. 
                                                        Both of these Mathematicians helped me to understand mathematics in a very different angle.
                                                        The teacher named Mizanur Rahman is a marvelous teacher in Biology. I learned a lot about biology, science and general life.
                                                        Sushanto sir explained the physics in such a way that we could visualize the physical interaction and relation of objects.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <p>
                                                        <a href="https://en.wikipedia.org/wiki/Jamalpur_Zila_School" style="color: wheat; text-decoration: none;">Jamalpur Zila School</a> is the 
                                                        best school in the Jamalpur district in Bangladesh, where I born and grown up. I feel proud to be a part of it. My mainstream educational journey 
                                                        started here. I spend my early 9 years here. Lots of memory and events are surrounded with this institute. This is the first institution where 
                                                        we made more closer friendship with classmates that remains throughout the life. 
                                                    </p>
                                                    <p>
                                                        The educational infrastructure is very strict to maintain a standard here, even though we are very far from capital. I feel lucky because we were taught by 
                                                        fantastic teachers. Their moral values and customs are very influential to follow. Their strictness and zero tolerance on bad manners helped us to 
                                                        prepare for a decent life.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/jzilla.jpg" alt="Jamalpur Zilla School" title="Jamalpur Zilla School">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" id="3">
                <div class="content third-content">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- -->
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <h2>Experience</h2>
                                                    <p>
                                                        2020 early spring and summer is the most memorable time in my life. I along with my family is passing through a pandemic which is caused by a virus of corona group named COVID-19. The number 19 refers the first occurrence year which is 2019. The whole world is captured by this virus and it already kills few hundreds of thousands life. It affects the world economy so badly that people of all sectors are already suffering, even though government is continuously providing financial support but it is really hard to provide proper support for a single government. Due to the downgrading of business, the job market started collapsing in different domains which badly impacts on my early career after graduation. 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/covid-19.jpg" alt="COVID-19, a varient of corona virus" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-image">
                                                    <img src="img/aws.png" alt="Amazon AWS" title="Amazon AWS" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-content">
                                                    <p>
                                                        2019 summer was another memorable summer in my life. I got internship chance in one the leading tech company named Amazon AWS. I joined as an Applied scientist Intern in the field of Machine Learning. All the team members along with my Manager and Mentor were very open minded and friendly. We had lots of fun besides works, for instance, boat picnic, weekly happy hour, etc. Everyone here are so obsessed about to make happy to their customer. I really like and enjoy the concept.
                                                    </p>
                                                    <p>
                                                        I had opportunity to handle huge volume (peta byte level) of data. Faced challenges to deal with this size of data but learned a lot on this.
                                                    </p>
                                                    <p>
                                                        I got opportunity to explore other domains, for instance, economic, product management. I applied the concept of those domain in my data analysis which ended up building a much better forecasting model on sales data.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- -->
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <h2>Experience</h2>
                                                    <p>
                                                        2018 summer was a memorable summer in my life. I successfully completed my 
                                                        preliminary examination. I also joined in the high performance computing lab in 
                                                        <a href="https://www.pnnl.gov/" style="color: wheat; text-decoration: none;">Pacific Northwest National Laboratory</a> 
                                                        as a Ph.D. intern. My responsibilities include:
                                                    </p>
                                                    <ul style="font-size: 13px;color: #fff; letter-spacing: 0.5px;font-weight: 300;padding-left: 3em;">
                                                        <li>Completed a list of training regarding culture, security and behavior in the institution.</li>
                                                        <li>Created a prototype in an open source project named Scalable High-performance Algorithms and Data-structures (<a href="https://github.com/PNNL/SHAD" style="color: wheat; text-decoration: none;">SHAD</a>) for benchmarks analysis.</li>
                                                        <li>Used Python Data Analysis Library named Pandas to generate visually interpretable results.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/pnnl.jpg" alt="Pacific Northwest National Laboratory" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-image">
                                                    <img src="img/kbgroup.jpg" alt="KBGroup UK: A robust proven IT solution" title="KBGroup UK: A robust proven IT solution" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-content">
                                                    <p>
                                                        <a href="http://www.kbgroupuk.com/index.asp" style="color: wheat; text-decoration: none;">KBGroup</a> is a multinational software company whose software development branches located in 
                                                        Bangladesh, United Kingdom and New Zealand. I worked in Bangladesh branch from 2010 to 2015. This company provides eTicketing solutions 
                                                        for theaters, sports, and online shopping. It also develops solution for insurance company.
                                                    </p>
                                                    <p>
                                                        As an software developer, I developed many websites from stretch. Beside that, I also worked on ASP, OO Javascript, AJAX, and 
                                                        MSSql server. I have experience to develop complex query language. 
                                                    </p>
                                                    <p>
                                                        Besides as a software developer, I also worked as a team lead for a specific section of the development team of 6 persons.
                                                    </p>
                                                    <p>   
                                                        I served as a general manager to take care of all aspects of Bangladesh branch from 2013&ndash;2015. During this 
                                                        period, I experienced a lot of managerial issues those I never faced as a software developer. I worked with higher authority as well as local authorities (e.g. energy department, water supply department, local leaders and political parties, etc) that helped me to gain multi&nbsp;disciplinary knowledge.
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <p>
                                                        I started my professional career from this company named <a href="https://www.nazimcorp.com" style="color: wheat; text-decoration: none;">Nazimcorp Resource Gateway</a> in 2009. I started work on utility based mobile application for iOS. 
                                                        In an application, we reserved bottom section to pull advertise as a form of company revenue. Once a week, we had a brainstorming meeting to propose application idea.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/nrg.svg" alt="Nazimcorp Resource Gateway" title="Nazimcorp Resource Gateway" width="150" height="150" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="content">
                    <p>Copyright &copy; <script>document.write((new Date()).getFullYear());</script> Md. Kamruzzaman (Methun)</p>
                </div>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js?t=<?php echo rand(-1000000, 10000000); ?>"><\/script>');</script>

            <script src="js/vendor/bootstrap.min.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>

            <script src="js/datepicker.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>
            <script src="js/plugins.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>
            <script src="js/main.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>
            <script src="js/typed.js?t=<?php echo rand(-1000000, 10000000); ?>"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js?t=<?php echo rand(-1000000, 10000000); ?>" type="text/javascript"></script>
            <script src="js/shiftImage.js?t=343434"></script>
            <script type="text/javascript">
                        $(document).ready(function () {



                            // navigation click actions 
                            $('.scroll-link').on('click', function (event) {
                                event.preventDefault();
                                var sectionID = $(this).attr("data-id");
                                scrollToID('#' + sectionID, 750);
                            });
                            // scroll to top action
                            $('.scroll-top').on('click', function (event) {
                                event.preventDefault();
                                $('html, body').animate({scrollTop: 0}, 'slow');
                            });
                            // mobile nav toggle
                            $('#nav-toggle').on('click', function (event) {
                                event.preventDefault();
                                $('#main-nav').toggleClass("open");
                            });
                        });
                        // scroll function
                        function scrollToID(id, speed) {
                            var offSet = 0;
                            var targetOffset = $(id).offset().top - offSet;
                            var mainNav = $('#main-nav');
                            $('html,body').animate({scrollTop: targetOffset}, speed);
                            if (mainNav.hasClass("open")) {
                                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                                mainNav.removeClass("open");
                            }
                        }
                        if (typeof console === "undefined") {
                            console = {
                                log: function () { }
                            };
                        }
            </script>
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments);
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m);
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-53820364-2', 'auto');
                ga('send', 'pageview');

            </script><script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-53820364-2']);
                _gaq.push(['_setDomainName', 'mhmethun.com']);
                _gaq.push(['_setAllowLinker', true]);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

            </script>
    </body>
</html>