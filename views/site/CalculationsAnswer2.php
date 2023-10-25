<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/calc.css">
    <title>pnssss</title>
</head>
<main>
    <div class="calc_all">
        <div class="calc">
            <form class="forml" method="get">
                <div class="back_calc1">
                    <h2>Общая площадь учебных аудиторий по помещениям и в целом по учебному заведению</h2>
                    <p2>Общая площадь учебных аудиторий по помещениям</p2>
                </div>
                <div class="back_calc1">

                    <p2>Общая площадь по кабинетам</p2>
                    <h2>
                        <?= $subvision[0] ->roooms ->sum('S');?>
                    </h2>
                    <p2>Общая площадь по спортивному залу</p2>
                    <h2>
                        <?= $subvision[1] ->roooms ->sum('S');?>
                    </h2>
                    <p2>Общая площадь учебных аудиторий по учебному заведению</p2>
                    <h2>
                        <?= $subvision[0] ->roooms ->sum('S') + $subvision[1] ->roooms ->sum('S');?>
                    </h2>
                    <a  class="but_logs"  href="<?= app()->route->getUrl('/Calculations') ?>">Хорошо</a>
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>