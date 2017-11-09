<?php

/* BenDoctorsBundle:Person:form.html.twig */
class __TwigTemplate_04b0c01419ba0b070d5b0e573f10c32f7821e13a1420080e98cf3c4ab523fd09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<legend>Patient identity</legend>  
  
  ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'row', array("label" => "Firstname"));
        echo "
  ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "familyname", array()), 'row', array("label" => "Surname"));
        echo "
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'row', array("label" => "Date of birth"));
        echo "
  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthcity", array()), 'row', array("label" => "Place of birth"));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", array()), 'row', array("label" => "Sex"));
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contry", array()), 'row', array("label" => "Nationality"));
        echo "
  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'row', array("label" => "ID"));
        echo "
  ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cne", array()), 'row', array("label" => "FID"));
        echo "

<legend>General informations</legend>
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "university", array()), 'row', array("label" => "University"));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etablissement", array()), 'row', array("label" => "High school"));
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "resident", array()), 'row', array("label" => "Resident ?"));
        echo "
  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'row', array("label" => "Adress"));
        echo "
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parentAddress", array()), 'row', array("label" => "Adress of parents"));
        echo "
  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'row', array("label" => "City"));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gsm", array()), 'row', array("label" => "Cell"));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("label" => "E-Mail"));
        echo "
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cnsstype", array()), 'row', array("label" => "Medical insurance"));
        echo "
  ";
        // line 23
        echo "
  <legend>Kin</legend>
  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parentName", array()), 'row', array("label" => "Full name"));
        echo "
  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parentGsm", array()), 'row', array("label" => "Office number"));
        echo "
  ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parentFixe", array()), 'row', array("label" => "Home number"));
        echo "

  <legend>Handicap</legend>
  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ishandicap", array()), 'row', array("label" => "Disability ?"));
        echo "
  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "handicap", array()), 'row', array("label" => "Nature of disability"));
        echo "
  ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "needs", array()), 'row', array("label" => "Needs"));
        echo "
  ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo " 
      

  <script type=\"text/javascript\">

      var universityData = \"Richfield Graduate Institute of Technology_University of Johannesburg_UNIKIN_Université Abdelmalek Essaâdi Tétouan_Université Cadi Ayyad Marrakech_Université Chouaïb Doukkali El Jadida_Université Hassan I Settat_Université Hassan II Aïn Chock/Casablanca_Université Hassan II Mohammadia_Université Ibn Tofaïl Kenitra_Université Ibnou Zohr Agadir_Université Mohammed Premier Oujda_Université Mohammed V Agdal/Rabat_Université Mohammed V Souissi/Rabat_Université Moulay Ismaïl Meknès_Université Quaraouiyine Fès_Université Sidi Mohammed Ben Abdellah Fès_Université Sultan My Slimane Beni Mellal_Faculté des Sciences Juridiques, Economiques et Sociales Tanger_Faculté des Lettres et des Sciences Humaines Tétouan_Faculté des Sciences Tétouan_Faculté des Sciences et Techniques Tanger_Ecole Nationale des Sciences Appliquées Tanger_Ecole Nationale des Sciences Appliquées Tétouan_Ecole Nationale de Commerce et de Gestion Tanger_Ecole Supérieure Roi Fahd de Traduction Tanger_Faculté polydisciplinaire -Tetouan_Faculté Polydisciplinaire Larache_Ecole Normale Supérieure Tétouan_Faculté des Sciences Juridiques, Economiques et Sociales Marrakech_Faculté des Lettres et des Sciences Humaines Marrakech_Faculté des Sciences As-Samlalia/Marrakech_Faculté des Sciences et Techniques Guéliz/Marrakech_Faculté de Médecine et de Pharmacie Marrakech_Ecole Nationale des Sciences Appliquées Marrakech_Ecole Nationale des Sciences Appliquees Safi_Ecole Nationale de Commerce et de Gestion Marrakech_Ecole Supérieure de Technologie Safi_Ecole Supérieure de Technologie Essaouira_Faculté polydisciplinaire - Safi_Faculté Polydisciplinaire Kalaat Sraghna_Ecole Normale Supérieure Marrakech_Faculté des Lettres et des Sciences Humaines El Jadida_Faculté des Sciences El Jadida_Ecole Nationale des Sciences Appliquées Eljadida_Ecole Nationale de Commerce et de Gestion El Jadida_Faculté polydisciplinaire - Eljadida_Faculté des Sciences Juridiques, Economiques et Sociales Settat_Faculté des Sciences et Techniques Settat_Ecole Nationale des Sciences Appliquées Khouribga_Ecole Nationale de Commerce et de Gestion Settat_Ecole supérieur de Technologie Berrechid_Faculté polydisciplinaire - Khouribga_Faculté des Sciences Juridiques, Economiques et Sociales Casablanca_Faculté des Lettres et des Sciences Humaines Aïn Chock/Casablanca_Faculté des Sciences Aïn Chock/Casablanca_Faculté de Médecine et de Pharmacie Casablanca_Faculté de Médecine Dentaire Casablanca_Ecole Nationale Supérieure d'Electricité et de Mécanique Casablanca_Ecole Supérieure de Technologie Casablanca_Ecole Normale Supérieure de casablanca_Faculté des Sciences Juridiques, Economiques et Sociales Mohammadia_Faculté des Sciences Juridiques, Economiques et Sociales Aïn Sebaa_Faculté des Lettres et des Sciences Humaines Ben M'Sick/Casablanca_Faculté des Lettres et des Sciences Humaines Mohammadia_Faculté des Sciences Ben M'Sick/Casablanca_Faculté des Sciences et Techniques Mohammadia_Ecole Nationale Supérieure des Arts et Métiers Casablanca_Ecole Nationale de Commerce et de Gestion Casablanca_Ecole Normale Supérieure de l'Enseignement Technique Mohammadia_Faculté des Sciences Juridiques, Economiques et Sociales Kenitra_Faculté des Lettres et des Sciences Humaines Kenitra_Faculté des Sciences Kenitra_Ecole Nationale des Sciences Appliquées de Kénitra_Ecole Nationale de Commerce et de Gestion Kenitra_Faculté des Sciences Juridiques, Economiques et Sociales Agadir_Faculté des Lettres et des Sciences Humaines Agadir_Faculté des Sciences Agadir_Ecole Nationale des Sciences Appliquées Agadir_Ecole Nationale de Commerce et de Gestion Agadir_Ecole Supérieure de Technologie Agadir_Ecole Supérieure de Technologie Guelmim_Faculté Polydisciplinaire Ouarzazate_Faculté Polydisciplinaire Taroudant_Faculté des Sciences Juridiques, Economiques et Sociales Oujda_Faculté des Lettres et des Sciences Humaines Oujda_Faculté des Sciences Oujda_Faculté de Médecine et de Pharmacie Oujda_Ecole Nationale des Sciences Appliquées Oujda_Ecole Nationale des Sciences Appliquées d'Al Hoceima_Ecole Nationale de Commerce et de Gestion Oujda_Ecole Supérieure de Technologie Oujda_Faculté Polydisciplinaire Nador_Faculté des Sciences Juridiques, Economiques et Sociales Agdal/Rabat_Faculté des Lettres et des Sciences Humaines Rabat_Faculté des Sciences Rabat_Ecole Mohammadia d'Ingénieurs Rabat_Ecole Supérieure de Technologie Salé_Institut Scientifique Rabat_Institut des Etudes Hispano- Lusophones_Ecole Normale Supérieure de Rabat_Faculté des Sciences Juridiques, Economiques et Sociales Souissi/Rabat_Faculté des Sciences Juridiques, Economiques et Sociales Salé_Faculté de Médecine et de Pharmacie Rabat_Faculté de Médecine Dentaire Rabat_Ecole Nationale Supérieure d'Informatique et d'Analyse des Systèmes Rabat_Faculté des Sciences de l'Education Rabat_Institut d'Etudes et de Recherches pour l'Arabisation Rabat_Institut des Etudes Africaines Rabat_Institut Universitaire de la Recherche Scientifique Rabat_Ecole Normale Supérieure de l'Enseignement Technique Rabat_Faculté des Sciences Juridiques, Economiques et Sociales Meknès_Faculté des Lettres et des Sciences Humaines Meknès_Faculté des Sciences Meknès_Faculté des Sciences et Techniques Errachidia_Ecole Nationale Supérieure des Arts et Métiers Meknès_Ecole Supérieure de Technologie Meknès_Faculté Polydisciplinaire Errachidia_Ecole Normale Supérieure de Meknès_Faculté Al-Charia Agadir_Faculté Al-Charia Fès_Faculté Al-Logha Al Arabia Marrakech_Faculté Ossol Ad-dine Tétouan_Faculté des Sciences Juridiques, Economiques et Sociales Fès_Faculté des Lettres et des Sciences Humaines Dhar El Mahraz/Fès_Faculté des Lettres et des Sciences Humaines Saïs/Fès_Faculté des Sciences Dhar El Mahraz/Fès_Faculté des Sciences et Techniques Saïs/Fès_Faculté de Médecine et de Pharmacie Fès_Ecole Nationale des Sciences Appliquées Fès_Ecole Nationale de Commerce et de Gestion Fès_Ecole Supérieure de Technologie Fès_Institut Des plantes Medicinales et Aromatiques Taounate_Faculté polydisciplinaire -Taza_Ecole Normale Supérieure Fès_Faculté des Lettres et des Sciences Humaines Beni Mellal_Faculté des Sciences et Techniques Beni Mellal_Faculté polydisciplinaire -Beni Mellal\".split('_'),
      
      cityData = \"Cape town_Johannesburg_Durban_Paarl_Kinshasa_Harare_Lubumbashi_Agadir Ida Outanane_Al Haouz_Al Houceima_Meknes_Aousserd_Assa Zag_Azilal_Beni Mellal_Benslimane_Berkane_Boujdour_Boulmane_Casablanca Anfa_Al fida_Mers Sultan_Ain Sebaa_Hay Mohammadi_Ain Chok_Hay Hassani_Ben Msik_Moulay R'chid_Sidi Otmane_Sidi Bernoussi_Chefchaouen_Chichaoua_Chtouka Ait Baha_El Hajeb_El Jadida_El Kelaa Des Sraghna_Errachidia_Essaouira_Es-smara_Fahs Anjra_Fès_Figuig_Guelmim_Ifrane_Inzegane Ait Melloul_Jerada_Kenitra_Khemisset_Khenifra_Khouribga_Laayoune_Larache_Marrakech_Mediouna_Mohammadia_Nador_Nouaceur_Oued Ed-dahab_Ouarzazate_Oujda Angad_Rabat_Safi_Salé_Sefrou_Settat_Sidi Kacem_Skhirate Temara_Tanger Assilah_Tantan_Taounate_Taourirt_Taroudant_Tata_Taza_Tetouan_M'diq Fnidaq_Tiznit_Zagoura_Moulay Yacoub_Berrechid_Driouch_Fkih ben salah_Guercif_Midelt_Ouezzane_Rehamna_Sidi bennour_Sidi ifni_Sidi slimane_Tarfaya_Tinghir_Youssoufia\".split('_');
  </script>

  ";
    }

    public function getTemplateName()
    {
        return "BenDoctorsBundle:Person:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  119 => 32,  115 => 31,  111 => 30,  105 => 27,  101 => 26,  97 => 25,  93 => 23,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<legend>Patient identity</legend>  
  
  {{ form_row(form.firstname, { 'label': 'Firstname'}) }}
  {{ form_row(form.familyname, { 'label': 'Surname'}) }}
  {{ form_row(form.birthday, { 'label': 'Date of birth'}) }}
  {{ form_row(form.birthcity, { 'label': 'Place of birth'}) }}
  {{ form_row(form.gender, { 'label': 'Sex'}) }}
  {{ form_row(form.contry, { 'label': 'Nationality'}) }}
  {{ form_row(form.cin, { 'label': 'ID'}) }}
  {{ form_row(form.cne, { 'label': 'FID'}) }}

<legend>General informations</legend>
  {{ form_row(form.university, { 'label': 'University'}) }}
  {{ form_row(form.etablissement, { 'label': 'High school'}) }}
  {{ form_row(form.resident, { 'label': 'Resident ?'}) }}
  {{ form_row(form.address, { 'label': 'Adress'}) }}
  {{ form_row(form.parentAddress, { 'label': 'Adress of parents'}) }}
  {{ form_row(form.city, { 'label': 'City'}) }}
  {{ form_row(form.gsm, { 'label': 'Cell'}) }}
  {{ form_row(form.email, { 'label': 'E-Mail'}) }}
  {{ form_row(form.cnsstype, { 'label': 'Medical insurance'})  }}
  {# {{ form_row(form.cnss, { 'label': 'N° de couverture sociale'})  }} #}

  <legend>Kin</legend>
  {{ form_row(form.parentName, { 'label': 'Full name'}) }}
  {{ form_row(form.parentGsm, { 'label': 'Office number'}) }}
  {{ form_row(form.parentFixe, { 'label': 'Home number'}) }}

  <legend>Handicap</legend>
  {{ form_row(form.ishandicap, { 'label': 'Disability ?'}) }}
  {{ form_row(form.handicap, { 'label': 'Nature of disability'}) }}
  {{ form_row(form.needs, { 'label': 'Needs'}) }}
  {{ form_rest(form) }} 
      

  <script type=\"text/javascript\">

      var universityData = \"Richfield Graduate Institute of Technology_University of Johannesburg_UNIKIN_Université Abdelmalek Essaâdi Tétouan_Université Cadi Ayyad Marrakech_Université Chouaïb Doukkali El Jadida_Université Hassan I Settat_Université Hassan II Aïn Chock/Casablanca_Université Hassan II Mohammadia_Université Ibn Tofaïl Kenitra_Université Ibnou Zohr Agadir_Université Mohammed Premier Oujda_Université Mohammed V Agdal/Rabat_Université Mohammed V Souissi/Rabat_Université Moulay Ismaïl Meknès_Université Quaraouiyine Fès_Université Sidi Mohammed Ben Abdellah Fès_Université Sultan My Slimane Beni Mellal_Faculté des Sciences Juridiques, Economiques et Sociales Tanger_Faculté des Lettres et des Sciences Humaines Tétouan_Faculté des Sciences Tétouan_Faculté des Sciences et Techniques Tanger_Ecole Nationale des Sciences Appliquées Tanger_Ecole Nationale des Sciences Appliquées Tétouan_Ecole Nationale de Commerce et de Gestion Tanger_Ecole Supérieure Roi Fahd de Traduction Tanger_Faculté polydisciplinaire -Tetouan_Faculté Polydisciplinaire Larache_Ecole Normale Supérieure Tétouan_Faculté des Sciences Juridiques, Economiques et Sociales Marrakech_Faculté des Lettres et des Sciences Humaines Marrakech_Faculté des Sciences As-Samlalia/Marrakech_Faculté des Sciences et Techniques Guéliz/Marrakech_Faculté de Médecine et de Pharmacie Marrakech_Ecole Nationale des Sciences Appliquées Marrakech_Ecole Nationale des Sciences Appliquees Safi_Ecole Nationale de Commerce et de Gestion Marrakech_Ecole Supérieure de Technologie Safi_Ecole Supérieure de Technologie Essaouira_Faculté polydisciplinaire - Safi_Faculté Polydisciplinaire Kalaat Sraghna_Ecole Normale Supérieure Marrakech_Faculté des Lettres et des Sciences Humaines El Jadida_Faculté des Sciences El Jadida_Ecole Nationale des Sciences Appliquées Eljadida_Ecole Nationale de Commerce et de Gestion El Jadida_Faculté polydisciplinaire - Eljadida_Faculté des Sciences Juridiques, Economiques et Sociales Settat_Faculté des Sciences et Techniques Settat_Ecole Nationale des Sciences Appliquées Khouribga_Ecole Nationale de Commerce et de Gestion Settat_Ecole supérieur de Technologie Berrechid_Faculté polydisciplinaire - Khouribga_Faculté des Sciences Juridiques, Economiques et Sociales Casablanca_Faculté des Lettres et des Sciences Humaines Aïn Chock/Casablanca_Faculté des Sciences Aïn Chock/Casablanca_Faculté de Médecine et de Pharmacie Casablanca_Faculté de Médecine Dentaire Casablanca_Ecole Nationale Supérieure d'Electricité et de Mécanique Casablanca_Ecole Supérieure de Technologie Casablanca_Ecole Normale Supérieure de casablanca_Faculté des Sciences Juridiques, Economiques et Sociales Mohammadia_Faculté des Sciences Juridiques, Economiques et Sociales Aïn Sebaa_Faculté des Lettres et des Sciences Humaines Ben M'Sick/Casablanca_Faculté des Lettres et des Sciences Humaines Mohammadia_Faculté des Sciences Ben M'Sick/Casablanca_Faculté des Sciences et Techniques Mohammadia_Ecole Nationale Supérieure des Arts et Métiers Casablanca_Ecole Nationale de Commerce et de Gestion Casablanca_Ecole Normale Supérieure de l'Enseignement Technique Mohammadia_Faculté des Sciences Juridiques, Economiques et Sociales Kenitra_Faculté des Lettres et des Sciences Humaines Kenitra_Faculté des Sciences Kenitra_Ecole Nationale des Sciences Appliquées de Kénitra_Ecole Nationale de Commerce et de Gestion Kenitra_Faculté des Sciences Juridiques, Economiques et Sociales Agadir_Faculté des Lettres et des Sciences Humaines Agadir_Faculté des Sciences Agadir_Ecole Nationale des Sciences Appliquées Agadir_Ecole Nationale de Commerce et de Gestion Agadir_Ecole Supérieure de Technologie Agadir_Ecole Supérieure de Technologie Guelmim_Faculté Polydisciplinaire Ouarzazate_Faculté Polydisciplinaire Taroudant_Faculté des Sciences Juridiques, Economiques et Sociales Oujda_Faculté des Lettres et des Sciences Humaines Oujda_Faculté des Sciences Oujda_Faculté de Médecine et de Pharmacie Oujda_Ecole Nationale des Sciences Appliquées Oujda_Ecole Nationale des Sciences Appliquées d'Al Hoceima_Ecole Nationale de Commerce et de Gestion Oujda_Ecole Supérieure de Technologie Oujda_Faculté Polydisciplinaire Nador_Faculté des Sciences Juridiques, Economiques et Sociales Agdal/Rabat_Faculté des Lettres et des Sciences Humaines Rabat_Faculté des Sciences Rabat_Ecole Mohammadia d'Ingénieurs Rabat_Ecole Supérieure de Technologie Salé_Institut Scientifique Rabat_Institut des Etudes Hispano- Lusophones_Ecole Normale Supérieure de Rabat_Faculté des Sciences Juridiques, Economiques et Sociales Souissi/Rabat_Faculté des Sciences Juridiques, Economiques et Sociales Salé_Faculté de Médecine et de Pharmacie Rabat_Faculté de Médecine Dentaire Rabat_Ecole Nationale Supérieure d'Informatique et d'Analyse des Systèmes Rabat_Faculté des Sciences de l'Education Rabat_Institut d'Etudes et de Recherches pour l'Arabisation Rabat_Institut des Etudes Africaines Rabat_Institut Universitaire de la Recherche Scientifique Rabat_Ecole Normale Supérieure de l'Enseignement Technique Rabat_Faculté des Sciences Juridiques, Economiques et Sociales Meknès_Faculté des Lettres et des Sciences Humaines Meknès_Faculté des Sciences Meknès_Faculté des Sciences et Techniques Errachidia_Ecole Nationale Supérieure des Arts et Métiers Meknès_Ecole Supérieure de Technologie Meknès_Faculté Polydisciplinaire Errachidia_Ecole Normale Supérieure de Meknès_Faculté Al-Charia Agadir_Faculté Al-Charia Fès_Faculté Al-Logha Al Arabia Marrakech_Faculté Ossol Ad-dine Tétouan_Faculté des Sciences Juridiques, Economiques et Sociales Fès_Faculté des Lettres et des Sciences Humaines Dhar El Mahraz/Fès_Faculté des Lettres et des Sciences Humaines Saïs/Fès_Faculté des Sciences Dhar El Mahraz/Fès_Faculté des Sciences et Techniques Saïs/Fès_Faculté de Médecine et de Pharmacie Fès_Ecole Nationale des Sciences Appliquées Fès_Ecole Nationale de Commerce et de Gestion Fès_Ecole Supérieure de Technologie Fès_Institut Des plantes Medicinales et Aromatiques Taounate_Faculté polydisciplinaire -Taza_Ecole Normale Supérieure Fès_Faculté des Lettres et des Sciences Humaines Beni Mellal_Faculté des Sciences et Techniques Beni Mellal_Faculté polydisciplinaire -Beni Mellal\".split('_'),
      
      cityData = \"Cape town_Johannesburg_Durban_Paarl_Kinshasa_Harare_Lubumbashi_Agadir Ida Outanane_Al Haouz_Al Houceima_Meknes_Aousserd_Assa Zag_Azilal_Beni Mellal_Benslimane_Berkane_Boujdour_Boulmane_Casablanca Anfa_Al fida_Mers Sultan_Ain Sebaa_Hay Mohammadi_Ain Chok_Hay Hassani_Ben Msik_Moulay R'chid_Sidi Otmane_Sidi Bernoussi_Chefchaouen_Chichaoua_Chtouka Ait Baha_El Hajeb_El Jadida_El Kelaa Des Sraghna_Errachidia_Essaouira_Es-smara_Fahs Anjra_Fès_Figuig_Guelmim_Ifrane_Inzegane Ait Melloul_Jerada_Kenitra_Khemisset_Khenifra_Khouribga_Laayoune_Larache_Marrakech_Mediouna_Mohammadia_Nador_Nouaceur_Oued Ed-dahab_Ouarzazate_Oujda Angad_Rabat_Safi_Salé_Sefrou_Settat_Sidi Kacem_Skhirate Temara_Tanger Assilah_Tantan_Taounate_Taourirt_Taroudant_Tata_Taza_Tetouan_M'diq Fnidaq_Tiznit_Zagoura_Moulay Yacoub_Berrechid_Driouch_Fkih ben salah_Guercif_Midelt_Ouezzane_Rehamna_Sidi bennour_Sidi ifni_Sidi slimane_Tarfaya_Tinghir_Youssoufia\".split('_');
  </script>

  ", "BenDoctorsBundle:Person:form.html.twig", "/home/pacifik/Desktop/Doctors-master/src/Ben/DoctorsBundle/Resources/views/Person/form.html.twig");
    }
}
