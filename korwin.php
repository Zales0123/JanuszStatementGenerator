<?php

$introductions = [
    'Ja chcę powiedzieć jedną rzecz: ',
    'Trzeba powiedzieć jasno: ',
    'Jak powiedział wybitny krakowianin, Stanisław Lem, ',
    'Proszę mnie dobrze zrozumieć: ',
    'Ja chciałem państwu przypominieć, że ',
    'Niech państwo nie mają złudzeń: ',
    'Powiedzmy to wyraźnie: ',
];

$who = [
    'przedstawiciele czerwonej hołoty, ',
    'ci wszyscy (tfu!) geje, ',
    'funkcjonariusze reżymowej telewizji, ',
    'tak zwani ekolodzy, ',
    'ci wszyscy (tfu!) demokraci, ',
    'agenci bezpieki, ',
    'feminazistki, ',
];

$how = [
    'zupełnie bezkarnie, ',
    'całkowicie bezczelnie, ',
    'o poglądach na lewo od komunizmu, ',
    'celowo i świadomie, ',
    'z premedytacją, ',
    'od czasów Okrągłego Stołu, ',
    'w ramach postępu, ',
];

$what = [
    'nawołują do podniesienia podatków, ',
    'próbują wyrzucić kierowców z miast, ',
    'próbują skłócić Polskę z Rosją, ',
    'głoszą brednie o globalnym ociepleniu, ',
    'zakazują posiadania broni, ',
    'nie dopuszczają prawicy do władzy, ',
    'uszą dzieci homoseksualizmu, ',
];

$why = [
    'bo dzięki temu mogą kraść, ',
    'bo dostają za to pieniądze, ',
    'bo tak się uczy w państwowej szkole, ',
    'bo bez tego (tfu!) demokracja nie może istnieć, ',
    'bo głupich jest więcej niż mądrych, ',
    'bo chcą tworzyć raj dla ziemi, ',
    'bo chcą niszczyć cywilizację białego człowieka, ',
];

$culminations = [
    'przez kolejne kadencje.',
    'o czym się nie mówi.',
    'i właśnie dlatego Europa umiera.',
    'ale przyjdą muzułmanie i zrobią porządek.',
    'tak samo zresztą, jak za Hitlera.',
    'proszę zobaczyć, co się dzieje na Zachodzie, jeśli mi państwo nie wierzą.',
    'co lat temu sto nikomu nie przyszłoby nawet do głowy.',
];

echo
    $introductions[array_rand($introductions)].
    $who[array_rand($who)].
    $how[array_rand($how)].
    $what[array_rand($what)].
    $why[array_rand($why)].
    $culminations[array_rand($culminations)]
;
