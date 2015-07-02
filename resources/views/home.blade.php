@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
                        <table style="padding: 20px 10px 20px 10px; margin: 10px; width: 93%; 
                            text-align: center; height: 366px;" align="center" >
                            <tbody><tr>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel1" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1" id="ctl00_ContentPlaceHolder1_ImageButton1" src="img/HomePage.png" alt="Accueil" onclick="#" style="border-width:0px;">
                                        
                                        <br>
                                        Accueil
  </div>
                                </td>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel2" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton4" id="ctl00_ContentPlaceHolder1_ImageButton4" src="img/GestionEtuds.png" alt="Gestion de mon compte" onclick="window.open('http://localhost:8000/employee');" style="border-width:0px;width: 50px; height: 50px; margin-right: 0px">
                                        <br>
                                        Gestion
  </div>
                                    
                                </td>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel3" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton9" id="ctl00_ContentPlaceHolder1_ImageButton9" src="img/GestionNotes.png" alt="Gestion des notes" onclick="window.open('http://localhost:8000/employee');" style="width:50px;border-width:0px;">
                                        <br>
                                        Employées
  </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel4" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton2" id="ctl00_ContentPlaceHolder1_ImageButton2" src="img/Chat%20(Custom).png" alt="Recherche" onclick="window.open('http://localhost:8000/employe_bureau');" style="border-width:0px;">
                                        <br>
                                        employe_bureau
  </div>
                                    
                                </td>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel5" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton6" id="ctl00_ContentPlaceHolder1_ImageButton6" src="img/GestionFrais.png" alt="Gestion des enseignants" onclick="window.open('http://localhost:8000/contrat');" style="border-width:0px;">
                                        <br>
                                       contrat 
  </div>
                                    
                                </td>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel6" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton5" id="ctl00_ContentPlaceHolder1_ImageButton5" src="img/GestionAbsence.png" alt="Gestion des absences" onclick="window.open('http://localhost:8000/conge');" style="width:50px;border-width:0px;"><br>
                                         Congé
  </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel7" style="height: 100%; opacity: 0.6;" class="">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton10" id="ctl00_ContentPlaceHolder1_ImageButton10" src="img/Favs.png" alt="Autre" onclick="window.location.assign('http://localhost:8000/admin/')" style="width:50px;border-width:0px;"><br>
                                        Autre
  </div>
                                    
                                </td>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel9" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton3" id="ctl00_ContentPlaceHolder1_ImageButton3" src="img/Contact2.png" alt="Contactez-nous" onclick="#" style="width:50px;border-width:0px;"><br>
                                        Contactez-nous
  </div>
                                    
                                </td>
                                <td>
                                    <div id="ctl00_ContentPlaceHolder1_Panel8" style="height: 100%; opacity: 0.6;">
    
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton8" id="ctl00_ContentPlaceHolder1_ImageButton8" src="img/Param.png" alt="Paramétrage" onclick="#" style="width:50px;border-width:0px;"><br>
                                        Paramétrage<br>
                                        
  </div>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                       
        </div>
      </div>
    </div>
  </div>


@endsection
