<style>
    li{
        list-style: disc;
    }
</style>

    <h2 id="accordion-color-heading-{{$numero}}">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-gray-800 bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white" data-accordion-target="#accordion-color-body-{{$numero}}" aria-expanded="false" aria-controls="accordion-color-body-{{$numero}}">
        <span>{{$titulo}}</span>
        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-color-body-{{$numero}}" class="hidden" aria-labelledby="accordion-color-heading-{{$numero}}">
      <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <p class="mb-2 text-gray-500 dark:text-gray-400">{!!$contenido!!}</p>
      </div>
    </div>
