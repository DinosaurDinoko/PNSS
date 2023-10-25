<link rel="stylesheet" href="/public/css/subvision.css">
<div class="sub">
    <div class="img_settings">
        <img class="img_room" src=" <?= $room-> img?>" alt="">
    </div>
    <div class="sub_all">
        <div class="sub_obj">
            <h2><?= $room->name?></h2>
            <h2>Площадь:<?= $room->S?></h2>
            <h2>Посадочных мест:<?= $room->slots?></h2>
            <h2>Посадочных мест для преподов:<?= $room->slot_prepod?></h2>
            <h2>Кабинет:<?= $room->type_room_id?></h2>
            <a href="<?= app()->route->getUrl('/Subdivisions') ?>">Хорошо</a>
        </div>
    </div>
</div>