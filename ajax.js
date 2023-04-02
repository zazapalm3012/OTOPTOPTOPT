<script>
function showDetails (button){
  var product_id = button.id;
  $.ajax({
    url:  "details.php",
    method: "GET",
    data: {"product_id":product_id },
    success: function(response) {
      var product = JSON.parse(response);
      $("#pImage").text(product.pImage);

      $("#pName").text(product.pName);
      $("#pDetail").text(product.pDetail);
      $("#pPrice").text(product.pPrice);
        },
        error: function () {
            console.log('Failed ');
        }
  });
    
}
</script>

