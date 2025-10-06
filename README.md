<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kayli Pike</title>
    <meta name="author" content="Kayli Pike">
    <meta name="description" content="A website for information on Kayli Pike, past projects, and ways to reach out.">
    <style>
        /* basic CSS */
        body {
            margin: auto;
            padding: 3%;
            width: 90%;
            display: grid;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
        }

        figcaption {
            color: #839e99;
            font-style: italic;
            text-align: center;
        }

        img {
            border-radius: 3%;
            max-width: 50%
        }

        /* Setting up a grid layout for the sitemap page */
        body>h1 {
            grid-column: 1/2;
            grid-row: 1;

        }

        body>h2 {
            grid-column: 1/2;
            grid-row: 2;

        }

        body>p {
            grid-column: 1/2;
            grid-row: 3;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
            grid-column: 2 / 2;
            grid-row: 1 / span 3;
        }

        .header {
            grid-area: header;
            grid-column: 1 / 3;
            padding: .5%;
            margin: .5%;
        }

        .lab-layout {
            border-bottom: thin dashed navy;
            display: inline-grid;
            grid-template-columns: 25% 25% 50%;
            grid-template-areas: "header header header"
                "public-files supporting-files grader-notes";
            padding: .5%;
            margin: .5%;
            grid-column: 1 / span 2;
        }

        .public-files {
            grid-area: public-files;
            padding: .5%;
            margin: .5%;
        }

        .supporting-files {
            grid-area: supporting-files;
            padding: .5%;
            margin: .5%;
        }

        .grader-notes {
            grid-area: grader-notes;
            padding: .5%;
            margin: .5%;
        }
    </style>
</head>

