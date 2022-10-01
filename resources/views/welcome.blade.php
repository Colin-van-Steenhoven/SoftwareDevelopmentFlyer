<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Opleiding Software Development</title>
      <link rel="icon" href="img/Screenshot_2_2_50.png">
      <link rel="stylesheet" href="css/main.css" />
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <style>
         /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
      </style>
   </head>
   <body>
      <header>
         <nav class="nav-bar">
            <img src="img/Curio-Logo-Software-Development.png" alt="Curio Logo">
            <h1>Opleiding Software Development MBO Niveau 4</h1>
         </nav>
      </header>
      <div class="container">
      <main>
         <div class="infoSD">
            <div class="infoSDtext">
               <h2>Over de opleiding Software Development</h2>
               <p>Digitaal is jouw lievelingstaal. 
                  Na Nederlands schrijf jij het beste C#, PHP, MYSQL en Javascript. 
                  Of misschien nu nog niet zo goed, maar na de opleiding Softwaredeveloper wel. 
                  Je leert programmeren. Apps bouwen. Websites maken. 
                  En software ontwikkelen die speciaal voor de wens van de klant is bedoeld. 
                  Je houdt van werken in teams en leert graag meer over ontwikkelprogramma’s.
               </p>
            </div>
            <img src="img/Laptop-IMG.png" alt="">
         </div>
         <div class="container">
            <div class="laptopRooster">
               <div class="imageSchool">
                  <img src="img/Curio-Gebouw.jpg" alt="">
               </div>
               <div class="infoCurio">
                  <h2>Over Curio</h2>
                  <p>Goed voorbereid je toekomst in, met een vmbo- of mbo-diploma. 
                     Daarvoor ga je naar Curio. Curio helpt jou je talenten te ontwikkelen.<br>
                     Curio prikkelt jouw nieuwsgierigheid om te leren.<br>
                     Bij Curio ontdek je waar je leer- en werkplezier ligt.<br>
                     Jij stapt straks zelfbewust de arbeidsmarkt van de toekomst in, hoe die er ook zal uitzien.
                  </p>
               </div>
            </div>
            <div class="container">
               <div class="roosterImg">
                  <img src="img/Screenshot_1.png" alt="">
               </div>
               <div class="roosterText">
                  <h2>Over het rooster</h2>
                  <p>Hierboven zie je een rooster van een eerstejaars student, wat heb je nou allemaal voor vakken en wat leer je nou eigenlijk?
                     In het eerste jaar krijg je eigenlijk alle basisvakken, de basis van programmeren en een keuzedeel waar je later examen voor moet gaan doen.
                     De meeste vakken zijn theorie vakken die vakken zijn NATIVE, WEB, en PRO dat zijn de lessen die met coderen temaken hebben.
                     Natuurlijk zijn er ook andere theorie vakken zoals Ned, Eng, Rek en SLB, die hebben dan iets minder met coderen temaken.
                     Dan zul je je vast afvragen wat deze vakken nou betekenen, Ned, Eng en Rek zullen wel bekend voorkomen dus daar ga ik niet teveel over praten, maar de andere vakken wel wat meer.
                     Web is een les waar je alles gaat leren over web development, dat is van HTML en CSS naar PHP en JS. bij NATIVE ga je alles leren over software development van Python naar C#.
                     Bij SLB heb je het eigenlijk meer over hoe het gaat bij jou in de klas dat is eigenlijk een les om samen met de klas te kunnen praten met je SLB'er (mentor).
                     En zo heb je nog een vak genaamd PRA, PRA is een afkorting van praktijk en wat je hier gaat doen is allemaal projecten maken zowel solo als met een team.
                     Dan heb je als laatste nog een vak die PRO heet, bij PRO krijg je eigenlijk al het overige geleerd wat niet persee met coderen temaken heeft maar wel uiteinelijk nodig zijn bij PRA.
                  </p>
               </div>
            </div>
            <div class="container">
               <div class="blokTextImg">
                  <div class="blokImg">
                     <img src="img/Opleidingsoverzicht3.png" alt="">
                  </div>
                  <div class="blokText">
                     <h2>Over de blokken</h2>
                     <p>Bij deze opleiding ga jij vier jaar leren, tenzij je versnelt dan duurd de opleiding maar 3 jaar, daarover later meer.
                        Die 4 jaar zijn opgedeelt over 7 blokken, elk blok heeft weer een ander doel.
                        Je hebt als eerste blok A en blok A gaat over "Smart City" dit zijn opdrachten die je door de basis heen gaan helpen, en je gaat ook met de Microbit werken.
                        Dan krijg je de kans om te gaan versnellen aan het einde van blok A dan moet je het goed hebben gedaan en alles goed snappen en gaat er een jaar van de opleiding af.
                        Als je dan versneld krijg je de dezelfde leerstof als mensen die niet versnellen alleen dan op een iets hoger tempo, en sla je het laatste jaar over (blok G).
                        Dan blok B krijgt de naam "Developer Land" dit is eigenlijk hetzelfde prinsiepe als Smart City maar dan meer gericht op Web development, maar dan natuurlijk ook de basis daarvan.
                        Dan in blok C ga je je voorbereiden op je eerste stage en natuurlijk je skills een beetje bijschroeven voor je stage gaat lopen.
                        Blok D is dan het blok waar je stage gaat lopen, je hebt dan 4 dagen stage en 1 dag school in de week.
                        Wanneer de stage dan voorbij is begin je het derde jaar met blok E, in dit blok ga je je specialiteiten (coderen) wat bijschroeven en bijleren zodat je klaar bent voor je examen.
                        Uiteindelijk heb je blok F en dat blok is wanneer je examen gaat doen op school.
                        Dan het laatste blok, blok G. Dit blok is het eindstage blok, de tweede keer dat je stage gaat lopen maar dit keer is dit blok een heel jaar.
                        Dit is ook het blok wat de versnellers niet hoeven te doen, dus heb je niet veel moeite met leren en vat je alles snel op is het het zeker waard om te versnellen.
                     </p>
                  </div>
               </div>
            </div>
            <div class="container">
              <div class="docentText">
                <h2>Docenten</h2>
              </div>
               <div class="alleDocenten">
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
                  <div class="docentKop">
                     <div class="docentImg">
                        <img src="https://via.placeholder.com/150C/O" alt="">
                     </div>
                     <div class="docentNaam">
                        <p>Naam van Achternaam</p>
                     </div>
                  </div>
               </div>
            </div>
      </main>
      <footer class="footer">
      <div class="footer__addr">
      <img src="img/Curio-Logo.png" alt="" class="footer__logo">
      <h2>Contact</h2>
      <address>
      Terheijdenseweg 350, 4826 AA Breda<br>
      <a class="footer__btn" href="mailto:infopunt@curio.nl">Email Ons</a>
      <a class="footer__btn" href="tel:088-2098000">Bel Ons</a>
      </address>
      </div>
      <li class="nav__item1">
      <ul class="nav__ul">
      <li>
      <h2>MBO</h2>
      </li>
      <li>
      <a href="https://www.curio.nl/mbo/">Opleidingen</a>
      </li>
      <li>
      <a href="https://www.curio.nl/mbo/over-het-mbo/">Over het mbo</a>
      </li>
      <li>
      <a href="https://www.curio.nl/mbo/kies-jouw-mbo/">Open dagen mbo</a>
      </li>
      <li>
      <a href="https://www.curio.nl/mbo/studie-info/">Studie info</a>
      </li>
      <li>
      <a href="https://www.curio.nl/mbo/na-het-mbo/">Na het mbo</a>
      </li>
      </ul>
      </li>
      <li class="nav__item2">
      <ul class="nav__ul">
      <li>
      <h2>Over Curio</h2>
      </li>
      <li>
      <a href="https://www.curio.nl/nieuws/">Nieuws</a>
      </li>
      <li>
      <a href="https://www.curio.nl/over-ons/organisatie/">Organisatie</a>
      </li>
      <li>
      <a href="https://www.curio.nl/over-ons/vakantie/">Vakantie</a>
      </li>
      <li>
      <a href="https://www.werkenbijcurio.nl/">Vacatures</a>
      </li>
      <li>
      <a href="https://www.curio.nl/locaties-curio/">Locaties</a>
      </li>
      </ul>
      </li>
      <li class="nav__item3">
      <ul class="nav__ul">
      <li>
      <h2>Hulp nodig?</h2>
      </li>
      <li>
      <a href="https://www.curio.nl/hulp-nodig/service-en-contact/">Service en contact</a>
      </li>
      <li>
      <a href="https://www.curio.nl/faq/">Veelgestelde vragen</a>
      </li>
      <li>
      <a href="https://www.curio.nl/hulp-nodig/studiekeuze-advies/">Studiekeuze advies</a>
      </li>
      <li>
      <a href="https://www.curio.nl/hulp-nodig/tips-of-klachten/">Tips of klachten</a>
      </li>
      <li>
      <a href="https://www.curio.nl/hulp-nodig/inloggen/">Inloggen</a>
      </li>
      </ul>
      </li>
      <li class="nav__item4">
      <ul class="nav__ul">
      <li>
      <a href="https://www.curio.nl/cookies/">Cookies</a>
      </li>
      <li>
      <a href="https://www.curio.nl/privacy/">Privacy</a>
      </li>
      <li>
      <a href="https://www.curio.nl/disclaimer/">Disclaimer</a>
      </li>
      <li>
      <a href="https://www.curio.nl/over-ons/international-english/">English</a>
      </li>
      </ul>
      </li>
      </footer>
      <div class="legal">
      <p>&copy; 2022 Curio. All rights reserved.</p>
      </div>
      </div>
   </body>
</html>