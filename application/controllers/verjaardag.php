<?php

class verjaardag extends CI_Controller {


	public function index()
	{
	    /*dit laat de index pagina zien waar de gebruiker als eerst komt met de data van de database*/
	    $data['dataview'] = $this->home_model->read();
        $this->load->view('kalender', $data);
	}

	public function verjaardag_toevoegen()
	{
        /*Dit laad de php file create_birthdays in */
        $this->load->view('create_birthdays');
        if (!empty($_POST)){
            $person = $this->input->post('person');
            $day = $this->input->post('day');
            $month  = $this->input->post('month');
            $year = $this->input->post('year');
            /*als alles goed is dan voert hij alles uit en voegt het toe aan de database*/
            if ($person && $day && $month && $year){
                $data = array(
                    'person' => $person,
                    'day' => $day,
                    'month' => $month,
                    'year' => $year
                );
            }
            //model word automatisch geladen in de autoloader(core/autoloader)
            $this->home_model->insert($data);
        }
	}

    public function verjaardag_aanpassen()
    {
        /*Laat het model in en daarna geef ik aan dat het ID in de 3e plaats bevind in de url*/
        $this->load->model("home_model");
        $id = $this->uri->segment(3);
//        $data['metadata'] = $this->home_model->read();
        /*Dit laat het id zien van de record die je aan het aanpassen bent.*/
        $data['id'] = $this->home_model->id_laten_zien($id);
        /*Dit laat de php file genaamd verjaardag_aanpassen*/
        $this->load->view('verjaardag_aanpassen', $data);

    }

    public function update()
    {
        var_dump($_POST );
        /*Laad het model in en dan declare ik de variable aan het ingevulde in de input zodat ik het daarna kan doorgeven aan de database*/
        $this->load->model('home_model');
        $id = $this->input->post('id');
        $person = $this->input->post('person');
        $day = $this->input->post('day');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $data = array(
            'person' => $person,
            'day' => $day,
            'month' => $month,
            'year' => $year
        );


        $this->home_model->update($id,$data);
        redirect('index');
    }

	public function verjaardag_verwijderen($id)
    {
	    //model hij word geautoload in de config
        $this->load->model('home_model');
        /*Verijderd de record met het id wat is geselecteert uit de database*/
        $this->home_model->delete($id);
        redirect("verjaardag/index");
    }


}

