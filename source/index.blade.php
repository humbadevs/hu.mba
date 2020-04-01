@extends('_layouts.master')

@section('body')
<div id="page">
  <div class="bg-gray-800  h-screen p-16 lg:p-12 sm:p-0 sm:pl-6 sm:pt-16">
    <div class=" ">
      <div class=" inline-flex text-red-special font-bold text-md lg:text-base sm:text-xs md:text-xs ">
        <a class="inline  m-auto pr-6 " href="home.htm"> <img class="h-16 lg:h-16 " src="Images/Logo_black.png  " alt="Logo"> </a>
        <a class="inline  m-auto px-6 lg:px-6 md:px-2 sm:px-2   hover:text-red-special" href="intro.html"> WIE ES FUNKTIONIERT </a>
        <a class="inline  m-auto px-6 hover:text-red-special" href="about.htm"> ABOUT </a>
        <a class="inline  m-auto px-6 hover:text-red-special" href="partner.html"> PARTNERS </a>
        <a class="inline  m-auto px-6 hover:text-red-special" href="stats.html"> STATS </a>
      </div>
      <div class=" bg-gray-800 pt-24 sm:pt-16 md:pt-16 w-7/12  sm:w-4/12   sm:w-10/12   lg:pt-12 lg:w-8/12 xl:w-12/12  ">
        <div class="text-white text-7xl sm:text-6xl  lg:text-7xl md:text-7xl xl:text-9xl font-bold tracking-tight xl:tracking-tight leading-tight"> Mache mehr aus deiner Pause - humba. </div>
      </div>
      <div class="pt-12 lg:pt-12 ">
        <a class="shadow-lg text-center object-center bg-red-x hover:shadow-outline text-white font-bold py-3 px-6  lg:py-3 lg:px-6    text-base lg:text-base  rounded-xl" href='register'> Jetzt Registrieren </a>
        <span class="inline-block px-3"> </span>
        <a class="shadow-lg text-center object-center bg-red-y hover:shadow-outline text-white font-bold py-3 px-10 lg:py-3 lg:px-10   text-base lg:text-base rounded-xl" href='intro.html'> Erfahre mehr </a>
      </div>
      <div class=" pr-0 lg:pr-0 pt-24 lg:pt-8 sm:pt-6 sm:pr-16 md:pr-0  ">
        <a class="inline" href="#unten"> <img class="h-5 m-auto" src="Images/Scroll_down.png" alt="Scroll_down"> </a>
      </div>
    </div>
  </div>
  <div class="bg-red-x h-x p-20 lg:p-12 sm:p-0  sm:pt-12">
    <div class="pt-16 md:pt-0 lg:pt-0 sm:pt-0">
      <div class="inline-flex">
        <div class="inline pt-12 pl-0 lg:pl-0 lg:pt-12 sm:pt-16 sm:pl-6   ">
          <div class=""> <img src="Images/lonely.png" alt="Lonely" class="h-auto m-auto "> </div>
        </div>
        <div class="inline w-8/12 lg:w-9/12  sm:w-6.5/12 text-white pl-16">
          <div class="font-semibold text-6xl lg:text-45xl  sm:text-5xl  xl:text-7xl leading-tighter"> Alleine die Pause oder Freistunde verbringen? </div>
          <div class=" pt-8 pb-10 lg:pb-4 sm:pb-4  text-xl lg:text-base  sm:text-sm xl:text-xl font-semibold w-10/12 lg:w-10/12 sm:w-12/12  "> Das ist zumindestens meistens nicht dein Ziel. Viel mehr Spaß; und Freude bringt es mit anderen zusammen
            diese Zeit zu verbringen. Wenn deine Freunde nun keine Zeit haben ist es mit der Hilfe von Humba m&ouml;glich Menschen, welche dennoch in deinem Alter sind, zu finden, welche auch frei haben. </div>
          <a class=" inline-block bg-gray-800 rounded-xl shadow-xl hover:shadow-outline font-semibold text-lg sm:text-sm lg:text-lg py-2 px-6" href='about.htm'> Ich m&ouml;chte nicht allein sein </a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-800 h-x ">
    <div class="pt-32 lg:pt-12 sm:pt-12">
      <div class="inline-flex">
        <div class="inline w-8/12 pl-16 lg:pl-16 sm:pl-6">
          <div class="font-semibold text-red-xxx text-6xl lg:text-45xl sm:text-5xl xl:text-7xl  leading-tighter"> Rabatte bei Läden in deiner Umgebung? </div>
          <div class="  pt-8 pb-10 lg:pb-4 sm:pb-4 text-xl lg:text-base sm:text-sm text-gray-400 font-semibold w-10/12 lg:w-10/12 sm:w-full xl:text-xl  "> Das k&ouml;nnen wir dir bieten, indem wir mit einigen Partnern spezielle Angebote f&uuml;r
            unsere Nutzer ausgehandelt haben. Viel g&uuml;nstiger ist es dann f&uuml;r dich vorallem bei Essensläden. Als Benutzer von humba sparst du bis zu 30% bei deinem Einkauf in ausgewählten Partnerläden. Und das beste ist, dass
            du f&uuml;r jeden Einkauf Punkte bekommst, welche du später f&uuml;r noch mehr Angebote einl&ouml;sen kannst. </div>
          <a class="text-gray-100 inline-block bg-red-x rounded-xl shadow-xl hover:shadow-outline font-semibold text-lg lg:text-lg sm:text-sm py-2 px-6  " href='about.htm'> Ich m&ouml;chte g&uuml;nstiger essen </a>
        </div>
        <div class="   inline pt-12 lg:pt-12 sm:pt-16">
          <div class=""> <img src="Images/rabatte.png" alt="Lonely" class="h-auto m-auto pr-10"> </div>
        </div>
      </div>
    </div>
  </div>
  <a name="unten"></a>
  <div class="bg-red-x   h-screen">
    <div class="pt-32 lg:pt-12 sm:pt-12  ">
      <div class="inline-flex">
        <div class="inline pt-16">
          <div class=""> <img src="Images/friends.png" alt="Lonely" class="h-auto m-auto pl-10"> </div>
        </div>
        <div class="inline  w-8/12  text-white pl-24">
          <div class=" font-semibold text-6xl lg:text-45xl sm:text-5xl pr-4 lg:pr-4 sm:pr-32 xl:text-7xl leading-tighter"> Du magst doch deine Freunde, oder? </div>
          <div class="pt-8 pb-10 lg:pb-4 sm:pb-4 text-xl lg:text-base sm:text-sm  xl:text-xl font-semibold w-10/12"> Bestimmt, sonst w&uuml;rdest du sie ja nicht deine Freunde nennen - also hoffen wir. Auf humba ist es dir m&ouml;glich dich sicher
            mit deinen Freunden zu verbinden und im Austausch mit diesen zu bleiben. </div>
          <a class="inline-block bg-gray-800   rounded-xl shadow-xl hover:shadow-outline font-semibold text-lg lg:text-lg sm:text-sm py-2 px-6 " href='register'> Ich mag meine Freunde </a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-800">
    <div class="text-center bg-gray-800 pt-16">
      <div class="pb-3"> <img src="Images/Logo_black.png" alt="Logo" class="mx-auto h-12"> </div>
      <a class="bg-red-x shadow-lg object-center text-center text-sm hover:shadow-outline rounded px-6 py-1 m-auto text-white" href="mailto:support@hu.mba"> Schreibe uns </a>
      <div class="pt-2 text-gray-500">
        <a href="impressung.htm" class="px-2"> impressum </a>
        <a href="datenschutz.htm" class="px-2"> datenschutz </a>
        <a href="nutzung.htm" class="px-2"> nutzung </a>
      </div>
      <div class="text-gray-100 pb-10 pt-2"> &copy; 2019 Humba Team </div>
    </div>
  </div>
</div>
<div id="loading">
  <div class="flex h-screen">
    <div class="m-auto">
      <img src="/assets/images/logo.png" class="animation my-auto h-16 w-16" alt="">
    </div>
  </div>
</div>
@endsection
