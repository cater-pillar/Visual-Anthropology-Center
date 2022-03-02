<?php

require './models/Teammate.php';


$getTeam = $conn->query('SELECT * FROM `team`');
$results = $getTeam->fetch_all(MYSQLI_ASSOC);

$team = [];

foreach ($results as $result) {
    array_push($team, new Teammate($result['name'], $result['position'], $result['portrait_path'], $result['bio']));
}

/*
$team = [
    new Teammate('Relja Pekić', 'Director', 'assets/general/Relja.jpg', 
    '<p>Dedicated lover of anthropology, movies and football club "Partizan". He never gets tired of the work he loves.</p>
    <p>Responsible for the scientific approach in our work.</p>
    <p>Master of ethnology and anthropology, a documentary and visual anthropologist from Belgrade, and his interest in the field of scientific research 
    is mostly focused on visual anthropology, anthropology of sport, anthropology of tourism, applied anthropology and sensory ethnography.</p>
    <p>Editor of the magazine for interdisciplinary audiovisual research, visual anthropology and ethnographic film - "Vizantrop". 
    He is the author of several short ethnographic films that were screened at ethnographic festivals in Ljubljana, Zadar, Prague, Belgrade, Prizren, 
    Moscow and Skopje, and for the film "Crossroads of Culture" (2013) he received the audience award for the best student film at SEF festival in Croatia.</p>
    <p>He is a founder of the "Visual Anthropology School" workshop from Belgrade 
    and participated as a lecturer at many seminars and conferences in the Balkans.</p>'),
    new Teammate('Miklós Barna Lipkovski', 'Technical Director', 'assets/general/Miklos.jpg', '<p>A free spirit and with a relaxed approach to life, 
    Miklós is also a hard-worker and a dedicated movie lover. 
    He is responsible for the technical proficiency and high quality 
    of the films shot within the ŠVA.</p>
    <p>He was born in Budapest in 1987, 
    spent his childhood years in Rome. 
    Lived in Budapest, Bologna, Berlin and is currently based in Belgrade.</p>
    <p>Works as a freelance photographer, video artist and journalist.</p>
    <p>He finished his MA in television journalism and documentary 
    film directing in 2006 at the University of film and theatre in Budapest.</p>
    <p>He has been working in digital media covering different fields ever since.</p>
    <p>His focus has been split between journalism and artistic approach towards 
    video- and filmmaking. After years of working on political and cultural journalism, 
    due to political changes in Hungary today he focuses more on art.</p>
    <p>Speaks Hungarian, Serbian, Italian, English and German.</p>
    <p>More info his <a href="http://bm34films.wix.com/bm34">website.</a></p>'),
    new Teammate('Ana Popović', 'Artistic Director', 'assets/general/Ana.jpg', '<p>She is theatre director based in Belgrade, Serbia.</p>
    <p>Her carier has started in 2015 when she produced her first professional 
    performance under the label „Tri groša/Threepenny“, 
    theatre company she founded with Marija Barna Lipkovski the same year. 
    She is also active colaborator of many other organizations and 
    companies in the independent scene in Belgrade, 
    experimenting with physical theatre, contemporary circus, 
    light design, shadow theatre, ambiental theatre and 
    also with interdisciplinary methods.</p>
    <p>After graduating, she spent a year in Central Java, Indonesia, 
    as a laureate of the Indonesian goverment scholarship 
    for traditional arts, as a student of Javanese shadow puppet theatre. 
    Her master thesis defended in 2015. in University of Arts in Belgrade, 
    Serbia, was the result of her scholarship research. 
    She often gives lectures on Indonesian arts and culture and also is one
     of the founders of newly Open Centre for Asian Studies in Belgrade,
      Serbia. During her stay in Java, she developed interest in
       visual anthropology, so she became one of the founders of 
       Centre for Visual Anthropology in Belgrade, Serbia in 2017.</p>
    <p>She is one of the authors and leaders of the theatre educating program 
    „Little Theatre Experts“, children audience development and 
    improvement of the conditions and aesthetic policies and criteria for children theatre.</p>'),
    new Teammate('Marija Barna Lipkovski', 'Project Manager', 'assets/general/Marija.jpg', '<p>Dedicated, responsible and workaholic. Marija is a professional theater director 
    and interest in visual anthropology is connected to her interest in performative
     aspects of anthropology.</p>
    <p>She is running the theatre company Tri Groša/Threepenny/Dreigroschen with 
    her friend and collegue Ana Popović, and working as a freelance theater director.</p>
    <p>She was born in Belgrade, Serbia in September 1989. Immediately after finishing high school, 
    she was admitted to Faculty of dramatic arts, 
    Belgrade University of arts. There she finished the 
    MA studies of theater and radio directing in 2015 as 
    an excellent student. As a part of her studies she was a 
    DAAD scholarship holder, and as such studied for one year on 
    „Ernst Busch Hochshule f. Schauspielkunst“ in Berlin, Germany. 
    She is currently working on her PhD studies of Scene design in Novi Sad Serbia.</p>
    <p>She is married to a Hungarian journalist and filmmaker Miklós Barna.</p>
    <p>Marija speaks English, German, Serbian and Russian.</p>
    <p>More on her  <a href="http://marijalipkovski.wixsite.com/makilipkovski">website.</a></p>'),
];*/