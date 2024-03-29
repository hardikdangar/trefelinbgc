<?php declare(strict_types=1);

require_once('./../functions.php');

extract(getFixtures());
//$results = getResults($fixtures);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Trefelin Boys and Girls Club - Welsh League Football Club in Port Talbot</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="/main.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img src="img/trefelin-crest.png" height="32"/>
    <a class="navbar-brand" href="#">
        Trefelin BGC
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="/fixtures.php">Fixtures and Results</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="/directions.php">Directions</a>-->
<!--            </li>-->
        </ul>
    </div>
</nav>

<main role="main">
    <div class="jumbotron" style="margin-top:25px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <img src="img/trefelin-crest.png" class="img-fluid text-center"
                         alt="Trefelin BGC Logo EST 1984"/>
                </div>
            </div>
            <div class="row">

                <div class="col-sm">
                    <h3>Upcoming Fixtures</h3>
                    <table class="table table-striped table-dark">
                        <tbody>
                        <?php foreach ($fixtures as $fixture): ?>
                            <tr class="">
                                <td><?= $fixture['date']->format('jS M'); ?></td>
                                <td><?= $fixture['time']; ?></td>
                                <td><?= $fixture['home']; ?></td>
                                <td><?= $fixture['away']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <h3>Latest Results</h3>
                    <table class="table table-striped table-dark">
                        <tbody>
                        <?php foreach ($results as $result): ?>
                            <?php
                            $where = (trim($result['home']) === 'Trefelin BGC') ? 'Home' : 'Away';
                            $score = explode(' - ', $result['result']);
                            if ($where === 'Home') {
                                if ($score[0] > $score[1]) {
                                    $colour = 'success';
                                }
                                if ($score[0] === $score[1]) {
                                    $colour = 'primary';
                                }
                                if ($score[0] < $score[1]) {
                                    $colour = 'danger';
                                }
                                $team = $result['away'];
                            } else {
                                if ($score[1] > $score[0]) {
                                    $colour = 'success';
                                }
                                if ($score[0] === $score[1]) {
                                    $colour = 'primary';
                                }
                                if ($score[1] < $score[0]) {
                                    $colour = 'danger';
                                }
                                $team = $result['home'];
                            }
                            ?>
                            <tr class="table-success">
                                <td><?= $result['date']->format('jS M'); ?></td>
                                <td><?= $where ?></td>
                                <td><?= $team ?></td>
                                <th scope="row"><?= $result['result']; ?></th>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <h2>About the club</h2>
            <p>Trefelin boys and girls club were formed in 1984 and has continually grown with a strong junior and
                senior level section. The club has made very good progress to date with the emphasis based firmly on
                "grass roots" football to encourage and help promote children of all age groups, abilities, gender,
                or ethnic group to participate in sport. With further developement and coaching it will enhance
                their confidence and skills and hopefully see them progress to a higher level.</p>
            <p>Over the years the club had many members capped at boys & girls club of Wales levels, we are proud of
                them all.
                Trefelin began playing their matches at the local park, the committee at the time put in a lot of
                effort and hard work to raise funds which resulted in the building of Ynys park playing field and
                pavillion complex. Work has continually progressed with a drainage system being installed, and
                fencing erected around the ground. Trefelin have won numerous honours at senior level, the first was
                being crowned 2nd division champions in the 1990/91 season. The success continued and it saw
                Trefelin become Port Talbot premier league champions, where they were to be accepted into the South
                Wales amateur league in the 1994/95 season. In 1995/96 they gained promotion into the first division
                as champions, a feat which they repeated again in 2006/07. Trefelin won the FAW trophy in 1999/2000
                when they beat Bryntirion Athletic 6-2, and they lifted the John Owen cup in 2011/2012 and 2013/2014
                seasons beating AFC Bargoed on both occasions</p>

            <p>Trefelin were promoted into the Welsh league after winning the newly formed South Wales Alliance
                league 2015/16. After struggling during the first season in the Welsh league, The club then missed
                out on promotion on goal difference during the 2017/18 season. However the club did win the Welsh
                league Cup that season after beating Division 1 Champions Llanelli Town, 2-1 in the final.</p>

            <p>The club then came runners up during the 2018/19 and got promoted to the newly formed Welsh league
                Division 1.</p>

        </div> <!-- /container -->
        <div class="container">

        </div>

</main>

<footer class="container">
    <p>&copy; Trefelin Boys & Girls Club <?= date('Y'); ?></p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>');</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
        crossorigin="anonymous"></script>
</body>
</html>