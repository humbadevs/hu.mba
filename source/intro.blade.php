@extends('_layouts.master')

@section('body')
<div class="bg-gray-800 p-16 sm:p-4 md:p-16">
  <div class="">
    <div class="inline-flex font-bold text-base sm:text-xs md:text-base lg:text-base xl:text-base ">
      <a class="inline  m-auto pr-6" href="home.htm"> <img class="h-12" src="Images/Logo_black.png" alt="Logo"> </a>
      <a class="inline  m-auto px-6 sm:px-4 md:px-6 text-red-xxx" href="intro.html"> WIE ES FUNKTIONIERT </a>
      <a class="inline  m-auto px-6 sm:px-4 md:px-6  hover:text-red-special text-red-special" href="about.htm"> ABOUT </a>
      <a class="inline  m-auto px-6 sm:px-4 md:px-6 hover:text-red-special text-red-special" href="partner.html"> PARTNERS </a>
      <a class="inline  m-auto px-6 sm:px-4 md:px-6 hover:text-red-special text-red-special" href="stats.html"> STATS </a>
      <div class="flex-1 px-xy    sm:px-0 md:px-xy lg:px-xy xl:px-xy "> </div>
      <a class="  text-right md: text-right lg:text-right xl:text-right sm:text-center bg-red-x shadow-lg object-center text-center hover:shadow-outline rounded-xl px-6 sm:px-2 md:px-6 lg:px-6 xl:px-6  py-2 m-auto text-white"
        href="/humba-beta/register.php"> Registriere dich jetzt </a>
    </div>
    <div class="p-10">
      <div class="flex pt-20 pr-10 pl-10">
        <div class="flex-1">
          <div class="text-red-xxx text-4xl w-11/12 font-bold tracking-normal leading-tight pb-16 pt-10"> Finde Menschen, die auch gerade Pause haben </div>
          <div class="text-gray-400 w-10/12 font-thin text-2xl"> In unserer App hast du die M&ouml;glichkeit ganz einfach zu sehen, ob gerade auch jemand frei hat und was dieser Mensch machen m&ouml;chte oder auch gerade macht. Mit nur einem klick
            kannst du den- oder diejenige mit Leichtigkeit kontaktieren. </div>
        </div>
        <div class="flex-1"> <img src="Images/Stalker.png" alt="Picture" class="m-auto h-88"> </div>
      </div>
    </div>
    <div class="p-10">
      <div class="flex pt-20 pr-10 pl-10">
        <div class="flex-1"> <img src="Images/Celebrate.png" alt="Picture" class="m-auto h-88"> </div>
        <div class="flex-1">
          <div class="text-red-xxx text-4xl w-11/12 font-bold tracking-normal leading-tight pb-16 pt-10"> Alle auf eine Blick </div>
          <div class="text-gray-400 w-10/12 font-thin text-2xl"> Auf unserer Humbamap kannst du direkt sehen wo deine Freunde und andere Freihabende sind. Mit Livestandort und auch Highlight von unseren Partnern und direktem &Uuml;berblick, wo du
            jetzt am Besten deine wertvolle Zeit verbringst. </div>
        </div>
      </div>
    </div>
    <div class="p-10">
      <div class="flex pt-20 pr-10 pl-10">
        <div class="flex-1">
          <div class="text-red-xxx text-4xl w-12/12 font-bold tracking-normal leading-tight pb-16 pt-10"> Verbinde dich mit deinen Freunden </div>
          <div class="text-gray-400 w-10/12 font-thin text-2xl"> Unser Ziel ist dir nicht nur eine Platform zu bieten mit der du einfach andere findest, welche frei haben, sondern auch direkt eine M&ouml;glichkeit zum langfristigen Kontakt
            anzubieten. </div>
        </div>
        <div class="flex-1"> <img src="Images/Papertoss.png" alt="Picture" class="m-auto h-88"> </div>
      </div>
    </div>
    <div class="p-10">
      <div class="flex pt-20 pr-10 pl-10">
        <div class="flex-1"> <img src="Images/Coupon.png" alt="Picture" class="m-auto h-88"> </div>
        <div class="flex-1">
          <div class="text-red-xxx text-4xl w-11/12 font-bold tracking-normal leading-tight pb-16 pt-10"> <a class="font-extrabold"> Fette </a> Rabatte </div>
          <div class="text-gray-400 w-10/12 font-thin text-2xl"> Und wahrscheinlich das beste Feature: Du bekommst bei unseren ausgew&auml;hlten Partner gut gew&auml;hlt Rabatte auf bestimmte Produkte bekommen. Angebote werden regelm&auml;ßig
            aktualisiert. Mit jedem Kauf bei unseren Partnern erh&auml;lst du zudem Punkte, welche dir sp&auml;ter noch einiges bringen k&ouml;nnen. </div>
        </div>
      </div>
    </div>
    <div class="p-10">
      <div class="flex pt-20 pr-10 pl-10">
        <div class="flex-1">
          <div class="text-red-xxx text-4xl w-11/12 font-bold tracking-normal leading-tight pb-16 pt-10"> Kein Plan was ihr machen sollt? </div>
          <div class="text-gray-400 w-10/12 font-thin text-2xl"> Wir haben eine gute Auswahl an Aktivit&auml;ten kuriert, welche du dir direkt in der App vorschlagen lassen kannst. Vorbei ist die Zeit in der du nichts machst in der Pause. </div>
        </div>
        <div class="flex-1"> <img src="Images/Robber.png" alt="Picture" class="m-auto h-88"> </div>
      </div>
    </div>
    <div class="text-gray-100 text-2xl font-bold text-center pt-16">
      <a href="/humba-beta/register.php" class="bg-red-x shadow-lg object-center text-center hover:shadow-outline rounded-xl px-32 py-5 m-auto text-white"> Ich brauche das </a>
    </div>
  </div>
</div>
<div class="text-center bg-gray-800 pt-6">
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
