        <div class="row justify-content-center bg-dark">
            <div class="Footer col-12 d-flex flex-row justify-content-center align-items-center">
                <a href="mailto:contactpizzaunlimited.online"><ion-icon name="mail"></ion-icon></a>
                <a href="https://www.instagram.com/royal69pizza" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="https://github.com/Royal69Pizza/pizzaunlimited" target = "_blank"><ion-icon name="logo-github"></ion-icon></a>
                <p class = "Marie">𝓙𝓮 𝓽'𝓪𝓲𝓶𝓮 𝓜𝓪𝓻𝓲𝓮...</p> <!-- 19/12/2021-->
            </div>
        </div>
    </div>

    <div class="modal fade" id="enCoursDeDev" tabindex="-1" role="dialog" aria-labelledby="enCoursDeDevArea" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="enCoursDeDevArea">La page est en cours de développement !</h5>
                <button type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">OK</span>
                </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">

	function enCoursDeDev(element) {
        var nomBouton = $(element).val()
        
        $(document).ready(function() {
            $("#enCoursDeDevArea").text("La page "+nomBouton+" est en cours de développement !");
            $("#enCoursDeDev").modal();
        });
    }

</script>

</body>
</html>