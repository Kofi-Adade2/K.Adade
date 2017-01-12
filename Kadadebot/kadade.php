<?php 
date_default_timezone_set("Africa/Accra");

//$website = "https://api.telegram.org/bot".$bottoken;
$web = "https://api.telegram.org/bot278684341:AAHzr0QxIculpGMU1csD5n2ah7h2T1uf114";
$update = file_get_contents($web."/getupdates");
//print_r($update);
$updateArray= json_decode($update, true);
//print_r($updateArray);


$text=$updateArray["result"][0]["message"]["date"];

 $length = count($updateArray["result"]);
 //echo "<br>".$length;
$text=$updateArray["result"][$length-1]["message"]["text"];
// //$text0=$updateArray["result"][$length]["message"]["text"];

 $chat_id=$updateArray["result"][0]["message"]["chat"]["id"];


 if($text == 'hi'){
 $bottext="Instruments FAQ BOT . Types of Instruments and Description";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		if($text == 'Trumpet'){
 $bottext="is a musical instrument commonly used in classical and jazz ensembles. 
 The trumpet group contains the instruments with the highest register in the brass family. 
 Trumpet-like instruments have historically been used as signaling devices in battle or hunting, 
 with examples dating back to at least 1500 BC; they began to be used as musical instruments only in the late-14th or early 15th century.
 Trumpets are used in art music styles, for instance in orchestras, concert bands, and jazz ensembles, as well as in popular music. 
 They are played by blowing air through almost-closed lips (called the player's embouchure), producing a buzzing sound that starts a 
 standing wave vibration in the air column inside the instrument. 
 Since the late 15th century they have primarily been constructed of brass tubing, usually bent twice into a rounded rectangular shape";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		 if($text == 'Violin'){
 $bottext="is a wooden string instrument in the violin family. 
 It is the smallest and highest-pitched instrument in the family in regular use. Smaller violin-type instruments are known,
 including the violino piccolo and the kit violin, but these are virtually unused in the 2010s.
 The violin typically has four strings tuned in perfect fifths, and is most commonly played by drawing a bow across its strings,
 though it can also be played by plucking the strings with the fingers (pizzicato). 
 Violins are important instruments in a wide variety of musical genres. They are most prominent in the Western classical
 tradition and in many varieties of folk music. They are also frequently used in genres of folk including country music and
 bluegrass music and in jazz. Electric violins are used in some forms of rock music; further, the violin has come to be played in many
 non-Western music cultures, including Indian music and Iranian music. The violin is sometimes informally called a fiddle, 
 particularly in bluegrass, but this nickname is also used regardless of the type of music played on it.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		
		 if($text == 'Guitar'){
 $bottext="is a musical instrument classified as a string instrument with anywhere from four to 18 strings, usually having six.
 The sound is projected either acoustically, using a hollow wooden or plastic and wood box (for an acoustic guitar), or through
 electrical amplifier and a speaker (for an electric guitar). It is typically played by strumming or plucking the strings with the fingers,
 thumb and/or fingernails of the right hand or with a pick while fretting (or pressing against the frets) the strings with the fingers of 
 the left hand. The guitar is a type of chordophone, traditionally constructed from wood and strung with either gut, nylon or steel strings
 and distinguished from other chordophones by its construction and tuning. The modern guitar was preceded by the gittern, the vihuela, the
 four-course Renaissance guitar, and the five-course baroque guitar, all of which contributed to the development of the modern six-string 
 instrument. There are three main types of modern acoustic guitar: the classical guitar (nylon-string guitar), the steel-string acoustic 
 guitar, and the archtop guitar, which is sometimes called a jazz guitar. The tone of an acoustic guitar is produced by the strings'
 vibration, amplified by the hollow body of the guitar, which acts as a resonating chamber. The classical guitar is often played as a solo 
 instrument using a comprehensive finger-picking technique where each string is plucked individually by the player's fingers, as opposed to
 being strummed. The term finger-picking can also refer to a specific tradition of folk, blues, bluegrass, and country guitar playing in 
 the United States.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		
		 if($text == 'Clarinet'){
 $bottext="is a musical-instrument family belonging to the group known as the woodwind instruments. 
 It has a single-reed mouthpiece, a straight cylindrical tube with an almost cylindrical bore, and a flared bell.
 A person who plays a clarinet is called a clarinetist. The word clarinet may have entered the English language via the French clarinette
 (the feminine diminutive of Old French clarin or clarion), or from Provençal clarin, oboe. It would seem however that its real roots 
 are to be found amongst some of the various names for trumpets used around the renaissance and baroque eras. Clarion, clarin and the 
 Italian clarino are all derived from the medieval term claro which referred to an early form of trumpet This is probably the origin of 
 the Italian clarinetto, itself a diminutive of clarino, and consequently of the European equivalents such as clarinette in French or the 
 German Klarinette. According to Johann Gottfried Walther, writing in 1732, the reason for the name is that it sounded from far off not
 unlike a trumpet. The English form clarinet is found as early as 1733, and the now-archaic clarionet appears from 1784 until the early 
 years of the 20th century.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		 if($text == 'Marimba'){
 $bottext="is a percussion instrument consisting of a set of wooden bars struck with mallets to produce musical tones.
 Resonators suspended underneath the bars amplify their sound. The bars are arranged like the keys of a piano, with the groups of 2 and 3
 accidentals raised vertically, overlapping the natural bars to aid the performer both visually and physically. This instrument is a type 
 of idiophone, but with a more resonant and lower-pitched tessitura than the xylophone.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		
		 if($text == 'Cello'){
 $bottext="is a bowed string instrument with four strings tuned in perfect fifths. 
 The strings from low to high are generally tuned to C2, G2, D3 and A3, an octave lower than the viola. It is a member of the violin 
 family of musical instruments, which also includes the violin and viola. The cello is used as a solo musical instrument, as well as in
 chamber music ensembles, string orchestras, as a member of the string section of symphony orchestras, and some rock bands. It is the 
 second-largest bowed string instrument in the modern symphony orchestra, the double bass being the largest. Cellos were derived from
 other mid- to large-sized bowed instruments in the 16th century, such as the viola da gamba, and the generally smaller and squarer viola
 da braccio, and such instruments made by members of the Amati family of luthiers. Cello parts are generally written in the bass clef,
 but both tenor and treble clefs are used for higher-range parts. A person who plays the cello is called a cellist or violoncellist.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		 if($text == 'Saxophone'){
 $bottext="is a family of woodwind instruments. Saxophones are usually made of brass and played with a single-reed mouthpiece similar
 to that of the clarinet. The saxophone family was invented by the Belgian instrument maker Adolphe Sax in 1840.
 Adolphe Sax wanted to create a group or series of instruments that would be the most powerful and vocal of the woodwinds,
 and the most adaptive of the brass instruments, that would fill the vacant middle ground between the two sections.
 He patented the saxophone on June 28, 1846, in two groups of seven instruments each. Each series consisted of instruments of various 
 sizes in alternating transposition. The series pitched in B♭ and E♭, designed for military bands, have proved extremely popular and most 
 saxophones encountered today are from this series. Instruments from the so-called orchestral series, pitched in C and F, never gained
 a foothold, and the B♭ and E♭ instruments have now replaced the C and F instruments when the saxophone is used in an orchestra.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		if($text == 'Tambourine'){
 $bottext="is a musical instrument in the percussion family consisting of a frame, often of wood or plastic,
 with pairs of small metal jingles, called zils. Classically the term tambourine denotes an instrument with a drumhead,
 though some variants may not have a head at all. Tambourines are often used with regular percussion sets. They can be mounted, 
 for example on a stand as part of a drum kit (and played with drum sticks), or they can be held in the hands and played by tapping
 or hitting the instrument. Tambourines come in many shapes with the most common being circular. It is found in many forms of
 music: Turkish folk music, Greek folk music, Italian folk music, classical music, Persian music, gospel music, pop music and 
 rock music.";
 file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
       print_r($bottext);  
	   
                       
 } 
        else if($text == 'Goodbye'){
			$bottext="Goodbye";
            file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
             
        }
		
		
		?>