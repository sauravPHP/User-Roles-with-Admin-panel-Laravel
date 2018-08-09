
<div id='cssmenu'>
<ul class="list-group">
   <li class='list-group-item active has-sub'><a href='#'><span>Roles</span></a>
      <ul>
         <li><a href="{{ url('admin/roles/create') }}"><span>Add Role</span></a></li>
         <li class='last'><a href='{{ url('admin/roles') }}'><span>All Roles</span></a></li>
      </ul>
   </li>
   <li class='list-group-item has-sub'><a href='#'><span>Users</span></a>
      <ul>
         <li><a href="{{ url('admin/users/create') }}"><span>Add User</span></a></li>
         <li class='last'><a href='{{ url('admin/users') }}'><span>All Users</span></a></li>
      </ul>
   </li>
   <li class='list-group-item has-sub'><a href='#'><span>Company</span></a>
      <ul>
         <li><a href='#'><span>About</span></a></li>
         <li><a href='#'><span>Test</span></a></li>
         <li class='last'><a href='#'><span>Location</span></a></li>
      </ul>
   </li>
   <li class='list-group-item last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
<script>
$(document).ready(function(){

$('#cssmenu > ul > li ul').each(function(index, e){
  var count = $(e).find('li').length;
  var content = '<span class=\"cnt\">' + count + '</span>';
  $(e).closest('li').children('a').append(content);
});
$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});

</script>