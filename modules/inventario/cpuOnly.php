<script>
  $(document).ready(function() {
    const inputDescripcion = document.querySelector("input[name='descripcion']");
    const btn = document.getElementById("btn-save");
    let valor = "default";
    let codigo = "";
    btn.addEventListener("click", function(e) {
      codigo = <?php echo $codigo ?>;
      if (codigo != "" && inputDescripcion.value === "Unidad central de proceso (CPU)") {
        console.log("code:" + codigo + " valor: " + inputDescripcion.value);
        $('#modalInterno').modal('show');
      } else {
        console.log("code:" + codigo + " valor: " + inputDescripcion.value);
      }
    });
  });
</script>