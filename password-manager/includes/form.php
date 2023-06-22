<div id="form123" class="center color ">
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4 headline">Richiedi informazioni</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5 textstatic">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="contform">


            <!--Grid column-->
            <div class="col-md-9 m-5 mb-md-0 mb-5 marsis">
                <form id="contact-form" name="contact-form" action="./mail" method="POST">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Nome</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                            </div>
                             <div class="form-group">
                                <label for="phone">Numero di telefono</label>
                                <input type="tel" name="phone" id="phone" class="form-control" minlength="10" maxlength="13" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <label for="lastname">Cognome</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Messagio</label>
                        <input type="text" name="message" id="message" class="form-control width col-md-12 " required>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-rounded red mt-5" type="submit">Invia richiesta</button>
                    </div>
                </form>
            </div>
           
        </div>
    </section>
</div>

<!--Section: Contact v.2-->