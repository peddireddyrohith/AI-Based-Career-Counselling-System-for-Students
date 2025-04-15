<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CopeUp</title>
  <link href="./output.css" rel="stylesheet" />
  <style>
    html {
      scroll-behavior: smooth;
    }
  
  </style>
</head>

<body class="bg-gradient-to-r from-[#48A6A7] to-[#9ACBD0]">

  <header class="bg-[#006A71] py-4">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="realogo.png" class="w-10 h-10 rounded-full">
        <span class="text-[#F2EFE7] text-xl font-bold tracking-wide">CopeUp</span>
      </div>
      <nav class="hidden md:flex space-x-6 text-[#F2EFE7] text-sm font-medium">
        <a href="#home" class="hover:text-[#9ACBD0]">Home</a>
        <a href="#explore-careers" class="hover:text-[#9ACBD0]">Explore Careers</a>
        <a href="#about" class="hover:text-[#9ACBD0]">About</a>
        <a href="#contact" class="hover:text-[#9ACBD0]">Contact</a>
      </nav>
      <div class="relative group">
        <a href="signup.php"
          class="text-[#F2EFE7] border border-[#F2EFE7] px-4 py-2 rounded hover:bg-[#9ACBD0] hover:text-black transition">
          Login/SignUp
        </a>
      </div>
    </div>
  </header>
  <section class="py-20" id="home">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-12 md:mb-0">
        <h1 class="text-4xl md:text-5xl font-bold text-[#006A71] mb-6 leading-tight">
          Shape Your Future with Smart Career Guidance
        </h1>
        <p class="text-lg text-gray-700 mb-6">
          Explore paths, discover your strengths, and find a career that fits your dreams—⏳One step at a time.<br />
          —🧭 Step-by-Step Guidance.<br />
          —🎯Personalized Career Paths.<br />
          —🧠Discover Your Strengths.<br />
          —🔍Explore Career Opportunities.<br />
          —📈Track Your Progress
        </p>
        <div class="flex space-x-4">
          <a href="signup.php">
            <button class="bg-[#F2EFE7] hover:bg-[#9ACBD0] text-[#006A71] font-bold px-6 py-3 rounded-lg transition">
              Get Started
            </button>
          </a>
          <a href="#features">
            <button
              class="border border-[#48A6A7] bg-[#F2EFE7] hover:bg-[#9ACBD0] text-[#006A71] font-semibold px-6 py-3 rounded-lg transition">
              Learn More
            </button>
          </a>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df" alt="Students Planning Career"
          class="rounded-xl shadow-xl" />
      </div>
    </div>
  </section>

  <section class="py-24 bg-gradient-to-r from-[#48A6A7] to-[#9ACBD0]" id="explore-careers">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-[#006A71] mb-12">Explore Your Career Path</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-yellow-50 p-8 rounded-xl shadow-xl">
        <h3 class="text-2xl font-semibold text-center text-[#48A6A7] mb-6">Find Your Future Career</h3>
        <form method="POST" action="#career-form-1" class="space-y-6">
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">Which subjects do you enjoy the most?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="science" <?php if (isset($_POST['subjects']) && in_array('science', $_POST['subjects'])) echo 'checked'; ?> /> Science</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="maths" <?php if (isset($_POST['subjects']) && in_array('maths', $_POST['subjects'])) echo 'checked'; ?> /> Mathematics</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="computers" <?php if (isset($_POST['subjects']) && in_array('computers', $_POST['subjects'])) echo 'checked'; ?> /> Computers</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="arts" <?php if (isset($_POST['subjects']) && in_array('arts', $_POST['subjects'])) echo 'checked'; ?> /> Arts & Design</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="commerce" <?php if (isset($_POST['subjects']) && in_array('commerce', $_POST['subjects'])) echo 'checked'; ?> /> Commerce</label>
            </div>
          </div>
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">What activities do you enjoy?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="problemsolving" <?php if (isset($_POST['activities']) && in_array('problemsolving', $_POST['activities'])) echo 'checked'; ?> /> Solving Puzzles</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="creative" <?php if (isset($_POST['activities']) && in_array('creative', $_POST['activities'])) echo 'checked'; ?> /> Drawing or Designing</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="leadership" <?php if (isset($_POST['activities']) && in_array('leadership', $_POST['activities'])) echo 'checked'; ?> /> Leading Teams</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="tech" <?php if (isset($_POST['activities']) && in_array('tech', $_POST['activities'])) echo 'checked'; ?> /> Exploring Tech</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="helping" <?php if (isset($_POST['activities']) && in_array('helping', $_POST['activities'])) echo 'checked'; ?> /> Helping Others</label>
            </div>
          </div>
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">What are your future dreams?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="engineer" <?php if (isset($_POST['dreams']) && in_array('engineer', $_POST['dreams'])) echo 'checked'; ?> /> Engineer</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="doctor" <?php if (isset($_POST['dreams']) && in_array('doctor', $_POST['dreams'])) echo 'checked'; ?> /> Doctor</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="scientist" <?php if (isset($_POST['dreams']) && in_array('scientist', $_POST['dreams'])) echo 'checked'; ?> /> Scientist</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="artist" <?php if (isset($_POST['dreams']) && in_array('artist', $_POST['dreams'])) echo 'checked'; ?> /> Artist / Designer</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="entrepreneur" <?php if (isset($_POST['dreams']) && in_array('entrepreneur', $_POST['dreams'])) echo 'checked'; ?> /> Start a Business</label>
            </div>
          </div>
          <input type="hidden" name="form_type" value="career1">
          <div class="text-center">
            <button type="submit" class="mt-6 bg-[#006A71] hover:bg-[#48A6A7] text-white font-bold px-6 py-3 rounded-lg transition">
              Show My Career Suggestions
            </button>
          </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] == 'career1') {
            $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : [];
            $activities = isset($_POST['activities']) ? $_POST['activities'] : [];
            $dreams = isset($_POST['dreams']) ? $_POST['dreams'] : [];

            echo '<div class="mt-8">';
            echo '<h3 class="text-xl font-bold text-center text-[#006A71] mb-4">Your Career Suggestions</h3>';

            if (empty($subjects) && empty($activities) && empty($dreams)) {
                echo '<p class="text-center text-red-600">Please select at least one option!</p>';
            } else {
                echo '<ul class="list-disc pl-6 space-y-2 text-[#006A71]">';
                if (in_array('science', $subjects) && in_array('engineer', $dreams)) {
                    echo '<li>Engineering (Mechanical, Electrical, Computer, Civil)</li>';
                }
                if (in_array('doctor', $dreams) || (in_array('science', $subjects) && in_array('helping', $activities))) {
                    echo '<li>Medical Career (Doctor, Nurse, Therapist)</li>';
                }
                if (in_array('arts', $subjects) || in_array('creative', $activities)) {
                    echo '<li>Creative Fields (Graphic Designer, Animator, Architect)</li>';
                }
                if (in_array('maths', $subjects) && in_array('problemsolving', $activities)) {
                    echo '<li>Data Analyst or Mathematician</li>';
                }
                if (in_array('computers', $subjects) || in_array('tech', $activities)) {
                    echo '<li>Software Engineer / Game Developer / IT Specialist</li>';
                }
                if (in_array('entrepreneur', $dreams) || in_array('leadership', $activities)) {
                    echo '<li>Entrepreneur / Startup Founder</li>';
                }
                if (in_array('scientist', $dreams)) {
                    echo '<li>Research Scientist</li>';
                }
                echo '</ul>';
            }
            echo '</div>';
        }
        ?>
      </div>

      <!-- Form 2: Get Career Guidance -->
      <div class="bg-yellow-50 p-8 rounded-xl shadow-xl z-10 relative">
        <h3 class="text-2xl font-semibold text-center text-[#48A6A7] mb-6">Get Career Guidance</h3>
        <form method="POST" action="#career-form-2" class="space-y-6">
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">Which subjects do you feel confident in?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="physics" <?php if (isset($_POST['subjects']) && in_array('physics', $_POST['subjects'])) echo 'checked'; ?> /> Physics</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="chemistry" <?php if (isset($_POST['subjects']) && in_array('chemistry', $_POST['subjects'])) echo 'checked'; ?> /> Chemistry</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="biology" <?php if (isset($_POST['subjects']) && in_array('biology', $_POST['subjects'])) echo 'checked'; ?> /> Biology</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="computers" <?php if (isset($_POST['subjects']) && in_array('computers', $_POST['subjects'])) echo 'checked'; ?> /> Computer Applications</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="business" <?php if (isset($_POST['subjects']) && in_array('business', $_POST['subjects'])) echo 'checked'; ?> /> Business Studies</label>
              <label class="text-[#006A71]"><input type="checkbox" name="subjects[]" value="arts" <?php if (isset($_POST['subjects']) && in_array('arts', $_POST['subjects'])) echo 'checked'; ?> /> Arts / Design</label>
            </div>
          </div>
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">What tasks do you enjoy?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="building" <?php if (isset($_POST['activities']) && in_array('building', $_POST['activities'])) echo 'checked'; ?> /> Building or Fixing Things</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="coding" <?php if (isset($_POST['activities']) && in_array('coding', $_POST['activities'])) echo 'checked'; ?> /> Writing Code / Puzzles</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="designing" <?php if (isset($_POST['activities']) && in_array('designing', $_POST['activities'])) echo 'checked'; ?> /> Sketching or Designing</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="leading" <?php if (isset($_POST['activities']) && in_array('leading', $_POST['activities'])) echo 'checked'; ?> /> Leading Teams</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="researching" <?php if (isset($_POST['activities']) && in_array('researching', $_POST['activities'])) echo 'checked'; ?> /> Researching Ideas</label>
              <label class="text-[#006A71]"><input type="checkbox" name="activities[]" value="helping" <?php if (isset($_POST['activities']) && in_array('helping', $_POST['activities'])) echo 'checked'; ?> /> Helping People</label>
            </div>
          </div>
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">What’s your future vision?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="invent" <?php if (isset($_POST['dreams']) && in_array('invent', $_POST['dreams'])) echo 'checked'; ?> /> Invent or Build Solutions</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="health" <?php if (isset($_POST['dreams']) && in_array('health', $_POST['dreams'])) echo 'checked'; ?> /> Solve Health Problems</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="explore" <?php if (isset($_POST['dreams']) && in_array('explore', $_POST['dreams'])) echo 'checked'; ?> /> Explore How the World Works</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="create" <?php if (isset($_POST['dreams']) && in_array('create', $_POST['dreams'])) echo 'checked'; ?> /> Create Beautiful Designs</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="startup" <?php if (isset($_POST['dreams']) && in_array('startup', $_POST['dreams'])) echo 'checked'; ?> /> Run a Business</label>
              <label class="text-[#006A71]"><input type="checkbox" name="dreams[]" value="tech" <?php if (isset($_POST['dreams']) && in_array('tech', $_POST['dreams'])) echo 'checked'; ?> /> Develop New Technologies</label>
            </div>
          </div>
          <input type="hidden" name="form_type" value="career2">
          <div class="text-center">
            <button type="submit" class="mt-6 bg-[#006A71] hover:bg-[#48A6A7] text-white font-bold px-6 py-3 rounded-lg transition">
              Show My Career Suggestions
            </button>
          </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] == 'career2') {
            $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : [];
            $activities = isset($_POST['activities']) ? $_POST['activities'] : [];
            $dreams = isset($_POST['dreams']) ? $_POST['dreams'] : [];

            echo '<div class="mt-8">';
            echo '<h3 class="text-xl font-bold text-center text-[#006A71] mb-4">Your Career Suggestions</h3>';

            if (empty($subjects) && empty($activities) && empty($dreams)) {
                echo '<p class="text-center text-red-600">Please select at least one option!</p>';
            } else {
                echo '<ul class="list-disc pl-6 space-y-2 text-[#006A71]">';
                if (in_array('computers', $subjects) || in_array('coding', $activities) || in_array('tech', $dreams)) {
                    echo '<li>Computer Science / Software Engineering</li>';
                }
                if ((in_array('physics', $subjects) || in_array('math', $subjects)) && in_array('building', $activities)) {
                    echo '<li>Engineering — Mechanical, Electrical, or Civil</li>';
                }
                if (in_array('biology', $subjects) || in_array('health', $dreams)) {
                    echo '<li>Medical Sciences — Doctor, Biotech, Pharmacy</li>';
                }
                if (in_array('arts', $subjects) || in_array('designing', $activities) || in_array('create', $dreams)) {
                    echo '<li>Design — Graphic, UI/UX, Animation, Fine Arts</li>';
                }
                if (in_array('business', $subjects) || in_array('business', $activities) || in_array('startup', $dreams)) {
                    echo '<li>Business — Management, Entrepreneurship, Commerce</li>';
                }
                if (in_array('researching', $activities) || in_array('explore', $dreams)) {
                    echo '<li>Pure Sciences — Physics, Chemistry, Mathematics</li>';
                }
                echo '</ul>';
            }
            echo '</div>';
        }
        ?>
      </div>

      <!-- Form 3: Plan Your Next Step -->
      <div class="bg-yellow-50 p-8 rounded-xl shadow-xl">
        <h3 class="text-2xl font-semibold text-center text-[#48A6A7] mb-6">Plan Your Next Step</h3>
        <form method="POST" action="#career-form-3" class="space-y-6">
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">Which field did you specialize in?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="degree[]" value="cse" <?php if (isset($_POST['degree']) && in_array('cse', $_POST['degree'])) echo 'checked'; ?> /> Computer Science / IT</label>
              <label class="text-[#006A71]"><input type="checkbox" name="degree[]" value="engineering" <?php if (isset($_POST['degree']) && in_array('engineering', $_POST['degree'])) echo 'checked'; ?> /> Engineering (Non-CS)</label>
              <label class="text-[#006A71]"><input type="checkbox" name="degree[]" value="management" <?php if (isset($_POST['degree']) && in_array('management', $_POST['degree'])) echo 'checked'; ?> /> Business / Management</label>
              <label class="text-[#006A71]"><input type="checkbox" name="degree[]" value="arts" <?php if (isset($_POST['degree']) && in_array('arts', $_POST['degree'])) echo 'checked'; ?> /> Arts / Humanities</label>
              <label class="text-[#006A71]"><input type="checkbox" name="degree[]" value="science" <?php if (isset($_POST['degree']) && in_array('science', $_POST['degree'])) echo 'checked'; ?> /> Pure Sciences</label>
              <label class="text-[#006A71]"><input type="checkbox" name="degree[]" value="medical" <?php if (isset($_POST['degree']) && in_array('medical', $_POST['degree'])) echo 'checked'; ?> /> Medical / Life Sciences</label>
            </div>
          </div>
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">What activities did you enjoy?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="experience[]" value="projects" <?php if (isset($_POST['experience']) && in_array('projects', $_POST['experience'])) echo 'checked'; ?> /> Real-World Projects</label>
              <label class="text-[#006A71]"><input type="checkbox" name="experience[]" value="research" <?php if (isset($_POST['experience']) && in_array('research', $_POST['experience'])) echo 'checked'; ?> /> Academic Research</label>
              <label class="text-[#006A71]"><input type="checkbox" name="experience[]" value="startup" <?php if (isset($_POST['experience']) && in_array('startup', $_POST['experience'])) echo 'checked'; ?> /> Startup Activities</label>
              <label class="text-[#006A71]"><input type="checkbox" name="experience[]" value="internship" <?php if (isset($_POST['experience']) && in_array('internship', $_POST['experience'])) echo 'checked'; ?> /> Industry Internships</label>
              <label class="text-[#006A71]"><input type="checkbox" name="experience[]" value="design" <?php if (isset($_POST['experience']) && in_array('design', $_POST['experience'])) echo 'checked'; ?> /> Designing or Creative Work</label>
              <label class="text-[#006A71]"><input type="checkbox" name="experience[]" value="community" <?php if (isset($_POST['experience']) && in_array('community', $_POST['experience'])) echo 'checked'; ?> /> Community Service</label>
            </div>
          </div>
          <div>
            <label class="block text-lg font-semibold text-[#006A71] mb-3">What's your next move?</label>
            <div class="grid grid-cols-2 gap-4">
              <label class="text-[#006A71]"><input type="checkbox" name="plans[]" value="pg" <?php if (isset($_POST['plans']) && in_array('pg', $_POST['plans'])) echo 'checked'; ?> /> Pursue Post-Graduation</label>
              <label class="text-[#006A71]"><input type="checkbox" name="plans[]" value="job" <?php if (isset($_POST['plans']) && in_array('job', $_POST['plans'])) echo 'checked'; ?> /> Start Working</label>
              <label class="text-[#006A71]"><input type="checkbox" name="plans[]" value="freelance" <?php if (isset($_POST['plans']) && in_array('freelance', $_POST['plans'])) echo 'checked'; ?> /> Freelancing</label>
              <label class="text-[#006A71]"><input type="checkbox" name="plans[]" value="startup" <?php if (isset($_POST['plans']) && in_array('startup', $_POST['plans'])) echo 'checked'; ?> /> Launch a Startup</label>
              <label class="text-[#006A71]"><input type="checkbox" name="plans[]" value="research" <?php if (isset($_POST['plans']) && in_array('research', $_POST['plans'])) echo 'checked'; ?> /> Enter Research / PhD</label>
            </div>
          </div>
          <input type="hidden" name="form_type" value="career3">
          <div class="text-center">
            <button type="submit" class="mt-6 bg-[#006A71] hover:bg-[#48A6A7] text-white font-bold px-6 py-3 rounded-lg transition">
              Show My Career Path
            </button>
          </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] == 'career3') {
            $degree = isset($_POST['degree']) ? $_POST['degree'] : [];
            $experience = isset($_POST['experience']) ? $_POST['experience'] : [];
            $plans = isset($_POST['plans']) ? $_POST['plans'] : [];

            echo '<div class="mt-8">';
            echo '<h3 class="text-xl font-bold text-center text-[#006A71] mb-4">Recommended Path for You</h3>';

            if (empty($degree) && empty($experience) && empty($plans)) {
                echo '<p class="text-center text-red-600">Please select at least one option!</p>';
            } else {
                echo '<ul class="list-disc pl-6 space-y-2 text-[#006A71]">';
                if (in_array('cse', $degree)) {
                    echo '<li>Software Roles: Developer, Data Analyst, or Master’s in AI/Data Science</li>';
                }
                if (in_array('engineering', $degree)) {
                    echo '<li>Core Engineering Jobs, M.Tech, or MBA</li>';
                }
                if (in_array('medical', $degree)) {
                    echo '<li>Medical PG (MD/MS), Clinical Research, or Healthcare Analytics</li>';
                }
                if (in_array('management', $degree)) {
                    echo '<li>Corporate Roles or MBA for Career Growth</li>';
                }
                if (in_array('research', $experience)) {
                    echo '<li>PhD or Research-Oriented Industry Roles</li>';
                }
                if (in_array('projects', $experience) && in_array('job', $plans)) {
                    echo '<li>Industry Career with Project Experience</li>';
                }
                if (in_array('startup', $experience) || in_array('startup', $plans)) {
                    echo '<li>Entrepreneurship or Early-Stage Startups</li>';
                }
                if (in_array('pg', $plans)) {
                    echo '<li>Master’s / MBA for Specialization</li>';
                }
                if (in_array('freelance', $plans)) {
                    echo '<li>Freelancing with a Strong Portfolio</li>';
                }
                echo '</ul>';
            }
            echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>
</section>
  <!-- About Section -->
  <section id="about" class="py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-[#1D63FF] mb-4">About CopeUp</h2>
      <p class="text-gray-700 text-lg mb-8">
        Cope Up is a smart career counseling platform designed to help
        students, job seekers, and career changers find their ideal career
        paths using artificial intelligence and expert insights.
      </p>
      <div class="grid md:grid-cols-3 gap-8 text-left">
        <!-- 6 Info Cards -->
        <div class="bg-yellow-50 p-6 rounded-xl hover:shadow-lg transition shadow">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">🤖 What We Do</h3>
          <p class="text-gray-600">We analyze your interests, skills, personality, and goals to recommend career
            options, suitable courses, colleges, and industry insights — all on a personalized AI dashboard.</p>
        </div>
        <div class="bg-yellow-50 p-6 rounded-xl hover:shadow-lg transition shadow">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">🎯 Our Mission</h3>
          <p class="text-gray-600">Our mission is to bridge the gap between ambition and action by providing accessible,
            accurate, and tailored career advice — anytime, anywhere.</p>
        </div>
        <div class="bg-yellow-50 p-6 rounded-xl hover:shadow-lg transition shadow">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">👥 Who It's For</h3>
          <p class="text-gray-600">Whether you're a high school student choosing a stream, a college student exploring
            jobs, or a professional switching careers — CareerGuideAI is built for you.</p>
        </div>
        <div class="bg-yellow-50 p-6 rounded-xl hover:shadow-lg transition shadow">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">🧠 How It Works</h3>
          <p class="text-gray-600">Through a series of assessments and AI-powered analysis, we generate real-time
            insights and match you with careers, courses, mentors, and resources that align with your strengths.</p>
        </div>
        <div class="bg-yellow-50 p-6 rounded-xl hover:shadow-lg transition shadow">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">💡 Why Choose Us</h3>
          <p class="text-gray-600">Unlike generic career portals, we offer dynamic guidance that evolves with your
            growth, giving you control and clarity over your future.</p>
        </div>
        <div class="bg-yellow-50 p-6 rounded-xl hover:shadow-lg transition shadow">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">🚀 Future Ready</h3>
          <p class="text-gray-600">We stay updated with industry trends, future skills, and global job data — so your
            journey is always aligned with what’s next.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-[#1D63FF] mb-4">Contact Us</h2>
      <p class="text-gray-700 mb-8">
        Reach out to our support team for questions, assistance, or collaboration.
      </p>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-left">
        <div class="bg-[#F2EFE7] p-6 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">📞 Prem Bhuvan</h3>
          <p class="text-gray-600">Phone: <a href="tel:+1234567890" class="text-blue-600 hover:underline">+1 234 567
              890</a></p>
          <p class="text-gray-600">Email: <a href="mailto:bhuvan@example.com"
              class="text-blue-600 hover:underline">bhuvan@example.com</a></p>
        </div>
        <div class="bg-[#F2EFE7] p-6 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">📞 Pardhu</h3>
          <p class="text-gray-600">Phone: <a href="tel:+1987654321" class="text-blue-600 hover:underline">+1 987 654
              321</a></p>
          <p class="text-gray-600">Email: <a href="mailto:pardhu@example.com"
              class="text-blue-600 hover:underline">pardhu@example.com</a></p>
        </div>
        <div class="bg-[#F2EFE7] p-6 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">📞 Bhargav</h3>
          <p class="text-gray-600">Phone: <a href="tel:+1123456789" class="text-blue-600 hover:underline">+1 123 456
              789</a></p>
          <p class="text-gray-600">Email: <a href="mailto:bhargav@example.com"
              class="text-blue-600 hover:underline">bhargav@example.com</a></p>
        </div>
        <div class="bg-[#F2EFE7] p-6 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold text-[#1D63FF] mb-2">📞 Rohit</h3>
          <p class="text-gray-600">Phone: <a href="tel:+1098765432" class="text-blue-600 hover:underline">+1 098 765
              432</a></p>
          <p class="text-gray-600">Email: <a href="mailto:rohit@example.com"
              class="text-blue-600 hover:underline">rohit@example.com</a></p>
        </div>
      </div>
    </div>
  </section>
  
  <div id="Popup" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center z-50 items-center" >
  <div class="relative bg-white p-8 rounded-xl shadow-lg w-96">
    <button id="closePopup" class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">
      &times;
    </button>
    <h2 class="text-xl font-semibold text-[#006A71] mb-4">Welcome to CopeUp</h2>
    <p class="text-gray-600">Log in or sign up to get personalized career guidance.</p>
    <div class="mt-6 text-center">
      <a href="signup.php"
         class="inline-block bg-[#1D63FF] text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
        Login / Sign Up
      </a>
    </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
      const popup = document.getElementById("Popup");
      const closeButton = document.getElementById("closePopup");

      popup.style.display = "block";
      closeButton.addEventListener("click", () => {
        popup.style.display = "none";
      });
    });
  </script>

</body>

</html>