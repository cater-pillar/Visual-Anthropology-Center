<?php

require './models/About.php';

$getAbouts = $conn->query('SELECT * FROM `about_us`');
$results = $getAbouts->fetch_all(MYSQLI_ASSOC);

$abouts = [];

foreach ($results as $result) {
    array_push($abouts, new About($result['title'], $result['icon_path'], $result['content']));
}

/*

$abouts = [
    new About('OUR MOTIVATION', 'assets/general/icons8-movie-80.png', '<p>In our age ever so overwhelming with visual data 
    we find it crucially important for documentarists and social scientists to cooperate with visual artists, film and theater-makers 
     in order for their work to be not only relevant but visually enticing as well.</p>
    <p>Yet, visual anthropology in the digital age is one of the most underdeveloped social sciences 
    and there’s barely any institutions or organizations that give it the key importance it should have</p>'),
    new About('OUR GOALS', 'assets/general/icons8-movie-projector-80.png', '<p>The VAC aims to be a creative hub 
    and a database that fills the aforementioned gap.</p>
    <p>The hub that we imagine is unique: 
    motion picture and photography, any kind of visual art shouldn’t just be a tool in the hand of the scientist. 
     Visual anthropology and film are to have a symbiotic relationship: documentaries and feature film can have an anthropological 
     approach and anthropology and social science in general can have an artistic approach.</p>'),
    new About('OUR VISION', 'assets/general/icons8-focal-length-80.png', '<p>It is our belief that the much desired social change 
    depends on these interdisciplinary perspectives.</p>
    <p>We believe that the development of a global consciousness of humanity is only possible if there are international organizations that set the enforcing of such consciousness as their goal. 
    The VAC in Belgrade, Serbia is our first step on a long road that leads to a global network of similar hubs aiming to be 
     a powerhouse of socially sensitive artistic and scientific work.</p>'),
    new About('OUR TOOLS', 'assets/general/icons8-lens-80.png', '<p>Every year we organize a School of Visual Anthropology (SVA).</p>
    <p>Through this school we are not only spreading the ideas of visual anthropology 
    and educating people in its\' tools. We are also building an international
     community of independent creative thinkers with a strong interest
      in using tools of anthropology combined with video/photo/audio-making
       in order to create a stronger sense of community 
       in a world overwhelmed by differences.</p>'),
    new About('OUR INDEPENDENCE', 'assets/general/icons8-film-roll-64.png', '<p>We are a completely independent non-profit organization, 
    not a part of any existing institution. 
    Although we are not opposed to collaboration with governmental institutions, 
    we do not want our infrastructure to depend on anybody else but the community we are creating. 
    We want our unique artistic and scientific approach to stay free and individual, 
    non-biased by existing power structures and political tendencies.</p>'),
]; */