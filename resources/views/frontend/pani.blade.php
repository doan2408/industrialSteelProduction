@if ($paginator->hasPages())    
<ul class="pagination">       
     @if ($paginator->onFirstPage())       
     <li class="previous" aria-disabled="true" aria-label="@lang('pagination.previous')">      
	 <a class=""><i class="fa-regular fa-chevron-left"></i></a>         
	 </li>       
	 @else  
	 <li class="previous">        
	 <a class="" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa-regular fa-chevron-left"></i></a>
	 </li>       
	 @endif        
     @foreach ($elements as $element)      
	 @if (is_string($element))       
	 <li class="" aria-disabled="true"><a class="">{{ $element }}</a></li>   
	 @endif                  
	 @if (is_array($element))    
	 @foreach ($element as $page => $url)         
	 @if ($page == $paginator->currentPage())        
	 <li class="active "><a class="  ">{{ $page }}</a></li>      
	 @else                
	 <li class=""><a class="" href="{{ $url }}">{{ $page }}</a></li>    
	 @endif          
	 @endforeach   
	 @endif     
	 @endforeach      
	 @if ($paginator->hasMorePages())    
	 <li class="next">             
	 <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa-regular fa-chevron-right"></i></a>        
	 </li>      
	 @else    
	 <li class="next" aria-disabled="true" aria-label="@lang('pagination.next')">     
	 <a class=""><i class="fa-regular fa-chevron-right"></i></a>     
	 </li>     
	 @endif
 </ul>
 @endif