@extends('_layouts.master')

@section('body')
<div class="">
  <div class="inline-flex font-bold text-md">
    <a class="inline  m-auto pr-6" href="home.htm"> <img class="h-12" src="Images/Logo_black.png" alt="Logo"> </a>
    <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="intro.html"> WIE ES FUNKTIONIERT </a>
    <a class="inline  m-auto px-6 text-red-xxx" href="about.htm"> ABOUT </a>
    <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="partner.html"> PARTNERS </a>
    <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="stats.html"> STATS </a>
    <div class="flex-1 px-xy"> </div>
    <a class="text-right bg-red-x shadow-lg object-center text-center hover:shadow-outline rounded-xl px-6 py-2 m-auto text-white" href="/humba-beta/register.php"> Registriere dich jetzt </a>
  </div>
  <div class="pt-24">
    <div class="text-gray-100 font-bold text-3xl pb-2"> &Uuml;ber uns </div>
    <div class="text-gray-100 w-5/12"> Wir sind eine Gruppe kompetenter junger Menschen, welche der Vision nachstreben, eine Platform f&uuml;r ebenfalls junge Menschen zu entwicklen, damit die Pausen in den Bildungseinrichtungen nicht mehr
      komplett sinnfrei verwendet werden und ganz im Gegenteil somit sinnvolle Anwendung finden. </div>
  </div>
  <div class="pt-8">
    <div class="text-gray-100 font-bold text-2xl pb-2"> Unsere Mission </div>
    <div class="text-gray-100 italic font-normal w-9/12"> Das Ziel von <a class="font-bold" href="home.htm"> Humba </a> ist es eine Plattform f&uuml;r junge Menschen zu schaffen, um diese qualitativer zusammenzubringen und f&uuml;r sie besseren
      Nutzen aus deren Freistunden und zu schaffen. </div>
  </div>
  <div class="pt-10">
    <div class="text-gray-100 font-bold text-2xl pb-2"> Das Team </div>
    <div class="px-32 py-32">
      <div class="inline-flex">
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
      </div>
      <div class="inline-flex pt-10">
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
        <div class="inline px-12"> <img src="Images/Icon_empty.PNG" alt="Icon_empty" class="h-32"> </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="text-center bg-gray-800">
  <div class="pb-3"> <img src="Images/Logo_black.png" alt="Logo" class="mx-auto h-12"> </div>
  <a class="bg-red-x shadow-lg object-center text-center text-sm hover:shadow-outline rounded px-6 py-1 m-auto text-white" href="mailto:support@hu.mba"> Schreibe uns </a>
  <div class="pt-2 text-gray-500">
    <a href="impressung.htm" class="px-2"> impressung </a>
    <a href="datenschutz.htm" class="px-2"> datenschutz </a>
    <a href="nutzung.htm" class="px-2"> nutzung </a>
  </div>
  <div class="text-gray-100 pb-8 pt-2"> &copy; 2019 Humba Team </div>
</div>
@endsection
