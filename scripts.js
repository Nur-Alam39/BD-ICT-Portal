//for teacher
$(document).ready(function(){

 $('.userinfo').click(function(){
   var id = this.id;
   var splitid = id.split('_');
   var userid = splitid[1];

   // AJAX request
   $.ajax({
    url: 'ajaxfile.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      // Add response in Modal body
      $('#teacher').html(response);

      // Display Modal
      $('#empModal').modal('show'); 
    }
  });
 });
});

//for single news
$(document).ready(function(){
 $('.news_detail').click(function(){
   var id = this.id;
   var splitid = id.split('_');
   var newsid = splitid[1];

   // AJAX request
   $.ajax({
    url: 'newsfile.php',
    type: 'post',
    data: {newsid: newsid},
    success: function(response){ 
      // Add response in Modal body
      $('#news').html(response);

      // Display Modal
      $('#ModalforNews').modal('show'); 
    }
  });
 });
});

//for all news
$(document).ready(function(){

 $('.All_news_detail').click(function(){
   var id = this.id;
   var splitid = id.split('_');
   var newsid = splitid[1];

   // AJAX request
   $.ajax({
    url: 'allnews.php',
    type: 'post',
    data: {newsid: newsid},
    success: function(response){ 
      // Add response in Modal body
      $('#news').html(response);

      // Display Modal
      $('#ModalforNews').modal('show'); 
    }
  });
 });
});

//link hover text
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
})