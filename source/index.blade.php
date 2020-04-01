@extends('_layouts.master')

@section('body')
<div id="page">
  <div class="bg-gray-800  h-screen p-16 lg:p-12 sm:p-0 sm:pl-6 sm:pt-16">
    <div class="">
      <div class=" inline-flex text-red-special font-bold text-md lg:text-base sm:text-xs md:text-xs ">
        <a class="inline m-auto pr-6 " href="home.htm"> <img class="h-12" src="/assets/images/logo.png" alt="Logo"> </a>
        <svg class="my-auto h-6 mr-8" width="126" height="16" viewBox="0 0 126 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9711 5.90425C14.0923 5.90425 15.7935 6.55319 17.0746 7.85106C18.3767 9.14894 19.0278 11.1064 19.0278 13.7234V23.6809H11.9081V14.9681C11.9081 12.9681 11.2046 11.9681 9.79742 11.9681C8.99934 11.9681 8.34828 12.2553 7.84424 12.8298C7.36119 13.383 7.11967 14.266 7.11967 15.4787V23.6809H0V0H7.11967V7.62766C8.44279 6.47872 10.0599 5.90425 11.9711 5.90425Z" fill="white"/><path d="M40.9585 6.2234V23.6809H34.1854V22.0213C33.5553 22.6808 32.8203 23.1809 31.9802 23.5213C31.1401 23.8404 30.2475 24 29.3024 24C27.1182 24 25.3646 23.3298 24.0414 21.9894C22.7183 20.6277 22.0567 18.5851 22.0567 15.8617V6.2234H29.1764V14.617C29.1764 15.8085 29.3654 16.6596 29.7435 17.1702C30.1215 17.6809 30.6781 17.9362 31.4131 17.9362C32.1062 17.9362 32.6837 17.6596 33.1458 17.1064C33.6078 16.5319 33.8389 15.6383 33.8389 14.4255V6.2234H40.9585Z" fill="white"/><path d="M66.9246 5.90425C69.0038 5.90425 70.6629 6.55319 71.902 7.85106C73.1622 9.14894 73.7922 11.1064 73.7922 13.7234V23.6809H66.6726V14.9681C66.6726 12.9681 66.032 11.9681 64.7509 11.9681C64.0788 11.9681 63.5328 12.2234 63.1127 12.734C62.7137 13.2447 62.5142 14.0532 62.5142 15.1596V23.6809H55.3945V14.9681C55.3945 12.9681 54.7539 11.9681 53.4728 11.9681C52.8008 11.9681 52.2547 12.2234 51.8347 12.734C51.4356 13.2447 51.2361 14.0532 51.2361 15.1596V23.6809H44.1164V6.2234H50.8896V7.85106C52.1707 6.55319 53.7984 5.90425 55.7725 5.90425C56.9276 5.90425 57.9672 6.12766 58.8913 6.57447C59.8154 7 60.5715 7.65957 61.1595 8.55319C61.8526 7.70213 62.6927 7.05319 63.6798 6.60638C64.6669 6.1383 65.7485 5.90425 66.9246 5.90425Z" fill="white"/><path d="M88.3793 5.90425C89.8915 5.90425 91.2776 6.2766 92.5377 7.02128C93.8188 7.74468 94.8269 8.79787 95.562 10.1809C96.3181 11.5426 96.6961 13.1277 96.6961 14.9362C96.6961 16.7447 96.3181 18.3404 95.562 19.7234C94.8269 21.1064 93.8188 22.1702 92.5377 22.9149C91.2776 23.6383 89.8915 24 88.3793 24C86.2581 24 84.683 23.4149 83.6539 22.2447V23.6809H76.8807V0H84.0004V7.40425C85.0085 6.40425 86.4681 5.90425 88.3793 5.90425ZM86.6782 18.383C87.4972 18.383 88.1693 18.0851 88.6944 17.4894C89.2194 16.8723 89.4819 16.0213 89.4819 14.9362C89.4819 13.8511 89.2194 13.0106 88.6944 12.4149C88.1693 11.8191 87.4972 11.5213 86.6782 11.5213C85.8591 11.5213 85.187 11.8191 84.662 12.4149C84.1369 13.0106 83.8744 13.8511 83.8744 14.9362C83.8744 16.0213 84.1369 16.8723 84.662 17.4894C85.187 18.0851 85.8591 18.383 86.6782 18.383Z" fill="white"/><path d="M106.226 5.90425C109.251 5.90425 111.561 6.59575 113.157 7.97872C114.753 9.34043 115.551 11.4468 115.551 14.2979V23.6809H108.936V21.383C108.117 23.1277 106.489 24 104.053 24C102.688 24 101.522 23.766 100.556 23.2979C99.6109 22.8085 98.8863 22.1596 98.3822 21.3511C97.8992 20.5213 97.6577 19.5957 97.6577 18.5745C97.6577 16.8511 98.3087 15.5426 99.6109 14.6489C100.913 13.7553 102.887 13.3085 105.533 13.3085H108.4C108.169 11.9468 107.088 11.266 105.155 11.266C104.378 11.266 103.591 11.3936 102.793 11.6489C101.995 11.883 101.312 12.2128 100.745 12.6383L98.4768 7.88298C99.4638 7.26596 100.65 6.78723 102.037 6.44681C103.444 6.08511 104.84 5.90425 106.226 5.90425ZM106.195 19.6596C106.699 19.6596 107.151 19.5213 107.55 19.2447C107.949 18.9681 108.243 18.5532 108.432 18V16.7872H106.668C105.218 16.7872 104.494 17.2766 104.494 18.2553C104.494 18.6596 104.641 19 104.935 19.2766C105.25 19.5319 105.67 19.6596 106.195 19.6596Z" fill="white"/><path d="M121.842 24C120.645 24 119.647 23.617 118.849 22.8511C118.072 22.0638 117.683 21.0638 117.683 19.8511C117.683 18.6383 118.072 17.6596 118.849 16.9149C119.647 16.1489 120.645 15.766 121.842 15.766C123.039 15.766 124.026 16.1489 124.803 16.9149C125.601 17.6596 126 18.6383 126 19.8511C126 21.0638 125.601 22.0638 124.803 22.8511C124.026 23.617 123.039 24 121.842 24Z" fill="white"/></svg>

        <a class="inline  m-auto px-6 lg:px-6 md:px-2 sm:px-2   hover:text-red-special" href="intro.html"> WIE ES FUNKTIONIERT </a>
        <a class="inline  m-auto px-6 hover:text-red-special" href="about.htm"> ABOUT </a>
        <a class="inline  m-auto px-6 hover:text-red-special" href="partner.html"> PARTNERS </a>
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
        <a class="inline" href="#unten"> <svg class="h-16 m-auto text-white fill-stroke" fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> </a>
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
            diese Zeit zu verbringen. Wenn deine Freunde nun keine Zeit haben ist es mit der Hilfe von Humba möglich Menschen, welche dennoch in deinem Alter sind, zu finden, welche auch frei haben. </div>
          <a class=" inline-block bg-gray-800 rounded-xl shadow-xl hover:shadow-outline font-semibold text-lg sm:text-sm lg:text-lg py-2 px-6" href='about.htm'> Ich möchte nicht allein sein </a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-800 h-x ">
    <div class="pt-32 lg:pt-12 sm:pt-12">
      <div class="inline-flex">
        <div class="inline w-8/12 pl-16 lg:pl-16 sm:pl-6">
          <div class="font-semibold text-red-xxx text-6xl lg:text-45xl sm:text-5xl xl:text-7xl  leading-tighter"> Rabatte bei Läden in deiner Umgebung? </div>
          <div class="  pt-8 pb-10 lg:pb-4 sm:pb-4 text-xl lg:text-base sm:text-sm text-gray-400 font-semibold w-10/12 lg:w-10/12 sm:w-full xl:text-xl  "> Das können wir dir bieten, indem wir mit einigen Partnern spezielle Angebote für
            unsere Nutzer ausgehandelt haben. Viel günstiger ist es dann für dich vorallem bei Essensläden. Als Benutzer von humba sparst du bis zu 30% bei deinem Einkauf in ausgewählten Partnerläden. Und das beste ist, dass
            du für jeden Einkauf Punkte bekommst, welche du später für noch mehr Angebote einlösen kannst. </div>
          <a class="text-gray-100 inline-block bg-red-x rounded-xl shadow-xl hover:shadow-outline font-semibold text-lg lg:text-lg sm:text-sm py-2 px-6  " href='about.htm'> Ich möchte günstiger essen </a>
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
          <div class="pt-8 pb-10 lg:pb-4 sm:pb-4 text-xl lg:text-base sm:text-sm  xl:text-xl font-semibold w-10/12"> Bestimmt, sonst würdest du sie ja nicht deine Freunde nennen - also hoffen wir. Auf humba ist es dir möglich dich sicher
            mit deinen Freunden zu verbinden und im Austausch mit diesen zu bleiben. </div>
          <a class="inline-block bg-gray-800   rounded-xl shadow-xl hover:shadow-outline font-semibold text-lg lg:text-lg sm:text-sm py-2 px-6 " href='register'> Ich mag meine Freunde </a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-800">
    <div class="text-center bg-gray-800 pt-16">
      <div class="pb-3"> <img src="/assets/images/logo.png" alt="Logo" class="mx-auto h-12"> </div>
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