<body>
    <figure>
        <img alt="Kayli Pike" src="images/kayli-pike.png">
        <figcaption>Hanging out in Boston.</figcaption>
    </figure>

    <h1>CS 1080-<em>A</em> Spring 2024</h1>
    <h2>Kayli Pike - Site map</h2>
    <p>
        <a href="ADMIN/code-viewer.php">Admin Page</a>
        <a href="ADMIN/table-viewer.php?getDatabase=">Table Viewer</a>
    </p>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Final Project</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="final/index.php">Home page</a></p>
            <p><a href="final/greatwall.php">Great Wall page</a></p>
            <p><a href="final/pandas.php">Pandas page</a></p>
            <p><a href="final/history.php">History page (displays data)</a></p>
            <p><a href="final/nature.php">Nature page</a></p>
            <p><a href="final/form.php">Form page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="final/css/custom.css">css style sheet</a></p>
            <p><a href="final/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="final/css/layout-tablet.css">tablet style sheet</a></p>
            <p><a href="final/css/layout-phone.css">phone style sheet</a></p>
            <p><a href="final/images/wireframe-desktop.png">Desktop Wireframe</a></p>
            <p><a href="final/images/wireframe-tablet.png">Tablet Wireframe</a></p>
            <p><a href="final/images/wireframe-phone.png">Phone Wireframe</a></p>
            <h3>Includes</h3>
            <p><a href="final/top.php">top.php</a></p>
            <p><a href="final/header.php">header.php</a></p>
            <p><a href="final/nav.php">nav.php</a></p>
            <p><a href="final/footer.php">footer.php</a></p>
            <h3>Database</h3>
            <p><a href="final/database-connect.php">database-connect.php</a></p>
            <p><a href="final/images/records.png">records.png</a></p>
            <p><a href="final/sql.php">sql.php</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Here is my video presentation:</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZGZQ40biAOE?si=8UAJBfhBHwIL7dhS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Nine - Saving a forms data.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab9/about.php">About page</a></p>
            <p><a href="lab9/array.php">Array page</a></p>
            <p><a href="lab9/detail.php">Detail page</a></p>
            <p><a href="lab9/form.php">Form page</a></p>
            <p><a href="lab9/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab9/css/custom.css">css style sheet</a></p>
            <p><a href="lab9/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab9/css/layout-tablet.css">tablet style sheet</a></p>
            <p><a href="lab9/css/layout-phone.css">phone style sheet</a></p>
            <p><a href="lab9/images/wireframe.png">Wireframe</a></p>
            <h3>Includes</h3>
            <p><a href="lab9/top.php">top.php</a></p>
            <p><a href="lab9/header.php">header.php</a></p>
            <p><a href="lab9/nav.php">nav.php</a></p>
            <p><a href="lab9/footer.php">footer.php</a></p>
            <h3>Database</h3>
            <p><a href="lab9/database-connect.php">database-connect.php</a></p>
            <p><a href="lab9/images/records.png">records.png</a></p>
            <p><a href="lab9/sql.php">sql.php</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Eight - Database to display data.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab8/about.php">About page</a></p>
            <p><a href="lab8/array.php">Array page</a></p>
            <p><a href="lab8/detail.php">Detail page</a></p>
            <p><a href="lab8/form.php">Form page</a></p>
            <p><a href="lab8/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab8/css/custom.css">css style sheet</a></p>
            <p><a href="lab8/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab8/css/layout-tablet.css">tablet style sheet</a></p>
            <p><a href="lab8/css/layout-phone.css">phone style sheet</a></p>
            <p><a href="lab8/images/wireframe.png">Wireframe</a></p>
            <h3>Includes</h3>
            <p><a href="lab8/top.php">top.php</a></p>
            <p><a href="lab8/header.php">header.php</a></p>
            <p><a href="lab8/nav.php">nav.php</a></p>
            <p><a href="lab8/footer.php">footer.php</a></p>
            <h3>Database</h3>
            <p><a href="lab8/database-connect.php">database-connect.php</a></p>
            <p><a href="lab8/images/records.png">records.png</a></p>
            <p><a href="lab8/sql.php">sql.php</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Seven - Arrays and Includes.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab7/about.php">About page</a></p>
            <p><a href="lab7/detail.php">Detail page</a></p>
            <p><a href="lab7/index.php">Home page</a></p>
            <p><a href="lab7/form.php">Form page</a></p>
            <p><a href="lab7/array.php">Array page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab7/css/custom.css">css style sheet</a></p>
            <p><a href="lab7/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab7/css/layout-tablet.css">tablet style sheet</a></p>
            <p><a href="lab7/css/layout-phone.css">phone style sheet</a></p>
            <p><a href="lab7/images/wireframe.png">wireframe</a></p>
            <h3>Includes</h3>
            <p><a href="lab7/top.php">top.php</a></p>
            <p><a href="lab7/header.php">header.php</a></p>
            <p><a href="lab7/nav.php">nav.php</a></p>
            <p><a href="lab7/footer.php">footer.php</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Six - Responsive Design.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab6/about.php">About page</a></p>
            <p><a href="lab6/detail.php">Detail page</a></p>
            <p><a href="lab6/index.php">Home page</a></p>
            <p><a href="lab6/form.php">Form page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab6/css/custom.css">css style sheet</a></p>
            <p><a href="lab6/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab6/css/layout-tablet.css">tablet style sheet</a></p>
            <p><a href="lab6/css/layout-phone.css">phone style sheet</a></p>
            <p><a href="lab6/images/wireframe.png">wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab 5 - Styling your site.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab5/about.php">About page</a></p>
            <p><a href="lab5/detail.php">Detail page</a></p>
            <p><a href="lab5/index.php">Home page</a></p>
            <p><a href="lab5/form.php">Form Page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab5/css/custom.css">css style sheet</a></p>
            <p><a href="lab5/css/layout-desktop.css">css layout file</a></p>
            <p><a href="lab5/images/wireframe.png">wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>I did copy and paste the document level css from Professor Erickson's sitemap, but for some reason my image was appearing much larger than it should have. 
                I mentioned this in class on Friday to a TA who told me to change the css for the max-width of my image. That is why my css is slightly different there and 
                why my page might look slightly different. That is the solution he told me to move forward with but I can change it in some other way if need be.</p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Four - Styling your site.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab4/about.php">About page</a></p>
            <p><a href="lab4/detail.php">Detail page</a></p>
            <p><a href="lab4/index.php">Home page</a></p>
            <p><a href="lab4/form.php">Form Page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab4/css/custom.css">css style sheet</a></p>
            <p><a href="lab4/images/wireframe.png">wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Three B - Creating a form.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab3-B/about.php">About page</a></p>
            <p><a href="lab3-B/detail.php">Detail page</a></p>
            <p><a href="lab3-B/index.php">Home page</a></p>
            <p><a href="lab3-B/form.php">Form</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab3-B/css/custom.css">css style sheet</a></p>
            <p><a href="lab3-B/images/wireframe2.png">wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Three - Creating a website.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab3/about.php">About page</a></p>
            <p><a href="lab3/detail.php">Detail page</a></p>
            <p><a href="lab3/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab3/css/custom.css">css style sheet</a></p>
            <p><a href="lab3/images/wireframe.png">wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Two - Choosing your topic.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab2/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Lab topic is about climate change</p>
            <p>Final project topic is about sharks in the ocean</p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab One - Setting up your sitemap.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="sitemap.php">Site map</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->
</body>

</html>