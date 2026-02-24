@extends('layouts.app')

@section('content')
@php
$hero_photo= get_field("hero-photo"); 
$photo_presentation =get_field("photo-presentation"); 
$carte_cabinet=get_field("carte-cabinet"); 
$photo_bg_localisation=get_field("photo-bg-localisation")
@endphp

@if($photo_presentation)
    <img src={{"$photo_presentation"}} 
        alt=""
        class="fixed cover w-full">
        
@endif

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

<section class="bg-base-300/80 m-24 rounded-2xl">
        <div class= "absolute w-full h-full grid grid-cols-2 gap-16 justify-center items-center p-12">
                <div class="max-w-2/3 p-4 justify-center items-center  mx-auto">
                        <p class="page1-presentation  text-black">diplômée de kiné en 2007, puis d'osteopathie en 2015. J'ai exercé dans des centres de rééducatoin, dans des services de pédiatrie. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum quidem magnam placeat et quam repudiandae non porro rem, suscipit impedit hic eos excepturi cumque corrupti alias ipsum fuga obcaecati rerum!
                        </p>
                        <div class="presentation-CTA">
                              
                                <button class="btn  btn-success">Prendre rendez-vous</button>
                        
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
</section>

<section class="bg-base-300/90 m-24 rounded-2xl">
<h2>Comment se déroule une séance d'ostéopathie</h2>


</section>
<section class=" bg-base-300 ">

       @if($photo_bg_localisation)
        <img src={{"$photo_bg_localisation"}}  
             alt=""
             class=" absolute inset-0 cover w-full h-full">
       @endif 

 <div class="absolute inset-0 bg-black/20"></div>
      


        <div class="absolute text-white w-full h-full grid grid-cols-2 gap-16 justify-center items-center p-12"">
                <div class="flex  flex-col bg-black/60 rounded-2xl max-w-full p-16 justify-center items-start h-auto mx-auto">
                        <h2 class="mb-6">Contact</h2>
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
                <div class="max-w-3/4 flex p-4 relative justify-center h-auto  items-center">
                @if($carte_cabinet)
                <img src={{"$carte_cabinet"}} 
                     alt="localisation avenue des centurions Castelnau le lez"
                     class=" w-full h-auto cover">
                   
                @endif
               
                </div>
        </div>
</section>