<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emails</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/echo.js', 'resources/css/email.css'])
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="emails emails-queue container p-3">
                    <form id="form">
                        <div class="emails-head">
                            <h4>Emails não enviados</h4>
                        </div>
                        <div class="emails-body" id="emails-body">

                        </div>
                        <div class="emails-footer">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary float-end ms-2">Enviar emails</button>
                                    <button id="add_email" type="button" class="btn btn-secondary float-end">Adicionar email</button>    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="emails emails-done container p-3">
                    <div class="emails-head">
                        <h4>Emails enviados</h4>
                    </div>
                    <div class="emails-body-done" id="emails-done">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

    var email_count = 0;

    document.getElementById("form").addEventListener("submit", function(e) {
        e.preventDefault();

        document.querySelectorAll('button').forEach(btn => btn.disabled = true);

        let formData = new FormData(this);

        fetch("{{ route('emailsQueue') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(response => response.json())
        .then(result => {
            console.log("Success:", result);
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });

    document.getElementById("add_email").addEventListener("click", function(e) {

        let email = `test${email_count}@test.com`

        let element = `
            <div class="row mb-2">
                <div class="col-12">
                    <input name="emails[]" class="form-control" type="email" value="${email}" readonly>
                </div>
            </div>
        `;

        document.getElementById('emails-body').insertAdjacentHTML( 'beforeend', element );

        email_count++;
    });

    window.addEventListener("load", function (event) {

        Echo.channel('email.progress').listen('EmailEvent', (data) => {

            document.querySelector(`input[value="${data.email}"]`).closest('.row.mb-2').remove();

            let element = `
                <div class="row mb-2">
                    <div class="col-12">
                        <input class="form-control" type="email" value="${data.email}" readonly>
                    </div>
                </div>
            `;

            document.getElementById('emails-done').insertAdjacentHTML( 'beforeend', element );

        });

        Echo.channel('email.completed').listen('EmailEvent', (data) => {
            document.querySelectorAll('button').forEach(btn => btn.disabled = false);
        });
    });


</script>
</html>