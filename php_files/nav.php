
<link href="assets/css/search.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<nav class=" fixed-top navbar navbar-light navbar-expand-md navigation-clean" style="">
    <div class="container"><a class="navbar-brand" href="#">VGR-PRO</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
        id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="game.php">Games&nbsp;</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="game.php">Games</a><a class="dropdown-item" role="presentation" href="news.php">News</a><a class="dropdown-item" role="presentation" href="#"></a></div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="collection.php">Collection</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="CodeIgniter/users/account"><i class="fa fa-user"></i></a></li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" href="#" id="addClass"><i class="fa fa-search"></i></span></a>
                </li>

            </ul>
        </div>
    </div>

 </nav>


         <div id="qnimate" class="off">
             <div id="search" class="open">
             <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
             <form action="http://bootsnipp.com/user/snippets/508jR" method="" autocomplete="off">
                     <input type="text" placeholder="Type search keywords here" value="" name="term" id="search_text">
             </form>
             <div id="result"></div>
             </div>
         </div>

 <script type="text/javascript">
 $(function(){
 $("#addClass").click(function () {
         $('#qnimate').addClass('popup-box-on');
           });

           $("#removeClass").click(function () {
         $('#qnimate').removeClass('popup-box-on');
           });
 });
 $(document).ready(function(){

  load_data();

  function load_data(query)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('#result').html(data);
    }
   });
  }
  $('#search_text').keyup(function(){
   var search = $(this).val();
   if(search != '')
   {
    load_data(search);
   }
   else
   {
    load_data();
   }
  });
 });

 </script>
