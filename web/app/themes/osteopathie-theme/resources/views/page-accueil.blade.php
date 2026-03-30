@extends('layouts.app')

@section('content')
@php
$hero_photo= get_field("hero-photo"); 
$photo_presentation =get_field("photo-presentation"); 
$carte_cabinet=get_field("carte-cabinet"); 
$photo_bg_localisation=get_field("photo-bg-localisation"); 
$photo_osteo_nourrisson=get_field("osteo-nourrisson"); 
$photo_enceinte=get_field("osteo-enceinte"); 
$photo_senior=get_field("osteo-senior"); 
$pictogramme_senior= get_field("pictogramme-senior"); 
$pictogramme_bb= get_field("pictogramme-bb"); 
$pictogramme_enceinte= get_field("pictogramme-enceinte"); 
$pictogramme_sport= get_field("pictogramme-sport"); 
$pictogramme_enfant= get_field("pictogramme-enfant"); 
$photo_sport=get_field("osteo-sport"); 
$photo_enfant=get_field("osteo-enfant"); 

@endphp


    {{--<img src={{"$photo_presentation"}} 
        alt=""
        class="bg-img fixed cover w-full transform duration-500 transition-all ">--}}
        


<section >
       @if($hero_photo)
           <img src={{"$hero_photo" }}
             alt="cabinet osteopathie Castelnau-le-lez"
             class="absolut inset-0 cover w-full h-full"
             loading="lazy">
       @endif
     
        <div class="absolute inset-0 bg-base-200/20"></div>

        <div class="flex flex-col justify-center items-center absolute z-10 h-full w-full text-black" >
        <h1>Cabinet des centurions</h1>
        <h2 class="hero-page-subtitle">Ostéopathe à Castelnau-le-lez</h2>
        </div>
</section>

{{--<section class="bg-base-300/80 m-24 rounded-2xl">
        <div class= "absolute w-full h-full grid grid-cols-2 gap-16 justify-center items-center p-12">
                <div class="max-w-2/3 p-4 justify-center items-center  mx-auto">
                        <p class="page1-presentation  text-black">diplômée de kiné en 2007, puis d'osteopathie en 2015. J'ai exercé dans des centres de rééducatoin, dans des services de pédiatrie. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum quidem magnam placeat et quam repudiandae non porro rem, suscipit impedit hic eos excepturi cumque corrupti alias ipsum fuga obcaecati rerum!
                        </p>
                        <div class="presentation-CTA">
                              
                                
                                        <a href="https://www.doctolib.fr/osteopathe/castelnau-le-lez/rose-mary-guardia-alvarez" target="_blank" >
                                        <button class="btn  btn-success">Prendre rendez-vous</button>
                                        </a>
                                
                        
                        </div>
                        
                </div>
                <div class="max-w-2/3 p-4 relative h-full rounded-2xl overflow-hidden">
                        @if($photo_presentation)
                        <img src={{"$photo_presentation"}} 
                             alt="présentation Rose Mary Guardia Alvarez ostéopathe"
                             class="absolute inset-0 w-full h-full cover">
                                
                        @endif
                </div>
        </div>
</section>--}}

<section class="my-16">
<div class= "absolute w-full h-full grid grid-cols-2 gap-16 justify-center items-center p-12">
                <div class="max-w-2/3 p-4 justify-center items-center  mx-auto">
                        <p class="page1-presentation  text-black">diplômée de kiné en 2006, puis d'osteopathie en 2015. J'ai exercé dans des centres de rééducatoin, dans des services de pédiatrie. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum quidem magnam placeat et quam repudiandae non porro rem, suscipit impedit hic eos excepturi cumque corrupti alias ipsum fuga obcaecati rerum!
                        </p>
                        <div class="presentation-CTA">
                              
                                
                                        <a href="https://www.doctolib.fr/osteopathe/castelnau-le-lez/rose-mary-guardia-alvarez" target="_blank" >
                                        <button class="btn  btn-success">Prendre rendez-vous</button>
                                        </a>
                                
                        
                        </div>
                        
                </div>
                <div class="cadre h-full max-w-2/3 relative">
                 @if($photo_presentation)
                                <img src={{"$photo_presentation"}} 
                                alt="présentation Rose Mary Guardia Alvarez ostéopathe"
                                class="absolute inset-0 w-4/5 h-auto contain translate-y-16 -translate-x-16 shadow-lg ">
                                        
                                @endif
                        {{--<div class="-m-12 max-w-2/3  relative h-full  overflow-hidden ">
                               
                        </div>--}}
                </div>
                        
        </div>
