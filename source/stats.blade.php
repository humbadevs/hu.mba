@extends('_layouts.master')

@section('body')
<div class="bg-gray-800 p-16">
  <div class="">
    <div class="inline-flex font-bold text-md">
      <a class="inline  m-auto pr-6" href="home.htm"> <img class="h-12" src="Images/Logo_black.png" alt="Logo"> </a>
      <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="intro.html"> WIE ES FUNKTIONIERT </a>
      <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="about.htm"> ABOUT </a>
      <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="partner.html"> PARTNERS </a>
      <a class="inline  m-auto px-6 text-red-xxx" href="stats.html"> STATS </a>
      <div class="flex-1 px-xy"> </div>
      <a class="text-right bg-red-x shadow-lg object-center text-center hover:shadow-outline rounded-xl px-6 py-2 m-auto text-white" href="/humba-beta/register.php"> Registriere dich jetzt </a>
    </div>
    <div class="text-gray-100 pt-20">
      <div class="font-bold text-6xl pb-4"> Statistik </div>
      <div class="text-lg w-6/12"> Wir wollen als junges aufstrebendes Startup m&ouml;glichst transparent gegen&uuml;ber unseren Nutzern und unseren Partnern sein. Demnach haben wir auf dieser Seite unsere Daten zusammengefasst. </div>
    </div>
    <div class="px-40">
      <div class="flex pt-20">
        <div class="flex-1 bg-red-s rounded-xl text-red-xxx text-center pt-12 pb-8">
          <div class="text-5xl font-bold"> 12 </div>
          <div class="text-md font-semibold"> registrierte Nutzer </div>
        </div>
        <div class="px-3"> </div>
        <div class="flex-1 bg-red-s rounded-xl text-red-xxx text-center pt-12 pb-8">
          <div class="text-5xl font-bold"> 312&euro; </div>
          <div class="text-md font-semibold"> monatliche Ausgaben </div>
        </div>
        <div class="px-3"> </div>
        <div class="flex-1 bg-red-s rounded-xl text-red-xxx text-center pt-12 pb-8">
          <div class="text-5xl font-bold"> 0 </div>
          <div class="text-md font-semibold"> Partnergesch&auml;fte </div>
        </div>
      </div>
      <div class="flex pt-6">
        <div class="flex-1 bg-red-s rounded-xl text-red-xxx text-center pt-12 pb-8">
          <div class="text-5xl font-bold"> 0 </div>
          <div class="text-md font-semibold"> F&ouml;rderer </div>
        </div>
        <div class="px-3"> </div>
        <div class="flex-1 bg-red-s rounded-xl text-red-xxx text-center pt-12 pb-8">
          <div class="text-5xl font-bold"> 122 </div>
          <div class="text-md font-semibold"> Commits </div>
        </div>
        <div class="px-3"> </div>
        <div class="flex-1 bg-red-s rounded-xl text-red-xxx text-center pt-12 pb-8">
          <div class="text-5xl font-bold"> 1243 </div>
          <div class="text-md font-semibold"> Codezeilen </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-center bg-gray-800 pt-16">
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
