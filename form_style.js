$(document).ready(function()
{
 $("#add_customer_show").click(function(){
  showpopup();
 });
 $("#add_customer_hide").click(function(){
  hidepopup();
 });
});

function showpopup()
{
 $("#add_customer_form").fadeIn();
 $("#add_customer_form").css({"visibility":"visible","display":"block"});
}

function hidepopup()
{
 $("#add_customer_form").fadeOut();
 $("#add_customer_form").css({"visibility":"hidden","display":"none"});
}