</section>



{{--<section class="bg-base-300/90 m-24 rounded-2xl p-8 justify-center flex flex-col"> 
<h2 class="mx-auto mb-8">Comment se déroule une séance d'ostéopathie</h2>
        <div class="w-full h-full grid grid-cols-[1fr_2fr] gap-16 justify-between">
                <div class=" flex flex-col p-8 ">
                        <span class="relative span-1  circle-bb rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                        @if($photo_osteo_nourrisson)
                        
                         <img src={{"$photo_osteo_nourrisson"}}
                              alt="ostéopatie nourrisson" 
                              class="img-nourrisson absolute inset-0 h-full cover" >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>
                        @endif
                        </span>
                        
                        <span class="relative span-1 circle-femme rounded-full overflow-hidden transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer ">
                        @if($photo_enceinte)
                        
                         <img src={{"$photo_enceinte"}}
                              alt="ostéopatie femme enceinte" 
                              class="img-enceinte absolute inset-0 w-full cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                        </span>
                        <span class="relative span-1 circle-senior rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                         @if($photo_enceinte)
                        
                         <img src={{"$photo_senior"}}
                              alt="ostéopatie senior" 
                              class="img-senior absolute inset-0 h-full cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                        </span>
                        <span class="span-1"></span>
                </div>
                <div class= "details-container flex justify-center items-center  p-12 ">
                        <div class="detail-container absolute w-full h-full nourrisson-container border border-blue-400 ">
                                @if($photo_osteo_nourrisson)
                        
                                        <img src={{"$photo_osteo_nourrisson"}}
                                        alt="ostéopatie nourrisson" 
                                        class="absolute inset-0 h-full cover" >
                                <div class="absolute inset-0 bg-black/20  transform duration-100 transition-opacity ease-in-out hover:bg-black/10 "></div>
                                @endif
                                <div class="detail detail-bb ">
                                <h5 class="text-xl mb-8">Quels troubles/symptômes l’ostéopathe peut-il traiter ?</h5>
                                <ul class="space-y-6">
                                <li>Troubles neuro végétatifs : pleurs fréquents, troubles du sommeil, énervements, etc.</li>
                                <li>Troubles digestifs : coliques, constipation, RGO, régurgitations, etc.</li>
                                <li>Troubles ORL : succion difficile, bronchiolite (en complément du traitement médical et kinésithérapeute si besoin), otites à répétition, laryngite, rhinite, etc.</li>
                                <li>Troubles musculo-squelettiques : plagiocéphalie (déformation du crâne, tête plate, asymétrie de la face), torticolis congénital (le bébé ne tourne la tête que d’un côté), etc.</li>
                                <li>Pensez à apporter le carnet de santé de votre nourrisson afin que l’ostéopathe dispose de toutes les informations nécessaires au bon déroulement de la consultation.</li>
                                </ul>
                
                        </div>
                        </div>
                        <div class="detail-container absolute w-full h-full enceinte-container ">
                                @if($photo_osteo_nourrisson)
                        
                                        <img src={{"$photo_enceinte"}}
                                        alt="ostéopatie femme enceinte" 
                                        class="absolute inset-0 w-full cover" >
                                <div class="absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>
                                @endif
                                <div class="detail detail-femme ">
                                <p>Durant leur grossesse, les femmes sont fréquemment touchées par de nombreux symptômes dû aux changements importants de leur corps : maux de dos, lombalgies, sciatiques, douleurs au coccyx etc… L’ostéopathe va soulager la femme enceinte grâce à des techniques douces et appropriées pour elle et son bébé.</p>
                                <h5 class="text-xl mb-8">Pourquoi consulter un ostéopathe pendant une grossesse ?</h5>
                                <p class="font-bold">Pour Améliorer le confort pendant la grossesse</p>
                                <ul>
                                <li>Maux de dos, sciatiques, douleurs du pubis, du coccyx.</li>
                                <li>Présence d’oedèmes, douleurs de la sphère périnéale</li>
                                <li>Nausées, vomissements, problèmes digestifs</li>
                                <li>Fatigue.</li>
                                </ul>
                                <p class="font-bold">
                                Pour Préparer l’accouchement
                                </p>
                                <p>
                                L’ostéopathie est un bon complément aux cours de préparation à l’accouchement. La naissance est un moment intensément fatigant, où votre corps doit faire preuve d’une grande faculté d’adaptation et de déformation. L’ostéopathe pourra s’assurer que la mobilité de votre bassin est bonne, ainsi que l’alignement de votre colonne vertébrale. Un travail débuté au plus tôt permettra de diminuer les obstacles mécaniques (bassin pas assez relâché, muscles contractés) que votre bébé doit franchir pour voir le jour.
                                </p>

                                </div>
                        </div>

                        <div class="detail detail-senior detail-container senior-container ">
                                <p>Durant leur grossesse, les femmes sont fréquemment touchées par de nombreux symptômes dû aux changements importants de leur corps : maux de dos, lombalgies, sciatiques, douleurs au coccyx etc… L’ostéopathe va soulager la femme enceinte grâce à des techniques douces et appropriées pour elle et son bébé.</p>
                                <h5 class="text-xl mb-8">Pourquoi consulter un ostéopathe pendant une grossesse ?</h5>
                                <p class="font-bold">Pour Améliorer le confort pendant la grossesse</p>
                                <ul>
                                <li>Maux de dos, sciatiques, douleurs du pubis, du coccyx.</li>
                                <li>Présence d’oedèmes, douleurs de la sphère périnéale</li>
                                <li>Nausées, vomissements, problèmes digestifs</li>
                                <li>Fatigue.</li>
                                </ul>
                                <p class="font-bold">
                                Pour Préparer l’accouchement
                                </p>
                                <p>
                                L’ostéopathie est un bon complément aux cours de préparation à l’accouchement. La naissance est un moment intensément fatigant, où votre corps doit faire preuve d’une grande faculté d’adaptation et de déformation. L’ostéopathe pourra s’assurer que la mobilité de votre bassin est bonne, ainsi que l’alignement de votre colonne vertébrale. Un travail débuté au plus tôt permettra de diminuer les obstacles mécaniques (bassin pas assez relâché, muscles contractés) que votre bébé doit franchir pour voir le jour.
                                </p>

                                </div>
                        
                        
                </div>
        </div>


</section>--}}
<section class=" justify-center flex-col ">
        <div class="flex justify-center mb-16">
                <h2 class="mb-8">L'ostéopathie, pour qui?</h2>
        </div>
        <div class="flex gap-12  justify-center">
                <span class=" icone-enceinte relative span-1  circle-bb rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                        @if($pictogramme_enceinte)
                        
                         <img src={{"$pictogramme_enceinte"}}
                              alt="ostéopathie enceinte" 
                              class="img-senior absolute inset-0 w-full object-cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                </span>
                <span class="icone-bébé relative span-1  circle-bb rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                        @if($pictogramme_bb)
                        
                         <img src={{"$pictogramme_bb"}}
                              alt="ostéopathie bébé" 
                              class="img-senior absolute inset-0 h-full object-cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                </span>
                <span class="icone-senior relative span-1  circle-bb rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                        @if($pictogramme_senior)
                        
                         <img src={{"$pictogramme_senior"}}
                              alt="osteopathie senior" 
                              class="img-senior absolute inset-0 h-full object-cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                </span>
                <span class="icone-sport relative span-1  circle-bb rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                        @if($pictogramme_sport)
                        
                         <img src={{"$pictogramme_sport"}}
                              alt="osteopathie sportif" 
                              class="img-senior absolute inset-0 h-full object-cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                </span>
                <span class="icone-enfant relative span-1  circle-bb rounded-full overflow-hidden  transform duration-200 transition-all ease-in-out hover:scale-105 hover:cursor-pointer">
                        @if($pictogramme_enfant)
                        
                         <img src={{"$pictogramme_enfant"}}
                              alt="osteopathie enfant adolescent" 
                              class="img-senior absolute inset-0 h-full object-cover center " >
                              <div class=" absolute inset-0 bg-black/20 transform duration-100 transition-opacity ease-in-out hover:bg-black/10"></div>

                        @endif
                </span>
               
                
        </div>
        <div class="relative flex  h-2/3 w-full justify-center items-center">
                <div class="flex flex-col justify-center container-circle absolute  p-28 detail-container enceinte-container ">
                                <div class="flex flex-col justify-end items-center text-white z-150  p-28 ">
                                <h5 class="text-3xl mb-8">Pourquoi consulter un ostéopathe pendant une grossesse ?</h5>
                                <p class="font-bold">Pour Améliorer le confort pendant la grossesse</p>
                                <ul class="space-y-4">
                                <li>Maux de dos, sciatiques, douleurs du pubis, du coccyx.</li>
                                <li>Présence d’oedèmes, douleurs de la sphère périnéale</li>
                                <li>Nausées, vomissements, problèmes digestifs</li>
                                <li>Fatigue.</li>
                                </ul>
                                <p class="font-bold">
                                Pour Préparer l’accouchement
                                </p>
                                

                                </div>
                       <img src={{"$photo_enceinte"}}
                                        alt="ostéopatie femme enceinte" 
                                        class="absolute inset-0 w-full object-cover" >
                        
                </div>
                <div class="flex flex-col justify-center container-circle absolute p-28  detail-container bébé-container">
                        <div class="flex flex-col justify-center items-center text-white  z-150  p-28 ">
                                <h5 class="text-xl mb-8">Quels troubles/symptômes l’ostéopathe peut-il traiter ?</h5>
                                <ul class="space-y-4 font-bold ">
                                <li>Troubles neuro végétatifs : pleurs fréquents, troubles du sommeil, énervements, etc.</li>
                                <li>Troubles digestifs : coliques, constipation, RGO, régurgitations, etc.</li>
                                <li>Troubles ORL : succion difficile, bronchiolite (en complément du traitement médical et kinésithérapeute si besoin), otites à répétition, laryngite, rhinite, etc.</li>
                                <li>Troubles musculo-squelettiques : plagiocéphalie (déformation du crâne, tête plate, asymétrie de la face), torticolis congénital (le bébé ne tourne la tête que d’un côté), etc.</li>
                                <li>Pensez à apporter le carnet de santé de votre nourrisson afin que l’ostéopathe dispose de toutes les informations nécessaires au bon déroulement de la consultation.</li>
                                </ul>
                        </div>
                       <img src={{"$photo_osteo_nourrisson"}}
                                        alt="ostéopatie nourrisson" 
                                        class="absolute inset-0 w-full h-full object-cover" >
                </div>
                <div class=" flex flex-col justify-center container-circle absolute p-28 bg-blue-500  detail-container senior-container">
                        <div class="flex flex-col justify-center items-center text-white  z-150  p-28 ">

                        </div>
                        <img src={{"$photo_senior"}}
                                        alt="ostéopatie senior" 
                                        class="absolute inset-0 w-full h-full object-cover" >
                </div>
                <div class="flex flex-col justify-center container-circle absolute p-28 detail-container sport-container">
                        <div class="flex flex-col justify-center items-center text-white  z-150  p-28 ">
                                <h5 class="text-xl mb-8">Quels troubles/symptômes l’ostéopathe peut-il traiter ?</h5>
                                <ul class="space-y-4 font-bold ">
                                <li>Troubles neuro végétatifs : pleurs fréquents, troubles du sommeil, énervements, etc.</li>
                                <li>Troubles digestifs : coliques, constipation, RGO, régurgitations, etc.</li>
                                <li>Troubles ORL : succion difficile, bronchiolite (en complément du traitement médical et kinésithérapeute si besoin), otites à répétition, laryngite, rhinite, etc.</li>
                                <li>Troubles musculo-squelettiques : plagiocéphalie (déformation du crâne, tête plate, asymétrie de la face), torticolis congénital (le bébé ne tourne la tête que d’un côté), etc.</li>
                                <li>Pensez à apporter le carnet de santé de votre nourrisson afin que l’ostéopathe dispose de toutes les informations nécessaires au bon déroulement de la consultation.</li>
                                </ul>
                        </div>
                        <img src={{"$photo_sport"}}
                                        alt="ostéopatie sportif" 
                                        class="absolute inset-0 w-full h-full object-cover" >
                </div>
                <div class="flex flex-col justify-center container-circle absolute p-28 detail-container enfant-container">
                        <div class="flex flex-col justify-center items-center text-white  z-150  p-28 ">
                                <h5 class="text-xl mb-8">Quels troubles/symptômes l’ostéopathe peut-il traiter ?</h5>
                                <ul class="space-y-4 font-bold ">
                                <li>Troubles neuro végétatifs : pleurs fréquents, troubles du sommeil, énervements, etc.</li>
                                <li>Troubles digestifs : coliques, constipation, RGO, régurgitations, etc.</li>
                                <li>Troubles ORL : succion difficile, bronchiolite (en complément du traitement médical et kinésithérapeute si besoin), otites à répétition, laryngite, rhinite, etc.</li>
                                <li>Troubles musculo-squelettiques : plagiocéphalie (déformation du crâne, tête plate, asymétrie de la face), torticolis congénital (le bébé ne tourne la tête que d’un côté), etc.</li>
                                <li>Pensez à apporter le carnet de santé de votre nourrisson afin que l’ostéopathe dispose de toutes les informations nécessaires au bon déroulement de la consultation.</li>
                                </ul>
                        </div>
                        <img src={{"$photo_enfant"}}
                                        alt="ostéopatie enfant adolescent" 
                                        class="absolute inset-0 w-full h-full object-cover" >
                </div>
        </div>


