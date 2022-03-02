<?php

require './models/Tab.php';


$getTabs = $conn->query('SELECT * FROM `program_content`');
$results = $getTabs->fetch_all(MYSQLI_ASSOC);

$tabs = [];

foreach ($results as $result) {
    array_push($tabs, new Tab($result['tab'], $result['content'], $result['fk_program_home_id']));
}

/*
$dsae = [
    new Tab('What is this?', '<p>An intensive interdisciplinary digital course of autoethnography for international participants. 
    The course is in English language, it includes 9 video lectures, mentoring sessions and it lasts 35 days.
    </p>
    <p>Call for participation is open on an ongoing basis.
    </p>'),
    new Tab('Theme', '<h4>PAN(DEM)IC</h4> 
    <p>The COVID19 pandemic is temporarily reshaping societies, 
        forcing countries all over the world to lockdown; 
        the panic that accompanies the extreme measures and 
        the fear from the virus characterize the reaction 
        given by societies to the extraordinary situation.
    </p>
    <p>Scrutiny is necessary, both in case of the virus 
        and of the emergency reaction to it.
    </p>
    <p>Autoethnographic research will give a chance – 
        both to researchers and their audiences – 
        to reflect on the panic reaction in the body of society, 
        as well as in the individuals constituting it.
    </p>
    <p>We strongly believe that this reflections 
        can act as antibodies against the devastation 
        of the pan(dem)ic and they might lead us towards 
        developing a sustainable resistance against the crisis.\
    </p>'),
    new Tab('Mission', '<p>
    The global pandemic weighs as a burden on our everyday lives. 
    As limiting the crisis and socio-economic recession it brings 
    with itself may be, social scientists, researchers and artists 
    must re-think and re-invent ways we can function and connect as 
    individuals. It is a moment when, more than ever in recent history, 
    people from all over the world sense that their daily problems and 
    fears, as well as their hopes are similar - no matter where and in 
    what conditions they live. It would be a mistake not to build on 
    this feeling of community given that we already have to find 
    new grounds for social and cultural life.</p>
    <p>
    We consider this rapport a great opportunity to put our philosophy – 
    documents can be art as much as art can be documents – to action.  
    We’re offering everybody interested, regardless of educational background, 
    a set of both artistic and scientific tools to document and analyze their reality.</p>
    <p>
    Articulating thoughts and feelings in a meaningful way and with a meticulous 
    approach is not just an important way of communication with others, 
    but valuable resource for re-inventing society in a moment no less of historical.</p>
'),
    new Tab('Lectureres', "<p>
    Miklós Barna-Lipkovski  is a filmmaker and documentarist born in Budapest in 1987, 
    spent his childhood years in Rome. Lived in Budapest, Bologna, Berlin and is 
    currently based in Belgrade. Works as a freelance photographer, video artist 
    and journalist as well. He finished his MA in television journalism and documentary 
    film directing in 2006 at the University of Film and Theatre in Budapest. 
    He has been working in digital media covering different fields ever since. 
    His focus has been split between journalistic and artistic approach towards video- 
    and filmmaking. After years of working on political and cultural journalism, 
    due to political changes in Eastern Europe and the Balkans today he focuses more on art. 
    Speaks Hungarian, Serbian, Italian, English, German and Spanish. He is a founder 
    and the technical director of Visual Anthropology Center and the Krov (Roof) Social Center.</p>
    <p>
    Valentino Bianchi  was born in 1988 in Rome, Italy. After several years abroad, 
    (England, Spain, Kuwait) and a year in Palermo, Sicily he is now based in Paris. 
    He is a reportage and portrait photographer specialized in the analog and film photography. 
    While he began taking photographs several years ago, he only started taking the medium 
    of photography seriously when he discovered the hands-on nature of black-and-white 
    film and what are now referred to as 'traditional' printing methods. For him, 
    nothing else can do this. “Film photography allows me to consider my work over 
    time as part of a creative process. I thoroughly enjoy develop and printing 
    my own negatives.“ He is currently working on two long term reportage and
    he documents the everyday life of the people that lives the city of Rome,
    especially for the Rione Trastevere, working for the local newspapers.</p>
    <p>
    Elena Georgievska  Stevanić  was born in 1987 in Skopje, North Macedonia, 
    is a psychologist and family psychotherapist. She graduated 2012. at Ss. 
    Cyril and Methodius University in Skopje, Faculty of Philosophy, 
    department of psychology. Her graduate thesis was „Social control of the self 
    in the capitalist society, and ab(use) of psychology“. After graduating she 
    had internship in the Clinic for psychiatry in Skopje. She moved in Belgrade, 
    Serbia in 2014. and finish training program in systemic family therapy organized 
    by Association of Systemic Therapists (AST). Psychological support for parents of 
    children with special needs, and group psychotherapy for people with rheumatoid 
    arthritis are part of her working experience. Her work with clients, 
    is mainly influenced by critical psychology and critical psychotherapy.</p>
    <p>
    Thomas John  is a Research Associate at the Department of Cultural Anthropology, 
    Institute for Latin American Studies at the Free University Berlin, Germany. 
    At the moment he is finalizing his PhD thesis on affective and emotional negotiations 
    within a local South Mexican indigenous audio-visual documentary art scene. 
    He is a trained filmmaker and visual anthropologist, too, and teaches since 
    2013 practical and theoretical audio-visual anthropology classes at the WWU Münster, 
    where he is involved at the Institute of Ethnology and the MA Visual Anthropology, 
    Media and Documentary Practices. https://weiterbildung.uni-muenster.de/anthropology 
    He is interested especially in exploring the filed of intersection between documentary 
    arts and visual anthropology, artistic research practices, and experimental 
    modes of the representation of human experience.</p>
    <p>
    Vanja Matić is a Belgrade based clinical psychologyst. She is currently on her 
    master studies of clinical psychology on Faculty of philosophy, focusing 
    on work with war veterans. Besides, her interests goes in film as well, 
    so she has finished course of film directing, and she works as a freelance 
    production coordinator in advertisement industry. Since last year she is also 
    a member of „Vizantrop“, Belgrade based collective focused on audio-visual culture, 
    promotion of visual anthropology and ethnographic film, and „Prostor“ (Space) 
    a Belgrade based association focused on social inclusion of psychiatric patients 
    trough art therapy and art programs.</p>
    <p>
    Nina Mladenović graduated from the Faculty of Philosophy in Ethnology and Anthropology, 
    and is currently pursuing a master's degree in Cultural Politics and Management in Culture. 
    In 2016 she attended the School of Visual Anthropology (ŠVA) in Belgrade and ŠVA workshop 
    in Skopje and later on, in 2019, became a mentor at this school (ŠVA Belgrade and ŠVA Osijek). 
    She is a part of the Vizantrop collective where she worked on publishing online magazine 
    for interdisciplinary research of audiovisual culture and on organizing festival of engaged 
    ethnographic films – Vizantrop. In April 2019 she participated in a research workshop 
    held in Rovin organized by ETNOFILm Festival. She is co-author of three short ethnographic 
    films screened at festivals in Serbia and the region.</p>
    <p>
    Relja Pekić is a master of ethnology and anthropology, a documentary and visual anthropologist 
    from Belgrade, and his interest in the field of scientific research is mostly focused 
    on visual anthropology, anthropology of sport, anthropology of tourism, applied 
    anthropology and sensory ethnography. Editor of the magazine for interdisciplinary 
    audiovisual research, visual anthropology and ethnographic film - 
    Vizantrop. He is the author of several short ethnographic films that were screened 
    at ethnographic festivals in Ljubljana, Zadar, Prague, Belgrade, Prizren, Moscow and Skopje, 
    and for the film Crossroads of Culture (2013) he received the audience award for the 
    best student film at SEF festival in Croatia. He is a founder and the director of 
    Visual Anthropology Center and the Krov (Roof) Social Center.</p>
    <p>
    Ana Popović (1987) is a theatre director, educator and researcher based in Belgrade, Serbia. 
    She is one of the founders of Threepenny company and Visual Anthropology Center from Belgrade. 
    In 2013-14 she spent a year as an awarded scholarship student in the Institute for Traditional 
    Arts of Indonesia, researching on anthropological performances of wayang kulit, one of the oldest 
    theatrical forms in the world. The result is her master thesis “Wayang kulit – tradition, 
    identity and challenges” in 2015. which placed Popović as an expert in South-East Asian performing 
    arts in Serbia. She is a guest lecturer at Faculty of Dramatic Arts in History of Drama and Theatre - 
    Intercultural praxis. At the moment she is a PhD student of transdisciplinary studies of art and media 
    at Faculty of Media and Communication in Belgrade, Serbia, where she is mostly focused on postcolonial 
    and posthumanistic discourses and new trends in speculative realism studies, in the fields of art and aesthetic.</p>
    <p>
    Nikola Radeka is an ethnomusicologist from Belgrade. He graduated ethnomusicology at 
    University of Arts in Belgrade (Faculty of music). His master thesis examined tonal relations 
    and tone measurements of old traditional two-part singing of the Banija region. 
    Since 2008. he started to practice Ethnomusicological field research, 
    which included vocal practice of war refugees and buskers in Belgrade, postmortal Vlach rituals, 
    practice of electronic music performers, but mainly old two-part singing of Kordun, 
    Banija and Potkozarje regions, which is currently his main research focus. 
    One of the founders and director of Ethnomusicological activities centre, 
    within which he executed numerous projects regarding ethnomusicological field research in areas of Serbia, 
    Croatia and Bosnia and Herzegovina, realization of documentary films, as well as festivals of traditional 
    music in Paris and Belgrade. Active as a music producer and electronic music performer since 2015.</p>
    <p>
    Miloš Tomić is a Sunday animator but daily filmmaker. Born 1976. Studied film directing in Belgrade, 
    animation In Prague, Berlin, Madrid. For a year studied anthropology. Beside film, experimented a lot 
    with photo-collages, photography, radio-miniatures, writhing, drawing, music, 
    object making and precious thrash collecting…Led more around 70 workshops all around. 
    Participated in numerous festivals and exhibitions with variable success. 
    In 2013 was Serbian representative at Venice Biennale. Still curious to notice neglected, 
    off-sided, by chanced, mistaken, false, bad copy, collateral…beauty as potential place to start.</p>
    <p>
    Vanessa Zallot is a graduate student at the Institute of European Ethnology of the Humboldt-University of Berlin. 
    During her studies she focused among other topics on Visual and Digital Anthropology, 
    Urban Anthropology and Queer Studies. Currently, she is finishing her MA with a thesis in
    which she is dealing with research ethics and reflexivity in the anthropological use of
    the camera as a method between theory and practice. She is especially interested in
    power critical methodologies and questions of representations of ethnographic knowledge. 
    Besides one of her focuses is a queer-feminist perspective on popular media, film and film practice.</p>"),
    new Tab('Lectures Synopses', "<h4>1. Autoethnography as a method in anthropological research
    </h4>
    <h5>Nina Mladenović & Relja Pekić
    </h5>
    <p>In this lecture we will present the basic principles of autoethnographic writing in anthropology, as a method which implies the intersection of personal, lived experiences of a researcher with socio-political context that shaped and enabled these experiences. Throughout the lecture we will speak about the advantages of using autoethnography as a method but also encourage critical thinking and consider possible problems researchers might encounter while using this method. Some of the questions we will try to answer are: What is authoethnography and when shuould we use it as a method? How do we differentiate autoethnography from self-analysis? What are the techniques of authoethnographic writing? What are ethical dilemmas within authoethnographic research and how to overcome them?
    </p>
    <h4>2. Queer Autoethnography
    </h4>
    <h5>Vanessa Zallot
    </h5>
    <p>In this input session we draw upon ideas of queer methodology and ask the question how these ideas can be helpful in our ways of thinking about (audio-/visual) autoethnography. By the idea of queer as a critique of multiple power structures that are written into our daily lives and the academia, the question is opened up, what power structures and normativities we might reproduce in our research practice. How could these be reflected methodologically? And how might it be a starting point for generating and acknowledging new kinds of knowledge apart from those normatively deemed ‚normal‘ and ‚scientific‘?
    </p>
    <h4>3. Sonic Autoethnography 
    </h4>
    <h5>Nikola Radeka
    </h5>
    <p>Aim of this lecture is to inspire and encourage its participants to engage in a research of sonic self - to actively listen, pre-select, record, select and organize sounds that they produce and that they are surrounded with on a daily basis.
    </p>
    <p>Participants will be guided through both the theory and practice of Sonic/Aural Autoethnography by video lectures and mentoring sessions, which will cover the following:
    </p>
    <p>Introduction to Autoethnography and placing Sonic Autoethnography within the heterogeneous field of Autoethnography;
    Repositioning sonic perspective: comprehension of oneself's relation to the quotidian soundworld, broadening aural perspectives by a range of selected listening practices, discovering specific aspects of auditory self;
    Sonic scenography: developing situational awareness from environmental sound events;
    Telling a story: recognizing, developing and layering narratives through sound;
    Learning classical and traditional music composing techniques and music forms to be implemented in the creation process;
    Unleashing the intrinsic sonic potential through self-experiments.
    Sonic Autoethnographies may reflect in many possible outcomes depending on the methodology of content preselection, different sound creation and recording techniques, as well as the final sound organization / composing and postproduction, even combining the sound with other media. Participants will be encouraged to express themselves in one or more of the following formats combined: Self-sufficient/self-explanatory field recordings; Sonic or music diaries; Aural postcards; Sonic scenography;  Sonic poetry; Self-composed songs or music pieces; Multichannel soundscape compositions; Headphone pieces; Public sound installations; Aural interventions in space; Voice experiments (different narrative types); Format free releases.
    </p>
    <h4>4. Autoethnography – the Self and the Senses
    </h4>
    <h5>Thomas John
    </h5>
    <p>In this class we look especially at audio-visual autoethnographies that exploit and experiment sensory cinema methods. Interestingly, quite a number of autoethnographic films have been attempting to mediate meanings about the Self through the senses. Investigating sensory experience is not easy, because it is highly embodied and driven by affects. The moment we speak and interview about it, it is yet not the same thing anymore. We also cannot observe it easily, since sensory experience is highly subjective and interior. However, if you do an autoethnography, you might be able to have very immediate access to sensory experience, obviously, since it is your very own! Still, it remains a challenge to represent your own senses. You feel them, but you’ll need to (audio-)visualize them.
    </p>
    <p>We will have a look at a few filmic examples/excepts, catch up with some theoretical debates and you’ll do a short one-minute sensory autoethnographic video exercise – you submit it before the digital summer school starts – and I’ll react to it in my video lecture. In the aftermath of the class, your individual responses via e-mail thomasj@gmx.net or skype are very welcome and I’ll be happy to get into dialogue with you, to go beyond the limitations of the one-dimensional setup of a prerecorded video lecture.
    </p>
    <h4>5. Cinematic language as a form of autoethnographic expression.
    </h4>
    <h5>Miklós Barna Lipkovski
    </h5>
    <p>An unprecedented percentage of the World population had to quickly learn how can quaranteen, self-isolation, social distancing – words that didn’t mean much for most of us until yesteryear – all of a sudden define our lives. No matter whether you are in New York, Rome or Belgrade, you are facing hardships of a similar nature.
    </p>
    <p>Ethno –  nation – graphy – writing: the origin of the words points us to the right direction. How can you describe your society through the example you know best – yourself.
    </p>
    <p>Auto means self, yet autoethnography is everything but a fancy word for selfie. Without the context of (y)our current predicament a cinematic analysis of the part of your life you can share with an audience is only relevant as a document(ary) if you are not the object, but the subject of such examination.
    </p>
    <p>This lecture aims to be a toolkit of cinematic thinking for ethnographic researchers.
    </p>
    <h4>6. Photography as a form of autoethnography
    </h4>
    <h5>Valentino Bianchi
    </h5>
    <p>This lecture will be divided in two sections:
    </p>
    <p>Brief explanation of some projects that has been important in the field of photography during a moment of quarantine. Some will show projects born and executed inside one only room or apartment, some other will show projects made during the last moment of quarantine in our world.
    Genesis of a photographic project, how to build an idea and to finalize it: Reference, developing, material, basic knowledge of a photographic narration, possible finalization of the project.
    The lecture aims to provide technical tools and examples of what we could build trough a study of autoethnography in the context of the world surrounding us.
    </p>
    <h4>7. Play with everyday
    </h4>
    <h5>Miloš Tomić
    </h5>
    <p>My lecture invites you to look closer into chosen phenomena of your everyday life and to play with them. I will suggest tools like: discrete and loud actions, drawings in non comfortable conditions, video diary of certain kind, science-like collection, stop-motion techniques as therapy...all that with a reason to deal differently with your flat, mess in your room, neighbors,...someone you secretly fantasied about.
    </p>
    <p>Some of those “games”, I tried in my previous works, so I am offering one possible method but it is more like a starting point. For others, I am planning to use you as laboratory mice for ways to encourage myself to try, whatever happens!
    </p>
    <h4>8. Possible paradigmatic shifts in performing arts
    </h4>
    <h5>Ana Popović
    </h5>
    <p>Keywords: crisis, body, media, theatricality, perceptive turn
    </p>
    <p>Usually when we mention anthropological approach to performing arts, we think of rituals, rites of passages, transferring and transformative patterns of human behavior and roles of any kind. The most interesting part of the ritual, understood in the terms of Turner, is the so-called liminal state. It is a state in which we need to shift our perception from ‘what it used to be’ to ‘what it will become’. It is deeply political situation as well as aesthetical. Performing arts, unlike others, are essentially and exclusively humanistic oriented. They adapt to human behavior, the same way human needs to adapt to new circumstance. That is also a very specific ability of the spe(c)tator in the performance – redefining relations of all kinds, while interpretation and reinterpretation (of self, of others, of objects, of spacetime) are essentially creative processes. Right now, the most of our reality is mediated through technology. This tells a lot about human behavior and vice versa. Our bodies are under new regulations, and also the way we (are expected to) behave. We cannot group, gather, perform live, be close to each other. Internet shows that it is not able to mediate performance arts. But, internet, which also makes most of our reality, is full of theatricality and we perceive it in a specific liminal way.
    </p>
    <p>It didn’t seem that this digital revolution would feel so corporeal.
    </p>
    <p>Literature references: Antonin Artaud, Richard Schechner, Victor Turner, Stephen Greenblatt, Bruno Latour, Erika Fischer-Lichte, Timothy Morton, Donna Haraway, Karen Barad and many more
    </p>
    <h4>9. Basic concepts of unconsciousness and self-observation
    </h4>
    <h5>Vanja Matić & Elena Stevanić
    </h5>
    <p>In this lecture you will be introduced to basic concepts of consciousness and unconsciousness from the point of view of analytical psychology, and you will learn how self-observation can help you to increase self- awareness that can be useful for your auto-ethnography project.
    </p>
    <p>In the first part of this lecture we will discuss the role of unconsciousness in helping us create so we could express ourselves, and how and are we possessed by it in our creative moments. We will argue whether our artwork is speaking to others about spirit of time in which it was created, and could people who will watch final products of our workshop understand what we were going trough in this  time of pandemic.
    </p>
    <p>The second part of this lecture is reserved for talk about self-observation, a practice of observing yourself as if another person, or even a camera or video recorder, might see you. You will be introduced to some practical exercises which will help you in observing your thoughts, emotions, feelings, moods, sensations, movements, sound, facial expressions, and so on without any judgment, in order to help you in better creation of your auto-ethnography project.
    </p>"),
    new Tab('Mentors', ''),
    new Tab('Outcome', " <p>Diverse individual audio-visual and/or written works for each participant.
    </p>
    <p>All the autoethnographic works of the participants will be presented together online at the end of the course. After the lockdown, Roof Social Center is going to open an exhibition of the works for the local audience.
    </p>"),
    new Tab('Method and Content', "<ol>
    <li>9 video lectures around 45-60 minutes . Lectures come in 5 blocks (4 in pairs of 2 + 1 separate). Every lecture will be available to participants for 48 hours (through Youtube private link). 
    </li>
    <li>5 written group Q&A sessions; after each block of lectures, students have 48 hours to formulate their questions (concerning the lecture or literature given by the respective professor) and the professors have 48 hours to answer them. This is done in a collective google document. All participants read through already asked questions, so that the questions are not repeated. 
    </li>
    <li>360 minutes of individual mentoring time; Every participant works with 2 mentors, an anthropologist and a selected media specialist. Mentor sessions are done with both mentors at the same time, over JITSI MEETS application. These sessions can be broken into more units, and methodics and dynamics of the meetings are tailored individually between mentors and participant to best correspond to the participant's needs. 
    </li>
    <li>2 group moderated discussions 120 minutes; one moderator, at least one antropology mentor and, all media mentors and all participants are present on JITSI MEETS to discuss their work. 
    </li>
    <li>2 moderated written group feedback; all participants and moderators will get a written guideline (a set of questions and advice) for the written feedback. All participants and moderators have to write a brief feedback to every other participant, based on the shared work in progress. 
    </li>
    <li>2 written individual mentor feedback; one as a response to the definite subject proposal, the other after the course. 
    </li>
    <li>online presentation of the works on tumblr and mega.nz.
    </li>
    <li>Additional materials: literature (is selected by each professor and is ideally sent to the participants a couple of days before the course); guideline for written feedback, questionnaire for subject proposal, psycho-therapy methodological guideline, syllabus for each lecture, mentoring guideline.
    </li>
    </ol>"),
    new Tab('Schedule', "<p>We launch DSAE on an ongoing basis; whenever a new group (7) of participants is formed the starting date of the course is decided.
    </p>
    <p>The school lasts for 35 days (5 weeks). 
    </p>
    <p>The course is divided in IV phases. These phases are not strictly divided. All the deadlines should be met; other than that the workflow depends on the individual participant. 
    </p>
    <p>Phase I: The preparatory phase. It serves for re-thinking and developing the project ideas, as influenced by the lectures and literature. During this time the participant should experiment with different methods and media suggested by professors, and slowly start collecting material for his/hers project. 
    </p>
    <p>Phase IIa: The defining phase. During this phase the participant is expected to define his/hers subject, method, concept and media approach. This can be modified over time, but shouldn’t be drastically changed. 
    </p>
    <p>Phase IIb: In-depth research on the subject; collecting and giving form to the material with guidance and help of the mentors. Mentoring sessions are agreed on between the mentors and participants. 
    </p>
    <p>Phase III: giving the final form to the project. 
    </p>
    <p>Phase IV: enjoying and analyzing the fruits of our work. 
    </p>"),
    new Tab('Pricing', '<p>The course costs 200 euros.
    </p>
    <p>It is possible to reserve a place in the course for 150 euros, than "activate" the reservation with a p2p scholarship that can be purchased through the crowdfunding campaign of the Roof Social Center (P2P scholarship perk).
    </p>'),
];
$sva = [
    new Tab('What is this?', '<p>A thirteen days workshop that will consist 
    of interactive lectures and mentored field work 
    and post-production work in groups to up to 5 participants. 
    English is the working language of the school.</p>'),
    new Tab('Theme', "<h4>SILENCE – SOUND – NOISE</h4>

    <p>is the theme of this year's Summer School of Visual Anthropology in Belgrade.
</p>
    <p>These three mutually intervening concepts are both physical descriptions of the world as well as culturally conditioned. As such, they offer complex and often contradictory layers of meaning.
</p>
    <p>Sound recording allows for the temporal dislocation of a sound from its time and place of origin, but does not facilitate the ability to do the auditory equivalent of sustaining the gaze on an image for as long or as short as one desires (...) This way of thinking about the temporality of sound has often led to an essentialization of sound as ephemeral, or at least elusive. (Helmreich 2010)
</p>
    <p>That is why we always think of sound and image not just as complementary tools, image giving the sound a necessary context (or a lack of such) and vice versa, but as two manifestations of the same phenomena. By combining pictures and sounds we can create new harmonies or dissonances that can make discover unexpected cracks in our social reality. These two “remote” senses respond to waves and allow us to experience things which are not in our immediate surroundings – the famed “Other”. Of these two, image gives us the necessary distance, and sound the necessary immersion. Isn’t it strange that so often when we are talking about “the voice of the other” we actually mean showing the image of the Other? 
</p>
    <p>In embracing an understanding of audiovisual anthropology that does not stop at voiceover, but extends to all the patterns of a complex environment made up of speech, music, sounds, noise, and silence, this subject opens up many possible debates on how we can configure our film narrative, parallely examining both the aural and visual world around us. New digital technologies have now expanded the acoustic environment globally, thus also offering unprecedented opportunities to the “ethnographic ear.” (Marazzi, 2019)
</p>
    <p>Sound is both the object and (partially the  method) of our audio-visual research in 2020. The sound of human voice, the sound of music, the sound of home – the notion of “sound” is neutral, if not positive. It always asks for more explanation about the nature of the sound and the listener. Sounds are culturally conditioned and ethnographers have the task to categorize a variety of sound milieus and attach meaning to them. The sound recording can be heard as if it were music or at least an organized sound from which we could decode various affective or subliminal reactions.
</p>
    <p>Silence, as solitude, is something we yearn for in an urban landscape. And yet, in political and social activism, silence is a synonym for passivity. Silence in social everyday life is conditioned by cultural patterns that impose rules of conduct in different places. Silence can also be understood as a liminal phase in which an individual or collective awaits the reaction of the other.
</p>
    <p>On the other hand, noise is presented as the enemy of sound and an exhaustive shuffling of the diverse sounds that need to be parsed. It is a social construct elicited by various social practices that can be interpreted as sound miles or a collage of sounds that are most commonly latently configured. Soundscape research seeks to draw public awareness of the acoustic environment and to improve our work in the experience of listening. With the help of advances in audio technology, field recording and archiving, environmental sounds become important for the social interpretation of our everyday lives. 
</p>
    <p>We at Visual Anthropology Center are interested in discovering and investigating what is the variety of meanings and interrelations they can have in the urban environment of today’s Belgrade but also exploring their ambivalences and paradoxes in the more general context.
</p>"),
    new Tab('Outcome', '<p>A short movie for each group, based on their own ideas and research.</p>

    <p>A photo exhibition for the participants doing photography. The exhibition will be presented during the workshop and is going to stay exhibited in the Visual Anthropology Center for an indefinite period.
    </p>
    <p>The movies will have an open screening on the 27th of July, and will also be screened at our partner festivals - Vizantrop festival, Etnofff in Skopje, Northern Macedonia, SEF in Zadar and ETNOFILm in Rovinj, Croatia. Most successful films may also be screened on other festivals.
    </p>'),
    new Tab('Aim', '<p>    The goal of the project is to introduce visual anthropology to established professionals in film making and/or social sciences who would like to broaden their perspectives as well as to scholars who are new to this field(s). We provide theoretical and practical workshops, involving filming and post-production of short anthropological films. The call is open for applicants with or without experience - what matters is enthusiasm towards promotion of social awareness through visual anthropology.
    </p>
    <p>Our aim is to encourage critical thinking,o fostering tolerance for the Other, while broadening the knowledge of participants as film-makers and social scientists.
    </p>'),
    new Tab('Method', '<p> Participants will work in multinational teams and will learn in a creative manner about approaching social issues with sensitivity. We find it crucial for any filmmaker to be able to develop an ethical relationship towards the material they are working with and most importantly to the protagonists of their films.
    </p>
    <p>Our lecturers and mentors come from different fields ranging from feature film through documentary to academic disciplines of social sciences and will share their knowledge through theoretical lectures, analysis of ethnographic films and sensory-ethnographic exercises. They will also assist participants in fieldwork and post production. Participants will learn from each other as well as from our professors – we find the exchange of ideas through teamwork as important as the knowledge that we have to offer.
    </p>
    <p>Lecturers from various countries will share their individual methods, introducing scholars to audiovisual longitudinal fieldwork. The methods our school promotes include participatory observation, cinema verité, direct cinema, sensory ethnography and more. Academic professors, professional filmmakers and young researchers with background of experimental film genres from Germany, Greece, Hungary, Italy, Northern Macedonia, Slovenia, USA and Serbia will hold intensive classes during 4 days in cozy atmosphere on many locations in the city: Faculty of media and communication, Ethnographic Museum, SUN Hostel etc.
    </p>
    <p>Through interactive lectures students will be able to, in accordance with their research topics, recognize and apply methods in their movies. Participants will be introduced with advanced techniques of recording, working with camera in field terms, editing procedures and different methods in archiving materials.
    </p>
    <p>Having adopted the theoretically based and practical knowledge in this field, students will be able to independently make social responsible media content, thus spreading impact among peers and general public.
    </p>
    <p>All participants will attend the interactive lectures together. The language of the lectures will be English. Every filming group will be supported by professional mentors experienced in ethnographical fieldworks and filmmaking.
    </p>'),
    new Tab('Mentors', "<p>Relja Pekić, MA of Ethnology and Anthropology at the Faculty of Philosophy, University of Belgrade. Director of the Visual Anthropology Center, Belgrade. Active as a member of the international collective VIZANTROP, editor of their monthly online magazine.
    </p>
    <p>Miklós Barna-Lipkovszki, born in Budapest, Hungary (1987). MA of Documentary film-making at the University of Theatre and Film Arts, Budapest.  Technical director of the Visual Anthropology Center. He is a documentarist: he writes, takes still or moving pictures. He also works in theater – taking videos, photos or even acting in indie performances. he is active as a translator, writer and creator of projects, works as a fixer, manages databases - as long as it’s challenging, interesting, enticing and it serves a purpose. Has lived in Italy, Germany, Serbia.
    </p>
    <p>Known for his communication skills, sense for aesthetics, knowledge of history and politics. He is proud of his large international network of friends and colleagues including fellow journalists and artists but all kinds of people who motivate and help him.
    </p>
    <p>Nina Mladenović is an undergraduate MA student of Ethnology and Anthropology at the Faculty of Philosophy in Belgrade, Serbia. With the interest in visual anthropology and ethnographic film, in April 2016 she attended the School of Visual Anthropology (ŠVA) and later, in November of the same year, the ŠVA workshop held in Skopje, Macedonia. Since 2017 she is a part of the Vizantrop collective where she worked on publishing the Vizantrop magazine and organized film screenings and lectures in order to promote Visual Anhtropology, Ethnographic film and interdisciplinary research of audiovisual culture. In April 2019 she participated in a research workshop held in Rovinj, Croatia, organized by ETNOFILm Festival. She is co-author of three short ethnographic films screened at festivals in Serbia and the region.
    </p>
    <p>Camillo Pasquarelli was born in Rome (1988). Only after completing his studies in political science and anthropology, he decided to devote himself entirely to photography. Nowadays, is mostly interested in personal and long-term projects and deals with documentary photography trough the combination of the anthropological approach and the photographic medium. Since 2015 he has been working on a visual project about the valley of Kashmir, India, exploring the notion and the experience of conflict, memory, religion and political aspirations.
    </p>
    <p>In 2017 he received one of the Alexia Foundation Student Grant to keep working on  “Endless winter”.In 2018 was selected for the NOOR - Nikon Masterclass in Turin, Italy. His projects received several awards such as LensCulture B&W, Short Story at World Report Award, Feature Shoot Emerging Photographer, 1st prize at Fotoleggendo, 1st prize at Kuala Lumpur International Photo Awards.
        Furthermore, his works have been published on Time, Der Spiegel, National Geographic, Internazionale, BuzFeed, Mashable, Il Reportage, Gazeta Wyborcza, Il Manifesto, Left, among others.
    </p>
    <p>He have been exhibited at festivals in US, England, Russia, Italy, Spain, India, Israel, Lithuania, Malaysia, United Arab Emirates.
    </p>
    <a  href=''>https://www.camillopasquarelli.com/</a>
    <p>Dániel Szandtner is a cinematographer and producer from Budapest, Hungary. Check out his IMDB profile!
    </p>
    <p>Valentino Bianchi was born in 1988 in Rome, Italy. After several years abroad, (England, Spain, Kuwait), he currently lives in Palermo, Sicily. He is a reportage and portrait photographer specialized in the analog and film photography. While he began taking photographs several years ago, he only started taking the medium of photography seriously when he discovered the hands-on nature of black-and-white film and what are now referred to as 'traditional' printing methods. For him, nothing else can do this. “Film photography allows me to consider my work over time as part of a creative process. I thoroughly enjoy develop and printing my own negatives.“ He is currently working on two long term reportage and he documents the everyday life of the people that lives the city of Rome, especially for the Rione Trastevere, working for the local newspapers.
    </p>
    <p>Antonin Blanc is a film director and cinematographer based in Paris, France. His works have screened at several international film festival, and he has worked for various companies spanning the mainstream to the art house, such as Capa, Vice, CNN, Universal Pictures, Tencent News, Le Front de Gauche, and les productions de l'insensible. His current work topic is related to the city, the notions of movement, History, and how do individuals mingle with these invisible ties.
    </p>
    <a  href=''>​https://vimeo.com/antoninblanc/</a>

    <a  href=''>https://www.antoninblanc.com/</a>"),
    new Tab('Professors', "<p>SLOBODAN NAUMOVIĆ Associate Professor at the Department of Ethnology and Anthropology, University of Belgrade, SRB.
    </p>
    <p>He does research in Political Anthropology, Visual Anthropology, Historical Anthropology, Memory Studies, Socialist and Postsocialist Worker's Culture and Industrial Heritage. Their most recent publication is 'Оглед о филму \"Енклава\" Горана Радовановића: шта проживљавамо и чега се сећамо размишљајући о искуству гледања једног савременог историјског кинематографског дела' (Essay about the film \"Enclave\" by Goran Radovanović ...) . Slobodan Naumovic currently works on collective memory and workers' c culture in pre-socialist, socialist and post-socialist era industrial and family photography in a mining and metallurgical town in Serbia.
    </p>
    <p>THOMAS JOHN, Research Associate, Department of Cultural Anthropology, Institute for Latin American Studies at the Free University Berlin, GER.
    </p>
    <p>At the moment he is finalizing his PhD thesis on affective and emotional negotiations within a local South Mexican indigenous audio-visual documentary art scene.
    </p>
    <p>He is a trained filmmaker and visual anthropologist, too, and teaches since 2013 practical and theoretical audio-visual anthropology classes at the WWU Münster, where he is involved at the Institute of Ethnology and the MA Visual Anthropology, Media and Documentary Practices. https://weiterbildung.uni-muenster.de/anthropology
    </p>
    <p>He is interested especially in exploring the filed of intersection between documentary arts and visual anthropology, artistic research practices, and experimental modes of the representation of human experience.
    </p>
    <p>SARAH LUNAČEK-BRUMEN, Associate Professor, Department for cultural anthropology, The University of Ljubljana, SLO
    </p>
    <p>She graduated from Ethnology, Cultural Anthropology and Sociology of Culture with a degree in African cinema. She also visited the African Film Festival in London, Milan and Ougadougou, and participated in the selection of films and the writing of a catalog for the retrospective of the African film at the Slovene Cinematheque in June 2000. As a young researcher at the Department of Asian and African Studies, between May 2003 and August 2004 at Tuaregs in North Niger, conducted a field research for the Doctoral Thesis Perception of Europeans and Americans and the West Agadez (Niger) views, which she advocated in December 2008. She completed postdoctoral studies at the Maison Meditéranéennne des Sciences de l'Homme in Aix en Provence in France (EGIDE scholarship) on the topic of social stratification of Tuaregs and development studies and at the University of Belgrade (exchange of Erasmus External Window Coopeartion BASILEUS), where she began to explore the links between SFR Yugoslavia and Africa during non-alignment.
    </p>
    <p>At the University of Belgrade, as well as in Nova Gorica and Koper, she conducted several guest lectures, attended international anthropological conferences. In June and July 2005, she organized an exhibition of photographs by Souleyman Mohammed The Modern Nomads in collaboration with the Slovenian Ethnographic Museum and the Murska Sobota Provincial Museum. She is a member of the International Editorial Board of the Afrika magazine - the Arts and Culture Study, the Africanist Network at EASA, the African Center and the Liminal Institute.
    </p>
    <p>CHRISTINE MODERBACHER, born in Vienna. Filmmaker and Anthropologist.
    </p>
    <p>Trainings in Visual and Social Anthropology and Documentary Film (MA Visual Anthropology at the University of Manchester, MPhil Social Anthropology at the University of Vienna, SIC – Sound Image Culture – Brussels, PhD Social Anthropology at the University of Aberdeen).
    </p>
    <p>Since 2009 making films (Men at work 2010, A Letter to Mohamed 2013, Red Earth White Snow 2018), texts, audio video installations (Channel #1, Container), carpentry and radio shows. Focusing on migratory and marginal worlds as well as visual and textual storytelling; currently working as a postdoctoral research fellow at the Max Planck Institute for Social Anthropology in Halle, Germany.
    </p>
    <p>Awards/Grants (selection): Artist in Residence in Paliano, Italy, Young Artist Award – Category: Artfilm (Anerkennungspreis Kunstfilm des Landes Niederösterreich), Juryprice: Best Film (A Letter to Mohamed) – Sorrento Film Festival, Startstipendium Innovative Film (Young Artist Scholarship) for Innovative Films from the Austrian Ministry of Art and Culture, Postgraduate Fellowship Programme –  European Institutes for Advanced Study (EURIAS), Best Film at the main Festival category “Equality and Community” (Red Earth White Snow) – Engaged Ethnographic film festival \"Vizantrop\".
    </p>
    <p>VALENTINO BIANCHI was born in 1988 in Rome, Italy. After several years abroad, (England, Spain, Kuwait), he currently lives in Palermo, Sicily. He is a reportage and portrait photographer specialized in the analog and film photography. While he began taking photographs several years ago, he only started taking the medium of photography seriously when he discovered the hands-on nature of black-and-white film and what are now referred to as 'traditional' printing methods. For him, nothing else can do this. “Film photography allows me to consider my work over time as part of a creative process. I thoroughly enjoy develop and printing my own negatives.“ He is currently working on two long term reportage and he documents the everyday life of the people that lives the city of Rome, especially for the Rione Trastevere, working for the local newspapers.
    </p>
    <p>CAMILLO PASQUARELLI was born in Rome (1988). Only after completing his studies in political science and anthropology, he decided to devote himself entirely to photography. Nowadays, is mostly interested in personal and long-term projects and deals with documentary photography trough the combination of the anthropological approach and the photographic medium. Since 2015 he has been working on a visual project about the valley of Kashmir, India, exploring the notion and the experience of conflict, memory, religion and political aspirations.
    </p>
    <p>In 2017 he received one of the Alexia Foundation Student Grant to keep working on  “Endless winter”.In 2018 was selected for the NOOR - Nikon Masterclass in Turin, Italy. His projects received several awards such as LensCulture B&W, Short Story at World Report Award, Feature Shoot Emerging Photographer, 1st prize at Fotoleggendo, 1st prize at Kuala Lumpur International Photo Awards.
    </p>
    <p>Furthermore, his works have been published on Time, Der Spiegel, National Geographic, Internazionale, BuzFeed, Mashable, Il Reportage, Gazeta Wyborcza, Il Manifesto, Left, among others.
    </p>"),
    new Tab('Schedule', '<p>July 15: day one: participants arrive to the accommodation. In the afternoon the introductory lecture will be held. Afterwards participants will get a detailed schedule of SVA and will be provided basic information about moving around Belgrade during a short introductory event.
    </p>
    <p>July 16-19:theoretical and preparatory work: the first phase of the workshops will consist of interactive lectures by various professionals from different fields. There will be 3 lectures per day concluding every day with a practical exercise. The lectures will be divided in two blocks of up to 3 hours each, with a lunch break and smaller breaks.
    </p>
    <p>July 19-24: fieldwork: participants will be divided in groups of up to 4; each group will have their own film mentor which will help have 3 days for shooting one movie per group.
    </p>
    <p>July 24-26: video editing: in cozy co-working space in SUN hostel every group will get their editing mentor to help them get their short films ready for the public screening on the evening of  July 27.
    </p>'),
    new Tab('Location', '<p>Belgrade is a rare example of metropolis on the Balkans. Our local participants will guide international ones through the orderly chaos of everydays in this eclectic crossroads city between East and West -- an inspiring environment where unusual subjects are nothing out of the ordinary.
    </p>
    <p>The summer school activities will take place in the center of Belgrade on Visual Anthropology Center - VAC hub, and partly in SUN hostel (Novopazarska 25).
    </p>'),
    new Tab('Accommodation and Meals', '<p>Participants will have their full accommodation, breaks, mentor consultation, brainstorming and editing sessions in SUN hostel. Some of the international mentors will also be accommodated in the same hostel, so the participants will have a possibility for consultations at any time.
    </p>
    <p>The organizers will provide 2 meals per day. Breakfast will be based on self-service, whilst dinner will be a warm meal.
    </p>'),
    new Tab('Application Deadline and Important Dates', '<p>Early Bird application until March 1th
    </p>
    <p>Be amongst the first to apply to this year’s Summer workshop which  will be hosted by VAC in Belgrade between 15th and 28th  of July. If  you apply in the early bird period you can get a discount of 20% from  the application fee and you can start consulting our team regarding  your potential project right away. Only five places with discount  participation fee, so don’t wast time – get the worm!
    </p>
    <p>Candidates applications will be accepted until 1st of June 2020.
    </p>
    <p>The best 30 young students and professionals, selected on the criteria of experience, motivation and creative personalities, will attend an intensive film-making journey from 15 - 28th of July.
    </p>
    <p>The successful applicants will be notified latest by 10th of June.
    </p>'),
    new Tab('Pricing', '<p>The pricing for the School is progressive. The price groups have been determined based on average GDP per capita.
    </p>
    <p>Your price group is based on the country of your residence (or income), and not the country of your origin.
    </p>

    <p>
I               900 € Luxembourg, Norway, Switzerland, USA, Australia, Austria, Ireland, Netherlands, Sweden, Denmark, Canada
</p>
<p>II             700€ Germany, Belgium, Finland,Iceland, France, UK, Japan, Italy, New Zealand, Spain, Israel, South Korea, Slovenia, Czech Republic, Taiwan, Cyprus
</p>
<p>III            500 € Greece, Slovakia, Portugal, Estonia, Poland, Hungary, Chile, Turkey, Mexico, Lithuania, Latvia, Uruguay, Chile, Croatia, Romania, Argentina
</p>
<p>IV            300€ Russia, China, Bulgaria, Serbia, Northern Macedonia, Bosnia and Herzegovina, Albania, Bangladesh, India, Lebanon, Montenegro, Peru, Colombia, Ecuador, South Africa, Belarus, Ukraine, Iran, Kosovo, Armenia, Georgia, Pakistan ...
</p>

<p>
First group is for residents in countries with GDP per capita above 45000 $, the fourth with less than 11355 $ which is the World average. For practical reasons the groups don’t contain all countries but only the ones we’ve been in touch so far. If your country is not on the list please contact us.
</p>
<p>
Based on our calculations one participants schooling, material, housing and food costs 500 €, which is the average of group 1. and 4. So for the SVA to be financially sustainable we decided to have this progressive pricing system.  If you cannot afford the price of your country, please feel free to contact us as well by e-mail with a special note after filling the application form.
</p>
<p>
Please NOTE: if an institution or a travel grant is paying for you then the full price is to be payed.
<p>'),
];
$residency = [
    new Tab('Test 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quas a autem, aperiam perspiciatis alias. Vero delectus officia mollitia accusamus ullam iure quibusdam blanditiis, natus, temporibus vitae modi, rerum consequatur.'),
];
$sva_sr = [
    new Tab('Test 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quas a autem, aperiam perspiciatis alias. Vero delectus officia mollitia accusamus ullam iure quibusdam blanditiis, natus, temporibus vitae modi, rerum consequatur.'),
];
*/
