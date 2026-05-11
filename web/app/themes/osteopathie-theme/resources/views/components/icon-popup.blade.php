@php
  $bg_popup=get_field("bg-popup")
@endphp
 <dialog id="popup" class="popup" aria-labelledby="popup-title">

    <img src="{{ $bg_popup }}" alt="" class="absolute inset-0 w-full h-full object-cover z-0">

    

    <div class="popup__container relative z-20 p-4">
        <button class="popup__close font-bold outline-none" aria-label="Fermer">✕</button>
        <div class="popup__content h-full flex flex-col  items-center">
            
            <h2 id="popup-title" class="popup__title text-center mb-8  font-bold text-2xl"></h2>
            <div class= "h-full flex justify-center items-center">
            <p class="popup__text text-center text-base text-black"></p>
            </div>
            
        </div>
    </div>

</dialog>