</section>


{{--<section class="my-16  ">

       

        <div class=" w-full h-full grid grid-cols-2  justify-end items-center p-12">
                <div class="relative flex justify-center items-center cadre w-2/3 h-2/3 ">

                        <div class="left-1 absolute flex bg-white flex-col text-black w-full p-16 justify-center h-3/4  ml-24 ">
                                <h2 class="mb-6">Le cabinet</h2>
                                <h3 class="mb-4">57 Avenue des Centurions, 34170 Castelnau-le-Lez</h3>
                                <div class='mb-4'>
                                        <h4 class="underline">Moyens de transport</h4> 
                                        <p>
                                        Tramway - Centurions (ligne 2)<br>
                                        Bus - Sapins (ligne 35)<br>
                                        Bus - Décurions (ligne 35)<br>
                                        </p>
                                </div>       
                                <div>
                                        <h4 class="underline"> Informations pratiques</h4>
                                        <p>
                                        Entrée accessible<br>
                                        Parking gratuit<br>
                                        </p>
                                </div>
                        </div>
                </div>
                
                <div class="right-0 cadre max-w-3/4 h-full  flex relative  items-center">
                        @if($carte_cabinet)
                        <img src={{"$carte_cabinet"}} 
                        alt="localisation avenue des centurions Castelnau le lez"
                        class="absolute max-w-full h-auto contain -mx-24">
                        
                        @endif
               
                </div>
        </div>
</section>--}}

