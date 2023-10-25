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
                    <h2>Общее количество посадочных мест для преподователей</h2>
                </div>
                <div class="back_calc1">
                    <p2>По главному корпсу</p2>
                    <h2>
                        <?= $subvision[0] ->rooms ->sum('slot_prepod');?>
                    </h2>
                    <p2>По второму корпсу</p2>
                    <h2>
                        <?= $subvision[1] ->rooms ->sum('slot_prepod');?>
                    </h2>
                    <p2>По третьему корпсу</p2>
                    <h2>
                        <?= $subvision[2] ->rooms ->sum('slot_prepod');?>
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