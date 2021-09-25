<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Fera - Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body align="center">
    <div class="container">
        <?php 
            if(isset($_GET['success'])){
                echo "<div class='alert alert-success'>Mensagem enviada com sucesso.</div>";
            } else if (isset($_GET['errors'])) {
                $errors = $_GET['errors'];
                //Barreira anti safadeza
                echo strip_tags("<div class='alert alert-danger'>$errors</div>", "<div><br>");
            }
            
        ?>
        <form method="POST"  action="Routes/send_information.php" id="contact_form" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                <div class="invalid-feedback" id="email-error">
                    Email is Required.
                </div>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
                <div class="invalid-feedback" id="telephone-error">
                    Telephone is Required.
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
                <div class="invalid-feedback" id="message-error">
                    Message is Required.
                </div>
            </div>
            <button type="submit" id="submit_btn" class="btn btn-primary">Send Message</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $("#submit_btn").click((event) => {
            event.preventDefault();
            let hasError = false;
            $("form#contact_form :input").each(function(){
                if(this.name !== ""){
                    let validation = validateField("#"+this.name);
                    if(validation){
                        hasError = true;
                    }
                }
            });
            if(!hasError){
                document.getElementById("contact_form").submit();
            }
        });

        function setError(field) {
            $(field).css("border-color", "red");
            $(field+"-error").show();
        }

        async function validateField(field) {
            if($(field).val() == ""){
                setError(field);
                setTimeout(() => {clearErrorMessage(field)}, 4000);
                return false;
            }
            return true;
        }

        function clearErrorMessage(field) {
            $(field).css("border-color", "");
            $(field+"-error").hide();
        }

    </script>
</body>

</html>