<section class="my-16   ">

       

        <div class="mx-16 relative w-full grid grid-cols-[40%_33%] justify-between  items-center ">
                <div class=" cadre flex items-center h-1/2  ">

                        <div class="cadre-info   bg-white text-black p-8 pr-44  ml-40 ">
                                <h2 class="mb-6 ">Le cabinet</h2>
                                <h3 class="mb-6">57 Avenue des Centurions, 34170 Castelnau-le-Lez</h3>
                                <div class="mb-4">
                                        <h4 class="underline">Moyens de transport</h4> 
                                        <p>
                                        Tramway - Centurions (ligne 2)<br>
                                        Bus - Sapins (ligne 35)<br>
                                        Bus - Décurions (ligne 35)<br>
                                        </p>
                                </div>       
                                <div>
                                        <h4 class="underline"> Informations pratiques</h4>
                                        <p>
                                        Entrée accessible<br>
                                        Parking gratuit<br>
                                        </p>
                                </div>
                        </div>
                </div>
                
                <div class="cadre-map flex items-center cadre h-4/5 ">
                        @if($carte_cabinet)
                        <img src={{"$carte_cabinet"}} 
                        alt="localisation avenue des centurions Castelnau le lez"
                        class="img-map h-2/3 -ml-28 shadow-xl">
                        
                        @endif
               
                </div>
        </div>
</section>