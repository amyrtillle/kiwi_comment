<script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("Vous devez sélectionner au moins un centre d'intérêt.");
        return false;
      }

    });
});

</script>