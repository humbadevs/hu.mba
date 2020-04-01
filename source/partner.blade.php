@extends('_layouts.master')

@section('body')
  <div class="bg-gray-800 p-16">
    <div class="">
      <div class="inline-flex font-bold text-md">
        <a class="inline  m-auto pr-6" href="home.htm"> <img class="h-12" src="Images/Logo_black.png" alt="Logo"> </a>
        <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="intro.html"> WIE ES FUNKTIONIERT </a>
        <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="about.htm"> ABOUT </a>
        <a class="inline  m-auto px-6 text-red-xxx" href="partner.html"> PARTNERS </a>
        <a class="inline  m-auto px-6 hover:text-red-special text-red-special" href="stats.html"> STATS </a>
        <div class="flex-1 px-xy"> </div>
        <a class="text-right bg-red-x shadow-lg object-center text-center hover:shadow-outline rounded-xl px-6 py-2 m-auto text-white" href="/humba-beta/register.php"> Registriere dich jetzt </a>
      </div>
    </div>
  </div>
  <div class="py-2 bg-red-x overflow-x-hidden">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4847.570310462399!2d13.284532633247423!3d52.59157748492578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sde!2sde!4v1580658602945!5m2!1sde!2sde" class="w-screen h-5k "
      frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
  <div class="px-40 pt-20">
    <div class="text-red-xxx font-bold text-4xl pl-2"> Unsere Partner </div>
    <div class="pt-8">
      <div class="inline-flex pb-2">
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
      </div>
      <div class="inline-flex">
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
      </div>
    </div>
    <div class="text-red-xxx font-bold text-2xl pt-8 pl-2"> Unsere F&ouml;rderer </div>
    <div class="pt-8 pb-24">
      <div class="inline-flex">
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
        <div class="inline"> <img src="Images/partner_empty.PNG" alt="partner_empty" class="h-40"> </div>
      </div>
    </div>
  </div>
  <div class="bg-red-x">
    <div class="pl-40 pt-12 pb-20">
      <div class="text-gray-100 text-5xl font-bold pb-4"> Sie m&ouml;chten auch Partner werden? </div>
      <div class="text-gray-100 text-sm font-normal w-4/12 pb-12"> Lassen Sie sich kostenlos beraten bez&uuml;glichst einer Kooperation zwischen Ihnen und humba, welche sicherlich mehrwert in Ihrem Unternehmen/Verein bringt. Bewerben k&ouml;nnen Sie
        sich solange Sie im Bereich Tegel ans&auml;ssig sind und Lebensmittel, Gastro oder Entertainment bzw. Aktivit&auml;ten anbieten. F&uuml;r anderweitige Anfragen bitte partner@hu.mba konsultieren. </div>
      <a class="bg-gray-800 shadow-lg text-center hover:shadow-outline rounded-xl px-24 text-xl font-bold py-4 text-white" href="mailto:partners@hu.mba"> Jetzt Termin vereinbaren </a>
    </div>
  </div>
  <div class="pl-40 py-24">
    <div class="text-red-xxx font-bold text-5xl pb-4"> Das Partner Modell </div>
    <div class="text-gray-500 w-6/12 text-md font-semibold"> Um unseren Nutzern ein reibungsloses Nutzungserlebnis zu bieten, werden wir von verschiedenen Partnern unterst&uuml;tzt. Dieses Modell funktioniert auf einem Provisionssystem. Der Mehrwert
      f&uuml;r die Partner besteht darin, dass keine Eingangskosten bestehen, um ihre Unternehmen bei uns anzeigen zu lassen und unserer bis zu 1300 Menschen starken Zielgruppe ihre Dienstleistungen und Produkte anzubieten.<br><br> F&uuml;r mehr
      Informationen vereinbaren Sie bitte einen Termin mit unserem Salesteam. Klicken Sie <a href="formular.php" class="text-red-xxx">hier</a>, um direkt zum Formular zu gehen. </div>
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
