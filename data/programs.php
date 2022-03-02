<?php



$getPrograms = $conn->query('SELECT * FROM `program_home`');
$results = $getPrograms->fetch_all(MYSQLI_ASSOC);

    

$programs = [];

foreach ($results as $result) {
    $current_tabs = [];
    foreach($tabs as $tab) {
            if ($result['program_home_id'] == $tab->getFk()){
                array_push($current_tabs, $tab);
            }
    }
        array_push($programs, 
            new Program(
            $current_tabs, 
            $result['title'], 
            $result['icon_path'], 
            $result['content'])
    );
        
        
}


/*
$programs = [
    new Program($dsae, 'Digital School of Autoethnography (DŠAE)', 'assets/general/icons8-movie-80.png', 
    '<p>Due to the COVID19 pandemic, the international School of Visual Anthropology won\'t take place in July, 
    all applicants will be notified about the date as soon as possible.</p>'),
    new Program($sva, 'School of Visual Anthropology (ŠVA 2020)', 'assets/general/icons8-movie-projector-80.png', ''),
    new Program($residency, 'RESIDENCY PROGRAM 2020', 'assets/general/icons8-focal-length-80.png', 
    '<p>The pandemic forced us to postpone the residencies scheduled for 2020.</p>
    <p>Unless cancellations happen we are full for the current year.</p>
    <p>For information about 2021 residencies please contact us at info@visualanthropologycenter.com</p>
    <p>For more information check the „Residency Program“ menu or contact us at info@visualanthropologycenter.com.</p>'),
    new Program($sva_sr, 'ŠKOLA VIZUELNE ANTROPOLOGIJE', 'assets/general/icons8-lens-80.png', 
    '<p>Tromesečni i šestomesečni kursevi na srpskom jeziku.</p>
    <p>Za više detalja posetite "Школа" stranicu na glavnom meniju.</p>
    <p>Molimo zainteresovane da nas kontaktiraju na info@visualanthropologycenter.com ili putem facebook stranice VAC.</p>'),
];*/