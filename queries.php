<html>
    <head>
       <title>Dishathon Queries </title>
       <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type='text/css' href='css/queries.css'>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	   <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/util.js"></script>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="/resources/demos/style.css">
   
       <script type='text/javascript' href="js/queries.js"></script>
      
        <script>
            var x = 1;
$(document).on('click', "#AddansId", function() {
  var idOfParent = $(this).closest('.panel-collapse').attr('id');
  //console.log(idOfParent);
  var answer = $(this).parent().prev().find('textarea').val();
  $(this).closest('.container').append(answer);
});

$(document).on('click', '#AddQuestId', function() {
  x = x + 1;
  $("#accordion").append('<div class="panel panel-default">' +
    '<div class="panel-heading">' +
    '<h4 class="panel-title"> ' +
    '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse' + x + '">' + $("#comment").val() + '</a>  </h4>' +
    '</div>' +
    '<div id="collapse' + x + '" class="panel-collapse collapse in">' +
    '<div class="panel-body">' +
    '<div class="container">  ' +
    ' <form>' +
    '<div class="form-group" >' +
    '<label for="comment">answer:</label>' +
    '<textarea class="form-control" rows="5" id="answer' + x + '"></textarea> ' +
    '  </div>' +
    ' <div style="float: right;"> <input type="button" class="btn btn-info" value="answer" id="AddansId"></div>' +

    '</form>' +
    '</div>' +
    'Account registration at <strong>PrepBootstrap</strong>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</h4>' +
    '</div>');
});
        </script>
  

    </head>

    <body>
        <div class="navbar">
            <div class='logo'>
                <img src="logo.png" height="100px" width="auto">
            </div>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="index.php" class="nav-item nav-link active">&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</a>
                            <a href="faq.php" class="nav-item nav-link">&nbsp;&nbsp;FAQs&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" class="nav-item nav-link">&nbsp;&nbsp;Add Queries&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" class="nav-item nav-link">&nbsp;&nbsp;Plan Activated&nbsp;&nbsp;&nbsp;</a>
                            <a href="signup.php" class="nav-item nav-link">&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;</a>
                            <a href="loginpage.php" class="nav-item nav-link">&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;</a>
                            <a href="about.php" class="nav-item nav-link">&nbsp;&nbsp;About us&nbsp;&nbsp;&nbsp;</a>
							<a href="contact.php" class="nav-item nav-link">&nbsp;&nbsp;Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <form class="form-inline">
                            <div class="input-group"> &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;                   
                               <input type="text" class="form-control" placeholder="Search">
                                   <div class="input-group-append">
                                       <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                            </div>
                        </form>
                    </div>
            </nav>
        </div>
        <div class="h3" style="margin-left:550px;">
        <h3> Add Your Queries </h3></div>    
      <br>
        </div>
        <div class="container">
     <form>
    <div class="form-group">
      <label for="comment">Add Question:</label>
      <textarea class="form-control" rows="3" id="comment"></textarea>
     </div>
     <div style="float: right;"> <input type="button" class="btn btn-info" value="Add Question" id="AddQuestId"></div>

     </form>
     </div>

     <div class="panel-group" id="accordion">
     </div>
       
       
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>


</html>
