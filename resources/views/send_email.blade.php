
<!DOCTYPE html>
<html>
 <head>
  <title>Espace de messagerie</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
 
 body
{
margin:0;
padding:0;
font-family: sans-serif;
background: url('https://wallpapercave.com/wp/wp2105108.jpg');
background-size: cover;

}

.img
{
background: url('https://www.cci.univ-tours.fr/images/frontoffice/logo.png');
height: 100px;
width: 100px;
}

.box
{
  position: absolute;
  top:40%;
  left:50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 40px;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
}

.box h3 
{
  margin: 0 0 30px;
  padding: 0;
  text-align: center;
  font-color: white;

}

.box .inputBox
{
  position: relative;
}

.box .inputBox input
{
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border-bottom: 1px solid black;
  border-right: 1px solid black;
  background: transparent;
}
.box input[type="submit"]
{
  background:transparent;
  border: none;
  outline: none;
  background: #03a9f4;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

  </style>
 </head>
 <body>

  <div class="container box">
<br>
<center><img  src='https://www.cci.univ-tours.fr/images/frontoffice/logo.png' height = "100px" width = "100px"></center>
<br>
   <h3 align="center" font-size="blond">Espace de messagerie</h3><br />

       

<form method="POST" action="/sendemail/send">
    <input type="hidden" name="_token" value="C3tmrI7jncoPsqW3PkCRux7k4pQ0fErt3YTGgWBb">        

    <div class="form-group">
     <label>Ajouter Votre Nom</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Adresse du destinataire</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Votre Message</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <br>
    <div class="form-group">
     <input type="submit" name="Envoyer" class="btn btn-info" value="Envoyer" />
    </div>

 

   </form>
   
  </div>
 </body>
</html>