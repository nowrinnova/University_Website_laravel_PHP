<!DOCTYPE html>
<html>

<head>
    <style>
        /* CSS styling for header, section, footer, and scrolling */
        body {
            margin: 0;
            padding: 0;
            overflow-y: scroll;
        }

        header {
            background-color: #f2f2f2;
            padding: 20px;
        }

        section {
            height: 400px;

            padding: 10px;
        }

        side-by-side {
            display: inline-block;
        }

        .image-container {
            display: flex;
            align-items: center;
        }

        .image-container img {
            margin-left: 75px;
            /* padding-left: 20px; */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <!-- Header content goes here -->
        {{ View::make('header') }}
    </header>

    <section>
        <!-- Scrolling section content goes here -->

        <div class="image-container">
            <img src="{{ URL('image/about1.png') }}" alt="Image 1" width="30%" height="300px">
            <img src="{{ URL('image/about2.png') }}" alt="Image 2" width="50%" height="300px">
        </div>

        <!-- Add more content here -->
    </section>
    <section>
        <div class="mid-body"></div>
        <h3 class="text-center ">Self-Portrayal</h3>
        <p>Bangladesh University of Engineering and Technology (BUET) is a pioneer in engineering education in
            Bangladesh. The history of BUET dates back to 1876 when the Dhaka Survey School was founded. Later in 1947,
            it became an engineering college and gained independent university status in 1962. It is located on a
            compact 83.9-acre land in the heart of Dhaka, the capital of Bangladesh.</p>
        <p>BUET offers high-quality research and education through its 18 departments under five faculties which are
            architecture and planning, civil engineering, engineering, electrical and electronic engineering, and
            mechanical engineering. Six university-led institutes also focus on diverse areas of research. BUET has over
            600 faculty members and over 10000 undergraduate and graduate students. Graduates from BUET have a long
            history of enjoying extraordinary success all over the world, with many notable alumni serving as the global
            leaders in their respective fields.</p>
        <p>Excellent academic environment, state-of-the-art research facilities, and a vibrant campus life have made
            BUET the first choice for future engineers and architects in Bangladesh. Students are enrolled at BUET
            through a highly-competitive entrance examination. BUET is the technological research and innovation hub in
            Bangladesh. It has been contributing immensely to nation-building since its establishment by providing
            expert services to hallmark infrastructure development projects. Faculty members work closely with industry
            and the Government to address crucial problems and formulate national policies and strategies in various
            sectors. BUET is an active member of the Association of Commonwealth Universities and maintains strong
            collaborations with hundreds of renowned universities and industries at home and abroad.</p>

    </section>

    <section>
        <footer>
            <!-- Footer content goes here -->
            {{ View::make('footer') }}
        </footer>
    </section>
</body>

</html>
