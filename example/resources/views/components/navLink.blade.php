     @props(['href','active'=>false, ])
<li    class="{{ $active? 'bg-gray-900 text-white rounded-md list-none' : 'text-gray-300 hover:bg-gray-700 rounded-md list-none '}}" aria-current={{$active? 'page':false}}>
           <a href="{{ $href }}">
     {{$slot}}
     </a>
        