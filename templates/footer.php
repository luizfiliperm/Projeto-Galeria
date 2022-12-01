<footer>
    <link rel="stylesheet" href="templates/static/css/footer.css">
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title"><i class="fa fa-phone-volume"></i> Fale conosco</h3>
                        <h5>Galery Gatito!</h5>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-title">Ligue para:</span> (33) 4002-8922</p>
                        <p><span class="contact-title">Horarios:</span> 08:00 - 19:00</p>
                    </div>

                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-title">Email de contato:</span> LeV_agency@gmail.com</p>
                    </div>

                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-title">Venha tomar um cafezin:</span> Rua dos bobos - 123</p>
                    </div>
                    <div class="col-md-6" id="msg-box"> 
                        <p>Ou nos deixe uma mensagem: </p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form method="POST" action="admin/includes/saveMessage.php">
                            <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                            <input type="text" class="form-control" placeholder="Assunto" name="subject" required>
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem" name="message" required></textarea>
                            <input type="submit" class="main-btn" value="enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="https://github.com/Flygoff/Projeto-Galeria" target="_blank">L&V Agency</a> &copy; 2022</p>
                    </div>    
                </div>
            </div>
        </div>
    </footer>

   
   <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>