<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
<!-- jQuery ,bootstrap and any 3rd party script should be compiled into all.js -->
<script src="{{asset('js/front/all.js')}}"></script>
<script src="{{asset('js/front/jquery.min.js')}}"></script>

<!--this is the file html team has given, don't minify or compile it-->
<!-- <script src="{{asset('js/front/custom.js')}}"></script> -->
<!--DNE-->
<script src="{{asset('js/public.js')}}"></script>
<script src="{{asset('js/ycommon.js')}}"></script>


    <script src="{{asset('/js/slick.js')}}"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="{{asset('/js/custom.j')}}s"></script>
    <script src="{{asset('/js/theme.js')}}"></script>
    <script src="{{asset('js/front/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/front/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('dash/js/jquery.toast.js')}}"></script>
    <script src="https://kit.fontawesome.com/b8c4e50b83.js?ver=1.0.0"></script>
    

<script type="text/javascript">
(function($){
  $.fn.visible = function(partial){
      var $t        = $(this),
        $w        = $(window),
        viewTop     = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top      = $t.offset().top,
        _bottom     = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;  
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
    };
})(jQuery);
$(document).ready(function(){
showvisible();
$(window).scroll(function(){
        setTimeout(function(){ showvisible() }, 100);
    });
});
function showvisible(){
$('img').each(function(){
var visible = $(this).visible('partial');
var elem = $(this);
if (!elem.prop('complete')) {
  elem.on('load', function() {
    //console.log(this.complete);
  });
} else {
}
if(visible) { 
$(this).attr('src',$(this).data('url'));
}
});
}
</script>
@if(is_adminiy())
  <script src="{{asset('admin/vendors/ckeditor/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/content-management.js') }}"></script>
@endif